<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimpleproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simple_products', function (Blueprint $table) {
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
        Schema::dropIfExists('simple_products');
    }
}
