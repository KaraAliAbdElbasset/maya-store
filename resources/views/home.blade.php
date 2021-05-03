@extends('layouts.app')

@section('content')
    <!-- Profile Start -->
    <section id="profile" class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 text-center">
                    <div class="card shadow-sm border-0 bg-white px-0 px-lg-5">
                        <div class="card-body">

                            <h4 class="my-3">Bienvenue, <span class="fw-bold">{{auth()->user()->name}}</span> !</h4>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-4 text-center text-lg-start">
                    <div class="card shadow-sm border-0 bg-white py-5 px-0 px-lg-5">
                        <div class="card-body">

                            <h4 class="fw-bold">Mes Commandes</h4>

                            <hr class="my-5">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-orange text-white">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Montant</th>
                                        <th class="text-center">État</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="text-center">1</th>
                                        <td class="text-center">28-02-2021</td>
                                        <td class="text-center">7500.00 DZD</td>
                                        <td class="text-center text-success">Livré</td>
                                        <td class="text-center"><a href="#" class="text-decoration-none text-black"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">2</th>
                                        <td class="text-center">31-03-2021</td>
                                        <td class="text-center">15000.00 DZD</td>
                                        <td class="text-center text-warning">En cours de livraison</td>
                                        <td class="text-center"><a href="#" class="text-decoration-none text-black"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-center text-lg-start mt-4">
                    <div class="card shadow-sm border-0 bg-white py-5 px-0 px-lg-5">
                        <div class="card-body">

                            <h4 class="fw-bold">Mes Informations</h4>

                            <hr class="my-5">

                            <div class="row">

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Nom et prénom</p>
                                    <p>{{auth()->user()->name}}</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Numéro de téléphone</p>
                                    <p>{{auth()->user()->phone ?? "/"}}</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Adresse email</p>
                                    <p>{{auth()->user()->email}}</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Adresse De Livraison</p>
                                    <p>{{auth()->user()->address}}</p>
                                </div>

                                <div class="col-lg-12">
                                    <p class="small fw-bold mb-2">Ville</p>
                                    <p>{{auth()->user()->city}}</p>
                                </div>

                            </div>

                            <hr class="mb-5">

                            <p class="text-center mb-0"><a href="#" class="text-decoration-underline text-black">Modifier</a></p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Profile End -->
@endsection
