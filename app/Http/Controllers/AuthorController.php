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
            'author' => User::latest()->get(),
        ]);
    }
}
