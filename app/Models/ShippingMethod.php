<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class ShippingMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'description',
        'cost',
    ];

    protected function casts()
    {
        return [
            'cost' => 'int',
        ];
    }
}
