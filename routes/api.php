<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace'=>'App\Http\Controllers'], function (){

//  areas start

    Route::get('areas', 'AreaController@index');
    Route::post('areas/store', 'AreaController@store');
    Route::post('areas/update/{resource}', 'AreaController@update');
    Route::post('areas/delete/{resource}', 'AreaController@destroy');

//  branch start

    Route::get('branches', 'BranchController@index');
    Route::post('branches/store', 'BranchController@store');
    Route::post('branches/update/{resource}', 'BranchController@update');
    Route::post('branches/delete/{resource}', 'BranchController@destroy');

//   city start

    Route::get('cities', 'CityController@index');
    Route::post('cities/store', 'CityController@store');
    Route::post('cities/update/{resource}', 'CityController@update');
    Route::post('cities/delete/{resource}', 'CityController@destroy');

//  company start

    Route::get('companies', 'CompanyController@index');
    Route::post('companies/store', 'CompanyController@store');
    Route::post('companies/update/{resource}', 'CompanyController@update');
    Route::post('companies/delete/{resource}', 'CompanyController@destroy');

//  country start

    Route::get('countries', 'CountryController@index');
    Route::post('countries/store', 'CountryController@store');
    Route::post('countries/update/{resource}', 'CountryController@update');
    Route::post('countries/delete/{resource}', 'CountryController@destroy');


//  courier start

    Route::get('couriers', 'CourierController@index');
    Route::post('couriers/store', 'CourierController@store');
    Route::post('couriers/update/{resource}', 'CourierController@update');
    Route::post('couriers/delete/{resource}', 'CourierController@destroy');


//  department start

    Route::get('departments', 'DepartmentController@index');
    Route::post('departments/store', 'DepartmentController@store');
    Route::post('departments/update/{resource}', 'DepartmentController@update');
    Route::post('departments/delete/{resource}', 'DepartmentController@destroy');


//  payment-type start

    Route::get('payment-type', 'PaymentTypeController@index');
    Route::post('payment-type/store', 'PaymentTypeController@store');
    Route::post('payment-type/update/{resource}', 'PaymentTypeController@update');
    Route::post('payment-type/delete/{resource}', 'PaymentTypeController@destroy');

//  payment-type start

    Route::get('pickups', 'PickupController@index');
    Route::post('pickups/store', 'PickupController@store');
    Route::post('pickups/update/{resource}', 'PickupController@update');
    Route::post('pickups/delete/{resource}', 'PickupController@destroy');


//  receiver start

    Route::get('receivers', 'ReceiverController@index');
    Route::post('receivers/store', 'ReceiverController@store');
    Route::post('receivers/update/{resource}', 'ReceiverController@update');
    Route::post('receivers/delete/{resource}', 'ReceiverController@destroy');


//  service start

    Route::get('services', 'ServiceController@index');
    Route::post('services/store', 'ServiceController@store');
    Route::post('services/update/{resource}', 'ServiceController@update');
    Route::post('services/delete/{resource}', 'ServiceController@destroy');


//  status start

    Route::get('statuses', 'StatusController@index');
    Route::post('statuses/store', 'StatusController@store');
    Route::post('statuses/update/{resource}', 'StatusController@update');
    Route::post('statuses/delete/{resource}', 'StatusController@destroy');
    

});
