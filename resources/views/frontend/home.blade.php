<x-guest-layout>
    <head>
    @section('meta_tags')
    <title>Kitchen Design Services | Bespoke & Affordable Kitchens | BKO</title>
    <!-- testing -->
    <meta name="description" content="Buy Kitchen Online is here with Affordable & Custom kitchen units in London, in J Pull, Shaker, Slab, MFC & True Handleless styles. Book Consultation Now.">
    <!-- <meta name="description" content="Customize your Dream Kitchen with our Bespoke Kitchen Units in London. Our Bespoke Designer Kitchens include Slab, Shaker, True handleless & J-pull Styles."> -->
    <link rel="canonical" href="https://bkonline.uk/" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>


        .grid-box-gray-color
        {
            background-color:#fff;
        }
      

        #line1,#line2,#line3 {
            /* Base styles */
            height: 4px;
            width: 100%;
            max-width: 200px;
            background-color: #2A6161;

            /* Responsive sizing */
            /* margin: 0 auto; Center the line */
            
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





        .catalogue-bg {
            background-color: #f2f4f5;
        }
        /*
        .catalogue-image {
            max-width: 100%;
            height: auto;
        }
        .register-btn {
            background-color: #ffc107;
            border-color: #ffc107;
            color: black;
        } */

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
        .survey-benefit {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }
        .survey-benefit:hover {
            transform: scale(1.05);
        }
        .survey-benefit img {
            max-width: 60px;
            margin-bottom: 15px;
        }
        .cta-button {
            font-weight: bold;
            padding: 12px 24px;
        }

        .consultation-section {
            background-color: #f8f9fa;
            padding: 4rem 0;
            text-align: center;
        }
        .consultation-step {
            margin-bottom: 2rem;
            padding: 1.5rem;
            /* background-color: white; */
            /* border-radius: 10px; */
            /* box-shadow: 0 4px 6px rgba(0,0,0,0.1); */
            /* transition: transform 0.3s ease; */
        }
        /* .consultation-step:hover {
            transform: translateY(-10px);
        } */
        .icon-circle {
            width: 100px;
            height: 100px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            /* transition: transform 0.3s ease; */
        }
        /* .consultation-step:hover .icon-circle {
            transform: scale(1.1);
        } */
        .icon-circle i {
            color: #ffc107;
            font-size: 42px;
        }
        .cta-button {
            padding: 12px 24px;
            font-size: 1.1rem;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .consultation-step {
                margin-bottom: 1.5rem;
                padding: 1rem;
            }
            .icon-circle {
                width: 80px;
                height: 80px;
            }
            .icon-circle i {
                font-size: 32px;
            }
        }

        .benefit-icon {
            color: #ffa500;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .survey-section {
            background-color: #f8f9fa;
            padding: 4rem 0;
        }
        .order-component-section
        {
            background-image: url('{{ asset('/images/order-component-bg.png') }}');
            background-size: cover;
            background-repeat:no-repeat;
            background-position:center;
        }
        #dots {
            position: relative; /* stay fixed even if you scroll */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0; /* send to back */
            pointer-events: none; /* so it doesn't block clicks */
        }
        #stylesContainer {
            position: absolute;
            z-index: 1; /* bring content above canvas */
        }
    </style>
    @endsection
    </head>
    <!-- <section class="container-fluid bg-white px-lg-5 py-3 px-md-3 px-3 mt-4" style="border-top: 3px solid #ebc266; border-right: 3px solid #ebc266">
        <div class="row">
            <div class="col-12 text-center">
                <h1 id="typing-effect" class="fs-4 text-dark text-uppercase fw-bolder unique-font">
                </h1>
            </div>
        </div>
    </section> -->

    <!-- <section class="container-fluid px-lg-5 py-3 px-md-3 px-3 bg-white mx-0" style="border-bottom: 1px solid #fff; border-top: 1px solid #fff; border-right: 3px solid #ebc266">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="fs-3 text-dark text-uppercase fw-bolder unique-font">
                    BK Online Kitchens - Elevate Your Kitchen, Elevate Your Lifestyle
                </h1>
            </div>
        </div>
    </section> -->

    <!-- <section class="container-fluid px-lg-5 px-md-3 px-3 py-lg-5 py-3" style="background-color: #f0f0f0;">
        <div class="row">
            <div class="col-lg-6 text-center">
                <h2 class="text-uppercase text-dark fw-bolder" style="font-size: 4rem">20% OFF </h2>
                <h3 class="text-uppercase fw-bolder text-dark">GET 20% OFF ALL ORDERS WHEN YOU OPEN A TRADE ACCOUNT</h3>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li class="fw-bold py-1"><i class="ri-check-line"></i>
                        Kitchen despatched in 48 hours
                    </li>
                    <li class="fw-bold py-1"><i class="ri-check-line"></i>
                        Over 30 years manufacturing in the UK
                    </li>
                    <li class="fw-bold py-1"><i class="ri-check-line"></i>
                        Standard or made to measure
                    </li>
                    <li class="fw-bold py-1"><i class="ri-check-line"></i>
                        25 years quality guarantee on all cabinets
                    </li>
                    <li class="fw-bold py-1"><i class="ri-check-line"></i>
                        FIRA Gold Certified
                    </li>
                </ul>
            </div>
        </div>
    </section> -->

    <section class="container-fluid position-relative hero-section d-flex align-items-center" style="min-height: 100vh; overflow: hidden; border-top: 3px solid #ebc266; border-bottom: 3px solid #ebc266;">
        
        <!-- Background Image -->
        <div class="image-container">
            <img src="{{ asset('images/homepage.jpeg') }}" alt="Image 1" class="fade-img active">
            <img src="{{ asset('images/shaker-22.jpeg') }}" alt="Image 2" class="fade-img">
            <img src="{{ asset('images/True-Handleless-SuperGloss-Graphite.jpg') }}" alt="Image 3" class="fade-img">
            <img src="{{ asset('images/slab.jpeg') }}" alt="Image 4" class="fade-img">
        </div>

        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center main-image-content align-items-center" style="z-index: 1000;">
                <!-- Left Content -->
                <div class="col-md-8 text-start text-white px-4" style="z-index: 100;">
                    <div class="ps-4 animated slide-top">
                        <h6 class="text-yellow-color fw-bold text-center" style="letter-spacing:8px;">BUY KITCHEN ONLINE</h6>
                    </div>
                    {{-- <div class="text-green-color ps-3" style="border-left: 3px solid; margin-bottom: 10px"> --}}
                            <div class="text-green-color ps-3">
                                <h1 class="text-white animated slide-right text-center">ELEVATE YOUR KITCHEN</h1>
                                <h1 class="text-yellow-color fw-bold animated slide-left text-center">ELEVATE YOUR LIFESTYLE</h1>
                                <p class="text-white animated slide-bottom text-center">We specialize in virtually designing and delivering your dream kitchen that complements your needs and style. Whether you want to build a new kitchen or need to replace a single component, we are always at your service.</p>
                            </div>
                            <div class="container d-flex flex-column align-items-center text-center">
                                <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 animated slide-top mx-auto" style="margin-top: 50px;">
                                    <h4 class="unique-font text-white px-3 py-1 rounded-gradient-border w-100" id="typing-effect"></h4>
                                </div>
                                <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 animated slide-bottom mt-4 mx-auto">
                                    <a href="{{ route('orderkitchen') }}" class="btn w-100 btn-md bg-yellow-color2 text-white text-uppercase border-green-color" style="border-radius: 50px;">
                                        Order Now
                                    </a>
                                </div>
                            </div>
                    {{-- </div> --}}
                </div>
                <div class="left-shadow"></div>
            </div>
        </div>
    </section>

    <!-- ORDER KITCHEN-->
    <section class="container py-5 bg-white dots-background-section" style="position: relative; width: 100% !important; overflow: hidden">
        <canvas id="dots" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></canvas>
        <div class="row mt-4" id="stylesContainer" style="position: relative; z-index: 2">
            <div class="col-lg-7 align-self-center overflow-hidden bg-light py-4">
                <div class="row">
                    <h3 class="text-uppercase fw-bolder text-dark mb-4">ORDER KITCHEN</h3>
                </div>
                <div class="row">
                    @foreach ($styles as $key => $style)
                        <div class="col-md-4 card border-0 my-4 bg-light">
                            <div class="card-body" style="box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                                <div class="col-12">
                                    <img src="{{asset('imgs/styles/'.$style->image_path)}}" class="img-fluid">
                                    <h4 class="card-title text-uppercase fw-bold text-center p-2 {{ $key % 2 == 0 ? 'bg-green-color text-yellow-color2' : 'bg-yellow-color2 text-dark' }}">
                                        {{$style->name}}
                                        <br>
                                        <a href="{{ route('orderkitchenbyname', $style->slug) }}" class="text-center text-white m-0 text-decoration-underline" style="font-size: 10px">See our range >

                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- <div class="carousel main-carousel-banner-01 owl-carousel clients mb-0 p-0"
                    data-margin="30"
                    data-loop="true"
                    data-dots="false"
                    data-autoplay="true"
                    data-autoplay-timeout="3000" 
                    data-responsive='{"0":{"items": "3"}, "768":{"items": "4"}, "992":{"items": "4"}, "1200":{"items": "4"}, "1400":{"items": "4"}}'>
                    @foreach ($styles as $key => $style)
                        <div class="item">
                            <div class="carousel-card card border border-warning" style="box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                                <div class="card-body carousel-card-body p-0 m-0">
                                    <div class="col-12">
                                        <img src="{{asset('imgs/styles/'.$style->image_path)}}" class="img-fluid">
                                        <h4 class="card-title text-uppercase fw-bold text-center m-0 p-2 {{ $key % 2 == 0 ? 'bg-green-color text-yellow-color2' : 'bg-yellow-color2 text-dark' }}">
                                            {{$style->name}}
                                            <br>
                                            <a href="{{ route('orderkitchenbyname', $style->slug) }}" class="text-center text-white m-0 text-decoration-underline" style="font-size: 10px">See our range >

                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> -->
            </div>
            {{-- <div class = "col-md-5 col-12 "> --}}
            <div class = "align-self-center col-xl-5 col-lg-5 col-md-8 col-sm-12 col-12 ">


                <form method="POST" action="{{ route('contact_us_inquiry') }}" class="border border-warning p-4 my-4 mt-md-0">
                    @csrf
                    <div>
                        <div class="d-block">
                            <div class="text-center text-dark fw-bold">FOR FREE SURVEY AND QUOTE <span class="text-warning"> CALL US NOW!</span></div>
                            <div class="my-2 d-flex justify-content-center">
                                <a href="tel:02080505605" class="btn btn-warning text-decoration-underline text-center text-dark fs-4 fw-bold">
                                <i class="bi pt-2 me-2 bi-phone text-dark"></i> 
                                    020 805 05605
                                </a>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-dark text-center fw-bold">OR</h6>
                    <hr class="border border-dark">

                    
                    <h4 id="blinking-text" class="bg-warning text-black  fw-bold text-center py-2 rounded-pill">
                        Book a free consultation now!
                    </h4>
                    <hr class="border border-dark">
                    <div class="mb-3">
                        <input type="text" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <input type="email" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <input type="number" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="phone" id="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-white py-2 px-3  text-end fw-bold" style="background-color:#2a6161;" >Call US AT</label>
                        <input type="datetime-local" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="call_time">
                    </div>
                    <div class="mb-3">
                        <textarea name="message" id="message" name="message" rows="3" class="w-100 rounded-0 border border-dark form-control text-dark" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class=" btn py-2 px-4 rounded-0 fw-bolder text-uppercase text-white" style="background-color:#2a6161;">Submit</button>
                </form>

                 {{-- Right Form 
                <div class="d-flex justify-content-center my-4 mt-md-0">
                    <form method="POST" action="{{ route('contact_us_inquiry') }}" class="w-100 text-yellow-color2 p-4" style="border: 3px solid; border-radius: 25px; background-color: rgba(0, 0, 0, 0.6)">
                        @csrf
                        <h3 class="text-white text-center">For free survey, <b class="text-yellow-color2">CALL US NOW!</b></h3>
                        <div class="text-center">
                            <i class="bi bi-phone text-white"></i> <a href="tel:02080505605" class="text-decoration-underline text-white fs-4 fw-bold">020 805 05605</a>
                        </div>
                        <hr class="border-warning">
                        <h6 class="text-white text-center fw-bold">OR</h6>
                        <h4 class="bg-green-color text-white text-center py-2 rounded-5">BOOK A FREE CONSULTATION NOW!</h4>
                        <hr class="border-warning">
                        <input type="text" class="form-control border-warning mb-3" name="name" placeholder="Enter your name">
                        <input type="email" class="form-control border-warning mb-3" name="email" placeholder="Enter your email">
                        <label for="" class="text-white bg-yellow-color2 p-2">Call me at</label>
                        <input type="number" class="form-control border-warning mb-3" name="phone" placeholder="Enter your phone number">
                        <input type="datetime-local" class="form-control border-warning mb-3" name="call_time">
                        <textarea name="message" rows="3" class="form-control border-warning mb-3" placeholder="Enter your message"></textarea>
                        <button type="submit" class="btn btn-warning bg-yellow-color2 fw-bolder text-uppercase w-100">Submit</button>
                    </form>
                </div> --}}
            </div>
        </div>
        <!-- <div class="row mt-3">
            <div class="col-12 text-center">
                <button id="showMoreButton" class="btn btn-warning px-4 py-2 text-dark" style="border-radius: 20px;">Show More</button>
            </div>
        </div> -->
    </section>

    <!-- ORDER COMPONENT-->
    <div class="container-fluid position-relative px-0 py-5  order-component-section" style="background-color:#F2F4F5;">
        {{-- <img class="img-fluid position-absolute" src="{{ asset('/images/order-component-bg.png') }}"/> --}}
        <section class="container py-5" style="width: 100%; ">
        <div class="row">
            <h3 class="text-uppercase fw-bolder text-white text-center py-3">ORDER COMPONENTS</h3>
        </div>
        <div class="row  justify-content-center">
            @php
            $categories = \App\Models\Category::where('parent_category_id', null)->where('status', 1)->get();
            @endphp
          
            {{-- <div style="" class="order-component-slider position-absolute  d-flex order-component-scroller" style="max-width: 1900px; overflow-x: scroll"> --}}
            <div style="" class="order-component-slider position-absolute w-75  d-flex order-component-scroller" style="max-width: 1900px; overflow-x: scroll">
                @foreach($categories as $category)
                <div class="d-flex col-lg-2 card border-warning align-items-center justify-content-center" style="border-radius: 8px; margin: 0px 20px; padding: 15px 50px">
                    <div class="text-center">
                        <a class="text-dark btn d-flex align-items-center justify-content-center" href="{{route('ordercomponentbyname', [$category->slug])}}">
                        {{-- <a class="text-dark btn btn-outline-warning d-flex align-items-center justify-content-center" style="height: 100px; width: 100px; border-radius: 100%; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);" href="{{route('ordercomponentbyname', [$category->slug])}}"> --}}
                            <div class="card-old "> 
                                <div class="card-body d-flex">
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    {{--
                                    @if($category->slug == 'doors')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    @elseif($category->slug == 'handles')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    @elseif($category->slug == 'accessories')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    @elseif($category->slug == 'sinks')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    @elseif($category->slug == 'internals')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    @elseif($category->slug == 'taps')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    @elseif($category->slug == 'worktops')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    @elseif($category->slug == 'upstands')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    @elseif($category->slug == 'breakfast-bars')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    @elseif($category->slug == 'appliances')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                    </div>
                                    @endif
                                    --}}
                                </div>
                            </div>
                        </a>
                        <h5 class="cat-card-title fw-bold mt-2 text-dark">{{Str::limit($category->name, 13)}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    </div>
    <div class ="container-fluid bg-white mt-5">
        <section class="consultation-section bg-white">
            <div class="container bg-white">
                <h2 class="mb-2 text-black">EXPERT VIRTUAL DESIGN CONSULTATION</h2>
                <div class = "row mb-1 justify-content-center">
                    <div class="col-6">
                        <div id="lines" class="mb-3">
                            <div id="line1"></div>
                            <div id="line2"></div>
                            <div id="line3"></div>
                        
                    </div>
                    </div>
                </div>
                <p class="lead mb-5">Too busy for in-person meeting? We handle everything virtually, so you can stay on schedule. At BK Online, we offer the ideal virtual kitchen design services and consultation, where our designers collaborate with you to create a kitchen tailored to your available space and preferences.</p>
                
                <h4 class="mb-4">HOW IT WORKS</h4>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <i class="bi bi-card-list"></i>
                            </div>
                            <h3>01. Appointment Booking</h3>
                            <p>Start by booking an appointment with our design experts.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <h3>02. Sharing Preferences</h3>
                            <p>You share your space details, style preferences, and budget.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <h3>03. Design Creation & Approval</h3>
                            <p>We craft a design for your kitchen specific to your needs in record time.</p>
                        </div>
                    </div>
                </div>
                
                <div class="">
                    <p class="mb-2">Don't let time hold you back.</p>
                    <button href="#" class="btn btn-lg cta-button rounded-0" style="background-color:#ffc107;" data-bs-toggle="modal" data-bs-target="#exampleModal">SCHEDULE YOUR FREE CONSULTATION NOW!</button>
                </div>
            </div>
        </section>
    </div>

    @if (count(\App\Models\InfoGraphic::get()) > 0)
    <section class="container-fluid px-lg-5 px-md-3 px-3 py-lg-5 py-3 bg-white" style="background-color: #f0f0f0; border-bottom: 3px solid #ebc266; border-right: 3px solid #ebc266">
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase fw-bolder text-dark text-center">ABOUT US</h3>
            </div>
            <!-- <div class="col-lg-5 col-md-5 col-sm-6 col-12 mt-4">
                <img src="{{ asset('images/homepage.jpeg') }}" class="img-fluid" style="border-radius: 20px;" />
            </div>
            <div class="col-lg-7 col-md-7 col-sm-6 col-12 mt-4 text-dark">
                <p>
                    BK Online is a premier provider of complete kitchen solutions, specialising in the design and delivery of ready-made kitchens, rigid kitchen units, and components in slab, shaker, or J-pull styles. Serving London and the surrounding areas, we pride ourselves on delivering showroom-quality kitchens directly to your door.
                </p>
                <p>
                    At BK Online, we are committed to crafting every kitchen with precision and care, ensuring that our customers receive only the highest quality products. Our years of experience in kitchen design and manufacturing allow us to offer a seamless and stress-free ordering process, from initial design consultation to final delivery.
                </p>
                <p>
                    Operating from state-of-the-art facilities, our skilled workforce uses the latest sustainable manufacturing techniques to create kitchens that not only meet but exceed our clients' expectations. Our dedication to innovation ensures that our customers always have access to the most up-to-date designs and materials.
                </p>
            </div> -->
            @foreach (\App\Models\InfoGraphic::get() as $index => $infoGraphic)
                @php
                    $isEven = $index % 2 === 0;
                @endphp
                @if ($isEven)
                    <!-- Image Left - Text Right -->
                    <div class="col-lg-5 col-md-5 col-sm-6 col-12 mt-4">
                        <img src="{{ asset('imgs/infographics/'.$infoGraphic->image_path) }}" class="img-fluid" style="border-radius: 20px;" />
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-12 mt-4 text-dark">
                        <p>{!! $infoGraphic->description !!}</p>
                    </div>
                @else
                    <!-- Text Left - Image Right -->
                    <div class="col-lg-7 col-md-7 col-sm-6 col-12 mt-4 text-dark order-sm-1 order-2">
                        <p>{!! $infoGraphic->description !!}</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-12 mt-4 order-sm-2 order-1">
                        <img src="{{ asset('imgs/infographics/'.$infoGraphic->image_path) }}" class="img-fluid" style="border-radius: 20px;" />
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    @endif


    <div class="container-fluid bg-light">
        <section class="survey-section">
            <div class="container">
                <div class="row text-center mb-4">
                    <div class="col-12">
                        <h4 class="mb-3" style="color:#2a6161;">WANT A MORE HANDS-ON APPROACH?</h4>
                        <p class="">For your peace of mind, we are offering!</p>
                        <h3 class="mb-1 text-black">ON-SITE SURVEY</h3>
                        <div class="row justify-content-center">
                            <div class = "col-3">
                                <div id="lines" class="mb-3">
                                    <div id="line1"></div>
                                    <div id="line2"></div>
                                    <div id="line3"></div>
                                
                            </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                        <p class="col-7 text-black">Our team will visit your space, take measurements, and assess your needs. After that, the design for the custom kitchen unit will be finalized online.</p>
                        </div>
                    </div>
                </div>

                <div class="row text-center mb-4">
                    <div class="col-12">
                        <h4 class="mb-4 text-black">BENEFITS</h4>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-4 bg-white rounded">
                            <div class="benefit-icon">
                                <i class="bi bi-calculator"></i>
                            </div>
                            <h4 class=""><b>01.</b> Extensive study of your space by a professional.</h4>
                            
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-4 bg-white rounded">
                            <div class="benefit-icon">
                                {{-- <i class="bi bi-coin"></i> --}}
                                <img src="{{ asset('images/no-hidden.png') }}"/>
                            </div>
                            <h4><b>02.</b> Transparent pricing, No </br>hidden charges</h4>
                            {{-- <p class="text-muted">No hidden charges</p> --}}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-4 bg-white rounded">
                            <div class="benefit-icon">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <h4><b>03.</b> Survey payment is deducted from your final bill</h4>
                            
                            {{-- <p class="text-muted"></p> --}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <p class=" mb-3 text-black">
                        <span class="text-danger"> *</span>The advance payment for this survey will be deducted from your final bill, ensuring that you're only paying for your kitchen.
                        </p>
                        <h4 class="mb-4" style="color:#2a6161">
                            Concerned about not getting the right measurements? Let our professionals handle it for you.
                        </h4>
                        <a href="#" class=" btn btn-lg px-5 rounded-0" style="background-color: #ffc107;">Start designing your Ideal Kitchen</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- <section class="container-fluid bg-yellow-color2 py-2">
        <div class="col-12 d-flex flex-column align-items-center">
            <p class="text-center">Want a more hands-on approach?</p>
            <h3 class="text-dark text-center fw-bold" style="text-decoration: underline; text-decoration-color: #2a6161">
                ON-SITE SURVEY
            </h3>
            <p class="text-center text-dark w-75">
            For your peace of mind, we offer an on-site survey. Our team will visit your space, take measurements, and assess your needs. After that, the design for the custom kitchen unit will be finalized online. The advance payment for this survey will be deducted from your final bill, ensuring that you're only paying for your kitchen.
            </p>
        </div>
    </section> --}}


