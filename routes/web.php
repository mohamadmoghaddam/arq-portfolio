<?php

use App\Http\Controllers\CVConrtroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/resume', [CVConrtroller::class, 'index']);
