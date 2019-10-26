<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public function product(){
        return $this->hasOne('Product','product_code');
    }

    public function product_order(){
        return $this->belongsTo('Product_order','order_code');
    }
}
