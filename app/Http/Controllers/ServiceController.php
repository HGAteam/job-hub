<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('theme-pages.services.index');
    }

    public function show()
    {
        return view('theme-pages.services.show');
    }
}
