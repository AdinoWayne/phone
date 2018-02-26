<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dProduct extends Model
{
	protected $table = "product";
    public function groupproduct()
    {
    	return $this->belongsTo('App\dGroupProduct','id_group_product','id');
    }
    public function brand()
    {
        if ($cusor = $this->groupproduct){
            return $cusor->belongsTo('App\dBrand','id_brand','id');
        } else {
            throw new DomainException('Error 404 Not Found');
        }
    }
    public function comment()
    {
    	return $this->hasMany('App\dComment','id_product','id');
    }
    public function color()
    {
    	return $this->belongsToMany('App\dProduct','App\dProductColor','id_product','id_color');
    }
    public function image()
    {
    	return $this->hasMany('App\dImage','id_product','id');
    }
}
