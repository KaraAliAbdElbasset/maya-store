@extends('layouts.app')

@section('content')
    <!-- Confirmation Start -->
    <section id="confirmation" class="py-5">
        <div class="container">

            <div class="row d-flex justify-content-between">

                <div class="col-12">
                    <h2 class="fw-bold text-center text-lg-start border-start px-3">
                        Editer mon profil
                    </h2>
                </div>

                <div class="col-lg-12">

                    <form action="" method="post" class="row mt-5" id="edit-form">
                        @csrf
                        @method('PUT')
                        <div class="col-lg-4 mb-3">
                            <input type="text" name="name" class="form-control border-0 shadow-sm py-2 @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Nom et prénom">
                            @error('name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-lg-4 mb-3">
                            <input type="email" name="email" class="form-control border-0 shadow-sm py-2 @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Adresse email">
                            @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-lg-4 mb-3">
                            <input type="text" name="phone" class="form-control border-0 shadow-sm py-2 @error('phone') is-invalid @enderror" value="{{old('phone')}}" placeholder="Numéro de téléphone">
                            @error('phone')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-lg-8 mb-3">
                            <input type="text" name="address" class="form-control border-0 shadow-sm py-2 @error('address') is-invalid @enderror" value="{{old('address')}}" placeholder="Adresse">
                            @error('address')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-lg-4 mb-3">
                            <input type="text" name="city" class="form-control border-0 shadow-sm py-2 @error('city') is-invalid @enderror" value="{{old('city')}}" placeholder="Ville">
                            @error('city')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>


                        <div class="col-12 col-lg-auto">
                            <a href="javascript:void(0)" onclick="document.getElementById('edit-form').submit()" class="btn bg-orange text-white shadow-sm text-decoration-none px-5 mt-3 d-block">
                                Enregistrer
                            </a>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </section>
    <!-- Confirmation End  -->
@endsection
