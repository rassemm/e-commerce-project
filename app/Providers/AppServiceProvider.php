<?php

namespace App\Providers;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\ServiceProvider;
use URL;
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::defaultStringLength(191);

        if (str_contains(Config::get('app.url'), 'https://')) {
            URL::forceScheme('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
