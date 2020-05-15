@extends('layouts.app')

@section('content')
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Pizza
            </h1>
        </div>
    </div>
</section>
<div class="container">
    <div class="columns is-marginless is-centered">
        @foreach($foods as $food)
        <div class="column">
            <div class="box">
                <nav class="level">
                    <div class="level-item has-text-centered">
                        <div>
                            <figure class="image">
                                <img class="is-rounded" style="height: 256px; width: 256px;"
                                    src="/images/{{$food->image_url}}">
                            </figure>
                        </div>
                    </div>
                </nav>
                <strong><a href="pizza/{{ $food->id }}">{{$food->name}}</a></strong>
                <p>${{$food->price}}</p>
                <hr>
                <h2 class="has-text-weight-semibold">Quantity:</h2>
                <div class="select">
                    <select name="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection