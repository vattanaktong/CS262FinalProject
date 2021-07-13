@extends('adminlte::page')

@section('title', 'List all Products Type')

@section('content_header')
@stop

@section('content')
    <h1>Products By Type Posts</h1>
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
            <th>Type</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
        @foreach ($productstype as $protype)
        <tr>
            <td>{{$protype->id}}</td>
            <td>{{$protype->name}}</td>
            <td>{!!Str::limit($protype->description, 300, ' (...)')!!}</td>
            <td width="100px">{{$protype->created_at}}</td>
            <td width="300px">
                <a href="{{ route('productstype.detail',$protype->id) }}" class="btn btn-info">Detail</a>
                <a href="{{ route('productstype.edit',$protype->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('productstype.delete',$protype->id) }}" class="btn btn-danger ">Delete</a>
            </td>
        </tr>
    @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {!! $productstype->links() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
