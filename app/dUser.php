<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dUser extends Model
{
	public $timestamps = false;
	protected $table = "user";
	public function news()
	{
		return $this->hasMany('App/dNews','id_user','id');
	}
}
