<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dOrders;
use App\dProductColor;
use App\User;
use App\dOrderItem;
use PDF;
class orderController extends Controller
{
    public function getList(){
    	$list =dOrders::orderBy('id','DESC')->get();
    	return view('admin.order.list',['list'=>$list]);
    }
    public function getDetail($id){
        $order =dOrders::find($id);
        $total =dOrderItem::selectRaw('SUM(qty*price) as total')->where('id_orders', $id)->groupBy('id_orders')->pluck('total');
        $index =1;
        $user =User::find($order->id_user);
        return view('admin.order.detail',['order'=>$order,'index'=>$index,'user'=>$user,'total'=>$total]);
    }
    public function getEdit($id)
    {
        $order =dOrders::find($id);
        $total =dOrderItem::selectRaw('SUM(qty*price) as total')->where('id_orders', $id)->groupBy('id_orders')->pluck('total');
        $index =1;
        $user =User::find($order->id_user);
        return view('admin.order.edit',['order'=>$order,'index'=>$index,'user'=>$user,'total'=>$total]);
    }
    public function postEdit(Request $request,$id)
    {
        $order =dOrders::find($id);
        $order->payment = $request->select;
        $order->save();
        return redirect('admin/order/list')->with('Thongbao','Sửa thành công');
    }
    public function pdf($id)
    {
        $order =dOrders::find($id);
        $total =dOrderItem::selectRaw('SUM(qty*price) as total')->where('id_orders', $id)->groupBy('id_orders')->pluck('total');
        $index =1;
        $user =User::find($order->id_user);
        $pdf =PDF::loadView('admin.exportOrder',['order'=>$order,'index'=>$index,'user'=>$user,'total'=>$total]);
        return $pdf->download('bill'.$id.'.pdf');
    }
}
