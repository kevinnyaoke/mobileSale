<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sale</title>

    <!-- Fonts -->
    <link href="{{ asset('extra/css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('extra/js/vendor/jquery-2.2.4.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/vendor/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/jquery.ajaxchimp.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/jquery.nice-select.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/main.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="main-wrapper-first">
    <div class="hero-area relative">
        <header>
                <div class="header-wrap">
                    <div class="header-top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="#"><img src="extra/img/logo.png" alt=""></a>
                        </div>
                        <div class="main-menubar d-flex align-items-center">
                            <nav class="unhide">
                                <a href="{{route('adminlogin')}}">Admin Login</a>
                                <a href="{{route('stafflogin')}}">Staff Login</a>
                                <a href="{{route('homepage')}}">Home</a>
                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<main class="py-4">
    @yield('content')
</main>
    </div>
</div>
</body>
</html>
