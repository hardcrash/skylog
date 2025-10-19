<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function() {
   return view('account.register');
});


Route::get('/admin', function() {
    return view('account.admin');
});


Route::get('/login', function() {
    return view('account.login');
});

Route::get('/logout', function() {
    return view('account.logout');
});
