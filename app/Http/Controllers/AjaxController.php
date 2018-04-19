<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\dBrand;
use App\dGroupProduct;
use App\dProduct;
use App\User;
use App\dOrders;
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
	public function getCateByprice(Request $request)
	{
		$arr =explode('đ',$request->price);
		$strCheck =substr($request->url ,-3, 1);
		$idarr =explode('/',$request->url);
		if($strCheck == "1"){
			$product =dProduct::select('product.id','product.name','product.price','product.content')->join('group_product','id_group_product','group_product.id')->where('group_product.id',$idarr[7])->where('product.price','>',$arr[0])->where('product.price','<',$arr[1])->paginate(9);
			$index =0;
			$check2 = 1;
			return view('pages.category',['index'=>$index,'pro'=>$product,'check2' =>$check2,'url' =>$request->url,'price'=>$request->price]);
		}else{
			$product =dProduct::select('product.id','product.name','product.price','product.content')->join('group_product','id_group_product','group_product.id')->join('brand','group_product.id_brand','brand.id')->where('brand.id',$idarr[7])->where('product.price','>',$arr[0])->where('product.price','<',$arr[1])->paginate(9);
			$index =0;
			$check2 = 1;
			return view('pages.category',['index'=>$index,'pro'=>$product,'check2' =>$check2,'url' =>$request->url,'price' =>$request->price]);
		}
	}
	public function postSearchtime()
	{
		$list =dOrders::orderBy('id','DESC')->whereDate('created_at','>=',$_GET["fromdate"])->whereDate('created_at','<=',$_GET["todate"])->get();
		$money =0;
		foreach($list as $value){
			$money +=$value->total;
			echo "<tr class=\"odd gradeX\" align=\"center\">
			<td>$value->id</td>
			<td>{$value->user->fullname}</td>
			<td>$value->payment</td>
			<td>$value->total</td>
			<td>$value->created_at</td>
			<td>$value->updated_at</td>
			<td class=\"center\"><i class=\"fa fa-trash-o  fa-fw\"></i><a href=\"admin/order/detail/$value->id\"> Detail</a></td>
			<td class=\"center\"><i class=\"fa fa-trash-o  fa-fw\"></i><a href=\"admin/order/delete/$value->id\"> Delete</a></td>
			<td class=\"center\"><i class=\"fa fa-pencil fa-fw\"></i> <a href=\"admin/order/edit/$value->id\">Edit</a></td>
			</tr>";
		}
		echo "<td colspan=\"3\">Total</td>";
		echo "<td>".$money."</td>";
		echo "<td class=\"center\"><i class=\"fa fa-trash-o  fa-fw\"></i><a href=\"admin/order/list\"> Reset</a></td>";
	}
}
?>