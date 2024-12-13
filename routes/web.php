<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users_controller;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\tasks_controller;

Route::get('/', function () {

    return view('welcome');
});


Route::get('/user-page', [tasks_controller::class, 'index'])->middleware('auth', EnsureTokenIsValid::class)->name('user-page');

Route::controller(users_controller::class)->group(function(){
    Route::get('/signUp', 'index')->name('signUp_page');
    Route::post('/signUp', 'store')->name('signUp_post');
    Route::get('/login', 'signIn_page')->name('login');
    Route::post('/login', 'post_signIn')->name('signIn_post');
    Route::delete('/logout', 'logout')->name('logout');
});
