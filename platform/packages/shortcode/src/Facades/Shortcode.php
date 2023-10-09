<?php

namespace Botble\Shortcode\Facades;

use Illuminate\Support\Facades\Facade;

class Shortcode extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'shortcode';
    }
}
