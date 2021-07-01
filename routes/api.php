<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ProductApiController;

// Public
Route::post('/api-register', [ApiAuthController::class, 'register']);
Route::post('/api-login', [ApiAuthController::class, 'login']);
Route::get('/products', [ProductApiController::class, 'index']);
Route::get('/products/{id}', [ProductApiController::class, 'show']);
Route::get('/products/search/{name}', [ProductApiController::class, 'search']);

// Protected
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductApiController::class, 'store']);
    Route::put('/products/{id}', [ProductApiController::class, 'update']);
    Route::delete('/products/{id}', [ProductApiController::class, 'destroy']);
    Route::post('/products', [ApiAuthController::class, 'logout']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
