<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::truncate();
        Blog::truncate();
        Category::truncate();

        $frontend = Category::create(["name" => "frontend-post","slug" => "frontend-post"]);
        $backend = Category::create(["name" => "backend-post","slug" => "backend-post"]);

        Blog::factory(2)->create(["category_id" =>$frontend->id]);
        Blog::factory(2)->create(["category_id" =>$backend->id]);
    }
}
