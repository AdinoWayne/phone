<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\dBrand;
use App\dGroupProduct;
use App\dProduct;
use App\User;
use Hash;
class AjaxController extends Controller{
	public function getGProduct($idbrand){
		$gp =dGroupProduct::where('id_brand',$idbrand)->get();
		foreach ($gp as $value) {
			echo "<option value='".$value->id."'>".$value->name."</option>";
		}
	}
	public function postchangepw(Request $request)
	{
		$this->validate($request,
			[
				'txtpassword' =>'required',
				'txtpassword1' =>'required',
				'txtpassword2' =>'required|same:txtpassword1'
			],
			[
				'txtpassword.required' =>'Bạn chưa nhập password',
				'txtpassword1.required' =>'Bạn chưa nhập password',
				'txtpassword2.required' =>'Bạn chưa nhập password',
				'txtpassword2.same' =>'input pass dont true'
			]);
		$user = User::find(Auth::user()->id);
		if(Hash::check("$request->txtpassword",$user->password)){
			$user->password =bcrypt($request->txtpassword1);
			$user->save();
			return redirect('page/user')->with('Thongbao','Change password successfully');
		}else{
			return redirect('page/user')->with('Thongbao','Change password failed');
		}
	}
}
?>