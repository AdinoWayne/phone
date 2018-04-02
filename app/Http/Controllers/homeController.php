<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dSlide;
use App\dProduct;
use App\dNews;
use App\dBrand;
use App\dGroupProduct;
class homeController extends Controller
{
    public function getHome()
    {
    	$slide =dSlide::all();
    	// $product =dProduct::take(12)->get()->toArray();
    	// $product =array_chunk($product,4,true);
    	$product =dProduct::take(12)->get();
    	$blog =dNews::all();
    	$index =0;
    	return view('pages.home',['slide'=>$slide,'product'=>$product,'index'=>$index,'blog'=>$blog]);
    }
    public function getCate($id)
    {
    	$gp =dBrand::find($id);
    	// $product =dProduct::where('id_groupp_roduct',$gp->id);
    	// ->paginate(12);
    	$index =0;
    	return view('pages.category',['gp'=>$gp,'index'=>$index]);
    }
}
