@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column is-6">
            <div class="box">
            <form action="#" id="checkout-form" method="post">
                    @csrf
                <h1 class="has-text-weight-bold is-size-3">Checkout</h1>
                <h4>Your Total: ${{ $total }}</h4>
                <div class="field">
                    <label class="name">Name</label>
                    <div class="control">
                      <input id="name" class="input" type="text" required>
                    </div>
                  </div>
                  
                  <div class="field">
                    <label class="address">Address</label>
                    <div class="control">
                      <input id="address" class="input" type="text" required>
                    </div>
                  </div>

                  <div class="field">
                    <label class="card-name">Card Holder Name</label>
                    <div class="control">
                      <input id="card-name" class="input" type="text" required>
                    </div>
                  </div>

                  <div class="field">
                    <label class="card-number">Credit Card Number</label>
                    <div class="control">
                      <input id="card-number" class="input" type="text" required>
                    </div>
                  </div>
                  
                  <div class="field">
                    <label class="card-expiry-month">Expiration Month</label>
                    <div class="control">
                      <input id="card-expiry-month" class="input" type="text" required>
                    </div>
                  </div>

                  <div class="field">
                    <label class="card-expiry-year">Expiration year</label>
                    <div class="control">
                      <input id="card-expiry-year" class="input" type="text" required>
                    </div>
                  </div>

                  <div class="field">
                    <label class="card-cvc">CVC</label>
                    <div class="control">
                      <input id="card-cvc" class="input" type="text" required>
                    </div>
                  </div>
                  
                  <button type="submit" class="button is-link">Buy now</button>
            </div>
            
            {{-- <form action="{{ route('execute_checkout') }}"></form> --}}
            </div>

        </form>
    </div>
</div>
@endsection