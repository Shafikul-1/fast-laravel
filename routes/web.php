<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::view('/', 'welcome')->name('home');
Route::resource('user', UserController::class);

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/auth', [UserController::class, 'loginPage'])->name('auth');
Route::get('/dashboard', [UserController::class, 'dasboard'])->name('dashboard');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');