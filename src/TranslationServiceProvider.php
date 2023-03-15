<?php

namespace Khamdullaevuz\LaravelTranslation;

use Illuminate\Support\ServiceProvider;
class TranslationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->app->bind('translation', function () {
            return new Translation();
        });
    }
}