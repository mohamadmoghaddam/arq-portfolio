<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CV;
use Illuminate\Http\Request;

class CVConrtroller
{
    public function index(){

        $cvs = CV::get();
        return view('resume',[
            'cvs' => $cvs
        ]);

    }
}
