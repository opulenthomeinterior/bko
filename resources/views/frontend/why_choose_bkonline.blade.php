<head>
    <style>
.feature-icon {
        font-size: 3rem;
        color: #ffc107;
        margin-bottom: 1rem;
    }
    .feature-card {
        text-align: center;
        padding: 2rem;
        border: none;
        background-color: #f8f9fa;
    }
    .explore-btn {
        background-color: #ffc107;
        color: black;
        padding: 10px 20px;
        border: none;
        transition: all 0.3s ease;
    }

     /* Responsive adjustments */
     @media (max-width: 768px) {
        .feature-card {
            margin-bottom: 1rem;
        }
        .feature-icon {
            font-size: 2.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .container-features {
            padding: 1rem 0.5rem;
        }
        .feature-card {
            padding: 1rem;
        }
        .feature-icon {
            font-size: 2rem;
        }
    }
    #line1,#line2,#line3 {
            /* Base styles */
            height: 4px;
            width: 100%;
            max-width: 200px;
            background-color: #2A6161;

            /* Responsive sizing */
            margin: 0;
            
            /* Fluid sizing using viewport units and clamp */
            width: clamp(100px, 50vw, 200px);

            /* Responsive considerations */
            /* display: block; */
            
            /* Ensure smooth scaling */
            box-sizing: border-box;
        }

        /* Mobile-first media queries */
        /* Small devices (phones) */
        @media screen and (max-width: 576px) {
            #line1,#line2,#line3 {
                display:none;
                /* width: clamp(80px, 80%, 150px);
                height: 3px; */
            }
        }

        /* Medium devices (tablets) */
        @media screen and (min-width: 577px) and (max-width: 992px) {
            #line1,#line2,#line3 {
                width: clamp(120px, 60%, 180px);
            }
        }

        /* Large devices (desktops) */
        @media screen and (min-width: 993px) {
            #line1,#line2,#line3 {
                width: clamp(150px, 40%, 200px);
            }
        }

        /* High-resolution displays */
        @media screen and (-webkit-min-device-pixel-ratio: 2), 
            screen and (min-resolution: 192dpi) {
            #line1 {
                /* Crisp rendering on high-DPI screens */
                transform: scale(1);
            }
        }

        #lines
        {
            display: flex;
        }
        #line1
        {
            height: 4px;
            width: 200px;
            background-color: #2A6161;
            /* display: inline-block; */
        }
        #line2
        {
            height: 4px;
            width: 200px;
            background-color: #EDA10E;
            /* display: inline-block; */
        }
        #line3
        {
            height: 4px;
            width: 200px;
            background-color: #222222;
        }

        @media(max-width:760px)
        {
            .consultation-step p,
            .suggestion,
            .survey-section-p,
            .custom-card-description,
            .suggestion{
                font-size:20px;
            }
            .max-description
            {
                font-size:18px;
            }
            
           .custom-card
           {
            padding-right:10px;
           }
        }
        </style>

</head>
<div class="mt-5 container container-features">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12">
            <h3 class="text-center mb-2">WHY CHOOSE BKONLINE</h3>
            <div id="lines" class="mb-3">
                <div id="line1"></div>
                <div id="line2"></div>
                <div id="line3"></div>
        
            </div>
        </div>
   </div>
    <div class="row g-4">
        <div class="col-12 col-lg-3 col-sm-6 ">
            <div class="feature-card h-100 d-flex flex-column">
                <div class="text-center">
                    {{-- <div class="feature-icon"><img src="{{ asset('images/24-7.png') }}"/></div> --}}
                    <div class="feature-icon"><i class="fa-solid fa-clock"></i></div>
                    
                    <h3 class="card-title mb-3">24/7 Availability</h3>
                    <p class="card-text max-description suggestion">Customer support & free consultation anytime, anywhere</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-6">
            <div class="feature-card h-100 d-flex flex-column">
                <div class="text-center">
                    <div class="feature-icon">
                        {{-- 🏆 --}}
                        <!-- <img src="{{ asset('images/quality-service.png') }}"/> -->
                        <i class="fa-solid fa-medal"></i>
                    </div>
                    <h3 class="card-title mb-3">Quality Service</h3>
                    <p class="card-text max-description suggestion">Trusted by thousand of customers for premium kitchen designs</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-6">
            <div class="feature-card h-100 d-flex flex-column">
                <div class="text-center">
                    <div class="feature-icon">
                        {{-- 🛠️ --}}
                        <!-- <img src="{{ asset('images/expert-installation.png') }}"/> -->
                        <!-- <i class="fa-solid fa-wrench"></i> -->
                        <i class="fa-solid fa-kitchen-set"></i>
                    </div>
                    <h3 class="card-title mb-3">Expert Installation</h3>
                    <p class="card-text max-description suggestion">Skilled professionals ensure seamless kitchen fitting & installation</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-6">
            <div class="feature-card h-100 d-flex flex-column">
                <div class="text-center">
                    <div class="feature-icon">
                        {{-- 👥 --}}
                        <!-- <img src="{{ asset('images/online-support.png') }}"/> -->
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="card-title mb-3">Premium Quality</h3>
                    <p class="card-text ">Quality that stands the test of time</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-12 col-lg-3 text-center mt-5">
        <a href="{{ route('max_storage') }}" class="w-100 btn explore-btn px-5 mb-5" style="background-color:#febd49;">EXPLORE MORE</a>
    </div>
