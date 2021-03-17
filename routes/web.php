<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test','App\Http\Controllers\DashboardController@home')->name('test');

Route::get('login', function(){
	return responseJson(0, __('login first'));
})->name('login');

Route::get('/test_m', function () {

    // Create table for storing permissions
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
});
