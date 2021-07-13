@extends('frontend.master')
@section('titlepage')
<title>{{$products->name}} Rokkhas</title>
@section('title', 'Products Detail')
<link rel="stylesheet" href="{{asset('css/product-detail.css')}}">


<!-- Background -->
<!-- <div class="background">
    <img src="{{asset("images/".$products->img_url)}}" alt="">
    <div class="text-center">
        <p>{{$products->name}}</p>
    </div> -->
</div> -->


<section id="productdetail">
    <div class="wrap-dt">
        <img class="img-dt" src="{{asset("images/".$products->img_url)}}" alt="">
        <div class="card-body">
            <h5 class="card-title">
                <p>{{$products->name}}</p>
            </h5>
            <p class="card-text">{!!$products->description!!}</p>
            
            <button type="button" class="btn btn-primary btn-md mr-1 mb-2">  <a class="btn btn-update" href="buynow.php">Buy Now</a></button>
            <button type="button" class="btn btn-light btn-md mr-1 mb-2"> <a class="btn btn-update" href="#">Add to cart</a></button>
        </div>

    </div>
</section>
< <br />

</div>
</div>
</section>