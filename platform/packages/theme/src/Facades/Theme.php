<?php

namespace Botble\Theme\Facades;

use Botble\Theme\Theme as BaseTheme;
use Illuminate\Support\Facades\Facade;

class Theme extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseTheme::class;
    }
}
