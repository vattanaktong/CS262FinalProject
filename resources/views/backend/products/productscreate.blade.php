@extends('adminlte::page')

@section('title', 'Create Products')

@section('content_header')
@stop

@section('content')
    <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>Create Products</h1>
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
            <form action={{route('products.store')}} method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title <span class="require"></label>
                    <input type="text" class="form-control" id="pname" name="name" />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    {{-- <textarea rows="5" class="form-control" id="pdesc" name="description" ></textarea> --}}
                    <textarea id="my-editor" name="description" class="form-control" id="pdesc"></textarea>
                </div>
                <div class="form-group">
                    <label for="region">Products Recommend</label>
                    <select class="form-control selectpicker" data-live-search="true" id="productsrecommend_id" name="productsrecommend_id" multiple>
                        @foreach ($ProductsRecommend as $region)
                        <option value="{{$region->id}}">{{$region->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group">
                    <label for="productstype">Products Type</label>
                    <select class="form-control selectpicker" data-live-search="true" id="productstype_id" name="productstype_id" multiple>
                        @foreach ($productstype as $protype)
                        <option value="{{$protype->id}}">{{$protype->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group">
                  <label for="pimg">Products Image</label>
                  <input type="file" class="form-control-file" name="img_url" id="pimage">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Create
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
    <script>
    $(document).ready(function(){
        $('.selectpicker').selectpicker();
    });
    </script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
      };
    </script>
    <script>
        CKEDITOR.replace('my-editor', options);
        </script>
@stop
