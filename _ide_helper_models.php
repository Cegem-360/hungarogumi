<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CartItem> $cartItems
 * @property-read int|null $cart_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CartItem> $products
 * @property-read int|null $products_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart query()
 */
	final class Cart extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Cart|null $cart
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem query()
 */
	final class CartItem extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Manufacturer whereUpdatedAt($value)
 */
	final class Manufacturer extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OrderItem> $orderItems
 * @property-read int|null $order_items_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order query()
 */
	final class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Order|null $order
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem query()
 */
	final class OrderItem extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $manufacturer_id
 * @property string|null $ean
 * @property string|null $sku
 * @property string|null $factory_code
 * @property string|null $item_name
 * @property string|null $width
 * @property string|null $aspect_ratio
 * @property string|null $structure
 * @property string|null $diameter
 * @property string|null $li
 * @property string|null $si
 * @property string|null $bolt_count
 * @property string|null $center_bore
 * @property string|null $pcd
 * @property string|null $et
 * @property string|null $consumption
 * @property string|null $grip
 * @property string|null $noise_level
 * @property string|null $noise_value
 * @property string|null $weight
 * @property string|null $season
 * @property string|null $usage
 * @property int|null $all_quantity
 * @property int|null $quantity_szt_mihaly
 * @property int|null $quantity_kesmark
 * @property int|null $net_wholesale_price
 * @property int|null $net_retail_price
 * @property string|null $main_image
 * @property string|null $min_order_quantity
 * @property string|null $pattern_name
 * @property string|null $secondary_image
 * @property string|null $secondary_pattern_name
 * @property string|null $item_type_name
 * @property string|null $rim_model
 * @property string|null $rim_color
 * @property string|null $quantity_nt
 * @property string|null $for_winter
 * @property string|null $rim_structure
 * @property string|null $rim_dedicated
 * @property string|null $reinforced
 * @property string|null $runflat
 * @property string|null $tire_spec_data
 * @property string|null $tire_car_data
 * @property string|null $url
 * @property int|null $retail_price_eur
 * @property int|null $wholesale_price_eur
 * @property int|null $is_featured
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product\Category> $categories
 * @property-read int|null $categories_count
 * @property-read \App\Models\Manufacturer|null $manufacturer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Stock> $stocks
 * @property-read int|null $stocks_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereAllQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereAspectRatio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereBoltCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCenterBore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereConsumption($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereDiameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereEan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereEt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereFactoryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereForWinter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereGrip($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereItemTypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereLi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereMainImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereMinOrderQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereNetRetailPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereNetWholesalePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereNoiseLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereNoiseValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePatternName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePcd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereQuantityKesmark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereQuantityNt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereQuantitySztMihaly($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereReinforced($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereRetailPriceEur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereRimColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereRimDedicated($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereRimModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereRimStructure($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereRunflat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSeason($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSecondaryImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSecondaryPatternName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereStructure($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereTireCarData($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereTireSpecData($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUsage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWholesalePriceEur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWidth($value)
 */
	final class Product extends \Eloquent {}
}

namespace App\Models\Product{
/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category query()
 */
	final class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod query()
 */
	final class ShippingMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stock query()
 */
	final class Stock extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\CarbonImmutable|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	final class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser {}
}

