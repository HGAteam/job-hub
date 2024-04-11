<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Setting;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('Blog');
        $posts = Post::where('type', 'Basic Post')->where('status', '!=', 'Paused')->where('status', '!=', 'Draft')->paginate(10);
        return view('theme-pages.blog.index', compact('posts','title'));
    }
    public function show()
    {
        $title = trans('Something');
        // $posts = Post::where('type', 'Basic Post')->where('status', '!=', 'Paused')->where('status', '!=', 'Draft')->paginate(10);
        return view('theme-pages.blog.show', compact('posts','title'));
    }
}
