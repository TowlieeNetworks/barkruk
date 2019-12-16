<?php

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

Auth::routes();

//custom routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('profileIndex', 'profileController@index')->name('profileIndex');
//Route::get('malfuction/workorder/show', 'malfunction@showCreationForm')->name('showCreateWorkOrder');
//Route::get('malfuction/workorder/', 'malfunction@showCreationForm')->name('showCreateWorkOrder');

// more controllers
Route::resource('malfunction', 'malfunctionController');
Route::resource('contact', 'contactController');
Route::resource('profile', 'profileController');

// Roles
Route::resource('customer', 'CustomerController');
Route::resource('sales', 'SalesController');
Route::resource('admin','AdminController');
Route::resource('finance','FinanceController');
Route::resource('maintenance','MaintenanceController');
Route::resource('head_maintenance','HeadMaintenanceController');
Route::resource('inkoop','InkoopController');
Route::resource('work_order','WorkOrderController');
Route::resource('quotations', 'quotationsController');
route::resource('BKR_checkController', 'BKR_checkController');
route::resource('quotation_approved', 'quotation_approved_Controller');