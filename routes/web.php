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

// Display the home page
Route::get('/', function () {
    // Return the welcome view
    return view('welcome');
});

// Display the about page
Route::get('/about', function () {
    // Return the about view
    return view('about');
});

// Display the contact page
Route::get('/contact', function () {
    // Return the contact view
    return view('contact');
});

// Display the services page
Route::get('/services', function () {
    // Return the services view
    return view('services');
});

