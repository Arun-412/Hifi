<?php

namespace App\Http\Controllers;

use App\Models\money_transfer_report;
use App\Models\distributer_report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Auth;

class ReportController extends Controller
{
    public function money_transfer(){
        try{
            $money_transfer = money_transfer_report::orderBy('id', 'DESC')->where(['user_id'=>1])->get();
            $data['money_transfer'] = $money_transfer;
            // return response()->json(["status"=>true ,'message'=>$data]);
            return view('admin.money_transfer_report')->with('data',$data);
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }   
    }

    public function print($tid){
        try{
            $report = money_transfer_report::where(['transaction_id'=>$tid])->first();
            return view('admin.print')->with('data',$report);
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }   
    }

    public function distributer_report(Request $request){
        try{
            $distributer_report = distributer_report::orderBy('id', 'DESC')->where(['user_id'=>1])->get();
            $data['distributer_report'] = $distributer_report;
            // return response()->json(["status"=>true ,'message'=>$data]);
            return view('admin.distributer_report')->with('data',$data);
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }   
    }
}