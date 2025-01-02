<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $movies =  Movie::orderBy("id", "ASC")->latest()->get();
        return view('pages.homepage', compact('movies'));
    }
}
