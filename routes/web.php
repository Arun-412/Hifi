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
Route::get('/admin/user',  ['as'=>'admin.user','uses'=>'PageController@admin_user']);
Route::get('/admin/api',  ['as'=>'admin.api','uses'=>'PageController@admin_api']);
Route::get('/admin/service',  ['as'=>'admin.service','uses'=>'PageController@admin_service']);
Route::get('/admin/provider',  ['as'=>'admin.provider','uses'=>'admin\ProviderController@admin_provider']);
Route::get('/admin/provider/services',  ['as'=>'admin.service_provider','uses'=>'admin\ProviderController@services']);
Route::get('/admin/manage_provider/{provider_id}',  ['as'=>'admin.manage_provider','uses'=>'admin\ProviderController@manage_provider']);
Route::post('/admin/add_provider',  ['as'=>'admin.add_provider','uses'=>'admin\ProviderController@add_provider']);
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