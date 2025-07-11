<?php

declare(strict_types=1);

namespace App\Filament\Imports;

use App\Models\Product;
use App\Models\Product\Category;
use Exception;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
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

        // Képek letöltése ha vannak URL-ek
        $mainImage = $this->downloadImageIfNeeded($this->data['main_image'] ?? null);
        $secondaryImage = $this->downloadImageIfNeeded($this->data['secondary_image'] ?? null);

        $product = Product::firstOrNew([
            'id' => $this->data['id'],
        ]);

        $product->categories = [$category->id];

        // Képek mentése a termékhez - ha sikerült letölteni, akkor a helyi útvonalat, ha nem akkor az eredeti URL-t
        $product->main_image = $mainImage ?? $this->data['main_image'] ?? null;
        $product->secondary_image = $secondaryImage ?? $this->data['secondary_image'] ?? null;

        return $product;
    }

    /**
     * Letölti a képet ha még nem létezik
     */
    private function downloadImageIfNeeded(?string $imageUrl): ?string
    {
        if (empty($imageUrl) || ! filter_var($imageUrl, FILTER_VALIDATE_URL)) {
            return null;
        }

        try {
            // Generálunk egy fájlnevet az URL alapján
            $fileName = basename(parse_url($imageUrl, PHP_URL_PATH));

            // Ha nincs kiterjesztés, próbáljuk meg kitalálni
            if (! pathinfo($fileName, PATHINFO_EXTENSION)) {
                $fileName .= '.jpg';
            }

            // Egyedi fájlnév generálása ha már létezik
            $originalFileName = $fileName;
            $counter = 1;
            while (Storage::disk('public')->exists('products/images/'.$fileName)) {
                $pathInfo = pathinfo($originalFileName);
                $fileName = $pathInfo['filename'].'_'.$counter.'.'.($pathInfo['extension'] ?? 'jpg');
                $counter++;
            }

            $filePath = 'products/images/'.$fileName;

            // Ellenőrizzük, hogy a fájl már létezik-e
            if (Storage::disk('public')->exists($filePath)) {
                return $filePath;
            }

            // Letöltjük a képet
            $response = Http::timeout(30)->get($imageUrl);

            if ($response->successful()) {
                // Mentjük a fájlt
                Storage::disk('public')->put($filePath, $response->body());

                Log::info("Kép sikeresen letöltve: {$imageUrl} -> {$filePath}");

                return $filePath;
            }
            Log::warning("Nem sikerült letölteni a képet: {$imageUrl} (HTTP {$response->status()})");

            return null;

        } catch (Exception $e) {
            Log::error("Hiba a kép letöltésekor: {$imageUrl} - ".$e->getMessage());

            return null;
        }
    }
}
