<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dImage extends Model
{
	protected $table = "image";
	public function product()
	{
		return $this->belongsTo('App\dProduct','id_product','id');
	}
}
