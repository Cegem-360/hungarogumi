<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Product\Category;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Number;

final class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ean',
        'sku',
        'factory_code',
        'item_name',
        'slug',
        'manufacturer_id', // Manufacturer:id
        'width',
        'aspect_ratio',
        'structure',
        'diameter',
        'li',
        'si',
        'bolt_count',
        'center_bore',
        'pcd',
        'et',
        'consumption',
        'grip',
        'noise_level',
        'noise_value',
        'weight',
        'season',
        'usage',
        'all_quantity',
        'quantity_szt_mihaly',
        'quantity_kesmark',
        'net_wholesale_price',
        'net_retail_price',
        'main_image',
        'min_order_quantity',
        'pattern_name',
        'secondary_image',
        'secondary_pattern_name',
        'item_type_name',
        'rim_model',
        'rim_color',
        'quantity_nt',
        'for_winter',
        'rim_structure',
        'rim_dedicated',
        'reinforced',
        'runflat',
        'tire_spec_data',
        'tire_car_data',
        'url',
        'retail_price_eur',
        'wholesale_price_eur',
        'price',
        'is_featured',
        'categories',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'categories' => 'json',
    ];

    public static function speedIndexes(): array
    {
        return [
            'Q' => 160,
            'R' => 170,
            'S' => 180,
            'T' => 190,
            'U' => 200,
            'H' => 210,
            'V' => 240,
            'W' => 270,
            'X' => 300,
        ];
    }

    public static function loadIndexes(): array
    {
        return [
            '60' => '250', '61' => '257', '62' => '265', '63' => '272', '64' => '280', '65' => '290', '66' => '300', '67' => '307', '68' => '315', '69' => '325',
            '70' => '335', '71' => '345', '72' => '355', '73' => '365', '74' => '375', '75' => '387', '76' => '400', '77' => '412', '78' => '425', '79' => '437',
            '80' => '450', '81' => '462', '82' => '475', '83' => '487', '84' => '500', '85' => '515', '86' => '530', '87' => '545', '88' => '560', '89' => '580',
            '90' => '600', '91' => '615', '92' => '630', '93' => '650', '94' => '670', '95' => '690', '96' => '710', '97' => '730', '98' => '750', '99' => '775',
            '100' => '800', '101' => '825', '102' => '850', '103' => '875', '104' => '900', '105' => '925', '106' => '950', '107' => '975', '108' => '1000', '109' => '1030',
            '110' => '1060', '111' => '1090', '112' => '1120', '113' => '1150', '114' => '1180', '115' => '1215', '116' => '1250', '117' => '1285', '118' => '1320', '119' => '1360',
            '120' => '1400', '121' => '1450', '122' => '1500', '123' => '1550', '124' => '1600', '125' => '1650', '126' => '1700', '127' => '1750', '128' => '1800', '129' => '1850',
            '130' => '1900', '131' => '1950', '132' => '2000', '133' => '2060', '134' => '2120', '135' => '2180', '136' => '2240', '137' => '2300', '138' => '2360', '139' => '2430',
            '140' => '2500', '141' => '2575', '142' => '2650', '143' => '2725', '144' => '2800', '145' => '2900', '146' => '3000', '147' => '3075', '148' => '3150', '149' => '3250',
            '150' => '3350', '151' => '3450', '152' => '3550', '153' => '3650', '154' => '3750', '155' => '3875', '156' => '4000', '157' => '4125', '158' => '4250', '159' => '4375',
        ];
    }

    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }

    /*  public function stocks(): HasMany
     {
         return $this->hasMany(Stock::class);
     } */

    /*  public function categories(): BelongsToMany
     {
         return $this->belongsToMany(Category::class);
     } */

    public function getPrice(): int|float
    {
        return (int) $this->net_retail_price ?? 0;
    }

    public function getPriceWithCurrency(): string
    {
        return Number::currency(((int) $this->net_retail_price ?? 0), 'HUF', 'hu', 0);
    }

    public function isTyre(): bool
    {
        return $this->item_type_name === 'gumiabroncs';
    }

    public function isSteelWheel(): bool
    {
        return $this->item_type_name === 'lemezfelni';
    }

    public function isAlloyWheel(): bool
    {
        return $this->item_type_name === 'alufelni';
    }

    /*  public function loadIndexes(): Collection
     {
         return self::query()->distinct()->pluck('li');
     } */

    #[Scope]
    protected function summer(Builder $query): void
    {
        $query->where('season', 1);
    }

    #[Scope]
    protected function winter(Builder $query): void
    {
        $query->where('season', 2);
    }

    #[Scope]
    protected function allSeason(Builder $query): void
    {
        $query->where('season', 3);
    }

    #[Scope]
    protected function alloyWheel(Builder $query): void
    {
        $query->where('item_type_name', 'alufelni');
    }

    #[Scope]
    protected function steelWheel(Builder $query): void
    {
        $query->where('item_type_name', 'lemezfelni');
    }

    #[Scope]
    protected function wheel(Builder $query): void
    {
        $query->alloyWheel()
            ->orWhere(function (Builder $q): void {
                $q->steelWheel();
            });
    }

    #[Scope]
    protected function tyre(Builder $query): void
    {
        $query->where('item_type_name', 'gumiabroncs');
    }

    #[Scope]
    protected function punctureResistant(Builder $query): void
    {
        $query->whereNotNull('runflat');
    }

    #[Scope]
    protected function reinforced(Builder $query): void
    {
        $query->whereNotNull('reinforced');
    }
}
