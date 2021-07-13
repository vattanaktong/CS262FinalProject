<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsRecommendController;
use App\Http\Controllers\ProductstypeContorller;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\EquipmentProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewcartController;
Auth::routes();
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
//Frontend

//Navbar
    Route::get('/',[HomeController::class, 'home'])->name('home');
    Route::get('/products',[HomeController::class, 'products'])->name('products');
    Route::get('/productscategory{id}',[HomeController::class, 'productscategory'])->name('productscategory');
    Route::get('/recommendcategory{id}',[HomeController::class, 'recommendcategory'])->name('recommendcategory');
    Route::get('/productsrecommend',[HomeController::class, 'productsrecommend'])->name('productsrecommend');
    Route::get('/productsdetail-{id}',[HomeController::class, 'productdetail'])->name('productdetail');
    Route::get('/aboutus',[HomeController::class, 'aboutus'])->name('aboutus');
    Route::get('/viewcart',[HomeController::class, 'viewcart'])->name('viewcart');
    // Route::get('/buynow',[HomeController::class, 'buynow'])->name('buynow');
    
//
    
//
//buyProducts
// Route:: 
//Backend

//Dashboard
    Route::middleware('auth')->get('/home',[HomeController::class, 'dashboard'])->name('dashboard');
//

//Products
Route::middleware('auth')->prefix('/products')->group(function(){
    Route::get('/index',[ProductsController::class,'index'])->name('products.index');
    Route::get('/create',[ProductsController::class,'create'])->name('products.create');
    Route::post('/store',[ProductsController::class,'store'])->name('products.store');
    Route::get('/detail/{id}',[ProductsController::class,'detail'])->name('products.detail');
    Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('products.edit');
    Route::put('/update/{id}',[ProductsController::class,'update'])->name('products.update');
    Route::get('/delete/{id}',[ProductsController::class,'delete'])->name('products.delete');
});
//

//ProductsRecommend
Route::middleware('auth')->prefix('/productsrecommend')->group(function(){
    Route::get('/index',[ProductsRecommendController::class,'index'])->name('productsrecommend.index');
    Route::get('/create',[ProductsRecommendController::class,'create'])->name('productsrecommend.create');
    Route::post('/store',[ProductsRecommendController::class,'store'])->name('productsrecommend.store');
    Route::get('/detail/{id}',[ProductsRecommendController::class,'detail'])->name('productsrecommend.detail');
    Route::get('/edit/{id}',[ProductsRecommendController::class,'edit'])->name('productsrecommend.edit');
    Route::put('/update/{id}',[ProductsRecommendController::class,'update'])->name('productsrecommend.update');
    Route::get('/delete/{id}',[ProductsRecommendController::class,'delete'])->name('productsrecommend.delete');
});

//Productstype
Route::middleware('auth')->prefix('/productstype')->group(function(){
    Route::get('/index',[ProductstypeContorller::class,'index'])->name('productstype.index');
    Route::get('/create',[ProductstypeContorller::class,'create'])->name('productstype.create');
    Route::post('/store',[ProductstypeContorller::class,'store'])->name('productstype.store');
    Route::get('/detail/{id}',[ProductstypeContorller::class,'detail'])->name('productstype.detail');
    Route::get('/edit/{id}',[ProductstypeContorller::class,'edit'])->name('productstype.edit');
    Route::put('/update/{id}',[ProductstypeContorller::class,'update'])->name('productstype.update');
    Route::get('/delete/{id}',[ProductstypeContorller::class,'delete'])->name('productstype.delete');
});

// //shopping cart
// Route::get ('/',function(){
//     return view('shop/index');
// });

//Laravel File Manager & CKEditor
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
