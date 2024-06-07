<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/contact', function () {
   return view('page.contact') ;
})->name('contact');

Route::get('price', function () {
    return view('page.price');
})->name('price');