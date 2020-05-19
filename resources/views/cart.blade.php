@extends('layouts.app')

@section('content')
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Cart
            </h1>
        </div>
    </div>
</section>
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column">
            <div class="box">
                <h4 class="is-size-4">Your food items</h4>
                   @if(Session::has('cart'))

                    
                        @foreach($products as $product)
                            <div class="p-2">
                                <strong>{{ $product['item']['name'] }}</strong>
                                <p>qty: {{ $product['qty'] }}</p>
    
                                <p>Price: {{ $product['price'] }}</p>
                            </div>
                        @endforeach

                        <p><span class="has-text-weight-bold">Total Price:</span> ${{Session::get('cart')->totalPrice}}</p>

                   @endif

                   <form action="{{ route('submitOrder') }}" method="post">
                    @csrf
                    <input type="submit" class="button is-primary"></input>
                   </form>
            </p>
            </div>
        </div>
    </div>
</div>
@endsection