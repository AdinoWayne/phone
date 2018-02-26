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
}
