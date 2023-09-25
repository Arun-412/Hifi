<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes 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
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hifimoney');
});

Route::get('/login',  ['as'=>'auth.login','uses'=>'auth\UserController@login']);
Route::get('/register',  ['as'=>'auth.register','uses'=>'auth\UserController@register']);
Route::post('/authentication',  ['as'=>'auth.authentication','uses'=>'auth\UserController@authentication']);
Route::get('/viewOtp',  ['as'=>'auth.verifyOtp','uses'=>'auth\UserController@viewOtp']);
Route::post('/Otp',  ['as'=>'auth.Otp','uses'=>'auth\UserController@verifyOtp']);
Route::post('/verifyUser',  ['as'=>'auth.verifyUser','uses'=>'auth\UserController@verifyUser']);

Route::get('/admin/dashboard',  ['as'=>'admin.dashboard','uses'=>'PageController@admin_dashboard']);
Route::get('/admin/dmt',  ['as'=>'admin.dmt','uses'=>'PageController@admin_dmt']);
Route::get('/admin/dmt-1',  ['as'=>'admin.dmt-1','uses'=>'DmtPlanController@admin_dmt_1']);
Route::get('/admin/dmt-2',  ['as'=>'admin.dmt-2','uses'=>'DmtPlanController@admin_dmt_2']);
Route::get('/admin/transaction',  ['as'=>'admin.transaction','uses'=>'PaymentController@transaction']);
Route::get('/admin/print/{tid}',  ['as'=>'admin.print','uses'=>'ReportController@print']);
Route::get('/admin/distributer_report',  ['as'=>'admin.distributer_report','uses'=>'ReportController@distributer_report']);
Route::get('/admin/money_transfer_report',  ['as'=>'admin.money_transfer_report','uses'=>'ReportController@money_transfer']);
Route::post('/admin/payment',  ['as'=>'admin.payment','uses'=>'PaymentController@payment']);
Route::post('/admin/add_account',  ['as'=>'admin.add_account','uses'=>'PaymentController@add_account']);
Route::get('/admin/user',  ['as'=>'admin.user','uses'=>'PageController@admin_user']);
Route::get('/admin/api',  ['as'=>'admin.api','uses'=>'PageController@admin_api']);
Route::get('/admin/service',  ['as'=>'admin.service','uses'=>'PageController@admin_service']);
Route::get('/admin/{pid}/service/{sid}',  ['as'=>'admin.manage_service','uses'=>'admin\ServiceController@manage_service']);
Route::get('/admin/{pid}/{sid}/fee',  ['as'=>'admin.manage_fee','uses'=>'admin\ServiceController@manage_fee']);
Route::get('/admin/service_types',  ['as'=>'admin.service_types','uses'=>'admin\ServiceController@service_types']);
Route::post('/admin/add_service',  ['as'=>'admin.add_service','uses'=>'admin\ServiceController@add_service']);
Route::get('/admin/provider',  ['as'=>'admin.provider','uses'=>'admin\ProviderController@admin_provider']);
Route::get('/admin/{tkn}/services',  ['as'=>'admin.service_provider','uses'=>'admin\ServiceController@services']);
Route::get('/admin/provider/{tkn}',  ['as'=>'admin.manage_provider','uses'=>'admin\ProviderController@manage_provider']);
Route::post('/admin/add_provider',  ['as'=>'admin.add_provider','uses'=>'admin\ProviderController@add_provider']);
Route::put('/admin/edit_provider',  ['as'=>'admin.edit_provider','uses'=>'admin\ProviderController@edit_provider']);
Route::post('/admin/provider_status',  ['as'=>'admin.provider_status','uses'=>'admin\ProviderController@provider_status']);
Route::get('/admin/report',  ['as'=>'admin.report','uses'=>'PageController@admin_report']);
Route::post('/admin/service_details',  ['as'=>'admin.service_details','uses'=>'admin\ServiceController@service_details']);

// Route::get('/vendor/dashboard',  ['as'=>'vendor.dashboard','uses'=>'PageController@vendor_dashboard']);
// Route::get('/vendor/dmt',  ['as'=>'vendor.dmt','uses'=>'PageController@vendor_dmt']);
// Route::get('/vendor/user',  ['as'=>'vendor.user','uses'=>'PageController@vendor_user']);
// Route::get('/vendor/report',  ['as'=>'vendor.report','uses'=>'PageController@vendor_report']);

// Route::get('/user/dashboard',  ['as'=>'user.dashboard','uses'=>'PageController@user_dashboard']);
// Route::get('/user/dmt',  ['as'=>'user.dmt','uses'=>'PageController@user_dmt']);
// Route::get('/user/report',  ['as'=>'user.report','uses'=>'PageController@user_report']);