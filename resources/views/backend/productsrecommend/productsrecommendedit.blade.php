@extends('adminlte::page')

@section('title', 'Edit Regions')

@section('content_header')
@stop

@section('content')
    <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>Edit Products by region</h1>
            @if(Session::has('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
            @endif
            @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <form action="{{ route('productsregion.update',$productsregion->id) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}

                <input type="hidden" name="id" id="id" value="{{$productsregion->id}}">
                <div class="form-group">
                    <label for="title">Title <span class="require"></label>
                    <input type="text" class="form-control" id="pname" name="name" value="{{$productsregion->name}}"/>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control" id="pdesc" name="description">{{$productsregion->description}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                    <button class="btn btn-default">
                        Cancel
                    </button>
                </div>

            </form>
        </div>

      </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
