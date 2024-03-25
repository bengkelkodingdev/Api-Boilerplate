<?php

use App\Http\Controllers\Api\V1\User\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/users')->group(function () {
    Route::controller(AuthController::class)->group(function() {
        Route::post('login', 'login');
        Route::get('logout', 'logout')->middleware(['Jwtmiddleware']);
    });
});
