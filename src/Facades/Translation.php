<?php

namespace Khamdullaevuz\LaravelTranslation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Khamdullaevuz\LaravelTranslation\Translation make($table_name, $column_name, $value, $locale, $foreign_key)
 * @see \Khamdullaevuz\LaravelTranslation\Translation
 */

class Translation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'translation';
    }
}