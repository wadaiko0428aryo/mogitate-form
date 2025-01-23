<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    
    Route::get('/register', [ProductController::class, 'register']);
    Route::post('/register', [ProductController::class, 'create']);

    Route::get('/search', [ProductController::class, 'search']);

    Route::get('/{productId}', [ProductController::class, 'detail']);
    Route::post('/{productId}/update', [ProductController::class, 'update']);
    Route::post('/{productId}/delete', [ProductController::class, 'destroy']);
});


