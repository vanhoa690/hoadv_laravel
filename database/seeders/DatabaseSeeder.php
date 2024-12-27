<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Episode;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieTag;
use App\Models\Tag;
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

        $genres = Genre::factory(5)->sequence(
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
        $tags = Tag::factory(5)->sequence(
            [
                "name" => "phimhai1",
            ],
            [
                "name" => "phimhai2",
            ],
            [
                "name" => "phimhai3",
            ],
            [
                "name" => "phimhai4",
            ],
            [
                "name" => "phimhai5",
            ]
        )->create();
        Movie::factory(5)->sequence(
            [
                "title" => "Phim Tình cảm 1",
                "thumbnail" => "thumbnails/movies/example1-300x300.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Phim ca nhạc 2",
                "thumbnail" => "thumbnails/movies/example1-300x300.jpg",
                "category_id" => 2,
            ],
            [
                "title" => "Phim siêu anh hùng 3",
                "thumbnail" => "thumbnails/movies/example1-300x300.jpg",
                "category_id" => 3,
            ],
            [
                "title" => "Phim sử thi 4",
                "thumbnail" => "thumbnails/movies/example1-300x300.jpg",
                "category_id" => 4,
            ],
            [
                "title" => "Phim tiểu sử 5",
                "thumbnail" => "thumbnails/movies/example1-300x300.jpg",
                "category_id" => 5,
            ]
        )->hasAttached($genres)->hasAttached($tags)->create();
        Episode::factory(5)->sequence(
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/watch?v=tzyQraH6W_8",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/watch?v=tzyQraH6W_8",
                "movie_id" => 2,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/watch?v=tzyQraH6W_8",
                "movie_id" => 3,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/watch?v=tzyQraH6W_8",
                "movie_id" => 4,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/watch?v=tzyQraH6W_8",
                "movie_id" => 5,
            ]
        )->create();
    }
}
