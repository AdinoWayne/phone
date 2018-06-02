<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\dNews;
use Carbon\Carbon;
class newsController extends Controller
{
	public function getList(){
		$list = dNews::orderBy('id','DESC')->get();
		return view('admin.news.list',['list'=>$list]);
	}
	public function getAdd(){
		return view('admin.news.add');
	}
	public function getEdit($id){
		$current = dNews::find($id);
		return view('admin.news.edit',['news'=>$current]);
	}
	public function postAdd(Request $request){
		$this->validate($request,
			[
				'txtname' =>'required|min:3|max:100',
			],
			[
				'txtname.required' =>'Bạn chưa nhập tên',
				'txtname.min' =>'Tên quá ít kí tự',
				'txtname.max' =>'Tên quá dài',
			]);
		$current = new dNews;
		$user =Auth::user();
		$current->name = $request->txtname;
		$current->summary =$request->txtsummary;
		$current->content =$request->txtcontent;
		if($request->hasFile('txtHinh')){
			$file =$request->file('txtHinh');
			$name =$file->getClientOriginalName();
			$hinh =str_random(4)."_".$name;
			while (file_exists("upload/blog/".$hinh)) {
				$hinh =str_random(4)."_".$name;
			}
			$file->move("upload/blog",$hinh);
			$current->image =$hinh;
		}else{
			die('abc');
			$current->image ="";
		}
		$current->id_user =$user->id;
		$current->created_at =Carbon::now();
		$current->save();
		return redirect('admin/news/add')->with('Thongbao','Thêm thành công');
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			[
				'txtname' =>'required|min:3|max:100',
			],
			[
				'txtname.required' =>'Bạn chưa nhập tên',
				'txtname.min' =>'Tên quá ít kí tự',
				'txtname.max' =>'Tên quá dài',
			]);
		$current = dNews::find($id);
		$current->name = $request->txtname;
		$current->summary =$request->txtsummary;
		$current->content =$request->txtcontent;
		if($request->hasFile('txtHinh')){
			$file =$request->file('txtHinh');
			$name =$file->getClientOriginalName();
			$hinh =str_random(4)."_".$name;
			while (file_exists("upload/blog/".$hinh)) {
				$hinh =str_random(4)."_".$name;
			}
			$file->move("upload/blog",$hinh);
			$current->image =$hinh;
		}
		$current->save();
		return redirect('admin/news/list')->with('Thongbao','Sửa thành công');
	}
	public function getDelete($id){
		$current = dNews::find($id);
		$current->delete();
		return redirect('admin/news/list');
	}
}
