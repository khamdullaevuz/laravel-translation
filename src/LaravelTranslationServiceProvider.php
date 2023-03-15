<?php

namespace Khamdullaevuz\LaravelTranslation;

use Illuminate\Support\ServiceProvider;
class LaravelTranslationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->app->bind('translatable', function () {
            return new Translatable();
        });
    }
}