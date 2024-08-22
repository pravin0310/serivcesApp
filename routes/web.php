<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateUserController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('userAction', 'userAction')
    ->middleware(['auth', 'verified'])
    ->name('userAction');

Route::post('/create-user', [CreateUserController::class, 'store']);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
