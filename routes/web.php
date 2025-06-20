<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CeleiroController;
use App\Http\Controllers\VacinaController;
use App\Http\Controllers\AnimalVacinaController;
use App\Http\Controllers\LoginController;

Route::middleware('auth')->group(function () {
    Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
    Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
    Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');
    Route::resource('celeiros', CeleiroController::class);
    Route::get('/animals/vacina', [AnimalVacinaController::class, 'create'])->name('animal.vacina.create');
    Route::post('/animals/vacina', [AnimalVacinaController::class, 'store'])->name('animal.vacina.store');
    Route::get('/vacinas/create', [VacinaController::class, 'create'])->name('vacinas.create');
    Route::post('/vacinas', [VacinaController::class, 'store'])->name('vacinas.store');
    Route::get('/vacinas', [VacinaController::class, 'index'])->name('vacinas.index');
});

// Login
Route::get('/login',  [LoginController::class, 'show'])->name('login');
Route::post('/login',  [LoginController::class, 'store'])->name('login.store');

// logout (POST para evitar CSRF)
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
