<?php

namespace App\Providers;

use App\Contracts\IndexInterface;
use App\Contracts\StoreInterface;
use App\Contracts\UpdateInterface;
use App\Repositories\Repository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IndexInterface::class, Repository::class);
        $this->app->bind(StoreInterface::class, Repository::class);
        $this->app->bind(UpdateInterface::class, Repository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
