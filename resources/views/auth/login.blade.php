@extends('layouts.app')

@section('content')
<div class="habit-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="container_title">{{ __('Login') }}</div>
                {!! Form::open(['route' => 'login']) !!}
                    {!! Form::hidden('email', 'Banjo@gmai.com') !!}
                    {!! Form::hidden('password', 'banjobanjo') !!}
                    {!! Form::button('ゲストログイン', ['class' => 'btn btn-guest margin-top50', 'type' => 'submit']) !!}
                {!! Form::close() !!}
                <div class="card-body margin-top50">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6 margin-top10">
                                <input id="email" type="email" class="form-control input-area @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row margin-top30">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6 margin-top10">
                                <input id="password" type="password" class="form-control input-area @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row margin-top30">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0  margin-top10">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-add btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-forget btn-link margin-top10" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
