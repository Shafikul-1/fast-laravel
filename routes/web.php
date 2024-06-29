<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
Route::view('/', 'welcome');
Route::resource('customer', CustomerController::class);
Route::resource('order', OrderController::class);
Route::resource('image', ImageController::class);