{{--     
    <section class="container-fluid  pt-5 pb-3" style="background-color:#f2f4f5">
        <div>
        <div class="col-12 d-flex flex-column align-items-center">
            <p class="text-center fw-bold">Are you tired of just dreaming about a better kitchen?</p>
            <h3 class="text-dark text-center fw-bolder">
                BESPOKE DESIGN, STANDARD PRICE
            </h3>
                <div id="lines" class="mb-3">
                <div id="line1"></div>
                <div id="line2"></div>
                <div id="line3"></div>
            
        </div>
        <p class="text-center text-dark w-75">
            We offer premium, bespoke designer kitchens at competitive prices. Our process is straight forward
        </p>
    </section> --}}

    {{-- <div class ="container-fluid py-3" style="background-color:#f2f4f5">
    <section class="container  pb-4">
        
        <div class="row justify-content-center">
            
            <div class="col-12 col-lg-4 col-sm-6  mb-sm-3  " >  
                <div class="card border-0" style="height: 300px; width:300px;">
                    <div class="card-body text-center p-4">
                          <div class="card-icon">
                             <i class="bi bi-card-list" style=" color: #ffa500;
                                  font-size: 3rem;
                                    text-align: center;
                                    margin-bottom: 1rem;">
                             </i>
                           </div>
                        <h5 class="card-title mb-3 text-dark">01.</h5>
                        <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Design Requirements</h5>
                        <p class="card-text text-muted">You inform us about your requirements.</p>
                    </div>
                </div>
            </div>
           
            <div class=" col-lg-4 col-sm-6   col-12">
                <div class="card border-0" style="height: 300px; width:300px;">
                    <div class="card-body text-center p-4">
                        <div class="card-icon">
                            <i class="bi bi-cash-stack" style=" color: #ffa500;
            font-size: 3rem;
            text-align: center;
            margin-bottom: 1rem;"></i>
                        </div>
                        <h5 class="card-title mb-3 text-dark">02.</h5>
                        <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Upfront Pricing</h5>
                        <p class="card-text text-muted">We create a personalized design and provide clear, upfront pricing.</p>
                    </div>
            </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card border-0" style="height: 300px; width:300px;">
                    <div class="card-body text-center p-4">
                        <div class="card-icon">
                            <i class="bi bi-clipboard-check" style=" color: #ffa500;
            font-size: 3rem;
            text-align: center;
            margin-bottom: 1rem;"></i>
                        </div>
                        <h5 class="card-title mb-3 text-dark">03.</h5>
                        <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Custom Design Delivered</h5>
                        <p class="card-text text-muted">The final design will be crafted to meet your needs without the pressure of upselling.</p>
                    </div>
            </div>
            </div>
            
          
        </div>
       
    </section>
    <div class = "row justify-content-center">
        <div class="col-3 mb-5 mt-3">
        <p>Stop dreaming and build a kitchen that reflects your needs and style</p>
        <button  class="btn rounded-0 btn-warning px-5 mx-n4 text-uppercase text-black" style="background-color:#FFC107">Start designing your Ideal Kitchen</button>
        </div>
   </div>
</div> --}}

    {{-- <section class="container-fluid bg-light py-5 my-4">
        <div class="container shadow-container pb-4" style="height: auto !important;">
            <div class="row py-2">
                <div class="col-xl-4 col-lg 4 col-md-4 col-sm-12 col-12" style="margin-bottom: 12rem">
                    <div class="card bg-transparent border-0">
                        <div class="card-header bg-transparent d-flex justify-content-center text-yellow-color2 p-3" style="">
                            <button class="btn btn-outline-warning bg-warning p-3" style="box-shadow: 0px 25px 0px 0px rgba(237,161,14, 0.9); height: 80px; width: 80px; border-radius: 50%; border: 5px solid #eda10e">
                                <div class="d-flex justify-content-center" style="border-radius: 50%">
                                    <img height="100px" width="100px" class="img-fluid" src="{{ asset('images/icons/5.png') }}" alt="" style="filter: invert(1); mix-blend-mode: color-burn; object-fit: cover">
                                </div>
                            </button>
                        </div>
                        <div class="card-body border-0 position-relative d-flex flex-column align-items-center" style="place-content: center; place-items: center">
                            <i class="position-absolute" style="top: 20px; left: 48%; border-radius: 50%; height: 15px; width: 15px; border: 5px solid #eda10e"></i>
                            <div class="text-center bg-yellow-color2 text-white p-3 m-0 rounded-2 position-absolute" style="top: 50px">
                                <span style="font-weight: bolder !important; font-size: 18px !important">Professional Space Assesment</span>
                                <p style="font-weight: normal !important; font-size: 10px !important">Our experts visit your home for precise measurements</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg 4 col-md-4 col-sm-12 col-12" style="margin-bottom: 12rem">
                    <div class="card bg-transparent border-0">
                        <div class="card-header bg-transparent d-flex justify-content-center text-yellow-color2 p-3" style="">
                            <button class="btn btn-outline-warning bg-green-color p-3" style="box-shadow: 0px 25px 0px 0px rgba(42,97,97, 0.9); height: 80px; width: 80px; border-radius: 50%; border: 5px solid rgb(29, 71, 71)">
                                <div class="d-flex justify-content-center" style="border-radius: 50%">
                                    <img height="80px" width="80px" class="img-fluid bg-transparent" src="{{ asset('images/icons/6.png') }}" alt="" style="filter: invert(1);">
                                </div>
                            </button>
                        </div>
                        <div class="card-body border-0 position-relative d-flex flex-column align-items-center" style="place-content: center; place-items: center">
                            <i class="position-absolute" style="top: 20px; left: 48%; border-radius: 50%; height: 15px; width: 15px; border: 5px solid #2a6161"></i>
                            <div class="text-center bg-green-color text-white p-3 m-0 rounded-2 position-absolute" style="top: 50px">
                                <span style="font-weight: bolder !important; font-size: 18px !important">Custom Kitchen Design</span>
                                <p style="font-weight: normal !important; font-size: 10px !important">Our expert designers provide tailored solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg 4 col-md-4 col-sm-12 col-12" style="margin-bottom: 12rem">
                    <div class="card bg-transparent border-0">
                        <div class="card-header bg-transparent d-flex justify-content-center text-dark p-3" style="">
                            <button class="btn btn-outline-warning bg-light p-3" style="box-shadow: 0px 25px 0px 0px rgba(0,0,0, 0.9); height: 80px; width: 80px; border-radius: 50%; border: 5px solid rgb(81, 81, 81)">
                                <div class="d-flex justify-content-center" style="border-radius: 50%">
                                    <img height="80px" width="80px" class="img-fluid bg-transparent" src="{{ asset('images/icons/7.png') }}" alt="" style="filter: invert(1);">
                                </div>
                            </button>
                        </div>
                        <div class="card-body border-0 position-relative d-flex flex-column align-items-center" style="place-content: center; place-items: center">
                            <i class="position-absolute" style="top: 20px; left: 48%; border-radius: 50%; height: 15px; width: 15px; border: 5px solid #000"></i>
                            <div class="text-center bg-dark text-white p-3 m-0 rounded-2 position-absolute" style="top: 50px">
                                <span style="font-weight: bolder !important; font-size: 18px !important">Transparent Pricing</span>
                                <p style="font-weight: normal !important; font-size: 10px !important">The amount paid for survey is deducted from the final bill</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Key designs -->
    {{-- @include('frontend.key_designs') --}}
    

    {{-- <section class="container-fluid bg-white pt-5 pb-3">
        <div class="col-12 d-flex flex-column align-items-center">
            <p class="text-center fw-bold">Are you tired of just dreaming about a better kitchen?</p>
            <h3 class="text-dark text-center fw-bolder">
                BESPOKE DESIGN, STANDARD PRICE
            </h3>
            <div id="lines" class="mb-3">
                <div id="line1"></div>
                <div id="line2"></div>
                <div id="line3"></div>
            </div>
            <p class="text-center text-dark w-75">
                We offer premium, bespoke designer kitchens at competitive prices. Our process is straight forward
            </p>
        </div>
    </section> --}}


    <section class="container-fluid  pt-5 pb-3" style="background-color:#f2f4f5">
        <div>
        <div class="col-12 d-flex flex-column align-items-center">
            <p class="text-center fw-bold">CUSTOM KITCHENS, TIMELESS ELEGANCE.</p>
            <h3 class="text-dark text-center fw-bolder">
                BESPOKE DESIGN, STANDARD PRICE
            </h3>
            <div id="lines" class="mb-3">
                <div id="line1"></div>
                <div id="line2"></div>
                <div id="line3"></div>
            
        </div>
        <p class="text-center text-dark w-75">
            We offer premium, bespoke designer kitchens at competitive prices. Our process is straight forward
        </p>
    </section>

    <div class="container-fluid py-3" style="background-color:#f2f4f5">

        <section class="container pb-4">
            <div class="row gap-5 justify-content-center">
                <div class="col-lg-3 col-md-6 col-9 mb-4">
                    <div class="card rounded-0 border-0 h-100" style="  box-shadow: 20px -20px 0px -1px rgb(242 244 245), 20px -20px 0px 0 rgb(42, 97, 97); ">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="bi bi-card-list text-warning" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                                
                            </div>
                            <h5 class="card-title mb-3 text-dark">01.</h5>
                            <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Dream & Discuss</h5>
                            <div class="px-5">
                                <p class="card-text text-muted">Share your vision! We'll listen to your ideas, needs, and lifestyle to understand your dream kitchen.</p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 col-9 mb-4">
                    <div class="card rounded-0 border-0 h-100" style="  box-shadow: 20px -20px 0px -1px rgb(242 244 245), 20px -20px 0px 0 rgb(42, 97, 97); ">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="bi bi-cash-stack text-warning" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                            </div>
                            <h5 class="card-title mb-3 text-dark">02.</h5>
                            <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Design & Refine</h5>
                            <div class="px-5">
                            <p class="card-text text-muted">Our experts create a personalized design, including layouts, material selections. You'll have opportunities to refine every detail.</p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 col-9 mb-4">
                    <div class="card rounded-0 border-0 h-100" style="  box-shadow: 20px -20px 0px -1px rgb(242 244 245), 20px -20px 0px 0 rgb(42, 97, 97); ">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="bi bi-clipboard-check text-warning" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                            </div>
                            <h5 class="card-title mb-3 text-dark">03.</h5>
                            <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Craft & Create</h5>
                            <div class="px-5">
                            <p class="card-text text-muted">Our skilled craftsmen meticulously build and install your custom kitchen, ensuring a perfect fit and lasting beauty.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <div class="row justify-content-center text-center">
            <div class="col-lg-6 col-md-8 col-sm-10 col-12 mb-5 mt-3">
                <p class="fw-bold text-primary">Stop dreaming and build a kitchen that reflects your needs and style</p>
                <button class="btn btn-warning px-5 text-uppercase rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Start designing your Ideal Kitchen</button>
            </div>
        </div>
        {{-- <section class="container pb-4">
            <div class="row gap-5 justify-content-center">
                <div class="col-lg-3 col-md-6 col-9 mb-4">
                    <div class="card rounded-0 border-0 h-100" style="  box-shadow: 20px -20px 0px -1px rgb(242 244 245), 20px -20px 0px 0 rgb(42, 97, 97); ">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="bi bi-card-list text-warning" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                                
                            </div>
                            <h5 class="card-title mb-3 text-dark">01.</h5>
                            <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Design Requirements</h5>
                            <div class="px-5">
                                <p class="card-text text-muted">You inform us about your requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 col-9 mb-4">
                    <div class="card rounded-0 border-0 h-100" style="  box-shadow: 20px -20px 0px -1px rgb(242 244 245), 20px -20px 0px 0 rgb(42, 97, 97); ">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="bi bi-cash-stack text-warning" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                            </div>
                            <h5 class="card-title mb-3 text-dark">02.</h5>
                            <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Upfront Pricing</h5>
                            <div class="px-5">
                            <p class="card-text text-muted">We create a personalized design and provide clear, upfront pricing.</p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 col-9 mb-4">
                    <div class="card rounded-0 border-0 h-100" style="  box-shadow: 20px -20px 0px -1px rgb(242 244 245), 20px -20px 0px 0 rgb(42, 97, 97); ">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="bi bi-clipboard-check text-warning" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                            </div>
                            <h5 class="card-title mb-3 text-dark">03.</h5>
                            <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Custom Design Delivered</h5>
                            <div class="px-5">
                            <p class="card-text text-muted">The final design will be crafted to meet your needs without the pressure of upselling.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <div class="row justify-content-center text-center">
            <div class="col-lg-6 col-md-8 col-sm-10 col-12 mb-5 mt-3">
                <p class="fw-bold text-primary">Build a kitchen that reflects your needs & style.</p>
                <button class="btn btn-warning px-5 text-uppercase rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Book An On-Site Survey Now!</button>
            </div>
        </div> --}}
    </div>

    {{-- <div class="container-fluid py-3" style="background-color:#fff">
    <section class="container pb-4">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card border-0 h-100 bg-light">
                    <div class="card-body text-center p-4">
                        <div class="card-icon">
                            <i class="bi bi-card-list text-warning" style="font-size: 3rem; margin-bottom: 1rem; color: #ffc107"></i>
                        </div>
                        <h5 class="card-title mb-3 text-dark">01.</h5>
                        <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Design Requirements</h5>
                        <p class="card-text text-muted">You inform us about your requirements.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card border-0 h-100 bg-light">
                    <div class="card-body text-center p-4">
                        <div class="card-icon">
                            <i class="bi bi-cash-stack" style="font-size: 3rem; margin-bottom: 1rem; color: #ffc107"></i>
                        </div>
                        <h5 class="card-title mb-3 text-dark">02.</h5>
                        <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Upfront Pricing</h5>
                        <p class="card-text text-muted">We create a personalized design and provide clear, upfront pricing.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card border-0 h-100 bg-light">
                    <div class="card-body text-center p-4">
                        <div class="card-icon">
                            <i class="bi  bi-clipboard-check" style="font-size: 3rem; margin-bottom: 1rem; color: #ffc107;"></i>
                        </div>
                        <h5 class="card-title mb-3 text-dark">03.</h5>
                        <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Custom Design Delivered</h5>
                        <p class="card-text text-muted">The final design will be crafted to meet your needs without the pressure of upselling.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row justify-content-center text-center">
        <div class="col-lg-6 col-md-8 col-sm-10 col-12 mb-5 mt-3">
            <p class="fw-bold">Stop dreaming and build a kitchen that reflects your needs and style</p>
            <button class="btn btn-warning px-5 text-uppercase rounded-0 text-black" style="background-color: #ffc107;">Start designing your Ideal Kitchen</button>
        </div>
    </div>
        </div> --}}
    <section class="container-fluid py-4 bg-light">
        <div class="col-12 d-flex flex-column align-items-center">
            <h6 class=" text-center fw-bold">
                ARE YOU STRUGGLING WITH KITCHEN STORAGE SPACE?
            </h6>
            <h3 class="text-center text-dark w-75 fw-bolder">
                EXPLORE BESPOKE MAX STORAGE KITCHENS
            </h3>
            <div id="lines" class="mb-3">
                <div id="line1"></div>
                <div id="line2"></div>
                <div id="line3"></div>
            
        </div>
        </div>
    </section>

    <section class="container-fluid bg-light py-4">
        <div class="container">
        <div class="row bg-light">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0 bg-light">
                <div class="card border-0 bg-light">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/deepest.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0 bg-light">
                <div class="card border-0 bg-light">
                    <div class="px-5 bg-white d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h4 class=" fw-bold text-center">02.</h4>
                        <h4 class=" fw-bold text-center">TALLEST UNITS</h4>
                        <p class=" text-center">Floor-to-ceiling cupboards for extra storage. Ideal for small kitchens needing vertical space.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0 bg-light">
                <div class="card border-0 bg-light">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/widest.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0 bg-light">
                <div class="card border-0 bg-light">
                    <div class="px-5 bg-white d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        
                        <h4 class=" fw-bold text-center">01.</h4>
                        
                        <h4 class=" fw-bold text-center">DEEPEST UNITS</h4>
                        <p class=" text-center">Deeper storage than standard cabinets. Maximizes space for pots, pans and appliances.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0 bg-light">
                <div class="card border-0 bg-light">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/tallest.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0 bg-light">
                <div class="card border-0 bg-light">
                    <div class="px-5 bg-white d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h4 class=" fw-bold text-center">03.</h4>
                        <h4 class=" fw-bold text-center">WIDEST UNITS</h4>
                        <p class="text-center">Wide drawers for organized storage of kitchens essentials. Make use of every inch efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 row justify-content-center bg-light">
          <div class="col-lg-5 col-12 bg-light">
            <h4 style="color:#2a6161" class="text-center">Say Goodbye to clutter with bespoke max storage kitchens. </h4>
          </div>

        </div>
        <div class="row justify-content-center bg-light">
            <div class="col-lg-3 col-5 bg-light">
                <a href="{{ route('max_storage') }}" class="btn px-3 px-lg-5 rounded-0" style="background-color:#febd49">Maximize your space now!</a>
            </div>
        </div>
        </div>
    </section>

    {{-- <section class="container-fluid bg-green-color py-4">
        <div class="col-12 d-flex flex-column align-items-center">
        </div>
    </section> --}}

    <section class="container-fluid mt-5 grid-box-gray-color py-4 " >
        <div class="container d-flex flex-column align-items-center">
            <div class="row pt-3 justify-content-center">
                <div class ="col-6">
                    <h3 class="text-center "><b>RETAIL QUALITY AT ONLINE PRICES</b></h3>
            <p class="text-center">
                We Believe In Offering High-Quality Products That Rival Retail Standards, But Without The Retail Prices.
                Our Products Are Always Top-Notch, Ensuring Your Bespoke Designer Kitchen Is Built To Last.
            </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container-fluid grid-box-gray-color py-4">
        <div class="container d-flex flex-column align-items-center">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bg-yellow-color2 p-5 h-100">
                        <h4 class="text-dark fw-bolder">PREMIUM WARDROBES</h4>
                        <p class="text-dark">BK online also takes responsibility for adding luxury to your rooms. The wardrobes are built to meet unique storage needs with meticulous attention to detail. They are not only functional but they change the aesthetic of your room.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bg-green-color p-5 h-100">
                        <h4 class="text-white fw-bolder">DOOR REPLACEMENT</h4>
                        <p class="text-white">We have a quick and affordable way of giving your kitchen a new look. BK Online offers door replacements for your old kitchen doors. The doors are made from premium quality and great craftsmanship. Choose from a range of colors and finishes to suit your kitchen’s style.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="container-fluid bg-grey-color py-4">
        <div class="col-12 d-flex flex-column align-items-center">
        </div>
    </section> --}}

    <section class="catalogue-bg py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <!-- Left Content -->
                <div class="col-md-12 col-lg-6 text-center text-lg-start">
                    <div class="card rounded border-0 shadow-sm p-4">
                        <h5 class="text-primary">Our Catalogue</h5>
                        <h4 class="mb-3">EXPLORE OUR EXCLUSIVE CATALOGUE</h4>
                        <p class="mb-3">Get access to our full catalogue for free, featuring custom kitchen designs, premium materials, and smart storage solutions. Whether you're seeking style, function, or both, we've got everything you need to bring your vision to life.</p>
                        <p class="text-primary">Register now to receive our free catalogue in your inbox.</p>
                        <form method="POST" action="{{ route('contact_us_inquiry') }}">
                            @csrf
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" aria-label="Email">
                                <input type="hidden" name="catalogue_register_now" value="catalogue_register_now">
                                <button class="btn" type="submit" style="background-color:#febd49">REGISTER NOW!</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-md-12 col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="{{ asset('images/catalogue.png') }}" alt="Kitchen Design" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="catalogue-bg py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 pt-5 pb-3 px-5 mb-4 mb-lg-0 card rounded border-0 shadow-sm">
                    <h5 style="color:#136d68">Our Catalogue</h5>
                    <h4 class="mb-4">EXPLORE OUR EXCLUSIVE CATALOGUE</h4>
                    <p class="mb-4">Get access to our full catalogue for free, featuring custom kitchen designs, premium materials, and smart storage solutions. Whether you're seeking style, function, or both, we've got everything you need to bring your vision to life.</p>
                    <p style="color:#136d68">Register now to receive our free catalogue in your inbox.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter Your Email" aria-label="Email" aria-describedby="register-button">
                        <button class="btn register-btn" type="button" id="register-button" style="background-color:#ffc107; border-color: #ffc107;">REGISTER NOW!</button>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="position-relative">
                        <img src="{{ asset('images/catalogue.png') }}" alt="Kitchen Design" class="catalogue-image rounded shadow">
                     
                    </div>
                </div>
            </div>
        </div> --}}


    <!-- Start your journey -->
    @include('frontend.start_your_journey')
    
    <section class="container-fluid bg-white" style="border-bottom: 40px solid #2a6161;">
    </section>
    <!-- Why choose BKONLINE -->
     @include('frontend.why_choose_bkonline')

     {{-- <div class="mt-5 container container-features">
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
                        <div class="feature-icon">🕒</div>
                        <h5 class="card-title mb-3">24/7 Availability</h5>
                        <p class="card-text">Customer support & Consultation anytime, anywhere</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-sm-6">
                <div class="feature-card h-100 d-flex flex-column">
                    <div class="text-center">
                        <div class="feature-icon">🏆</div>
                        <h5 class="card-title mb-3">Quality Service</h5>
                        <p class="card-text">Trusted by thousand of customers for premium kitchen designs</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-sm-6">
                <div class="feature-card h-100 d-flex flex-column">
                    <div class="text-center">
                        <div class="feature-icon">🛠️</div>
                        <h5 class="card-title mb-3">Expert Installation</h5>
                        <p class="card-text">Skilled professionals ensure seamless kitchen fitting & installation</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-sm-6">
                <div class="feature-card h-100 d-flex flex-column">
                    <div class="text-center">
                        <div class="feature-icon">👥</div>
                        <h5 class="card-title mb-3">Free Consultation</h5>
                        <p class="card-text">Personalized guidance without any upfront cost</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a class="btn explore-btn px-5 mb-5" style="background-color:#febd49;">EXPLORE MORE</a>
        </div>
    </div> --}}

    <!-- Testimonials -->
    @include('frontend.testimonials_component')

    <!-- FAQs -->
    @include('frontend.faqs_component', ['faqsData' => $generalFaqs])
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class=" col-12">
                    <form method="POST" action="{{ route('contact_us_inquiry') }}" class="border border-warning p-4">
                        @csrf
                        <div>
                            <div class="d-block">
                                <div class="text-center text-dark fw-bold">FOR FREE SURVEY AND QUOTE <span class="text-warning"> CALL US NOW!</span></div>
                                <div class="my-2 d-flex justify-content-center">
                                    <a href="tel:02080505605" class="btn btn-warning text-decoration-underline text-center text-dark fs-4 fw-bold">
                                    <i class="bi pt-2 me-2 bi-phone text-dark"></i> 
                                        020 805 05605
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-dark text-center fw-bold">OR</h6>
                        <hr class="border border-dark">

                        
                        <h4 id="blinking-text" class="bg-warning  fw-bold text-center py-2 rounded-pill">
                            Book a free consultation now!
                        </h4>
                        <hr class="border border-dark">
                        <div class="mb-3">
                            <input type="text" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="name" id="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <input type="email" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="email" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <input type="number" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="phone" id="phone" placeholder="Enter your phone number">
                        </div>
                        <div class="mb-3">
                            <label for="" class="text-white py-2 px-3  text-end fw-bold" style="background-color:#2a6161;" >Call US AT</label>
                            <input type="datetime-local" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="call_time">
                        </div>
                        <div class="mb-3">
                            <textarea name="message" id="message" name="message" rows="3" class="w-100 rounded-0 border border-dark form-control text-dark" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class=" btn py-2 px-4 rounded-0 fw-bolder text-uppercase text-white" style="background-color:#2a6161;">Submit</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function () {
                const $carousel01 = $('.main-carousel-banner-01');
                // Initialize OwlCarousel
                $carousel01.owlCarousel({
                    loop: true,
                    margin: 50,
                    stagePadding: 15, // Add padding to avoid clipping
                    rtl: false,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        768: {
                            items: 2,
                            nav: true
                        },
                        992: {
                            items: 2,
                            loop: true,
                            margin: 10,
                            nav: true,
                            dots: true,
                            center: true,
                        },
                        1200: {
                            items: 3,
                            loop: true,
                            margin: 50,
                            nav: true,
                            dots: true,
                            center: true,
                        },
                        1400: {
                            items: 3,
                            loop: true,
                            margin: 50,
                            nav: true,
                            dots: true,
                            center: true,
                        }
                    }
                });
                // Customize the autoplay behavior to reverse the direction
                $carousel01.on('translated.owl.carousel', function() {
                    $carousel01.find('.owl-item.active').css('animation', 'move-right 0.3s ease-in-out');
                });

                const canvas = document.getElementById('dots');
                const ctx = canvas.getContext('2d');

                let dots = [];

                function resizeCanvas() {
                    canvas.width = window.innerWidth;
                    canvas.height = window.innerHeight;
                }

                resizeCanvas();
                window.addEventListener('resize', resizeCanvas);

                for (let i = 0; i < 50; i++) {
                    dots.push({
                        x: Math.random() * canvas.width,
                        y: Math.random() * canvas.height,
                        radius: Math.random() * 2 + 1,
                        dx: (Math.random() - 0.5) * 0.5,
                        dy: (Math.random() - 0.5) * 0.5
                    });
                }

                function animate() {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);

                    for (let dot of dots) {
                        ctx.beginPath();
                        ctx.arc(dot.x, dot.y, dot.radius, 0, Math.PI * 2);
                        ctx.fillStyle = 'orange';
                        ctx.fill();

                        dot.x += dot.dx;
                        dot.y += dot.dy;

                        if (dot.x < 0 || dot.x > canvas.width) dot.dx *= -1;
                        if (dot.y < 0 || dot.y > canvas.height) dot.dy *= -1;
                    }

                    requestAnimationFrame(animate);
                }

                animate();

            });
        </script>
    @endpush
</x-guest-layout>