<?php

use App\Http\Controllers\CompanyConroller;
use App\Http\Controllers\PhoneNumberConroller;
use App\Http\Controllers\UserConroller;
use Illuminate\Support\Facades\Route;
Route::view('/', 'welcome');

Route::resource('user', UserConroller::class);
Route::resource('phonenumber', PhoneNumberConroller::class);
Route::resource('company', CompanyConroller::class);