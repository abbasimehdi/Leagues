<?php
namespace App\Providers;

use App\Contracts\DeleteInterface;
use App\Contracts\ExistInterface;
use App\Contracts\FindInterface;
use App\Contracts\GetByInterface;
use App\Contracts\IndexInterface;
use App\Contracts\PaginateInterface;
use App\Contracts\StoreInterface;
use App\Contracts\UpdateInterface;
use App\Repositories\Repository;
use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(IndexInterface::class, Repository::class);
        $this->app->bind(StoreInterface::class, Repository::class);
        $this->app->bind(UpdateInterface::class, Repository::class);
        $this->app->bind(DeleteInterface::class, Repository::class);
        $this->app->bind(FindInterface::class, Repository::class);
        $this->app->bind(PaginateInterface::class, Repository::class);
        $this->app->bind(GetByInterface::class, Repository::class);
        $this->app->bind(ExistInterface::class, Repository::class);
    }
}