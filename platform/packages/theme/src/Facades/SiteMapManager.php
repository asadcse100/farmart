<?php

namespace Botble\Theme\Facades;

use Botble\Theme\Supports\SiteMapManager as SiteMapManagerSupport;
use Illuminate\Support\Facades\Facade;

class SiteMapManager extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SiteMapManagerSupport::class;
    }
}
