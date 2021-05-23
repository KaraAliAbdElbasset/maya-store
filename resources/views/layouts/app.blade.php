<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sarl CEC</title>

    <!-- Title Icon -->
    <link rel="icon" href="https://www.flaticon.com/svg/static/icons/svg/891/891462.svg"/>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous"
    />

    <!-- Font Import -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/store/css/main.css')}}" />

    <!-- Font Awesome CDN -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />
    @stack('css')
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/store/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/store/css/owl.theme.default.min.css')}}">

</head>

<body>

@include('layouts.partials.headernav')


@yield('content')


<!-- Footer Start -->
@include('layouts.partials.footer')
<!-- Footer End -->

<!-- Cart Modal Start -->
<div
    class="modal fade"
    id="staticBackdrop"
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
<!-- Cart Modal End -->

<!-- Bootstrap Bundle with Popper -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"
></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="{{asset('assets/store/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<script>

    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop:true,
            responsiveClass:true,
            autoplay: 100,
            responsive:{
                0:{
                    items:2,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:6,
                    loop:true
                }
            }
        });
        @if(session('cart-success'))
            $('#staticBackdrop').modal('show')
        @endif

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        @if(session()->has('error'))
        Toast.fire({
            icon: 'error',
            title: '{{session('error')}}'
        })
        @endif

        @if(session()->has('success'))
        Toast.fire({
            icon: 'success',
            title: '{{session('success')}}'
        })
        @endif

    });
</script>

@stack('js')
</body>

</html>
