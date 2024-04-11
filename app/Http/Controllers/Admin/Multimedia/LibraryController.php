<?php

namespace App\Http\Controllers\Admin\Multimedia;

use App\Http\Controllers\Controller;
use App\Models\Multimedia;
use Auth;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use illuminate\Support\Str;
class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directoryPath = public_path() . '/multimedia/uploads/';

        // Verificar si el directorio existe
        if (File::exists($directoryPath) && File::isDirectory($directoryPath)) {
            // Obtener la lista de carpetas dentro del directorio
            $folders = File::directories($directoryPath);

            // Obtener solo los nombres de las carpetas (sin la ruta completa)
            $folderNames = array_map('basename', $folders);
        } else {
            // Si el directorio no existe o no es un directorio válido, inicializamos el array con un valor vacío
            $folderNames = [];
        }

        // Compactar y enviar la variable $folderNames a la vista
        return view('pages.dashboard.apps.multimedia.library.index', compact('folderNames'));
    }

    public function create()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        $disk = null;
        if (Str::contains($userAgent, 'Win')) {
            $disk = 'C:'; // Puedes cambiar esto al nombre del disco que quieras obtener
        } elseif (Str::contains($userAgent, 'Mac')) {
            $disk = '/';
        } elseif (Str::contains($userAgent, 'Linux')) {
            $disk = '/dev/sda';
        }

        // Obtener el espacio disponible en el disco especificado (por defecto, el disco "local")
        $freeSpaceInBytes = disk_free_space($disk);
        $totalSpaceInBytes = disk_total_space($disk);

        // Convertir el espacio disponible y utilizado a GB
        $freeSpaceInGB = round($freeSpaceInBytes / (1024 * 1024 * 1024), 2);
        $usedSpaceInGB = round(($totalSpaceInBytes - $freeSpaceInBytes) / (1024 * 1024 * 1024), 2);

        return view('pages.dashboard.apps.multimedia.library.create', compact('freeSpaceInGB', 'usedSpaceInGB'));
    }

    public function getFiles()
    {
        $files = Multimedia::all();

        $uploads = [];

        foreach($files as $file){
            $data['id'] = $file->id;
            $data['name'] = $file->name;
            $data['user_name'] = $file->user->name;
            $data['user_role'] = $file->user->role->name;
            $data['url'] = $file->url;
            $data['type'] = Str::before($file->type,'/');
            $data['size'] = $file->size;
            $data['dimensions'] = $file->dimensions;
            $data['extension'] = Str::after('/', $file->type);
            // $data['updated_at'] = $file->updated_at;
            $data['created_at'] = $file->created_at->format('d M, Y H:i');
            $data['updated_at'] = $file->updated_at->format('d M, Y H:i');
            $uploads[] = $data;
        }

        return DataTables::of($uploads)->make(true);
    }

    public function store(Request $request)
    {
        // Verificar si se enviaron archivos en la solicitud
        if ($request->hasFile('file')) {
            // Obtener los archivos enviados en la solicitud
            $files = $request->file('file');

            // Generar la ruta de almacenamiento basada en la fecha actual
            $currentDate = Carbon::now();
            $folderName = Str::lower($currentDate->format('F_Y')); // Ejemplo: July_2023
            $folderPath = public_path() . '/multimedia/uploads/' . $folderName;

            // Verificar si la carpeta ya existe o no
            if (!File::exists($folderPath)) {
                // Si no existe, crear la carpeta de manera recursiva
                File::makeDirectory($folderPath, 0755, true);
            }

            $uploadedFiles = [];

            foreach ($files as $file) {
                // Obtener el nombre del archivo sin la extensión
                $originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                // Obtener la extensión del archivo
                $extension = $file->getClientOriginalExtension();
                // Concatenar el nombre y la extensión para obtener el nombre completo del archivo
                $fileNameWithExtension = $originalFileName . '.' . $extension;

                // Verificar si el nombre del archivo ya existe en la base de datos
                $counter = 1;
                $fileNameToStore = $fileNameWithExtension;
                while (Multimedia::where('name', $fileNameToStore)->exists()) {
                    // Si el nombre existe, agregar un sufijo con un número secuencial
                    $fileNameToStore = $originalFileName . '_' . $counter . '.' . $extension;
                    $counter++;
                }

                // Mover el archivo a la carpeta de destino
                $file->move($folderPath, $fileNameToStore);

                $url = '/multimedia/uploads/' . $folderName . '/' . $fileNameWithExtension;

               // Obtener información adicional del archivo
               $dimensions = null;
               if (strpos($file->getClientMimeType(), 'image') === 0) {
                   list($width, $height) = getimagesize(public_path($url));
                   $dimensions = $width . 'x' . $height;
                }

                $data = [
                    'name' => $fileNameToStore,
                    'url' => $url,
                    'type' => $file->getClientMimeType(),
                    'size' => filesize(public_path($url)),
                    'dimensions' => $dimensions,
                ];
                // Agregar los datos a la lista de archivos subidos
                $uploadedFiles[] = $data;
            }

            // Crear registros en la tabla multimedia
            foreach ($uploadedFiles as $fileData) {
                Multimedia::create([
                    'user_id' => Auth::user()->id, // Reemplaza esto con la lógica para obtener el ID del usuario actual
                    'name' => $fileData['name'],
                    'url' => $fileData['url'],
                    'type' => $fileData['type'],
                    'size' => $fileData['size'],
                    'dimensions' => $fileData['dimensions'],
                ]);
            }
            // Retornar una respuesta adecuada, por ejemplo:
            return response()->json(['message' => 'Archivos almacenados correctamente']);
        }
        // Si no se envió ningún archivo, retornar un error adecuado
        return response()->json(['error' => 'No se encontró ningún archivo en la solicitud'], 400);
    }

    public function destroy($id){
       $file = Multimedia::find($id);
       $fileToDelete = $file->name;
       $urlFile = $file->url;

        // eliminar el archivo
        if (substr($fileToDelete, 0, 4) === 'http') {
            $deleted = true;
        } else {
            $fullPath = public_path() . $urlFile;
            $deleted = File::delete($fullPath);
        }

        // eliminar el registro de la img en la bd
        if ($deleted) {
            $file->delete();
        }
    }
}
