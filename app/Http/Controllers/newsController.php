<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dNews;
class newsController extends Controller
{
	public function getList(){
		$list = dNews::orderBy('id','DESC')->get();
		return view('admin.news.list',['list'=>$list]);
	}
	public function getAdd(){
	}
}
