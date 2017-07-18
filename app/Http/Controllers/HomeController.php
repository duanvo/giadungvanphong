<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
    	return view('user_interface.user_home');
    }

    function product(){
    	return view('user_interface.user_product');
    }

    function detail(){
    	return view('user_interface.user_detail');
    }

    function login(){
    	return view('user_interface.user_login');
    }

    function register(){
    	return view('user_interface.user_register');
    }
}
