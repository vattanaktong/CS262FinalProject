<?php

namespace App\Http\Controllers;

use App\Models\ProductsRecommend;
use Illuminate\Http\Request;
use App\Models\products;
use Auth;

class ProductsRecommendController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allproductsrecommend = ProductsRecommend::paginate(5);
        return view('backend.productsrecommend.productsrecommendindex')->with(["allproductsrecommend"=>$allproductsrecommend]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.productsrecommend.productsrecommendcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id']=Auth::id();
        $pro_arr = $request->toArray();
        ProductsRecommend::create($pro_arr);

        return redirect()->route('productsrecommend.create')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductsRecommend  $ProductsRecommend
     * @return \Illuminate\Http\Response
     */
    public function detail($id, products $allproducts)
    {
        $ProductsRecommend = ProductsRecommend::find($id);

        $allproducts = products::all();
        return view('backend.productsrecommend.productsrecommenddetail', ['ProductsRecommend' => $ProductsRecommend], ["allproducts"=>$allproducts] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductsRecommend  $ProductsRecommend
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ProductsRecommend = ProductsRecommend::find($id);
        return view('backend.productsrecommend.productsrecommendedit')->with('productsrecommend',$ProductsRecommend);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productsrecommend  $productsrecommend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, productsrecommend $productsrecommend)
    {
        $productsrecommend = productsrecommend::find($id);

        $productsrecommend->name = $request->input('name');
        $productsrecommend->description = $request->input('description');
        $productsrecommend->save();

        return redirect()->route('productsrecommend.index')->with('updated', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productsrecommend  $productsrecommend
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $productsrecommend = productsrecommend::find($id);
        $productsrecommend->delete();

        return redirect()->route('productsrecommend.index')->with('deleted', 'Product deleted successfully.');
    }
}
