<?php

namespace App\Filament\Resources\CartResource\Pages;

use Filament\Actions\EditAction;
use App\Filament\Resources\CartResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCart extends ViewRecord
{
    protected static string $resource = CartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
