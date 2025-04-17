<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');