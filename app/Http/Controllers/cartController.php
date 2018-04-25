<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\dProduct;
use App\dProductColor;
use App\dBrand;
use App\dImage;
use App\dGroupProduct;
use App\dOrders;
use App\dOrderItem;
use App\User;
use Session;
use Cart;
use Notification;
use App\Notifications\order;
class cartController extends Controller
{
  public function DeleteCart($id)
  {
    Cart::remove($id);
    return redirect('page/cart');
  }
  public function getTemp($id)
  {
    $product =dProduct::find($id);
    Session::put('product',$product);
    return redirect('page/cart');
  }
  public function getCart()
  {
    if(Session('product')){
      $product =Session('product');
      foreach ($product->image as $value){
       $image = $value->image;
       break;
     } 
   }else{
    return view('pages.page404');
  }
  return view('pages.cart',['product' =>$product,'image' =>$image]);
}
public function Ajaxgiohang($number,$price)
{
  echo "<th class=\"rs\" >".number_format($number*$price, 0, ',', '.')."đ</th>";
}
public function postCart(Request $request)
{
  try{
    if(Auth::check()){
      $product =Session('product');
      $procolor =dProductColor::where('id_product',$product->id)->where('id_color',$request->color)->first();
      $saveqty =dProductColor::find($procolor->id);
      if($saveqty->qty >=4){
        $saveqty->qty =$saveqty->qty -$request->txtqty;
        $saveqty->save();
      }else{
        return view('pages.cart')->with('Thongbao','Het Hang'); 
      }
      $order = new dOrders;
      $order->id_user = Auth::user()->id;
      $order->payment = "unpaid";
      $order->total = $request->txtqty*$product->price;
      $order->save();
      $orderItem = new dOrderItem;
      $id_order = dOrders::orderBy('id','DESC')->first();
      $orderItem->id_product_color = $procolor->id;
      $orderItem->id_orders = $id_order->id;
      $orderItem->qty =$request->txtqty;
      $orderItem->price =$product->price;
      $orderItem->save();
      $user =User::all();
      Notification::send($user,new order($order));
      return redirect('page/statuscart');
    }else{
      return redirect('page/login');
    }
  }catch(\Illuminate\Database\QueryException $err){
    return view('pages.page404');
  }
}
public function getStatuscart()
{
  if(Auth::check()){
    $order =dOrders::orderBy('id','DESC')->where('id_user',Auth::user()->id)->get();
    return view('pages.statuscart',['order' =>$order]);
  }else{
    return view('pages.page404');
  }
}
}
