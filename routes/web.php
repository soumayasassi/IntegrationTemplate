<?php

use Illuminate\Support\Facades\Route;

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
