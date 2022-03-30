<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function index()
    {
        return view('author', [
            'title' => 'Daftar Author',
            'authors' => User::latest()->get(),
        ]);
    }

    public function show(User $user)
    {
        return view('posts', [
            'title' => 'User Post',
            'posts' => $user->post->load('category', 'user'),
        ]);
    }
}
