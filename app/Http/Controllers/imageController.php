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
	public function getDelete($id){
		$current = dImage::find($id);
		$current->delete();
		return redirect('admin/image/list')->with('Thongbao','Delete thành công');
	}
	public function postAdd(Request $request){
		$current = new dImage;
		$current->id_product =$request->cateparent;
		if($request->hasFile('txtHinh')){
			$file =$request->file('txtHinh');
			$name =$file->getClientOriginalName();
			$hinh =str_random(4)."_".$name;
			while (file_exists("upload/product/".$hinh)) {
				$hinh =str_random(4)."_".$name;
			}
			$file->move("upload/product",$hinh);
			$current->image =$hinh;
		}else{
			$current->image ="";
		}
		$current->save();
		return redirect('admin/image/add')->with('Thongbao','Thêm thành công');
	}
	public function postEdit(Request $request,$id){
		$current = dImage::find($id);
		if($request->hasFile('txtHinh')){
			$file =$request->file('txtHinh');
			$name =$file->getClientOriginalName();
			$hinh =str_random(4)."_".$name;
			while (file_exists("upload/product/".$hinh)) {
				$hinh =str_random(4)."_".$name;
			}
			$file->move("upload/product",$hinh);
			$current->image =$hinh;
		}
		$current->save();
		return redirect('admin/image/list')->with('Thongbao','Sua thành công');
	}
}
