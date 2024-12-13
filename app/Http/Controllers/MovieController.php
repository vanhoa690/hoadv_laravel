<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies =  Movie::latest()->get();
        return view('pages.movies.list', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories =  Category::latest()->get();
        $genres =  Genre::latest()->get();
        return view("pages.movies.create", compact('categories', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie = $request->all();

        if ($request->hasFile('thumbnail')) {
            $filePath = Storage::disk('public')->put('thumbnails/', request()->file('thumbnail'));
            $movie['thumbnail'] = $filePath;
        }

        Movie::create($movie);
        return redirect()->route('movies.index')->with('status', 'Movie Has Been inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie =  Movie::find($id);
        return view("pages.movies.edit", compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie =  Movie::find($id);
        $categories =  Category::latest()->get();
        $genres =  Genre::latest()->get();
        return view("pages.movies.edit", compact('movie', 'categories', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::find($id);
        $movieUpdate = $request->all();

        if ($request->hasFile('thumbnail')) {
            if (isset($movie->thumbnail)) {
                Storage::disk('public')->delete($movie->thumbnail);
            }
            $filePath = Storage::disk('public')->put('thumbnails/', request()->file('thumbnail'));
            $movieUpdate['thumbnail'] = $filePath;
        }

        $movie->update($movieUpdate);
        return redirect()->route('movies.index')->with('status', value: 'Movie Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie =  Movie::find($id);
        if (isset($movie->thumbnail)) {
            Storage::disk('public')->delete($movie->thumbnail);
        }
        $movie->delete();
        return redirect()->route('movies.index')->with('status', 'Movie Deleted');
    }
}
