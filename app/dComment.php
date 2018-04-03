<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dComment extends Model
{
	protected $table = "comment";
	public function user()
	{
		return $this->belongsTo('App\User','id_user','id');
	}
}
