<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dColors extends Model
{
	protected $table = "colors";
	public function product()
	{
		return $this->belongsToMany('App\dProduct','App\dProductColor','id_product','id_color');
	}
}
