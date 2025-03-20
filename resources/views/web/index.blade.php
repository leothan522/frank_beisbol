<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ env('APP_NAME', 'Beisbol') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('vendor/sport/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/sport/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sport/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sport/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sport/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sport/css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('vendor/sport/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/sport/css/style.css') }}">

    <style>
        body {
            margin: 0;
        }

        .banner {
            background-image: url("{{ asset('img/sport/banner.jpg') }}");
            padding: 250px 200px;
            background-repeat: no-repeat;
            background-size: cover;
        }


        @media (max-width: 480px) {
            .banner {
                background-image: url("{{ asset('img/sport/banner_2.jpg') }}");
                padding: 130px 40px;
                background-repeat: no-repeat;
                background-size: cover;
                font-size: 1.2rem;
            }
        }

    </style>

    @livewireStyles
</head>
<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-logo">
                <a href="#"><img src="{{ asset('img/sport/logo_plantilla.png') }}" alt="Image"></a>
            </div>
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body">

        </div>
    </div>

    <header class="site-navbar absolute transparent" role="banner">
        <div class="py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-3">
                        <a href="#" class="text-secondary px-2 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="text-secondary px-2"><span class="icon-instagram"></span></a>
                        <a href="#" class="text-secondary px-2"><span class="icon-twitter"></span></a>
                        <a href="#" class="text-secondary px-2"><span class="icon-linkedin"></span></a>
                    </div>
                    <div class="col-6 col-md-9 text-right">
                        <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">youremail@domain.com</span></a></div>
                        <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+1 232 3532 321</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
            <div class="container position-relative">
                <div class="site-logo">
                    <a href="#"><img src="{{ asset('img/sport/logo_plantilla.png') }}" alt="" width="128" height="113"></a>
                </div>

                <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-md-block">
                    <li><a href="#">Sobre Nosotros</a></li>
                    <li><a href="#">Contactanos</a></li>
                    <li><a href="{{ url('/dashboard') }}"><span class="icon-sign-in"></span> Dashboard</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="banner">

        <div class="card" style="background-color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(0, 0, 0, 0.1); width: 65%">
            <div class="card-body">
                <h1 class="card-title fw-bold">¡Partidos en vivo!</h1>
                <p class="card-text fw-bold h5">Vive la experiencia como si estuvieses en el estadio.</p>
            </div>
        </div>

    </div>

    <div class="site-blocks-vs site-section bg-light">
        <div class="container">

            @livewire('web.home-component')

        </div>
    </div>

    <footer class="site-footer border-top">
        <p class="text-center">
            Copyright &copy; {{ date('Y') }} | {{ env('APP_NAME', 'Laravel') }}
        </p>

    </footer>
</div>

<script src="{{ asset('vendor/sport/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('vendor/sport/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('vendor/sport/js/jquery-ui.js') }}"></script>
<script src="{{ asset('vendor/sport/js/popper.min.js') }}"></script>
<script src="{{ asset('vendor/sport/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/sport/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/sport/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('vendor/sport/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('vendor/sport/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/sport/js/aos.js') }}"></script>

<script src="{{ asset('vendor/sport/js/main.js') }}"></script>

@yield('js')

@livewireScripts
</body>
</html>
