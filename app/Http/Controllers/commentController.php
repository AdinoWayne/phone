<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\dComment;
class commentController extends Controller
{
    public function postcmt(Request $request,$id)
    {
    	$idpro =$id;
    	$current = new dComment;
    	$current->id_product = $idpro;
    	$current->id_user = Auth::user()->id;
    	$current->content =$request->noidung;
    	$current->save();
    	return redirect("page/detail/$id");
    }
}
