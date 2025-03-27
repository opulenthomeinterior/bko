<x-guest-layout>

    <style>
         :root {
      --primary: #1e3a8a;
      --secondary: #f59e0b;
      --light: #f8fafc;
      --dark: #0f172a;
      --accent: #818cf8;
      --success: #10b981;
    }
    
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f1f5f9;
      color: var(--dark);
    }
    .section-title {
      font-weight: 800;
      margin-bottom: 3rem;
      position: relative;
      display: inline-block;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -12px;
      left: 0;
      width: 60px;
      height: 4px;
      background-color: var(--secondary);
      border-radius: 4px;
    }
    
    .process-container {
      position: relative;
      padding: 2rem 0;
    }
    
    .process-line {
      position: absolute;
      top: 150px;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      z-index: 0;
    }
    
    .process-card {
      background: white;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.06);
      height: 100%;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      z-index: 1;
    }
    
    .process-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1);
    }
    
    .card-header {
      padding: 1.5rem;
      position: relative;
      overflow: hidden;
    }
    
    .card-header::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.1);
    }
    
    .step-number {
      font-size: 4rem;
      font-weight: 900;
      opacity: 0.1;
      position: absolute;
      top: 10px;
      right: 20px;
      line-height: 1;
    }
    
    .card-body {
      padding: 1.5rem;
      background-color: white;
    }
    
    .card-icon {
      width: 64px;
      height: 64px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 16px;
      background-color: var(--light);
      margin-bottom: 1.5rem;
      position: relative;
      z-index: 2;
    }
    
    .btn-custom {
      background: linear-gradient(135deg, var(--primary), var(--accent));
      border: none;
      padding: 0.75rem 2rem;
      border-radius: 50px;
      color: white;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
      box-shadow: 0 10px 20px rgba(30, 58, 138, 0.15);
    }
    
    .btn-custom:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(30, 58, 138, 0.2);
      color: white;
    }
    
    .primary-card { border-top: 5px solid var(--primary); }
    .secondary-card { border-top: 5px solid var(--secondary); }
    .success-card { border-top: 5px solid var(--success); }
    .accent-card { border-top: 5px solid var(--accent); }
    
    .bg-primary-gradient { background: linear-gradient(135deg, var(--primary), #2563eb); }
    .bg-secondary-gradient { background: linear-gradient(135deg, var(--secondary), #fbbf24); }
    .bg-success-gradient { background: linear-gradient(135deg, var(--success), #34d399); }
    .bg-accent-gradient { background: linear-gradient(135deg, var(--accent), #a5b4fc); }
    
    @media (max-width: 768px) {
      .process-line {
        display: none;
      }
      
      .process-card {
        margin-bottom: 2rem;
      }
    }
    </style>

    @section('meta_tags')
    <title>Kitchen Design Services | Bespoke & Affordable Kitchens | BKO</title>
    <meta name="description" content="Buy Kitchen Online is here with Affordable & Custom kitchen units in London, in J Pull, Shaker, Slab, MFC & True Handleless styles. Book Consultation Now.">
    <!-- <meta name="description" content="Customize your Dream Kitchen with our Bespoke Kitchen Units in London. Our Bespoke Designer Kitchens include Slab, Shaker, True handleless & J-pull Styles."> -->
    <link rel="canonical" href="https://bkonline.uk/" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endsection

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
                        Kitchen dispatched in 48 hours
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
            <div class="row main-image-content align-items-center" style="z-index: 1000;">
                
                <!-- Left Content -->
                <div class="col-md-7 text-start text-white px-4" style="z-index: 100;">
                    <div class="ps-4 animated slide-top">
                        <h6 class="text-yellow-color fw-bold">BK ONLINE KITCHENS</h6>
                    </div>
                    <div class="text-green-color ps-3" style="border-left: 3px solid; margin-bottom: 10px">
                        <h1 class="text-white animated slide-right">ELEVATE YOUR KITCHEN</h1>
                        <h1 class="text-yellow-color fw-bold animated slide-left">ELEVATE YOUR LIFESTYLE</h1>
                        <p class="text-white animated slide-bottom">We specialize in virtually designing and delivering your dream kitchen that complements your needs and style. Whether you want to build a new kitchen or need to replace a single component, we are always at your service.</p>
                    </div>
                    <div class="ps-4 text-center col-xl-8 col-lg-12 col-md-12 col-sm-12 animated slide-top" style="margin-top: 50px">
                        <h4 class="unique-font text-white text-center px-4 py-1 rounded-gradient-border w-100" id="typing-effect"></h4>
                    </div>
                    <div class="ps-4 mt-4 animated slide-bottom">
                        <a href="{{ route('orderkitchen') }}" class="btn btn-md bg-yellow-color2 text-white text-uppercase border-green-color" style="border-radius: 50px;">
                            Order Now
                        </a>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-md-5 col-12 d-flex justify-content-center my-4 mt-md-0">
                    <form method="POST" action="{{ route('contact_us_inquiry') }}" class="w-100 text-yellow-color2 p-4" style="border: 3px solid; border-radius: 25px; background-color: rgba(0, 0, 0, 0.6)">
                        @csrf
                        <h3 class="text-white text-center">For free survey, <b class="text-yellow-color2">CALL US NOW!</b></h3>
                        <div class="text-center">
                            <a href="tel:02080505605" class="text-white fs-4 fw-bold">020 805 05605</a>
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
                </div>

            </div>
            <div class="left-shadow"></div>
        </div>
    </section>

    <!-- ORDER KITCHEN-->
    <section class="container-fluid py-5 bg-white" style="border-bottom: 3px solid #ebc266; border-left: 3px solid #ebc266; width: 100% !important; overflow: hidden">
        <div class="row">
            <h3 class="text-uppercase fw-bolder text-dark text-center">ORDER KITCHEN</h3>
        </div>
        <div class="row mt-4" id="stylesContainer">
            <div class="carousel main-carousel-banner-01 owl-carousel clients mb-0 p-0"
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
                                        <a href="{{ route('orderkitchenbyname', $style->slug) }}" class="text-center text-white m-0 text-decoration-underline" style="font-size: 10px">See our range ></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row mt-3">
            <!-- <div class="col-12 text-center">
                <button id="showMoreButton" class="btn btn-warning px-4 py-2 text-dark" style="border-radius: 20px;">Show More</button>
            </div>
        </div> -->
    </section>

    <!-- ORDER COMPONENT-->
    <section class="container-fluid bg-white py-5" style="width: 100%; border-bottom: 3px solid #ebc266; border-right: 3px solid #ebc266">
        <div class="row">
            <h3 class="text-uppercase fw-bolder text-dark text-center py-3">ORDER COMPONENTS</h3>
        </div>
        <div class="row bg-white">
            @php
            $categories = \App\Models\Category::where('parent_category_id', null)->where('status', 1)->get();
            @endphp
            <div class="d-flex order-component-scroller" style="max-width: 1900px; overflow-x: scroll">
                @foreach($categories as $category)
                <div class="d-flex align-items-center justify-content-center" style="border-radius: 50%; margin: 0px 10px; padding: 15px 50px">
                    <div class="text-center">
                        <a class="text-dark btn btn-outline-warning d-flex align-items-center justify-content-center" style="height: 100px; width: 100px; border-radius: 100%; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);" href="{{route('ordercomponentbyname', [$category->slug])}}">
                            <div class="card-old">
                                <div class="card-body d-flex">
                                    @if($category->slug == 'doors')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/2237/2237440.png" alt="">
                                    </div>
                                    @elseif($category->slug == 'handles')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn4.iconfinder.com/data/icons/thin-home-living-2/24/thin-1459_door_handle_lock-512.png" alt="">
                                    </div>
                                    @elseif($category->slug == 'accessories')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/3365/3365678.png" alt="">
                                    </div>
                                    @elseif($category->slug == 'sinks')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/810/810192.png" alt="">
                                    </div>
                                    @elseif($category->slug == 'internals')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/4717/4717615.png" alt="">
                                    </div>
                                    @elseif($category->slug == 'taps')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="https://icons.veryicon.com/png/o/object/home-icon/water-tap.png" alt="">
                                    </div>
                                    @elseif($category->slug == 'worktops')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="https://static.thenounproject.com/png/2342543-200.png" alt="">
                                    </div>
                                    @elseif($category->slug == 'upstands')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/6785/6785530.png" alt="">
                                    </div>
                                    @elseif($category->slug == 'breakfast-bars')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/2311/2311531.png" alt="">
                                    </div>
                                    @elseif($category->slug == 'appliances')
                                    <div>
                                        <img height="55px" width="50px" class="rounded-circular-image" src="https://static.thenounproject.com/png/1283252-200.png" alt="">
                                    </div>
                                    @endif
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

    <!-- EXPERT VIRTUAL DESIGN CONSULTATION-->
     <section class="container-fluid bg-green-color py-5">
        <div class="col-12">
            <h3 class="fw-bold text-white text-center" style="text-decoration: underline; text-decoration-color: #eda10e">
                EXPERT VIRTUAL DESIGN CONSULTATION
            </h3>
            <p class="container text-center text-white">
             At BK Online, we offer the ideal virtual kitchen design services and consultation, where our designers collaborate with you to create a kitchen tailored to your available space and preferences. Whether you are at home or on the go, our team is here to help you design your custom kitchen unit.
           
            </p>
        </div>
    </section> 

    <section class="container-fluid bg-white py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 align-items-center d-flex flex-column mb-5" style="max-width: 300px;">
                <button class="btn btn-light text-dark fw-bold circular-button-text-01">
                    01
                </button>
                <span style="border: 2px solid #febd49; width: 100%"></span>
                <div class="card mt-2" style="height: 300px; box-shadow: 0px 5px 15px 0px rgba(1, 1, 1, 0.9);">
                    <div class="card-body bg-green-color">
                        <div class="d-flex justify-content-center mb-3">
                            <img height="80px" width="80px" class="rounded-circular-image p-0" src="{{ asset('images/icons/1.png') }}" alt="" style="border-radius: 10%; top: -40px; background-color: white !important">
                        </div>
                        <h4 class="text-center rounded-5 p-2 border border-light text-white">
                            APPOINTMENT BOOKING
                        </h4>
                        <p class="text-center text-white" style="display: flex; flex-direction: column; justify-content: center">
                            Clients book a free consultation via website or call. Flexible scheduling to fit their availability.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 align-items-center d-flex flex-column mb-5" style="max-width: 300px;">
                <button class="btn btn-light text-dark fw-bolder circular-button-text-02">
                    02
                </button>
                <span style="border: 2px solid #eea61a; width: 100%"></span>
                <div class="card mt-2" style="height: 300px; box-shadow: 0px 5px 15px 0px rgba(1, 1, 1, 0.9);">
                    <div class="card-body" style="background-color: #eea61a;">
                        <div class="d-flex justify-content-center mb-3">
                            <img height="80px" width="80px" class="rounded-circular-image p-0" src="{{ asset('images/icons/2.png') }}" alt="" style="border-radius: 10%; top: -40px; background-color: white !important">
                        </div>
                        <h4 class="text-center rounded-5 p-2 border border-light text-white">
                            SHARING PREFERENCES
                        </h4>
                        <p class="text-center text-white" style="display: flex; flex-direction: column; justify-content: center">
                            Showcasing the client providing space details, style preferences, and budget.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 align-items-center d-flex flex-column mb-5" style="max-width: 300px;">
                <button class="btn btn-light text-dark fw-bolder circular-button-text-03">
                    03
                </button>
                <span style="border: 2px solid #febd49; width: 100%"></span>
                <div class="card mt-2" style="height: 300px; box-shadow: 0px 5px 15px 0px rgba(1, 1, 1, 0.9);">
                    <div class="card-body bg-grey-color">
                        <div class="d-flex justify-content-center mb-3">
                            <img height="80px" width="80px" class="rounded-circular-image p-0" src="{{ asset('images/icons/3.png') }}" alt="" style="border-radius: 10%; top: -40px; background-color: white !important">
                        </div>
                        <h4 class="text-center rounded-5 p-2 border border-light text-white">
                            DESIGN CREATION
                        </h4>
                        <p class="text-center text-white" style="display: flex; flex-direction: column; justify-content: center">
                        BK Online designers craft a customized kitchen layout. Clients receive a 3D visual of their new kitchen.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 align-items-center d-flex flex-column mb-5" style="max-width: 300px;">
                <button class="btn btn-light text-dark fw-bolder circular-button-text-04">
                    04
                </button>
                <span style="border: 2px solid #febd49; width: 100%"></span>
                <div class="card mt-2" style="height: 300px; box-shadow: 0px 5px 15px 0px rgba(1, 1, 1, 0.9);">
                    <div class="card-body bg-dark">
                        <div class="d-flex justify-content-center mb-3">
                            <img height="80px" width="80px" class="rounded-circular-image p-0" src="{{ asset('images/icons/4.png') }}" alt="" style="border-radius: 10%; top: -40px; background-color: white !important">
                        </div>
                        <h4 class="text-center rounded-5 p-2 border border-light text-white">
                        APPROVAL & MODIFICATIONS
                        </h4>
                        <p class="text-center text-white" style="display: flex; flex-direction: column; justify-content: center">
                        Customers review the design and request changes if needed. The finalized design is ready for order placement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!-- Process Section -->
{{-- <section class="container my-6 py-5">
    <div class="row mb-2">
      <div class="col-lg-6 mx-auto text-center">
        <h2 class="section-title display-6 text-center mb-2"> EXPERT VIRTUAL DESIGN CONSULTATION</h2>
        <p class="text-muted">  At BK Online, we offer the ideal virtual kitchen design services and consultation, where our designers collaborate with you to create a kitchen tailored to your available space and preferences. Whether you are at home or on the go, our team is here to help you design your custom kitchen unit.
        </p>
      </div>
    </div>
    
    <div class="process-container">
      <div class="process-line d-none d-lg-block"></div>
      <div class="row gy-4">
        <!-- Step 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="process-card primary-card h-100">
            <div class="card-header bg-primary-gradient text-white">
              <span class="step-number">01</span>
              <h3 class="h5 mb-0 text-white"> APPOINTMENT BOOKING</h3>
            </div>
            <div class="card-body">
              <div class="card-icon">
                <i class="bi bi-calendar-check text-primary fs-3"></i>
              </div>
              {{-- <h4 class="h5 fw-bold mb-3">Book Your Session</h4> --}}
              {{-- <p class="text-muted">
                Clients book a free consultation via website or call. Flexible scheduling to fit their availability.</p>
            </div>
          </div>
        </div>
         --}}
        <!-- Step 2 -->
        {{-- <div class="col-md-6 col-lg-3">
          <div class="process-card secondary-card h-100">
            <div class="card-header bg-secondary-gradient text-white">
              <span class="step-number">02</span>
              <h3 class="h5 mb-0"> SHARING PREFERENCES</h3>
            </div>
            <div class="card-body">
              <div class="card-icon">
                <i class="bi bi-chat-square-heart text-warning fs-3"></i>
              </div>
              <h4 class="h5 fw-bold mb-3">Share Your Vision</h4> --}}
              {{-- <p class="text-muted">
                Showcasing the client providing space details, style preferences, and budget.
              </p>
            </div>
          </div>
        </div>
         --}}
        <!-- Step 3 -->
        {{-- <div class="col-md-6 col-lg-3">
          <div class="process-card success-card h-100">
            <div class="card-header bg-success-gradient text-white">
              <span class="step-number">03</span>
              <h3 class="h5 mb-0">DESIGN CREATION</h3>
            </div>
            <div class="card-body">
              <div class="card-icon">
                <i class="bi bi-building-gear text-success fs-3"></i>
              </div>
              <h4 class="h5 fw-bold mb-3">See It Come to Life</h4>
              <p class="text-muted">BK Online designers craft a customized kitchen layout. Clients receive a 3D visual of their new kitchen.
            </p>
            </div>
          </div>
        </div>
         --}}
        <!-- Step 4 -->
        {{-- <div class="col-md-6 col-lg-3">
          <div class="process-card accent-card h-100">
            <div class="card-header bg-accent-gradient text-white">
              <span class="step-number">04</span>
              <h3 class="h5 mb-0"> APPROVAL & MODIFICATIONS</h3>
            </div>
            <div class="card-body">
              <div class="card-icon">
                <i class="bi bi-check2-circle text-primary fs-3"></i>
              </div>
              <h4 class="h5 fw-bold mb-3">Perfect Your Design</h4> --}}
              {{-- <p class="text-muted">  Customers review the design and request changes if needed. The finalized design is ready for order placement.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
     --}}
   
  {{-- </section>  --}}

    {{--<section>
        <div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'true-handleless') }}">
                    <div style="height: 200px;" class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">TRUE HANDLELESS KITCHEN</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end position-relative">
                            <!-- Image container -->
                            <div class="position-relative img-container">
                                <img src="https://bkonline.uk/public/uploads/styles/15_11_2024_171644_673781fcba4e5-true-handleless.jpeg" class="img-fluid w-100 h-100">
                                <!-- Hover text -->
                                <div class="hover-text position-absolute w-100 h-100 bg-warning text-dark d-flex justify-content-center align-items-center" style="top: 0; left: 0; transition: opacity 0.4s;">
                                    <h5 class="text-dark">Do you find it challenging to find the dream luxury true-handleless kitchen within your budget? No more with BKO kitchen, we are here with our true handleless style kitchens that combine elegance and style with affordability.</h5>
                                </div>
                            </div>
                            <p class="text-center mt-3" style="text-decoration: underline;">See our range</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'shaker') }}">
                    <div style="height: 200px;" class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">SHAKER KITCHEN</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end position-relative">
                            <!-- Image container -->
                            <div class="position-relative img-container">
                                <img src="https://bkonline.uk/public/uploads/styles/15_11_2024_171606_673781d675f0e-shaker-22.jpeg" class="img-fluid w-100 h-100">
                                <!-- Hover text -->
                                <div class="hover-text position-absolute w-100 h-100 bg-warning text-dark d-flex justify-content-center align-items-center" style="top: 0; left: 0; transition: opacity 0.4s;">
                                    <h5 class="text-dark">Are you struggling to find an online kitchen partner in the UK that installs shaker kitchens with retail quality at online prices? Consider BKO Kitchen as your trusted partner for streamlining your kitchen remodeling journey.</h5>
                                </div>
                            </div>
                            <p class="text-center mt-3" style="text-decoration: underline;">See our range</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'slab-painted') }}">
                    <div style="height: 200px;" class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">SLAB PAINTED KITCHEN</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end position-relative">
                            <!-- Image container -->
                            <div class="position-relative img-container">
                                <img src="https://bkonline.uk/public/uploads/styles/15_11_2024_171731_6737822b56477-slab-painted.jpeg" class="img-fluid w-100 h-100">
                                <!-- Hover text -->
                                <div class="hover-text position-absolute w-100 h-100 bg-warning text-dark d-flex justify-content-center align-items-center" style="top: 0; left: 0; transition: opacity 0.4s;">
                                    <h5 class="text-dark">Are you thinking of renovating your old kitchen with a blend of aesthetics and modern touches? If so, it’s time to ease your life with BKO Kitchen. choose from our Slab Kitchen designs in your preferred colour to refresh your home vibes.</h5>
                                </div>
                            </div>
                            <p class="text-center mt-3" style="text-decoration: underline;">See our range</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>--}}
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

    <section class="container-fluid bg-yellow-color2 py-2">
        <div class="col-12 d-flex flex-column align-items-center">
            <p class="text-center">Want a more hands-on approach?</p>
            <h3 class="text-dark text-center fw-bold" style="text-decoration: underline; text-decoration-color: #2a6161">
                ON-SITE SURVEY
            </h3>
            <p class="text-center text-dark w-75">
            For your peace of mind, we offer an on-site survey. Our team will visit your space, take measurements, and assess your needs. After that, the design for the custom kitchen unit will be finalized online. The advance payment for this survey will be deducted from your final bill, ensuring that you're only paying for your kitchen.
            </p>
        </div>
    </section>

    <section class="container-fluid bg-light py-5 my-4">
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
    </section>

    <!-- Key designs -->
    @include('frontend.key_designs')

    <section class="container-fluid bg-yellow-color2 py-4">
        <div class="col-12 d-flex flex-column align-items-center">
            <h6 class="text-white text-center fw-bold">
                ARE YOU STRUGGLING WITH KITCHEN STORAGE SPACE?
            </h6>
            <h3 class="text-center text-dark w-75 fw-bolder">
                BESPOKE MAX STORAGE KITCHENS
            </h3>
        </div>
    </section>

    <section class="container bg-white py-4">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/homepage.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="px-2 bg-green-color d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h4 class="text-white fw-bold text-center">TALLEST UNITS</h4>
                        <p class="text-white text-center">Floor-to-ceiling cupboards for extra storage. Ideal for small kitchens needing vertical space.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/homepage.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="px-2 bg-yellow-color2 d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h4 class="text-white fw-bold text-center">DEEPEST UNITS</h4>
                        <p class="text-white text-center">Deeper storage than standard cabinets. Maximizes space for pots, pans and appliances.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/homepage.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="px-2 bg-dark d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h4 class="text-white fw-bold text-center">WIDEST UNITS</h4>
                        <p class="text-white text-center">Wide drawers for organized storage of kitchens essentials. Make use of every inch efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-green-color py-4">
        <div class="col-12 d-flex flex-column align-items-center">
        </div>
    </section>

    <section class="container-fluid bg-white py-4">
        <div class="container d-flex flex-column align-items-center">
            <h3><b class="text-yellow-color2">RETAIL QUALITY</b><b class="text-dark"> AT ONLINE PRICES</b></h3>
            <p class="text-center">
                We Believe In Offering High-Quality Products That Rival Retail Standards, But Without The Retail Prices.
                Our Products Are Always Top-Notch, Ensuring Your Bespoke Designer Kitchen Is Built To Last.
            </p>
        </div>
    </section>
    
    <section class="container-fluid bg-white py-4">
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

    <section class="container-fluid bg-grey-color py-4">
        <div class="col-12 d-flex flex-column align-items-center">
        </div>
    </section>

    <!-- Why choose BKONLINE -->
     @include('frontend.why_choose_bkonline')

    <!-- Start your journey -->
     
    @include('frontend.start_your_journey')

    <section class="container-fluid bg-white" style="border-bottom: 40px solid #2a6161;">
    </section>

    <!-- Testimonials -->
    @include('frontend.testimonials_component')

    <!-- FAQs -->
    @include('frontend.faqs_component', ['faqsData' => $generalFaqs])


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
                        items: 3,
                        loop: true,
                        margin: 10,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1200: {
                        items: 4,
                        loop: true,
                        margin: 50,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1400: {
                        items: 4,
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
        });
    </script>

@endpush
</x-guest-layout>