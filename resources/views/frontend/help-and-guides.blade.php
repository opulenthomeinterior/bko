<head>
    <style>
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

        .guide-card {
            height: 100%;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--card-shadow);
            margin-bottom: 1rem;
        }
        
        /* @media (hover: hover) {
            .guide-card:hover {
                transform: translateY(-5px);
                transform: scale(0.9);
                box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            }
        } */
        
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

        </style>
</head>

<section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
    <div class="row py-3">
        <div class="col-lg-6 py-lg-0 py-md-3 py-4">
            <h2 class="text-uppercase fw-bolder text-dark">Help & Guides</h2>
        </div>
    </div>
    <div class="row slick-slider">
        <div class="px-3">
            <a href="{{ route('terminology') }}">
                <!-- <div class="card btn btn-outline-warning border-dark">
                    <div class="card-header p-0">
                        <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid"
                            style="max-height: 200px;object-fit: cover;" />
                    </div>

                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h3 class="fw-bold text-dark text-uppercase">Kitchen Terminology</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </div> -->

                {{-- <div class="card component-card  btn btn-outline-warning p-0"> --}}
                <div class="card guide-card border border-warning">
                    <a href="{{ route('terminology') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        
                            <h4 class="text-uppercase card-title">Kitchen Terminology</h4>
                            <div class=" card-text">Having been making, packing and distributing kitchens, we
                                have developed
                                trusted
                                methods to get what it is you need, to where you need it.</div>
                                {{-- <div class="d-flex flex-row justify-content-end"> --}}
                                {{-- <button class="mt-3 btn btn-outline-warning text-white rounded-pill">Read More</button> --}}
                                <button class="btn read-more-btn">Read More</button>
                                {{-- </div> --}}
                        
                    </div>
                </div>
            </a>
        </div>

        <div class="px-3">
            <a href="{{ route('kitchenarrive') }}">
                <!-- <div class="card card btn btn-outline-warning border-dark">
                    <div class="card-header p-0">
                        <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                    </div>

                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h3 class="fw-bold text-dark text-uppercase">How will my kitchen arrive?</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </div> -->
                <div class="card guide-card border border-warning">
                    {{-- <a href="{{ route('terminology') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a> --}}
                    
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        
                            <h4 class="text-uppercase card-title">HOW WILL MY KITCHEN ARRIVE</h4>
                            <div class=" card-text">Having been making, packing and distributing kitchens, we have developed  trusted methods to get what it is you need, to where you need it.</div>
                                {{-- <div class="d-flex flex-row justify-content-end"> --}}
                                {{-- <button class="mt-3 btn btn-outline-warning text-white rounded-pill">Read More</button> --}}
                                <button class="btn read-more-btn">Read More</button>
                                {{-- </div> --}}
                        
                    </div>
                </div>

            </a>
        </div>

        {{-- <div class="px-3">
            <a href="{{ route('faq') }}">
                <!-- <div class="card card btn btn-outline-warning border-dark">
                    <div class="card-header p-0">
                        <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                    </div>

                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h3 class="fw-bold text-dark text-uppercase">Buy Kitchen Online faqs</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </div> -->

                <div class="card component-card  btn btn-outline-warning p-0 border-0">
                    <a href="{{ route('terminology') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" style="width:100%" alt="">
                    <div class="card-body about-card-body p-0">
                        <div class="about-card-content text-start p-3" >
                            <h4 class="text-uppercase fs-3 fw-bold text-white">FITTING GUIDES</h4>
                            <div class="text-light">Having been making, packing and distributing kitchens, we have developed  trusted methods to get what it is you need, to where you need it.</div>
                                <div class="d-flex flex-row justify-content-end">
                                <button class="mt-3 btn btn-outline-warning text-white rounded-pill">Read More</button>
                                </div>
                        </div>
                    </div>
                </div>

            </a>
        </div> --}}

        <div class="px-3">
            <a href="{{ route('fittingguide') }}">
                <!-- <div class="card card btn btn-outline-warning border-dark">
                    <div class="card-header p-0">
                        <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                    </div>

                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h3 class="fw-bold text-dark text-uppercase">Fitting guides</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </div> -->
                <div class="card guide-card border border-warning">
                    <a href="{{ route('fittingguide') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        
                            <h4 class="text-uppercase card-title">FITTING GUIDES</h4>
                            <div class=" card-text">Having been making, packing and distributing kitchens, we have developed  trusted methods to get what it is you need, to where you need it.</div>
                                {{-- <div class="d-flex flex-row justify-content-end"> --}}
                                {{-- <button class="mt-3 btn btn-outline-warning text-white rounded-pill">Read More</button> --}}
                                <button class="btn read-more-btn">Read More</button>
                                {{-- </div> --}}
                        
                    </div>
                </div>

            </a>
        </div>

        <div class="px-3">
            <a href="{{ route('needhelp') }}">
                <!-- <div class="card card btn btn-outline-warning border-dark">
                    <div class="card-header p-0">
                        <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                    </div>

                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h3 class="fw-bold text-dark text-uppercase">Need help measuring?</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </div> -->
                <div class="card guide-card border border-warning">
                    <a href="{{ route('needhelp') }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                    
                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        
                            <h4 class="text-uppercase card-title">NEED HELP MEASURING</h4>
                            <div class=" card-text">Having been making, packing and distributing kitchens, we have developed  trusted methods to get what it is you need, to where you need it.</div>
                                {{-- <div class="d-flex flex-row justify-content-end"> --}}
                                {{-- <button class="mt-3 btn btn-outline-warning text-white rounded-pill">Read More</button> --}}
                                <button class="btn read-more-btn">Read More</button>
                                {{-- </div> --}}
                        
                    </div>
                </div>

            </a>
        </div>

        <div class="px-3">
            <a href="{{ route('designservice') }}">
                <!-- <div class="card card btn btn-outline-warning border-dark">
                    <div class="card-header p-0">
                        <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                    </div>

                    <div class="card-body about-card-body">
                        <div class="about-card-content">
                            <h3 class="fw-bold text-dark text-uppercase">Virtual Design Service</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed trusted methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </div> -->
            </a>
        </div>
    </div>


</section>
  <!-- Start your journey -->
  @include('frontend.start_your_journey')

  <section class="container-fluid bg-white" style="border-bottom: 40px solid #2a6161;">
    </section>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.slick-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                arrows: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true,
                            arrows: true,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                    }
                ]
            });
        });
    </script>
@endpush
