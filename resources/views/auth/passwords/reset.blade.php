@extends('layouts.app')

@section('content')

<section id="reset" class="py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-sm border-0 bg-white py-5 px-0 px-lg-5">
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}" class="row" id="login-form">
                            @csrf
                            <div class="col-12 text-center mb-5">
                                <img src="{{asset('assets/store/images/logo.svg')}}" alt="logo" width="80%">
                            </div>
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control rounded-pill px-4 py-2 @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" placeholder="Adresse email" name="email">
                                @error('email')
                                <small class="text-danger text-capitalize invalid-feedback"><i class="fas fa-exclamation-circle mr-2"></i>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <input type="password" class="form-control rounded-pill px-4 py-2 @error('email') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="new-password">
                                @error('password')
                                <small class="text-danger text-capitalize invalid-feedback"><i class="fas fa-exclamation-circle mr-2"></i>{{$message}}</small>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <input type="password" class="form-control rounded-pill px-4 py-2 " placeholder="Confirmation du mot de passe" name="password_confirmation" required autocomplete="new-password">

                            </div>
                            <div class="col-12 text-center my-4">
                                <a href="javascript:void(0)" onclick="document.getElementById('login-form').submit()" class="btn bg-orange text-white rounded-pill px-4">
                                    {{ __('Réinitialiser le mot de passe') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
