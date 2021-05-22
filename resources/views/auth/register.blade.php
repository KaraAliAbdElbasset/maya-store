@extends('layouts.app')

@section('content')

<section id="register" class="py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-sm border-0 bg-white py-5 px-0 px-lg-5">
                    <div class="card-body">
                        <form action="{{url('/register')}}" method="post" class="row" >
                            @csrf
                            <div class="col-12 text-center mb-5">
                                <img src="{{asset('assets/store/images/logo.svg')}}" alt="logo" width="80%">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text"
                                       class="form-control rounded-pill px-4 py-2 @error('name') is-invalid @enderror"
                                       placeholder="Nom et prénom" value="{{old('name')}}" name="name">
                                @error('password')
                                <small class="text-danger text-capitalize invalid-feedback"><i class="fas fa-exclamation-circle mr-2"></i>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text"
                                       class="form-control rounded-pill px-4 py-2 @error('email') is-invalid @enderror"
                                       placeholder="Adresse email"
                                       value="{{old('email')}}"
                                       name="email">
                                @error('email')
                                <small class="text-danger text-capitalize invalid-feedback"><i class="fas fa-exclamation-circle mr-2"></i>{{$message}}</small>
                                @enderror                            </div>
                            <div class="col-12 mb-3">
                                <input type="password"
                                       class="form-control rounded-pill px-4 py-2 @error('password') is-invalid @enderror"
                                       placeholder="Mot de passe"
                                       value="{{old('password')}}"
                                       name="password">
                                @error('password')
                                    <small class="text-danger text-capitalize invalid-feedback"><i class="fas fa-exclamation-circle mr-2"></i>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <input type="password" class="form-control rounded-pill px-4 py-2" placeholder="Confirmation du mot de passe" name="password_confirmation">
                                <small class="text-danger text-capitalize d-none"><i class="fas fa-exclamation-circle mr-2"></i>error message</small>
                            </div>
                            <div class="col-12 text-center my-4">
                                <button type="submit" class="btn bg-orange text-white rounded-pill px-4">
                                    S'inscrire
                                </button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
