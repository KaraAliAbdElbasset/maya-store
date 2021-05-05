@extends('layouts.app')


@section('content')
      <!-- Products Start -->
      <section id="products" class="py-5">

          <div class="container">

              <div class="row">

                  <div class="col-lg-3">

                      <div class="card border-0 shadow-sm bg-white">
                          <div class="card-body">
                              <h4 class="text-orange text-capitalize mt-2">Catégories</h4>
                              <hr class="text-orange my-4">
                              @foreach($categories as $c)
                              <p class="text-capitalize">
                                  <a href="javascript:void(0)" class="text-decoration-none text-dark">
                                      {{$c->name}}<span class="ms-2 text-orange">({{$c->products_count}})</span>
                                  </a>
                              </p>
                              @endforeach

                          </div>
                      </div>

                      <div class="card border-0 shadow-sm bg-white mt-3">
                          <div class="card-body">
                              <h4 class="text-orange text-capitalize mt-2">Marques</h4>
                              <hr class="text-orange my-4">
                              @foreach($brands as $b)
                                  <a href="javascript:void(0)" class="text-decoration-none text-dark">
                                      <p class="text-capitalize">{{$b->name}}<span class="ms-2 text-orange">({{$b->products_count}})</span></p>
                                  </a>
                              @endforeach

                          </div>
                      </div>

                  </div>

                  <div class="col-lg-9 products">

                      <form action="" class="row d-flex justify-content-between mt-3 mt-lg-0" id="formFilter">
                          @if(request()->has('category'))
                              <input type="hidden" name="category" value="{{request('category')}}">
                          @endif
                          @if(request()->has('brand'))
                              <input type="hidden" name="brand" value="{{request('brand')}}">
                          @endif
                          <div class="col-lg-5 mb-3 mb-lg-0">
                              <select class="form-select py-2 border-0 shadow-sm" name="sort" onchange="document.getElementById('formFilter').submit()">
                                  <option disabled  >Trier par ...</option>
                                  <option  selected value="created_at" {{request('sort') === 'created_at' ? 'selected' :''}} >Nouveautés</option>
                                  <option value="name" {{request('sort') === 'name' ? 'selected' :''}} >Trier par nom</option>
                                  <option value="price" {{request('sort') === 'price' ? 'selected' :''}}>Trier par prix</option>
                                  <option value="qte" {{request('sort') === 'qte' ? 'selected' :''}}>Trier par quantité</option>
                                  <option value="popularity" {{request('sort') === 'popularity' ? 'selected' :''}}>Trier par popolarité</option>
                              </select>
                          </div>

                          <div class="col-lg-6 mb-3 mb-lg-0">
                              <input type="text" name="search" value="{{request('search')}}" class="form-control py-2 border-0 shadow-sm" placeholder="Nom du produit">
                          </div>

                          <div class="col-12 col-lg-auto d-block d-lg-flex">
                              <a href="javascript:void(0)"
                                 onclick="document.getElementById('formFilter').submit()"
                                 class="btn bg-orange text-white text-decoration-none shadow-sm d-block">
                                  <i class="fas fa-search"></i>
                              </a>
                          </div>

                      </form>

                      <div class="row">

                          @foreach($products as $p)

                              @include('layouts.partials.product_card',['p' => $p,'col'=>4])

                          @endforeach

                      </div>

                      <div class="row mt-5">
                          <nav class="">
                              <ul class="pagination justify-content-center">
                                  {{$products->links()}}
                              </ul>
                          </nav>
                      </div>

                  </div>

              </div>

          </div>
      </section>
      <!-- Products End -->

@endsection

@push('js')

    <script src="{{asset('assets/site/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/site/vendors/counter-up/jquery.counterup.js')}}"></script>

@endpush
