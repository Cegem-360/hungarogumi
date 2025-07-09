<?php

namespace App\Filament\Resources\ShippingMethodResource\Pages;

use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use App\Filament\Resources\ShippingMethodResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShippingMethod extends EditRecord
{
    protected static string $resource = ShippingMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
