<?php

namespace Botble\Theme\Facades;

use Botble\Theme\Supports\AdminBar as AdminBarSupport;
use Illuminate\Support\Facades\Facade;

class AdminBar extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return AdminBarSupport::class;
    }
}
