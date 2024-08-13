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

    public function create(){

        return view('/admin/addcategory');

    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            ]);
            Category::create([
                'name' => $request -> name,
            ]);
            return redirect('/admin/category/');

        }

    public function destroy(Category $category){
        $category->delete();
        return redirect('/admin/category/');

    }

}
