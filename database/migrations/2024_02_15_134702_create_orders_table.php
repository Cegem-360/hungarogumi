<?php

declare(strict_types=1);

use App\Enums\OrderStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('user_id')->nullable();
            $table->string('payment_method')->default('bacs');
            $table->string('payment_method_title')->default('Bank Transfer');
            $table->boolean('set_paid')->default(false);

            $table->string('billing_first_name')->nullable();
            $table->string('billing_last_name')->nullable();
            $table->string('billing_address_1')->nullable();
            $table->string('billing_address_2')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_postcode')->nullable();
            $table->string('billing_country')->nullable();
            $table->string('billing_email')->nullable();
            $table->string('billing_phone')->nullable();
            $table->string('billing_vat_number')->nullable();
            $table->string('billing_company_name')->nullable();
            $table->string('billing_company_office')->nullable();

            $table->string('shipping_first_name')->nullable();
            $table->string('shipping_last_name')->nullable();
            $table->string('shipping_address_1')->nullable();
            $table->string('shipping_address_2')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_state')->nullable();
            $table->string('shipping_postcode')->nullable();
            $table->string('shipping_country')->nullable();

            $table->string('shipping_tracking_number')->default('null');

            $table->string('shipping_lines_method_id')->default('flat_rate');
            $table->string('shipping_lines_method_title')->default('Flat Rate');
            $table->string('shipping_lines_total')->default('0');

            $table->string('order_id')->nullable();
            $table->string('order_key')->nullable();
            $table->string('order_status')->default(OrderStatus::PENDING);
            $table->string('order_currency')->default(config('webshop.default_currency'));

            $table->integer('shipping_cost')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
