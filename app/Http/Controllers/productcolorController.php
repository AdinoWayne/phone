<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dProduct;
use App\dColors;
use App\dProductColor;
class productcolorController extends Controller
{
	public function getList(){
		$list = dProductColor::orderBy('id','DESC')->get();
		return view('admin.productcolor.list',['list'=>$list]);
	}
	public function getAdd(){
		$parent1 =dProduct::all();
		$parent =dColors::all();
		return view('admin.productcolor.add',['pro'=>$parent1,'color' =>$parent]);
	}
	public function postAdd(Request $request){
		$current = new dProductColor;
		$current->id_product = $request->cateloglist;
		$current->id_color =$request->cateparent;
		$current->qty = $request->txtQty;
		$current->cost =$request->txtCost;
		$current->save();
		return redirect('admin/productcolor/add')->with('Thongbao','Thêm thành công');
	}
	public function getDelete($id){
		$current = dProductColor::find($id);
		$current->delete();
		return redirect('admin/productcolor/list')->with('Thongbao','Remove thành công');
	}
}
