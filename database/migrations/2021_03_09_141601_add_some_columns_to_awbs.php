<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnsToAwbs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('awbs', function (Blueprint $table) {
            $table->double('zprice')->nullable();
            $table->double('shiping_price')->nullable();
            $table->double('additional_kg_price')->nullable();
            $table->double('additional_price')->nullable();
            $table->double('net_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('awbs', function (Blueprint $table) {
            //
        });
    }
}
