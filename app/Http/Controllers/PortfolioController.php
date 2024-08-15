<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PortfolioController
{
    public function index(){
        $categories = Category::get();
        $projects = Portfolio::orderBy('date', 'asc')->get();
        return view('gallery',[
            'projects' => $projects,
            'categories' => $categories
        ]);
    }

    public function show(Portfolio $project){
        $categories = Category::get();
        $project->get();
        return view('gallery-single',[
            'project' => $project,
            'categories' => $categories
        ]);
    }

    public function list(){

        $projects = Portfolio::with('category')->orderBy('date', 'asc')->get();
        return view('/admin/portfolio',[
            'projects' => $projects
        ]);

    }
    public function create(){
        $categories = Category::get();
        return view('/admin/addportfolio',[
            'categories' => $categories
        ]);

    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'client' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|file',
            'footage' => 'required',
            'category' => 'required',
            'date' => 'required|date'
            ]);
            $request->file('thumbnail')->store('thumbnails', 'public');
            $filename = $request->file('thumbnail')->hashName();
            Portfolio::create([
                'title' => $request -> title,
                'client' => $request -> client,
                'description' => $request -> description,
                'thumbnail' => $filename,
                'footage' => $request -> footage,
                'category_id' => $request -> category,
                'date' => $request -> date
            ]);
            return redirect('/admin/portfolio/');

        }

    public function edit(Portfolio $project){
        $categories = Category::get();
        return view('/admin/editportfolio', [
            'project' => $project,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, Portfolio $project)
    {
        $request->validate([
            'title' => 'required',
            'client' => 'required',
            'description' => 'required',
            'thumbnail' => 'file',
            'footage' => 'required',
            'category' => 'required',
            'date' => 'required|date'

            ]);
            if($request->file('thumbnail')== null){
                $filename = $project['thumbnail'];
            }else{
            Storage::disk('public')->delete('thumbnails/'.$project['thumbnail']);
            $request->file('thumbnail')->store('thumbnails', 'public');
            $filename = $request->file('thumbnail')->hashName();
            }
        $project -> update([
            'title' => $request -> title,
            'client' => $request -> client,
            'description' => $request -> description,
            'thumbnail' => $filename,
            'footage' => $request -> footage,
            'category_id' => $request -> category,
            'date' => $request -> date
        ]);
        return redirect('/admin/portfolio');
    }

    public function destroy(Portfolio $project){
        Storage::disk('public')->delete('thumbnails/'.$project['thumbnail']);
        $project->delete();
        return redirect('/admin/portfolio/');

    }

}
