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

            
        .hero {
            background: url('https://bkonline.uk/public/imgs/products/464785299_8512016742222733_5169156552107455268_n1739534754_67af31a285b0e.jpg') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        .orange
        {
            color:#febd49;
        }
        .bg-orange
        {
            background-color:#febd49;
        }
        .hero p {
            font-size: 1.2rem;
        }


            .color-thumbnail {
                width: 40px;
                height: 30px;
                margin: 5px;
                cursor: pointer;
                border: 2px solid transparent;
                transition: all 0.3s ease;
            }
            
            .color-thumbnail:hover {
                transform: scale(1.1);
            }
            
            .color-thumbnail.active {
                border: 2px solid #333;
            }
            
            .color-grid {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .card-body h3 {
                color: #2F5C55;
                font-weight: bold;
                margin-bottom: 20px;
            }
            
            .card {
                border: none;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
            
            .card-img-top {
                transition: all 0.5s ease;
            }
            
            @media (max-width: 576px) {
                .color-thumbnail {
                    width: 40px;
                    height: 30px;
                    margin: 3px;
                }
                
                .card-body h3 {
                    font-size: 1.5rem;
                }
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

        </style>
    </head>
<body>

    
    <header class="hero d-flex justify-content-center">
        
        <div class="hero-content">
            <h5 class="text-center text-white">BUY KITCHEN  ONLINE</h5>
            <h1 class="text-white fw-bold">DOOR REPLACEMENT <span style="color:#ffe000"> SERVICE</span></h1>
            <h3 class="text-white mb-4">Tired of looking at worn-out, chipped, or peeling kitchen cabinet doors?<br>Transform YOUR KITCHEN without a full renovation</h3>
            

            <span class="text-center">Refresh your kitchen's look and feel with our high-quality, made-to-measure door replacement service.</span><br>
            <span>Choose from a wide range of styles and colors to perfectly match your taste.</span>
            
        </div>
    </header>

    

    <section class="container-fluid my-5 bg-light py-4">
        <div class="row">
            {{-- <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-3"></div> --}}
            <div class=" col-xl-8 col-12 align-self-center px-5 d-flex flex-column flex-md-row p-0">
                <div class="row">
                    
                    <div class="position-relative col-12 col-xl-8 bg-white rounded-lg border-0 shadow-sm" style="left:20px;padding:40px 110px   40px 30px;">
                        
                        <h4 class="fw-bold text-black">Does the thought of updating your kitchen feel overwhelming and expensive?</h4>
                        <h2 class="fw-bolder"><span class="orange">Order a Sample</span> <span class=""text-black fw-bolder"> of Your Favorite Door</span></h2>
                        <p class="">Choosing the right kitchen doors is an important decision. Our sample service allows you to experience the finish, material, and color of our doors in your own home before committing to a full order. </p>
                        <button class="btn bg-orange px-4 text-uppercase rounded-0"> Order a Sample of your choice NOW!</button>
                    </div>
                    <div class="col-12 col-xl-4">
                    <img class="w-100 object-fit-cover rounded border border-warning" src="https://bkonline.uk/public/imgs/products/TALL-Larder-angled-12501720361557_668aa255bad6b.jpg"  class="img-fluid"  alt="Modern Kitchen" 
                        style="width: 300px; height: 300px; object-fit: cover;">
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-12">
                <form method="POST" action="{{ route('contact_us_inquiry') }}" class="border border-warning p-4">
                    @csrf
                    <div>
                        <div class="d-block">
                            <div class="text-center text-dark fw-bold">FOR FREE SURVEY AND QUOTE <span class="text-warning"> CALL US NOW!</span></div>
                            <div class="d-flex justify-content-center">
                                <i class="bi bi-phone text-dark"></i> <a href="tel:02080505605" class="text-decoration-underline text-center text-dark fs-4 fw-bold">
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
        <div class="row flex-column my-5 align-items-center justify-content-center">
            <div class="col-sm-5">
            <h4 class="text-center">Benefit from our limited time offer and get a FREE QUOTE for Kitchen Door Replacement</h4>
            </div>
            <div class="col-9 col-sm-3">
                <button class="btn bg-orange px-4 text-uppercase rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">book your FREE CONSULTATION NOW!</button>
            </div>
        </div>
    </section>

    <div class ="container-fluid bg-white">
        <section class="consultation-section bg-white">
            <div class="container bg-white">
                <h2 class="mb-2 text-black">Why Choose Our Kitchen Door Replacement Service?</h2>
                <div class = "row mb-1 justify-content-center">
                    <div class="col-6">
                        <div id="lines" class="mb-3">
                            <div id="line1"></div>
                            <div id="line2"></div>
                            <div id="line3"></div>
                        
                    </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/pound.png') }}"/>
                            </div>
                            <h4>01. <span class="text-primary">Cost-Effective Upgrade</span></h4>
                            <p>Save money compared to a full kitchen remodel.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/clock.png') }}"/>
                            </div>
                            <h4>02. <span class="text-primary">Quick Transformation</span></h4>
                            <p>Achieve a new look in a fraction of the time.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/minimal-disruption.png') }}"/>
                            </div>
                            <h4>03. <span class="text-primary">Minimal Disruption</span></h4>
                            <p>Less mess and inconvenience than a full renovation</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <i class="bi bi-card-list"></i>
                            </div>
                            <h4>04. <span class="text-primary">Enhance Your Style</span></h4>
                            <p>Update your kitchen to reflect your current taste.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/palette.png') }}"/>
                            </div>
                            <h4>05. <span class="text-primary">Increase Home Value</span></h4>
                            <p>A refreshed kitchen can boost your property's appeal.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/leaf.png') }}"/>
                            </div>
                            <h4>06. <span class="text-primary">Eco-Friendly Option</span></h4>
                            <p>Reusing existing cabinets is a more sustainable choice.</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
    </div>


    <div class="container py-5">
        <div class="mb-3 row justify-content-center">
            <h4 class="text-black fw-bold text-center">Do you crave a kitchen that feels fresh, modern, and inviting?</h4>
            <h1 class="mb-1 text-center text-black"> Discover the Perfect Doors for Your Kitchen</h1>
            <p class="text-center fs-6 w-75">Browse our extensive collection of kitchen door styles, available in a wide array of colors and finishes. Find the ideal match for your existing cabinets and buy kitchen doors to create the kitchen of your dreams</p>

        </div>
        <div class="row justify-content-center">
            @foreach ($styles as $style)
            <div class="col-sm-6 col-lg-4 my-3">
                <div class="card">
                    <img src="{{ $style->image_path ? asset('imgs/styles/' . $style->image_path) : '#' }}" class="card-img-top" id="main-image" alt="Kitchen Cabinet">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="mb-0">{{$style->name}}</h3>
                            <h5 class="mb-0 text-decoration-underline">Available Colors:</h5>
                        </div>
                        
                        <div class="color-grid">
                            @foreach ($style['colours'] as $styleColour)
                            @php ($colour = \App\Models\Colour::where('id', $styleColour)->first()) @endphp
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}&colour_id={{$styleColour}}" title="{{ $colour->trade_colour }}">
                                <div class="color-thumbnail active" style="background-color: {{$colour->colour_code}};" data-color="white" title="{{ $colour->trade_colour }}"></div>
                            </a>
                            @endforeach
                            <!-- <div class="color-thumbnail" style="background-color: #E8E4DC;" data-color="light-gray"></div>
                            <div class="color-thumbnail" style="background-color: #E9E2D5;" data-color="cream"></div>
                            <div class="color-thumbnail" style="background-color: #4A4A4A;" data-color="dark-gray"></div>
                            <div class="color-thumbnail" style="background-color: #F5EFE2;" data-color="off-white"></div>
                            <div class="color-thumbnail" style="background-color: #F0E9D6;" data-color="beige"></div> -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>

    <div class ="container-fluid bg-white">
        <section class="consultation-section bg-white">
            <div class="container bg-white">
                <h4 class="text-black fw-bold text-center">Wish you could instantly modernize your kitchen without a disruptive renovation?</h4>
                <h2 class="mb-2 text-black"> Our Simple 3-Step Door Replacement Process</h2>
                <div class = "row mb-1 justify-content-center">
                    <div class="col-6">
                        <div id="lines" class="mb-3">
                            <div id="line1"></div>
                            <div id="line2"></div>
                            <div id="line3"></div>
                        
                    </div>
                    </div>
                </div>
                
                <h4 class="mb-4">HOW IT WORKS</h4>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/browse.png') }}"/>
                            </div>
                            <h4 class="">01. <span class="text-primary">Browse & Enquire</span></h4>
                            <p>Explore our door styles and colors online. Contact us for a free quote (for a limited time) or to discuss your project.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/choose.png') }}"/>
                            </div>
                            <h4>02. <span class="text-primary">Measure & Choose</span></h4>
                            <p>We'll guide you through measuring your existing doors or offer an optional on-site survey (limited time offer) for precise measurements. Select your desired style and color.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/kitchen-room.png') }}"/>
                            </div>
                            <h4>03. <span class="text-primary">Expert Installation</span></h4>
                            <p> Our professional team will carefully install your new doors, ensuring a perfect fit and finish. </p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </section>
    </div>

    <div class ="container-fluid bg-white">
        <section class="consultation-section bg-white">
            <div class="container bg-white">
                <h2 class="mb-2 text-black">Why Choose Buy Kitchen Online for Door Replacement?</h2>
                <div class = "row mb-1 justify-content-center">
                    <div class="col-6">
                        <div id="lines" class="mb-3">
                            <div id="line1"></div>
                            <div id="line2"></div>
                            <div id="line3"></div>
                        
                    </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="consultation-step rounded bg-light px-5">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/high-quality-materials.png') }}"/>
                            </div>
                            <h4 class="fw-bold text-primary fs-5">High-Quality Materials</h4>
                            <p>We use durable and stylish materials for long-lasting beauty.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="consultation-step rounded bg-light px-5">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/wide-range-of-styles.png') }}"/>
                            </div>
                            <h4 class="fw-bold text-primary fs-5">Wide Range of Styles & Colors</h4>
                            <p>Find the perfect match for your taste</p>
                        </div>
                    </div> <div class="col-md-3">
                        <div class="consultation-step rounded bg-light px-5">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/experienced-installation.png') }}"/>
                            </div>
                            <h4 class="fw-bold text-primary fs-5">Experienced Installation Team</h4>
                            <p>Professional and reliable fitting services.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="consultation-step rounded bg-light px-5">
                            <div class="icon-circle">
                               <img src="{{ asset('images/excellence-customer-support.png') }}"/>
                            </div>
                            <h4 class="fw-bold text-primary fs-5">Excellent Customer Service</h4>
                            <p>We're here to help you every step of the way.</p>
                        </div>
                    </div>
                </div>
                
                <div class="">
                    <h2 class="mb-2 text-black">Ready to Transform Your Kitchen?</h2>
                    <a href="#" class="btn btn-lg cta-button rounded-0" style="background-color:#ffc107;" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Free Quote for Door Replacement NOW!</a>
                </div>
            </div>
        </section>
    </div>

     <!-- Testimonials -->
     @include('frontend.testimonials_component')
      <!-- FAQs -->
    {{-- @include('frontend.faqs_component', ['faqsData' => $generalFaqs]) --}}

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

</body>
    
@push('scripts')
    <script>
        $(document).ready(function () {
            const $carousel01 = $('.main-carousel-banner-01');
            /* #orderComponentSlider.owlCarousel({
                loop:true,
                margin:50,
                stagePadding:15,
                autoplay:true
            }); */
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
        });
    </script>
@endpush
</x-guest-layout>