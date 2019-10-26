<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function user(){
        return $this->belongsTo('User','username');
    }

    public function catalog(){
        return $this->belongsTo('Catalog','catalog_code');
    }
}
