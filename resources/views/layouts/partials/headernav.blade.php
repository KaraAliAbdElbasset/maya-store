<!-- Informations Start -->
<section id="infos" class="bg-orange text-white">
    <div class="container px-0">

        <nav class="navbar navbar-expand-lg px-0">
            <div class="container">


                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation" >
                    <i class="fas fa-bars text-orange"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item me-0 me-lg-3">
                            <div class="">
                                <button class="btn text-white " type="button" id="" data-bs-toggle="" aria-expanded="false">
                                    DZD<img src="{{asset('assets/store/images/dz.png')}}" alt="flag" height="15" class="ms-2">
                                </button>

                            </div>
                        </li>
                    </ul>
                    <form action="{{route('shop')}}">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item me-0 me-lg-3">
                            <input type="text" name="search" class="form-control border-0 rounded-pill px-3" placeholder="Recherche">
                        </li>
                    </ul>
                    </form>

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">

                        <li class="nav-item me-0 me-lg-5">
                            <a class="nav-link text-black fw-light cart" href="{{route('cart.index')}}">
                                <i class="fas fa-shopping-cart me-2"></i><span class="bg-white text-orange rounded px-2 fw-bolder">{{session()->has('cart') ? session('cart')->getTotalQty() : 0}}
                                </span>
                                <span class="ms-2 text-capitalize d-lg-none">Mon Panier</span>
                            </a>
                        </li>
                        @guest
                        <li class="nav-item me-0 me-lg-3">
                            <a
                                class="nav-link btn bg-white text-orange px-3"
                                href="{{route('login')}}"
                            >Mon Compte</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link btn bg-white text-orange px-3"
                                href="{{route('register')}}"
                            >Sinscrire</a
                            >
                        </li>
                        @else
                            <li class="nav-item">
                                <a
                                    class="nav-link text-white rounded-pill"
                                    href="{{route('home')}}"
                                >Profile</a
                                >
                            </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-white rounded-pill"
                                href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()"
                            >Deconnexion <i class="fas fa-sign-out-alt ms-2"></i></a
                            >
                        </li>
                            <form action="{{route('logout')}}" method="post" id="logout-form">@csrf</form>
                        @endguest
                    </ul>

                </div>

            </div>
        </nav>

    </div>
</section>
<!-- Informations End -->


<!-- Navbar Start -->
<section id="navbar" class="bg-white text-capitalize shadow-sm">
    <div class="container px-0">

        <nav class="navbar navbar-expand-lg px-0">
            <div class="container">

                <a class="navbar-brand" href="{{route('welcome')}}">
                    <img src="{{asset('assets/store/images/logo.svg')}}" alt="logo" height="30" />
                </a>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation" >
                    <i class="fas fa-bars text-orange"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item me-0 me-lg-3">
                            <a
                                class="nav-link text-black fw-light"
                                href="{{route('welcome')}}"
                            >Accueil</a
                            >
                        </li>
                        <li class="nav-item me-0 me-lg-3">
                            <a
                                class="nav-link text-black fw-light"
                                href="{{route('about')}}"
                            >Notre société</a
                            >
                        </li>
                        <li class="nav-item me-0 me-lg-3">
                            <a
                                class="nav-link text-black fw-light"
                                href="{{route('shop')}}"
                            >Produits</a
                            >
                        </li>
                        <li class="nav-item me-0 me-lg-3">
                            <a
                                class="nav-link text-black fw-light"
                                href="{{route('categories.index')}}"
                            >Catégories</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-black fw-light"
                                href="{{route('contact')}}"
                            >Contact</a
                            >
                        </li>
                    </ul>

                </div>

            </div>
        </nav>

    </div>
</section>
<!-- Navbar End -->
