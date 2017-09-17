<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suachua;
use App\Image;
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

            $folder_create_img = tittle($request->add_tittle);
            $folder_img = 'storage/uploads/images/banhang/' .$folder_create_img;

            if(!file_exists($folder_img)){
                File::makeDirectory($folder_img, 0777, true);
            }
            $file_product = $request->file('file_product');
            $file_detail_image_1 = $file_product->getClientOriginalName();
            $file_product->move($folder_img,$file_detail_image_1);


	    	$add_suachua = new Suachua;

            $add_suachua->tittle     = $request->add_tittle_suachua;
            $add_suachua->type       = $request->add_type_suachua;
            $add_suachua->image         = $file_detail_image_1;
            $add_suachua->image_path    = $folder_img.'/'.$file_detail_image_1;
            $add_suachua->introduce  = $request->add_introduce_suachua;

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

            $edit_suachua->tittle     = $request->edit_tittle_suachua;
            $edit_suachua->type       = $request->edit_type_suachua;
            $edit_suachua->introduce  = $request->edit_introduce_suachua;

	    	if($edit_suachua->save()){
	    		return response()->json([
	    			'edit_suachua'=>true
	    			],200);
	    	}
	    }
    }

    public function delete(Request $request){
        if($request->ajax()){
            $id=$request->id;
            $info_delete=Suachua::find($id);

            File::deleteDirectory('storage/uploads/images/suachua/'.tittle($info_delete->tittle));
            $name_sanpham = tittle($info_delete->tittle);
            $id_images = Image::where('id_post',$name_sanpham)->get();
            foreach ($id_images as $id_images) {
                $id_images->delete($id_images->id);
            }

            $info_delete->delete($id);
        }
    }
}
