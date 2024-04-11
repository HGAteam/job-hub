<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('theme-pages.products.index');
    }

    public function show()
    {
        return view('theme-pages.products.show');
    }
}
