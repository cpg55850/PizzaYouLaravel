@extends('layouts.app')

@section('content')
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                @if(Auth::user())
                {{Auth::user()->name}}'s Profile
                @else
                You are not logged in.
                @endif
            </h1>
        </div>
    </div>
</section>
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column">
            <div class="box">
                <h4 class="is-size-4">Orders</h4>
                @foreach($orders as $order)
                    {{$order}}
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection