<?php

namespace Botble\Ecommerce\Facades;

use Botble\Ecommerce\Supports\DiscountSupport;
use Illuminate\Support\Facades\Facade;

class Discount extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return DiscountSupport::class;
    }
}
