<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('local')) {
            $localConfig = require config_path('database.local.php');
            Config::set('database.default', $localConfig['default']);
            Config::set('database.connections', array_merge(
                config('database.connections'),
                $localConfig['connections']
            ));
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
