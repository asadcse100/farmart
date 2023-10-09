<?php

namespace Botble\Theme\Facades;

use Botble\Theme\Manager as ManagerSupport;
use Illuminate\Support\Facades\Facade;

class Manager extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ManagerSupport::class;
    }
}
