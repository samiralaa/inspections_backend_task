<?php

namespace App\Providers;

use App\Repositories\Implementations\Inspection\InspectionRepository;
use App\Repositories\Interfaces\Inspection\InspectionRepositoryInterface;
use App\Services\Inspection\InspectionService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(InspectionRepositoryInterface::class, InspectionRepository::class);
        $this->app->bind(InspectionService::class, function ($app) {
            return new InspectionService($app->make(InspectionRepositoryInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
