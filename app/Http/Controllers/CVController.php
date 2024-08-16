<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CV;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class CVController
{
    public function index(){
        $categories = Category::get();
        $cvs = CV::orderBy('startdate', 'asc')->get();
        return view('resume',[
            'cvs' => $cvs,
            'categories' => $categories
        ]);

    }

    public function list(){

        $cvs = CV::orderBy('startdate', 'asc')->get();
        return view('/admin/resume',[
            'cvs' => $cvs
        ]);

    }
    public function create(){

        return view('/admin/addresume');

    }
    public function store(Request $request){
    $request->validate([
        'company' => 'required',
        'type' => [
            'required',
            Rule::in(['education', 'experience']),
        ],
        'position' => 'required',
            'description' => 'required',
            'startdate' => 'required|date',
            'enddate' => 'required|date|after:start_date'

        ]);
        CV::create([
            'position' => $request -> position,
            'company' => $request -> company,
            'type' => $request -> type,
            'description' => $request -> description,
            'startdate' => $request -> startdate,
            'enddate' => $request -> enddate
        ]);
        return redirect('/admin/resume/');

    }

    public function edit(CV $cv){
        return view('/admin/editresume', [
            'cv' => $cv
        ]);
    }
    public function update(Request $request, CV $cv)
    {
        $request->validate([
            'company' => 'required',
        'type' => [
            'required',
            Rule::in(['education', 'experience']),
        ],
        'position' => 'required',
            'description' => 'required',
            'startdate' => 'required|date',
            'enddate' => 'required|date|after:start_date'

            ]);
        $cv -> update([
            'position' => $request -> position,
            'company' => $request -> company,
            'type' => $request -> type,
            'description' => $request -> description,
            'startdate' => $request -> startdate,
            'enddate' => $request -> enddate
        ]);
        return redirect('/admin/resume');
    }

    public function destroy(CV $cv){
        $cv->delete();
        return redirect('/admin/resume/');

    }
}
