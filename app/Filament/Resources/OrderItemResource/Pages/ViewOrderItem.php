<?php

namespace App\Filament\Resources\OrderItemResource\Pages;

use Filament\Actions\EditAction;
use App\Filament\Resources\OrderItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOrderItem extends ViewRecord
{
    protected static string $resource = OrderItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
