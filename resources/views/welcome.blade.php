@extends('layouts.app')

@push('css')
    <style>
        #carousel .item {
            min-height: 450px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-repeat: no-repeat !important;
            background-position: center !important;
            background-size: cover !important;
        }
        #carousel .item h1 {
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
@endpush

@section('content')

    <!-- Carousel Start -->
    <section id="carousel" class="pt-3 pt-lg-5 pb-5 px-3 px-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="owl-one owl-carousel owl-theme text-center">

                        <div class="item"
                             style="background: url('{{asset('assets/front/images/img1.jpg')}}');">
                            
                        </div>

                        <div class="item"
                             style="background: url('{{asset('assets/front/images/img2.jpg')}}');">
                            
                        </div>

                        <div class="item"
                             style="background: url('{{asset('assets/front/images/img3.jpeg')}}');">
                           
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Carousel End -->


    <!-- Categories Start -->
    <section id="categories" class="py-5">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Top catégories
            </h2>

            <div class="row mt-5">

                @foreach($categories as $cat)
                    <div class="col-lg-3 my-2 mt-lg-0 text-center">
                        <a href="{{route('shop',['category' => $cat->id])}}" class="text-decoration-none">
                            <div class="card category border-0" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{$cat->image_url}}');background-repeat: no-repeat;background-position: center; background-size: cover">
                                <div class="card-body text-white">
                                    <h3 class="font-weight-bold my-3">{{$cat->name}}</h3>
                                </div>
                                <div class="content card-body">
                                    {{$cat->description}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <div class="row mt-5 d-flex justify-content-center justify-content-lg-end">
                <div class="col-auto">
                    <a href="{{route('categories.index')}}" class="text-orange fw-bold text-decoration-underline text-capitalize">Voir tout</a>
                </div>
            </div>

        </div>
    </section>
    <!-- Categories End -->


    <!-- Latest Start -->
    <section id="latest" class="py-5 products">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Nos Nouveautés
            </h2>

            <div class="row mt-0 mt-lg-5">

                @foreach($l_products as $lp)
                    @include('layouts.partials.product_card',['p' => $lp])
                @endforeach

            </div>

            <div class="row mt-5 d-flex justify-content-center justify-content-lg-end">
                <div class="col-auto">
                    <a href="{{route('shop')}}" class="text-orange fw-bold text-decoration-underline text-capitalize">Voir tout</a>
                </div>
            </div>

        </div>
    </section>
    <!-- Latest End -->


    <!-- Popular Start -->
    <section id="popular" class="py-5 products">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Les plus demandés
            </h2>

            <div class="row mt-0 mt-lg-5">

                @foreach($top_products as $tp)
                    @include('layouts.partials.product_card',['p' => $tp])
                @endforeach


            </div>

            <div class="row mt-5 d-flex justify-content-center justify-content-lg-end">
                <div class="col-auto">
                    <a href="{{route('shop')}}" class="text-orange fw-bold text-decoration-underline text-capitalize">Voir tout</a>
                </div>
            </div>

        </div>
    </section>
    <!-- Popular End -->


    <!-- brand Start -->
    <section id="latest" class="py-5 products">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Nos partenaires
            </h2>

            <div class="row mt-0 mt-lg-5">
              <div class="owl-gallery owl-carousel owl-theme">

                  <div class="row d-flex justify-content-around">
                      <div class="col-3">
                          <img src="{{asset('assets/images/brands/hp-logo.svg')}}" alt="brand" class="img-fluid">
                      </div>
                      <div class="col-3">
                          <img src="{{asset('assets/images/brands/lenovo-logo.svg')}}" alt="brand" class="img-fluid">
                      </div>
                      <div class="col-3">
                          <img src="{{asset('assets/images/brands/epson-logo.svg')}}" alt="brand" class="img-fluid">
                      </div>
                      <div class="col-3">
                          <img src="{{asset('assets/images/brands/canon-logo.svg')}}" alt="brand" class="img-fluid">
                      </div>
                  </div>

                  <div class="row d-flex justify-content-around">
                      <div class="col-3">
                          <img src="{{asset('assets/images/brands/eaton-vector-logo.svg')}}" alt="brand" class="img-fluid">
                      </div>
                      <div class="col-3">
                          <img src="{{asset('assets/images/brands/apc-logo-vector.svg')}}" alt="brand" class="img-fluid">
                      </div>
                      <div class="col-3">
                          <img src="{{asset('assets/images/brands/kyocera-logo.svg')}}" alt="brand" class="img-fluid">
                      </div>
                  </div>

              </div>
            </div>

            <div class="row mt-5 d-flex justify-content-center justify-content-lg-end">
                <div class="col-auto">
                    <a href="#" class="text-orange fw-bold text-decoration-underline text-capitalize">Voir tout</a>
                </div>
            </div>

        </div>
    </section>
    <!-- brand End -->

@endsection
