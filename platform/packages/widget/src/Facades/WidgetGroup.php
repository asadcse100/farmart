<?php

namespace Botble\Widget\Facades;

use Illuminate\Support\Facades\Facade;

class WidgetGroup extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'botble.widget-group-collection';
    }
}
