<?php

namespace Botble\SeoHelper\Facades;

use Botble\SeoHelper\SeoHelper as BaseSeoHelper;
use Illuminate\Support\Facades\Facade;

class SeoHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseSeoHelper::class;
    }
}
