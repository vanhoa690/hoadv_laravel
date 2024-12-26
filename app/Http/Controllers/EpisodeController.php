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
    public function index()
    {
        $episodes =  Episode::latest()->get();
        return view('pages.episodes.list', compact('episodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies =  Movie::latest()->get();
        return view("pages.episodes.create", compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $episode = $request->all();
        Episode::create($episode);
        return redirect()->route('episodes.index')->with('status', 'Episode Has Been inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $episode =  Episode::find($id);
        return view("pages.episodes.edit", compact('episode'));
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
        $episodeUpdate = $request->all();

        $episode->update($episodeUpdate);
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
