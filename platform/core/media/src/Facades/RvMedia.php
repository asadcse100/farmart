<?php

namespace Botble\Media\Facades;

use Botble\Media\RvMedia as BaseRvMedia;
use Illuminate\Support\Facades\Facade;

class RvMedia extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseRvMedia::class;
    }
}
