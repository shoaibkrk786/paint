<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_rand_id');
            $table->string('shipping_address');
            $table->string('shipping_city');
            $table->string('shipping_email');
            $table->string('shipping_mobile_number');
            $table->string('shipping_state');
            $table->integer('unit_price');
            $table->string('packing_value');
            $table->integer('discounted_price');
            $table->string('name');
            $table->string('comments');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('brand_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('shade_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('shade_id')->references('id')->on('shades');
            $table->foreign('user_id')->references('id')->on('users');
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
        //
    }
}
