<?php

namespace AuthenticationManager\Infrastructure\Interfaces\Repositories;

use App\Models\User;

interface UserRepositoryInterface
{
    /**
     * @param string $email
     * @return User|null
     */
    function getByEmail(string $email): User|null;
}
