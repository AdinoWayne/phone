<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dColors extends Model
{
	public $timestamps = false;
	protected $table = "colors";
	public function product()
	{
		return $this->belongsToMany('App\dProduct','Product_Color','id_product','id_color');
	}
	public function productcolor(){
		return $this->hasMany('App\dProductColor','id_color','id');
	}
}
