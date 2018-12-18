@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Products index</h1>
        <div class="card-deck">
            @foreach ($products as $product)
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/250x200.png" alt="Card image cap">
                    <div class="card-body">
                        <a href="/products/{{$product->id}}"><h2 class="card-title">{{ $product->name}}</h2></a>
                            <p class="card-text">{{ $product->description }}</p>
                            <h5 class="card-price">€ {{ $product->price }}</h5>
                        <form action="/cart/{{$product->id}}" method="POST">
                            @csrf
                            @method('POST')
                            <input class="btn btn-info btn-sm" type="submit" value="Add to cart">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $products->links() }}
@endsection