<?php

namespace Botble\Theme\Facades;

use Botble\Theme\ThemeOption as BaseThemeOption;
use Illuminate\Support\Facades\Facade;

class ThemeOption extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseThemeOption::class;
    }
}
