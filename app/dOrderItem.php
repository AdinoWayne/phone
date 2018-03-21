<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dOrderItem extends Model
{
	protected $table = "order_item";
	public function order(){
		return $this->belongsTo('App\dOrder','id_orders','id');
	}
	public function productcolor(){
		return $this->belongsTo('App\dProductColor','id_product_color','id');
	}
}
