<?php

use App\Http\Middleware\ApiAuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/quotes', [\App\Http\Controllers\API\IndexController::class, 'index'])->middleware(ApiAuthMiddleware::class);
