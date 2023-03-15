<?php

namespace Khamdullaevuz\LaravelTranslation\Facades;

use Illuminate\Support\Facades\Facade;

class Translatable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'translatable';
    }
}