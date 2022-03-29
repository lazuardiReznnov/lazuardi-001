<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();
        Post::factory(20)->create();
        Category::factory(5)->create();
    }
}
