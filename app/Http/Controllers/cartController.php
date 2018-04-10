<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\dProduct;
use App\dBrand;
use App\dImage;
use App\dGroupProduct;
use App\User;
use App\Cart;
use Session;
class cartController extends Controller
{
    public function getCart()
    {
    	$product =dProduct::find(1);
        return view('pages.cart',['product'=>$product]);
    }
}
