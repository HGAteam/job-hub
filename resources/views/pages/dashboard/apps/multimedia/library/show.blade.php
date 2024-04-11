<x-base-layout>
    <div class="container">
        <h1>Contenido de la carpeta</h1>

        <h2>Imágenes</h2>
        <div class="row">
            @foreach ($images as $image)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <img src="{{ asset($image) }}" alt="Imagen">
                </div>
            @endforeach
        </div>

        <h2>Carpetas</h2>
        <ul>
            @foreach ($folders as $folder)
                <li>{{ $folder }}</li>
            @endforeach
        </ul>
    </div>
</x-base-layout>
