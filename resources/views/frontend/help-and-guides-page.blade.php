<x-guest-layout>
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
            background-color: white;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: var(--card-shadow);
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
    {{-- <section class="container-fluid px-lg-5 py-4 px-md-3 px-3 bg-light">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder">
                    HELP & GUIDES
                </h1>
                <h3 class="text-uppercase py-2 color-yellow">FIND OUT EVERYTHING YOU NEED TO KNOW </h3>
                <h4 class="text-dark pt-1">
                    At Buy Kitchen Online we want to make ordering a trade kitchen as easy as possible. From offering a <span class="color-yellow">FREE</span>
                    Virtual Design Kitchen Service to providing ‘How To Videos’ we are constantly looking at ways to
                    support you.
                    </h5>
            </div>
        </div>
    </section> --}}

    <div class="container py-3 py-md-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home me-1"></i>HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">HELP & GUIDES</li>
            </ol>
        </nav>
        
        <!-- Header Section -->
        <div class="page-header">
            <h1>HELP & GUIDES</h1>
            <p class="accent-text mb-2 mb-md-3">FIND OUT EVERYTHING YOU NEED TO KNOW!</p>
            <p class="header-description">
                At Buy Kitchen Online we want to make ordering a trade kitchen as easy as possible. From offering a 
                <span class="free-tag">FREE</span> Virtual Design Kitchen Service to providing 'How To Videos' we are constantly looking at ways to support you.
            </p>
        </div>
        
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


    {{-- <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <div class="row py-3">
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card  btn btn-outline-warning p-0">
                    <a href="{{ route('terminology') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <!-- <div class="card-header p-0 custom-card-img"
                        style=" 
                        background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); 
                        min-height: 300px;
                        background-size: cover;
                        background-position: center center;
                        background-repeat: no-repeat;">
                    
                    </div> -->
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" style="width:100%" alt="">
                    <div class="card-body about-card-body p-0">
                        <div class="about-card-content text-start p-3" >
                            <h4 class="text-uppercase fs-3 fw-bold text-white">Kitchen Terminology</h4>
                            <div class="text-light">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                                <div class="d-flex flex-row justify-content-end">
                                <button class="mt-3 btn btn-outline-warning text-white rounded-pill">Read More</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card  btn btn-outline-warning p-0">
                    <a href="{{ route('terminology') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <!-- <div class="card-header p-0 custom-card-img"
                        style=" 
                        background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); 
                        min-height: 300px;
                        background-size: cover;
                        background-position: center center;
                        background-repeat: no-repeat;">
                    
                    </div> -->
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" style="width:100%" alt="">
                    <div class="card-body about-card-body p-0">
                        <div class="about-card-content text-start p-3" >
                            <h4 class="text-uppercase fs-3 fw-bold text-white">Kitchen Terminology</h4>
                            <div class="text-light">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                                <div class="d-flex flex-row justify-content-end">
                                <button class="mt-3 btn btn-outline-warning text-white rounded-pill">Read More</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card  btn btn-outline-warning p-0">
                    <a href="{{ route('terminology') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <!-- <div class="card-header p-0 custom-card-img"
                        style=" 
                        background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); 
                        min-height: 300px;
                        background-size: cover;
                        background-position: center center;
                        background-repeat: no-repeat;">
                    
                    </div> -->
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" style="width:100%" alt="">
                    <div class="card-body about-card-body p-0">
                        <div class="about-card-content text-start p-3" >
                            <h4 class="text-uppercase fs-3 fw-bold text-white">Kitchen Terminology</h4>
                            <div class="text-light">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                                <div class="d-flex flex-row justify-content-end">
                                <button class="mt-3 btn btn-outline-warning text-white rounded-pill">Read More</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card  btn btn-outline-warning p-0">
                    <a href="{{ route('terminology') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <!-- <div class="card-header p-0 custom-card-img"
                        style=" 
                        background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); 
                        min-height: 300px;
                        background-size: cover;
                        background-position: center center;
                        background-repeat: no-repeat;">
                    
                    </div> -->
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" style="width:100%" alt="">
                    <div class="card-body about-card-body p-0">
                        <div class="about-card-content text-start p-3 yellow-bg" >
                            <h4 class="text-uppercase fs-3 fw-bold text-dark">Kitchen Terminology</h4>
                            <div class="text-dark">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                                <div class="d-flex flex-row justify-content-end">
                                <button class="mt-3 btn btn-outline-dark text-dark rounded-pill">Read More</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card  btn btn-outline-warning p-0">
                    <a href="{{ route('terminology') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <!-- <div class="card-header p-0 custom-card-img"
                        style=" 
                        background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); 
                        min-height: 300px;
                        background-size: cover;
                        background-position: center center;
                        background-repeat: no-repeat;">
                    
                    </div> -->
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" style="width:100%" alt="">
                    <div class="card-body about-card-body p-0">
                        <div class="about-card-content text-start p-3 yellow-bg" >
                            <h4 class="text-uppercase fs-3 fw-bold text-dark">Kitchen Terminology</h4>
                            <div class="text-dark">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                                <div class="d-flex flex-row justify-content-end">
                                <button class="mt-3 btn btn-outline-dark text-dark rounded-pill">Read More</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card  btn btn-outline-warning p-0">
                    <a href="{{ route('terminology') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <!-- <div class="card-header p-0 custom-card-img"
                        style=" 
                        background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); 
                        min-height: 300px;
                        background-size: cover;
                        background-position: center center;
                        background-repeat: no-repeat;">
                    
                    </div> -->
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" style="width:100%" alt="">
                    <div class="card-body about-card-body p-0">
                        <div class="about-card-content text-start p-3 yellow-bg" >
                            <h4 class="text-uppercase fs-3 fw-bold text-dark">Kitchen Terminology</h4>
                            <div class="text-dark">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                                <div class="d-flex flex-row justify-content-end">
                                <button class="mt-3 btn btn-outline-dark text-dark rounded-pill">Read More</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card position-relative btn btn-outline-warning">
                    <a href="{{ route('kitchenarrive') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <div class="card-header p-0"
                        style="background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); min-height: 300px;background-size: cover;background-position: center center;background-repeat: no-repeat;">
                    
                    </div>
                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h4 class="text-uppercase fs-3 fw-bold text-dark">How will my kitchen arrive</h4>
                            <div class="text-dark">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card position-relative btn btn-outline-warning">
                    <a href="{{ route('fittingguide') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <div class="card-header p-0"
                        style="background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); min-height: 300px;background-size: cover;background-position: center center;background-repeat: no-repeat;">
                    </div>
                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h4 class="text-uppercase fs-3 fw-bold text-dark">Fitting Guides</h4>
                            <div class="text-dark">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card position-relative btn btn-outline-warning">
                    <a href="{{ route('faq') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <div class="card-header p-0"
                        style="background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); min-height: 300px;background-size: cover;background-position: center center;background-repeat: no-repeat;">
                    </div>
                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h4 class="text-uppercase fs-3 fw-bold text-dark">Buy Kitchen Online Faqs</h4>
                            <div class="text-dark">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card position-relative btn btn-outline-warning">
                    <a href="{{ route('about') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <div class="card-header p-0"
                        style="background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); min-height: 300px;background-size: cover;background-position: center center;background-repeat: no-repeat;">
                    </div>
                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h4 class="text-uppercase fs-3 fw-bold text-dark">About us</h4>
                            <div class="text-dark">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card component-card position-relative btn btn-outline-warning">
                    <a href="{{ route('needhelp') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    <div class="card-header p-0"
                        style="background-image: url('{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}'); min-height: 300px;background-size: cover;background-position: center center;background-repeat: no-repeat;">
                    </div>
                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h4 class="text-uppercase fs-3 fw-bold text-dark">Need help measuring?</h4>
                            <div class="text-dark">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

    </section> --}}

</x-guest-layout>
