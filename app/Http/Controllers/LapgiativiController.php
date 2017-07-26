<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lapgiativi;
use App\Image;
use Validator;
use Auth;
use File;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;

class LapgiativiController extends Controller
{
    public function show(){
    	$lapgiativi = Lapgiativi::orderby('id','DESC')->get();

    	return view('admin.lapgiativi.show',compact('lapgiativi'));
    }

    public function add(Request $request){
    	if($request->ajax()){
    		$rules=[
    			'add_tittle_lapgiativi'=>"unique:lapgiativis,tittle"
    		];

    		$messages=[
    			'add_tittle_lapgiativi.unique'=>"Tiêu đề đã tồn tại"
    		];

    		$validator=Validator::make($request->all(),$rules,$messages);

    		if($validator->fails()){
    			return response()->json([
    				'error_add_lapgiativi'=>true,
    				'messages'=>$validator->errors()
    				],200);
    		}else{
                $folder_create_img = tittle($request->add_tittle_lapgiativi);
                $folder_img = 'storage/uploads/images/lapgiativi/' .$folder_create_img;

                if(!file_exists($folder_img)){
                    File::makeDirectory($folder_img, 0777, true);
                }

                $files = $request->file('file_lapgiativi');
                foreach($files as $file){
                    $file_detail_image = $file->getClientOriginalName();
                    $file->move($folder_img,$file_detail_image);

                $file_main = $request->file('file_lapgiativi_main');
                $file_name = $file_main->getClientOriginalName();
                $file_main->move($folder_img,$file_name);

                    $images = new Image;
                    $images->cate_type  = "lapgiativi";
                    $images->type       = "lapgiativi";
                    $images->image      = $file_name;
                    $images->image_path = $folder_img.'/'.$file_name;
                    $images->id_post    = tittle($request->add_tittle_lapgiativi);
                    $images->image      = $file_detail_image;
                    $images->image_path = $folder_img.'/'.$file_detail_image;

                    $images->save();

                }

    			$lapgiativi = New Lapgiativi;

    			$lapgiativi->tittle = tittle($request->add_tittle_lapgiativi);
    			$lapgiativi->cost = $request->add_cost_lapgiativi;
    			$lapgiativi->introduce = $request->add_introduce_lapgiativi;

    			if($lapgiativi->save()){
    				return response()->json([
    					'add_lapgiativi'=>true
    					],200);
    			}
    		}
    	}
    }

    public function information(Request $request){
    	if($request->ajax()){
    		$id=$request->id;
    		$info=Lapgiativi::find($id)->get();

    		return response()->json($info);
    	}
    }

    public function get_edit(Request $request){
    	if($request->ajax()){
    		$id=$request->id;
    		$info_edit=Lapgiativi::find($id);

    		return response()->json($info_edit);
    	}
    }

    public function post_edit(Request $request){
        $id=$request->edit_lapgiativi_id;
    	$rules=[
    		'edit_tittle_lapgiativi'=>Rule::unique('lapgiativis','tittle')->ignore($id)
    	];
        $messages=[
            'edit_tittle_lapgiativi.unique'=>"Mời nhập tiêu đề"
        ];

        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response()->json([
                'error_edit_lapgiativi'=>true,
                'messages'=>$request->errors()
                ],200);
        }else{

            $folder_create_img = tittle($request->edit_tittle_lapgiativi);
                $folder_img = 'storage/uploads/images/lapgiativi/' .$folder_create_img;

            if(!file_exists($folder_img)){
                File::makeDirectory($folder_img, 0777, true);
            }
            $file_main = $request->file('file_lapgiativi_main_edit');
            $file_name = $file_main->getClientOriginalName();
            $file_main->move($folder_img,$file_name);

            $lapgiativi = Lapgiativi::find($id);

            $lapgiativi->tittle     = tittle($request->edit_tittle_lapgiativi);
            $lapgiativi->cost       = $request->edit_cost_lapgiativi;
            $lapgiativi->image      = $file_name;
            $lapgiativi->image_path = $folder_img.'/'.$file_name;
            $lapgiativi->introduce  = $request->edit_introduce_lapgiativi;

            if($lapgiativi->save()){
                return response()->json([
                    'edit_lapgiativi'=>true
                    ],200);
            }
        }
    }

    public function delete(Request $request){
        if($request->ajax()){
            $id=$request->id;

            $info_delete = Lapgiativi::find($id);

            $info_delete->delete($id);
        }
    }
}
