<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dProductColor extends Model
{
	public $timestamps = false;
	protected $table = "product_color";
	public function product(){
		return $this->belongsTo('App\dProduct','id_product','id');
	}
	public function colors(){
		return $this->belongsTo('App\dColors','id_color','id');
	}
}
