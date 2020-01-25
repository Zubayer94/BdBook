@extends('layouts.master')
@section('content')

    @include('partial.slider')
    <!-- product card stars here-->
    <div class="container margin">
        <div class="widget ">
            <h3>Featured product</h3>
            <div class="row">
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (1).gif')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">200 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (1).jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">200 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (2).gif')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">200 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (2).jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">200 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (3).jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">200 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (4).jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">200 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="widget margin">
            <h3>Featured product 2</h3>
            <div class="row">
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (5).jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">150 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (6).jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">150 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (7).jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">150 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (8).jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">150 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (9).jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">150 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
                <div class="card col-md-2">
                    <img class="card-img-top" src="{{asset('image\cart (10).jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">bookname</h4>
                        <p class="card-text text-center">150 tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product card ends here-->
@endsection
