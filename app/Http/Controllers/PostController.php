<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'POSTS',
            'posts' => Posts::all(),
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            'title' => 'SINGLE POST',
            'posts' => Posts::find($slug),
        ]);
    }
}
