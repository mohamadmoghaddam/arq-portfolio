<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/resume', [CVController::class, 'index']);

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/portfolio/{project}', [PortfolioController::class, 'show']);

Route::get('/portfolio/category/{category}', [PortfolioController::class, 'category']);


Route::get('/admin', [UserController::class, 'login']);
Route::post('/admin/login', [UserController::class, 'authenticate']);
