<?php

namespace App\Providers;

use App\Services\DayService;
use App\Services\DietService;
use Illuminate\Support\Facades\Blade;
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
        /**
         * Services
         */
        
        //DietService
        $this->app->singleton(DietService::class, function() {
            return new DietService();
        });
        $this->app->bind('App\Contracts\DietServiceContract', DietService::class);

        //DayService
        $this->app->singleton(DayService::class, function() {
            return new DayService();
        });
        $this->app->bind('App\Contracts\DayServiceContract', DayService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.errors', 'errors');
    }
}
