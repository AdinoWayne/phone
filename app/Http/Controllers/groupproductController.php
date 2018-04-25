<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dBrand;
use App\dGroupProduct;
class groupproductController extends Controller
{
	public function getList(){
		$grproduct =dGroupProduct::all();
		return view('admin.groupproduct.list',['grproduct'=>$grproduct]);
	}
	public function getAdd(){
		$parent =dBrand::all();
		return view('admin.groupproduct.add',['optioncate'=>$parent]);
	}
	public function getEdit($id){
		$grproduct = dGroupProduct::find($id);
		$parent =dBrand::all();
		return view('admin.groupproduct.edit',['grproduct'=>$grproduct,'optioncate'=>$parent]);
	}
	public function getDelete($id){
		try{
			$current = dGroupProduct::find($id);
			$current->delete();
			return redirect('admin/groupproduct/list');
			catch(\Illuminate\Database\QueryException $err)
			{
				return redirect('admin/groupproduct/list')->with('Thongbao','You have to delete table son');
			}
		}
	}
	public function postAdd(Request $request){
		$this->validate($request,
			[
				'txtname' =>'required|min:3|max:100'
			],
			[
				'txtname.required' =>'Bạn chưa nhập tên',
				'txtname.min' =>'Tên quá ít kí tự',
				'txtname.max' =>'Tên quá dài',
			]);
		$current = new dGroupProduct;
		$current->name = $request->txtname;
		$current->id_brand =$request->cateparent;
		$current->save();
		return redirect('admin/groupproduct/add')->with('Thongbao','Thêm thành công');
	}
	public function postEdit(Request $request,$id){
		$current =dGroupProduct::find($id);
		$this->validate($request,
			[
				'txtName'=>'required|unique:LoaiTin,Ten|min:3|max:100'
			],
			[
				'txtName.required' =>'Bạn chưa nhâp',
				'txtName.unique' =>'Tên đã tồn tại',
				'txtName.min' =>'Tên quá ít kí tự',
				'txtName.max' =>'Tên quá dài',
			]
		);
		$current->name = $request->txtName;
		$current->id_brand =$request->cateparent;
		$current->save();
		return redirect('admin/groupproduct/list')->with('Thongbao','Edit thành công');
	}
}
