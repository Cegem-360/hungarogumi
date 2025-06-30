<?php

declare(strict_types=1);

namespace App\Filament\Imports;

use App\Models\Manufacturer;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

final class ManufacturerImporter extends Importer
{
    protected static ?string $model = Manufacturer::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('name')
                ->requiredMapping()
                ->rules(['required']),
        ];
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your manufacturer import has completed and '.Number::format($import->successful_rows).' '.str('row')->plural($import->successful_rows).' imported.';

        if (($failedRowsCount = $import->getFailedRowsCount()) !== 0) {
            $body .= ' '.Number::format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to import.';
        }

        return $body;
    }

    public function resolveRecord(): Manufacturer
    {
        return Manufacturer::firstOrNew([
            'name' => $this->data['name'],
        ]);
    }
}
