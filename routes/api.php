<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AnimalController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')
    ->middleware(['api'])
    ->group(function () {
        Route::apiResource('animais', AnimalController::class);
    });
