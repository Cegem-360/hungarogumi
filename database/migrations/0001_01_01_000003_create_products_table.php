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
            $table->float('width')->nullable();
            $table->float('aspect_ratio')->nullable();
            $table->string('structure')->nullable();
            $table->float('diameter')->nullable();
            $table->string('li')->nullable();
            $table->string('si')->nullable();
            $table->string('bolt_count')->nullable();
            $table->string('center_bore')->nullable();
            $table->float('pcd')->nullable();
            $table->string('et')->nullable();
            $table->string('consumption')->nullable();
            $table->string('grip')->nullable();
            $table->string('noise_level')->nullable();
            $table->string('noise_value')->nullable();
            $table->string('weight')->nullable();
            $table->string('season')->nullable();
            $table->string('usage')->nullable();
            $table->integer('all_quantity')->nullable();
            $table->integer('quantity_szt_mihaly')->nullable();
            $table->integer('quantity_kesmark')->nullable();
            $table->integer('net_wholesale_price')->nullable();
            $table->integer('net_retail_price')->nullable();
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
            $table->integer('retail_price_eur')->nullable();
            $table->integer('wholesale_price_eur')->nullable();
            $table->json('categories')->nullable();
            $table->integer('price')->nullable();
            $table->boolean('is_featured')->default(false);
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
