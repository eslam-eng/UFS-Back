<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_shipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->unsignedInteger('city_from');
            $table->foreign('city_from')->references('id')->on('cities')->onDelete('cascade');
            $table->unsignedInteger('city_to');
            $table->foreign('city_to')->references('id')->on('cities')->onDelete('cascade');
            $table->string('weight');
            $table->string('desc')->nullable();
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
        Schema::dropIfExists('price_shipments');
    }
}
