<?php

namespace App\Services;

use App\Models\Shortlink;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface ShortlinkService
{
    /**
     * 使用 source 字串去取得整個 Shortlink。
     * 注意：方法不會去驗證身份。
     *
     * @param string $hash
     *
     * @return Shortlink
     */
    public function findPublicShortlink(string $hash): ?Shortlink;

    /**
     * 取得使用者所屬的 ShortLink.
     *
     * @param User $user
     *
     * @return Collection
     */
    public function getShortlink(User $user): LengthAwarePaginator;

    /**
     * 建立 ShortLink 資料.
     *
     * @param User  $user
     * @param array $validated
     *
     * @return mixed
     */
    public function store(User $user, array $validated);
}
