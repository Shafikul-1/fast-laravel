<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\testing;
use App\Http\Middleware\validUser;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::resource('user', UserController::class);

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/auth', [UserController::class, 'authentecate'])->name('authentecate');

// Basic Middleware Route Change

// Route::get('/dashboard', [UserController::class, 'dasboard'])
// ->name('dashboard')->middleware([validUser::class]);

// Route::get('/check', [UserController::class, 'check'])
// ->name('check')->middleware([validUser::class]);

// Route::get('/logout', [UserController::class, 'logout'])
// ->name('logout')->middleware([validUser::class]);


// // Group Middleware route chnage
// Route::middleware([validUser::class, testing::class])->group(function () {
//     Route::get('/dashboard', [UserController::class, 'dasboard'])->name('dashboard');

//     Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//     // if not give route any middleware then use `withoutmiddleware` 
//     Route::get('/dashboard', [UserController::class, 'dasboard'])->name('dashboard')->withoutMiddleware([testing::class]);

// });


Route::get('/dashboard', [UserController::class, 'dasboard'])
->name('dashboard')->middleware("auth");

Route::get('/check', [UserController::class, 'check'])
->name('check')->middleware("auth");

Route::get('/logout', [UserController::class, 'logout'])
->name('logout')->middleware("auth");
