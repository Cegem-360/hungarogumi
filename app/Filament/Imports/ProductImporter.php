<?php

declare(strict_types=1);

namespace App\Filament\Imports;

use App\Models\Product;
use App\Models\Product\Category;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;
use Illuminate\Support\Str;

final class ProductImporter extends Importer
{
    protected static ?string $model = Product::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('manufacturer')
                ->relationship('manufacturer', 'name'),
            ImportColumn::make('ean'),
            ImportColumn::make('sku'),
            ImportColumn::make('factory_code'),
            ImportColumn::make('item_name'),
            ImportColumn::make('width'),
            ImportColumn::make('aspect_ratio'),
            ImportColumn::make('structure'),
            ImportColumn::make('diameter'),
            ImportColumn::make('li'),
            ImportColumn::make('si'),
            ImportColumn::make('bolt_count'),
            ImportColumn::make('center_bore'),
            ImportColumn::make('pcd'),
            ImportColumn::make('et'),
            ImportColumn::make('consumption'),
            ImportColumn::make('grip'),
            ImportColumn::make('noise_level'),
            ImportColumn::make('noise_value'),
            ImportColumn::make('weight'),
            ImportColumn::make('season'),
            ImportColumn::make('usage'),
            ImportColumn::make('all_quantity'),
            ImportColumn::make('quantity_szt_mihaly'),
            ImportColumn::make('quantity_kesmark'),
            ImportColumn::make('net_wholesale_price'),
            ImportColumn::make('net_retail_price'),
            ImportColumn::make('quantity_nt'),
            ImportColumn::make('main_image'),
            ImportColumn::make('min_order_quantity'),
            ImportColumn::make('pattern_name'),
            ImportColumn::make('secondary_image'),
            ImportColumn::make('secondary_pattern_name'),
            ImportColumn::make('item_type_name'),
            ImportColumn::make('rim_model'),
            ImportColumn::make('rim_color'),
            ImportColumn::make('for_winter'),
            ImportColumn::make('rim_structure'),
            ImportColumn::make('rim_dedicated'),
            ImportColumn::make('reinforced'),
            ImportColumn::make('runflat'),
            ImportColumn::make('tire_spec_data'),
            ImportColumn::make('tire_car_data'),
            ImportColumn::make('url'),
            ImportColumn::make('retail_price_eur'),
            ImportColumn::make('wholesale_price_eur'),
        ];
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your product import has completed and '.Number::format($import->successful_rows).' '.str('row')->plural($import->successful_rows).' imported.';

        if (($failedRowsCount = $import->getFailedRowsCount()) !== 0) {
            $body .= ' '.Number::format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to import.';
        }

        return $body;
    }

    public function resolveRecord(): Product
    {
        $category = Category::firstOrCreate([
            'name' => $this->data['item_type_name'],
        ], [
            'slug' => Str::slug($this->data['item_type_name'], language: 'hu'),
            'category_id' => null,
            'description' => '',
            'display' => true,
        ]);

        return Product::firstOrNew([
            'id' => $this->data['id'],
            'categories' => [$category->id],
        ]);
    }
}
