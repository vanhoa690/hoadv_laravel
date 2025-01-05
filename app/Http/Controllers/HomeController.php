<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $title = "Homepage";
        $movies =  Movie::orderBy("id", "ASC")->latest()->get();
        $movies_trending =  Movie::whereHas('tags', function ($q) {
            $q->where('tag_id', 1);
        })->withCount('episodes')->take(9)->get();
        $movies_popular =  Movie::whereHas('tags', function ($q) {
            $q->where('tag_id', 2);
        })->withCount('episodes')->take(9)->get();
        // return response()->json($movies_trending);

        return view('pages.homepage', compact('title', 'movies', 'movies_trending', 'movies_popular'));
    }
}
