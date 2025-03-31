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
])->name('home');

Route::get('login', [ 
    ShiperController::class,
    'login'
]);

Route::get('list-product', [ 
    ShiperController::class,
    'products'
])->name('list-product');

Route::get('footer', [ 
    ShiperController::class,
    'footer'
]);
