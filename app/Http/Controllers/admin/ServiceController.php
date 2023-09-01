<?php

namespace App\Http\Controllers\admin;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Auth;

class ServiceController extends Controller
{
    public function service_details(Request $request){
        return "hi";
    }
}
