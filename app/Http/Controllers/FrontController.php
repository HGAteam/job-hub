<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Setting;
use App\Core\Templates\Theme;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theme = new Theme(); // Crear una instancia de la clase Theme
        $activeTheme = $theme->getActiveTheme(); // Obtener el nombre del tema activo
        // return dd($activeTheme->slug);
        // Cargar la vista correspondiente al tema activo
        return view('pages.theme.' . $activeTheme['slug'] . '.welcome');
    }
    public function whoAreWe()
    {
        return view('theme-pages.who-are-we');
    }
}
