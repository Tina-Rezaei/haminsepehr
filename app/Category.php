<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nestable\NestableTrait;

class Category extends Model
{

    use NestableTrait;

    protected $parent = 'parent_id';

    public function product_category(){

        return $this->hasMany('ProductCategory');
    }
}
