<?php

namespace Khamdullaevuz\LaravelTranslation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelTranslationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-translation')
            ->hasMigrations('create_translations_table');
    }
}
