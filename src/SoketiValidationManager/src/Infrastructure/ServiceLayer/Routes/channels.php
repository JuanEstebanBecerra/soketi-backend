<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Broadcast;
use SoketiValidationManager\Application\Interfaces\Services\ProjectHasUserServiceInterface;

Broadcast::channel('project-{id}', function ($user, $id) {
    return (App::make(ProjectHasUserServiceInterface::class))
        ->existsByProjectAndUser((int)$id, $user->id);
});
