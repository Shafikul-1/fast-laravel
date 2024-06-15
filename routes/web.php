<?php

use App\Http\Controllers\invoController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

// Route::get('/', [userController::class, 'user'])->name('home');
// Route::get('/user/{name?}', [userController::class, 'show'])->name('show');

Route::controller(userController::class)->group(function () {
    Route::get('/',  'user')->name('home');
    Route::get('/user/{name?}', 'show')->name('show');
});

Route::get('/invo', invoController::class);

Route::get('/test', [testController::class, 'testing'] );