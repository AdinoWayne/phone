<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dGroupProduct extends Model
{
	public $timestamps = false;
	protected $table = "group_product";
	public function brand()
	{
		return $this->belongsTo('App\dBrand','id_brand','id');
	}
	public function product()
	{
		return $this->hasMany('App\dProduct','id_group_product','id');
	}
}
