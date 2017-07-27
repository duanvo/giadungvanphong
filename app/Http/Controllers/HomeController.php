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
    function home(){
        $banhang = BanHang::orderBy('id','DESC')->get();
        $suachua = Suachua::orderBy('id','DESC')->get();
        $lapgiativi = Lapgiativi::orderBy('id','DESC')->get();
        $muabandocu = Muabandocu::orderBy('id','DESC')->get();

    	return view('user_interface.user_home', compact('banhang','suachua','lapgiativi','muabandocu'));
    }

    function product(){
    	return view('user_interface.user_product');
    }

    function login(){
        return view('user_interface.user_login');
    }

    function register(){
        return view('user_interface.user_register');
    }

    function detail_banhang(Request $request, $tittle){
        $detail_banhang       = BanHang::where('tittle',$tittle)->get();
        $detail_banhang_image = Image::where('cate_type','banhang')->where('id_post',$tittle)->get();
        $relate_banhang       = BanHang::where('tittle','<>',$tittle)->orderBy('id','DESC')->get();

        return view('user_interface.detail.detail_banhang',compact('detail_banhang','relate_banhang','detail_banhang_image'));
    }

    function detail_suachua(Request $request, $tittle){
        $detail_suachua       = Suachua::where('tittle',$tittle)->get();
        $detail_suachua_image = Image::where('cate_type','suachua')->where('id_post',$tittle)->get();
        $relate_suachua       = Suachua::where('tittle','<>',$tittle)->orderBy('id','DESC')->get();


        return view('user_interface.detail.detail_suachua',compact('detail_suachua','detail_suachua_image','relate_suachua'));
    }

    function detail_lapgiativi(Request $request, $tittle){
        $detail_lapgiativi       = Lapgiativi::where('tittle',$tittle)->get();
        $detail_lapgiativi_image = Image::where('cate_type','lapgiativi')->where('id_post',$tittle)->get();
        $relate_lapgiativi       = Lapgiativi::where('tittle','<>',$tittle)->orderBy('id','DESC')->get();


        return view('user_interface.detail.detail_lapgiativi',compact('detail_lapgiativi','detail_lapgiativi_image','relate_lapgiativi'));
    }

    function detail_muabandocu(Request $request, $tittle){
        $detail_muabandocu       = Muabandocu::where('tittle',$tittle)->get();
        $detail_muabandocu_image = Image::where('cate_type','muabandocu')->where('id_post',$tittle)->get();
        $relate_muabandocu       = Muabandocu::where('tittle','<>',$tittle)->orderBy('id','DESC')->get();


        return view('user_interface.detail.detail_muabandocu',compact('detail_muabandocu','detail_muabandocu_image','relate_muabandocu'));
    }


    /*Banhang Category*/
    public function banhang_all(){
        $banhang_all = BanHang::orderBy('id','DESC')->get();
        $total_product = Banhang::count();
        return view('user_interface.category.banhang.all',compact('banhang_all','total_product'));
    }

    public function banhang_dienmay(){
        $banhang_dienmay = BanHang::where('type','dienmay')->orderBy('id','DESC')->get();
        $total_product = BanHang::where('type','dienmay')->count();
        return view('user_interface.category.banhang.dienmay',compact('banhang_dienmay','total_product'));
    }

    public function banhang_dogiadung(){
        $banhang_dogiadung = BanHang::where('type','dogiadung')->orderBy('id','DESC')->get();
        $total_product = BanHang::where('type','dogiadung')->count();
        return view('user_interface.category.banhang.dogiadung',compact('banhang_dogiadung','total_product'));
    }

    public function banhang_vanphong(){
        $banhang_vanphong = BanHang::where('type','vanphong')->orderBy('id','DESC')->get();
        $total_product = BanHang::where('type','vanphong')->count();
        return view('user_interface.category.banhang.vanphong',compact('banhang_vanphong','total_product'));
    }


    /*Suachua*/
    public function suachua_all(){
        $suachua_all = Suachua::orderBy('id','DESC')->get();
        $total_product = Suachua::count();

        return view('user_interface.category.suachua.all',compact('suachua_all','total_product'));
    }
    public function suachua_dieuhoa(){
        $suachua_dieuhoa = Suachua::where('type','dieuhoa')->orderBy('id','DESC')->get();
        $total_product = Suachua::where('type','dieuhoa')->count();

        return view('user_interface.category.suachua.dieuhoa',compact('suachua_dieuhoa','total_product'));
    }
    public function suachua_lovisong(){
        $suachua_lovisong = Suachua::where('type','lovisong')->orderBy('id','DESC')->get();
        $total_product = Suachua::where('type','lovisong')->count();

        return view('user_interface.category.suachua.lovisong',compact('suachua_lovisong','total_product'));
    }
    public function suachua_maygiat(){
        $suachua_maygiat = Suachua::where('type','maygiat')->orderBy('id','DESC')->get();
        $total_product = Suachua::where('type','maygiat')->count();

        return view('user_interface.category.suachua.maygiat',compact('suachua_maygiat','total_product'));
    }
    public function suachua_tulanh(){
        $suachua_tulanh = Suachua::where('type','tulanh')->orderBy('id','DESC')->get();
        $total_product = Suachua::where('type','tulanh')->count();

        return view('user_interface.category.suachua.tulanh',compact('suachua_tulanh','total_product'));
    }

    /*Lapgiativi*/
    public function lapgiativi_all(){
        $lapgiativi_all = Lapgiativi::orderBy('id','DESC')->get();
        $total_product = Lapgiativi::count();

        return view('user_interface.category.lapgiativi.all',compact('lapgiativi_all','total_product'));
    }

    /*Mua ban do cu*/
    public function muabandocu_all(){
        $muabandocu_all = Muabandocu::orderBy('id','DESC')->get();
        $total_product = Muabandocu::count();

        return view('user_interface.category.muabandocu.all',compact('muabandocu_all','total_product'));
    }

    public function muabandocu_bandocu(){
        $muabandocu_bandocu = Muabandocu::where('type','bandocu')->orderBy('id','DESC')->get();
        $total_product = Muabandocu::where('type','bandocu')->count();

        return view('user_interface.category.muabandocu.bandocu',compact('muabandocu_bandocu','total_product'));
    }
    public function muabandocu_muadocu(){
        $muabandocu_muadocu = Muabandocu::where('type','muadocu')->orderBy('id','DESC')->get();
        $total_product = Muabandocu::where('type','muadocu')->count();

        return view('user_interface.category.muabandocu.muadocu',compact('muabandocu_muadocu','total_product'));
    }

    /*Lien he*/
    public function lienhe(){
        $lienhe = Lienhe::orderBy('id','DESC')->get();

        return view('user_interface.category.lienhe.lienhe',compact('lienhe'));
    }
}
