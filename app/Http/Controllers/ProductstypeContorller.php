<?php

namespace App\Http\Controllers;

use App\Models\Productstype;
use App\Models\products;
use Illuminate\Http\Request;
use Auth;
class ProductstypeContorller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productstype = Productstype::paginate(5);
        return view('backend.productstype.productstypeindex')->with(["productstype"=>$productstype]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.productstype.productstypecreate');
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
        Productstype::create($pro_arr);

        return redirect()->route('productstype.create')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productstype  $productstype
     * @return \Illuminate\Http\Response
     */
    public function detail($id, products $allproducts)
    {
        $productstype = Productstype::find($id);

        $allproducts = products::all();
        return view('backend.productstype.productstypedetail', ['productstype' => $productstype], ["allproducts"=>$allproducts] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productstype  $productstype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productstype = Productstype::find($id);
        return view('backend.productstype.productstypeedit')->with('productstype',$productstype);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productstype  $productstype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, Productstype $productstype)
    {
        $productstype = Productstype::find($id);

        $productstype->name = $request->input('name');
        $productstype->description = $request->input('description');
        $productstype->save();

        return redirect()->route('productstype.index')->with('updated', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productstype  $productstype
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $productstype = Productstype::find($id);
        $productstype->delete();

        return redirect()->route('productstype.index')->with('deleted', 'Product deleted successfully.');
    }
}
