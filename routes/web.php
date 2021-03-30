<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
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

Route::group(['namespace'=>'App\Http\Controllers\website'],function (){
    Route::get('/', "WebsiteController@home");
    Route::get('/about', "WebsiteController@about");
    Route::get('/domestic-services', "WebsiteController@domesticService");
    Route::get('/international-services', "WebsiteController@internationalService");
    Route::get('/contact', "WebsiteController@contact");
    Route::post('/contact', "MailBoxController@store");
    Route::get('/request-pickup', "WebsiteController@requestPickup");
    Route::post('/request-pickup', "PickupController@store");
    Route::get('/track-awb','AwbTrackController@index')->name('trackAwb');
    Route::get('/track-more','AwbTrackController@trackMore')->name('trackMore');
});

Route::get('login', function(){
	return responseJson(0, __('login first'));
})->name('login');

Route::get('/test_m', function () {
  // run migration here
});


Route::get('production', function(){
    Artisan::call('config:cache');
    Artisan::call('route:cache');

    echo "Running Appliction In Production Mode ..";
});

Route::get('cache-clear', function(){
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');

    echo "Clear All Cache Of Appliction ..";
});
