<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
     public function getproduct(){
    	return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
