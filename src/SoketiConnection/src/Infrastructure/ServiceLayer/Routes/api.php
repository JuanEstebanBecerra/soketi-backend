<?php

namespace SoketiConnection\src\Infrastructure\ServiceLayer\Routes;

use Illuminate\Support\Facades\Route;
use SoketiConnection\Infrastructure\ServiceLayer\Controllers\SoketiController;

Route::get('/dispatch', [SoketiController::class, 'dispatch']);
