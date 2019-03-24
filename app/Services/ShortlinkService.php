<?php
namespace App\Services;

use App\Models\Shortlink;

interface ShortlinkService
{
    /**
     * 使用 source 字串去取得整個 Shortlink。
     * 注意：方法不會去驗證身份。
     * @param string $source
     * @return Shortlink
     */
    public function findPublicShortlink(string $source): ?Shortlink;
}