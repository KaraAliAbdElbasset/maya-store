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

                <div class="col-lg-3 mt-2 mt-lg-0">
                    <div class="card category border-0" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{asset('assets/store/images/category.png')}}');">
                        <div class="card-body text-white">
                            <h3 class="font-weight-bold my-3">Consommable</h3>
                        </div>
                        <div class="content card-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi aut ipsam modi odio amet harum nulla similique, odit nobis assumenda vero illo, ea, voluptate recusandae porro voluptatum perferendis adipisci consectetur.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-2 mt-lg-0">
                    <div class="card category border-0" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{asset('assets/store/images/category.png')}}');">
                        <div class="card-body text-white">
                            <h3 class="font-weight-bold my-3">Imprimantes</h3>
                        </div>
                        <div class="content card-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi aut ipsam modi odio amet harum nulla similique, odit nobis assumenda vero illo, ea, voluptate recusandae porro voluptatum perferendis adipisci consectetur.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-2 mt-lg-0">
                    <div class="card category border-0" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{asset('assets/store/images/category.png')}}');">
                        <div class="card-body text-white">
                            <h3 class="font-weight-bold my-3">Écrans</h3>
                        </div>
                        <div class="content card-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi aut ipsam modi odio amet harum nulla similique, odit nobis assumenda vero illo, ea, voluptate recusandae porro voluptatum perferendis adipisci consectetur.
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-2 mt-lg-0">
                    <div class="card category border-0" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{asset('assets/store/images/category.png')}}');">
                        <div class="card-body text-white">
                            <h3 class="font-weight-bold my-3">Stations De Travail</h3>
                        </div>
                        <div class="content card-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi aut ipsam modi odio amet harum nulla similique, odit nobis assumenda vero illo, ea, voluptate recusandae porro voluptatum perferendis adipisci consectetur.
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
    <!-- Categories End -->


    <!-- Latest Start -->
    <section id="latest" class="py-5 products">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Nos Nouveautés
            </h2>

            <div class="row mt-0 mt-lg-5">


                <div class="col-lg-3 mt-0 mt-5 mt-lg-0">

                    <div class="card product border-0">

                        <div class="product-image">
                            <img src="{{asset('assets/store/images/product.png')}}"  alt="img" class="img-fluid"/>
                            <span class="badge bg-orange rounded-2 product-discount">- 15%</span>
                        </div>

                        <div class="content">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <a href="#" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-search"></i>
                            </a>

                        </div>

                    </div>

                    <div class="px-3 product-infos">

                        <div class="product-title">
                            <p class="mb-0 mt-4 text-truncate">
                                <a href="product_detail.html" class="text-decoration-none text-black">Lorem ipsum dolor sit amet dolor sit amet</a>
                            </p>
                        </div>

                        <div class="product-price mt-2">
                            <span class="me-2 text-orange fw-bold">9900 DA</span><span class="text-muted text-decoration-line-through ms-1">12900 DA</span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-3 mt-0 mt-5 mt-lg-0">

                    <div class="card product border-0">

                        <div class="product-image">
                            <img src="{{asset('assets/store/images/product.png')}}"  alt="img" class="img-fluid"/>
                            <span class="badge bg-orange rounded-2 product-discount">- 15%</span>
                        </div>

                        <div class="content">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <a href="#" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-search"></i>
                            </a>

                        </div>

                    </div>

                    <div class="px-3 product-infos">

                        <div class="product-title">
                            <p class="mb-0 mt-4 text-truncate">
                                <a href="product_detail.html" class="text-decoration-none text-black">Lorem ipsum dolor sit amet dolor sit amet</a>
                            </p>
                        </div>

                        <div class="product-price mt-2">
                            <span class="me-2 text-orange fw-bold">9900 DA</span><span class="text-muted text-decoration-line-through ms-1">12900 DA</span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-3 mt-0 mt-5 mt-lg-0">

                    <div class="card product border-0">

                        <div class="product-image">
                            <img src="{{asset('assets/store/images/product.png')}}"  alt="img" class="img-fluid"/>
                            <span class="badge bg-orange rounded-2 product-discount">- 15%</span>
                        </div>

                        <div class="content">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <a href="#" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-search"></i>
                            </a>

                        </div>

                    </div>

                    <div class="px-3 product-infos">

                        <div class="product-title">
                            <p class="mb-0 mt-4 text-truncate">
                                <a href="product_detail.html" class="text-decoration-none text-black">Lorem ipsum dolor sit amet dolor sit amet</a>
                            </p>
                        </div>

                        <div class="product-price mt-2">
                            <span class="me-2 text-orange fw-bold">9900 DA</span><span class="text-muted text-decoration-line-through ms-1">12900 DA</span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-3 mt-0 mt-5 mt-lg-0">

                    <div class="card product border-0">

                        <div class="product-image">
                            <img src="{{asset('assets/store/images/product.png')}}"  alt="img" class="img-fluid"/>
                            <span class="badge bg-orange rounded-2 product-discount">- 15%</span>
                        </div>

                        <div class="content">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <a href="#" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-search"></i>
                            </a>

                        </div>

                    </div>

                    <div class="px-3 product-infos">

                        <div class="product-title">
                            <p class="mb-0 mt-4 text-truncate">
                                <a href="product_detail.html" class="text-decoration-none text-black">Lorem ipsum dolor sit amet dolor sit amet</a>
                            </p>
                        </div>

                        <div class="product-price mt-2">
                            <span class="me-2 text-orange fw-bold">9900 DA</span><span class="text-muted text-decoration-line-through ms-1">12900 DA</span>
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
    <!-- Latest End -->


    <!-- Popular Start -->
    <section id="popular" class="py-5 products">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Les plus demandés
            </h2>

            <div class="row mt-0 mt-lg-5">


                <div class="col-lg-3 mt-0 mt-5 mt-lg-0">

                    <div class="card product border-0">

                        <div class="product-image">
                            <img src="{{asset('assets/store/images/product.png')}}"  alt="img" class="img-fluid"/>
                            <span class="badge bg-orange rounded-2 product-discount">- 15%</span>
                        </div>

                        <div class="content">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <a href="#" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-search"></i>
                            </a>

                        </div>

                    </div>

                    <div class="px-3 product-infos">

                        <div class="product-title">
                            <p class="mb-0 mt-4 text-truncate">
                                <a href="product_detail.html" class="text-decoration-none text-black">Lorem ipsum dolor sit amet dolor sit amet</a>
                            </p>
                        </div>

                        <div class="product-price mt-2">
                            <span class="me-2 text-orange fw-bold">9900 DA</span><span class="text-muted text-decoration-line-through ms-1">12900 DA</span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-3 mt-0 mt-5 mt-lg-0">

                    <div class="card product border-0">

                        <div class="product-image">
                            <img src="{{asset('assets/store/images/product.png')}}"  alt="img" class="img-fluid"/>
                            <span class="badge bg-orange rounded-2 product-discount">- 15%</span>
                        </div>

                        <div class="content">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <a href="#" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-search"></i>
                            </a>

                        </div>

                    </div>

                    <div class="px-3 product-infos">

                        <div class="product-title">
                            <p class="mb-0 mt-4 text-truncate">
                                <a href="product_detail.html" class="text-decoration-none text-black">Lorem ipsum dolor sit amet dolor sit amet</a>
                            </p>
                        </div>

                        <div class="product-price mt-2">
                            <span class="me-2 text-orange fw-bold">9900 DA</span><span class="text-muted text-decoration-line-through ms-1">12900 DA</span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-3 mt-0 mt-5 mt-lg-0">

                    <div class="card product border-0">

                        <div class="product-image">
                            <img src="{{asset('assets/store/images/product.png')}}"  alt="img" class="img-fluid"/>
                            <span class="badge bg-orange rounded-2 product-discount">- 15%</span>
                        </div>

                        <div class="content">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <a href="#" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-search"></i>
                            </a>

                        </div>

                    </div>

                    <div class="px-3 product-infos">

                        <div class="product-title">
                            <p class="mb-0 mt-4 text-truncate">
                                <a href="product_detail.html" class="text-decoration-none text-black">Lorem ipsum dolor sit amet dolor sit amet</a>
                            </p>
                        </div>

                        <div class="product-price mt-2">
                            <span class="me-2 text-orange fw-bold">9900 DA</span><span class="text-muted text-decoration-line-through ms-1">12900 DA</span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-3 mt-0 mt-5 mt-lg-0">

                    <div class="card product border-0">

                        <div class="product-image">
                            <img src="{{asset('assets/store/images/product.png')}}"  alt="img" class="img-fluid"/>
                            <span class="badge bg-orange rounded-2 product-discount">- 15%</span>
                        </div>

                        <div class="content">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <a href="#" class="btn bg-white text-orange rounded-0 text-capitalize w-25 py-3 rounded-2 shadow-sm">
                                <i class="fas fa-search"></i>
                            </a>

                        </div>

                    </div>

                    <div class="px-3 product-infos">

                        <div class="product-title">
                            <p class="mb-0 mt-4 text-truncate">
                                <a href="product_detail.html" class="text-decoration-none text-black">Lorem ipsum dolor sit amet dolor sit amet</a>
                            </p>
                        </div>

                        <div class="product-price mt-2">
                            <span class="me-2 text-orange fw-bold">9900 DA</span><span class="text-muted text-decoration-line-through ms-1">12900 DA</span>
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
    <!-- Popular End -->


    <!-- brand Start -->
    <section id="latest" class="py-5 products">
        <div class="container">

            <h2 class="fw-bold text-center text-lg-start border-start px-3">
                Nos clients
            </h2>

            <div class="row mt-0 mt-lg-5">
                <div class="owl-carousel">
                    <img src="{{asset('assets/store/images/brand.png')}}" alt="brand" class="img-fluid">
                    <img src="{{asset('assets/store/images/brand.png')}}" alt="brand" class="img-fluid">
                    <img src="{{asset('assets/store/images/brand.png')}}" alt="brand" class="img-fluid">
                    <img src="{{asset('assets/store/images/brand.png')}}" alt="brand" class="img-fluid">
                    <img src="{{asset('assets/store/images/brand.png')}}" alt="brand" class="img-fluid">
                    <img src="{{asset('assets/store/images/brand.png')}}" alt="brand" class="img-fluid">
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
