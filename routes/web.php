<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::view('/about', 'about');
Route::view('/products', 'products');
Route::view('/blog', 'blog');
Route::view('/contact', 'contact');
