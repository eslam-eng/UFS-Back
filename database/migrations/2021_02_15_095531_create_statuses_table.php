<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

//    sms_message
//	is_non_paid_return
//	is_paid_return
//	is_collected
//	is_customer_paid
//	is_closed
//	type [awb, pickup]
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->boolean('is_final')->nullable();

            $table->enum('steper', ['in_company', 'processing', 'hold', 'delivered'])->nullable();

            $table->string('sms')->nullable();
            $table->boolean('is_paid_return')->nullable();
            $table->boolean('is_non_paid_return')->nullable();
            $table->boolean('is_customer_paid')->nullable();
            $table->boolean('is_closed')->nullable();
            $table->enum('type',['awb','pickup'])->default('awb');

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
        Schema::dropIfExists('statuses');
    }
}
