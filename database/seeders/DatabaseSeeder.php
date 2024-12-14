<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Movie;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::factory(10)->create();
        Category::factory(5)->sequence(
            [
                "name" => "Phim Hài",
            ],
            [
                "name" => "Phim khoa học viễn tưởng",
            ],
            [
                "name" => "Phim kinh dị",
            ],
            [
                "name" => "Phim Viễn Tây",
            ],
            [
                "name" => "Phim Chiến tranh",
            ]
        )->create();
        // Genre::factory(10)->create();
        Genre::factory(5)->sequence(
            [
                "name" => "Phim Tình cảm",
            ],
            [
                "name" => "Phim ca nhạc",
            ],
            [
                "name" => "Phim siêu anh hùng",
            ],
            [
                "name" => "Phim sử thi",
            ],
            [
                "name" => "Phim tiểu sử",
            ]
        )->create();
        Movie::factory(5)->sequence(
            [
                "title" => "Phim Tình cảm 001",
                "thumbnail" => "thumbnails/movies/example1-300x300.jpg",
                "category_id" => 1,
                "genre_id" => 1,
            ],
            [
                "title" => "Phim ca nhạc 001",
                "thumbnail" => "thumbnails/movies/example1-300x300.jpg",
                "category_id" => 2,
                "genre_id" => 2,
            ],
            [
                "title" => "Phim siêu anh hùng 003",
                "thumbnail" => "thumbnails/movies/example1-300x300.jpg",
                "category_id" => 3,
                "genre_id" => 3,
            ],
            [
                "title" => "Phim sử thi 004",
                "thumbnail" => "thumbnails/movies/example1-300x300.jpg",
                "category_id" => 4,
                "genre_id" => 4,
            ],
            [
                "title" => "Phim tiểu sử 005",
                "thumbnail" => "thumbnails/movies/example1-300x300.jpg",
                "category_id" => 5,
                "genre_id" => 5,
            ]
        )->create();
    }
}
