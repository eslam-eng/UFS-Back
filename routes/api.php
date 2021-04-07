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

//autho login
Route::post('auth/login', 'App\Http\Controllers\AuthController@login');

//  translation start
Route::get('translation', 'App\Http\Controllers\TranslateController@index');
Route::get('translation/get', 'App\Http\Controllers\TranslateController@get');


Route::group(['namespace'=>'App\Http\Controllers',"middleware" => "auth:api"], function (){

// dashboard apis

    Route::get('dashboard', 'DashboardController@home');

//  awbs start


    Route::get('awbs', 'AwbController@index');
    Route::get('awbs/history', 'AwbController@awbHistory');
    Route::get('awbs/{resource}', 'AwbController@load');
    Route::post('awbs/store', 'AwbController@store');
    Route::post('awbs/update/{resource}', 'AwbController@update');
    Route::post('awbs/status/{resource}', 'AwbController@changeStatus');
    Route::post('awbs/destroy/{resource}', 'AwbController@destroy');
    Route::get('awbs-trash', 'AwbController@getTrash');
    Route::post('awbs-restore/{resource}', 'AwbController@restore');
    Route::post('awbs-history/destroy/{resource}', 'AwbHistoryController@destroy');
    Route::get('awbs/excel/download', 'AwbController@downloadExcel');
    Route::post('awbs/import', 'AwbController@awbImport');


    Route::get('awbs/print/{resource}', 'AwbPrinterController@printA4');
    Route::post('awbs/print-selected', 'AwbPrinterController@printA4s');
    Route::post('awbs/printthree', 'AwbPrinterController@print1x3');
    Route::post('awbs/awb-twenty','AwbPrinterController@print3x7');

    Route::get('awbs/3x7awb','AwbPrinterController@print3x7');
    Route::get('awbs/3x8awb','AwbPrinterController@print3x8');
    Route::get('awbs/3x9awb','AwbPrinterController@print3x9');
    Route::get('awbs/3x10awb','AwbPrinterController@print3x10');

//Awb Category

    Route::get('awb-categories', 'AwbCategoryController@index');
    Route::post('awb-categories/store', 'AwbCategoryController@store');
    Route::post('awb-categories/update/{resource}', 'AwbCategoryController@update');
    Route::post('awb-categories/destroy/{resource}', 'AwbCategoryController@destroy');

//  areas start

    Route::get('areas', 'AreaController@index');
    Route::post('areas/store', 'AreaController@store');
    Route::post('areas/update/{resource}', 'AreaController@update');
    Route::post('areas/destroy/{resource}', 'AreaController@destroy');

    Route::get('areas/excel/download', 'AreaController@downloadExcel');
// route import area file
    Route::post('areas/import', 'AreaController@areaImport');

//  branch start

    Route::get('branches', 'BranchController@index');
    Route::post('branches/store', 'BranchController@store');
    Route::post('branches/update/{resource}', 'BranchController@update');
    Route::post('branches/destroy/{resource}', 'BranchController@destroy');

    Route::get('branches/excel/download', 'BranchController@downloadExcel');
    // route import branch file
    Route::post('branches/import', 'BranchController@branchImport');

//   city start

    Route::get('cities', 'CityController@index');
    Route::post('cities/store', 'CityController@store');
    Route::post('cities/update/{resource}', 'CityController@update');
    Route::post('cities/destroy/{resource}', 'CityController@destroy');

    Route::get('cities/excel/download', 'CityController@downloadExcel');
    // route import city file
    Route::post('cities/import', 'CityController@cityImport');

//  company start

    Route::get('companies', 'CompanyController@index');
    Route::post('companies/store', 'CompanyController@store');
    Route::post('companies/update/{resource}', 'CompanyController@update');
    Route::post('companies/destroy/{resource}', 'CompanyController@destroy');

    Route::get('companies/excel/download', 'CompanyController@downloadExcel');
    // route import country file
    Route::post('companies/import', 'CompanyController@companyImport');

//  country start

    Route::get('countries', 'CountryController@index');
    Route::post('countries/store', 'CountryController@store');
    Route::post('countries/update/{resource}', 'CountryController@update');
    Route::post('countries/destroy/{resource}', 'CountryController@destroy');

    Route::get('countries/excel/download', 'CountryController@downloadExcel');
    // route import country file
    Route::post('countries/import', 'CountryController@countryImport');


//  courier start

    Route::get('couriers', 'CourierController@index');
    Route::post('couriers/store', 'CourierController@store');
    Route::post('couriers/update/{resource}', 'CourierController@update');
    Route::post('couriers/destroy/{resource}', 'CourierController@destroy');
    Route::get('couriers/excel/download', 'CourierController@downloadExcel');
    // route import country file
    Route::post('couriers/import', 'CourierController@courierImport');

    //  courier Sheet start

    Route::get('courier-sheets', 'CourierSheetController@index');
    Route::get('courier-sheets/{resource}', 'CourierSheetController@load');
    Route::post('courier-sheets/store', 'CourierSheetController@store');
    Route::post('courier-sheets/update/{resource}', 'CourierSheetController@update');
    Route::post('courier-sheets/destroy/{resource}', 'CourierSheetController@destroy');
    Route::get('courier-sheets/print/{resource}', 'CourierSheetController@print');
    Route::post('courier-sheets/transfer', 'CourierSheetController@sheetTransfer');
    Route::get('courier-sheets/pendding', 'CourierSheetController@sheetPendding');


    Route::get('courier-commissions', 'CourierCommissionController@index');
    Route::post('courier-commissions/store', 'CourierCommissionController@store');
    Route::post('courier-commissions/update/{resource}', 'CourierCommissionController@update');
    Route::post('courier-commissions/destroy/{resource}', 'CourierCommissionController@destroy');


    Route::get('courier-dailies', 'CourierDailyController@index');
    Route::post('courier-dailies/store', 'CourierDailyController@store');
    Route::post('courier-dailies/update/{resource}', 'CourierDailyController@update');
    Route::post('courier-dailies/destroy/{resource}', 'CourierDailyController@destroy');


//  department start

    Route::get('departments', 'DepartmentController@index');
    Route::post('departments/store', 'DepartmentController@store');
    Route::post('departments/update/{resource}', 'DepartmentController@update');
    Route::post('departments/destroy/{resource}', 'DepartmentController@destroy');

    Route::get('departments/excel/download', 'DepartmentController@downloadExcel');
    // route import country file
    Route::post('departments/import', 'DepartmentController@departmentImport');



//  payment-type start

    Route::get('payment-types', 'PaymentTypeController@index');
    Route::post('payment-types/store', 'PaymentTypeController@store');
    Route::post('payment-types/update/{resource}', 'PaymentTypeController@update');
    Route::post('payment-types/destroy/{resource}', 'PaymentTypeController@destroy');


    Route::get('payment-types/excel/download', 'PaymentTypeController@downloadExcel');
    // route import payment type file
    Route::post('payment-types/import', 'PaymentTypeController@paymentTypeImport');

//  pickups start

    Route::get('pickups', 'PickupController@index');
    Route::get('pickups/history', 'PickupController@pickupHistory');
    Route::post('pickups/store', 'PickupController@store');
    Route::post('pickups/update/{resource}', 'PickupController@update');
    Route::post('pickups/status/{resource}', 'PickupController@changeStatus');
    Route::post('pickups/destroy/{resource}', 'PickupController@destroy');

//  receiver start

    Route::get('receivers', 'ReceiverController@index');
    Route::post('receivers/store', 'ReceiverController@store');
    Route::post('receivers/update/{resource}', 'ReceiverController@update');
    Route::post('receivers/destroy/{resource}', 'ReceiverController@destroy');

    Route::get('receivers/excel/download', 'ReceiverController@downloadExcel');
    // route import payment type file
    Route::post('receivers/import', 'ReceiverController@receiverImport');


//  service start

    Route::get('services', 'ServiceController@index');
    Route::post('services/store', 'ServiceController@store');
    Route::post('services/update/{resource}', 'ServiceController@update');
    Route::post('services/destroy/{resource}', 'ServiceController@destroy');

    Route::get('services/excel/download', 'ServiceController@downloadExcel');
    // route import service file
    Route::post('services/import', 'ServiceController@serviceImport');

//  status start

    Route::get('status', 'StatusController@index');
    Route::post('status/store', 'StatusController@store');
    Route::post('status/update/{resource}', 'StatusController@update');
    Route::post('status/destroy/{resource}', 'StatusController@destroy');

    Route::get('status/excel/download', 'StatusController@downloadExcel');
    Route::post('status/import', 'StatusController@statusImport');

//  users start

    Route::get('users', 'UserController@index');
    Route::post('users/store', 'UserController@store');
    Route::post('users/update/{resource}', 'UserController@update');
    Route::post('users/destroy/{resource}', 'UserController@destroy');

//  translation start
    Route::post('translation/update', 'TranslateController@update');

//  notification start
    Route::get('notifications', 'NotificationController@index');
    Route::get('notifications/get', 'NotificationController@get');
    Route::post('notifications/update', 'NotificationController@update');



//  status start

    Route::get('roles', 'RoleController@index');
    Route::post('roles/store', 'RoleController@store');
    Route::post('roles/update/{resource}', 'RoleController@update');
    Route::post('roles/permission/{resource}', 'RoleController@updatePermissions');
    Route::post('roles/destroy/{resource}', 'RoleController@destroy');

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


//    accounting Routes
    Route::get('price-tables', 'PriceTableController@index');
    Route::post('price-tables/store', 'PriceTableController@store');
    Route::post('price-tables/update/{resource}', 'PriceTableController@update');
    Route::post('price-tables/destroy/{resource}', 'PriceTableController@destroy');
    Route::get('price-tables/excel/download', 'PriceTableController@downloadExcel');
    Route::post('price-tables/import', 'PriceTableController@import');

    Route::get('expense-types', 'ExpenseTypeController@index');
    Route::post('expense-types/store', 'ExpenseTypeController@store');
    Route::post('expense-types/update/{resource}', 'ExpenseTypeController@update');
    Route::post('expense-types/destroy/{resource}', 'ExpenseTypeController@destroy');
    Route::get('expense-types/excel/download', 'ExpenseTypeController@downloadExcel');
    Route::post('expense-types/import', 'ExpenseTypeController@import');

    Route::get('stores', 'StoreController@index');
    Route::post('stores/store', 'StoreController@store');
    Route::post('stores/update/{resource}', 'StoreController@update');
    Route::post('stores/destroy/{resource}', 'StoreController@destroy');


    Route::get('inreceipts', 'InReceiptController@index');
    Route::post('inreceipts/store', 'InReceiptController@store');
    Route::post('inreceipts/update/{resource}', 'InReceiptController@update');
    Route::post('inreceipts/destroy/{resource}', 'InReceiptController@destroy');

    Route::get('outreceipts', 'OutReceiptController@index');
    Route::post('outreceipts/store', 'OutReceiptController@store');
    Route::post('outreceipts/update/{resource}', 'OutReceiptController@update');
    Route::post('outreceipts/destroy/{resource}', 'OutReceiptController@destroy');

    Route::get('trans-types', 'TransTypeController@index');
    Route::post('trans-types/store', 'TransTypeController@store');
    Route::post('trans-types/update/{resource}', 'TransTypeController@update');
    Route::post('trans-types/destroy/{resource}', 'TransTypeController@destroy');


    // reports
    Route::get('report/awb-prices', 'ReportController@awbPrices');
    Route::get('report/awb-prices2', 'ReportController@awbPrices2');
    Route::get('report/awb-prices3', 'ReportController@awbPrices3');
    Route::get('report/price-table', 'ReportController@priceTable');
    Route::get('report/store-transactions', 'ReportController@storeTransactions');
    Route::get('report/companies-awb', 'ReportController@companyAwbs');
    Route::get('report/one-company-awb-status', 'ReportController@oneCompanyAwbStatus');
    Route::get('report/one-company-awb-city', 'ReportController@oneCompanyAwbCity');
    Route::get('report/one-courier-awb-status', 'ReportController@oneCourierAwbStatus');
    Route::get('report/courier-commissions', 'ReportController@courierCommission');

    Route::get('website/get', 'website\WebsiteSettingController@get');
    Route::post('website/update', 'website\WebsiteSettingController@update');

    Route::get('mailboxs', 'MailboxController@index');
    Route::post('mailboxs/store', 'MailboxController@store');
    Route::post('mailboxs/destroy/{resource}', 'MailboxController@destroy');



});
