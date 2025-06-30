<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'manufacturer_id',
        'ean',
        'item_number',
        'factory_code',
        'item_name',
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
        'main_image',
        'min_order_quantity',
        'pattern_name',
        'secondary_image',
        'secondary_pattern_name',
        'item_type_name',
        'rim_model',
        'rim_color',
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
}
