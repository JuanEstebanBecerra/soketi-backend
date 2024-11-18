<?php

namespace SoketiConnection\Infrastructure\ServiceLayer\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class SoketiConnectionServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutes();
    }

    /**
     * @return void
     */
    public function loadRoutes(): void
    {
        Route::prefix('api')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
            });
    }
}
