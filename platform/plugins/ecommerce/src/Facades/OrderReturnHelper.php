<?php

namespace Botble\Ecommerce\Facades;

use Botble\Ecommerce\Supports\OrderReturnHelper as BaseOrderReturnHelper;
use Illuminate\Support\Facades\Facade;

class OrderReturnHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseOrderReturnHelper::class;
    }
}
