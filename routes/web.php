<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [homeController::class, 'home'])->name('home');
Route::get('/show', [StudentController::class, 'showStudent'])->name('alluser');
Route::get('/show/{id?}', [StudentController::class, 'singleStudent'])->name('singleuser');
Route::get('/delete/{id?}', [StudentController::class, 'deleteStudent'])->name('delete');
// Route::view('/show', 'allData');

Route::get('/add', [UserController::class, 'insertData']);
Route::get('/update', [UserController::class, 'updateData']);
Route::get('/delete/{id}', [UserController::class, 'deleteData']);