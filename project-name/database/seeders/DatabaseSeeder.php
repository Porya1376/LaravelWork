<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\NationalCode;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryPostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        NationalCode::factory(10)->create();
        CategoryPost::factory(10)->create();
    }
}
