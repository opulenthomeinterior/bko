<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Kitchen Design - Buy Kitchen Online')</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="@yield('meta_description', 'Professional kitchen design services with custom solutions')" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/icons/logoBko.png') }}" type="image/x-icon" />
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @yield('styles')
    @stack('styles')
    <style>
        .header-cart-float {
            position: absolute;
            right: 20px;
            bottom: -22px;
            z-index: 999;

            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.25s ease;
        }

        .header-cart-float.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .cart-btn {
            width: 46px;
            height: 46px;
            background-color: #febd49;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            position: relative;
            box-shadow: 0 6px 14px rgba(0,0,0,0.15);
            transition: all 0.2s ease;
        }

        .cart-btn:hover {
            background-color: #f3a600;
            transform: translateY(-2px);
        }

        .cart-btn i {
            font-size: 18px;
        }

        /* Quantity badge */
        .cart-count {
            position: absolute;
            top: -6px;
            right: -6px;
            background: #000;
            color: #fff;
            font-size: 11px;
            font-weight: 600;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="body-wrapper">
        
        <!-- Header -->
        @include('components.header')
        
        <!-- Main Content -->
        @yield('content')
        
        <!-- Footer -->
        @include('components.footer')
        
    </div>
    <!-- Body main wrapper end -->

    <!-- Preloader -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <!-- JS Files -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('js/frontend.js') }}?v={{ config('app.version') }}"></script>
    @yield('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const cartFloat = document.querySelector('.header-cart-float');

            window.addEventListener('scroll', function () {

                if (window.scrollY > 250) { // adjust if needed
                    cartFloat.classList.add('show');
                } else {
                    cartFloat.classList.remove('show');
                }

            });

        });
    </script>
    @stack('scripts')
</body>
</html>
