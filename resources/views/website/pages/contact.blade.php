@extends('layouts.app')


@section('content')

    <section id="contact" class="py-5">
        <div class="container">

            <div class="row text-center text-lg-start">
                <div class="col-lg-6">
                    <h1 class="fw-bold text-capitalize text-center text-lg-start">Contactez <span class="text-orange">Nous</span></h1>
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sapiente molestiae quod ipsum totam fugiat, neque eveniet cumque placeat reiciendis et cum odit adipisci aut perspiciatis fugit soluta voluptatibus rerum.</p>
                </div>
            </div>

            <div class="row d-flex justify-content-between align-items-center mt-5">

                <div class="col-12">
                    <h2 class="fw-bold text-center text-lg-start border-start px-3">
                        Informations de <span class="text-orange">contact</span>
                    </h2>
                </div>

                <div class="col-lg-6">

                    <form action="{{route('contact.send')}}" method="post" class="row mt-5" id="contact-form">
                        @csrf
                        <div class="col-lg-6 mb-3">
                            <input type="text" name="name" class="form-control border-0 shadow-sm py-2 @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Nom et prénom">
                            @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="email" name="email" class="form-control border-0 shadow-sm py-2 @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Adresse email">
                            @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-lg-12 mb-3">
                            <select name="subject" class="form-select border-0 shadow-sm py-2 @error('subject') is-invalid @enderror">
                                <option value="Sujet 1" {{old('subject') === 'Sujet 1' ? 'selected' : ''}}>Sujet 1</option>
                                <option value="Sujet 2" {{old('subject') === 'Sujet 2' ? 'selected' : ''}}>Sujet 2</option>
                                <option value="Sujet 3" {{old('subject') === 'Sujet 3' ? 'selected' : ''}}>Sujet 3</option>
                                <option value="Sujet 4" {{old('subject') === 'Sujet 4' ? 'selected' : ''}}>Sujet 4</option>
                            </select>
                            @error('subject')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-lg-12 mb-3">
                            <textarea name="message" rows="3" class="form-control border-0 shadow-sm py-2 @error('message') is-invalid @enderror" placeholder="Message" required>{{old('message')}}</textarea>
                            @error('message')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>@enderror
                        </div>

                        <div class="col-12 col-lg-auto">
                            <a href="javascript:void(0)" onclick="document.getElementById('contact-form').submit()" class="btn bg-orange text-white shadow-sm text-decoration-none px-5 mt-3 d-block">
                                Envoyer
                            </a>
                        </div>

                    </form>

                </div>

                <div class="col-lg-5 mt-5 mt-lg-0 text-center text-lg-start">
                    <p><i class="fas fa-map-marker-alt me-2 text-orange"></i>Constantine, Algérie.</p>
                    <p><i class="fas fa-phone-alt me-2 text-orange"></i>00 (213) xxx xx xx xx</p>
                    <p><i class="fas fa-at me-2 text-orange"></i>contact@sarl-cec.com</p>
                    <p><i class="fas fa-globe-africa me-2 text-orange"></i>https://www.sarl-cec.com</p>
                </div>

            </div>

            <div class="row d-flex justify-content-between align-items-center mt-5">

                <div class="col-12">
                    <h2 class="fw-bold text-center text-lg-start border-start px-3">
                        Ou nous <span class="text-orange">Trouver</span>
                    </h2>
                </div>

                <div class="col-lg-12 mt-5">

                    <a href="javascript:void(0)" class="text-decoration-none">
                        <img src="{{asset('assets/store/images/map.png')}}" alt="map" class="img-fluid">
                    </a>

                </div>

            </div>

        </div>
    </section>
@endsection
