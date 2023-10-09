<?php

namespace Botble\Ecommerce\Facades;

use Botble\Ecommerce\Supports\CurrencySupport;
use Illuminate\Support\Facades\Facade;

class Currency extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return CurrencySupport::class;
    }
}
