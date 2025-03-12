<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CMS\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Cache\Repository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
