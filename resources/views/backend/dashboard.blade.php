@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="container text-center">
        <h1>Dashboard</h1>
    </div>
    <br>

    <h2>Recently Products</h2>
    <table class="table table-bordered table-dark">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
        @foreach ($allproducts as $products)
        <tr>
            <td>{{$products->id}}</td>
            <td width="200px">
                <img src="{{asset("images/".$products->img_url)}}" alt="Image" class="img-responsive" width="100px">
            </td>
            <td>{{$products->name}}</td>
            {{-- <td>{{$products->description}}</td> --}}
            <td>{!!Str::limit($products->description, 300, ' (...)')!!}</td>
            <td width="100px">{{$products->created_at}}</td>
            <td width="300px">
                <a href="{{ route('products.detail',$products->id) }}" class="btn btn-info">Detail</a>
                <a href="{{ route('products.edit',$products->id) }}" class="btn btn-warning ">Edit</a>
                <a href="{{ route('products.delete',$products->id) }}" class="btn btn-danger ">Delete</a>
            </td>
        </tr>
    @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {!! $allproducts->links() !!}
    </div>
@endsection