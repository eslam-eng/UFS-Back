<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', "App\Http\Controllers\website\WebsiteController@home");
Route::get('/about', "App\Http\Controllers\website\WebsiteController@about");
Route::get('/services', "App\Http\Controllers\website\WebsiteController@services");
Route::get('/contact', "App\Http\Controllers\website\WebsiteController@contact");
Route::get('/request-pickup', "App\Http\Controllers\website\WebsiteController@requestPickup");
Route::post('/request-pickup', "App\Http\Controllers\website\WebsiteController@storePickup");



Route::get('/test','App\Http\Controllers\DashboardController@home')->name('test');

Route::get('login', function(){
	return responseJson(0, __('login first'));
})->name('login');

Route::get('/test_m', function () {

    Schema::create('trans_type', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->timestamps();
    });
});
