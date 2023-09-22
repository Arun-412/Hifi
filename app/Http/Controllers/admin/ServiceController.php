<?php

namespace App\Http\Controllers\admin;

use App\Models\service;
use App\Models\provider;
use App\Models\service_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Auth;
use DB;

class ServiceController extends Controller
{
    public function services($tkn){
        try{
            if(!empty(provider::where(['provider_id'=>$tkn])->exists())){
                $provider = provider::where(['provider_id'=>$tkn])->first();
                $data['provider_name'] = $provider->provider_name;
            }
            $services = service::orderBy('id', 'DESC')->where(['provider_id'=>$tkn])->get();
            $data['provider_id'] = $tkn;
            $data['services'] = $services;
            return view('admin.service_provider.services')->with('data',$data);  
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }   
    }

    public function service_types(Request $request) {
        try{
            $service_types = service_type::orderBy('id', 'ASC')->get();
            return response()->json(["status"=>true ,'message'=>$service_types]);
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }  
    }

    public function add_service(Request $request) {
        try{
            $validate = Validator::make($request->all(), [
                'provider_id' => 'required|string|min:6|max:6',
                'service_name' => 'required|string|min:3|max:40',
                'service_type' => 'required|string|min:6|max:6',
            ],);
            if($validate->fails()){
                return response()->json(["status"=>false , "message" => $validate->errors()->toArray()[array_keys($validate->errors()->toArray())[0]][0]]);
            }
            else if(!empty(service::where([['provider_id','=',$request->provider_id],['service_type','=',$request->service_type],['service_name','=',$request->service_name]])->exists())){
                return response()->json(["status"=>false , "message"=>'Service Name already exists']);
            }else{
                $add_service = new service;
                $add_service->provider_id = $request->provider_id;
                $add_service->service_id = substr(md5(microtime()), 0, 6);
                $add_service->service_type = $request->service_type;
                $add_service->service_name = $request->service_name;
                $add_service->status = 0;
                $add_service->save();
                return response()->json(["status"=>true , "message"=>'Service added successfully']);
            }
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }  
    }

    public function manage_service($pid,$sid) {
        try{
            if(!empty(provider::where(['provider_id'=>$pid])->exists())){
                $provider = provider::where(['provider_id'=>$pid])->first();
                $data['provider_name'] = $provider->provider_name;
            }
            if(!empty(service::where(['service_id'=>$sid])->exists())){
                $service = service::where(['service_id'=>$sid])->first();
                $data['service_name'] = $service->service_name;
                $data['status'] = $service->status;
                if(!empty(service_type::where(['service_type_id'=>$service->service_type])->exists())){
                    $service_type = service_type::where(['service_type_id'=>$service->service_type])->first();
                    $data['service_type'] = $service_type->service_type_name;
                }
            }
            // $services = service::orderBy('id', 'DESC')->where(['provider_id'=>$tkn])->get();
            $data['provider_id'] = $pid;
            $data['service_id'] = $sid;
            // return view('admin.service_provider.services')->with('data',$data);  
            return view('admin.service_provider.manage_service')->with('data',$data);  
            // return response()->json(["status"=>true , "message"=>'successfully']);
        }
        catch(\Exception $exception){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        } 
        catch (\Illuminate\Database\QueryException $exception ){
            return response()->json(["status"=>false ,'message'=>$exception->getMessage()]);
        }  
    }
}
