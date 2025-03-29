<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShiperController;

Route::get('shiper', [ 
    ShiperController::class,
    'index'
]);

Route::get('home', [ 
    ShiperController::class,
    'home'
]);

Route::get('login', [ 
    ShiperController::class,
    'login'
]);

Route::get('list-product', [ 
    ShiperController::class,
    'list'
]);