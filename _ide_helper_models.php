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
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $slug
 * @property string|null $link
 * @property string|null $featured_media
 * @property string|null $author
 * @property string|null $comment_status
 * @property string|null $ping_status
 * @property int|null $sticky
 * @property string|null $format
 * @property string|null $status
 * @property string|null $type
 * @property string|null $date
 * @property string|null $date_gmt
 * @property string|null $modified
 * @property string|null $modified_gmt
 * @property string|null $template
 * @property string|null $excerpt
 * @property string|null $guid
 * @property string|null $meta
 * @property string|null $categories
 * @property string|null $tags
 * @property string|null $yoast_head
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereCategories($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereCommentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereDateGmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereFeaturedMedia($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereModifiedGmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog wherePingStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereSticky($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereYoastHead($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $session_id
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CartItem> $cartItems
 * @property-read int|null $cart_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CartItem> $items
 * @property-read int|null $items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CartItem> $products
 * @property-read int|null $products_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cart whereUserId($value)
 */
	final class Cart extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $product_id
 * @property int $cart_id
 * @property int $quantity
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \App\Models\Cart|null $cart
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CartItem whereUpdatedAt($value)
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
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\ManufacturerFactory factory($count = null, $state = [])
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
 * @property int $id
 * @property int|null $user_id
 * @property int $shipping_method_id
 * @property string $payment_method
 * @property string $payment_method_title
 * @property bool $set_paid
 * @property string|null $billing_name
 * @property string|null $billing_address_1
 * @property string|null $billing_address_2
 * @property string|null $billing_city
 * @property string|null $billing_state
 * @property string|null $billing_postcode
 * @property string|null $billing_country
 * @property string|null $billing_email
 * @property string|null $billing_phone
 * @property string|null $billing_vat_number
 * @property string|null $billing_company_name
 * @property string|null $billing_company_office
 * @property string|null $shipping_name
 * @property string|null $shipping_address_1
 * @property string|null $shipping_address_2
 * @property string|null $shipping_city
 * @property string|null $shipping_state
 * @property string|null $shipping_postcode
 * @property string|null $shipping_country
 * @property string $shipping_tracking_number
 * @property string|null $order_key
 * @property \App\Enums\OrderStatus $order_status
 * @property string $order_currency
 * @property int $shipping_cost
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OrderItem> $orderItems
 * @property-read int|null $order_items_count
 * @property-read \App\Models\ShippingMethod $shippingMethod
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\OrderFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingCompanyOffice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingState($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereBillingVatNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereOrderCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereOrderKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order wherePaymentMethodTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereSetPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereShippingAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereShippingAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereShippingCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereShippingCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereShippingMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereShippingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereShippingPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereShippingState($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereShippingTrackingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order whereUserId($value)
 */
	final class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string|null $tax_class
 * @property string|null $subtotal
 * @property string|null $subtotal_tax
 * @property string|null $total
 * @property string|null $total_tax
 * @property int $quantity
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read \App\Models\Order|null $order
 * @property-read \App\Models\Product|null $product
 * @method static \Database\Factories\OrderItemFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereSubtotalTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereTaxClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereTotalTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrderItem whereUpdatedAt($value)
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
 * @property float|null $width
 * @property float|null $aspect_ratio
 * @property string|null $structure
 * @property float|null $diameter
 * @property string|null $li
 * @property string|null $si
 * @property string|null $bolt_count
 * @property string|null $center_bore
 * @property float|null $pcd
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
 * @property \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product\Category> $categories
 * @property int|null $price
 * @property int $is_featured
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property-read int|null $categories_count
 * @property-read \App\Models\Manufacturer|null $manufacturer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Stock> $stocks
 * @property-read int|null $stocks_count
 * @method static \Database\Factories\ProductFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereAllQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereAspectRatio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereBoltCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCategories($value)
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePrice($value)
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
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $slug
 * @property string|null $description
 * @property int $cost
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Database\Factories\ShippingMethodFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShippingMethod whereUpdatedAt($value)
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
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> $orders
 * @property-read int|null $orders_count
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
	final class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser, \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

