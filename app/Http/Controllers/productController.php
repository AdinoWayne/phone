<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dProduct;
use App\dBrand;
use App\dGroupProduct;
use App\dImage;
class productController extends Controller
{
	public function getList(){
		$list = dProduct::orderBy('id','DESC')->get();
		$image =dProduct::find(1)->Image;
		return view('admin.product.list',['list'=>$list,'image'=>$image]);
	}
	public function getAdd(){
		$parent1 =dBrand::all();
		$parent =dGroupProduct::all();
		return view('admin.product.add',['optioncate'=>$parent,'optioncalog' =>$parent1]);
	}
	public function postAdd(Request $request){
		$current = new dProduct;
		$current->name = $request->txtName;
		$current->price =$request->txtPrice;
		$current->content =$request->txtContent;
		$current->id_group_product =$request->cateparent;
		$current->status =$request->txtStatus;   
		$current->version =$request->txtVersion;
		$current->screen =$request->txtScreen;
		$current->camera =$request->txtCamera;
		$current->body =$request->txtBody;
		$current->ram =$request->txtRam;
		$current->storage =$request->txtStorage;
		$current->os =$request->txtOS;
		$current->chipset =$request->txtChipset;
		$current->cpu =$request->txtCPU;
		$current->size =$request->txtSize;
		$current->screenresolution =$request->txtScreenresolution;
		$current->displaytype =$request->txtDisplaytype;
		$current->fcarema =$request->txtFcarema;
		$current->rcarema =$request->txtRcarema;
		$current->wirelesstechnology =$request->txtWirelesstechnology;
		$current->power =$request->txtPower;
		$current->sim =$request->txtSim;
		$current->Bluetooth =$request->txtBluetooth;
		$current->usb =$request->txtUsb;
		$current->more =$request->txtMore;
		$current->save();
		$image = new dImage;
		$temp = dProduct::max('id');
		$image->id_product =$temp;
		if($request->hasFile('txtHinh')){
			$file =$request->file('txtHinh');
			$name =$file->getClientOriginalName();
			$hinh =str_random(4)."_".$name;
			while (file_exists("upload/product/".$hinh)) {
				$hinh =str_random(4)."_".$name;
			}
			$file->move("upload/product",$hinh);
			$image->image =$hinh;
		}else{
			$image->image ="";
		}
		$image->save();
		return redirect('admin/product/add')->with('Thongbao','Thêm thành công');
	}
}
