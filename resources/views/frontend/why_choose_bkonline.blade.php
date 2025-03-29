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
                    <div class="feature-icon"><img src="{{ asset('images/24-7.png') }}"/></div>
                    <h5 class="card-title mb-3">24/7 Availability</h5>
                    <p class="card-text">Customer support & Consultation anytime, anywhere</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-6">
            <div class="feature-card h-100 d-flex flex-column">
                <div class="text-center">
                    <div class="feature-icon">
                        {{-- 🏆 --}}
                        <img src="{{ asset('images/quality-service.png') }}"/>
                    </div>
                    <h5 class="card-title mb-3">Quality Service</h5>
                    <p class="card-text">Trusted by thousand of customers for premium kitchen designs</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-6">
            <div class="feature-card h-100 d-flex flex-column">
                <div class="text-center">
                    <div class="feature-icon">
                        {{-- 🛠️ --}}
                        <img src="{{ asset('images/expert-installation.png') }}"/>
                    </div>
                    <h5 class="card-title mb-3">Expert Installation</h5>
                    <p class="card-text">Skilled professionals ensure seamless kitchen fitting & installation</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-6">
            <div class="feature-card h-100 d-flex flex-column">
                <div class="text-center">
                    <div class="feature-icon">
                        {{-- 👥 --}}
                        <img src="{{ asset('images/online-support.png') }}"/>

                    </div>
                    <h5 class="card-title mb-3">Free Consultation</h5>
                    <p class="card-text">Personalized guidance without any upfront cost</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <a class="btn explore-btn px-5 mb-5" style="background-color:#febd49;">EXPLORE MORE</a>
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