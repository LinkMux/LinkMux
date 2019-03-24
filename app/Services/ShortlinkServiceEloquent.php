<?php
namespace App\Services;

use App\Models\Shortlink;
use App\Repositories\ShortlinkRepository;

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
        return $this->repository->findByField("source", $source)->first();
    }
}