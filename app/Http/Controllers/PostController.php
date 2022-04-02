<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in ' . $category->name;
        }
        if (request('username')) {
            $user = User::firstWhere('username', request('username'));
            $title = 'By ' . $user->name;
        }

        return view('posts', [
            'title' => 'ALL POST ' . $title,
            'active' => 'blog',
            'posts' => Post::latest()
                ->filter(request(['search', 'category', 'username']))
                ->paginate(7)
                ->withQueryString(),
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
