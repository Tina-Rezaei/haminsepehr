<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public function category(){
        return $this->belongsTo('Category');
    }
    public function product(){
        return $this->belongsTo('Product');
    }
}
