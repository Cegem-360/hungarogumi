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
    ];

    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

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
    protected function tyre(Builder $query): void
    {
        $query->where('item_type_name', 'gumiabroncs');
    }
}
