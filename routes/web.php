<?php

use App\Http\Controllers\CVConrtroller;
use App\Http\Controllers\PortfolioConrtroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/resume', [CVConrtroller::class, 'index']);

Route::get('/portfolio', [PortfolioConrtroller::class, 'index']);

Route::get('/portfolio/{project}', [PortfolioConrtroller::class, 'show']);

Route::get('/portfolio/category/{category}', [PortfolioConrtroller::class, 'category']);
