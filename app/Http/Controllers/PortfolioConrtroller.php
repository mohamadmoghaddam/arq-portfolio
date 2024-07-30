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
}
