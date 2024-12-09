<?php

namespace Database\Seeders;

use App\Models\Category;
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

        Category::factory(18)->sequence(
            [
                "title" => "Sen to Chihiro no Kamikakushi",
                "thumbnail" => "img/popular/popular-1.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Kizumonogatari III: Reiket su-hen",
                "thumbnail" => "img/popular/popular-2.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Shirogane Tamashii hen Kouhan sen",
                "thumbnail" => "img/popular/popular-3.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Rurouni Kenshin: Meiji Kenkaku Romantan",
                "thumbnail" => "img/popular/popular-4.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Mushishi Zoku Shou 2nd Season",
                "thumbnail" => "img/popular/popular-5.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Monogatari Series: Second Season",
                "thumbnail" => "img/popular/popular-6.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Great Teacher Onizuka",
                "thumbnail" => "img/recent/recent-1.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Fate/stay night Movie: Heaven's Feel - II. Lost",
                "thumbnail" => "img/recent/recent-2.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Mushishi Zoku Shou: Suzu no Shizuku",
                "thumbnail" => "img/recent/recent-3.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Fate/Zero 2nd Season",
                "thumbnail" => "img/recent/recent-4.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Kizumonogatari II: Nekket su-hen",
                "thumbnail" => "img/recent/recent-5.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "The Seven Deadly Sins: Wrath of the Gods",
                "thumbnail" => "img/recent/recent-6.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "The Seven Deadly Sins: Wrath of the Gods",
                "thumbnail" => "img/trending/trend-1.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien",
                "thumbnail" => "img/trending/trend-2.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],

            [
                "title" => "Shingeki no Kyojin Season 3 Part 2",
                "thumbnail" => "img/trending/trend-3.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Fullmetal Alchemist: Brotherhood",
                "thumbnail" => "img/trending/trend-4.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Shiratorizawa Gakuen Koukou",
                "thumbnail" => "img/trending/trend-5.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "title" => "Code Geass: Hangyaku no Lelouch R2",
                "thumbnail" => "img/trending/trend-6.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
        )->create();
    }
}
