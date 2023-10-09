<?php

namespace Botble\Api\Facades;

use Botble\Api\Supports\ApiHelper as ApiHelperSupport;
use Illuminate\Support\Facades\Facade;

class ApiHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ApiHelperSupport::class;
    }
}
