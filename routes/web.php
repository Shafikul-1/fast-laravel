<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
Route::view('/', 'welcome');
Route::resource('upload', UploadController::class);