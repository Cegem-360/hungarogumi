<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Manufacturer;
use App\Models\Product;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use phpseclib3\Net\SFTP;

final class ImportExternalProducts extends Command
{
    protected $signature = 'products:import-external
                            {--dry-run : Run import without saving to database}
                            {--limit= : Limit number of products to import}';

    protected $description = 'Import products from external SFTP server (product_feed.csv)';

    private SFTP $sftp;

    private int $created = 0;

    private int $updated = 0;

    private int $skipped = 0;

    private int $errors = 0;

    public function handle(): int
    {
        $this->info('Starting external product import...');
        $this->info('');

        try {
            // Connect to SFTP
            $this->connectToSftp();

            // Download and parse CSV
            $products = $this->downloadAndParseCsv();

            // Import products
            $this->importProducts($products);

            // Display summary
            $this->displaySummary();

            return self::SUCCESS;
        } catch (Exception $e) {
            $this->error('Import failed: '.$e->getMessage());
            Log::error('External product import failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return self::FAILURE;
        }
    }

    private function connectToSftp(): void
    {
        $this->info('Connecting to SFTP server...');

        $host = config('services.external_feed.host', '165.22.84.139');
        $port = config('services.external_feed.port', 22);
        $username = config('services.external_feed.username', 'feed');
        $password = config('services.external_feed.password');

        $this->sftp = new SFTP($host, $port);

        if (! $this->sftp->login($username, $password)) {
            throw new Exception('SFTP authentication failed');
        }

        $this->info('✓ Connected to SFTP server');
        $this->info('');
    }

    private function downloadAndParseCsv(): array
    {
        $this->info('Downloading CSV file...');

        $csvContent = $this->sftp->get('product_feed.csv');

        if ($csvContent === false) {
            throw new Exception('Failed to download CSV file');
        }

        $this->info('✓ Downloaded CSV file ('.number_format(strlen($csvContent)).' bytes)');
        $this->info('Parsing CSV data...');

        // Parse CSV
        $lines = explode("\n", $csvContent);
        $headerLine = array_shift($lines);

        // Get headers
        $headers = str_getcsv($headerLine, ';', '"', '');

        $products = [];
        $limit = $this->option('limit') ? (int) $this->option('limit') : null;

        foreach ($lines as $index => $line) {
            if (empty(trim($line))) {
                continue;
            }

            if ($limit && count($products) >= $limit) {
                break;
            }

            $row = str_getcsv($line, ';', '"', '');

            if (count($row) !== count($headers)) {
                $this->warn("Skipping line ".($index + 2).": column count mismatch");

                continue;
            }

            $products[] = array_combine($headers, $row);
        }

        $this->info('✓ Parsed '.number_format(count($products)).' products');
        $this->info('');

        return $products;
    }

    private function importProducts(array $products): void
    {
        $this->info('Importing products...');

        $progressBar = $this->output->createProgressBar(count($products));
        $progressBar->start();

        foreach ($products as $productData) {
            try {
                $this->importProduct($productData);
            } catch (Exception $e) {
                $this->errors++;
                Log::error('Failed to import product', [
                    'product_id' => $productData['id'] ?? 'unknown',
                    'error' => $e->getMessage(),
                ]);
            }

            $progressBar->advance();
        }

        $progressBar->finish();
        $this->info('');
        $this->info('');
    }

    private function importProduct(array $data): void
    {
        // Skip if required fields are missing (SKU is the unique identifier)
        if (empty($data['Cikkszám']) || empty($data['Cikknév'])) {
            $this->skipped++;

            return;
        }

        // Map CSV data to Product model fields
        $productData = [
            'ean' => $data['EAN'] ?: null,
            'sku' => $data['Cikkszám'],
            'factory_code' => $data['Gyári kód'] ?: null,
            'item_name' => $data['Cikknév'],
            'slug' => Str::slug($data['Cikknév']),
            'manufacturer_id' => $this->getOrCreateManufacturer($data['Gyártó'] ?: null),
            'width' => $this->parseNumeric($data['Szélesség'] ?? null),
            'aspect_ratio' => $this->parseNumeric($data['Per'] ?? null),
            'structure' => $data['Szerkezet'] ?: null,
            'diameter' => $this->parseNumeric($data['Átmérő'] ?? null),
            'li' => $data['LI'] ?: null,
            'si' => $data['SI'] ?: null,
            'bolt_count' => $this->parseNumeric($data['Furatszám'] ?? null),
            'center_bore' => $this->parseNumeric($data['Központi furat'] ?? null),
            'pcd' => $data['Osztó'] ?: null,
            'et' => $this->parseNumeric($data['ET'] ?? null),
            'consumption' => $data['Fogyasztás'] ?: null,
            'grip' => $data['Tapadás'] ?: null,
            'noise_level' => $data['Zajszint'] ?: null,
            'noise_value' => $this->parseNumeric($data['Zajszint érték'] ?? null),
            'weight' => $this->parseNumeric($data['Súly'] ?? null),
            'season' => $this->parseSeason($data['Idény'] ?? null),
            'usage' => $data['Felhasználás'] ?: null,
            'all_quantity' => $this->parseNumeric($data['Összes készlet'] ?? null) ?? 0,
            'quantity_szt_mihaly' => $this->parseNumeric($data['Készlet - Szentmihályi út'] ?? null) ?? 0,
            'quantity_kesmark' => $this->parseNumeric($data['Készlet - Késmárk utca'] ?? null) ?? 0,
            'net_wholesale_price' => $this->parseNumeric($data['Nettó nagyker ár'] ?? null),
            'net_retail_price' => $this->parseNumeric($data['Nettó kisker ár'] ?? null),
            'main_image' => $data['Termék kép'] ?: null,
            'min_order_quantity' => $this->parseNumeric($data['Minimum rendelhető mennyiség'] ?? null),
            'pattern_name' => $data['minta név'] ?: null,
            'secondary_image' => $data['termek_kep_2'] ?: null,
            'secondary_pattern_name' => $data['minta_nev_2'] ?: null,
            'item_type_name' => $data['cikk_tipus_név'] ?: null,
            'rim_model' => $data['felni_model'] ?: null,
            'rim_color' => $data['felni_szin'] ?: null,
            'quantity_nt' => $this->parseNumeric($data['Készlet - nt'] ?? null) ?? 0,
            'for_winter' => $data['Télre szerelhető felni'] ?: null,
            'rim_structure' => $data['Felni szerk.'] ?: null,
            'rim_dedicated' => $data['Felni dedikált'] ?: null,
            'reinforced' => $data['Erősített'] ?: null,
            'runflat' => $data['Defekttűrő'] ?: null,
            'tire_spec_data' => $data['Gumi spec. adat'] ?: null,
            'tire_car_data' => $data['Gumi autó adat'] ?: null,
            'url' => $data['url'] ?: null,
            'retail_price_eur' => $this->parseNumeric($data['retail_price_eur'] ?? null),
            'wholesale_price_eur' => $this->parseNumeric($data['wholesale_price_eur'] ?? null),
            'is_external' => ($this->parseNumeric($data['Készlet - Szentmihályi út'] ?? null) ?? 0) == 0
                && ($this->parseNumeric($data['Készlet - Késmárk utca'] ?? null) ?? 0) == 0,
        ];

        if ($this->option('dry-run')) {
            $this->skipped++;

            return;
        }

        // Update or create product based on SKU
        $product = Product::query()->where('sku', $productData['sku'])->first();

        if ($product) {
            $product->update($productData);
            $this->updated++;
        } else {
            Product::query()->create($productData);
            $this->created++;
        }
    }

    private function getOrCreateManufacturer(?string $name): ?int
    {
        if (empty($name)) {
            return null;
        }

        $manufacturer = Manufacturer::query()->firstOrCreate(
            ['name' => $name],
            ['slug' => Str::slug($name)]
        );

        return $manufacturer->id;
    }

    private function parseNumeric(?string $value): ?float
    {
        if (empty($value)) {
            return null;
        }

        // Remove whitespace and convert comma to dot
        $cleaned = str_replace([' ', ','], ['', '.'], trim($value));

        if (! is_numeric($cleaned)) {
            return null;
        }

        return (float) $cleaned;
    }

    private function parseSeason(?string $season): ?int
    {
        if (empty($season)) {
            return null;
        }

        return match (mb_strtolower(trim($season))) {
            'nyári', 'summer' => 1,
            'téli', 'winter' => 2,
            'négy évszakos', 'all season', 'all-season' => 3,
            default => null,
        };
    }

    private function displaySummary(): void
    {
        $this->info('Import completed!');
        $this->info('');
        $this->table(
            ['Status', 'Count'],
            [
                ['Created', $this->created],
                ['Updated', $this->updated],
                ['Skipped', $this->skipped],
                ['Errors', $this->errors],
            ]
        );
    }
}
