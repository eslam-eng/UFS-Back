<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('ceo')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('email');
            $table->boolean('show_dashboard')->nullable();
            $table->enum('active',[0,1])->default(1);
            $table->string('notes')->nullable();
            $table->string('commercial_number')->nullable();
            $table->string('commercial_photo')->nullable();
            $table->enum('type',['admin','company'])->default('company');
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');
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
        Schema::dropIfExists('companies');
    }
}
