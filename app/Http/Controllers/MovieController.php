<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $movie_id = $request->query("movie_id");
        $movies = $movie_id  ?  Movie::where('id', $movie_id)->get() : Movie::latest()->get();
        // return response()->json($movies);
        return view('pages.movies.list', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories =  Category::latest()->get();
        $genres =  Genre::latest()->get();
        $tags =  Tag::latest()->get();
        return view("pages.movies.create", compact('categories', 'genres', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png,gif|max:2000',
            'view' => 'nullable|numeric|min:0',
            'active' => 'required',
            'description' => 'nullable',
            'category_id' => 'required',
            "tags" => 'required|array',
            "genres" => 'required|array',
        ]);
        if ($request->hasFile('thumbnail')) {
            $filePath = Storage::disk('public')->put('thumbnails/movies/', request()->file('thumbnail'));
            $validated['thumbnail'] = $filePath;
        }
        $newMovie = Movie::create($validated);
        $newMovie->tags()->attach($validated['tags']);
        $newMovie->genres()->attach($validated['genres']);
        return redirect()->route('movies.index')->with('status', 'Movie Has Been inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie =  Movie::find($id);
        Movie::where('id', $id)->increment('view');
        return view("pages.movies.show", compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie =  Movie::find($id);
        // return response()->json($movie);
        $categories =  Category::latest()->get();
        $genres =  Genre::latest()->get();
        $tags =  Tag::latest()->get();
        return view("pages.movies.edit", compact('movie', 'categories', 'genres', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::find($id);
        $validated = $request->validate([
            'title' => 'required|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2000',
            'view' => 'nullable|numeric|min:0',
            'active' => 'required',
            'description' => 'nullable',
            'category_id' => 'required',
            "tags" => 'required|array',
            "genres" => 'required|array',
        ]);
        if ($request->hasFile('thumbnail')) {
            if (isset($movie->thumbnail)) {
                Storage::disk('public')->delete($movie->thumbnail);
            }
            $filePath = Storage::disk('public')->put('thumbnails/movies', request()->file('thumbnail'));
            $validated['thumbnail'] = $filePath;
        }

        $movie->tags()->sync($validated['tags']);
        $movie->genres()->sync($validated['genres']);
        $movie->update($validated);
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
        $movie->tags()->detach($movie->tags);
        $movie->genres()->detach($movie->genres);
        $movie->delete();
        return redirect()->route('movies.index')->with('status', 'Movie Deleted');
    }
}
