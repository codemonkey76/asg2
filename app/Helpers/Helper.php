<?php
namespace App\Helpers;

use NumberFormatter;

class Helper
{
    public static function money($value)
    {
        return (new NumberFormatter('en_AU', NumberFormatter::CURRENCY))->formatCurrency($value, 'AUD');
    }
}
