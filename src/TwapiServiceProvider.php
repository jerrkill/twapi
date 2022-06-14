<?php

/*
 * This file is part of the jerrkill/twapi.
 *
 * (c) jerrkill <jerrkill123@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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
