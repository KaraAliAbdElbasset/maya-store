@extends('layouts.app')


@section('content')

    <!-- Cover Start -->
    <section id="cover" class="py-2 py-lg-5 px-2 px-lg-0">

        <div class="container cover">
            <div class="row d-flex justify-content-center text-center bg-black py-75">
                <div class="col-lg-5 my-5 py-5 px-5 text-white">
                    <h1 class="fw-bold">
                        Lorem ipsum dolor <span class="text-orange">sit amet</span>
                    </h1>
                    <p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore alias ipsum quisquam eum saepe voluptates beatae tempora itaque dolore, quo atque a, dicta explicabo aut nemo neque.</p>
                    <a href="#" class="btn bg-orange text-white px-5 shadow-sm">Decouvrir !</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Cover End -->


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
                            <div class="card category border-0" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{$cat->image_url}}');">
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
                    <a href="#" class="text-orange fw-bold text-decoration-underline text-capitalize">Voir tout</a>
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
                    <a href="#" class="text-orange fw-bold text-decoration-underline text-capitalize">Voir tout</a>
                </div>
            </div>

        </div>
    </section>
    <!-- Popular End -->


    <!-- brand Start -->
    <section id="latest" class="py-5 products">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Nos clients
            </h2>

            <div class="row mt-0 mt-lg-5">
                <div class="owl-carousel">
                    @foreach($brands as $b)
                        <div class="ratio ratio-16x9">
                            <img src="{{$b->image_url}}" alt="{{$b->name}}" title="{{$b->name}}" class="img-fluid">
                        </div>
                    @endforeach

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
