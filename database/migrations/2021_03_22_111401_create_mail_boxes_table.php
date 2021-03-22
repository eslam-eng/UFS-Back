<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //'name','company','phone','website','email','message'
    public function up()
    {
        Schema::create('mail_boxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('company');
            $table->string('phone');
            $table->string('website');
            $table->string('email');
            $table->string('message');
            $table->enum('type',['inbox','sent','trash']);
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
        Schema::dropIfExists('mail_boxes');
    }
}
