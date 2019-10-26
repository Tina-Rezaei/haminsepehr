<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    public function user(){
        return $this->belongsTo('User','username');
    }

    public function shopping_cart(){
        return $this->hasMany('Shopping_cart','order_code');
    }
}
