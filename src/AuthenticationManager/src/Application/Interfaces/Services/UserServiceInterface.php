<?php

namespace AuthenticationManager\Application\Interfaces\Services;

use App\Models\User;
use AuthenticationManager\Domain\Dto\LoginDto;
use AuthenticationManager\Domain\Exceptions\LoginException;

interface UserServiceInterface
{
    /**
     * @param LoginDto $dto
     * @return array
     * @throws LoginException
     */
    public function login(LoginDto $dto): array;

    /**
     * @param User $user
     * @return $this
     */
    public function logout(User $user): self;
}
