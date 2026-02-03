<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/menu', [MenuController::class, 'displayMenu'])
            ->name('displayMenu');
