<?php

use App\Http\Controllers\Api\V1\User\AuthController;
use App\Http\Controllers\Api\V1\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/users')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
        Route::get('logout', 'logout')->middleware(['jwt.auth']);
    });

    Route::group(['middleware' => ['jwt.auth']], function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'profile');
            Route::put('profile', 'updateProfile');
        });
    });
});
