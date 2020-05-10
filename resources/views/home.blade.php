@extends('layouts.app')

@section('content')
<div class="container">
    <section class="section">
        <div>Dashboard</div>
        @if (session('status'))
        {{ session('status') }}
        @endif

        You are logged in!
    </section>
</div>
@endsection