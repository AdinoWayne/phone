<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dSlide;
class slideController extends Controller
{
    public function getList(){
    	$list =dSlide::orderBy('id','DESC')->get();
    	return view('admin.slide.list',['list'=>$list]);
    }
    public function getAdd(){
        return view('admin.slide.add');
    }
    public function getEdit($id){
        $current = slide::find($id);
        return view('admin.slide.edit',['slide'=>$current]);
    }
    public function getDelete($id){
        $current = slide::find($id);
        $current->delete();
        return redirect('admin/slide/list');
    }
    public function postAdd(Request $request){
        $this->validate($request,
            [
                'txtName' =>'required|min:3|max:100',
            ],
            [
                'txtName.required' =>'Bạn chưa nhập tên',
                'txtName.min' =>'Tên quá ít kí tự',
                'txtName.max' =>'Tên quá dài',
            ]);
        $current = new dSlide;
        $current->name = $request->txtName;
        $current->link =$request->txtlink;   
        if($request->hasFile('txtHinh')){
            $file =$request->file('txtHinh');
            $name =$file->getClientOriginalName();
            $hinh =str_random(4)."_".$name;
            while (file_exists("upload/slide/".$hinh)) {
                $hinh =str_random(4)."_".$name;
            }
            $file->move("upload/slide",$hinh);
            $current->image =$hinh;
        }else{
            $current->image ="";
        }
        $current->save();
        return redirect('admin/slide/add')->with('thongbao','Thêm thành công');
    }
}
