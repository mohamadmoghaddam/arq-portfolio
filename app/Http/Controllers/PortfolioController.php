<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PortfolioController
{
    public function index(){
        $categories = Category::get();
        $projects = Portfolio::get();
        return view('portfolio',[
            'projects' => $projects,
            'categories' => $categories
        ]);
    }

    public function show(Portfolio $project){
        $project->get();
        return view('portfolio-details',[
            'project' => $project
        ]);
    }

    public function list(){

        $projects = Portfolio::get();
        return view('/admin/portfolio',[
            'projects' => $projects
        ]);

    }
    public function create(){

        return view('/admin/addportfolio');

    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'client' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            'footage' => 'required',
            'category' => 'required',
            'date' => 'required|date'

            ]);
            Portfolio::create([
                'title' => $request -> title,
                'client' => $request -> client,
                'description' => $request -> description,
                'thumbnail' => $request -> thumbnail,
                'footage' => $request -> footage,
                'category' => $request -> category,
                'date' => $request -> date
            ]);
            return redirect('/admin/portfolio/');

        }
    public function destroy(Portfolio $project){
        $project->delete();
        return redirect('/admin/portfolio/');

    }

}
