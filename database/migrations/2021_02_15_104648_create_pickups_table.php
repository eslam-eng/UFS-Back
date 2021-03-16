<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickups', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('code');
            $table->date('date');
            $table->unsignedInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->time('time_from');
            $table->time('time_to');
            $table->string('notes')->nullable();
            $table->unsignedInteger('courier_id')->nullable();
            $table->foreign('courier_id')->references('id')->on('couriers');
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
        Schema::dropIfExists('pickups');
    }
}
