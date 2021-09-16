<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\WelcomeController@index');

Route::get('/support', 'App\Http\Controllers\WelcomeController@support');

Route::get('/about', 'App\Http\Controllers\WelcomeController@about');

Route::get('/blog', 'App\Http\Controllers\WelcomeController@blog');

Route::get('/contact', 'App\Http\Controllers\WelcomeController@contact');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
