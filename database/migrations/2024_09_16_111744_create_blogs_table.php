<?php

declare(strict_types=1);

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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('slug')->nullable();
            $table->string('link')->nullable();
            $table->string('featured_media')->nullable();
            $table->string('author')->nullable();
            $table->string('comment_status')->nullable();
            $table->string('ping_status')->nullable();
            $table->boolean('sticky')->nullable();
            $table->string('format')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->dateTime('date')->nullable();
            $table->dateTime('date_gmt')->nullable();
            $table->dateTime('modified')->nullable();
            $table->dateTime('modified_gmt')->nullable();
            $table->string('template')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('guid')->nullable();
            $table->string('meta')->nullable();
            $table->string('categories')->nullable();
            $table->string('tags')->nullable();
            $table->string('yoast_head')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
