<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signUp_controller;

Route::get('/', function () {
    
    return view('welcome');
});

Route::get('/signUp', [signUp_controller::class, 'index']);

Route::post('/signUp', [signUp_controller::class, 'store']);