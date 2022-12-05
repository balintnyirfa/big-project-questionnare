@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: rgba(137, 137, 137, 50%) !important; color: white; border-radius: 24px;">
                <p style="margin: 10px auto; text-transform: uppercase; font-size: 30px;">Regisztráció</p>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 mx-auto d-flex flex-column align-items-start">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Név') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mx-auto d-flex flex-column align-items-start">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mx-auto d-flex flex-column align-items-start">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Jelszó megerősítése') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="d-flex justify-content-around"></div>
                            <h6>Milyen szerepben szeretnél regisztrálni?</h6>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="userTyp" value="isAsker" id="AskerRadio">
                            <label class="form-check-label" for="AskerRadio">
                              Kérdező
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="userTyp" value="isAnswerer" id="AnswerRadio">
                            <label class="form-check-label" for="AnswerRadio">
                              Válaszoló
                            </label>
                          </div>
                        </div>
                        <div class="row mb-0 d-flex justify-content-center">
                            <div class="col-md-8 d-flex justify-content-center">
                                <button type="submit"  style="background-color: rgba(137,137,137,50%); border-radius: 24px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;">
                                    {{ __('Regisztráció') }}
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
