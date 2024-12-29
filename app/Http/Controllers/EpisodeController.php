<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Movie;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $movie_id = $request->query("movie_id");
        $episodes = $movie_id  ?  Episode::where('movie_id', $movie_id)->get() : Episode::latest()->get();
        return view('pages.episodes.list', compact('episodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $movies =  Movie::latest()->get();
        $movie_id = $request->query("movie_id");
        $movie_query = null;
        if ($movie_id) {
            $movie_query =  Movie::find($movie_id);
        }
        return view("pages.episodes.create", compact('movies', 'movie_query'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'link' => 'required|max:255',
            'view' => 'nullable|numeric|min:0',
            'movie_id' => 'required',
        ]);
        Episode::create($validated);
        return redirect()->route('episodes.index')->with('status', 'Episode Has Been inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $episode =  Episode::find($id);
        Episode::where('id', $id)->increment('view');
        return view("pages.episodes.show", compact('episode'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $episode =  Episode::find($id);
        $movies =  Movie::latest()->get();
        return view("pages.episodes.edit", compact('episode', 'movies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $episode = Episode::find($id);
        $validated = $request->validate([
            'title' => 'required|max:255',
            'link' => 'required|max:255',
            'view' => 'nullable|numeric|min:0',
            'movie_id' => 'required',
        ]);
        $episode->update($validated);
        return redirect()->route('episodes.index')->with('status', value: 'Episode Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $episode =  Episode::find($id);
        $episode->delete();
        return redirect()->route('episodes.index')->with('status', 'Episode Deleted');
    }
}