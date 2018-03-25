<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dImage;
use App\dProduct;
class imageController extends Controller
{
	public function getList(){
		$list = dImage::orderBy('id_product','DESC')->get();
		return view('admin.image.list',['list'=>$list]);
	}
	public function getAdd(){
		$name =dProduct::All();
		return view('admin.image.add',['name'=>$name]);
	}
	public function getEdit($id){
		$current = dImage::find($id);
		return view('admin.image.edit',['image'=>$current]);
	}
}
