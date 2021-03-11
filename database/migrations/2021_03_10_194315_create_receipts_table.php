<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->unsignedInteger('model_id');
            $table->enum('model_type',['company'])->default('company');
            $table->unsignedInteger('expense_type_id');
            $table->foreign('expense_type_id')->references('id')->on('expense_types');
            $table->integer('value');
            $table->string('notes')->nullable();
            $table->enum('type',['in','out'])->nullable();
            $table->unsignedInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores');

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
        Schema::dropIfExists('receipt');
    }
}
