<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Post::create([
            'title' => 'Introduction to PHP',
            'author' => 'John Doe',
            'slug' => 'introduction-to-php',
            'body' => 'PHP is a popular general-purpose scripting language that is especially suited to web development.',
        ]);

        Post::create([
            'title' => 'Getting Started with Laravel',
            'author' => 'Jane Smith',
            'slug' => 'getting-started-with-laravel',
            'body' => 'Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.',
        ]);

        Post::create([
            'title' => 'Understanding MVC Architecture',
            'author' => 'Alice Johnson',
            'slug' => 'understanding-mvc-architecture',
            'body' => 'MVC stands for Model-View-Controller. It is a software design pattern commonly used for developing user interfaces that divides the related program logic into three interconnected elements.',
        ]);

        Post::create([
            'title' => 'Database Migrations in Laravel',
            'author' => 'Bob Brown',
            'slug' => 'database-migrations-in-laravel',
            'body' => 'Migrations are like version control for your database, allowing your team to define and share the application\'s database schema definition.',
        ]);

        Post::create([
            'title' => 'Building RESTful APIs with Laravel',
            'author' => 'Charlie Davis',
            'slug' => 'building-restful-apis-with-laravel',
            'body' => 'Laravel is a great framework for building RESTful APIs. It provides a lot of tools and features out of the box to help you build robust APIs quickly and efficiently.',
        ]);
    }
}
