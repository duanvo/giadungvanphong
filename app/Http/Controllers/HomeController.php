<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BanHang;
use App\Image;
use App\Lapgiativi;
use App\Lienhe;
use App\Muabandocu;
use App\Suachua;
use App\User;

class HomeController extends Controller
{

    public function home(){
        $banhang = BanHang::orderBy('id','DESC')->paginate(3);
        $suachua = Suachua::orderBy('id','DESC')->paginate(3);
        $lapgiativi = Lapgiativi::orderBy('id','DESC')->paginate(3);
        $muabandocu = Muabandocu::orderBy('id','DESC')->where('type','bandocu')->paginate(3);
        $lienhe = Lienhe::orderBy('id','DESC')->get();

    	return view('user_interface.user_home', compact('banhang','suachua','lapgiativi','muabandocu','lienhe'));
    }

    public function detail_banhang(Request $request, $tittle){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $detail_banhang       = BanHang::where('tittle',$tittle)->get();
        $detail_banhang_image = Image::where('cate_type','banhang')->where('id_post',$tittle)->get();
        $relate_banhang       = BanHang::where('tittle','<>',$tittle)->orderBy('id','DESC')->get();

        return view('user_interface.detail.detail_banhang',compact('detail_banhang','relate_banhang','detail_banhang_image','lienhe'));
    }

    public function detail_suachua(Request $request, $tittle){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $detail_suachua       = Suachua::where('tittle',$tittle)->get();
        $detail_suachua_image = Image::where('cate_type','suachua')->where('id_post',$tittle)->get();
        $relate_suachua       = Suachua::where('tittle','<>',$tittle)->orderBy('id','DESC')->get();


        return view('user_interface.detail.detail_suachua',compact('detail_suachua','detail_suachua_image','relate_suachua','lienhe'));
    }

    public function detail_lapgiativi(Request $request, $tittle){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $detail_lapgiativi       = Lapgiativi::where('tittle',$tittle)->get();
        $detail_lapgiativi_image = Image::where('cate_type','lapgiativi')->where('id_post',$tittle)->get();
        $relate_lapgiativi       = Lapgiativi::where('tittle','<>',$tittle)->orderBy('id','DESC')->get();


        return view('user_interface.detail.detail_lapgiativi',compact('detail_lapgiativi','detail_lapgiativi_image','relate_lapgiativi','lienhe'));
    }

    public function detail_muabandocu(Request $request, $tittle){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $detail_muabandocu       = Muabandocu::where('tittle',$tittle)->get();
        $detail_muabandocu_image = Image::where('cate_type','muabandocu')->where('id_post',$tittle)->get();
        $relate_muabandocu       = Muabandocu::where('tittle','<>',$tittle)->where('type','bandocu')->orderBy('id','DESC')->get();


        return view('user_interface.detail.detail_muabandocu',compact('detail_muabandocu','detail_muabandocu_image','relate_muabandocu','lienhe'));
    }


    /*Banhang Category*/
    public function banhang_all(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $banhang_all = BanHang::orderBy('id','DESC')->get();
        $total_product = Banhang::count();
        return view('user_interface.category.banhang.all',compact('banhang_all','total_product','lienhe'));
    }

    public function banhang_dienmay(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $banhang_dienmay = BanHang::where('type','dienmay')->orderBy('id','DESC')->get();
        $total_product = BanHang::where('type','dienmay')->count();
        return view('user_interface.category.banhang.dienmay',compact('banhang_dienmay','total_product','lienhe'));
    }

    public function banhang_dogiadung(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $banhang_dogiadung = BanHang::where('type','dogiadung')->orderBy('id','DESC')->get();
        $total_product = BanHang::where('type','dogiadung')->count();
        return view('user_interface.category.banhang.dogiadung',compact('banhang_dogiadung','total_product','lienhe'));
    }

