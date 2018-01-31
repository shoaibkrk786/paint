<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shade_name');
            $table->string('shade_code');
            $table->string('shade_pic');
            $table->string('shade_color');
            $table->string('shade_type');
            $table->integer('shade_sort_id');
            $table->integer('brand_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::drop('shades');
    }
}
