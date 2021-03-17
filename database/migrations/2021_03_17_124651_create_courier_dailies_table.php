<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourierDailiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    //    courier_id, discount, date, addtional, commission, salary
    public function up()
    {
        Schema::create('courier_dailies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('courier_id');
            $table->double('discount')->nullable();
            $table->double('additional')->nullable();
            $table->double('commission')->nullable();
            $table->double('salary')->nullable();
            $table->date('date');
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
        Schema::dropIfExists('courier_dailies');
    }
}
