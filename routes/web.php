<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home route
Route::get('/', function () {
    return view('welcome');
});

// About route
Route::get('/about', function () {
    return view('about');
});

// Contact route
Route::get('/contact', function () {
    return view('contact');
});

// Services route
Route::get('/services', function () {
    return view('services');
});

