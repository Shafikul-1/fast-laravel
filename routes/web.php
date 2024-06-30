<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
Route::view('/', 'welcome');
Route::resource('post' ,PostController::class);
Route::resource('tag',TagController::class);
Route::resource('video',VideoController::class);
