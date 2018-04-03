<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dSlide;
use App\dProduct;
use App\dNews;
use App\dBrand;
use App\dImage;
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
        $product =dProduct::select('product.id','product.name','product.price','product.content')->join('group_product','id_group_product','group_product.id')->join('brand','group_product.id_brand','brand.id')->where('brand.id',$id)->paginate(9);
        $index =0;
        return view('pages.category',['index'=>$index,'pro'=>$product]);
    }
    public function getDetail($id)
    {
        $product =dProduct::find($id);
        $gp =dGroupProduct::where('id',$product->id_group_product)->get()->first();
        $brand =dBrand::where('id',$gp->id_brand)->get()->first();
        $index =1;
        return view('pages.detail',['product'=>$product,'index'=>$index,'brand'=>$brand]);
    }
}
