<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BanHang;
use App\Image;
use Validator;
use Auth;
use File;
use Illuminate\Support\MessageBag;



class BanhangController extends Controller
{
    public function show(){
    	$banhang=BanHang::orderBy('id','DESC')->get();
    	return view('admin.banhang.show',compact('banhang'));
    }


    public function add(Request $request){

    	$rules=[
    		'add_tittle'=>"unique:banhangs,tittle"
    	];
    	$messages=[
    		'add_tittle.unique'=>"Sản phẩm đã tồn tại"
    	];

    	$validator=Validator::make($request->all(),$rules,$messages);

    	if($validator->fails()){
    		return response()->json([
    			'error_add_banhang'=>true,
    			'messages'=>$validator->errors()
    			],200);
    	}else{
            //dd($file_detail_image);die;
            $folder_create_img = tittle($request->add_tittle);
            $folder_img = 'storage/uploads/images/' .$folder_create_img;

            if(!file_exists($folder_img)){
                File::makeDirectory($folder_img, 0777, true);
            }

            $files = $request->file('file');
            foreach($files as $file){
                $file_detail_image = $file->getClientOriginalName();
                $file->move($folder_img,$file_detail_image);

                $images = new Image;
                $images->type = $request->add_type_banhang;
                $images->id_post = tittle($request->add_tittle);
                $images->image = $file_detail_image;
                $images->image_path = $folder_img.'/'.$file_detail_image;

                $images->save();

            }

    		$sanpham = new BanHang;
    		$sanpham->tittle = $request->add_tittle;
    		$sanpham->type = $request->add_type_banhang;
    		$sanpham->cost = $request->add_cost;
    		$sanpham->introduce = $request->add_introduce;

    		if($sanpham->save()){
    			return response()->json([
    					'add_banhang'=>true
    				],200);
    		}
    	}
    }

    public function information(Request $request){
    	if($request->ajax()){
    		$info=BanHang::find($request->id);

    		return response()->json(array('info'=>$info));
    	}
    }


    public function get_edit(Request $request){
        if ($request->ajax()){
            $id = $request->id;
            $info_edit = BanHang::find($id);

            return response()->json(array('info_edit'=>$info_edit));
        }
    }

    public function post_edit(Request $request){
        $id = $request->old_id_banhang;
        $data = BanHang::find($id);
        $data->type      = $request->edit_type_sanpham;
        $data->cost      = $request->edit_cost_sanpham;
        $data->introduce = $request->edit_introduce_sanpham;

        if($data->save()){
            return response()->json([
                'edit_sanpham'=>true
                ],200);
        }
    }

    public function post_delete(Request $request){
        if($request->ajax()){
            $id=$request->id;

            $info_delete = BanHang::find($id);

            $info_delete->delete($id);

        }
    }
}
