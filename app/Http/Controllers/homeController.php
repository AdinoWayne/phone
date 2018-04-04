<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\dSlide;
use App\dProduct;
use App\dNews;
use App\dBrand;
use App\dImage;
use App\dGroupProduct;
use App\User;
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
    public function getLogin()
    {
        return view('pages.login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required|email',
                'password' =>'required',
            ],
            [
                'email.required' =>'Bạn chưa nhập email',
                'email.email' =>'Email dont true type',
                'password.required' =>'Bạn chưa nhập password',
            ]);
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('page/home');
        }else{
            return redirect('page/login')->with('Thongbao','login fail');
        }
    }
    public function getlogout()
    {
        Auth::logout();
        return redirect('page/home');
    }
    public function getRegister()
    {
        return view('pages.register');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request,
            [
                'txtemail' => 'required|email',
                'txtpassword' =>'required',
                'txtpassword1' =>'required|same:txtpassword'
            ],
            [
                'txtemail.required' =>'Bạn chưa nhập email',
                'txtemail.email' =>'Email dont true type',
                'txtpassword.required' =>'Bạn chưa nhập password',
                'txtpassword1.required' =>'Bạn chưa nhập password',
                'txtpassword1.same' =>'input pass dont true'
            ]);
        $current = new User;
        $current->fullname = $request->txtname;
        $current->email =$request->txtemail;
        $current->phone =$request->txtphone;  
        $current->address =$request->txtaddress;  
        $current->role ="customer"; 
        if($request->hasFile('txtHinh')){
            $file =$request->file('txtHinh');
            $name =$file->getClientOriginalName();
            $hinh =str_random(4)."_".$name;
            while (file_exists("upload/user/".$hinh)) {
                $hinh =str_random(4)."_".$name;
            }
            $file->move("upload/user",$hinh);
            $current->avatar =$hinh;
        }else{
            $current->avatar ="";
        }  
        $current->password =bcrypt($request->txtpassword);
        try{
            $current->save();
            return redirect('page/home');
        }
        catch(\Illuminate\Database\QueryException $err)
        {
            return redirect('page/register')->with('Thongbao','Try Again');
        }
    }
}
