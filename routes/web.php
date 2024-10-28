<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('login');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/', [HomeController::class, 'index'])->name('home');