    public function banhang_vanphong(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $banhang_vanphong = BanHang::where('type','vanphong')->orderBy('id','DESC')->get();
        $total_product = BanHang::where('type','vanphong')->count();
        return view('user_interface.category.banhang.vanphong',compact('banhang_vanphong','total_product','lienhe'));
    }


    /*Suachua*/
    public function suachua_all(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $suachua_all = Suachua::orderBy('id','DESC')->get();
        $total_product = Suachua::count();

        return view('user_interface.category.suachua.all',compact('suachua_all','total_product','lienhe'));
    }
    public function suachua_dieuhoa(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $suachua_dieuhoa = Suachua::where('type','dieuhoa')->orderBy('id','DESC')->get();
        $total_product = Suachua::where('type','dieuhoa')->count();

        return view('user_interface.category.suachua.dieuhoa',compact('suachua_dieuhoa','total_product','lienhe'));
    }
    public function suachua_lovisong(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $suachua_lovisong = Suachua::where('type','lovisong')->orderBy('id','DESC')->get();
        $total_product = Suachua::where('type','lovisong')->count();

        return view('user_interface.category.suachua.lovisong',compact('suachua_lovisong','total_product','lienhe'));
    }
    public function suachua_maygiat(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $suachua_maygiat = Suachua::where('type','maygiat')->orderBy('id','DESC')->get();
        $total_product = Suachua::where('type','maygiat')->count();

        return view('user_interface.category.suachua.maygiat',compact('suachua_maygiat','total_product','lienhe'));
    }
    public function suachua_tulanh(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $suachua_tulanh = Suachua::where('type','tulanh')->orderBy('id','DESC')->get();
        $total_product = Suachua::where('type','tulanh')->count();

        return view('user_interface.category.suachua.tulanh',compact('suachua_tulanh','total_product','lienhe'));
    }
    public function suachua_diennuoc(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $suachua_diennuoc = Suachua::where('type','diennuoc')->orderBy('id','DESC')->get();
        $total_product = Suachua::where('type','diennuoc')->count();

        return view('user_interface.category.suachua.diennuoc',compact('suachua_diennuoc','total_product','lienhe'));
    }

    /*Lapgiativi*/
    public function lapgiativi_all(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $detail_lapgiativi       = Lapgiativi::orderBy('id','DESC')->get();

        return view('user_interface.detail.detail_lapgiativi',compact('detail_lapgiativi','lienhe'));
    }

    /*Mua ban do cu*/
    public function muabandocu_all(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $muabandocu_all = Muabandocu::orderBy('id','DESC')->where('type','bandocu')->get();
        $total_product = Muabandocu::count();

        return view('user_interface.category.muabandocu.all',compact('muabandocu_all','total_product','lienhe'));
    }

    public function muabandocu_bandocu(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $muabandocu_bandocu = Muabandocu::where('type','bandocu')->orderBy('id','DESC')->get();
        $total_product = Muabandocu::where('type','bandocu')->count();

        return view('user_interface.category.muabandocu.bandocu',compact('muabandocu_bandocu','total_product','lienhe'));
    }
    public function muabandocu_muadocu(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        $detail_muabandocu = Muabandocu::where('type','muadocu')->orderBy('id','DESC')->get();

        return view('user_interface.category.muabandocu.muadocu',compact('detail_muabandocu','lienhe'));
    }

    /*Lien he*/
    public function lienhe(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();

        return view('user_interface.category.lienhe.lienhe',compact('lienhe'));
    }

    public function search(Request $request){
        $key_search = $request->search_key;
        $results = Banhang::where('tittle','LIKE','%'.$key_search.'%')->get();
        dd($results);
    }

    /*Dong san pham*/
    public function type_detail(Request $request, $type_detail){
        $result = Banhang::where('type_detail',$type_detail)->get();
        $total_product = Banhang::where('type_detail',$type_detail)->count();
        $lienhe = Lienhe::orderBy('id','DESC')->get();
        return view('user_interface.category.banhang.dongsanpham', compact('result','lienhe','total_product'));
    }
}
