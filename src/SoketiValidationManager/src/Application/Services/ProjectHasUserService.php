<?php

namespace SoketiValidationManager\Application\Services;

use SoketiValidationManager\Application\Interfaces\Services\ProjectHasUserServiceInterface;
use SoketiValidationManager\Domain\Exceptions\InvalidConnectionException;
use SoketiValidationManager\Infrastructure\Interfaces\Repositories\ProjectHasUserRepositoryInterface;

class ProjectHasUserService implements ProjectHasUserServiceInterface
{
    private ProjectHasUserRepositoryInterface $projectHasUserRepository;

    public function __construct(ProjectHasUserRepositoryInterface $projectHasUserRepository)
    {
        $this->projectHasUserRepository = $projectHasUserRepository;
    }

    /**
     * @param int $projectId
     * @param int $userId
     * @return bool
     * @throws InvalidConnectionException
     */
    public function existsByProjectAndUser(int $projectId, int $userId): bool
    {
        $isValid = $this->projectHasUserRepository
            ->existsByProjectAndUser($projectId, $userId);

        if (!$isValid)
            throw new InvalidConnectionException();

        return true;
    }
}
