<?php

namespace Botble\Stripe\Supports;

class StripeHelper
{
    public static function getStripeCurrencyMultiplier($currency = '')
    {
        $currency = strtoupper($currency);

        // default
        if (empty($currency)) {
            return 100;
        }

        // these currencies no need to multiply by 100ths
        $zeroDecimalCurrencies = [
            'BIF',
            'CLP',
            'DJF',
            'GNF',
            'JPY',
            'KMF',
            'KRW',
            'MGA',
            'PYG',
            'RWF',
            'VND',
            'VUV',
            'XAF',
            'XOF',
            'XPF',
        ];

        return in_array(strtoupper($currency), $zeroDecimalCurrencies) ? 1 : 100;
    }
}
