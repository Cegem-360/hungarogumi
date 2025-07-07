<?php

declare(strict_types=1);

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $dateFormat = 'Y-m-d';

    protected $casts = [
        'set_paid' => 'bool',
        'created_at' => 'date',
    ];

    protected $fillable = [
        'id',
        'user_id',
        'payment_method',
        'payment_method_title',
        'set_paid',
        'billing_first_name',
        'billing_last_name',
        'billing_address_1',
        'billing_address_2',
        'billing_city',
        'billing_state',
        'billing_postcode',
        'billing_country',
        'billing_email',
        'billing_phone',
        'billing_vat_number',
        'billing_company_name',
        'billing_company_office',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_address_1',
        'shipping_address_2',
        'shipping_city',
        'shipping_state',
        'shipping_postcode',
        'shipping_country',
        'shipping_tracking_number',
        'shipping_lines_method_id',
        'shipping_lines_method_title',
        'shipping_lines_total',
        'order_id',
        'order_key',
        'order_status',
        'order_currency',
        'shipping_cost',
    ];

    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orderFrontDoorItems(): HasMany
    {
        return $this->hasMany(OrderFrontDoorItem::class);
    }

    public function orderTotal(): int|float
    {
        $total = 0;
        foreach ($this->orderItems as $orderItem) {
            $total += $orderItem->total;
        }

        foreach ($this->orderFrontDoorItems as $orderFrontDoorItem) {
            $total += $orderFrontDoorItem->total;
        }

        return $total;
    }
}
