<?php

namespace Khamdullaevuz\LaravelTranslation\Traits;

use Khamdullaevuz\LaravelTranslation\Models\Translation;

trait Translatable
{
    public function translations()
    {
        return $this->hasMany(Translation::class, 'foreign_key');
    }

    public function getAttribute($key)
    {
        if (in_array($key, $this->translatable)) {
            return $this->getTranslation($key, app()->getLocale());
        }

        return parent::getAttribute($key);
    }

    public function getTranslation($key, $locale)
    {
        $translation = $this->translations()->where('column_name', $key)->where('locale', $locale)->first();

        if ($translation) {
            return $translation->value;
        }

        return $this->getAttributeValue($key);
    }
}