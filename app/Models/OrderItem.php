<?php

declare(strict_types=1);

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class OrderItem extends Model
{
    use HasFactory;

    protected $casts = [
        'product_id' => 'int',
        'quantity' => 'int',
    ];

    protected $fillable = [
        'order_id',
        'product_id',
        'product_variation_id',
        'tax_class',
        'subtotal',
        'subtotal_tax',
        'total',
        'total_tax',
        'quantity',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
