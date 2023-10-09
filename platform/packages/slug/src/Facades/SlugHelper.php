<?php

namespace Botble\Slug\Facades;

use Botble\Slug\SlugHelper as BaseSlugHelper;
use Illuminate\Support\Facades\Facade;

class SlugHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseSlugHelper::class;
    }
}
