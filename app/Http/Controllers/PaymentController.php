<?php

namespace App\Http\Controllers;

use App\Models\retailer_fee;
use App\Models\admin_fee;
use App\Models\distributer_fee;
use App\Models\retailer_wallet;
use App\Models\distributer_wallet;
use App\Models\user;
use App\Models\admin_wallet;
use App\Models\money_transfer_report;
use App\Models\account_detail;
use App\Models\distributer_report;
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
                    $distributer_report = new distributer_report;
                    $retailer_wallet['balance'] = $retailer_wallet['balance'] - $retailer_fee;
                    $retailer_wallet->save();
                    $distributer_commission = $get_retailer_fee->fee - $get_distributer_fee->fee;
                    $distributer_report['o_balance'] = $distributer_wallet['balance'];
                    $distributer_report['commission'] = $distributer_commission  ;
                    $distributer_wallet['balance'] = $distributer_wallet['balance'] + $distributer_commission;
                    $distributer_wallet->save();
                    $distributer_report['c_balance'] = $distributer_wallet['balance'];
                    $admin_wallet['balance'] = $admin_wallet['balance'] + $get_distributer_fee->fee;
                    $admin_wallet->save();
                    $actual_transaction = $request->amount + $get_admin_fee->fee;
                    $admin_wallet['balance'] = $admin_wallet['balance'] - $actual_transaction;
                    $admin_wallet->save();
                    
                    $distributer_report['user_id'] = 1;
                    $distributer_report['retailer_id'] = 21;
                    $distributer_report['service_id'] = 1;
                    $distributer_report['service_detail_id'] = 12;
                    $distributer_report['amount'] = $request->amount;
                    $distributer_report['status'] = 1;
                    $distributer_report->save();
                   
                    $money_transfer_report = new money_transfer_report;
                    $money_transfer_report['user_id'] = $retail_user['id'];
                    $money_transfer_report['account_id'] = 1;
                    $money_transfer_report['transaction_id'] = 12;
                    $money_transfer_report['transaction_details'] = 212;
                    $money_transfer_report['amount'] = $request->amount;
                    $money_transfer_report['status'] = 'Success';
                    $money_transfer_report->save();
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

    public function add_account(Request $request) {
        try{
            //  $validate = Validator::make($request->all(), [
                // 'user_id' => 'required|string|min:6|max:6',
                // 'bank_id' => 'required|string|min:6|max:6',
            //     'account_number' => 'required|string|between:8,16',
            // ],);
            // if($validate->fails()){
            //     return response()->json(["status"=>false , "message" => $validate->errors()->toArray()[array_keys($validate->errors()->toArray())[0]][0]]);
            // }
            // else{
                // $account = account_detail::where(['user_id'=>$request->user_id],['bank_id'=>$request->bank_id],['account_number'=>$request->account_number])->first();
                if(!empty(account_detail::where(['user_id'=>$request->user_id],['bank_id'=>$request->bank_id],['account_number'=>$request->account_number])->exists())){
                    return response()->json(["status"=>false ,'message'=> 'Bank Account Number Already Exists']);
                }else{
                    $add_account = new account_detail;
                    $add_account->user_id = 1;
                    $add_account->bank_id = 23;
                    $add_account->account_number = $request->account_number;
                    $add_account->verified = 0;
                    $add_account->status = 1;
                    $add_account->save();
                    return response()->json(["status"=>true ,'message'=> 'Bank Account Number Added SuccessFully']);
                }
                
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