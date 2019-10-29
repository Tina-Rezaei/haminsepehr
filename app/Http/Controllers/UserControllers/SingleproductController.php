<?php

namespace App\Http\Controllers\UserControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleproductController extends Controller
{
    public function index(){
        return view('UserViews.Singleproduct');
    }
}
