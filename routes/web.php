<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/category', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->post,
        'category' => $category->name,
    ]);
});
Route::get('/authors', [AuthorController::class, 'index']);

Route::get('/author/{user:username}', function (User $user) {
    return view('posts', [
        'title' => 'User Post',
        'posts' => $user->post,
    ]);
});
