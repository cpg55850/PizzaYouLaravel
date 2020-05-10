@extends('layouts.app')

@section('content')
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Login
            </h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="box">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field">
                    <label class="label">Email</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input @error('email') is-danger @enderror" type="email" name="email"
                            placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <label class="label">Password</label>
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Password" name="password">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}</a>
                        </label>
                    </div>
                </div>
                <div class="field">
                    <p class="control">
                        <button type="submit" class="button is-primary">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                        <button class="button btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </button>
                        @endif
                    </p>
                </div>
            </form>
        </div>

    </div>
</section>
@endsection