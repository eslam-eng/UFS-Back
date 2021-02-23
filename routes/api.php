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

Route::group(['namespace'=>'App\Http\Controllers',"middleware" => "auth:api"], function (){

//autho login

    Route::post('auth/login', 'AuthController@login');

//  awbs start

    Route::get('awbs', 'AwbController@index');
    Route::get('awbs/{resource}', 'AwbController@load');
    Route::get('awbs/print/{resource}', 'AwbController@print');
    Route::post('awbs/print-selected', 'AwbController@printSelected');
    Route::post('awbs/store', 'AwbController@store');
    Route::post('awbs/update/{resource}', 'AwbController@update');
    Route::post('awbs/status/{resource}', 'AwbController@changeStatus');
    Route::post('awbs/destroy/{resource}', 'AwbController@destroy');

//  areas start

    Route::get('areas', 'AreaController@index');
    Route::post('areas/store', 'AreaController@store');
    Route::post('areas/update/{resource}', 'AreaController@update');
    Route::post('areas/destroy/{resource}', 'AreaController@destroy');

//  branch start

    Route::get('branches', 'BranchController@index');
    Route::post('branches/store', 'BranchController@store');
    Route::post('branches/update/{resource}', 'BranchController@update');
    Route::post('branches/destroy/{resource}', 'BranchController@destroy');

//   city start

    Route::get('cities', 'CityController@index');
    Route::post('cities/store', 'CityController@store');
    Route::post('cities/update/{resource}', 'CityController@update');
    Route::post('cities/destroy/{resource}', 'CityController@destroy');

//  company start

    Route::get('companies', 'CompanyController@index');
    Route::post('companies/store', 'CompanyController@store');
    Route::post('companies/update/{resource}', 'CompanyController@update');
    Route::post('companies/destroy/{resource}', 'CompanyController@destroy');

//  country start

    Route::get('countries', 'CountryController@index');
    Route::post('countries/store', 'CountryController@store');
    Route::post('countries/update/{resource}', 'CountryController@update');
    Route::post('countries/destroy/{resource}', 'CountryController@destroy');


//  courier start

    Route::get('couriers', 'CourierController@index');
    Route::post('couriers/store', 'CourierController@store');
    Route::post('couriers/update/{resource}', 'CourierController@update');
    Route::post('couriers/destroy/{resource}', 'CourierController@destroy');

    
    //  courier Sheet start

    Route::get('courier-sheets', 'CourierSheetController@index');
    Route::get('courier-sheets/{resource}', 'CourierSheetController@load');
    Route::post('courier-sheets/store', 'CourierSheetController@store');
    Route::post('courier-sheets/update/{resource}', 'CourierSheetController@update');
    Route::post('courier-sheets/destroy/{resource}', 'CourierSheetController@destroy');

    

//  department start

    Route::get('departments', 'DepartmentController@index');
    Route::post('departments/store', 'DepartmentController@store');
    Route::post('departments/update/{resource}', 'DepartmentController@update');
    Route::post('departments/destroy/{resource}', 'DepartmentController@destroy');

//  payment-type start

    Route::get('payment-types', 'PaymentTypeController@index');
    Route::post('payment-types/store', 'PaymentTypeController@store');
    Route::post('payment-types/update/{resource}', 'PaymentTypeController@update');
    Route::post('payment-types/destroy/{resource}', 'PaymentTypeController@destroy');

//  payment-type start

    Route::get('pickups', 'PickupController@index');
    Route::post('pickups/store', 'PickupController@store');
    Route::post('pickups/update/{resource}', 'PickupController@update');
    Route::post('pickups/destroy/{resource}', 'PickupController@destroy');

//  receiver start

    Route::get('receivers', 'ReceiverController@index');
    Route::post('receivers/store', 'ReceiverController@store');
    Route::post('receivers/update/{resource}', 'ReceiverController@update');
    Route::post('receivers/destroy/{resource}', 'ReceiverController@destroy');

//  service start

    Route::get('services', 'ServiceController@index');
    Route::post('services/store', 'ServiceController@store');
    Route::post('services/update/{resource}', 'ServiceController@update');
    Route::post('services/destroy/{resource}', 'ServiceController@destroy');

//  status start

    Route::get('status', 'StatusController@index');
    Route::post('status/store', 'StatusController@store');
    Route::post('status/update/{resource}', 'StatusController@update');
    Route::post('status/destroy/{resource}', 'StatusController@destroy');

//  users start

    Route::get('users', 'UserController@index');
    Route::post('users/store', 'UserController@store');
    Route::post('users/update/{resource}', 'UserController@update');
    Route::post('users/destroy/{resource}', 'UserController@destroy');

//  translation start
    Route::get('translation', 'TranslateController@index');
    Route::get('translation/get', 'TranslateController@get');
    Route::post('translation/update', 'TranslateController@update');

//  notification start
    Route::get('notifications', 'NotificationController@index');
    Route::get('notifications/get', 'NotificationController@get');
    Route::post('notifications/update', 'NotificationController@update');



//  status start

    Route::get('roles', 'roleController@index');
    Route::post('roles/store', 'roleController@store');
    Route::post('roles/update/{resource}', 'roleController@update');
    Route::post('roles/destroy/{resource}', 'roleController@destroy');

//  status start
    Route::get('permissions', 'PermissionController@index');
    Route::post('permissions/store', 'PermissionController@store');
    Route::post('permissions/update/{resource}', 'PermissionController@update');
    Route::post('permissions/destroy/{resource}', 'PermissionController@destroy');

    //  psermission group start
    Route::get('permission-groups', 'PermissionGroupController@index');
    Route::post('permission-groups/store', 'PermissionGroupController@store');
    Route::post('permission-groups/update/{resource}', 'PermissionGroupController@update');
    Route::post('permission-groups/destroy/{resource}', 'PermissionGroupController@destroy');

//    start notification
    Route::get("notifications", "NotificationController@getNotifications");
});
