@extends('adminlte::page')

@section('title', 'List All Regions')

@section('content_header')
@stop

@section('content')
    <h1>Recommend products</h1>
    @if(Session::has('updated'))
            <div class="alert alert-info">
              {{Session::get('updated')}}
            </div>
    @endif

    @if(Session::has('deleted'))
            <div class="alert alert-danger">
              {{Session::get('deleted')}}
            </div>
            @endif
    <table class="table table-bordered table-dark">
        <tr>
            <th>ID</th>
            <th>Region</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
        @foreach ($allproductsrecommend as $productsrecommend)
        <tr>
            <td>{{$productsrecommend->id}}</td>
            <td>{{$productsrecommend->name}}</td>
            <td>{!!Str::limit($productsrecommend->description, 300, ' (...)')!!}</td>
            <td width="100px">{{$productsrecommend->created_at}}</td>
            <td width="300px">
                <a href="{{ route('productsrecommend.detail',$productsrecommend->id) }}" class="btn btn-info ">Detail</a>
                <a href="{{ route('productsrecommend.edit',$productsrecommend->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('productsrecommend.delete',$productsrecommend->id) }}" class="btn btn-danger ">Delete</a>
            </td>
        </tr>
    @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {!! $allproductsrecommend->links() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
