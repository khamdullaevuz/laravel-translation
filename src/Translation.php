<?php

namespace Khamdullaevuz\LaravelTranslation;

use Khamdullaevuz\LaravelTranslation\Models\Translation as TranslationModel;
use Khamdullaevuz\LaravelTranslation\Traits\Translatable;

class Translation
{
    use Translatable;

    public function make($table_name, $column_name, $value, $locale, $foreign_key)
    {
        return TranslationModel::create([
            'table_name' => $table_name,
            'column_name' => $column_name,
            'value' => $value,
            'locale' => $locale,
            'foreign_key' => $foreign_key,
        ]);
    }
}