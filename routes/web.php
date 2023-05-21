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
Route::get('/authentication',  ['as'=>'auth.authentication','uses'=>'auth\UserController@authentication']);
Route::get('/verifyOtp',  ['as'=>'auth.verifyOtp','uses'=>'auth\UserController@verifyOtp']);

Route::get('/admin/dashboard',  ['as'=>'admin.dashboard','uses'=>'PageController@admin_dashboard']);
Route::get('/admin/dmt',  ['as'=>'admin.dmt','uses'=>'PageController@admin_dmt']);
Route::get('/admin/user',  ['as'=>'admin.user','uses'=>'PageController@admin_user']);
Route::get('/admin/api',  ['as'=>'admin.api','uses'=>'PageController@admin_api']);
Route::get('/admin/report',  ['as'=>'admin.report','uses'=>'PageController@admin_report']);

// Route::get('/vendor/dashboard',  ['as'=>'vendor.dashboard','uses'=>'PageController@vendor_dashboard']);
// Route::get('/vendor/dmt',  ['as'=>'vendor.dmt','uses'=>'PageController@vendor_dmt']);
// Route::get('/vendor/user',  ['as'=>'vendor.user','uses'=>'PageController@vendor_user']);
// Route::get('/vendor/report',  ['as'=>'vendor.report','uses'=>'PageController@vendor_report']);

// Route::get('/user/dashboard',  ['as'=>'user.dashboard','uses'=>'PageController@user_dashboard']);
// Route::get('/user/dmt',  ['as'=>'user.dmt','uses'=>'PageController@user_dmt']);
// Route::get('/user/report',  ['as'=>'user.report','uses'=>'PageController@user_report']);