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
            $folder_create_img = tittle($request->add_tittle_muabandocu);
            $folder_img = 'storage/uploads/images/muabandocu/' .$folder_create_img;

            if(!file_exists($folder_img)){
                File::makeDirectory($folder_img, 0777, true);
            }

            $files = $request->file('file_muabandocu');
            foreach($files as $file){
                $file_detail_image = $file->getClientOriginalName();
                $file->move($folder_img,$file_detail_image);

                $images = new Image;
                $images->cate_type = "muabandocu";
                $images->type = $request->add_type_suachua;
                $images->id_post = tittle($request->add_tittle_muabandocu);
                $images->image = $file_detail_image;
                $images->image_path = $folder_img.'/'.$file_detail_image;

                $images->save();

            }

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

    public function get_edit(Request $request){
        if($request->json()){
            $id=$request->id;
            $info_edit = Muabandocu::find($id);

            return response()->json($info_edit);
        }
    }

    public function post_edit(Request $request){
        $id=$request->edit_muabandocu_id;
        $rules=[
        'edit_tittle_muabandocu'=>Rule::unique('muabandocus','tittle')->ignore($id)
        ];
        $messages=[
        'edit_tittle_muabandocu.unique'=>"Tiêu đề đã tồn tại"
        ];

        $validator=Validator::make($request->all(),$rules,$messages);

        if($validator->fails()){
            return response()->json([
                    'error_edit_muabandocu'=>true,
                    'messages'=>$validator->errors()
                ],200);
        }else{
            $edit_muabandocu = Muabandocu::find($id);

            $edit_muabandocu->tittle    = $request->edit_tittle_muabandocu;
            $edit_muabandocu->type      = $request->edit_type_muabandocu;
            $edit_muabandocu->cost      = $request->edit_cost_muabandocu;
            $edit_muabandocu->introduce = $request->edit_introduce_muabandocu;

            if($edit_muabandocu->save()){
                return response()->json([
                    'edit_muabandocu'=>true
                ],200);
            }
        }
    }

    public function delete(Request $request){
        if($request->json()){
            $id=$request->id;

            $info_delete=Muabandocu::find($id);

            File::deleteDirectory('storage/uploads/images/muabandocu/'.tittle($info_delete->tittle));
            $name_sanpham = tittle($info_delete->tittle);
            $id_images = Image::where('id_post',$name_sanpham)->get();
            foreach ($id_images as $id_images) {
                $id_images->delete($id_images->id);
            }

            $info_delete->delete($id);
        }
    }
}
