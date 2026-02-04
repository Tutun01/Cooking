<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/welcome', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/menu', [MenuController::class, 'displayMenu'])
            ->name('displayMenu');

Route::get('/menuItem/{menu}', [MenuItemController::class, 'displayItem'])
    ->name('menuItems');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');

Route::get('/reservation', function () {
    return view('reservation');
})->middleware('auth');

Route::get('/reservation', [ReservationController::class, 'create'])
    ->middleware('auth');

Route::post('/reservation', [ReservationController::class, 'store'])
    ->middleware('auth');
