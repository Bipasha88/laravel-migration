<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->bigInteger('barcode');
            $table->string('unit');
            $table->string('category');
            $table->string('brand');
            $table->string('business_locations');
            $table->integer('alert_quantity');
            $table->integer('purchase_price');
            $table->integer('other_price');
            $table->integer('selling_price');
            $table->string('picture');
            $table->string('vat_sd_group');
            $table->string('discount_type');
            $table->integer('discount');
            $table->text('product_description');
            $table->foreignId('unit_id')
                ->constrained('units')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('brand_id')
                ->constrained('brands')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('vat_sd_group_id')
                ->constrained('vat_sd_groups')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
