<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['user', 'category'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query
        //         ->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('title', 'like', '%' . $filters['search'] . '%');
        // }

        // $query->when($filters['search'] ?? false, function ($query, $search) {
        //     return $query
        //         ->where('title', 'like', '%' . $search . '%')
        //         ->orWhere('body', 'like', '%' . $search . '%');
        // });

        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) => $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
        );

        // $query->when($filters['category'] ?? false, function (
        //     $query,
        //     $category
        // ) {
        //     return $query->whereHas('category', function ($query) use (
        //         $category
        //     ) {
        //         $query->where('slug', $category);
        //     });
        // });
        $query->when(
            $filters['category'] ?? false,
            fn($query, $category) => $query->whereHas(
                'category',
                fn($query) => $query->where('slug', $category)
            )
        );
        $query->when(
            $filters['username'] ?? false,
            fn($query, $username) => $query->whereHas(
                'user',
                fn($query) => $query->where('username', $username)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
