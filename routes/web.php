<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::get('/logout', [IndexController::class, 'logout'])->name('logout');
Route::get('/', [IndexController::class, 'index'])->middleware('auth');
