<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;


Route::get('/', [userController::class, 'getData']);

Route::get('/union', [userController::class, 'unionData']);

Route::get('/when', [userController::class, 'whenData']);

Route::get('/chunk', [userController::class, 'chunkData']);