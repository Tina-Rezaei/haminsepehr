<?php

namespace App\Http\Controllers\UserControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductGallery;
use App\Catalog;
class HomeController extends Controller
{
    public function index(){
        $products = Product::with('product_gallery')->get();
        return view('UserViews.Homepage')->with(['products'=>$products]);

    }
}
