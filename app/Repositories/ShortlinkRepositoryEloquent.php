<?php

namespace App\Repositories;

use App\Models\Shortlink;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\ShortlinkValidator;

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
    
}
