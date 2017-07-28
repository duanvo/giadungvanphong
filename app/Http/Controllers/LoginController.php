<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use Session;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
    }

    public function get_login(){
    	return view('user_interface.user_login');
    }
    public function post_login(Request $request){
    	$rules = [
    		'username'=>'required',
    		'password'=>'required'
    	];

    	$messages=[
    		'username.required'=>"Nhap Ten Dang Nhap",
    		'password.required'=>"Nhap Password"
    	];

    	$validator = Validator::make($request->all(), $rules, $messages);

    	if($validator->fails()){
    		Session::flash('message', "Nhap day du ten va password");
    		return view('user_interface.user_login');
    	}else{
    		$username = $request->input('username');
    		$password = $request->input('password');

    		if(Auth::attempt(['name'=>$username, 'password'=>$password])){
    			return redirect()->route('admin.index');
    		}else{
    			Session::flash('message',"Username hoac Password sai");
    			return view('user_interface.user_login');
    		}
    	}
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}


