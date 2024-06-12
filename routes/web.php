<?php

use Illuminate\Support\Facades\Route;

function getUser(){
    return [
        1 => ['name' => 'Md Runjila Islam', 'roll' => 12, 'village' => 'Bokaput'],
        2 => ['name' => 'Md Shifat Islam', 'roll' => 12, 'village' => 'Modevput'],
        3 => ['name' => 'Md akter Islam', 'roll' => 12, 'village' => 'naogna'],
        4 => ['name' => 'Md korim Islam', 'roll' => 12, 'village' => 'ragshai']
    ];
}

Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::get('price', function () {
    return view('page.price');
})->name('price');


// Route to view data sent
Route::get('/sent', function () {
    $other = getUser();
    return view('check', ['test' => $other]);
});

Route::get('/users/{id}', function( $id){
    $user = getuser();
    abort_if(!isset($user[$id]), 404);
    $singlaUser = $user[$id];
    return view('user', ['userdata' => $singlaUser]);
}) ->name('allusers');