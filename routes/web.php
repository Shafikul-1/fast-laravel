<?php

use App\Http\Controllers\WelcomeMailController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::get('/mail', [WelcomeMailController::class, 'mailform'])->name('mailform');
Route::post('/sentMail', [WelcomeMailController::class, 'sentMail'])->name('sentMail');