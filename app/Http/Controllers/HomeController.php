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
}
