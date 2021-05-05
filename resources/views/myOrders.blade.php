@extends('layouts.app')

@section('content')
    <!-- Confirmation Start -->
    <section id="confirmation" class="py-5">
        <div class="container">

            <div class="row d-flex justify-content-between">

                <div class="col-12">
                    <h2 class="fw-bold text-center text-lg-start border-start px-3">
                        Votre commande
                    </h2>
                </div>

                <div class="col-lg-12">

                    <div class="table w-100">
                        <div class="table-responsive">
                            <table class="table align-middle mt-5">
                                <thead class="bg-orange text-white">
                                <tr>
                                    <th scope="col">Produits</th>
                                    <th class="text-center" scope="col">Quantité</th>
                                    <th class="text-center" scope="col">Montant</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->products as $p)
                                <tr>
                                    <td>
                                        {{$p->name}}
                                    </td>
                                    <td class="text-center">
                                        {{$p->pivot->qty}}

                                    </td>
                                    <td class="text-center">
                                        @price($p->pivot->total) {{config('settings.currency_code')}}
                                    </td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td colspan="2">
                                        Total de votre commande<br>
                                        <span class="small text-muted">Sans frais de livraison</span>
                                    </td>
                                    <td class="text-center">@price($order->total_price) {{config('settings_currency_code')}}</td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row d-flex justify-content-between align-items-stretch mt-5">

                <div class="col-12">
                    <h2 class="fw-bold text-center text-lg-start border-start px-3">
                        Vos Informations
                    </h2>
                </div>

                <div class="col-lg-8 mt-5">

                    <div class="card bg-orange text-white border-0 shadow-sm py-4 px-lg-3 h-100">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-6 mb-3">
                                    <p class="small fw-bold mb-2">Nom et prénom</p>
                                    <p>{{$order->name}}</p>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <p class="small fw-bold mb-2">Numéro de téléphone</p>
                                    <p>{{$order->phone}}</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Adresse email</p>
                                    <p>{{$order->email}}</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Adresse De Livraison</p>
                                    <p>{{$order->address}}</p>
                                </div>

                                <div class="col-lg-12">
                                    <p class="small fw-bold mb-2">Ville</p>
                                    <p>{{$order->city}}</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 mt-3 mt-lg-5">

                    <div class="card bg-orange text-white border-0 shadow-sm py-4 px-lg-3 h-100">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Total De Votre Commande</p>
                                    <p>4800,00 DZD</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Frais De Livraison EMS</p>
                                    <p>1000,00 Dzd</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Total A Payer</p>
                                    <p>5800,00 DZD</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <a href="javascript:void(0)" class="btn bg-white text-orange shadow-sm d-block">Confirmer Ma Commande</a>
                                </div>

                                <div class="col-lg-12">
                                    <a href="cart.html" class="btn bg-white text-orange shadow-sm d-block">Modifier Mes Information</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- Confirmation End  -->
@endsection
