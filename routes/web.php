<?php

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

Route::get('/', function () {
    return view('home', [
        'title' => 'HOME',
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            'title' => 'Judul Satu',
            'slug' => 'judul-Satu',
            'author' => 'Author 1',
            'body' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ea quos fugit enim magni doloremque nobis ipsum modi! Nostrum reiciendis illo ratione facilis provident reprehenderit ea sapiente autem quibusdam eos voluptatem quam, hic vel natus aliquid id itaque! Voluptates illum minima repudiandae consequuntur molestias id inventore fugiat voluptate aut blanditiis voluptas reprehenderit similique dolor, dignissimos accusantium ut magnam iure consequatur. Voluptatem vitae consequuntur odio nesciunt atque, officia aperiam! Quam, cum. Facilis, eum hic voluptates quam beatae corporis minus odio ratione.',
        ],
        [
            'title' => 'Judul Dua',
            'slug' => 'judul-dua',
            'author' => 'Author 2',
            'body' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ea quos fugit enim magni doloremque nobis ipsum modi! Nostrum reiciendis illo ratione facilis provident reprehenderit ea sapiente autem quibusdam eos voluptatem quam, hic vel natus aliquid id itaque! Voluptates illum minima repudiandae consequuntur molestias id inventore fugiat voluptate aut blanditiis voluptas reprehenderit similique dolor, dignissimos accusantium ut magnam iure consequatur. Voluptatem vitae consequuntur odio nesciunt atque, officia aperiam! Quam,',
        ],
    ];

    return view('posts', [
        'title' => 'POSTS',
        'posts' => $blog_post,
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'ABOUT',
        'name' => 'Mohamad Lazuardi Noor',
        'email' => 'lazuardi.reznnov@gmail.com',
    ]);
});
Route::get('post/{slug}', function ($slug) {
    $blog_post = [
        [
            'title' => 'Judul Satu',
            'slug' => 'judul-Satu',
            'author' => 'Author 1',
            'body' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ea quos fugit enim magni doloremque nobis ipsum modi! Nostrum reiciendis illo ratione facilis provident reprehenderit ea sapiente autem quibusdam eos voluptatem quam, hic vel natus aliquid id itaque! Voluptates illum minima repudiandae consequuntur molestias id inventore fugiat voluptate aut blanditiis voluptas reprehenderit similique dolor, dignissimos accusantium ut magnam iure consequatur. Voluptatem vitae consequuntur odio nesciunt atque, officia aperiam! Quam, cum. Facilis, eum hic voluptates quam beatae corporis minus odio ratione.',
        ],
        [
            'title' => 'Judul Dua',
            'slug' => 'judul-dua',
            'author' => 'Author 2',
            'body' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ea quos fugit enim magni doloremque nobis ipsum modi! Nostrum reiciendis illo ratione facilis provident reprehenderit ea sapiente autem quibusdam eos voluptatem quam, hic vel natus aliquid id itaque! Voluptates illum minima repudiandae consequuntur molestias id inventore fugiat voluptate aut blanditiis voluptas reprehenderit similique dolor, dignissimos accusantium ut magnam iure consequatur. Voluptatem vitae consequuntur odio nesciunt atque, officia aperiam! Quam,',
        ],
    ];

    foreach ($blog_post as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'SINGLE POST',
        'posts' => $new_post,
    ]);
});
