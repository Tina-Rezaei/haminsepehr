<?php

namespace App\Http\Controllers\AdminControllers;
use App\Category;
use App\Project;
use App\ProductCategory;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductGallery;
use App\Catalog;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\EditProduct;
use Storage;
use \File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(3);
        $products->map(function($product){
            if(strlen(strip_tags($product->description))>50) {
                $product->description = mb_substr(strip_tags($product->description), 0, 50) . '...';
            }
            $product_image = Product::find($product->id);
            if($product_image->thumbnail_img)
                $product['image'] = $product_image->thumbnail_img;
            else
                $product['image'] = 'images/products/default.gif';

            $ID = $product->category_id;
            $categories = [];
            while ($ID !== 1){
                $row = Category::find($ID);
                $categories[] = $row->name;
                $ID = $row->parent_id;
            }
            $category_hierarchy = implode(' -> ', array_reverse($categories));
            $product['category_name'] = $category_hierarchy;
            return $product;
        });

        return view('AdminViews.Products.ProductsList')->with(['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::attr(['name' => 'categories'])
            ->selected(2)
            ->renderAsDropdown();
        return view('AdminViews.Products.AddProduct')->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->products_code = $request->products_code;
        $product->name = $request->product_name;
        $product->category_id = $request->categories;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->counts_in_stock = $request->counts_in_stock;

//        Product::create($request->all());
        if($request->hasFile('thumbnailimg')) {
            $image = $request->file('thumbnailimg');
            $image_name = time().'.'.$image->getClientOriginalName();
            $image = Image::make($image->getRealPath());
            $image->resize(212,271);
            $image->save(public_path('images/products/' . $image_name));
            $product->thumbnail_img = 'images/products/' . $image_name;

        }else{
            $product->thumbnail_img = 'images/products/default.gif';
        }
        $product->save();

        if($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $image_name = time().'.'.$image->getClientOriginalName();
                $image = Image::make($image->getRealPath());
                $image->resize(212,271);
                $image->save(public_path('images/products/' . $image_name));
                $product_gallery = new ProductGallery();
                $product_gallery->product_id = $product->id;
                $product_gallery->image = 'images/products/' . $image_name;
                $product_gallery->save();
            }
        }else{
            $product_gallery = new ProductGallery();
            $product_gallery->product_id = $product->id;
            $product_gallery->image = 'images/products/default.gif';
            $product_gallery->save();
        }
        if($request->hasFile('catalogs')){
            foreach ($request->file('catalogs') as $catalog){
                $catalog_name = $catalog->getClientOriginalName();
                $catalog_path = Storage::disk('public')->putFileAs('catalogs', $catalog, $catalog_name);
                $catalog = new Catalog();
                $catalog->name = $catalog_name;
                $catalog->public = true;
                $catalog->catalog_file = $catalog_path;
                $catalog->catalog_code = 2;
                $catalog->product_id = $product->id;
                $catalog->save();
            }
        }

        $ID = $request->categories;
        $parent_ids = array();
        $parent_ids[] = $ID;
        while ($ID !== 0){
            $row = Category::find($ID);
            $parent_ids[] = $row->parent_id;
            $ID = $row->parent_id;
        }
        foreach ($parent_ids as $parent_id){
            $productcategory = new ProductCategory();
            $productcategory->product_id = $product->id;
            $productcategory->category_id = $parent_id;
            $productcategory->save();
        }

        return redirect()->route('products.index');

    }

        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $product_gallery = ProductGallery::where('product_id',$id)->get();
        $catalogs = Catalog::where('product_id',$id)->get();
        $categories = Category::attr(['name' => 'categories'])
            ->selected($product->category_id)
            ->renderAsDropdown();
        return view('AdminViews.Products.EditProduct')->with([
            'product'=>$product,
            'products_gallery'=>$product_gallery,
            'categories'=>$categories,
            'catalogs'=>$catalogs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProduct $request, $id)
    {
        $ids = explode(",",$request->ids[0]);
        $catalog_ids = explode(",",$request->catalog_ids[0]);
        foreach ($ids as $deletedid) {
            $product_gallery = ProductGallery::find($deletedid);
            if ($product_gallery) {
                $productgallery_image = public_path($product_gallery->image);
                File::delete($productgallery_image);
                ProductGallery::where('id',$deletedid)->delete();
            }
        }
        foreach ($catalog_ids as $deletedid){
            $catalog = Catalog::find($deletedid);
            if ($catalog){
                Storage::disk('public')->delete($catalog->catalog_file);
                Catalog::where('id',$deletedid)->delete();
            }
        }


        $product = Product::find($id);
        $product->products_code = $request->products_code;
        $product->name = $request->product_name;
        $product->category_id = $request->categories;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->counts_in_stock = $request->counts_in_stock;
        if($request->hasFile('thumbnailimg')){
            if($product->thumbnail_img !== 'images/products/default.gif'){
                $image = public_path($product->thumbnail_img);
                File::delete($image);
            }
            $image = $request->file('thumbnailimg');
            $image_name = time().'.'.$image->getClientOriginalName();
            $image = Image::make($image->getRealPath());
            $image->resize(212,271);
            $image->save(public_path('images/products/' . $image_name));
            $product->thumbnail_img = 'images/products/' . $image_name;
        }
        $product->save();

        if($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $image_name = time().'.'.$image->getClientOriginalName();
                $image = Image::make($image->getRealPath());
                $image->resize(212,271);
                $image->save(public_path('images/products/' . $image_name));
                $product_gallery = new ProductGallery();
                $product_gallery->product_id = $product->id;
                $product_gallery->image = 'images/products/' . $image_name;
                $product_gallery->save();
            }
        }
        if ($request->hasFile('catalogs')){
            foreach ($request->file('catalogs') as $catalog){
                $catalog_name = $catalog->getClientOriginalName();
                $catalog_path = Storage::disk('public')->putFileAs('catalogs',$catalog,$catalog_name);
                $new_catalog = new Catalog();
                $new_catalog->name = $catalog_name;
                $new_catalog->public = true;
                $new_catalog->catalog_file = $catalog_path;
                $new_catalog->product_id = $product->id;
                $new_catalog->catalog_code = 2;
                $new_catalog->save();
            }
        }
        ProductCategory::where('product_id',$id)->delete();
        $ID = $request->categories;
        $parent_ids = array();
        $parent_ids[] = $ID;
        while ($ID !== 0){
            $row = Category::find($ID);
            $parent_ids[] = $row->parent_id;
            $ID = $row->parent_id;
        }
        foreach ($parent_ids as $parent_id){
            $productcategory = new ProductCategory();
            $productcategory->product_id = $product->id;
            $productcategory->category_id = $parent_id;
            $productcategory->save();
        }


        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_images = ProductGallery::where('product_id',$id)->get();
        foreach ($product_images as $product_image){
            $image = public_path($product_image->image);
            File::delete($image);
        }
        $catalogs = Catalog::where('product_id',$id)->get();
        foreach ($catalogs as $catalog){
            $catalog_path = public_path($catalog->catalog_file);
            File::delete($catalog_path);
        }

        Product::where('id',$id)->delete();
        ProductGallery::where('product_id',$id)->delete();
        ProductCategory::where('product_id',$id)->delete();
        Catalog::where('product_id',$id)->delete();
        return redirect()->route('products.index');
    }
}
