<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories =  Category::latest()->get();
        return view('pages.categories.index', compact('categories'));
    }
}
