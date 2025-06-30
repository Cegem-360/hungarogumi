<?php

namespace App\Filament\Resources\StockResource\Pages;

use Filament\Actions\EditAction;
use App\Filament\Resources\StockResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStock extends ViewRecord
{
    protected static string $resource = StockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
