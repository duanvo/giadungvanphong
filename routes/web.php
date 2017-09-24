<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',['as'=>'home', 'uses'=>'HomeController@home']);


Route::get('login',['as'=>'login', 'uses'=>'LoginController@get_login']);
Route::post('login',['as'=>'login', 'uses'=>'LoginController@post_login']);
/*Logout*/
Route::get('logout', ['as'=>'logout', 'uses'=>'LoginController@logout']);

Route::get('register',['as'=>'register', 'uses'=>'HomeController@register']);

Route::post('search',['as'=>'search','uses'=>'HomeController@search']);

/*Category*/
Route::group(['prefix'=>'banhang'],function(){
	Route::get('all',['as'=>'banhang.all','uses'=>'HomeController@banhang_all']);
	Route::get('dienmay',['as'=>'banhang.dienmay','uses'=>'HomeController@banhang_dienmay']);
	Route::get('dogiadung',['as'=>'banhang.dogiadung','uses'=>'HomeController@banhang_dogiadung']);
	Route::get('vanphong',['as'=>'banhang.vanphong','uses'=>'HomeController@banhang_vanphong']);
});

/*Category detail type*/
Route::get('dongsanpham/{type_detail}', ['as'=>'dongsanpham', 'uses'=>'HomeController@type_detail']);


/*Category Suachua */
Route::group(['prefix'=>'suachua'],function(){
	Route::get('all',['as'=>'suachua.all','uses'=>'HomeController@suachua_all']);
	Route::get('dieuhoa',['as'=>'suachua.dieuhoa','uses'=>'HomeController@suachua_dieuhoa']);
	Route::get('tulanh',['as'=>'suachua.tulanh','uses'=>'HomeController@suachua_tulanh']);
	Route::get('maygiat',['as'=>'suachua.maygiat','uses'=>'HomeController@suachua_maygiat']);
	Route::get('lovisong',['as'=>'suachua.lovisong','uses'=>'HomeController@suachua_lovisong']);
	Route::get('diennuoc',['as'=>'suachua.diennuoc','uses'=>'HomeController@suachua_diennuoc']);
});

/*Lapgiativi*/
Route::group(['prefix'=>'lapgiativi'],function(){
	Route::get('all',['as'=>'lapgiativi.all','uses'=>'HomeController@lapgiativi_all']);
});

/*Muabandocu*/
Route::group(['prefix'=>'muabandocu'],function(){
	Route::get('all',['as'=>'muabandocu.all','uses'=>'HomeController@muabandocu_all']);
	Route::get('muadocu',['as'=>'muabandocu.muadocu','uses'=>'HomeController@muabandocu_muadocu']);
	Route::get('bandocu',['as'=>'muabandocu.bandocu','uses'=>'HomeController@muabandocu_bandocu']);
});

/*Lien he*/
Route::get('lienhe',['as'=>'lienhe','uses'=>'HomeController@lienhe']);

/*Detail ban hang*/
Route::get('detail/banhang/{tittle}',['as'=>'detail_banhang','uses'=>'HomeController@detail_banhang']);
Route::get('detail/suachua/{tittle}',['as'=>'detail_suachua','uses'=>'HomeController@detail_suachua']);
Route::get('detail/lapgiativi/{tittle}',['as'=>'detail_lapgiativi','uses'=>'HomeController@detail_lapgiativi']);
Route::get('detail/muabandocu/{tittle}',['as'=>'detail_muabandocu','uses'=>'HomeController@detail_muabandocu']);

/*Realtime chat*/
Route::resource('message', 'MessageController');
Route::post('chat',['as'=>'chat','uses'=>'MessageController@store']);
/*Admin Group*/

