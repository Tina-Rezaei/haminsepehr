<?php

namespace App\Http\Controllers\UserControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductGallery;
class SingleproductController extends Controller
{
    public function index($id){
        $product = Product::with('product_gallery')->findOrFail($id);
        return view('UserViews.Singleproduct')->with([
            'product'   =>  $product
        ]);
    }
}
