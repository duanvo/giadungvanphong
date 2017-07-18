<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
	public function show(){
		$user=User::orderBy('id','DESC')->get();
		return view('admin.user.show',compact('user'));
	}

	public function add(Request $request){
		$rules=[
			'add_name'=>'unique:users,name',
			'add_email'=>'unique:users,email',
			'add_password'=>'confirmed',
			'add_password_confirmation'=>'required'
		];
		$messages=[
			'add_name.unique'=>"Tên đăng nhập đã tồn tại",
			'add_email.unique'=>"Email đã tồn tại",
			'add_password.confirmed'=>"Password không khớp",
			'add_password_confirmation.required'=>"vui lòng xác nhận mật khẩu"

		];

		$validator=Validator::make($request->all(),$rules,$messages);
		if($validator->fails()){
			return response()->json([
				'error_add_user'=>true,
				'messages'=>$validator->errors()
				],200);
		}else{
			$data = new User;
			$data->name     = $request->input('add_name');
			$data->email    = $request->input('add_email');
			$data->password = bcrypt($request->input('add_password'));
			$data->level    = $request->add_level_user;

			if($data->save()){
				return response()->json([
					'add_user'=>true
					],200);
			}

		}
	}

	public function information(Request $request){
		if($request->ajax()){
			$id=$request->id;
			$info=User::find($id);
			return response()->json(array('info'=>$info));
		}
	}

	public function get_edit_user(Request $request){
		if($request->ajax()){
			$id=$request->id;
			$info=User::find($id);
			return response()->json(array('info'=>$info));
		}
	}
	public function post_edit_user(Request $request){
		$rules=[
			'password' => 'required|confirmed',
			'password_confirmation' => 'required'
		];

		$messages=[
			'password.required'=>"Vui lòng nhập mật khẩu",
			'password.confirmed'=>"Mật khẩu không khớp",
			'password_confirmation.required'=>"Vui lòng xác nhận mật khẩu"
		];
		$id=$request->old_id;
		$validator=Validator::make($request->all(),$rules,$messages);
		if($validator->fails()){
			return response()->json([
					'error_edit'=>true,
					'messages'=>$validator->errors()
				],200);
		}else{
			$user = User::find($id);
			$user->password = bcrypt($request->password);
			$user->level = $request->level;

			if($user->save()){
				return response()->json([
						'edit_user'=>true
					],200);
			}
		}
	}

	public function get_delete_user(Request $request)
    {
    }

	public function post_delete_user(Request $request){
		if($request->ajax()){
			$id=$request->id;

			$info_delete=User::find($id);
			$info_delete->delete($id);
		}
	}
}
