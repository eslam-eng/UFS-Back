<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable();
            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');

            $table->unsignedInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');

            $table->unsignedInteger('branch_id');
            $table->foreign('branch_id')->references('id')->on('branches');

            $table->unsignedInteger('receiver_id');
            $table->foreign('receiver_id')->references('id')->on('receivers');

            $table->unsignedInteger('payment_type_id');
            $table->foreign('payment_type_id')->references('id')->on('payment_types');

            $table->unsignedInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');

            $table->unsignedInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');

            $table->unsignedInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');

            $table->date('date');
            $table->double('weight');
            $table->double('pieces');
            $table->double('collection')->nullable();
            $table->string('notes')->nullable();

            $table->boolean('is_return')->default(false);

            $table->unsignedInteger('user_trash_id')->nullable();
            $table->foreign('user_trash_id')->references('id')->on('users');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('awbs');
    }
}
