<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ResourceGroup: string implements HasLabel
{
    case ORDERS = 'Orders';
    case PRODUCTS = 'Products';
    case USERS = 'Users';
    case SHIPPING = 'Shipping';
    case BLOGS = 'Blogs';
    case NEWS = 'News';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ORDERS => __('Orders'),
            self::PRODUCTS => __('Products'),
            self::USERS => __('Users'),
            self::SHIPPING => __('Shipping'),
            self::BLOGS => __('Blogs'),
            self::NEWS => __('News'),

        };
    }
}
