<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;


Route::get('/', [userController::class, 'getData']);

Route::get('/latuchers', [userController::class, 'unionData']);