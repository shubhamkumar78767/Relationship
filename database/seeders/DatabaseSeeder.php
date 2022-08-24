<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\User;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Contact::factory(10)->create();
        Post::factory(100)->create();
        Category::factory(10)->create();
        CategoryPost::factory(1000)->create();

    }
}
