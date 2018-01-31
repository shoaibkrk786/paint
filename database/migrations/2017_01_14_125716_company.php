<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->text('company_about');
            $table->string('company_logo')->default('images/personal/default-p.png');
            $table->string('company_cover')->default('images/cover/default-p.jpg');
            $table->integer('company_brand_id')->unsigned()->nullable();
            $table->foreign('company_brand_id')->references('id')->on('brands');
            $table->integer('user_id')->unsigned()->nullable();
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
