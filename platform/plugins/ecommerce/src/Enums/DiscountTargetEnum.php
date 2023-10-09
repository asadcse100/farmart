<?php

namespace Botble\Ecommerce\Enums;

use Botble\Base\Supports\Enum;

class DiscountTargetEnum extends Enum
{
    public const ALL_ORDERS = 'all-orders';
    public const CUSTOMER = 'customer';
    public const MINIMUM_ORDER_AMOUNT = 'amount-minimum-order';
    public const ONCE_PER_CUSTOMER = 'once-per-customer';
    public const PRODUCT_VARIANT = 'product-variant';
    public const PRODUCT_COLLECTIONS = 'group-products';
    public const SPECIFIC_PRODUCT = 'specific-product';

    public static $langPath = 'plugins/ecommerce::discount.enums.targets';
}
