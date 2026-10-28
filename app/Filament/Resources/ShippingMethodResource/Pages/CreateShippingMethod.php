<?php

declare(strict_types=1);

namespace App\Filament\Resources\ShippingMethodResource\Pages;

use App\Filament\Resources\ShippingMethodResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateShippingMethod extends CreateRecord
{
    protected static string $resource = ShippingMethodResource::class;
}
