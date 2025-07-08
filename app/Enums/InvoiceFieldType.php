<?php

declare(strict_types=1);

namespace App\Enums;

enum InvoiceFieldType: string
{
    case BILLING = 'billing';
    case SHIPPING = 'shipping';

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
