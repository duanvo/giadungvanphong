<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suachua;
use Validator;
use Auth;
use File;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;

class SuachuaController extends Controller
{
    public function show(Request $request){

    	$suachua = Suachua::orderBy('id','DESC')->get();
    	return view ('admin.suachua.show',compact('suachua'));
    }


    public function add(Request $request){
    	$rules=[
    		'add_tittle_suachua'=>"unique:suachuas,tittle"
    	];
    	$messages=[
    		'add_tittle_suachua.unique'=>"Sản phẩm đã tồn tại"
    	];

    	$validator=Validator::make($request->all(),$rules,$messages);

    	if($validator->fails()){
    		return response()->json([
    			'error_add_suachua'=>true,
    			'messages'=>$validator->errors()
    			],200);
    	}else{
	    	$add_suachua = new Suachua;

	    	$add_suachua->tittle = $request->add_tittle_suachua;
	    	$add_suachua->type = $request->add_type_suachua;
	    	$add_suachua->cost = $request->add_cost_suachua;
	    	$add_suachua->introduce = $request->add_introduce_suachua;

	    	if($add_suachua->save()){
	    		return response()->json([
	    			'add_suachua'=>true
	    			],200);
	    	}
	    }
    }

    public function information(Request $request){
    	if($request->json()){
    		$id=$request->id;

    		$info = Suachua::find($id);

    		return response()->json($info);
    	}
    }


    public function get_edit(Request $request){
    	if($request->ajax()){
    		$id=$request->id;

    		$info_edit = Suachua::find($id);
    		return response()->json($info_edit);
    	}
    }

    public function post_edit(Request $request){
    	$id = $request->edit_suachua_id;
    	$rules=[
    		'edit_tittle_suachua'=>Rule::unique('suachuas','tittle')->ignore($id)
    	];
    	$messages=[
    		'edit_tittle_suachua.unique'=>"Sản phẩm đã tồn tại"
    	];

    	$validator=Validator::make($request->all(),$rules,$messages);

    	if($validator->fails()){
    		return response()->json([
    			'error_edit_suachua'=>true,
    			'messages'=>$validator->errors()
    			],200);
    	}else{
	    	$edit_suachua = Suachua::find($id);

	    	$edit_suachua->tittle = $request->edit_tittle_suachua;
	    	$edit_suachua->type = $request->edit_type_suachua;
	    	$edit_suachua->cost = $request->edit_cost_suachua;
	    	$edit_suachua->introduce = $request->edit_introduce_suachua;

	    	if($edit_suachua->save()){
	    		return response()->json([
	    			'edit_suachua'=>true
	    			],200);
	    	}
	    }
    }
}
