<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dNews extends Model
{
	protected $table = "news";
	public function user()
	{
		return $this->belongsTo('App\User','id_user','id');
	}
}
