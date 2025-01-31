<?php

namespace Codeat3\LaravelLinemaro;

use Illuminate\Support\ServiceProvider;

class LaravelLinemaroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-linemaro.php'),
            ], 'linemaro-config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-linemaro');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-linemaro', function () {
            return new LaravelLinemaro;
        });
    }
}
