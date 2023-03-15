<?php

namespace Khamdullaevuz\LaravelTranslation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Khamdullaevuz\LaravelTranslation\Translatable translations()
 * @method static \Khamdullaevuz\LaravelTranslation\Translatable getAttribute($key)
 * @method static \Khamdullaevuz\LaravelTranslation\Translatable getTranslation($key, $locale)
 * @see \Khamdullaevuz\LaravelTranslation\Translatable
 */

class Translatable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'translatable';
    }
}