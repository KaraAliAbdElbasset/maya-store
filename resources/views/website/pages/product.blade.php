@extends('layouts.app')


@section('content')
    <!-- Product Start -->
    <section id="product" class="py-5">

        <div class="container">

            <div class="row d-flex justify-content-between">

                <div class="col-lg-5">
                    <img src="{{$p->image_url}}" alt="product" class="w-100">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <h2>{{$p->name}}</h2>
                    <h5 class="text-muted mt-5">{{implode(',',$p->categories->pluck('name')->all())}}</h5>
                    <div class="h5">
                        <span class="fw-bold text-orange me-3">@price($p->price) {{config('settings.currency_code')}}</span>
                        @if($p->old_price)
                            <span class="text-muted text-decoration-line-through me-4">@price($p->old_price) {{config('settings.currency_code')}}</span>
                        @endif
                        @if($p->discount)
                            <span class="badge bg-orange text-light fw-light">-{{$p->discount}}%</span>
                        @endif
                    </div>
                    <a href="javascript:void(0)" onclick="document.getElementById('cart-form-add').submit()" class="btn bg-orange text-light text-decoration-none px-5 mt-3">
                        Ajouter au panier<i class="fas fa-shopping-bag ms-2"></i>
                    </a>
                    <form action="{{route('cart.store',$p->id)}}" method="post" id="cart-form-add">
                        @csrf
                        <div class="product_count">
                            <input
                                type="hidden"
                                name="qty"
                                id="sst"
                                value="1"
                                title="Quantity:"
                                class="input-text qty"
                            />
                        </div>

                    </form>

                    <hr class="text-muted my-5">
                    <label class="fw-bold">Déscription</label>
                    <p class="mt-3">{!! $p->description !!}</p>
            
                </div>

            </div>
            <br><br>
            @if($p->meta)
                   <thead class="bg-orange text-white">
                          	<h2  class="bg-orange text-white text-center" >Fiche technique</h2>
                          </thead >
                        <table class="table">
                         
                            @foreach($p->meta as $m)
                                <tr>
                                <td> {{$m['name']}}</td>  <td>{{$m['value']}}</td>
                                    </tr>
                            @endforeach
                           
                              </table>
                       
                    @endif
        </div>
        
    </section>
    <!-- Product End -->


    <!-- Recommendations Start -->
    <section id="recommendations" class="py-5 products">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Nos Recommendations
            </h2>

            <div class="row mt-0 mt-lg-5">

                @foreach($product as $b_prod)
                    @include('layouts.partials.product_card',['p' => $b_prod])
                @endforeach

            </div>

            <div class="row mt-5 d-flex justify-content-center justify-content-lg-end">
                <div class="col-auto">
                    <a href="{{route('shop')}}" class="text-orange fw-bold text-decoration-underline text-capitalize">Voir tout</a>
                </div>
            </div>

        </div>
    </section>
    <!-- Recommendations End -->


    <!-- Newsletter Start -->
    <section id="newsletter" class="py-5">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Ne ratez plus rien
            </h2>

            <div
                class="row mt-5 bg-orange py-5 text-center d-flex justify-content-center rounded text-light"
            >
                <div class="col-12">
                    <h2 class="fw-bold text-capitalize">
                        Restez branchés
                    </h2>
                    <p class="my-4">
                        Abonnez vous a notre news letter et ne ratez plus nos promotions et réductions
                    </p>
                </div>
                <form action="{{route('newsletter.store')}}" method="post" id="news-letter-form">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 pe-lg-1">
                            <input
                                type="text"
                                name="email"
                                placeholder="Votre Adresse Email"
                                class="form-control rounded-0"
                            />
                        </div>
                        <div class="col-lg-2 ps-lg-1 mt-2 mt-lg-0">
                            <a
                                href="javascript:void(0)" onclick="document.getElementById('news-letter-form').submit()"
                                class="text-decoration-none btn bg-white text-orange rounded text-capitalize d-block shadow-sm"
                            >S'abonner</a
                            >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->


    <!-- Why Us Start -->
    <section id="why-us" class="py-5">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Pourquoi nous choisir ?
            </h2>

            <div  class="row py-5 text-center d-flex justify-content-center rounded">
                <div class="col-lg-4 mt-0 mt-3">
                    <div class="card bg-orange text-light py-5 border-0 shadow-sm rounded">
                        <div class="card-body">
                            <i class="fas fa-shipping-fast fa-3x"></i>
                            <p class="mb-0 mt-4">Livraison Rapide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-0 mt-3">
                    <div class="card bg-orange text-light py-5 border-0 shadow-sm rounded">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt fa-3x"></i>
                            <p class="mb-0 mt-4">Livraison Rapide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-0 mt-3">
                    <div class="card bg-orange text-light py-5 border-0 shadow-sm rounded">
                        <div class="card-body">
                            <i class="fas fa-smile fa-3x"></i>
                            <p class="mb-0 mt-4">Service aprés vente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Us End -->
@endsection
