<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $id
 * @property string $shipping_method_id
 * @property string $title
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|ShippingMethod newModelQuery()
 * @method static Builder|ShippingMethod newQuery()
 * @method static Builder|ShippingMethod query()
 * @method static Builder|ShippingMethod whereCreatedAt($value)
 * @method static Builder|ShippingMethod whereDescription($value)
 * @method static Builder|ShippingMethod whereId($value)
 * @method static Builder|ShippingMethod whereShippingMethodId($value)
 * @method static Builder|ShippingMethod whereTitle($value)
 * @method static Builder|ShippingMethod whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ShippingMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipping_method_id',
        'title',
        'description',
    ];
}
