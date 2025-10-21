<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/', 'home')->name('home');

// AuthController routes
Route::get('/login', [AuthController::class,
    'showLogin'])->name('show.login');

Route::get('/register', [AuthController::class,
    'showRegister'])->name('show.register');

Route::post('/login', [AuthController::class,
    'login'])->name('login');

Route::post('/register', [AuthController::class,
    'register'])->name('register');

Route::post('/logout', [AuthController::class,
                'logout'])->name('logout');

