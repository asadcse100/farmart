<?php

namespace Botble\Ecommerce\Facades;

use Botble\Ecommerce\Supports\OrderHelper as BaseOrderHelper;
use Illuminate\Support\Facades\Facade;

class OrderHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseOrderHelper::class;
    }
}
