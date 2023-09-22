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
                'Provider_Mobile_Number' => 'required|numeric|digits:10',
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
                $add_provider->provider_id = substr(md5(microtime()), 0, 6);
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

    public function provider_status(Request $request){
        try{
            $validate = Validator::make($request->all(), [
                'status' => 'required|numeric|digits:1',
                'provider_id'=> 'required|string|min:6|max:6'
            ],);
            if($validate->fails()){
                return response()->json(["status"=>false , "message" => $validate->errors()->toArray()[array_keys($validate->errors()->toArray())[0]][0]]);
            }
            else if(!empty(provider::where(['provider_id'=>$request->provider_id])->exists())){
                $provider = provider::where(['provider_id'=>$request->provider_id])->first();
                $provider->status = $request->status;
                $provider->save();
                return response()->json(["status"=>true , "message"=>'Provider Turned OFF successfully']);
            }
            else{
                return response()->json(["status"=>false , "message"=>"Provider not found"]);
            }
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }   
    }

    public function manage_provider($tkn){
        try{
            if($tkn == ''){
                return response()->json(["status"=>false ,'message'=>"Invalid request"]);
            }
            elseif(empty(provider::where(['provider_id'=>$tkn])->exists())){
                return response()->json(["status"=>false ,'message'=>"Invalid action request"]);
            }
            else{
                $manage_provider = provider::where(['provider_id'=>$tkn])->first();
                return view('admin.service_provider.manage_provider')->with('data',$manage_provider);
            }
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }   
    }

    public function Edit_Provider(Request $request){
        try{
            $validate = Validator::make($request->all(), [
                'provider_id'=> 'required|string|min:6|max:6',
                'Provider_Name' => 'required|string|min:3|max:40',
                'Provider_Email' => 'required|email|max:40',
                'Provider_Mobile_Number' => 'required|numeric|digits:10',
            ],);
            if($validate->fails()){
                return response()->json(["status"=>false , "message" => $validate->errors()->toArray()[array_keys($validate->errors()->toArray())[0]][0]]);
            }
            else if(empty(provider::where(['provider_id'=>$request->provider_id])->exists())){
                return response()->json(["status"=>false , "message"=>'Provider Mismatch']);
            }else{
                $name = true;
                $email = true;
                $phone = true;
                $edit_provider = provider::where(['provider_id'=>$request->provider_id])->first();
                if($edit_provider->provider_name != $request->Provider_Name){
                    $name = false;
                    if(!empty(provider::where(['provider_name'=>$request->Provider_Name])->exists())){
                        return response()->json(["status"=>false , "message"=>'Provider Name already exists']);
                    }
                    else{
                        $edit_provider->provider_name = $request->Provider_Name;
                    }
                }
                else if($edit_provider->provider_email != $request->Provider_Email){
                    $email = false;
                    if(!empty(provider::where(['provider_email'=>$request->Provider_Email])->exists())){
                        return response()->json(["status"=>false , "message"=>'Provider Email already exists']);
                    }
                    else{
                        $edit_provider->provider_email = $request->Provider_Email;
                    }
                }
                else if($edit_provider->provider_mobile != $request->Provider_Mobile_Number){
                    $phone = false;
                    if(!empty(provider::where(['provider_mobile'=>$request->Provider_Mobile_Number])->exists())){
                        return response()->json(["status"=>false , "message"=>'Provider Mobile Number already exists']);
                    }
                    else{
                        $edit_provider->provider_mobile = $request->Provider_Mobile_Number;
                    }
                }
                if($name == true && $email == true && $phone == true){
                    return response()->json(["status"=>false, "message"=>'No changes Made for this provider']);
                }
                else{
                    $edit_provider->update();
                    return response()->json(["status"=>true , "message"=>'Provider updated successfully']);
                }                
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
