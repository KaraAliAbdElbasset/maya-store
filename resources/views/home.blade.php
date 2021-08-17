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
                                    @forelse($orders as $o)
                                        <tr>
                                            <th class="text-center">{{$o->id}}</th>
                                            <td class="text-center">{{$o->created_at->format('d-m-Y')}}</td>
                                            <td class="text-center">@price($o->total_price) {{config('settings.currency_code')}}</td>
                                            @switch($o->state)
                                                @case('validated')
                                                <td class="text-center text-success">Livré</td>
                                                @break

                                                @case('pending')
                                                <td class="text-center text-warning">En cours de livraison</td>
                                                @break

                                                @case('canceled')
                                                <td class="text-center text-warning">Annulé</td>
                                                @break
                                            @endswitch
                                            <td class="text-center d-flex">
                                                <a href="{{route('home.order',$o->id)}}" class="text-decoration-none text-black mx-2"><i class="fas fa-eye"></i></a>
                                                @if($o->state === 'pending')
                                                    <a href="javascript:void(0)" onclick="deleteForm('{{route('home.order.delete',$o->id)}}')" class="text-decoration-none text-black"><i class="fas fa-trash"></i></a>

                                                @endif
                                            </td>

                                        </tr>

                                    @empty
                                        <tr>
                                            <th colspan="5" class="text-center">Vous n'avez pas encore de commande</th>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center">
                                {{$orders->links()}}
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
                                    <p>{{auth()->user()->phone ?? "empty"}}</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Adresse email</p>
                                    <p>{{auth()->user()->email}}</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <p class="small fw-bold mb-2">Adresse De Livraison</p>
                                    <p>{{auth()->user()->address ?? 'empty'}}</p>
                                </div>

                                <div class="col-lg-12">
                                    <p class="small fw-bold mb-2">Ville</p>
                                    <p>{{auth()->user()->city ?? 'empty'}}</p>
                                </div>

                            </div>

                            <hr class="mb-5">

                            <p class="text-center mb-0"><a href="{{route('profile.edit')}}" class="text-decoration-underline text-black">Modifier</a></p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Profile End -->
    <div
        class="modal fade"
        id="payment-message-modal"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-orange text-white">
                    <h5 class="modal-title" id="staticBackdropLabel">Produit ajouté avec succes</h5>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-check-circle text-success fa-6x"></i>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{route('cart.index')}}" class="btn bg-orange text-white w-100">Aller au panier</a>
                    <button
                        type="button"
                        class="btn border border-dark text-orange w-100"
                        data-bs-dismiss="modal">
                        Continuer mes achats
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('js')
    <script>

        const deleteForm = url => {
            console.log(url)
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                if (result.value) {
                    createForm(url).submit();
                }
            });
        }
        const createForm = url => {
            let f = document.createElement("form");
            f.setAttribute('method',"post");
            f.setAttribute('action',`${url}`);

            let i1 = document.createElement("input"); //input element, text
            i1.setAttribute('type',"hidden");
            i1.setAttribute('name','_token');
            i1.setAttribute('value','{{csrf_token()}}');

            let i2 = document.createElement("input"); //input element, text
            i2.setAttribute('type',"hidden");
            i2.setAttribute('name','_method');
            i2.setAttribute('value','DELETE');

            f.appendChild(i1);
            f.appendChild(i2);
            document.body.appendChild(f);
            return f;
        }
    </script>

@endpush
