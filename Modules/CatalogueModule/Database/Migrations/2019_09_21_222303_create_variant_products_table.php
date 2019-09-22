<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variant_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ProductName');
            $table->float('ProductPrice');
            $table->integer('ProductCategory');
            $table->integer('ProductTaxClass');
            $table->integer('ProductPriceList');
            $table->integer('ProductMeasureUnit');
            $table->string('ProductDescription');
            $table->date('ProductProductionDate');
            $table->date('ProductExpireyDate');
            $table->string('ProductSKU');
            $table->integer('ProductBrand');
            $table->integer('ProductManufacturer');
            $table->string('Image1');
            $table->string('Image2');
            $table->string('Image3');
            $table->string('Image4');
            $table->integer('color');
            $table->integer('size');
            $table->integer('flavour');
            $table->integer('material');
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
        Schema::dropIfExists('variant_products');
    }
}
