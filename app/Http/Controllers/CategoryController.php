<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category){
        $categories = Category::get();
        $projects = $category->projects()->orderBy('date', 'asc')->get();
        return view('gallery',[
            'projects' => $projects,
            'categories' => $categories,
            'category' => $category
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

    public function edit(Category $category){
        return view('/admin/editcategory', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            ]);
        $category -> update([
        'name' => $request -> name
        ]);
        return redirect('/admin/category');
    }

    public function destroy(Category $category){
        if($category->projects()->count() == 0){
            $category->delete();
            return redirect('/admin/category/');
        }else{
            return redirect('/admin/category/');
        }
    }

}
