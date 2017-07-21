<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Muabandocu;
use App\Image;
use Validator;
use Auth;
use File;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;

class MuabandocuController extends Controller
{
    public function show(){
    	$muabandocu = Muabandocu::orderBy('id','DESC')->get();

    	return view('admin.muabandocu.show',compact('muabandocu'));
    }

    public function add(Request $request){
    	$rules=[
    		'add_tittle_muabandocu'=>'unique:muabandocus,tittle'
    	];
    	$messages=[
    		'add_tittle_muabandocu.unique'=>"Tiêu đề đã tồn tại"
    	];

    	$validator = Validator::make($request->all(),$rules,$messages);

    	if($validator->fails()){
    		return repsonse()->json([
    			'error_add_muabandocu'=>true
    			],200);
    	}else{
    		$muabandocu = new Muabandocu;

    		$muabandocu->tittle=$request->add_tittle_muabandocu;
    		$muabandocu->type=$request->add_type_muabandocu;
    		$muabandocu->cost=$request->add_cost_muabandocu;
    		$muabandocu->introduce=$request->add_introduce_muabandocu;

    		if($muabandocu->save()){
    			return response()->json([
    					'add_muabandocu'=>true
    				],200);
    		}
    	}
    }

    public function information(Request $request){
    	if($request->json()){
    		$id=$request->id;
    		$info = Muabandocu::find($id);

    		return response()->json($info);
    	}
    }
}
