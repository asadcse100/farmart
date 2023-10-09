<?php

namespace Botble\Ecommerce\Facades;

use Botble\Ecommerce\Supports\EcommerceHelper as BaseEcommerceHelper;
use Illuminate\Support\Facades\Facade;

class EcommerceHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseEcommerceHelper::class;
    }
}
