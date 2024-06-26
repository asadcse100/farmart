<?php

namespace Botble\Ecommerce\Facades;

use Botble\Ecommerce\Supports\FlashSaleSupport;
use Illuminate\Support\Facades\Facade;

class FlashSale extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return FlashSaleSupport::class;
    }
}
