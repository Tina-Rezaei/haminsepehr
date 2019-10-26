<?php

namespace App\Http\Controllers\AdminControllers;

use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\Redirect;
use mysql_xdevapi\Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        $categories->map(function ($category){
            $ID = $category->id;
            $row = Category::find($ID);
            $ID = $row->parent_id;
            $categories = [];
            while ($ID !== 0) {
                $row = Category::find($ID);
                $categories[] = $row->name;
                $ID = $row->parent_id;
            }

            $category['parent_name'] =  implode(' -> ', array_reverse($categories));
            return $category;
        });
        return view('AdminViews.Categories.ShowCategory')->with(['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $categories = Category::attr(['name' => 'categories'])
            ->selected($id)
            ->renderAsDropdown();
        return view('AdminViews.Categories.AddCategory')->with(['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->category_name;
        $category->parent_id = $request->categories;
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::attr(['name' => 'categories'])
            ->selected($category->parent_id)
            ->renderAsDropdown();
        $category = Category::find($id);
        return view('AdminViews.Categories.EditCategory')->with(['category'=>$category,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->categories == $id){
            return Redirect::back()->withErrors('دسته بندی پدر نامعتبر است');
        }
        $category = Category::find($id);
        $category->name = $request->category_name;
        $category->parent_id = $request->categories;
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where('parent_id',$id)->get();
        $product = ProductCategory::where('category_id',$id)->get();
        if(count($category) || count($product)){
            return Redirect::back()->withErrors('دسته بندی شامل محصول یا دسته بندی های دیگری است');
        }
        Category::where('id',$id)->delete();
        return redirect()->route('categories.index');

//        $IDs = array();
//        $IDs[] = $id;
//        Category::where('id',$id)->delete();
//        while (!(empty($IDs))){
//            $childs = Category::parent((int)$IDs[0])->renderAsArray();
//            array_shift($IDs);
//            foreach ($childs as $child){
//                $IDs[] = $child['id'];
//                Category::where('id',$child['id'])->delete();
//            }
//        }
//        return redirect()->route('categories.index');
    }
}
