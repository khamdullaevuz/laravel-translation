<?php

namespace Khamdullaevuz\LaravelTranslation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelTranslationServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        parent::boot();
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-translation');
    }
}
