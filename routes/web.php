<?php

use Illuminate\Support\Facades\Route;
Route::resource('cours', \App\Http\Controllers\CoursController::class);


Route::resource('product',\App\Http\Controllers\ProductController::class);
Route::view('/form', 'form');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('form');
});

Route::get('/form', function () {
    return view('pages/form');
});


Route::get('/dashboard', function () {
    return view('pages/dashboard');
});
