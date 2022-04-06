<?php

namespace App\Providers;
use Illuminate\Support\Facades\Artisan;
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
        /* Artisan::call('cache:clear');
         Artisan::call('config:clear');
         Artisan::call('config:cache');
         Artisan::call('route:clear');
    */
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
