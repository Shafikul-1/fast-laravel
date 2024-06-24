<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
Route::view('/', 'welcome');

Route::resource('student', StudentController::class);
