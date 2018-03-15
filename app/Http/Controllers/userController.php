<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dUser;
class userController extends Controller
{
	public function getList(){
		$list =dUser::orderBy('id','DESC')->get();
		return view('admin.user.list',['list'=>$list]);
	}
	public function getAdd(){
		return view('admin.user.add');
	}
	public function getEdit($id){
		$current = dUser::find($id);
		return view('admin.user.edit',['user'=>$current]);
	}
	public function getDelete($id){
		$current = dUser::find($id);
		$current->delete();
		return redirect('admin/user/list');
	}
	public function postAdd(Request $request){
		$this->validate($request,
			[
				'txtemail' => 'required|email',
				'txtpassword' =>'required',
				'txtpassword1' =>'required|same:txtpassword'
			],
			[
				'txtemail.required' =>'Bạn chưa nhập email',
				'txtemail.email' =>'Email dont true type',
				'txtpassword.required' =>'Bạn chưa nhập password',
				'txtpassword1.required' =>'Bạn chưa nhập password',
				'txtpassword1.same' =>'input pass dont true'
			]);
		$current = new dUser;
		$current->fullname = $request->txtname;
		$current->email =$request->txtemail;
		$current->phone =$request->txtphone;  
		$current->address =$request->txtaddress;  
		$current->role =$request->txtrole; 
        if($request->hasFile('txtHinh')){
            $file =$request->file('txtHinh');
            $name =$file->getClientOriginalName();
            $hinh =str_random(4)."_".$name;
            while (file_exists("upload/user/".$hinh)) {
                $hinh =str_random(4)."_".$name;
            }
            $file->move("upload/user",$hinh);
            $current->avatar =$hinh;
        }else{
            $current->avatar ="";
        }  
		$current->password =bcrypt($request->txtpassword);
		$current->save();
		return redirect('admin/user/add')->with('Thongbao','Thêm thành công');
	}
}
