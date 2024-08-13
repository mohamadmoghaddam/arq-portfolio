<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/resume', [CVController::class, 'index']);

Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/portfolio/{project}', [PortfolioController::class, 'show']);
Route::get('/portfolio/category/{category}', [CategoryController::class, 'index']);


Route::get('/admin', [UserController::class, 'login'])->name('login');
Route::post('/admin/login', [UserController::class, 'authenticate']);


Route::middleware('auth')->group(function () {
    Route::get('/admin/resume', [CVController::class, 'list']);
    Route::get('/admin/resume/create', [CVController::class, 'create']);
    Route::post('/admin/resume', [CVController::class, 'store']);
    Route::get('/admin/resume/edit/{cv}', [CVController::class, 'edit']);
    Route::patch('/admin/resume/{cv}', [CVController::class, 'update']);
    Route::delete('/admin/resume/{cv}' ,[CVController::class, 'destroy']);

    Route::get('/admin/portfolio', [PortfolioController::class, 'list']);
    Route::get('/admin/portfolio/create', [PortfolioController::class, 'create']);
    Route::post('/admin/portfolio', [PortfolioController::class, 'store']);
    Route::get('/admin/portfolio/edit/{project}', [PortfolioController::class, 'edit']);
    Route::patch('/admin/portfolio/{project}', [PortfolioController::class, 'update']);
    Route::delete('/admin/portfolio/{project}' ,[PortfolioController::class, 'destroy']);

    Route::get('/admin/category', [CategoryController::class, 'list']);
    Route::get('/admin/category/create', [CategoryController::class, 'create']);
    Route::post('/admin/category', [CategoryController::class, 'store']);
    Route::get('/admin/category/edit/{category}', [CategoryController::class, 'edit']);
    Route::patch('/admin/category/{category}', [CategoryController::class, 'update']);
    Route::delete('/admin/category/{category}' ,[CategoryController::class, 'destroy']);
});
