<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [homeController::class, 'home'])->name('home');
Route::get('/show', [StudentController::class, 'showStudent'])->name('alluser');
Route::get('/show/{id?}', [StudentController::class, 'singleStudent'])->name('singleuser');
// Route::view('/show', 'allData');

