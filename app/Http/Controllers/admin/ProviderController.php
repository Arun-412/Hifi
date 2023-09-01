<?php

namespace App\Http\Controllers\admin;

use App\Models\provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Auth;

class ProviderController extends Controller
{
    function admin_provider (Request $request) {
        try{
            if(!empty(provider::where(['user_id'=>1])->exists())){
                $providers_list = provider::orderBy('id', 'DESC')->where(['user_id'=>1])->get();
                // return $providers_list;
                return view('admin.service_provider.provider')->with('data',$providers_list);
            }else{
                return response()->json(["status"=>false ,'message'=>"User not found"]);
            }
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }   
    }

    public function Add_Provider(Request $request){
        try{
            $validate = Validator::make($request->all(), [
                'Provider_Name' => 'required|string|min:3|max:40',
                'Provider_Email' => 'required|email|max:40',
                'Provider_Mobile_Number' => 'required|string|min:10|max:10',
            ],);
            if($validate->fails()){
                return response()->json(["status"=>false , "message" => $validate->errors()->toArray()[array_keys($validate->errors()->toArray())[0]][0]]);
            }
            else if(!empty(provider::where(['provider_name'=>$request->Provider_Name])->exists())){
                return response()->json(["status"=>false , "message"=>'Provider Name already exists']);
            }
            else if(!empty(provider::where(['provider_email'=>$request->Provider_Email])->exists())){
                return response()->json(["status"=>false , "message"=>'Provider Email already exists']);
            }
            else if(!empty(provider::where(['provider_mobile'=>$request->Provider_Mobile_Number])->exists())){
                return response()->json(["status"=>false , "message"=>'Provider Mobile Number already exists']);
            }
            else{
                $add_provider = new provider;
                $add_provider->user_id = 1;
                $add_provider->provider_name = $request->Provider_Name;
                $add_provider->provider_email = $request->Provider_Email;
                $add_provider->provider_mobile = $request->Provider_Mobile_Number;
                $add_provider->status = 0;
                $add_provider->save();
                return response()->json(["status"=>true , "message"=>'New Provider added successfully']);
            }        
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }   
    }
}
