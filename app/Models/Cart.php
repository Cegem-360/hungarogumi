<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ProductType;
use App\Services\B2bCartService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Cart extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'user_id', 'session_id'];

    /**
     * Get the products associated with the cart.
     */
    public function products(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    /**
     * Get the user that owns the cart.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function isEmpty(): bool
    {
        return $this->products->isEmpty();
    }

    public function total(): int
    {
        $total = 0;
        foreach ($this->simpleProducts() as $cartItem) {
            $total += $cartItem->quantity * $cartItem->product->regular_price;
        }

        foreach ($this->variableProducts() as $cartItem) {
            $total += $cartItem->quantity * $cartItem->variation->regular_price;
        }

        foreach ($this->cartFrontDoorItems as $cartFrontDoorItem) {
            $total += $cartFrontDoorItem->quantity * $cartFrontDoorItem->price;
        }

        return $total;
    }

    public function simpleProducts()
    {
        return $this->cartItems()->get()->filter(function ($cartItem): bool {
            return $cartItem->product->type === ProductType::SIMPLE;
        });
    }

    public function variableProducts()
    {
        return $this->cartItems()->get()->filter(function ($cartItem): bool {
            return $cartItem->product->type === ProductType::VARIABLE;
        });
    }

    public function noneFrontDoorItemsCount(): int
    {
        return $this->simpleProducts()->count() + $this->variableProducts()->count();
    }

    /**
     * Calculate detailed totals including B2B discounts
     */
    public function getDetailedTotals(): array
    {
        $subtotal = $this->total();
        $user = $this->user;

        if (! $user || ! $user->isB2bCustomer()) {
            return [
                'subtotal' => $subtotal,
                'b2b_discount' => 0,
                'b2b_discount_percentage' => 0,
                'total' => $subtotal,
                'b2b_level' => null,
                'meets_minimum' => true,
                'minimum_order_amount' => 0,
            ];
        }

        $b2bService = new B2bCartService();

        return $b2bService->getCartTotalsWithB2bDiscount($user, $subtotal);
    }

    /**
     * Check if cart meets B2B minimum order requirement
     */
    public function meetsB2bMinimumOrder(): bool
    {
        $user = $this->user;
        if (! $user || ! $user->isB2bCustomer()) {
            return true;
        }

        $b2bService = new B2bCartService();

        return $b2bService->meetsMinimumOrderRequirement($user, $this->total());
    }

    /**
     * Get amount needed to reach B2B minimum order
     */
    public function getAmountNeededForB2bDiscount(): float
    {
        $user = $this->user;
        if (! $user || ! $user->isB2bCustomer()) {
            return 0;
        }

        $b2bService = new B2bCartService();

        return $b2bService->getAmountNeededForDiscount($user, $this->total());
    }

    /**
     * Get the final total with B2B discount applied
     */
    public function getFinalTotal(): float
    {
        $totals = $this->getDetailedTotals();

        return $totals['total'];
    }

    /**
     * Get B2B discount amount
     */
    public function getB2bDiscount(): float
    {
        $totals = $this->getDetailedTotals();

        return $totals['b2b_discount'];
    }
}
