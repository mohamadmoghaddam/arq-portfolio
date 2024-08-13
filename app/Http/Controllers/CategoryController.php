<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category){
        $categories = Category::get();
        $projects = $category->projects()->get();
        return view('portfolio',[
            'projects' => $projects,
            'categories' => $categories
        ]);
    }

    public function list(){

        $categories = Category::withCount('projects')->get();
        return view('/admin/category',[
            'categories' => $categories
        ]);

    }
}
