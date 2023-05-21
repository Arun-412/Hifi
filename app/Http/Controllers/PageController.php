<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller 
{
    function admin_dashboard (Request $request) {
        return view('admin.dashboard');
    }
    // function admin_dmt (Request $request) {
    //     return view('admin.dmt');
    // }
    // function admin_user (Request $request) {
    //     return view('admin.user');
    // }
    // function admin_api (Request $request) {
    //     return view('admin.api');
    // }
    // function admin_report (Request $request) {
    //     return view('admin.report');
    // }

    // function vendor_dmt (Request $request) {
    //     return view('vendor.dmt');
    // }
    // function vendor_dashboard (Request $request) {
    //     return view('vendor.dashboard');
    // }
    // function vendor_user (Request $request) {
    //     return view('vendor.user');
    // }
    // function vendor_report (Request $request) {
    //     return view('vendor.report');
    // }

    // function user_dmt (Request $request) {
    //     return view('user.dmt');
    // }
    // function user_dashboard (Request $request) {
    //     return view('user.dashboard');
    // }
    // function user_report (Request $request) {
    //     return view('user.report');
    // }
}
