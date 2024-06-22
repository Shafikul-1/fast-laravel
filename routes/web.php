<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'form');
Route::post('/add', [userController::class, 'vald'])->name('formVal');