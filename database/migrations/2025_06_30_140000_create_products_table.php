<?php

declare(strict_types=1);

use App\Models\Manufacturer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Manufacturer::class)->nullable();
            $table->string('ean')->nullable();
            $table->string('sku')->nullable();
            $table->string('factory_code')->nullable();
            $table->string('item_name')->nullable();
            $table->string('width')->nullable();
            $table->string('aspect_ratio')->nullable();
            $table->string('structure')->nullable();
            $table->string('diameter')->nullable();
            $table->string('li')->nullable();
            $table->string('si')->nullable();
            $table->string('bolt_count')->nullable();
            $table->string('center_bore')->nullable();
            $table->string('pcd')->nullable();
            $table->string('et')->nullable();
            $table->string('consumption')->nullable();
            $table->string('grip')->nullable();
            $table->string('noise_level')->nullable();
            $table->string('noise_value')->nullable();
            $table->string('weight')->nullable();
            $table->string('season')->nullable();
            $table->string('usage')->nullable();
            $table->string('all_quantity')->nullable();
            $table->string('quantity_szt_mihaly')->nullable();
            $table->string('quantity_kesmark')->nullable();
            $table->string('net_wholesale_price')->nullable();
            $table->string('net_retail_price')->nullable();
            $table->string('main_image')->nullable();
            $table->string('min_order_quantity')->nullable();
            $table->string('pattern_name')->nullable();
            $table->string('secondary_image')->nullable();
            $table->string('secondary_pattern_name')->nullable();
            $table->string('item_type_name')->nullable();
            $table->string('rim_model')->nullable();
            $table->string('rim_color')->nullable();
            $table->string('quantity_nt')->nullable();
            $table->string('for_winter')->nullable();
            $table->string('rim_structure')->nullable();
            $table->string('rim_dedicated')->nullable();
            $table->string('reinforced')->nullable();
            $table->string('runflat')->nullable();
            $table->string('tire_spec_data')->nullable();
            $table->string('tire_car_data')->nullable();
            $table->string('url')->nullable();
            $table->string('retail_price_eur')->nullable();
            $table->string('wholesale_price_eur')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
