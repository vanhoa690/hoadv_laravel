<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres =  Genre::latest()->get();
        return view('pages.genres.list', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.genres.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $genre = Genre::create($request->all());
        return redirect()->route('genres.index')->with('status', 'Genre Has Been inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre =  Genre::find($id);
        return view("pages.genres.edit", compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre =  Genre::find($id);
        return view("pages.genres.edit", compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $genre = Genre::find($id);
        $genre->update($request->all());
        return redirect()->route('genres.index')->with('status', value: 'Genre Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Genre::find($id)->delete();
        return redirect()->route('genres.index')->with('status', 'Genre Deleted');
    }
}
