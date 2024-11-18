<?php

namespace SoketiValidationManager\Infrastructure\ServiceLayer\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
use SoketiValidationManager\Application\Interfaces\Services\ProjectHasUserServiceInterface;
use SoketiValidationManager\Application\Services\ProjectHasUserService;
use SoketiValidationManager\Infrastructure\Interfaces\Repositories\ProjectHasUserRepositoryInterface;
use SoketiValidationManager\Infrastructure\Repositories\ProjectHasUserRepository;

class SoketiValidationServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ProjecthasUserServiceInterface::class, ProjecthasUserService::class);
        $this->app->bind(ProjecthasUserRepositoryInterface::class, ProjecthasUserRepository::class);
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->loadChannelRoutes();
    }

    /**
     * @return void
     */
    public function loadChannelRoutes(): void
    {
        Broadcast::routes(['prefix' => 'api', 'middleware' => ['auth:sanctum']]);
        require __DIR__ . '/../Routes/channels.php';
    }
}
