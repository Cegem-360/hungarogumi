<?php

namespace App\Filament\Resources\ShippingMethodResource\Pages;

use Filament\Actions\EditAction;
use App\Filament\Resources\ShippingMethodResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewShippingMethod extends ViewRecord
{
    protected static string $resource = ShippingMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
