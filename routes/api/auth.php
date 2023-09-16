<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('auth', 'login');
    Route::post('auth/register', 'register');

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('auth/logout', 'logout');
        Route::get('auth/profile', 'profile');
        Route::get('auth/role', 'getRole');
    });
});
