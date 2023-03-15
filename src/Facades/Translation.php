<?php

namespace Khamdullaevuz\LaravelTranslation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Khamdullaevuz\LaravelTranslation\Translation getAttribute($key)
 * @method static \Khamdullaevuz\LaravelTranslation\Translation getTranslation($key, $locale)
 * @see \Khamdullaevuz\LaravelTranslation\Translation
 */

class Translation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'translation';
    }
}