<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Catalog;
use App\ProductGallery;

class Product extends Model
{

    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function product_gallery(){
        return $this->hasMany(ProductGallery::class);
    }
    public function catalog(){
        return $this->hasMany(Catalog::class);
    }
    public function shopping_cart(){
        return $this->hasMany('App\Shopping_cart');
    }
    public function product_category(){
        return $this->hasMany('App\ProductCategory');
    }
}
