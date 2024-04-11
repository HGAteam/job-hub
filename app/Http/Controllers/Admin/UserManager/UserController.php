<?php

namespace App\Http\Controllers\Admin\UserManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserInfo;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Hash;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy('name', 'ASC')->where('name','!=','Registered User')->get();
        $title = trans('User Management');
        return view('pages.dashboard.apps.user-manager.users.index', compact('title','roles'));
    }

    public function getUsers(Request $request)
    {
        if(auth()->user()->hasRole('System Admin')){
            $users_array = User::where('id', '!=', auth()->user()->id)->orderBy('id','asc')->get();
        }
        else
        {
            $users_array = User::where('id', '!=', auth()->user()->id)->where('role_id','!=',1)->orderBy('id','asc')->get();
        }

        $users = [];

        foreach ($users_array as $key => $user) {
            $data['id'] = $user->id;
            $data['name'] = $user->name;
            $data['slug'] = $user->slug;
            $data['email'] = $user->email;
            $data['role'] = trans($user->role->name);

            try {
                $data['last_login'] = $user->last_login_at->format('d M, Y H:i');

            } catch (\Throwable $th) {
                //throw $th;
            }


            $data['active'] = $user->active;

            try {
            $data['joined_date'] = $user->created_at->format('d M, Y H:i');

            } catch (\Throwable $th) {
                //throw $th;
            }

            $data['avatar'] = $user->avatar_url;
            $users[] = $data;
        }

        return Datatables::of($users)->make(true);
    }

    public function create(){
        $title = trans('Add User');
        return view('pages.dashboard.apps.user-manager.users.create',compact('title'));
    }

    public function store(Request $request)
    {
        $token = Str::random(60);
        $role = Role::where('name', $request->user_role)->first();

        // $validated = $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:50|unique:users',
        //     'user_role' => 'required',
        //     'password' => 'required'
        // ]);

            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->slug = Str::slug($request->first_name . '-' . $request->last_name);
            $user->email = $request->email;
            $user->role_id = $role->id;
            $user->two_step = 0;
            $user->active = 1;
            $user->password = Hash::make($request->password);
            $user->api_token = Hash::make($token);
            $user->save();

            $user->assignRole($request->role);

            $info = new UserInfo();
            $info->user_id = $user->id;

                // include to save avatar
                if ($avatar = $this->upload()) {
                    $info->avatar = $avatar;
                }

            $info->phone = $request->phone;
            $info->save();
    }
    public function show($slug)
    {
        $user = User::where('slug', $slug)->first();
        $info = UserInfo::find($user->id);
        return view('pages.dashboard.apps.user-manager.users.account.overview.overview',compact('user', 'info')
        );
    }

    public function edit($slug)
    {
        $user = User::where('slug', $slug)->first();
        $info = UserInfo::find($user->id);
        return view('pages.dashboard.apps.user-manager.users.account.settings.settings',compact('user', 'info'));
    }

    public function update(Request $request,$slug)
    {
        $user = User::where('slug', $slug)->first();
        $newSlug = Str::slug($request->first_name.'-'.$request->last_name);
        $role = Role::where('name',$request->role)->first();
        // save user name
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'  => 'required|email|max:255',
            'phone'  => 'required|string|max:255',
        ]);

        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->slug = $newSlug;
        $user->role_id = $role->id;

        $user->update($validated);
        $user->syncRoles($role);
        // save on user info
        $info = UserInfo::find($user->id);

        $info->phone = $request->phone;
        // attach this info to the current user
        $info->user()->associate($user);


        // include to save avatar
        if ($avatar = $this->upload()) {
            $info->avatar = $avatar;
        }

        if ($request->boolean('avatar_remove')) {
            Storage::delete($info->avatar);
            $info->avatar = null;
        }

        $info->save();
        return response()->json(['route' => '/user-manager/profile/settings/'.$newSlug]);
    }
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
    }

    public function upload($folder = '/multimedia/uploads/avatars', $key = 'avatar', $validation = 'image|mimes:jpeg,jpg|max:2204800|sometimes')
    {
        request()->validate([$key => $validation]);

        $file = null;

        if (request()->hasFile($key)) {
            $file = Storage::disk('public')->putFile(
                $folder,
                request()->file($key),
                'public'
            );
        }

        return $file;
    }

    public function exportUsers(Request $request)
    {
        $users = User::all(); // Obtén todos los usuarios desde la base de datos

        $csvFileName = 'users.csv'; // Nombre del archivo CSV a generar
        $output = fopen('php://output', 'w'); // Abre la salida como un archivo CSV

        // Encabezados del archivo CSV
        $headers = ['ID', 'Nombre', 'Correo Electrónico'];
        fputcsv($output, $headers);

        // Agregar los datos de los usuarios al archivo CSV
        foreach ($users as $user) {
            $userData = [
                $user->id,
                $user->name,
                $user->email,
            ];
            fputcsv($output, $userData);
        }

        fclose($output); // Cierra el archivo CSV

        // Define las cabeceras de respuesta para el navegador
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$csvFileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        // Crea una respuesta con el contenido del archivo CSV y las cabeceras
        $response = Response::make(file_get_contents('php://output'), 200, $headers);
        return $response;
    }
}
