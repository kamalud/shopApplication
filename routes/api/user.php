<?php

use App\Http\Controllers\Api\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::prefix('user')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/login', 'login');
        Route::post('/register', 'register');
    });

    Route::middleware(['auth:user-api'])->group(function () {

    });
});
