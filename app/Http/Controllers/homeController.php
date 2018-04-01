<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dSlide;
use App\dProduct;
class homeController extends Controller
{
    public function getHome()
    {
    	$slide =dSlide::all();
    	// $product =dProduct::take(12)->get()->toArray();
    	// $product =array_chunk($product,4,true);
    	$product =dProduct::take(12)->get();
    	$index =0;
    	return view('pages.home',['slide'=>$slide,'product'=>$product,'index'=>$index]);
    }
}
