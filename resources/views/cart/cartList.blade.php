@extends('layouts.master')

@section('content')

<div class="container custom-product">

    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Porducts</h4>
            <hr>
            <a href="orderNow" class="btn btn-success">Order Now</a>
            <br><br>
            @foreach ($products as $product)
                <div class="row searched-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{ $product->id }}">
                            <img src="{{ $product->image }}" alt="Los Angeles" class="trending-image">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div class="">
                            <h2>{{ $product->name }}</h2>
                            <h5>{{ $product->description }}</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removeCart/{{ $product->cart_id }}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
            @endforeach
            <a href="orderNow" class="btn btn-success">Order Now</a>
        </div>
    </div>

</div>

@endsection




