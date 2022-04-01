<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'ALL POST',
            'active' => 'blog',
            'posts' => Post::latest()
                ->filter(['search'])
                ->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'SINGLE POST',
            'active' => 'blog',
            'posts' => $post->load('category', 'user'),
        ]);
    }
}
