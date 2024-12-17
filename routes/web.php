<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users_controller;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\tasks_controller;

Route::get('/', function () {

    return view('welcome');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/user-page', [tasks_controller::class, 'index'])->name('user-page');
    Route::post('/create_tasks', [tasks_controller::class, 'store'])->name('create_tasks');
    Route::delete('/delete_task/{id}', [tasks_controller::class, 'destroy'])->name('delete_task');
    Route::patch('/task_isDone/{id}', [tasks_controller::class, 'update'])->name('task_isDone');
});

Route::controller(users_controller::class)->group(function(){
    Route::get('/signUp', 'index')->name('signUp_page');
    Route::post('/signUp', 'store')->name('signUp_post');
    Route::get('/login', 'signIn_page')->name('login');
    Route::post('/login', 'post_signIn')->name('signIn_post');
    Route::delete('/logout', 'logout')->name('logout');

});
