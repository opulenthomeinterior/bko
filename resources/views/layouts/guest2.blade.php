<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Kitchen Design - Buy Kitchen Online')</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="@yield('meta_description', 'Professional kitchen design services with custom solutions')" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="XprnAzefcxw_6ShJcZrtRn21FuOT8qEGzuZRyhMp05I" />
    @yield('meta_tags')

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/icons/logoBko.png') }}" type="image/x-icon" />
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    
    
    <style>
        .floating-cart{
            position: fixed;
            bottom: 20px;
            left: 10px; /* change to left if you want */
            width: 55px;
            height: 55px;
            /* background: #ffb400; */
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            z-index: 9999;
            cursor: pointer;
        }

        .floating-cart a{
            color: inherit;
        }

        .floating-cart:hover{
            transform: scale(1.08);
            transition: 0.2s;
        }
    </style>
    @yield('styles')
    @stack('styles')
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

    <!-- Existing plugins.js that includes jQuery -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('js/frontend.js') }}"></script>
<!-- Initialize Select2 safely -->
<script>
</script>
    @yield('scripts')
    @stack('scripts')
</body>
</html>
