<?php

namespace App\Http\Controllers;

use App\Models\distributer_fee;
use App\Models\retailer_fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Auth;

class DmtPlanController extends Controller
{
    function admin_dmt_1 (Request $request) {
        try{
            $distributer_fee = distributer_fee::orderBy('id', 'ASC')->where(['status'=>1])->get();
            return view('admin.dmt_1')->with('data',$distributer_fee);
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }   
    }
    function admin_dmt_2 (Request $request) {
        try{
            $retailer_fee = retailer_fee::orderBy('id', 'ASC')->where(['status'=>1])->get();
            return view('admin.dmt_2')->with('data',$retailer_fee);
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }   
    }
}
