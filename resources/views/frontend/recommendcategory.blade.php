@extends('frontend.master')
@section('titlepage')
<title>Product Recommend</title>
@section('title', 'Products by Region')
<link rel="stylesheet" href="{{asset('css/product-list.css')}}">
<div class="background">
    <img src="img/3.jpg" alt="">
    <div class="text-center">
        <p>Product Recommend</p>
    </div>
</div>
<section id="product">
    <div class="container-fluid product-body">
        <div class="row">
              <div class="container">
                <h1 style="text-align: center">{{$ProductsRecommend->name}}</h1>
                <br>
                <div class="card-deck">
                  @foreach ($allproducts as $products)
                  @if ($products->productsrecommend_id == $ProductsRecommend->id)
                  <div class="col mb-4">
                    <div class="card mx-auto">
                      <img src="{{asset("images/".$products->img_url)}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                      </div>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
                <div class="back">
                  <a href="{{ route('productsrecommend') }}">◀ Back</a>
                </div>
              </div>

        </div>
      </div>
</section>