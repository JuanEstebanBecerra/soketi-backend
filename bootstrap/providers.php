<?php

return [
    App\Providers\AppServiceProvider::class,
    AuthenticationManager\Infrastructure\ServiceLayer\Providers\AuthenticationServiceProvider::class,
    SoketiConnection\Infrastructure\ServiceLayer\Providers\SoketiConnectionServiceProvider::class,
    \SoketiValidationManager\Infrastructure\ServiceLayer\Providers\SoketiValidationServiceProvider::class
];
