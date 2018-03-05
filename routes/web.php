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
use App\dSlide;
Route::get('test',function(){
	return view('admin.slide.list');
});
Route::group(['prefix' => 'admin'], function() {
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
});