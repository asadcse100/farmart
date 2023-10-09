<?php

namespace Botble\Ecommerce\Facades;

use Botble\Ecommerce\Cart\Cart as BaseCart;
use Illuminate\Support\Facades\Facade;

class Cart extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseCart::class;
    }
}
