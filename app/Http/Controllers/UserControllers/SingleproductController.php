<?php

namespace App\Http\Controllers\UserControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class SingleproductController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        return view('UserViews.Singleproduct')->with(['product'=>$product]);
    }
}
