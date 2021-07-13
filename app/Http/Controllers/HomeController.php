<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\ProductsRecommend;
use App\Models\Productstype;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(products $products)
    {
        $allproducts = Products::paginate(3);
        return view('frontend.homepage',["allproducts"=>$allproducts]);
    }

    public function products(products $products, Productstype $productstype)
    {
        $allproductstype = Productstype::all();
        $allproducts = Products::all();
        return view('frontend.productlist',["allproducts"=>$allproducts],["allproductstype"=>$allproductstype]);
    }

    public function productsrecommend(ProductsRecommend $ProductsRecommend, products $products)
    {
        $allproducts = Products::all();
        $allProductsRecommend = ProductsRecommend::all();
        return view('frontend.productsrecommend',["allproducts"=>$allproducts],["allProductsRecommend"=>$allProductsRecommend]);
    }
    public function productdetail($id, products $products)
    {
        $products = Products::find($id);
        return view('frontend.productdetail', ['products' =>$products]);
    }
    public function dashboard()
    {
        $allproducts = Products::paginate(5);
        return view('backend.dashboard', ["allproducts"=>$allproducts]);
    }
    public function productscategory($id, products $products, Productstype $productstype)
    {
        $productstype = Productstype::find($id);
        $allproductstype = Productstype::all();
        $allproducts = products::all();
        return view('frontend.productcategory', ['productstype' => $productstype], ["allproducts"=>$allproducts],["allproductstype"=>$allproductstype] );
    }
    public function recommendcategory($id, products $products, ProductsRecommend $ProductsRecommend)
    {
        $ProductsRecommend = ProductsRecommend::find($id);
        $allProductsRecommend = ProductsRecommend::all();
        $allproducts = products::all();
        return view('frontend.recommendcategory', ['ProductsRecommend' => $ProductsRecommend], ["allproducts"=>$allproducts],["allProductsRecommend"=>$allProductsRecommend] );
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    public function viewcart()
    {
        return view('frontend.viewcart');
    }
    public function buynow()
    {
        return view('frontend.buynow');
    }
}
