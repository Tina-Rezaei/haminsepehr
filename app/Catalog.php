<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{

    public function product(){
        return $this->belongsTo('Product','product_id','id');
    }
    public function log(){
        return $this->hasMany('Log', 'catalog_code');
    }
}
