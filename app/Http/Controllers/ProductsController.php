<?php

namespace App\Http\Controllers;


use App\Models\products;
use Illuminate\Http\Request;
use App\Models\ProductsRecommend;
use App\Models\Productstype;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allproducts = Products::paginate(5);
        return view('backend.products.productsindex')->with(["allproducts"=>$allproducts]);

    }

    /**
     * detail the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Productstype $productstype  ,ProductsRecommend $productsrecommend)
    {
        $productstype = Productstype::all();
        $productsrecommend = ProductsRecommend::all();
        return view('backend.products.productscreate', ['ProductsRecommend' => $productsrecommend], ['productstype' => $productstype] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'productsrecommend_id' => 'required',
            'productstype_id' => 'required',
            'img_url' => 'required',
        ]);

        $img = $request->file('img_url');
        $img_name = time().'.'.$img->extension();
        $request->file('img_url')->move(public_path('images'),$img_name);
        $request['user_id']=Auth::id();
        $pro_arr = $request->toArray();
        $pro_arr['img_url'] = $img_name;
        Products::create($pro_arr);

        return redirect()->route('products.create')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $products = Products::find($id);
        return view('backend.products.productdetail', ['products' =>$products]);
    }

    /**
     * detail the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);
        return view('backend.products.productsedit')->with('products',$products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, products $products)
    {
        $products = Products::find($id);

        $products->name = $request->input('name');
        $products->description = $request->input('description');

        if($request->hasfile('img_url')) {
            $img = $request->file('img_url');
            $extension = $img->getClientOriginalExtension();
            $img_name = time().'.'.$img->extension();
            $img->move(public_path('images'),$img_name);
            $products->img_url = $img;
            $products_arr = $request->toArray();
            $products_arr['img_url'] = $img_name;
            $products->update($products_arr);
        }
        $products->save();

        return redirect()->route('products.index')->with('updated', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $products = Products::find($id);
        $products->delete();

        return redirect()->route('products.index')->with('deleted', 'Product deleted successfully.');
    }
}
