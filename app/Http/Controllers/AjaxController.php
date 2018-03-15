<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dBrand;
use App\dGroupProduct;
use App\dProduct;
class AjaxController extends Controller{
	public function getGProduct($idbrand){
		$gp =dGroupProduct::where('id_brand',$idbrand)->get();
		foreach ($gp as $value) {
			echo "<option value='".$value->id."'>".$value->name."</option>";
		}
	}
}
?>