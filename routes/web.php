<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users_controller;

Route::get('/', function () {
    
    return view('welcome');
});


Route::controller(users_controller::class)->group(function(){
    Route::get('/signUp', 'index')->name('signUp_page');
    Route::post('/signUp', 'store')->name('signUp_post');
    Route::get('/signIn', 'signIn_page')->name('signIn_page');
    Route::post('/signIn', 'post_signIn')->name('signIn_post');
});