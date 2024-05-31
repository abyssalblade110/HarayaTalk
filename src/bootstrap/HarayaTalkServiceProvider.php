<?php

namespace HarayaTalk\Providers;

use Illuminate\Support\ServiceProvider;

class HarayaTalkServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register package services
        $this->mergeConfigFrom(__DIR__.'/../config/harayatalk.php', 'harayatalk');
    }

    public function boot()
    {
        // Publish configuration
        $this->publishes([
            __DIR__.'/../config/harayatalk.php' => config_path('harayatalk.php'),
        ]);

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
