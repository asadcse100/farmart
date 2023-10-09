<?php

namespace Botble\Ecommerce\Enums;

use Botble\Base\Supports\Enum;

class ShippingMethodEnum extends Enum
{
    public const DEFAULT = 'default';
    public const NONE = '';

    public static $langPath = 'plugins/ecommerce::shipping.methods';
}
