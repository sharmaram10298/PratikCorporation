<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('article');
            $table->integer('stock');
            $table->integer('price');
            $table->string('category');
            $table->string('cage')->nullable();
            $table->string('temperature_range')->nullable();
            $table->string('tolerance_class')->nullable();
            $table->string('roller_rows')->nullable();
            $table->string('product_range')->nullable();
            $table->string('arrangement')->nullable();
            $table->string('weight')->nullable();
            $table->string('productid')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('customs_tariff_number')->nullable();
            $table->string('manufacturer_part_number')->nullable();
            $table->string('inner_dimension')->nullable();
            $table->string('outer_dimension')->nullable();
            $table->string('width')->nullable();
            $table->string('product_image')->nullable();
            $table->integer('vendor_id')->default('0');;
          	$table->integer('admin_id')->default('0');;
            $table->enum('status',['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
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
