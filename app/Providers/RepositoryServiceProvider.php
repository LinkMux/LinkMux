<?php

namespace App\Providers;

use App\Repositories\ShortlinkRepository;
use App\Repositories\ShortlinkRepositoryEloquent;
use App\Services\ShortlinkService;
use App\Services\ShortlinkServiceEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ShortlinkRepository::class, ShortlinkRepositoryEloquent::class);
        $this->app->bind(ShortlinkService::class, ShortlinkServiceEloquent::class);
        //:end-bindings:
    }
}
