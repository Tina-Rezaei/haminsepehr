<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function product(){
        return $this->belongsTo('Product','product_code');
    }

    public function user(){
        return $this->belongsTo('User','username');
    }
}
