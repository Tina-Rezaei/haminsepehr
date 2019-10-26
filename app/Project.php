<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = true;

    protected $attributes = [
        'body' => 'something',
    ];
    protected $guarded = [];
}
