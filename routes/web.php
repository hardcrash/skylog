<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::view('/', 'home');

Route::get('/login', [AccountController::class,
    'login'])->name('account.login');

Route::get('/register', [AccountController::class,
    'register'])->name('account.register');

