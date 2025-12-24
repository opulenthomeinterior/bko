@extends('layouts.guest2')
@section('content')
    <head>
    <title>Help and Guides </title>
    <style>
          :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #f39c12;
            --light-bg: #f8f9fa;
            --card-shadow: 0 4px 12px rgba(0,0,0,0.08);
            --transition: all 0.3s ease;
        }
        
    .backgroundimage {
        background-image: url("{{ asset('images/order-component.jpg') }}");
        background-size: cover;
        background-position: center center;
    }
        .read-more-btn
        {
            /* background-color: #d8a13e; */
            border: 1px solid #d8a13e;
            color:black;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        
        .read-more-btn:hover
        {
            background-color:#d8a13e;
            transform: scale(1.1);
        }
        body {
            /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
            color: #333;
            background-color: var(--light-bg);
        }
        
        .breadcrumb {
            background: transparent;
            padding: 0.5rem 0;
            margin-bottom: 0.5rem;
            flex-wrap: wrap;
        }
        
        .breadcrumb-item a {
            color: var(--accent-color);
            text-decoration: none;
        }
        
        .page-header {
            /* background-color: white; */
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            /* box-shadow: var(--card-shadow); */
            text-align: center;
        }
        
        @media (min-width: 768px) {
            .page-header {
                padding: 2.5rem;
                margin-bottom: 2rem;
            }
            
            .breadcrumb {
                padding: 1rem 0;
                margin-bottom: 1rem;
            }
        }
        
        .page-header h1 {
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
            font-size: 1.75rem;
        }
        
        @media (min-width: 768px) {
            .page-header h1 {
                font-size: 2.25rem;
                margin-bottom: 1rem;
            }
        }
        
        .accent-text {
            color: var(--accent-color);
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        @media (min-width: 768px) {
            .accent-text {
                font-size: 1rem;
            }
        }
        
        .header-description {
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
            font-size: 0.9rem;
        }
        
        @media (min-width: 768px) {
            .header-description {
                font-size: 1rem;
            }
        }
        
        .guide-card {
            height: 100%;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--card-shadow);
            margin-bottom: 1rem;
        }
        
        @media (hover: hover) {
            .guide-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            }
        }
        
        .guide-card .card-img-top {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        
        @media (min-width: 576px) {
            .guide-card .card-img-top {
                height: 200px;
            }
        }
        
        @media (min-width: 992px) {
            .guide-card .card-img-top {
                height: 220px;
            }
        }
        
        .guide-card .card-body {
            padding: 1.25rem;
        }
        
        @media (min-width: 768px) {
            .guide-card .card-body {
                padding: 1.5rem;
            }
        }
        
        .guide-card .card-title {
            color: var(--secondary-color);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.75rem;
        }
        
        @media (min-width: 768px) {
            .guide-card .card-title {
                font-size: 1.2rem;
                margin-bottom: 1rem;
            }
        }
        
        .guide-card .card-text {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 1.25rem;
        }
        
        @media (min-width: 768px) {
            .guide-card .card-text {
                font-size: 0.95rem;
                margin-bottom: 1.5rem;
            }
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 6px;
            padding: 0.4rem 1.25rem;
            font-weight: 500;
            transition: var(--transition);
            font-size: 0.9rem;
        }
        
        @media (min-width: 768px) {
            .btn-outline-primary {
                padding: 0.5rem 1.5rem;
                font-size: 1rem;
            }
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .btn-warning {
            border-radius: 6px;
            padding: 0.4rem 1.25rem;
            font-weight: 500;
            transition: var(--transition);
            font-size: 0.9rem;
        }
        
        @media (min-width: 768px) {
            .btn-warning {
                padding: 0.5rem 1.5rem;
                font-size: 1rem;
            }
        }
        
        .free-tag {
            background-color: var(--accent-color);
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-left: 3px;
            display: inline-block;
        }
        
        @media (min-width: 768px) {
            .free-tag {
                padding: 3px 8px;
                font-size: 0.8rem;
                margin-left: 5px;
            }
        }
        
        /* Additional responsive adjustments */
        .row {
            --bs-gutter-x: 1rem;
        }
        
        @media (min-width: 768px) {
            .row {
                --bs-gutter-x: 1.5rem;
            }
        }
        
        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        @media (min-width: 576px) {
            .container {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }
    </style>
</head>

    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-1 ltn__breadcrumb-color-white--- pt-35 pb-35 backgroundimage mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title text-white p-3 w-75" style="background-color: #000000a1">Help & Guides</h1>
                        <!-- <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}" class="text-white"><span class="text-dark"><i class="fas fa-home text-white"></i></span> Home</a></li>
                                <li class="text-white">Order Components</li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3 py-md-4">
       
        
        <!-- Guide Cards - First Row -->
        <div class="row g-3 g-md-4 mb-3 mb-md-4">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card guide-card">
                    <img src="https://bkonline.uk/public/images/order-component.jpg" alt="Kitchen design" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">KITCHEN TERMINOLOGY</h5>
                        <p class="card-text">Confused by kitchen terms? Our simple guide explains key terms like plinths, cornices, and end panels to help you plan with confidence.

</p>
                        <a href="{{route('terminology')}}" class="btn read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card guide-card">
                    <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063206_681709e62cd48-shaker(1).png" alt="Kitchen design" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">HOW WILL MY KITCHEN ARRIVE</h5>
                        <p class="card-text">Discover how your kitchen will be delivered—whether flat-pack or rigid—with secure packaging and trusted couriers.</p>
                        <a href="{{route('kitchenarrive')}}" class="btn read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card guide-card">
                    <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063345_68170a490b56f-slabedge(2).png" alt="Kitchen design" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">FITTING GUIDES</h5>
                        <p class="card-text">Need help installing your kitchen? Explore our step-by-step video guides and downloadable resources for smooth fitting.</p>
                        <a href="{{route('fittingguide')}}" class="btn read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
        
            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card guide-card">
                    <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063253_68170a1592a60-shaker22(1).png" alt="Kitchen design" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Buy Kitchen Online FAQS</h5>
                        <p class="card-text">Got questions? Our FAQ section covers everything from payment options to returns, helping you shop for your dream kitchen with ease.</p>
                        <a href="{{route('faq')}}" class="btn read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card guide-card">
                    <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063733_68170b2d90a9e-slabedgepainted(1).png" alt="Kitchen design" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">ABOUT US</h5>
                        <p class="card-text">Experience premium quality at wholesale prices—backed by expert consultations and fast, hassle-free service. Get to know us more.</p>
                        <a href="{{route('about')}}" class="btn read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card guide-card">
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" alt="Kitchen design" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">NEED HELP MEASURING</h5>
                        <p class="card-text">Struggling with measurements? We help you plan everything perfectly, and ensure a smooth installation. Get expert support for accurate sizing and layout.</p>
                        <a href="{{route('needhelp')}}" class="btn read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
