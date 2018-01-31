<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PakingesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakinges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paking_value');
            $table->string('paking_price');
            $table->string('paking_discount_price');
            $table->string('paking_discount_value');
            $table->string('paking_is_discounted');
            $table->integer('paking_sort_id');
            $table->integer('brand_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('shade_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('shade_id')->references('id')->on('shades');
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
        Schema::drop('pakinges');
    }
}
