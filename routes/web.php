<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [userController::class, 'getData']);

Route::get('/update', [userController::class, 'updateData']);

Route::get('/delete', [userController::class, 'deleteData']);

Route::get('/insert', [userController::class, 'insertData']);