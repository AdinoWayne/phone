<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dOrders;
use App\dProductColor;
use App\User;
use App\dOrderItem;
class orderController extends Controller
{
    public function getList(){
    	$list =dOrders::orderBy('id','DESC')->get();
    	return view('admin.order.list',['list'=>$list]);
    }
    public function getDetail($id){
    	$order =dOrders::find($id);
    	$index =1;
    	$user =User::find($order->id_user);
    	return view('admin.order.detail',['order'=>$order,'index'=>$index,'user'=>$user]);
    }
}
