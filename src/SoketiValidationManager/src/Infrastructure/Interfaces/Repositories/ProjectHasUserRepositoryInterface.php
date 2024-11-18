<?php

namespace SoketiValidationManager\Infrastructure\Interfaces\Repositories;

use Kernel\Infrastructure\Interfaces\Repositories\BaseRepositoryInterface;

interface ProjectHasUserRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * @param int $projectId
     * @param int $userId
     * @return bool
     */
    public function existsByProjectAndUser(int $projectId, int $userId): bool;
}
