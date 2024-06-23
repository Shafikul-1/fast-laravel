<?php

use App\Http\Controllers\commentController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;


Route::resource('product', productController::class)->names([
    'index' => 'maintable',
    'store' => 'insertData',
    'create' => 'add',
    'show' => 'viewProduct',
    'update' => 'updateProduct',
    'destroy' => 'deleteProduct',
    'edit' => 'editProduct'
]);
