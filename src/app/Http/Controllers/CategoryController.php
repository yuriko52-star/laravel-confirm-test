<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view ('index',compact('categories'));
    }
    public function confirm(Request $request) {
        $category = $request->only(['content']);
        

        return view ('confirm',compact('category'));
    }
    public function store(Request $request) {
        $category = $request->only(['content']);
        Category::create($category);

        return view ('thanks');
    }
 }
    
