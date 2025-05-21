<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->middleware(['throttle:api'])->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);

});


Route::prefix('v1')->middleware(['throttle:api', 'auth:sanctum'])->group(function () {
    Route::apiResource('/categories',
        \App\Http\Controllers\Api\V1\CategoryController::class);
    Route::apiResource('/posts',
        \App\Http\Controllers\Api\V1\PostController::class);

    Route::get('logout', [AuthController::class, 'logout']);
});


