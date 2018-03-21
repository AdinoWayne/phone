<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dOrders extends Model
{
	protected $table = "orders";
	public function user()
	{
		return $this->belongsTo('App\User','id_user','id');
	}
	public function orderitem(){
		return $this->hasMany('App\dOrderItem','id_orders','id');
	}
}
