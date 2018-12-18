@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail page</h1>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/350x100.png" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{ $product->name}}</h2></a>
                    <h5 class="card-subtitle">{{ $product->category_name }}</h3>
                        <p class="card-text">{{ $product->description }}</p>
                        <h5 class="card-price">€ {{ $product->price }}</h5>
                        <form action="/cart/{{$product->id}}" method="POST">
                            @csrf
                            <input class="btn btn-info btn-sm" type="submit" value="Add to cart">
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection