<?php

namespace App\Repositories;

use App\Models\Shortlink;
use App\Models\User;
use App\Validators\ShortlinkValidator;
use Illuminate\Pagination\LengthAwarePaginator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ShortlinkRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ShortlinkRepositoryEloquent extends BaseRepository implements ShortlinkRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Shortlink::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function getUserShortlink(User $user, $limit = 15): LengthAwarePaginator
    {
        return $this->model
            ->where('user_id', $user->id)
            ->orderBy('created_at', 'DESC')
            ->paginate($limit);
    }
}
