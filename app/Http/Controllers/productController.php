<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dProduct;

class productController extends Controller
{
	public function getList(){
		$list = dProduct::orderBy('id','DESC')->get();
		$image =dProduct::find(1)->Image;
		return view('admin.product.list',['list'=>$list,'image'=>$image]);
	}
}
