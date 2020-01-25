@extends('layouts.master')
@section('content')

    
    <!-- product card stars here-->
    <div class="container">
        <div class="col-sm-6 offset-3">
            <div class="card" style="width:600px">
                <img class="card-img-top" src="{{ asset('images/products/' . $image->image) }}" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">{{$product->title}}</h4>
                  <p class="card-text">Price: {{$product->price}}</p>
                  <a href="" class="btn btn-success">Buy</a>
              </div>
            </div>
      </div>

  </div>
    <!-- product card ends here-->
@endsection
