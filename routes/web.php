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

Route::Get('/',['as'=>'home', 'uses'=>'HomeController@index']);
Route::Get('product',['as'=>'product', 'uses'=>'HomeController@product']);
Route::Get('detail',['as'=>'detail', 'uses'=>'HomeController@detail']);
Route::Get('login',['as'=>'login', 'uses'=>'HomeController@login']);
Route::Get('register',['as'=>'register', 'uses'=>'HomeController@register']);


/*Admin Group*/

Route::group(['prefix'=>'admin'], function(){
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
		Route::get('delete',['as'=>'deletel','uses'=>'UserController@get_delete_user']);
		Route::post('delete',['as'=>'deletel','uses'=>'UserController@post_delete_user']);
	});

	Route::group(['prefix'=>'banhang'],function(){
		Route::get('show',['as'=>'admin.banhang.show','uses'=>'BanhangController@show']);

		/*Add Product*/
		Route::post('add',['as'=>'admin.banhang.add','uses'=>'BanhangController@add']);

		/*Information*/
		Route::get('information',['as'=>'admin.banhang.information','uses'=>'BanhangController@information']);

		/*Edit san pham*/
		Route::Get('edit',['as'=>'admin.banhang.edit','uses'=>'BanhangController@get_edit']);
		Route::Post('edit',['as'=>'admin.banhang.edit','uses'=>'BanhangController@post_edit']);

		/*Delete*/
		Route::get('delete',['as'=>'admin.banhang.delete','uses'=>'BanhangController@get_delete']);
		Route::post('delete',['as'=>'admin.banhang.delete','uses'=>'BanhangController@post_delete']);
	});
});