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
    <link href="{{ asset('css/file.css') }}" rel="stylesheet">

    <script src="{{ asset('extra/js/vendor/jquery-2.2.4.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/vendor/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/jquery.ajaxchimp.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/jquery.nice-select.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/main.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/file.js') }}" defer></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-sm  navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Managment System</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Phones
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('user.viewphones')}}">All Phones</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('user.resetpassword')}}">
                            password
                        </a>
                        <hr>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <input class="form-control mr-sm-2" id="myInput" type="text" placeholder="Search" style="height: 30px;" onkeyup="myFunction()">
                {{--<button class="btn btn-success" type="submit">Search</button>--}}

            </ul>
        </div>
    </nav>
</div>
<main class="py-4">
    @yield('content')
</main>
</body>
</html>
