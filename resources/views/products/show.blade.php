@extends('layouts.master')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-sm-8">
            <img src="{{ $product->image }}" alt="" class="show-product-img">
        </div>
        <div class="col-sm-4">
            <a href="/">Go Back</a>
            <h2>{{ $product->name }}</h2>
            <h3>Price : {{ $product->price }}</h3>
            <h4>Details : {{ $product->description }}</h4>
            <h4>Category : {{ $product->category }}</h4>
            <br><br>
            <form action="{{ route('addToCart') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button class="btn btn-success">Add to Cart</button>
            </form>
            <br>
            <button class="btn btn-primary">Buy Now</button>
            <br><br>
        </div>
    </div>

</div>

@endsection




