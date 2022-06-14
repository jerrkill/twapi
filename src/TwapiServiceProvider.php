<?php

namespace Jerrkill\Twapi;

class TwapiServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = false;

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'twapi');

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('twapi.php'),
        ]);

        $this->app->singleton(Twapi::class, function () {
            return new Twapi();
        });

        $this->app->alias(Twapi::class, 'twapi');
    }

    public function provides()
    {
        return [Twapi::class, 'twapi'];
    }
}
