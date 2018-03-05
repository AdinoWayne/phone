<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dBrand extends Model
{
	protected $table = "brand";
	public function groupproduct()
	{
		return $this->hasMany('App/dGroupProduct','','');
	}
	public function product()
	{
		return $this->hasManyThrough('App\dProduct','App\dGroupProduct','id_brand','id_group_product','id');
	}
}