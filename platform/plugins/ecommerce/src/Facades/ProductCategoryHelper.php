<?php

namespace Botble\Ecommerce\Facades;

use Botble\Ecommerce\Supports\ProductCategoryHelper as BaseProductCategoryHelper;
use Illuminate\Support\Facades\Facade;

class ProductCategoryHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseProductCategoryHelper::class;
    }
}
