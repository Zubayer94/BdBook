@extends('layouts.master')
@section('content')

    
    <!-- product card stars here-->
    <div class="container margin">
        <div class="widget ">
            <h3>Product</h3>
            <div class="row">

                @foreach ($products as $product)
                    <div class="card col-md-2">
                        @foreach ($product->images as $image)

                        <img class="card-img-top" src="{{asset('images/products/' . $image->image)}}"  alt="Card image">

                        @endforeach

                        <div class="card-body">
                            <h4  class="card-title">
                            {{$product->title}}
                            </h4>
                            
                            <p class="card-text text-center">Price: 
                            {{$product->price}}
                            </p>
                            <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            <a href="{{ route('showproducts',[$product->id]) }}" class="btn btn-success">More</a>
                        </div>
                    </div>
                @endforeach
                
                
            </div>
        </div>
        
        
    </div>
    <!-- product card ends here-->
@endsection
