<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lienhe;
use App\Image;
use Validator;
use Auth;
use File;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;

class LienheController extends Controller
{
    public function show(){
    	$lienhe = Lienhe::orderBy('id','DESC')->get();
    	return view('admin.lienhe.show',compact('lienhe'));
    }

    public function add(Request $request){

    	$rules=[
    		"add_sdt"=>"unique:lienhes,sdt",
    		"add_diachi"=>"unique:lienhes,diachi",
    	];
    	$messages=[
    		"add_sdt.unique"=>"SDT đã tồn tại",
    		"add_diachi.unique"=>"Địa chỉ đã tồn tại"
    	];

    	$validator=Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
    		return response()->json([
    				'error_add_lienhe'=>true,
                    'messages'=>$validator->errors()
    			],200);
    	}else{
			$info_add         = new Lienhe;
			$info_add->sdt    = $request->add_sdt;
			$info_add->diachi = $request->add_diachi;

			if($info_add->save()){
				return response()->json([
					'add_lienhe'=>true
					],200);
			}
    	}
    }

    public function get_edit(Request $request){
    	if($request->json()){
    		$id=$request->id;
    		$info_edit = Lienhe::find($id);

    		return response()->json($info_edit);
    	}
    }

    public function post_edit(Request $request){

    	$id=$request->edit_id_lienhe;
    	$rules = [
    		"edit_sdt"=>Rule::unique('lienhes','sdt')->ignore($id),
    		"edit_diachi"=>Rule::unique('lienhes','diachi')->ignore($id)
    	];

    	$messages=[
    		"edit_sdt.unique"=>"SDT đã tồn tại",
    		"edit_diachi.unique"=>"Địa chỉ đã tồn tại"
    	];

    	$validator = Validator::make($request->all(),$rules,$messages);

    	if($validator->fails()){
    		return response()->json([
    				'error_edit_lienhe'=>true,
    				'messages'=>$validator->errors()
    			],200);
    	}else{
    		$info_edit = Lienhe::find($id);
			$info_edit->sdt    = $request->edit_sdt;
			$info_edit->diachi = $request->edit_diachi;

			if($info_edit->save()){
				return response()->json([
					'edit_lienhe'=>true
					],200);
			}
    	}
    }
}