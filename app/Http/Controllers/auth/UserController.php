<?php

namespace App\Http\Controllers\auth;
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
    public function authentication (Request $request) {
        // return 'working';
  
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
                try{
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
                    // }
                    return response()->json(['success'=>$request->all()]);
                    // return response()->json(['success'=>'OTP Send Successfully']);
                    // return view('auth.verifyOtp');
                    // return redirect()->route("auth.verifyOtp")->with('Success', 'Verification');
                    // return 'Arun';
                }
                catch(\Exception $exception){
                    // return Redirect::back()->withErrors([$exception->getMessage()])->withInput($request->input());
                    // return response()->json($exception->getMessage());
                    return response()->json(['message'=>$exception->getMessage()]);
                    // return Redirect::back()->withErrors($exception->getMessage());
                } 
                catch (\Illuminate\Database\QueryException $exception ){
                // return redirect('/')->with("failed",$exception->getMessage());
                // return redirect()->route("auth.authentication")->with('error', 'Invalid');
                // return response()->json($exception->getMessage());
                return response()->json(['message'=>$exception->getMessage()]);
                } 
        //     }         
    }
    function verifyOtp (Request $request) {
        return view('auth.verifyOtp');
        // return view('admin.dashboard');
    }
}
