<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioConrtroller
{
    public function index(){
        $projects = Portfolio::get();
        return view('portfolio',[
            'projects' => $projects
        ]);
    }

    public function show(Portfolio $project){

        return view('portfolio-details',[
            'project' => $project
        ]);
    }

    public function category(string $category){
        $projects = Portfolio::where('category', $category)->get();
        return view('portfolio',[
            'projects' => $projects
        ]);
    }
}
