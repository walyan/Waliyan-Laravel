<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('login');
});

Route::get('about/', function () {
    return view('about');
});



