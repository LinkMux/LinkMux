<?php
namespace App\Services;

use App\Models\Shortlink;
use App\Models\User;
use App\Repositories\ShortlinkRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class ShortlinkServiceEloquent implements ShortlinkService
{
    /**
     * @var ShortlinkRepository
     */
    protected $repository;

    /**
     * ShortlinkServices constructor.
     * @param ShortlinkRepository $repository
     */
    public function __construct(ShortlinkRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findPublicShortlink(string $source): ?Shortlink
    {
        return $this->repository->findByField("hash", $source)->first();
    }

    public function getShortlink(User $user, $limit = 15): LengthAwarePaginator
    {
        return $this->repository->getUserShortlink($user, $limit);
    }
}