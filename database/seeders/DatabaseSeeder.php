<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Episode;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Tag;
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
                "name" => "Phim Hoạt Hình",
            ],
            [
                "name" => "Phim Chuyển Sinh",
            ],
            [
                "name" => "Phim Chuyển Thể",
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
        Movie::factory(50)->sequence(
            [
                "title" => "Hành Trình Từ Kẻ Ngốc Trở Thành Tỷ Phú",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Đảo Hải Tặc - One Piece",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 2,
            ],
            [
                "title" => "One Punch Man",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 3,
            ],
            [
                "title" => "7 Viên Ngọc Rồng",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 4,
            ],
            [
                "title" => "Naruto",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Dr. Stone",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Boruto",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Thanh Gươm Diệt Quỷ - Kimetsu no Yaiba",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Đại Chiến Người Khủng Lồ Titan",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Death Note",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Đại Xà Tu Tiên",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Chuyển Sinh Thành Goblin",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Chàng Rể Mạnh Nhất Lịch Sử",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Đại Quản Gia Là Ma Hoàng",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Naruto",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Phàm Nhân Tu Tiên",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Thôn Phệ Tinh Không",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Tinh Thần Biến",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Thế giới hoàn mỹ",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Vũ Động Càn Khôn",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Đấu La Đại Lục",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Nhất Niệm Vĩnh Hằng",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Tru Tiên",
                "thumbnail" => "storage/thumbnails/movies/anime.jpg",
                "category_id" => 1,
            ],
        )->hasAttached($genres)->hasAttached($tags)->create();
        Episode::factory(5)->sequence(
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/yYO2ayQmuHs",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/yYO2ayQmuHs",
                "movie_id" => 2,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/yYO2ayQmuHs",
                "movie_id" => 3,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/yYO2ayQmuHs",
                "movie_id" => 4,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/yYO2ayQmuHs",
                "movie_id" => 5,
            ]
        )->create();
    }
}
