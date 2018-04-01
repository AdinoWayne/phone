<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dSlide;
class homeController extends Controller
{
    public function getHome()
    {
    	$slide =dSlide::all();
    	return view('pages.home',['slide'=>$slide]);
    }
}
