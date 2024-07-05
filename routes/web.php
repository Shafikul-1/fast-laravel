<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
// Route::group([UserController::class], function(){
//     Route::get('/alluser', 'allUser')->name('alluser');
// });

Route::get('/login', [UserController::class, 'login'])->name('login');

// Gate Method Use 👉 middleware('can:isAdmin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('can:isAdmin');
Route::get('/alluser', [UserController::class, 'alluser'])->name('alluser');
Route::get('/adduser', [UserController::class, 'adduser'])->name('adduser');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('can:isAdmin');
Route::get('/loginuser', [UserController::class, 'loginuser'])->name('loginuser')->middleware('can:isAdmin');
Route::get('/singleuser/{id}', [UserController::class, 'singleUser'])->name('singleuser');
Route::get('/deleteuser/{id}', [UserController::class, 'deleteUser'])->name('deleteuser');
Route::post('/checkUser', [UserController::class, 'checkUser'])->name('checkUser');
Route::post('/addeduser', [UserController::class, 'addeduser'])->name('addeduser');