<?php

namespace Botble\Analytics\Facades;

use Botble\Analytics\Abstracts\AnalyticsAbstract;
use Illuminate\Support\Facades\Facade;

class Analytics extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return AnalyticsAbstract::class;
    }
}
