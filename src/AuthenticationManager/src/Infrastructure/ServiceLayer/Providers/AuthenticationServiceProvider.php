<?php

namespace AuthenticationManager\Infrastructure\ServiceLayer\Providers;

use AuthenticationManager\Application\Interfaces\Services\UserServiceInterface;
use AuthenticationManager\Application\Services\UserService;
use AuthenticationManager\Infrastructure\Interfaces\Repositories\UserRepositoryInterface;
use AuthenticationManager\Infrastructure\Repositories\UserRepository;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AuthenticationServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        Broadcast::routes(['prefix' => 'api', 'middleware' => ['auth:sanctum']]);
        require __DIR__ . '/../Routes/channels.php';

        $this->loadRoutes();
    }

    /**
     * @return void
     */
    public function loadRoutes(): void
    {
        Route::prefix('api/auth')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
            });
    }
}
