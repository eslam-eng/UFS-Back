<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_from');
            $table->date('date_to');
            $table->unsignedInteger('model_id');

            $table->enum('model_type',['admin', 'company', 'courier'])->default('company');

            $table->unsignedInteger('country_from');
            $table->foreign('country_from')->references('id')->on('countries');

            $table->unsignedInteger('country_to');
            $table->foreign('country_to')->references('id')->on('countries');

            $table->unsignedInteger('city_from');
            $table->foreign('city_from')->references('id')->on('cities');

            $table->unsignedInteger('city_to');
            $table->foreign('city_to')->references('id')->on('cities');

            $table->unsignedInteger('area_from')->nullable();
            $table->foreign('area_from')->references('id')->on('areas');

            $table->unsignedInteger('area_to')->nullable();
            $table->foreign('area_to')->references('id')->on('areas');

            $table->double('price');
            $table->double('basic_kg');
            $table->double('additional_kg_price');
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
        Schema::dropIfExists('price_tables');
    }
}
