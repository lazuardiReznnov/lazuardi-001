<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Posts extends Model
// {
//     use HasFactory;
// }
class Posts
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
