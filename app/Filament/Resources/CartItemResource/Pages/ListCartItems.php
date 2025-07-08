<?php

namespace App\Filament\Resources\CartItemResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\CartItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCartItems extends ListRecords
{
    protected static string $resource = CartItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
