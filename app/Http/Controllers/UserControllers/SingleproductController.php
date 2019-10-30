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
        foreach ($product->product_gallery as $image){
//            dd($image->image);
        }

//        dd($product->product_gallery[0]);
        return view('UserViews.Singleproduct')->with(['product'=>$product]);
    }
}
