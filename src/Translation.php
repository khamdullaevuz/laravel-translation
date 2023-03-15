<?php

namespace Khamdullaevuz\LaravelTranslation;

class Translation
{
    use Traits\Translatable;

    public function make($table_name, $column_name, $value, $locale, $foreign_key)
    {
        return Models\Translation::create([
            'table_name' => $table_name,
            'column_name' => $column_name,
            'value' => $value,
            'locale' => $locale,
            'foreign_key' => $foreign_key,
        ]);
    }
}