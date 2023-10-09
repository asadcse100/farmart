<?php

namespace Botble\Marketplace\Facades;

use Botble\Marketplace\Supports\MarketplaceHelper as MarketplaceHelperSupport;
use Illuminate\Support\Facades\Facade;


class MarketplaceHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return MarketplaceHelperSupport::class;
    }
}
