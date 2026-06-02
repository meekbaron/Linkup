<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/post/create', [App\Http\Controllers\HomeController::class, 'post'])->name('posting');
Route::get('/editprofile', [App\Http\Controllers\HomeController::class, 'edit'])->name('editprofile');
