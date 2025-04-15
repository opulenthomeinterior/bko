<?php

use App\Models\Category;
use App\Models\Style;
?>
<!doctype html>
<html lang="en-GB" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="XprnAzefcxw_6ShJcZrtRn21FuOT8qEGzuZRyhMp05I" />
    @yield('meta_tags')
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T9TPPJK3');</script>
    <!-- End Google Tag Manager -->

    <?php $current_uri = request()->segments(); ?>
    <?php $page_slug = ucwords(str_replace(['-', '_'], ' ', last($current_uri))); ?>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logoBko.png') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    {{-- <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    <!--Slick Slider  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}" />
    {{-- Custom CSS --}}
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet" type="text/css" /><!-- Style -->
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <!-- owl carousel css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- owl carousel theme.css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> 
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YN6B53VG71"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-YN6B53VG71');
    </script>

    <style>
        @media (max-width:576px)
        {
            #header-logo
            {
                width:130px;
            }
        }
        
        .footer-link {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-link:hover {
            color: #ffd700;
        }
       
        .social-icon {
            width: 27px;
            height: 27px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            /* background: rgba(255, 255, 255, 0.1); */
            background-color:#febd49;
            border-radius: 50%;
            margin-right: 10px;
            transition: background 0.3s;
            color:black
        }
        .social-icon:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        ul li
        {
            list-style-type:none;
        }
        /* .social-link-text
        {
            color:white;
            transition: color 0.3s;
        }
        .social-link-text:hover
        {
            color: #ffd700;
        } */

        .ticker-wrapper {
            overflow: hidden;
            white-space: nowrap;
            /* background-color: #ff0000; */
            color: #fff;
            padding: 10px 0;
            position: relative;
        }
        .ticker-text {
            display: inline-block;
            padding-left: 100%;
            animation: ticker-scroll 30s linear infinite;
            /* font-size: 20px;
            font-weight: bold; */
        }
        @keyframes ticker-scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }
        .divider
        {
            position:absolute;
            width:4px;
            height:115%;
            top:-5px;
            left:47%;
            background-color:#ffc107;
            transform: rotate(15deg);
            z-index:0;
        }
        /* @media (max-width:576px)
        {
            .divider
            {
                display:none;
            }
        } */
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9TPPJK3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header relative">
        <div id="sidebar" class="sidebar">
            <button id="closeSidebar">&times;</button>
            <div class="sidebar-content">
                @unless (Auth::check() && Auth::user()->hasRole('user'))
                <h3 class="text-dark">Login</h3>
                <form action="{{ route('login') }}" class="auth-input py-4" method="POST" id="loginform">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Enter Email" value="{{ old('email') }}" autofocus autocomplete="username">
                    </div>

                    <div class="form-group mb-2">
                        <label for="userpassword" class="form-label">Password
                            <span class="text-danger">*</span>
                        </label>
                        <div class="position-relative auth-pass-inputgroup mb-3">
                            <input type="password" class="form-control pe-5 password-input" name="password"
                                placeholder="Enter Password" id="userpassword" autocomplete="current-password">
                            <button
                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                type="button" id="password-addon"><i
                                    class="las la-eye align-middle fs-18"></i></button>
                        </div>
                    </div>

                    <div class="form-check form-check-primary fs-16 py-2">
                        <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                        <label class="form-check-label fs-14" for="remember_me">
                            Remember me
                        </label>
                        {{-- <div class="float-end">
                            <a href="{{ route('password.request') }}"
                        class="text-muted text-decoration-underline fs-14">Forgot
                        your password?</a>
                    </div> --}}
            </div>

            <div class="mt-2">
                <button class="btn btn-dark rounded-0 w-100" type="submit" id="loginbutton">Log
                    In</button>
            </div>

            <div class="mt-4 text-center">
                <p class="mb-0">Don't have an account ? <a href="{{ route('open-account') }}"
                        class="fw-medium text-dark text-decoration-underline">
                        Signup now </a> </p>
            </div>
            </form>
            @endunless

            @role('user')
            <div class="row py-3">
                <div class="col-12 py-2 text-center">
                    <img src="{{ asset('images/users/user-dummy-img.jpg') }}" alt="user"
                        class="img-fluid rounded-circle border border-dark" width="100px" />
                </div>
                <div class="col-12 py-1">
                    <h5 class="text-dark text-center fw-bolder">
                        {{ Auth::user()->name }}
                    </h5>
                </div>
                <div class="col-12 py-1">
                    <h5 class="text-dark text-center fw-bolder">
                        {{ Auth::user()->email }}
                    </h5>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-12">
                    <a href="{{ route('user-profile') }}" class="btn btn-dark w-100 rounded-0">
                        <i class="ri-user-line"></i>
                        Profile
                    </a>
                </div>
            </div>

            <div class="row py-2">
                <div class="col-12">
                    <a href="{{ route('order-history') }}" class="btn btn-dark w-100 rounded-0">
                        <i class="ri-shopping-bag-line"></i>
                        Order History
                    </a>
                </div>
            </div>

            <div class="row py-2">
                <div class="col-12">
                    <a href="{{ route('logout') }}" class="btn btn-danger w-100 rounded-0">
                        <i class="ri-logout-box-r-line"></i>
                        Logout
                    </a>
                </div>
            </div>
            @endrole

        </div>
        </div>

        <div class="cart-icon d-lg-block d-md-block d-none" id="cart-icon">
            <i class="ri-shopping-cart-line">
                <span id="calculateProductsQuantityBottom" class="position-absolute right-0"
                    style="top: -8px;"></span>
            </i>
        </div>

        <div class="whatsapp-icon d-flex justify-content-center bg-white rounded-circle" id="whatsapp-icon" style="height: 50px; width: 50px">
            <a href="https://wa.me/+447847776297" target="_blank">
                <i class="ri-whatsapp-line" style="font-size: 35px;">
                </i>
            </a>
        </div>

        <div id="cartSidebar" class="cart-sidebar">
            <div class="container-fluid py-3 px-4">
                <div class="row border-bottom border-dark">
                    <div class="col-6">
                        <h3 class="text-dark text-uppercase fw-bolder">Cart</h3>
                    </div>
                    <div class="col-6 text-end" style="cursor: pointer">
                        <i class="ri-close-circle-line fs-4" id="cart-close-icon"></i>
                    </div>
                </div>
                <div class="row py-4 h-100">
                    <div class="col-12" id="cartItemsList" style="overflow-y: scroll; height: 150px;">

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('cart') }}" class="btn btn-md btn-dark rounded-0 fw-bolder">View Cart</a>
                        <a href="{{ route('checkout') }}"
                            class="btn btn-md btn-dark rounded-0 fw-bolder">Checkout</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="searchPopup px-3 py-3" id="searchPopup" style="z-index:10000;">
            <form action="{{ route('search') }}" method="GET" class="row justify-content-center flex-wrap">
                <div class="w-75">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                </div>
                <div class="" style="flex-basis: content">
                    <button type="submit" class="bg-transparent border-0">
                        <i class="ri-search-2-line"></i>
                    </button>
                </div>
                <div class="" style="flex-basis: content" id="close-search">
                    <a href="#">
                        <i class="ri-close-circle-line"></i>
                    </a>
                </div>
            </form>
        </div>


        {{-- <div class="wrap py-1" style="background-color: black;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col d-flex justify-content-end">
                        <p class="mb-0 d-flex">
                            <a href="#"
                                class="d-flex align-items-center justify-content-center px-3 text-light">360
                                Visualizer</a>
                            <a href="#"
                                class="d-flex align-items-center justify-content-center px-3 text-light"><i
                                    class="ri-whatsapp-line"></i> +00
                                1234
                                567</a>
                        </p>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <div class="navbar-wrapper">
            <nav class="container-fluid top-navbar1 p-0 text-white">
                <div class="text-center bg-danger">

                    <div class="ticker-wrapper">
                        <div class="ticker-text"><strong class="fw-bold">Limited time offer!</strong> For a Limited Time, We are offering Free on-site surveys and consultations.</div>
                    </div>
                   
                    {{-- <span class="fw-bold text-white "> 
                        LIMITED TIME OFFER!
                    </span> 
                    
                        <small class="">For a limited time, we are offering free on-site surveys and consultations.</small>
                     --}}
                </div>
                <div class="py-2 px-5 position-relative d-flex flex-column flex-md-row justify-content-center" style="background-color:#222222; z-index:-100">
                    <a class=" me-md-5 text-center text-warning btn-outline-default border-none " href="{{route('max_storage')}}" style="letter-spacing: 6px;"> 
                    {{-- <a class="btn btn-dark mb-2 mb-sm-0 rounded text-warning btn-outline-default border-none px-4 " href="{{route('max_storage')}}" style="">  --}}
                         MAX STORAGE KITCHEN
                    </a>
                    <div class="divider d-none d-md-block"></div>
                    <a class="ms-md-4 text-center text-warning  border-none  " href="{{route('doors_replacement')}}" style="letter-spacing: 6px;"> 
                    {{-- <a class="btn btn-dark rounded text-warning btn-outline-default border-none px-4 " href="{{route('doors_replacement')}}" style="">  --}}
                        DOOR REPLACEMENT SERVICE
                   </a>
                </div>
            </nav>
            <!-- <nav class="nav container-fluid p-0 bg-dark second-navbar" style="border-bottom: 1px solid #ebc266"> -->
            <nav class="nav container-fluid p-sm-0 py-5 text-black second-navbar">
                <div class="nav__data ps-0 ps-md-5">
                    <a href="{{ route('home') }}" class="nav__logo text-start flex-grow-1">
                        <img id="header-logo" class="pt-3" src="{{ asset('images/bko-black-logo.png') }}" width="150px" />
                    </a>

                    <a href="#" class="d-lg-none show-small d-flex" id="searchIcon"><i
                            class="ri-search-2-line"></i></a>
                    <a href="{{ route('cart') }}"
                        class="d-lg-none show-small d-flex align-items-center justify-content-center px-3 ">
                        <i class="position-relative ri-shopping-cart-line">
                            <span id="calculateProductsQuantity" class="position-absolute right-0"
                                style="top: -8px;"></span>
                        </i>
                    </a>

                    <a href="#" id="openSidebar"
                        class="align-items-center justify-content-center px-1  text-end d-lg-none show-small d-flex">
                        <i class="ri-user-line"></i>
                    </a>
                    <span class="nav__toggle" id="nav-toggle">

                        <i class="ri-menu-line nav__toggle-menu "></i>
                        <i class="ri-close-line nav__toggle-close"></i>
                    </span>


                </div>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list p-2">
                        <li class="dropdown__item">
                            <div class="nav__link dropdown__button">
                                <a href="{{ route('orderkitchen') }}" class="drop-down-link">EXPLORE </a>
                                <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>
                            <div class="dropdown__container border-bottom border-warning border-2">
                                <div class="dropdown__content px-4" style="max-width: 100% !important; margin: 20px 0px !important; grid-template-columns: none; column-gap: 0;">
                                    @php
                                        $styles = Style::where('status', 1)->get();
                                    @endphp
                                    @if (!empty($styles))
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <div class="container">
                                                <h4 class="text-start bg-dark text-white p-2">Choose Style:</h4>
                                                <div class="row">
                                                    @foreach ($styles as $index => $style)
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default drop-down-link">
                                                            <a style="width: 100%;" href="{{ route('orderkitchenbyname', [$style->slug]) }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> {{$style->name}} KITCHEN</a>
                                                        </li>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    @else
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <h4 class="text-start bg-dark text-white p-2">Choose Style:</h4>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default">
                                                            <a style="width: 100%;" href="{{ route('orderkitchenbyname', ['j-pull']) }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> J-PULL KITCHEN</a>
                                                        </li>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default">
                                                            <a style="width: 100%;" href="{{ route('orderkitchenbyname', ['true-handleless']) }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> TRUE HANDLELESS KITCHEN</a>
                                                        </li>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default">
                                                            <a style="width: 100%;" href="{{ route('orderkitchenbyname', ['shaker']) }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> SHAKER KITCHEN</a>
                                                        </li>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default">
                                                            <a style="width: 100%;" href="{{ route('orderkitchenbyname', ['slab-painted']) }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> SLAB PAINTED KITCHEN</a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <!-- <div class="dropdown__content">
                                    @php
                                        $styles = Style::all();
                                    @endphp
                                    @if (!empty($styles))
                                    @foreach ($styles as $index => $style)
                                        @if ($index % 2 == 0)
                                            <div class="dropdown__group">
                                                <ul class="dropdown__list">
                                        @endif
                                                <li>
                                                    <a href="{{ route('orderkitchenbyname', $style->slug) }}" class="dropdown__link">
                                                        <i class="ri-arrow-right-s-fill"></i>{{ $style->name }} Kitchen</a>
                                                </li>
                                                    @if (($index + 1) % 2 == 0 || $loop->last)
                                                </ul>
                                            </div>
                                        @endif
                                    @endforeach
                                    @else
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="{{ route('orderkitchenbyname', 'slab') }}"
                                                    class="dropdown__link">
                                                    <i class="ri-arrow-right-s-fill"></i>
                                                    SLAB KITCHENS
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('orderkitchenbyname', 'j-pull') }}"
                                                    class="dropdown__link">
                                                    <i class="ri-arrow-right-s-fill"></i>
                                                    j-PULL KITCHENS
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="{{ route('orderkitchenbyname', 'shaker') }}"
                                                    class="dropdown__link">
                                                    <i class="ri-arrow-right-s-fill"></i>
                                                    SHAKER KITCHENS
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('orderkitchenbyname', 'true-handleless') }}"
                                                    class="dropdown__link">
                                                    <i class="ri-arrow-right-s-fill"></i>
                                                    TRUE HANDLESS KITCHENS
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                </div> -->
                        <li class="dropdown__item">
                            <div class="nav__link dropdown__button">
                                <a href="{{ route('orderkitchen') }}" class="drop-down-link">ORDER KITCHEN </a>
                                <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>
                            <div class="dropdown__container border-bottom border-warning border-2">
                                <div class="container my-3">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 text-start">
                                            <h4 class="text-start bg-dark text-white p-2">Choose Style:</h4>
                                            <ul class="dropdown__list" id="styles-list">
                                                @php
                                                    $styles = Style::where('status', 1)->get();
                                                @endphp
                                                @if (!empty($styles))
                                                    @foreach ($styles as $index => $style)
                                                        <li>
                                                            <input data-style-id="{{$style->id}}" type="radio" value="{{$style->slug}}" name="style_name" class="radio-btn style-item"> &nbsp; {{$style->name}} KITCHEN
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-start">
                                            <h4 class="text-start bg-dark text-white p-2">Choose Colour:</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="dropdown__list">
                                                        @php 
                                                            $colours = \App\Models\Colour::distinct()->whereNotNull('finishing')->get();
                                                        @endphp
                                                        <div class="row" id="colours-list">
                                                            @foreach ($colours as $index => $colour)
                                                                <div class="col-6 mb-2">
                                                                    <li>
                                                                        <input data-colour-id="{{$colour->id}}" type="radio" name="colour_name" class="colour_type radio-btn colour-item colour{{$colour->id}}" disabled="disabled" id="superGlossWhite" value="{{$colour->slug}}">
                                                                        &nbsp; <span class="textcolour">{{$colour->trade_colour}}</span>
                                                                    </li>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <!-- <li>
                                                            <input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossWhite" value="superglosswhite">
                                                            &nbsp; SuperGloss White
                                                        </li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossCashmere" value="superglosscashmere"> &nbsp; SuperGloss Cashmere</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattIndigo" value="ultramattindigo"> &nbsp; UltraMatt Indigo</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattWhite" value="ultramattwhite"> &nbsp; UltraMatt White</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattCashmere" value="ultramattcashmere"> &nbsp; UltraMatt Cashmere</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossCream" value="superglosscream"> &nbsp; SuperGloss Cream</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattCream" value="ultramattcream"> &nbsp; UltraMatt Cream</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossLightGrey" value="superglosslight-grey"> &nbsp; SuperGloss Light Grey</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattLightGrey" value="ultramattlight-grey"> &nbsp; UltraMatt Light Grey</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossDarkGrey" value="superglossdark-grey"> &nbsp; SuperGloss Dark Grey</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattDarkGrey" value="ultramattdark-grey"> &nbsp; UltraMatt Dark Grey</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossAnthracite" value="superglossanthracite"> &nbsp; SuperGloss Anthracite</li> -->
                                                    </ul>
                                                </div>
                                                <!-- <div class="col-6">
                                                    <ul class="dropdown__list">
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattAnthracite" value="ultramattanthracite"> &nbsp; UltraMatt Anthracite</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossPaintToOrder" value="superglosspaint-to-order"> &nbsp; SuperGloss Paint to Order</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattPaintToOrder" value="ultramattpaint-to-order"> &nbsp; UltraMatt Paint to Order</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattFirGreen" value="ultramattfir-green"> &nbsp; UltraMatt Fir Green</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossIvory" value="superglossivory"> &nbsp; SuperGloss Ivory</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattSageGreen" value="ultramattsage-green"> &nbsp; UltraMatt Sage Green</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattIvory" value="ultramattivory"> &nbsp; UltraMatt Ivory</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattBlackPowderCoated" value="ultramattblack-powder-coated"> &nbsp; UltraMatt Black Powder Coated</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossDustGrey" value="superglossdust-grey"> &nbsp; SuperGloss Dust Grey</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="ultraMattDustGrey" value="ultramattdust-grey"> &nbsp; UltraMatt Dust Grey</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossIndigo" value="superglossindigo"> &nbsp; SuperGloss Indigo</li>
                                                        <li><input type="radio" name="colour_name" class="colour_type radio-btn" id="superGlossLightGray" value="superglosslight-gray"> &nbsp; SuperGloss Light Gray</li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 text-start">
                                            <h4 class="text-start bg-dark text-white p-2">Choose Assembly:</h4>
                                            <ul class="dropdown__list" id="assemblies-list">
                                                @php 
                                                    $assemblies = \App\Models\Assembly::whereNot('slug', 'stock')->get();
                                                @endphp
                                                @foreach ($assemblies as $index => $assembly)
                                                    <li class="assembly-item">
                                                        <input data-assembly-id="{{$assembly->id}}" type="radio" value="{{$assembly->slug}}" name="assembly_name" class="assembly_type assembly-item radio-btn"> &nbsp; {{$assembly->name}}
                                                    </li>
                                                @endforeach
                                                <!-- <li>
                                                    <input type="radio" value="flat-pack" name="assembly_name" class="assembly_type radio-btn"> &nbsp; Flat Pack
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center my-4">
                                    <button class="btn btn-sm btn-dark rounded-0 w-50 disabled" id="order-now">
                                        ORDER NOW
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="nav__link dropdown__button">
                                <a href="{{ route('ordercomponent') }}" class="drop-down-link">ORDER COMPONENT </a>
                                <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>
                            <div class="dropdown__container border-bottom border-warning border-2">
                                <div class="dropdown__content px-4" style="max-width: 100% !important; margin: 0px !important; grid-template-columns: none; column-gap: 0;">
                                    @php
                                        $categories = Category::where('parent_category_id', null)->where('status', 1)->where('header_item', 1)->get();
                                    @endphp
                                    @if (!empty($categories))
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <div class="container">
                                                <h4 class="text-start bg-dark text-white p-2">Choose Unit:</h4>
                                                <div class="row">
                                                    @foreach ($categories as $index => $category)
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default">
                                                            <a style="width: 100%;" href="{{ route('ordercomponentbyname', [$category->slug]) }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> {{$category->name}} </a>
                                                        </li>
                                                    </div>
                                                    @endforeach
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default">
                                                            <a style="width: 100%;" href="{{ route('wardrobes') }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> Wardrobes </a>
                                                        </li>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default">
                                                            <a style="width: 100%;" href="{{ route('doors_replacement') }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> Doors Replacement </a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="nav__link dropdown__button">
                                <a href="{{ route('help_and_guides') }}" class="drop-down-link">HELP & GUIDES </a>
                                <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>
                            <div class="dropdown__container border-bottom border-warning border-2">
                                <div class="dropdown__content px-4" style="max-width: 100% !important; margin: 0px !important; grid-template-columns: none; column-gap: 0;">
                                    <div class="dropdown__group">
                                        <ul class="dropdown__list">
                                            <div class="container">
                                                <h4 class="text-start bg-dark text-white p-2">HELP & GUIDES</h4>
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default">
                                                            <a href="{{ route('needhelp') }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> Need Help Measuring?</a>
                                                        </li>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default">
                                                            <a href="{{ route('kitchenarrive') }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> How Will My Kitchen Arrive?</a>
                                                        </li>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2">
                                                        <li style="width: 100%; border-radius: 0px" class="border-bottom border-default">
                                                            <a href="{{ route('about') }}" class="dropdown__link">
                                                                <i class="ri-arrow-right-s-fill"></i> About Us</a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="nav__link dropdown__button">
                                <a class="drop-down-link" href="{{ route('designservice') }}">
                                    DESIGN SERVICE
                                </a>
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="nav__link dropdown__button">
                                <a class="drop-down-link" href="{{ route('blog') }}">
                                    BLOG
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="nav__menu px-5" id="nav-menu" style="background-color: #ebc266; clip-path: polygon(30% 0, 100% 0, 100% 100%, 0 100%);">
                    <ul class="nav__list p-2">
                        <li class="d-lg-flex d-none hide-small">
                            <a href="#" class="nav__link" id="searchIcon-desktop"><i class="ri-search-2-line"></i></a>
                        </li>
                        <li class="d-lg-flex d-none hide-small">
                            <a href="{{ route('cart') }}"
                                class="d-flex align-items-center justify-content-center px-3 text-dark">
                                <i class="position-relative ri-shopping-cart-line">
                                    <span id="calculateProductsQuantity2" class="position-absolute right-0"
                                        style="top: -8px;"></span>
                                </i>
                            </a>
                        </li>
                        <li class="d-lg-flex d-none hide-small">
                            <a href="#" id="openSidebar-desktop"
                                class="d-flex align-items-center justify-content-center px-1 text-dark"><i
                                    class="ri-user-line"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </header>
    <div class="account-pages">
        {{ $slot }}
    </div>

    <footer class=" text-white py-5" style="background-color:#373737">
        <div class="container">
            <div class ="row align-items-center border-bottom mb-4">
                <div class="col-lg-6">
                    {{-- <h5 class="mb-4">BK Online</h5> --}}
                    <img class="" src="{{ asset('images/bko-white-logo.png') }}" style="width: 180px; height:180px" />
                    <p class="mb-4">Opulent home interiors operating as BK Online.</p>
                </div>

                <div class="col-lg-6 align-self-end">
                    <div class="mb-4">
                        <p class="mb-2">Stay Updated:</p>
                        <!-- <div class="input-group">
                            <input type="email" class="form-control " placeholder="Your Email">
                            <button class="btn" style="background-color:#febd49;" type="button">Subscribe</button>
                        </div> -->
                        <form method="POST" action="{{ route('contact_us_inquiry') }}">
                            @csrf
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" aria-label="Email">
                                <input type="hidden" name="catalogue_register_now" value="subscribed with email">
                                <button class="btn" type="submit" style="background-color:#febd49">Subscribe!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                
               
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4 text-white">Custome Service Hours</h5>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-telephone me-2"></i>
                        <a href="tel:02080505605" class="text-white">020 805 05605</a>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-clock me-2"></i>
                        <span>Mon-Sat | 9am-5pm</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-geo-alt me-2"></i>
                        <span>44 Ollender St, Aberfield Village, London E14 6RP United Kingdom</span>
                    </div>
                </div>

               
                <div class="col-lg-3 col-md-6 text-start">
                    <h5 class="mb-4 text-white">Support</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="#" class="footer-link">
                               
                                <i class="bi bi-caret-right-fill" style=" color:#febd49; margin-right:5px;"></i>
                                Downloadable Resources
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="footer-link">
                              
                                <i class="bi bi-caret-right-fill" style=" color:#febd49; margin-right:5px;"></i>
                                Installation Videos
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="footer-link">
                                
                                <i class="bi bi-caret-right-fill" style=" color:#febd49; margin-right:5px;"></i>
                                Print Resources
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                
                                <i class="bi bi-caret-right-fill" style=" color:#febd49; margin-right:5px;"></i>
                                Deliveries
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Legal -->
                <div class="col-lg-3 col-md-6 text-start">
                    <h5 class="mb-4 text-white">Legal</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="#" class="footer-link">
                                <i class="bi bi-caret-right-fill" style=" color:#febd49; margin-right:5px;"></i>
                                Cookies Policy
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="footer-link">
                                {{-- <i class="bi bi-shield-check me-2"></i> --}}
                                <i class="bi bi-caret-right-fill" style=" color:#febd49; margin-right:5px;"></i>
                                Price Promise Guarantee
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                
                                <i class="bi bi-caret-right-fill" style=" color:#febd49; margin-right:5px;"></i>
                                Terms & Conditions
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 text-start">
                    <h5 class="mb-4 text-white">Connect</h5>
                   
                    <div class="d-flex gap-2 flex-column">
                    
                        <div class = "d-flex">
                                <a href="https://www.facebook.com/opulenthomeinteriorsltd" class="social-icon d-flex footer-link">
                           
                                    <i class="bi bi-facebook" ></i>
                           
                           
                                </a>
                                <a href="https://www.facebook.com/opulenthomeinteriorsltd" class="text-white align-self-center social-link-text"> Facebook</a>
                       </div>
                    

                       <div class = "d-flex">
                        <a href="https://www.instagram.com/bkonline__kitchen" class="social-icon d-flex footer-link">
                   
                            <i class="bi bi-instagram"></i>
                   
                   
                        </a>
                        <a href="https://www.instagram.com/bkonline__kitchen" class="text-white align-self-center social-link-text"> Instagram</a>
               </div>
               <div class = "d-flex">
                <a href="https://uk.pinterest.com/bkonline570/?actingBusinessId=1095219340539871510" class="social-icon d-flex footer-link">
           
                    <i class="bi bi-pinterest"></i>
           
           
                </a>
                <a href="https://uk.pinterest.com/bkonline570/" class="text-white align-self-center social-link-text"> Pinterest</a>
       </div>

       <div class = "d-flex">
        <a href="https://www.youtube.com/@opulenthomeinteriors5595" class="social-icon d-flex footer-link ">
  
            <i class="bi bi-youtube"></i>
   
   
        </a>
        <a href="https://www.youtube.com/@opulenthomeinteriors5595" class="text-white align-self-center social-link-text"> YouTube</a>
