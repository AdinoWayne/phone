<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
class userController extends Controller
{
	public function getList(){
		$list =User::orderBy('id','DESC')->get();
		return view('admin.user.list',['list'=>$list]);
	}
	public function getAdd(){
		return view('admin.user.add');
	}
	public function getEdit($id){
		$current = User::find($id);
		return view('admin.user.edit',['user'=>$current]);
	}
	public function getDelete($id){
		$current = User::find($id);
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
		$current = new User;
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
		try{
			$current->save();
			return redirect('admin/user/add')->with('Thongbao','Thêm thành công');
		}
		catch(\Illuminate\Database\QueryException $err)
		{
			return redirect('admin/user/list')->with('Thongbao','Server Bussy');
		}
	}
	public function postEdit(Request $request,$id){
		$current =User::find($id);
		$current->fullname = $request->txtname;
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
		}	 
		$current->save();
		return redirect('admin/user/list')->with('Thongbao','Sửa thành công');
	}
	public function getLogin(){
		return view('admin.login');
	}
	public function postLogin(Request $request){
		$this->validate($request,[
			'email'=>'required',
			'password'=>'required'
		],
		[
			'email.required'=>'you input email yet',
			'password.required'=>'you input password yet'
		]);
		if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
			return redirect('admin/product/list');
		}else{
			return redirect('admin/login')->with('Thongbao','login fail');
		}
	}
	public function getlogout(){
		Auth::logout();
		return view('admin.login');
	}
	public function getyoursuser($id){
		$current = User::find($id);
		return view('admin.user.youruser',['value'=>$current]);
	}
	public function getpassword($id){
		return view('admin.user.password');
	}
	public function postpassword(Request $request,$id){
		$this->validate($request,
			[
				'txtpassword' =>'required',
				'txtpassword1' =>'required|same:txtpassword'
			],
			[
				'txtpassword.required' =>'Bạn chưa nhập password',
				'txtpassword1.required' =>'Bạn chưa nhập password',
				'txtpassword1.same' =>'input pass dont true'
			]);
		$current =User::find($id);
		$current->password =bcrypt($request->txtpassword);
		$current->save();
		return redirect('admin/user/list')->with('Thongbao','successfully change password');
	}
}
