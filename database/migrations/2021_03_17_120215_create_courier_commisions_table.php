<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourierCommisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    courier, service, commission
    public function up()
    {
        Schema::create('courier_commissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('courier_id');
            $table->foreign('courier_id')->references('id')->on('couriers');
            $table->unsignedInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->integer('commission');
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
        Schema::dropIfExists('courier_commisions');
    }
}
