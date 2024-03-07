<?php

use App\Http\Controllers\Seller\SellerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth:seller-api'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::controller(SellerController::class)->group(function () {
            Route::get('/login', 'login');
            Route::post('/register', 'register');
        });
    });
});