</div>

                      
                    </div>
                </div>
            </div>
            
        </div>
      
    </footer>
    <div class="container-fluid">
        <div class="row py-2 justify-content-center align-items-center" style="background-color:#a8acb1">
            <div class="col-12">
            <h5 class="text-center">BK ONLINE.UK | ALL RIGHTS RESERVED.</h5>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <!--Slick Slider -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.7-beta.24/inputmask.min.js"></script>
    <!-- Script -->
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <!-- owl carousel js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- password-addon init -->
    <script src="{{ asset('js/pages/password-addon.init.js') }}"></script>

    <script>
        var check_code_route = "{{ route('apply.promocode') }}";
        var compare_route = "{{ route('compare_product') }}";
        var APP_URL = "{{ config('app.url') }}";
        var ASSET_URL = "{{ asset('') }}";
        var product_BIU = "{{ asset('imgs/products/') }}";
    </script>
    @stack('scripts')
    <script src="{{ asset('js/frontend.js') }}"></script>

    <?php
    /**
     *  Alert
     */
    $message = '';
    $icon = '';

    if (!empty($errors->all())) {
        $icon = 'error';
        $message = $errors->first();
    } elseif (session()->has('success')) {
        $icon = 'success';
        $message = session()->get('success');
    } elseif (session()->has('error')) {
        $icon = 'error';
        $message = session()->get('error');
    } elseif (!empty($success)) {
        $icon = 'success';
        $message = $success;
    }

    ?>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const images = document.querySelectorAll('.fade-img');
            let currentIndex = 0;

            setInterval(() => {
                images[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.add('active');
            }, 5000); // Change image every 5 seconds
        });

        document.addEventListener('DOMContentLoaded', function () {
            const text = "Premium Quality, Affordable Prices!";
            const typingElement = document.getElementById('typing-effect');
            let index = 0;

            function typeEffect() {
                if (index < text.length) {
                    typingElement.textContent += text.charAt(index);
                    index++;
                    setTimeout(typeEffect, 50); // Adjust the typing speed (50ms per character)
                }
            }

            typeEffect();
        });

        const showMoreButton = $('#showMoreButton');
        const styleCards = $('.style-card');
        let visibleCards = 4; // Number of initially visible cards

        // Hide cards beyond the initial visible count
        styleCards.slice(visibleCards).hide();

        showMoreButton.click(function () {
            // Show 4 more items each time the button is clicked
            let shownCount = 0;
            styleCards.each(function (index) {
                if (index >= visibleCards && shownCount < 4) {
                    $(this).fadeIn(); // Use fadeIn for a smooth transition
                    shownCount++;
                }
            });

            // Update visible count
            visibleCards += shownCount;

            // Hide the button if all items are visible
            if (visibleCards >= styleCards.length) {
                showMoreButton.hide();
            }
        });

        $(document).ready(function() {
            $('.select-2').select2({
                placeholder: "Search",
                dropdownCssClass: 'custom-select-dropdown',
                templateResult: function (data) {
                    if (!data.id) {
                        return data.text; // Return the placeholder text if there's no id
                    }

                    // Retrieve data attributes from the option element
                    var imageUrl = $(data.element).data('product-image');
                    var text = data.text; // Full title
                    var price = $(data.element).data('product-price'); // Product price

                    // Create a custom option with image, text, and price
                    var $result = $(
                        '<div style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">' +
                        '<div style="display: flex; align-items: center; gap: 10px;">' +
                        '<img src="' + imageUrl + '" style="width: 50px; height: 50px; object-fit: cover; border-radius: 0px;" />' +
                        '<span>' + text + '</span>' +
                        '</div>' +
                        '<span style="font-weight: bold;">(£' + price + ')</span>' +
                        '</div>'
                    );

                    return $result;
                },
                templateSelection: function (data) {
                    // Display the selected option text in the dropdown input
                    return data.text;
                }
            });
            
            $(document).on('click', '.style-item', function () {
                var _this = $(this);
                var styleId = _this.attr('data-style-id');
                var _url = "{{route('style_colours')}}";
                $.ajax({
                    url: _url,
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        style_id: styleId
                    },
                    success: function(response) {
                        if (response.success == true) {
                            $('.colour-item').each(function () { 
                                var colourId = $(this).attr('data-colour-id'); // Get the value
                                colourId = parseInt(colourId, 10);

                                $(this).attr('checked', false); // Uncheck the radio button
                                if (colourId) {
                                    console.log(response.colours.includes(colourId));
                                    // Add your comparison logic here, e.g.:
                                    if (response.colours.includes(colourId)) {
                                        // Perform an action if `colourId` matches
                                        $(this).attr('disabled', false); // Enable this element
                                        $(this).siblings('.textcolour').css("color", "black"); // Change text color
                                    } else {
                                        $(this).attr('disabled', true); // Disable this element
                                        $(this).siblings('.textcolour').css("color", "lightgray"); // Change text color
                                    }
                                    checkFilters();
                                }
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", error);
                    }
                });
            });
            
            // Reinitialize Select2 on tab change
            $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
                // Select the dropdown in the currently active tab
                $('.tab-pane.active .select-2').select2({
                    placeholder: "Search",
                    dropdownCssClass: 'custom-select-dropdown',
                    templateResult: function (data) {
                        if (!data.id) {
                            return data.text; // Return the placeholder text if there's no id
                        }

                        // Retrieve data attributes from the option element
                        var imageUrl = $(data.element).data('product-image');
                        var text = data.text; // Full title
                        var price = $(data.element).data('product-price'); // Product price

                        // Create a custom option with image, text, and price
                        var $result = $(
                            '<div style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">' +
                            '<div style="display: flex; align-items: center; gap: 10px;">' +
                            '<img src="' + imageUrl + '" style="width: 50px; height: 50px; object-fit: cover; border-radius: 0px;" />' +
                            '<span>' + text + '</span>' +
                            '</div>' +
                            '<span style="font-weight: bold;">(£' + price + ')</span>' +
                            '</div>'
                        );

                        return $result;
                    }
                });
            });

            // Listen for the collapse event
            $('.collapse-container').on('shown.bs.collapse', function () {
                // Initialize Select2 within the visible collapse section
                $(this).find('.select-2').select2({
                    placeholder: "Search",
                    dropdownCssClass: 'custom-select-dropdown',
                    templateResult: function (data) {
                        if (!data.id) {
                            return data.text; // Return the placeholder text if there's no id
                        }

                        // Retrieve data attributes from the option element
                        var imageUrl = $(data.element).data('product-image');
                        var text = data.text; // Full title
                        var price = $(data.element).data('product-price'); // Product price

                        // Create a custom option with image, text, and price
                        var $result = $(
                            '<div style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">' +
                            '<div style="display: flex; align-items: center; gap: 10px;">' +
                            '<img src="' + imageUrl + '" style="width: 50px; height: 50px; object-fit: cover; border-radius: 0px;" />' +
                            '<span>' + text + '</span>' +
                            '</div>' +
                            '<span style="font-weight: bold;">(£' + price + ')</span>' +
                            '</div>'
                        );

                        return $result;
                    }
                });
            });

            // Define url globally inside the scope of the document ready function
            var url = '';

            $(document).on('click', '.style_type, .colour_type, .assembly_type', function() {
                // Get the latest values of the selected radios inside the event listener
                checkFilters();
            });

            function checkFilters() {
                var selectedStyle = $('input[name="style_name"]:checked').val();
                var selectedColour = $('input[name="colour_name"]:checked').val();
                var selectedAssembly = $('input[name="assembly_name"]:checked').val();

                // Check if all selections are made and none are undefined, null, or empty
                if (selectedStyle && selectedColour && selectedAssembly) {
                    $('#order-now').removeClass('disabled');

                    // Generate the URL with the selected values
                    url = "{{route('orderkitchenbycolour', [':style', ':assembly', ':colour'])}}";
                    url = url.replace(':style', selectedStyle)
                        .replace(':colour', selectedColour)
                        .replace(':assembly', selectedAssembly);
                } else {
                    $('#order-now').addClass('disabled'); // Optionally, disable the button if not all values are selected
                }
            }

            // Redirect to the generated URL when 'order-now' is clicked
            $(document).on('click', '#order-now', function() {
                if (url) {
                    window.location.href = url;
                }
            });

            $('#call-me-at').on('input', function(e) {
                let value = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters

                if (value.length >= 2) {
                    let hours = value.slice(0, 2);
                    let minutes = value.slice(2, 4);

                    // Restrict hours between 00 and 23
                    if (parseInt(hours, 10) > 23) {
                        hours = '23';
                    }

                    // Restrict minutes between 00 and 59
                    if (parseInt(minutes, 10) > 59) {
                        minutes = '59';
                    }

                    value = hours + (minutes ? ':' + minutes : ''); // Add colon between hours and minutes
                }

                $(this).val(value);
            });
        });
    </script>

    <script>
        // document.getElementById('call-me-at').addEventListener('input', function(e) {
        //     let value = e.target.value.replace(/\D/g, ''); // Remove non-numeric characters

        //     if (value.length >= 2) {
        //         let hours = value.slice(0, 2);
        //         let minutes = value.slice(2, 4);

        //         // Restrict hours between 00 and 23
        //         if (parseInt(hours, 10) > 23) {
        //             hours = '23';
        //         }

        //         // Restrict minutes between 00 and 59
        //         if (parseInt(minutes, 10) > 59) {
        //             minutes = '59';
        //         }

        //         value = hours + (minutes ? ':' + minutes : ''); // Add colon between hours and minutes
        //     }

        //     e.target.value = value;
        // });
    </script>
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 5000
        });
        var message = '<?php echo $message; ?>';
        var icon = '<?php echo $icon; ?>';
        if (message.length > 0) {
            Toast.fire({
                icon: icon,
                title: message
            });
        }
    </script>
</body>

</html>