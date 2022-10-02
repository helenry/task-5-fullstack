<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(5)->create();
        Article::factory(20)->create();

        // Category
        Category::create([
            "name" => "Study",
            "slug" => "study"
        ]);

        Category::create([
            "name" => "Work",
            "slug" => "work"
        ]);

        Category::create([
            "name" => "Relax",
            "slug" => "relax"
        ]);
    }
}
