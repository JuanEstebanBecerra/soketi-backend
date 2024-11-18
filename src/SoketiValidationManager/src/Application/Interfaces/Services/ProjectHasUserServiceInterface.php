<?php

namespace SoketiValidationManager\Application\Interfaces\Services;

use SoketiValidationManager\Domain\Exceptions\InvalidConnectionException;

interface ProjectHasUserServiceInterface
{
    /**
     * @param int $projectId
     * @param int $userId
     * @return bool
     * @throws InvalidConnectionException
     */
    public function existsByProjectAndUser(int $projectId, int $userId): bool;
}
