<?php

namespace App\Http\Controllers;

use App\Models\retailer_fee;
use App\Models\admin_fee;
use App\Models\distributer_fee;
use App\Models\retailer_wallet;
use App\Models\distributer_wallet;
use App\Models\user;
use App\Models\admin_wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Auth;

class PaymentController extends Controller
{
    public function transaction (Request $request){
        return view('admin.transaction');
    }
    public function payment (Request $request){
       try{
            // $validate = Validator::make($request->all(), [
            //     'amount' => 'required|numeric|min:1|max:5',
            // ],);
            // if($validate->fails()){
            //     return response()->json(["status"=>false , "message" => $validate->errors()->toArray()[array_keys($validate->errors()->toArray())[0]][0]]);
            // }
            // else{
                $get_admin_fee = admin_fee::whereRaw('? between from_amount and to_amount', [$request->amount])->first();
                $get_distributer_fee = distributer_fee::whereRaw('? between from_amount and to_amount', [$request->amount])->first();
                $get_retailer_fee = retailer_fee::whereRaw('? between from_amount and to_amount', [$request->amount])->first();
                $retail_user = user::where(['id'=>'1'])->first();
                $distributer_user = user::where(['id'=>$retail_user['managed_by']])->first();
                $distributer_wallet = distributer_wallet::where(['user_id'=>$retail_user['managed_by']])->first();
                $retailer_wallet = retailer_wallet::where(['user_id'=>$retail_user['id']])->first();
                $admin_wallet = admin_wallet::where(['user_id'=>$distributer_user['managed_by']])->first();
                $retailer_fee = $get_retailer_fee->fee + $request->amount;
                
                if($retailer_wallet['balance'] > $retailer_fee){
                    $retailer_wallet['balance'] = $retailer_wallet['balance'] - $retailer_fee;
                    $retailer_wallet->save();
                    $distributer_commission = $get_retailer_fee->fee - $get_distributer_fee->fee;
                    $distributer_wallet['balance'] = $distributer_wallet['balance'] + $distributer_commission;
                    $distributer_wallet->save();
                    $admin_wallet['balance'] = $admin_wallet['balance'] + $get_distributer_fee->fee;
                    $admin_wallet->save();
                    $actual_transaction = $request->amount + $get_admin_fee->fee;
                    $admin_wallet['balance'] = $admin_wallet['balance'] - $actual_transaction;
                    $admin_wallet->save();
                    $data['r'] = $retailer_wallet['balance'];
                    $data['d'] = $distributer_wallet['balance'];
                    $data['a'] = $admin_wallet['balance'];
                    return response()->json(["status"=>true ,'message'=> $data]);
                }else{
                    return response()->json(["status"=>false ,'message'=> 'Insufficient Balance']);
                }
                // return response()->json(["status"=>true ,'message'=> $retailer_wallet['balance']]);
            // }
       }
       catch(\Exception $exception){
           return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
       } 
       catch (\Illuminate\Database\QueryException $exception ){
           return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
       }   
    }
}
?>