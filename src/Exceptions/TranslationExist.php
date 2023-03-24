<?php

namespace Khamdullaevuz\LaravelTranslation\Exceptions;

class TranslationExist extends \Exception
{
    public function __construct($message = 'Translation already exists', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}