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

Route::group(['prefix' => 'admin','middleware'=>'adminlogin'], function() {
	Route::group(['prefix' => 'slide'], function() {
		Route::get('list','slideController@getList');
		Route::get('edit/{id}','slideController@getEdit');
		Route::post('edit/{id}','slideController@postEdit');
		Route::get('add','slideController@getAdd');
		Route::post('add','slideController@postAdd');
		Route::get('delete/{id}','slideController@getDelete');
	});
	Route::group(['prefix' => 'brand'], function() {
		Route::get('list','brandController@getList');
		Route::get('edit/{id}','brandController@getEdit');
		Route::post('edit/{id}','brandController@postEdit');
		Route::get('add','brandController@getAdd');
		Route::post('add','brandController@postAdd');
		Route::get('delete/{id}','brandController@getDelete');
	});
	Route::group(['prefix' => 'groupproduct'], function() {
		Route::get('list','groupproductController@getList');
		Route::get('edit/{id}','groupproductController@getEdit');
		Route::post('edit/{id}','groupproductController@postEdit');
		Route::get('add','groupproductController@getAdd');
		Route::post('add','groupproductController@postAdd');
		Route::get('delete/{id}','groupproductController@getDelete');
	});
	Route::group(['prefix' => 'image'], function() {
		Route::get('list','imageController@getList');
		Route::get('edit/{id}','imageController@getEdit');
		Route::post('edit/{id}','imageController@postEdit');
		Route::get('add','imageController@getAdd');
		Route::post('add','imageController@postAdd');
		Route::get('delete/{id}','imageController@getDelete');
	});
	Route::group(['prefix' => 'product'], function() {
		Route::get('list','productController@getList');
		Route::get('edit/{id}','productController@getEdit');
		Route::post('edit/{id}','productController@postEdit');
		Route::get('add','productController@getAdd');
		Route::post('add','productController@postAdd');
		Route::get('delete/{id}','productController@getDelete');
	});
	Route::group(['prefix'=>'Ajax'],function(){
		Route::get('groupproduct/{id_brand}','AjaxController@getGProduct');
	});
	Route::group(['prefix' => 'news'], function() {
		Route::get('list','newsController@getList');
		Route::get('edit/{id}','newsController@getEdit');
		Route::post('edit/{id}','newsController@postEdit');
		Route::get('add','newsController@getAdd');
		Route::post('add','newsController@postAdd');
		Route::get('delete/{id}','newsController@getDelete');
	});
	Route::group(['prefix' => 'productcolor'], function() {
		Route::get('list','productcolorController@getList');
		Route::get('edit/{id}','productcolorController@getEdit');
		Route::post('edit/{id}','productcolorController@postEdit');
		Route::get('add','productcolorController@getAdd');
		Route::post('add','productcolorController@postAdd');
		Route::get('delete/{id}','productcolorController@getDelete');
	});
	Route::group(['prefix' => 'order'], function() {
		Route::get('list','orderController@getList');
		Route::get('edit/{id}','orderController@getEdit');
		Route::post('edit/{id}','orderController@postEdit');
		Route::get('detail/{id}','orderController@getDetail');
		Route::post('detail/{id}','orderController@postDetail');
		Route::get('add','orderController@getAdd');
		Route::post('add','orderController@postAdd');
		Route::get('delete/{id}','orderController@getDelete');
	});
	Route::group(['prefix' => 'user'], function() {
		Route::get('list','userController@getList');
		Route::get('edit/{id}','userController@getEdit');
		Route::post('edit/{id}','userController@postEdit');
		Route::get('add','userController@getAdd');
		Route::post('add','userController@postAdd');
		Route::get('delete/{id}','userController@getDelete');
		Route::get('yoursuser/{id}','userController@getyoursuser');
		Route::get('password/{id}','userController@getpassword');
		Route::post('password/{id}','userController@postpassword');
	});
});
Route::get('admin/login','userController@getLogin');
Route::post('admin/login','userController@postLogin');
Route::get('admin/logout','userController@getlogout');


// page home display customer
Route::get('page/home','homeController@getHome');
Route::get('page/category/{id}','homeController@getCate');
Route::get('page/category1/{id}','homeController@getCate1');
Route::get('page/detail/{id}','homeController@getDetail');
Route::get('page/login','homeController@getLogin');
Route::post('page/login','homeController@postLogin');
Route::get('page/logout','homeController@getlogout');
Route::post('comment/{id}','commentController@postcmt');
Route::get('page/register','homeController@getRegister');
Route::post('page/register','homeController@postRegister');
//search
Route::post('page/search','homeController@postSearch');
//wishlist
Route::get('add-to-cart/{id}',['as'=>'ThemCart','uses'=>'homeController@getCart']);
Route::get('del-cart/{id}',['as'=>'XoaCart','uses'=>'homeController@getDCart']);
Route::get('page/wishlist',['as'=>'wishlist','uses'=>'homeController@getWishlist']);
//blog
Route::get('page/category-blog',['as'=>'cateblog','uses'=>'homeController@getCateblog']);
Route::get('page/single-blog/{id}',['as'=>'singleblog','uses'=>'homeController@getSingleblog']);
Route::get('page/contact',['as'=>'contact','uses'=>'homeController@getContact']);
Route::get('page/user',['as'=>'user','uses'=>'homeController@getUser']);
Route::post('changepw','AjaxController@postchangepw');
Route::get('giohang/{id}',['as'=>'cart','uses'=>'cartController@getTemp']);
Route::get('page/cart','cartController@getCart');
Route::get('xoa-giohang/{id}','cartController@DeleteCart');
Route::get('Ajax/giohang/{number}/{price}','cartController@Ajaxgiohang');
Route::post('page/cart','cartController@postCart');



Route::get('/ajax/test','homeController@lmore');
Route::get('page/test','homeController@loadmore');


