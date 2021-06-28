@extends('layouts.app')


@section('content')

    <section id="contact" class="py-5">
        <div class="container">

            <div class="row text-center text-lg-start">
                <div class="col-lg-6">
                    <h1 class="fw-bold text-capitalize text-center text-lg-start">Contactez <span class="text-orange">Nous</span></h1>
                    <p class="mt-5">Nos clients sont ce qu’il y a de plus précieux à nos yeux et nous serions ravis de pouvoir vous assister.
Pour nous aider à toujours mieux répondre à vos attentes, n'hésitez pas à nous contacter.
</p>
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
                                <option value="Sujet 1" {{old('subject') === 'Sujet 1' ? 'selected' : ''}}>Renseignement</option>
                                <option value="Sujet 2" {{old('subject') === 'Sujet 2' ? 'selected' : ''}}>Devis</option>
                                <option value="Sujet 3" {{old('subject') === 'Sujet 3' ? 'selected' : ''}}>Information sur produit</option>
                                <option value="Sujet 4" {{old('subject') === 'Autre' ? 'selected' : ''}}>Autre</option>
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
                    <p><i class="fas fa-map-marker-alt me-2 text-orange"></i>15, Rue A, Cité Eak.25000 Constantine, Algérie.</p>
                    <p><i class="fas fa-phone-alt me-2 text-orange"></i>05.61.49.68.42</p>
                    <p><i class="fas fa-phone-alt me-2 text-orange"></i>05.61.83.62.84</p>
                    <p><i class="fas fa-at me-2 text-orange"></i>contact@sarl-cec.com</p>
                    <p><i class="fas fa-globe-africa me-2 text-orange"></i>https://www.sarl-cec.com</p>
                </div>

            </div>

            <div class="row d-flex justify-content-between align-items-center mt-5">

                <div class="col-12">
                    <h2 class="fw-bold text-center text-lg-start border-start px-3">
                        Ou nous <span class="text-orange">Trouver</span>
                    </h2>
                    <br><br>
                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1606.1752063937904!2d6.630168233574743!3d36.37651031983105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDIyJzM1LjQiTiA2wrAzNyc1MS4wIkU!5e0!3m2!1sen!2sus!4v1622972256663!5m2!1sen!2sus"></iframe><a href="https://www.fridaynightfunkin.net/">FNF PC</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>

        </div>
    </section>
@endsection
