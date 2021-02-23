<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwbDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awb_details', function (Blueprint $table) {
            $table->increments("id");
            $table->float("height");  
            $table->float("width");   
            $table->float("length");
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
        Schema::dropIfExists('awb_details');
    }
}
