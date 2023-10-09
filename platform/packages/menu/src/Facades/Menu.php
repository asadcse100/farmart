<?php

namespace Botble\Menu\Facades;

use Botble\Menu\Menu as BaseMenu;
use Illuminate\Support\Facades\Facade;

class Menu extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseMenu::class;
    }
}
