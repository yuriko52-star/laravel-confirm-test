<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view ('index',compact('categories'));
    }
    public function confirm(CategoryRequest $request) {
        $category = $request->only(['content']);
        

        return view ('confirm',compact('category'));
    }
    public function store(categoryRequest $request) {
        $category = $request->only(['content']);
        Category::create($category);

        return view ('thanks');
    }
 }
    
