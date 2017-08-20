<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BanHang;
use App\Image;
use Validator;
use Auth;
use File;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;



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
            $folder_img = 'storage/uploads/images/banhang/' .$folder_create_img;

            if(!file_exists($folder_img)){
                File::makeDirectory($folder_img, 0777, true);
            }

            $files = $request->file('file');
            foreach($files as $file){
                $file_detail_image = $file->getClientOriginalName();
                $file->move($folder_img,$file_detail_image);

                $images = new Image;
                $images->cate_type = "banhang";
                $images->type = $request->add_type_banhang;
                $images->id_post = tittle($request->add_tittle);
                $images->image = $file_detail_image;
                $images->image_path = $folder_img.'/'.$file_detail_image;

                $images->save();

            }
            $file_product = $request->file('file_product');
            $file_detail_image_1 = $file_product->getClientOriginalName();
            $file_product->move($folder_img,$file_detail_image_1);


    		$sanpham = new BanHang;
            $sanpham->tittle        = tittle($request->add_tittle);
            $sanpham->type          = $request->add_type_banhang;
            $sanpham->image         = $file_detail_image_1;
            $sanpham->image_path    = $folder_img.'/'.$file_detail_image_1;
            $sanpham->cost_discount = $request->add_cost_discount;
            $sanpham->cost          = $request->add_cost;
            $sanpham->introduce     = $request->add_introduce;

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
            $info_image=Image::where('id_post',tittle($info->tittle))->get();
            $info_count = Image::where('id_post',tittle($info->tittle))->count();

            foreach($info_image as $info_image){
                $image[] = $info_image->image;
            }

    		return response()->json(array('info'=>$info,'info_image'=>$image));
    	}
    }


    public function get_edit(Request $request){
        if ($request->ajax()){
            $id = $request->id;
            $info_edit = BanHang::find($id);

            $tittle_edit = $info_edit->tittle;

            $image_edit = Image::where('id_post',tittle($tittle_edit))->get();

            foreach ($image_edit as $image_edit) {
                $image_tittle[] = $image_edit->image;
            }

            return response()->json(array('info_edit'=>$info_edit,'image_edit'=>$image_tittle));
        }
    }

    public function post_edit(Request $request){
        $id = $request->old_id_banhang;
        $rules=[
            'edit_tittle_sanpham'=>Rule::unique('banhangs','tittle')->ignore($id)
        ];
        $messages=[
            'edit_tittle_sanpham.unique'=>"Sản phẩm đã tồn tại"
        ];

        $validator=Validator::make($request->all(),$rules,$messages);

        if($validator->fails()){
            return response()->json([
                'error_edit_banhang'=>true,
                'messages'=>$validator->errors()
                ],200);
        }else{
            $folder_create_img = tittle($request->edit_tittle_sanpham);
            $folder_img = 'storage/uploads/images/banhang/' .$folder_create_img;

            if(!file_exists($folder_img)){
                File::makeDirectory($folder_img, 0777, true);
            }
            $file_product = $request->file('file_product_edit');
            $file_detail_image_1 = $file_product->getClientOriginalName();
            $file_product->move($folder_img,$file_detail_image_1);

            $data = BanHang::find($id);
            $data->type          = $request->edit_type_sanpham;
            $data->cost_discount = $request->edit_cost_discount_sanpham;
            $data->cost          = $request->edit_cost_sanpham;
            $data->image         = $file_detail_image_1;
            $data->image_path    = $folder_img.'/'.$file_detail_image_1;
            $data->introduce     = $request->edit_introduce_sanpham;

            if($data->save()){
                return response()->json([
                    'edit_sanpham'=>true
                    ],200);
            }
        }
    }

    public function post_delete(Request $request){
        if($request->ajax()){
            $id=$request->id;

            $info_delete = BanHang::find($id);
            File::deleteDirectory('storage/uploads/images/banhang/'.tittle($info_delete->tittle));
            $info_delete->delete($id);

            $name_sanpham = tittle($info_delete->tittle);

            $id_images = Image::where('id_post',$name_sanpham)->get();
            foreach ($id_images as $id_images) {
                $id_images->delete($id_images->id);
            }

        }
    }
}