</div>
</div>




{{-- <section class="container-fluid bg-white py-4">
    <div class="container d-flex flex-column align-items-center">
        <h3 class="border border-warning border-4 p-3"><b class="text-yellow-color2">WHY CHOOSE</b><b class="text-dark"> BK ONLINE</b></h3>
    </div>
</section>

<section class="container bg-white py-4">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 py-5 border border-warning border-2 d-flex flex-column align-items-center">
            <div class="d-flex justify-content-center bg-white p-4 mb-5 border-5 border-warning border" style="border-radius: 50%">
                <img height="80px" width="80px" class="img-fluid" src="{{ asset('images/icons/11.png') }}" alt="" style="filter: invert(0);">
            </div>
            <div class="mb-5">
                <button class="btn btn-outline-warning text-dark border border-warning border-3 fw-bold" style="border-radius: 50px;">
                    24/7 AVAILABILITY
                </button>
            </div>
            <div>
                <p class="text-dark text-center fs-sm">
                    Customer support and consultation anytime, anywhere
                </p>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 py-5 border border-primary border-2 d-flex flex-column align-items-center">
            <div class="d-flex justify-content-center bg-white p-4 mb-5 border-5 border-primary border" style="border-radius: 50%">
                <img height="80px" width="80px" class="img-fluid" src="{{ asset('images/icons/12.png') }}" alt="" style="">
            </div>
            <div class="mb-5">
                <button class="btn btn-outline-primary text-dark border border-primary border-3 fw-bold" style="border-radius: 50px;">
                    QUALITY SERVICE
                </button>
            </div>
            <div>
                <p class="text-dark text-center fs-sm">
                    Trusted by thousands of customers for premium kitchen designs.
                </p>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 py-5 border border-warning border-2 d-flex flex-column align-items-center">
            <div class="d-flex justify-content-center bg-white p-4 mb-5 border-5 border-warning border" style="border-radius: 50%">
                <img height="80px" width="80px" class="img-fluid" src="{{ asset('images/icons/13.png') }}" alt="" style="filter: invert(0);">
            </div>
            <div class="mb-5">
                <button class="btn btn-outline-warning text-dark border border-warning border-3 fw-bold" style="border-radius: 50px;">
                    EXPERT INSTALLATION
                </button>
            </div>
            <div>
                <p class="text-dark text-center fs-sm">
                    Skilled professionals ensure seamless kitchen fitting and installation.
                </p>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 py-5 border border-primary border-2 d-flex flex-column align-items-center">
            <div class="d-flex justify-content-center bg-white p-4 mb-5 border-5 border-primary border" style="border-radius: 50%">
                <img height="80px" width="80px" class="img-fluid" src="{{ asset('images/icons/14.png') }}" alt="" style="">
            </div>
            <div class="mb-5">
                <button class="btn btn-outline-primary text-dark border border-primary border-3 fw-bold" style="border-radius: 50px;">
                    FREE CONSULTATION
                </button>
            </div>
            <div>
                <p class="text-dark text-center fs-sm">
                    Personalized guidance without any upfront cost.
                </p>
            </div>
        </div>
    </div>
</section> --}}