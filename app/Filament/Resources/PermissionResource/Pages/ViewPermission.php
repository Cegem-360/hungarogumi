<?php

namespace App\Filament\Resources\PermissionResource\Pages;

use Filament\Actions\EditAction;
use App\Filament\Resources\PermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPermission extends ViewRecord
{
    protected static string $resource = PermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
