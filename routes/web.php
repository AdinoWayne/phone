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
});