<?php

namespace SoketiValidationManager\Infrastructure\Repositories;

use Illuminate\Support\Facades\DB;
use Kernel\Infrastructure\Repositories\BaseRepository;
use SoketiValidationManager\Infrastructure\Interfaces\Repositories\ProjectHasUserRepositoryInterface;

class ProjectHasUserRepository extends BaseRepository implements ProjectHasUserRepositoryInterface
{
    /**
     * @param int $projectId
     * @param int $userId
     * @return bool
     */
    public function existsByProjectAndUser(int $projectId, int $userId): bool
    {
        return DB::table('project_has_users')
            ->where('project_id', '=', $projectId)
            ->where('user_id', '=', $userId)
            ->exists();
    }
}
