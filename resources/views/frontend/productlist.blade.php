@extends('frontend.master')
@section('titlepage')
<title>catagories</title>
@section('title', 'Products List')
<link rel="stylesheet" href="{{asset('css/product-list.css')}}">
<div class="background">
    <img src="img/plant1.jpg" alt="">
    <div class="text-center header-text">
       
    </div>
</div>

<section id="product">
  <div class="container-fluid product-body">
      <div class="row">
        <div class="col-md-2">
          <div class="container">
            <p style="font-size: 36px;">Type of plant</p>
          <ul>
              @foreach ($allproductstype as $productstype)
                  <li><a href="{{ route('productscategory',$productstype->id) }}">{{$productstype->name}}</a></li>
              @endforeach
          </ul>
          </div>
        </div>
        <div class="row row-cols row-cols-md-7">
              @forelse ($allproducts as $products)
              <div class="col mb-7">
                <div class="card " id="daily-poular">
                  <img src="{{asset("images/".$products->img_url)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                  </div>
                </div>
              </div>
              @empty
                <h5 style="text-align: center">No Products yet</h5>
              @endforelse
            </div>
      </div>
    </div>  


</section>
