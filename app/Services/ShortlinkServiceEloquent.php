<?php

namespace App\Services;

use App\Models\Shortlink;
use App\Models\User;
use App\Repositories\ShortlinkRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class ShortlinkServiceEloquent implements ShortlinkService
{
    /**
     * 每個 Hash 長度的最大搜尋次數，如果超過這個次數會加長度加一，並寫 Log 。
     *
     * @var int
     */
    protected $maxHashSearchTime = 3;

    /**
     * @var ShortlinkRepository
     */
    protected $repository;

    /**
     * ShortlinkServices constructor.
     *
     * @param ShortlinkRepository $repository
     */
    public function __construct(ShortlinkRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findPublicShortlink(string $hash): ?Shortlink
    {
        return $this->repository->findByField('hash', $hash)->first();
    }

    public function getShortlink(User $user, $limit = 15): LengthAwarePaginator
    {
        return $this->repository->getUserShortlink($user, $limit);
    }

    /**
     * 建立 ShortLink 資料.
     *
     * @param User  $user
     * @param array $data
     *
     * @return mixed
     */
    public function store(User $user, array $data)
    {
        $data['user_id'] = $user->id;
        $data['hash'] = $this->getUniqueHash();
        $this->repository->create($data);
    }

    /**
     * 取得一個尚未使用的 Hash 。
     *
     * @return string
     */
    private function getUniqueHash(): string
    {
        $searchTime = 0;
        $increaseLength = 0;
        do {
            $hash = Str::random(config('app.short_hash_length') + $increaseLength);
            $searchTime++;
            if ($searchTime >= $this->maxHashSearchTime) {
                $increaseLength++;
                $searchTime = 0;
                logger('短網址 Hash 出現高碰撞機會，請增加長度。');
            }
        } while ($this->findPublicShortlink($hash));

        return $hash;
    }
}
