@extends('layouts.app')

@section('content')


<section id="login" class="py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-sm border-0 bg-white py-5 px-0 px-lg-5">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}" class="row" id="mail-form">
                            @csrf
                            <div class="col-12 text-center mb-5">
                                <img src="{{asset('assets/store/images/logo.svg')}}" alt="logo" width="80%">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control rounded-pill px-4 py-2 @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Adresse email" name="email">
                                @error('email')
                                <small class="text-danger text-capitalize invalid-feedback"><i class="fas fa-exclamation-circle mr-2"></i>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-12 text-center my-4">
                                <a href="javascript:void(0)" onclick="document.getElementById('mail-form').submit()" class="btn bg-orange text-white rounded-pill px-4">
                                    Envoyer un mail
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
