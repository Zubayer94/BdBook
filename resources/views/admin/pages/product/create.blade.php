@extends('admin.layouts.master')

@section('libcss')
    <link rel="stylesheet" type="text/css" href="{{asset('admin_lib/')}}/assets/libs/quill/dist/quill.snow.css">
@endsection

@section('adminindex')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      
      <div class="card-header">
        Add product
      </div>

      @include('admin.partial.messages')

      <div class="card-body">

        <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title"  placeholder="Enter product title">
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea id="editor" name="description" rows="6" cols="60" class="form-control"  placeholder="Enter product description"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Enter product price">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Quantity</label>
            <input type="number" class="form-control" name="quantity" placeholder="Enter product quantity">
          </div>
          <div class="form-group">
            <label for="product_image">Add product image</label>

            <div class="row">
              <div class="col-md-4">
                <input type="file" class="form-control" name="pic[]" id="pic">
              </div>

              <div class="col-md-4">
                <input type="file" class="form-control" name="pic[]" id="pic">
              </div>

              <div class="col-md-4">
                <input type="file" class="form-control" name="pic[]" id="pic">
              </div>

              <div class="col-md-4">
                <input type="file" class="form-control" name="pic[]" id="pic">
              </div>

              <div class="col-md-4">
                <input type="file" class="form-control" name="pic[]" id="pic">
              </div>
            </div>

          </div>

          <button type="submit" class="btn btn-primary">Add Product</button>
        </form>

        

      </div>
    </div>
  </div>
</div>



@endsection

@section('libjs')
    <script src="{{asset('admin_lib/')}}/assets/libs/quill/dist/quill.min.js"></script>

    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
@endsection


