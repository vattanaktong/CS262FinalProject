@extends('frontend.master')
@section('title', 'Home')
@include ('frontend.carousel');
<link rel="stylesheet" href="{{asset('css/card.css')}}">
@section('titlepage')
<title>Home</title>
@section('content')

    <!-- Monthly Popular -->
   

    <!-- Daily Popular -->
    <section id="dailypopular">
      <div class="daily-popular text-center">
        <div class="container">
          <h5>Best seller </h5>
          <br>
            <div class="row row-cols row-cols-md-2">
              @forelse ($allproducts as $products)
              <div class="col mb-4">
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
    <!--  -->

@endsection
