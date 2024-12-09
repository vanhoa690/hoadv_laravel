<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(Request $request): View
    {
        $categories = [
            [
                "id" => 1,
                "title" => "Sen to Chihiro no Kamikakushi",
                "thumbnail" => "img/popular/popular-1.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 2,
                "title" => "Kizumonogatari III: Reiket su-hen",
                "thumbnail" => "img/popular/popular-2.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 3,
                "title" => "Shirogane Tamashii hen Kouhan sen",
                "thumbnail" => "img/popular/popular-3.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 4,
                "title" => "Rurouni Kenshin: Meiji Kenkaku Romantan",
                "thumbnail" => "img/popular/popular-4.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 5,
                "title" => "Mushishi Zoku Shou 2nd Season",
                "thumbnail" => "img/popular/popular-5.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 6,
                "title" => "Monogatari Series: Second Season",
                "thumbnail" => "img/popular/popular-6.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 7,
                "title" => "Great Teacher Onizuka",
                "thumbnail" => "img/recent/recent-1.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 8,
                "title" => "Fate/stay night Movie: Heaven's Feel - II. Lost",
                "thumbnail" => "img/recent/recent-2.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 9,
                "title" => "Mushishi Zoku Shou: Suzu no Shizuku",
                "thumbnail" => "img/recent/recent-3.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 10,
                "title" => "Fate/Zero 2nd Season",
                "thumbnail" => "img/recent/recent-4.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 11,
                "title" => "Kizumonogatari II: Nekket su-hen",
                "thumbnail" => "img/recent/recent-5.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 12,
                "title" => "The Seven Deadly Sins: Wrath of the Gods",
                "thumbnail" => "img/recent/recent-6.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 13,
                "title" => "The Seven Deadly Sins: Wrath of the Gods",
                "thumbnail" => "img/trending/trend-1.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 14,
                "title" => "Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien",
                "thumbnail" => "img/trending/trend-2.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],

            [
                "id" => 13,
                "title" => "Shingeki no Kyojin Season 3 Part 2",
                "thumbnail" => "img/trending/trend-3.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 13,
                "title" => "Fullmetal Alchemist: Brotherhood",
                "thumbnail" => "img/trending/trend-4.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 13,
                "title" => "Shiratorizawa Gakuen Koukou",
                "thumbnail" => "img/trending/trend-5.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],
            [
                "id" => 13,
                "title" => "Code Geass: Hangyaku no Lelouch R2",
                "thumbnail" => "img/trending/trend-6.jpg",
                "comments" => 11,
                "views" => 9141,
                "ep" => 18,
            ],



        ];

        return view('pages.categories.index', compact('categories'));
    }
}