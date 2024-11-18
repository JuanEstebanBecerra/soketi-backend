<?php

namespace AuthenticationManager\Infrastructure\Routes;

use AuthenticationManager\Infrastructure\ServiceLayer\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthenticationController::class, 'login']);

Route::post('/logout', [AuthenticationController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::get('/user', [AuthenticationController::class, 'user'])
    ->middleware('auth:sanctum');
