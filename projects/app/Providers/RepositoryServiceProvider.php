<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repository_path = 'App\Repositories';

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind($this->repository_path . '\BaseRepositoryInterface',$this->repository_path . '\BaseRepository');

        $this->app->bind($this->repository_path . '\Campaign\CampaignRepositoryInterface',$this->repository_path . '\Campaign\CampaignRepository');
        $this->app->bind($this->repository_path . '\Coupon\CouponRepositoryInterface',$this->repository_path . '\Coupon\CouponRepository');

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
