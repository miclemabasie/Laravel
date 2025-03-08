<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/hello', [HelloController::class, 'welcome'])->name('hello');

Route::get('/about', function () {
    return view('about');
});

Route::get('/signup', [SignupController::class, 'create'])->name('signup');

Route::get('/login', [LoginController::class, 'login'])->name("login");