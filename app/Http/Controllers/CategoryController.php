<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category/index', [
            'active' => 'blog',
            'title' => 'Post Categories',
            'categories' => Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('category', [
            'active' => 'blog',
            'title' => 'POST CATEGORY : ' . $category->name,
            'posts' => $category->post->load('user', 'category'),
            'category' => $category->name,
        ]);
    }
}
