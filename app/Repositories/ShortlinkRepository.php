<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface ShortlinkRepository.
 */
interface ShortlinkRepository extends RepositoryInterface
{
    public function getUserShortlink(User $user, $limit = 15): LengthAwarePaginator;
}
