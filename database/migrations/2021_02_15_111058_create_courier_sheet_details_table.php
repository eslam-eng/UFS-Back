<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourierSheetDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courier_sheet_details', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('sheet_id');
            $table->foreign('sheet_id')->references('id')->on('courier_sheets');

            $table->unsignedInteger('awb_id');
            $table->foreign('awb_id')->references('id')->on('awbs');

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
        Schema::dropIfExists('courier_sheet_details');
    }
}
