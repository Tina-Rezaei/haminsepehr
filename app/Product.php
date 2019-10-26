<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function comment(){
        return $this->hasMany('Comment');
    }
    public function product_gallery(){
        return $this->hasMany('Product_Gallery');
    }
    public function catalog(){
        return $this->hasMany('Catalog');
    }
    public function shopping_cart(){
        return $this->hasMany('Shopping_cart');
    }
    public function product_category(){
        return $this->hasMany('ProductCategory');
    }
}
