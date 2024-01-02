<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luis Olivares</title>
    <meta name="filename" content="pages/page">
    <meta name="pageNumber" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--favicons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo.png') }}">
    <!-- Bootstrap Css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style css -->
    <!-- FontAwesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <script type="text/javascript" src="../../assests/book/extras/Jquery.min.1.7.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- <link rel="stylesheet" href="css/jquery.ui.html4.css" />
    <link rel="stylesheet" href="css/jquery.ui.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <!--<link rel="stylesheet" href="{{ asset('assets/style.css') }}" />-->

    @stack('styles')
</head>

<body>

    <header class="head-sec">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center pt-2 pb-2">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-10">
                    <div class="logo text-lg-center">
                        <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                    <div class="row">
                        <div class="col-xxl-9 col-lg-8 col-md-8 my-xl-0 my-3">
                            <div class="search-side">
                                <i class="fas fa-solid fa-magnifying-glass"></i>
                                <input type="text" placeholder="Search..">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 my-xl-0 my-3">
                            <!--<div class="btn-side d-flex">-->
                            <!--    <a href="{{ route('index') }}" class="btn pe-5 ps-5 py-2">Donate Now</a>-->
                            <!--</div>-->
                        </div>
                        <div class="col-12  pt-4">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-8 col-lg-7 col-md-6">
                                    <nav class="menu">
                                        <input type="checkbox" id="responsive_menu">
                                        <label for="responsive_menu"></label>
                                        <ul>
                                            <li class=""> <a href="{{ route('index') }}"><i
                                                        class="fa-solid fa-house"></i></a></li>
                                            <li class=""><a href="{{ route('contact-us') }}"><i
                                                        class="fa-solid fa-message"></i></a></li>
                                            <li class=""> <a href="{{ route('about-us') }}">About Us</a> </li>
                                            <li class=""><a href="{{ route('subscription') }}">Subscription</a>
                                            </li>
                                            @auth
                                                <li><a href="{{ route('logout') }}"
                                                        class="btn nav-btn d-sm-block d-md-none text-white px-5">Logout</a>
                                                </li>
                                            @else
                                                <li><a href="{{ route('login') }}"
                                                        class="btn nav-btn d-sm-block d-md-none text-white px-5">Login</a>
                                                </li>
                                                <li><a href="{{ route('register') }}"
                                                        class="btn nav-btn d-sm-block d-md-none text-white px-5">Register</a>
                                                </li>
                                            @endauth
                                        </ul>
                                    </nav>
                                </div>
                                {{-- @dd(auth()->user()) --}}
                                <div class="col-xl-4 col-lg-5 col-md-6 d-flex justify-content-end">
                                    @auth
                                        <a href="{{ route('logout') }}"
                                            class="btn nav-btn d-none d-md-block login-btn">Logout</a>
                                        @if (auth()->user()->role === 'admin')
                                            <a href="{{ route('category.index') }}"
                                                class="btn nav-btn d-none d-md-block register-btn">Category</a>
                                            <a href="{{ route('book.index') }}"
                                                class="btn nav-btn d-none d-md-block register-btn">Book</a>
                                        @endif
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="btn nav-btn d-none d-md-block login-btn">Login</a>
                                        <a href="{{ route('register') }}"
                                            class="btn nav-btn d-none d-md-block register-btn">Register</a>

                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="foot-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="main-wrapper">
                        <div class="footer-content">
                            <p>© 2000-2023, All Rights Reserved</p>
                        </div>
                        <div class="icon-wrap d-flex">
                            <div class="icon-1">
                                <a href="{{ route('index') }}"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                            <div class="icon-1">
                                <a href="{{ route('index') }}"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <div class="icon-1">
                                <a href="{{ route('index') }}"><i class="fa-solid fa-basketball"></i></a>
                            </div>
                            <div class="icon-1">
                                <a href="{{ route('index') }}"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @stack('script')
</body>

</html>
