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
     * @param string $source
     * @return Shortlink
     */
    public function findPublicShortlink(string $source): ?Shortlink;

    /**
     * 取得使用者所屬的 ShortLink
     * @param User $user
     * @return Collection
     */
    public function getShortlink(User $user): LengthAwarePaginator;
}