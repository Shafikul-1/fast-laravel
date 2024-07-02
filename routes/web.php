<?php

use App\Http\Controllers\checkController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::view('/', 'welcome');
Route::resource('/', UserController::class);

Route::post('/loginSore', [checkController::class, 'checking'])->name('loginSore');
Route::get('/login', [checkController::class, 'login'])->name('login');