<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Category List";
        $categories =  Category::latest()->withCount(relations: 'movies')->get();
        // return response()->json($categories);
        return view('pages.categories.list', compact('title', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'active' => 'required',
        ]);
        // return response()->json($validated);
        Category::create($validated);
        return redirect()->route('categories.index')->with('status', 'Category Has Been inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category =  Category::find($id);

        return view("pages.categories.show", compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category =  Category::find($id);
        return view("pages.categories.edit", compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $validated = $request->validate([
            'name' => 'required|max:255',
            'active' => 'required',
        ]);
        $category->update($validated);
        return redirect()->route('categories.index')->with('status', value: 'Category Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories.index')->with('status', 'Category Deleted');
    }
}
