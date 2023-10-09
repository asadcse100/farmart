<?php

namespace Botble\Ecommerce\Facades;

use Botble\Ecommerce\Supports\InvoiceHelper as BaseInvoiceHelper;
use Illuminate\Support\Facades\Facade;

class InvoiceHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseInvoiceHelper::class;
    }
}
