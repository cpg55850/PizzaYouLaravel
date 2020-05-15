@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
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

                <h1 class="is-size-2 has-text-weight-semibold">{{$food->name}}</h1>
                <h2>${{$food->price}}</h2>
                <h2></h2>
            </div>
        </div>
    </div>
</div>
@endsection