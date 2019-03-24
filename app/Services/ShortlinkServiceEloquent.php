<?php
namespace App\Services;

use App\Models\Shortlink;
use App\Models\User;
use App\Repositories\ShortlinkRepository;
use Illuminate\Support\Collection;

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

    public function getShortlink(User $user): Collection
    {
        return $this->repository->findByField("user_id", $user->id);
    }
}