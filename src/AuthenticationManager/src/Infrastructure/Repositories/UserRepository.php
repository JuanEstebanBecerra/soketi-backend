<?php

namespace AuthenticationManager\Infrastructure\Repositories;

use App\Models\User;
use AuthenticationManager\Infrastructure\Interfaces\Repositories\UserRepositoryInterface;
use Kernel\Infrastructure\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * @param string $email
     * @return User|null
     */
    function getByEmail(string $email): User|null
    {
        return User::where('email', $email)->first();
    }
}
