<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Config;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ThemeController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.apps.theme.index');
    }

    public function getThemes(){
        $themes = Config::get('theme.skeleton.themes');
        // dd($themes);
        return new JsonResponse(['themes' => $themes]);
    }
    // public function getTranslations(){
    //     if(Config::get('app.locale') == 'en'){
    //     }else{
    //     }
    // }
}
