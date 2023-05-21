<?php

namespace App\Http\Controllers\auth;
use Auth;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function register (Request $request) {
        return view('auth.register');
    }
    function login (Request $request) {
        return view('auth.login');
    }
    function authentication (Request $request) {
        // $validate = Validator::make($request->all(), [
        //     'username' => 'required|string|min:3|max:20',
        //     'phone_number' => 'required|string|min:10|max:10',
        //     'email' => 'required|email|max:50',
        //     'password' => 'required|string|min:8|max:30',
		// 	'confirm_password' => 'required|string|min:8|max:30',

        // ],
        // );
        // if($validate->fails()){
        //     // return back()->withErrors($validate->errors())->withInput();
        //     return response()->json($validate->errors()->toArray());
        //     }
        //     else if(!empty(user::where(['username'=>$request->username])->exists())){
        //         return response()->json(['error'=>'Username already exists']);
        //     }
        //     else if(!empty(user::where(['email'=>$request->email_id])->exists())){
        //         return response()->json(['error'=>'Email already exists']);
        //     }
        //     else if(!empty(user::where(['phone_number'=>$request->phone_number])->exists())){
        //         return response()->json(['error'=>'Phone Number already exists']);
        //     }
        //     else{
        //         try{
        //             return response()->json(['success'=>'user created successfully']);
        //         }
        //         catch(\Exception $exception){
        //             // return Redirect::back()->withErrors([$exception->getMessage()])->withInput($request->input());
        //             return response()->json($exception->getMessage());
        //         } 
        //         catch (\Illuminate\Database\QueryException $exception ){
        //         // return redirect('/')->with("failed",$exception->getMessage());
        //         return response()->json($exception->getMessage());
        //         } 
        //     }         
        return view('auth.verifyOtp');
    }
    function verifyOtp (Request $request) {
        return view('admin.dashboard');
    }
}