Route::group(['prefix'=>'admin','middleware'=>'checkadmin'], function(){
	Route::get('/',['as'=>'admin.index','uses'=>'AdminController@index']);

	Route::group(['prefix'=>'user'], function(){
		Route::get('show',['as'=>'admin.user.show', 'uses'=>'UserController@show']);

		/*Information*/
		Route::get('information',['as'=>'admin.user.information', 'uses'=>'UserController@information']);

		/*Add User*/
		Route::post('add',['as'=>'admin.user.add', 'uses'=>'UserController@add']);

		/*Edit User*/
		Route::get('edit',['as'=>'admin.user.edit','uses'=>'UserController@get_edit_user']);
		Route::post('edit',['as'=>'admin.user.edit','uses'=>'UserController@post_edit_user']);

		/*Delete*/
		Route::get('delete',['as'=>'delete','uses'=>'UserController@get_delete_user']);
		Route::post('delete',['as'=>'delete','uses'=>'UserController@post_delete_user']);
	});

	Route::group(['prefix'=>'banhang'],function(){
		Route::get('show',['as'=>'admin.banhang.show','uses'=>'BanhangController@show']);

		/*Add Product*/
		Route::post('add',['as'=>'admin.banhang.add','uses'=>'BanhangController@add']);

		/*Information*/
		Route::get('information',['as'=>'admin.banhang.information','uses'=>'BanhangController@information']);

		/*Edit san pham*/
		Route::get('edit',['as'=>'admin.banhang.edit','uses'=>'BanhangController@get_edit']);
		Route::post('edit',['as'=>'admin.banhang.edit','uses'=>'BanhangController@post_edit']);

		/*Delete*/
		Route::get('delete',['as'=>'admin.banhang.delete','uses'=>'BanhangController@get_delete']);
		Route::post('delete',['as'=>'admin.banhang.delete','uses'=>'BanhangController@post_delete']);
	});

	Route::group(['prefix'=>'suachua'],function(){
		Route::get('show',['as'=>'admin.suachua.show','uses'=>'SuachuaController@show']);

		Route::get('information',['as'=>'admin.suachua.information','uses'=>'SuachuaController@information']);

		/*Add*/
		Route::post('add',['as'=>'admin.suachua.add','uses'=>'SuachuaController@add']);


		/*Edit*/
		Route::get('edit',['as'=>'admin.suachua.edit','uses'=>'SuachuaController@get_edit']);
		Route::post('edit',['as'=>'admin.suachua.edit','uses'=>'SuachuaController@post_edit']);

		/*Delete*/
		Route::post('delete',['as'=>'admin.suachua.delete','uses'=>'SuachuaController@delete']);
	});

	Route::group(['prefix'=>'lapgiativi'],function(){
		Route::get('show',['as'=>'admin.lapgiativi.show','uses'=>'LapgiativiController@show']);

		/*Add*/
		Route::post('add',['as'=>'admin.lapgiativi.add','uses'=>'LapgiativiController@add']);

		/*Infomation*/
		Route::get('information',['as'=>'admin.lapgiativi.information','uses'=>'LapgiativiController@information']);

		/*Edit*/
		Route::get('edit',['as'=>'admin.lapgiativi.edit','uses'=>'LapgiativiController@get_edit']);
		Route::post('edit',['as'=>'admin.lapgiativi.edit','uses'=>'LapgiativiController@post_edit']);

		/*delete*/
		Route::post('delete',['as'=>'admin.lapgiativi.delete','uses'=>'LapgiativiController@delete']);
	});


	Route::group(['prefix'=>'muabandocu'],function(){
		Route::get('show',['as'=>'admin.muabandocu.show','uses'=>'MuabandocuController@show']);

		/*Add*/
		Route::post('add',['as'=>'admin.muabandocu.add','uses'=>'MuabandocuController@add']);

		/*Information*/
		Route::get('information',['as'=>'admin.muabandocu.information','uses'=>'MuabandocuController@information']);

		/*Edit*/
		Route::get('edit',['as'=>'admin.muabandocu.edit','uses'=>'MuabandocuController@get_edit']);
		Route::post('edit',['as'=>'admin.muabandocu.edit','uses'=>'MuabandocuController@post_edit']);

		/*Delete*/
		Route::post('delete',['as'=>'admin.muabandocu.delete','uses'=>'MuabandocuController@delete']);
	});

	Route::group(['prefix'=>'lienhe'],function(){
		Route::get('show',['as'=>'admin.lienhe.show','uses'=>'LienheController@show']);

		/*Add*/
		Route::post('add',['as'=>'admin.lienhe.add','uses'=>'LienheController@add']);

		/*Information*/
		Route::get('information',['as'=>'admin.lienhe.information','uses'=>'LienheController@information']);

		/*Edit*/
		Route::get('edit',['as'=>'admin.lienhe.efit','uses'=>'LienheController@get_edit']);
		Route::post('edit',['as'=>'admin.lienhe.efit','uses'=>'LienheController@post_edit']);

		/*Delete*/
		Route::post('delete',['as'=>'admin.lienhe.delete','uses'=>'LienheController@delete']);
	});
});