<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Episode;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

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

        $genres = Genre::factory(2)->sequence(
            [
                "name" => "Active",
            ],
            [
                "name" => "Movie",
            ],
        )->create();
        $tags = Tag::factory(4)->sequence(
            [
                "name" => "trending",
            ],
            [
                "name" => "popular",
            ],
            [
                "name" => "recent",
            ],
            [
                "name" => "live",
            ],
        )->create();
        Movie::factory(50)->sequence(
            [
                "title" => "Hành Trình Từ Kẻ Ngốc Trở Thành Tỷ Phú",
                "thumbnail" => "storage/thumbnails/movies/movie_1.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Đảo Hải Tặc - One Piece",
                "thumbnail" => "storage/thumbnails/movies/movie_2.jpg",
                "category_id" => 2,
            ],
            [
                "title" => "One Punch Man",
                "thumbnail" => "storage/thumbnails/movies/movie_3.jpg",
                "category_id" => 3,
            ],
            [
                "title" => "7 Viên Ngọc Rồng",
                "thumbnail" => "storage/thumbnails/movies/movie_4.jpg",
                "category_id" => 4,
            ],
            [
                "title" => "Naruto",
                "thumbnail" => "storage/thumbnails/movies/movie_5.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Dr. Stone",
                "thumbnail" => "storage/thumbnails/movies/movie_6.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Boruto",
                "thumbnail" => "storage/thumbnails/movies/movie_7.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Thanh Gươm Diệt Quỷ - Kimetsu no Yaiba",
                "thumbnail" => "storage/thumbnails/movies/movie_8.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Đại Chiến Người Khổng Lồ Titan",
                "thumbnail" => "storage/thumbnails/movies/movie_9.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Death Note",
                "thumbnail" => "storage/thumbnails/movies/movie_10.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Đại Xà Tu Tiên",
                "thumbnail" => "storage/thumbnails/movies/movie_11.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Chuyển Sinh Thành Goblin",
                "thumbnail" => "storage/thumbnails/movies/movie_12.jpg",
                "category_id" => 5,
            ],
            [
                "title" => "Chàng Rể Mạnh Nhất Lịch Sử",
                "thumbnail" => "storage/thumbnails/movies/movie_13.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Đại Quản Gia Là Ma Hoàng",
                "thumbnail" => "storage/thumbnails/movies/movie_14.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Phàm Nhân Tu Tiên",
                "thumbnail" => "storage/thumbnails/movies/movie_15.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Thôn Phệ Tinh Không",
                "thumbnail" => "storage/thumbnails/movies/movie_16.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Tinh Thần Biến",
                "thumbnail" => "storage/thumbnails/movies/movie_17.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Thế giới hoàn mỹ",
                "thumbnail" => "storage/thumbnails/movies/movie_18.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Vũ Động Càn Khôn",
                "thumbnail" => "storage/thumbnails/movies/movie_19.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Đấu La Đại Lục",
                "thumbnail" => "storage/thumbnails/movies/movie_20.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Nhất Niệm Vĩnh Hằng",
                "thumbnail" => "storage/thumbnails/movies/movie_21.jpg",
                "category_id" => 1,
            ],
            [
                "title" => "Tru Tiên",
                "thumbnail" => "storage/thumbnails/movies/movie_22.jpg",
                "category_id" => 1,
            ],
        )->hasAttached($genres)->hasAttached($tags)->create();
        Episode::factory(30)->sequence(
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/7rZFk4yw46E",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 02",
                "link" => "https://www.youtube.com/embed/9jd6MrN7sCc",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 03",
                "link" => "https://www.youtube.com/embed/I84uwuVQ7LA",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 04",
                "link" => "https://www.youtube.com/embed/Te76ZYZwlYE",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 05",
                "link" => "https://www.youtube.com/embed/e5DlnwDnJsw",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 06",
                "link" => "https://www.youtube.com/embed/EoaPJnK6U7Y",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 07",
                "link" => "https://www.youtube.com/embed/FlldNOkRNIs",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 08",
                "link" => "https://www.youtube.com/embed/jBM_glqzAwQ",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 09",
                "link" => "https://www.youtube.com/embed/d3Uyjq0BOkE",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 10",
                "link" => "https://www.youtube.com/embed/xSxCUnRjCZU",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 11",
                "link" => "https://www.youtube.com/embed/qd_u1gZEr80",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 12",
                "link" => "https://www.youtube.com/embed/w9pixBTS_dM",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 13",
                "link" => "https://www.youtube.com/embed/-Ds1OE_E5is",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 14",
                "link" => "https://www.youtube.com/embed/agQePs32w5Q",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 15",
                "link" => "https://www.youtube.com/embed/DJ5TstJC3ss",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 16",
                "link" => "https://www.youtube.com/embed/R8ThZCd7Pdo",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 17",
                "link" => "https://www.youtube.com/embed/IjUd5b2iYcE",
                "movie_id" => 1,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/jp8o_6ELNbw",
                "movie_id" => 2,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/EGcc_7ZfetY",
                "movie_id" => 3,
            ],
            [
                "title" => "Tập 02",
                "link" => "https://www.youtube.com/embed/c4LLY5VE8U4",
                "movie_id" => 3,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/lGkwo3xYfLw",
                "movie_id" => 4,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/Itz_80gMavk",
                "movie_id" => 5,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/dnjKNmn9cyg",
                "movie_id" => 6,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/wChwAJEQwFY",
                "movie_id" => 7,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/yYO2ayQmuHs",
                "movie_id" => 9,
            ],
            [
                "title" => "Tập 01",
                "link" => "https://www.youtube.com/embed/yYO2ayQmuHs",
                "movie_id" => 10,
            ]
        )->create();
    }
}
