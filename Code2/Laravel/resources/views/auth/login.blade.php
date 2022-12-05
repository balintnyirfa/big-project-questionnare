@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: rgba(137, 137, 137, 50%) !important; color: white; border-radius: 24px;">
                <p style="margin: 10px auto; text-transform: uppercase; font-size: 30px;">Bejelentkezés</p>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 mx-auto d-flex flex-column align-items-start">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail cím') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mx-auto d-flex flex-column align-items-start">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Jelszó') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 d-flex justify-content-center">
                            <div class="col-md-8 d-flex justify-content-center">
                                <button type="submit" style="background-color: rgba(137,137,137,50%); border-radius: 24px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
