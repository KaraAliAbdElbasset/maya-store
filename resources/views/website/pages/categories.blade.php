@extends('layouts.app')


@section('content')
    <!-- Categories Start -->
    <section id="categories" class="py-5">
        <div class="container">

            <form action="" id="search-form" class="row d-flex justify-content-center mt-3 mt-lg-0">

                <div class="col-lg-5 mb-3 mb-lg-0">
                    <input type="text" name="search" value="{{request('search')}}" class="form-control py-2 border-0 shadow-sm" placeholder="Nom de la catégorie">
                </div>

                <div class="col-12 col-lg-auto d-block d-lg-flex">
                    <a href="javascript:void(0)" onclick="document.getElementById('search-form').submit()" class="btn bg-orange text-white text-decoration-none shadow-sm d-block">
                        <i class="fas fa-search"></i>
                    </a>
                </div>

            </form>

            <div class="row mt-5">

                @foreach($categories as $c)
                    <div class="col-lg-3 mt-3 mb-0 mb-lg-3 mt-lg-0">
                        <div class="card category border-0" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{$c->image_url}}');">
                            <div class="card-body text-white">
                                <h3 class="font-weight-bold my-3">{{$c->name}}</h3>
                            </div>
                            <div class="content card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi aut ipsam modi odio amet harum nulla similique, odit nobis assumenda vero illo, ea, voluptate recusandae porro voluptatum perferendis adipisci consectetur.
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            <div class="row mt-5">
                <nav class="">
                    <ul class="pagination justify-content-center">
                        <li class="page-item mx-2"><a class="page-link bg-white text-orange border-0 rounded" href="#">1</a></li>
                        <li class="page-item mx-2"><a class="page-link bg-white text-orange border-0 rounded" href="#">2</a></li>
                        <li class="page-item mx-2" aria-current="page"><a class="page-link bg-orange text-white border-0 rounded shadow-sm" href="#">3</a></li>
                        <li class="page-item mx-2"><a class="page-link bg-white text-orange border-0 rounded" href="#">4</a></li>
                        <li class="page-item mx-2"><a class="page-link bg-white text-orange border-0 rounded" href="#">5</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </section>
    <!-- Categories End -->
@endsection
