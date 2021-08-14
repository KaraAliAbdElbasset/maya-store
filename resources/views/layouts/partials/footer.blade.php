<section id="footer" class="bg-orange text-white">
    <footer class="container">
        <div
            class="row py-5 d-flex justify-content-between text-center text-lg-start"
        >
            <div class="col-lg-3">
                <h4 class="text-uppercase mb-4">
                    <span class="fw-light">SARL</span>
                    <span class="fw-bold">CEC</span>
                </h4>
                <div class="mb-4">
                    @if(config('settings.social_facebook'))
                    <a href="{{config('settings.social_facebook')}}" class="text-decoration-none text-white">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    @endif
                        @if(config('settings.social_instagram'))
                            <a href="{{config('settings.social_instagram')}}" class="text-decoration-none text-white mx-4">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        @endif
                        @if(config('settings.social_twitter'))
                            <a href="{{config('settings.social_twitter')}}" class="text-decoration-none text-white mx-4">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                        @endif
                        @if(config('settings.social_linkedin'))
                            <a href="{{config('settings.social_linkedin')}}" class="text-decoration-none text-white mx-4">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        @endif
                        @if(config('settings.social_youtube'))
                            <a href="{{config('settings.social_youtube')}}" class="text-decoration-none text-white mx-4">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                        @endif
{{--                    <a href="#" class="text-decoration-none text-white"--}}
{{--                    ><i class="fab fa-pinterest fa-2x"></i--}}
{{--                        ></a>--}}
                </div>
                @if(config('settings.phone_1'))
                <p>
                    <i class="fas fa-phone-alt me-2"></i>
                    {{config('settings.phone_1')}}
                </p>
                @endif
                @if(config('settings.phone_2'))
                <p>
                    <i class="fas fa-phone-alt me-2"></i>
                    {{config('settings.phone_2')}}
                </p>
                @endif
                @if(config('settings.contact_email'))
                    <p class="text-lowercase">
                        <i class="fas fa-at me-2"></i>{{config('settings.contact_email')}}
                    </p>
                @endif
                @if(config('settings.address'))
                <p class="text-capitalize">
                    <i class="fas fa-map-marker-alt me-2"></i>{{config('settings.address')}}.
                </p>
                @endif
            </div>
            <div class="col-lg-3">
                <p class="text-uppercase fw-bold mb-4 mt-5 mt-lg-0">
                    Nos selections
                </p>
                @foreach($main_cats as $mc)
                <p>
                    <a href="{{route('shop',['category' => $mc->id])}}" class="text-decoration-none text-white">{{$mc->name}}</a>
                </p>
                @endforeach

            </div>
            <div class="col-lg-3">
                <p class="text-uppercase fw-bold mb-4 mt-5 mt-lg-0">Aide</p>
                <p><a href="#" class="text-decoration-none text-white">FAQ</a></p>
                <p>
                    <a href="{{asset('pdf/yalidine-tarif.pdf')}}" class="text-decoration-none text-white">Livraison</a>
                </p>
                <p>
                    <a href="#" class="text-decoration-none text-white"
                    >Politique de confidentialité
                    </a>
                </p>
                <p>
                    <a href="#" class="text-decoration-none text-white"
                    >Conditions d’utilisation</a
                    >
                </p>
                <p>
                    <a href="{{route('about')}}" class="text-decoration-none text-white">A propos</a>
                </p>
                <p>
                    <a href="{{route('contact')}}" class="text-decoration-none text-white">Contact</a>
                </p>
            </div>
        </div>
        <hr />
        <div class="row d-flex justify-content-center">
            <div class="col-auto text-center">
                <p>Copyright © 2021 - Tous les droits sont réservés.</p>
            </div>
        </div>
    </footer>
</section>
