<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }

    public function select(Category $category)
    {
        return view('categories.select')->with(['categories' => $category->get()]);
    }
    
    public function categories()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
