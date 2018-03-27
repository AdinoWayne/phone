<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dBrand;

class brandController extends Controller
{
    public function getList(){
    	$brand =dBrand::all();
    	return view('admin.brand.list',['brand'=>$brand]);
    }
    public function getAdd(){
    	return view('admin.brand.add');
    }
    public function getEdit($id){
        $current = dBrand::find($id);
        return view('admin.brand.edit',['brand'=>$current]);
    }
    public function getDelete($id){
        $current = dBrand::find($id);
        try{
            $current->delete();
            die('catched you');
            return redirect('admin/brand/list');
        }
        catch(\Illuminate\Database\QueryException $err)
        {
            return redirect('admin/brand/list')->with('Thongbao','You have to delete table son');
        }
    }
    public function postAdd(Request $request){
        $this->validate($request,
            [
                'Ten' =>'required|min:3|max:100'
            ],
            [
                'Ten.required' =>'Bạn chưa nhập tên',
                'Ten.min' =>'Tên quá ít kí tự',
                'Ten.max' =>'Tên quá dài',
            ]);
        $current = new dBrand;
        $current->name = $request->Ten;
        $current->save();
        return redirect('admin/brand/add')->with('Thongbao','Thêm thành công');
    }
    public function postEdit(Request $request,$id){
        $current =dBrand::find($id);
        $this->validate($request,
            [
                'txtName'=>'required|unique:TheLoai,Ten|min:3|max:100'
            ],
            [
                'txtName.required' =>'Bạn chưa nhâp',
                'txtName.unique' =>'Tên đã tồn tại',
                'txtName.min' =>'Tên quá ít kí tự',
                'txtName.max' =>'Tên quá dài',
            ]
        );
        $current->name =$request->txtName;
        $current->save();
        return redirect('admin/brand/list')->with('Thongbao','Edit thành công');
    }
}
