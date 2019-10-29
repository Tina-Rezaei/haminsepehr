<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Category;

Route::get('/', function () {
    $categories = Category::attr(['name' => 'categories'])
            ->selected(2)
            ->renderAsDropdown();
    return $categories;

});

Route::get('tt','test@index');

Route::resource('projects','ProjectController');
Route::resource('products','AdminControllers\ProductController');
Route::resource('categories','AdminControllers\CategoryController')->except(['create']);;
Route::get('categories/create/{id}','AdminControllers\CategoryController@create')->name('categories.create');
Route::get('/loginpage',function (){
   return view('UserViews.Singleproduct');
});


//users routes
Route::get('/','UserControllers\HomeController@index')->name('/');
Route::get('singleproduct','UserControllers\SingleproductController@index')->name('singleproduct');