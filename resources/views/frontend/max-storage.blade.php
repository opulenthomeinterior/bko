<x-guest-layout>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Storage Kitchen Designs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Responsive Line Styling */
#line1,#line2,#line3 {
    /* Base styles */
    height: 4px;
    width: 100%;
    max-width: 200px;
    background-color: #2A6161;

    /* Responsive sizing */
    margin: 0 auto; /* Center the line */
    
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
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f8f8f8;
            color: #333;
        } */

        .hero {
            /* background: url('https://bkonline.uk/public/imgs/products/464785299_8512016742222733_5169156552107455268_n1739534754_67af31a285b0e.jpg') center/cover no-repeat; */
            background: url('{{ asset('images/hero-image.jpeg') }}') center/cover no-repeat;
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

        .hero p {
            font-size: 1.2rem;
        }

        .scroll-down {
            margin-top: 20px;
            font-size: 1.2rem;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            animation: moveUpDown 1.5s infinite ease-in-out;
        }

        .scroll-down i {
            font-size: 2rem;
            margin-top: 5px;
        }

        @keyframes moveUpDown {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 12px;
            border: 2px solid #ebc266;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .styled-table thead {
            background-color: #ebc266;
            color: black;
            font-size: 13px;
            font-weight: bold;
        }

        .styled-table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .styled-table tbody tr:nth-child(even) {
            background-color: #e0e0e0;
        }

        .styled-table tbody tr:hover {
            background-color: #ebc266;
            transition: background-color 0.3s ease-in-out;
        }

        .top-navbar {
            background-color: #000;
            color: white;
            padding: 2px;
            display: flex;
            justify-content: center;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .top-navbar-text {
            color: white;
            text-decoration: none;
        }

        .top-navbar-text:hover {
            color: white;
            text-decoration: none;
        }

        .bg-yellow-color2 {
            background-color: #febd49;
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
    </style>
</head>

    <!-- <nav class="top-navbar">
        <a class="top-navbar-text" href="{{route('home')}}"> 
            Visit BK Online
        </a> 
    </nav> -->

    <header class="hero">
        <div class="hero-content">
            <h1 class="fs-md-0 fs-1 text-white fw-bold text-uppercase">Bespoke designer <span class="text-warning">kitchens</span></h1>
            {{-- <h1 class="text-warning fw-bold">Timeless Elegance</h1> --}}
            <p class=""><span class="fs-sm-3">Are You Settling for a Kitchen That Doesn't Fit Your Life?</span> <br>We offer premium, Bespoke Kitchen Units at competitor prices</p>
            {{-- <div class="scroll-down">Scroll Down <i>&#x2193;</i></div> --}}
        </div>
    </header>

    <div class="container-fluid py-3" style="background: linear-gradient(135deg,#f5f7fa 0%, #e0e4e9 100%)">
    <section class="container my-5">
        <div class="row">
            {{-- <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-3"></div> --}}
            <div class=" col-lg-6 col-md-8 col-sm-12 col-12 align-self-center px-5">
                <div style="">
                    <h2 class="">
                        <span class="text-warning">Standard Kitchens </span>
                        <br>
                        frequently require <span class="text-warning">compromises</span>

                        {{-- Start Your Journey with <span class="text-warning">BK Online</span> --}}
                    </h2>
                   
                    <h6>
                        Limited layout, generic styles, and materials that do not suit your needs
                    </h6>
                    {{-- <p class=" fs-5">
                        Book your <span class="text-danger"> Free </span>consultation today and take the first step toward your dream kitchen. Whether virtually or with an on-site survey, we are here to guide you every step of the way.
                    </p> --}}

                    <h6 class="mt-5 fw-bold">
                        Do you find yourself wishing for specific features, or a more personalized aesthetic that off-the-shelf options simply can't provide?
                        <br>
                        Stop Compromising!
                    </h6>

                    <h6 class="mt-5">
                        <span class="text-danger fw-bold text-uppercase">FOR A LIMITED TIME, WE ARE OFFERING FREE CONSULTATION and on-site survey.</span>
                        <br>
                        Because we believe your kitchen should be more than just a place to cook – it should be a reflection of your personality and a hub for your lifestyle
                    </h6>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">


                @include('frontend.inquiry_form')

                {{-- <form method="POST" action="{{ route('contact_us_inquiry') }}" class="border border-warning p-4">
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
                </form> --}}
            </div>
            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-3"></div>
        </div>
    </section>
</div>

    <!-- Key designs -->
    {{-- <section class="container-fluid bg-green-color py-4 mt-4">
        <div class="col-12 d-flex flex-column align-items-center">
        </div>
    </section> --}}

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
    </section>

    {{-- <div class ="container-fluid py-3" style="background-color:#f2f4f5">
    <section class="container  pb-4">
        
        <div class="row justify-content-center">
            
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12" ">  
                <div class="card border-0" style="height: 300px; width:300px;">
                    <div class="card-body text-center p-4">
                        <div class="card-icon">
                            <i class="bi bi-card-list" style=" color: #ffa500;
            font-size: 3rem;
            text-align: center;
            margin-bottom: 1rem;"></i>
                        </div>
                        <h5 class="card-title mb-3 text-dark">01.</h5>
                        <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Design Requirements</h5>
                        <p class="card-text text-muted">You inform us about your requirements.</p>
                    </div>
            </div>
        </div>
           
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
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
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
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
        <button  class="btn rounded-0 btn-warning px-5 mx-n4 text-uppercase">Start designing your Ideal Kitchen</button>
        </div>
   </div>
</div> --}}



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
            <p class="fw-bold text-success">Stop dreaming and build a kitchen that reflects your needs and style</p>
            <button class="btn btn-warning px-5 text-uppercase rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Start designing your Ideal Kitchen</button>
        </div>
    </div>
</div>



    {{-- <section class="container bg-white py-4">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div style="border: 20px solid #eda10e; border-radius: 50%; background-color:rgb(255, 203, 100); height: 180px; width: 180px; display:flex; align-items-center; padding: 10px">
                            <img class="img-fluid" src="https://cdn-icons-png.flaticon.com/512/2237/2237440.png" alt="">
                        </div>
                        <div style="background-color: #eda10e; height: 100px; width: 60%; display: flex; align-items: center; border-radius: 0px 50px 50px 0px; justify-content: end; margin-left: -20px; padding: 10px">
                            <h6 class="text-white text-center">You inform us about your requirements</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div style="border: 20px solid #2a6161; border-radius: 50%; background-color:rgb(63, 138, 138); height: 180px; width: 180px; display:flex; align-items-center; padding: 10px">
                            <img class="img-fluid" src="https://cdn-icons-png.flaticon.com/512/2237/2237440.png" alt="">
                        </div>
                        <div style="background-color: #2a6161; height: 100px; width: 60%; display: flex; align-items: center; border-radius: 0px 50px 50px 0px; justify-content: end; margin-left: -20px; padding-right: 10px">
                            <h6 class="text-white text-center">We create a personlized design and provide clear, upfront pricing</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div style="border: 20px solid #000; border-radius: 50%; background-color:rgb(140, 140, 140); height: 180px; width: 180px; display:flex; align-items-center; padding: 10px">
                            <img class="img-fluid" src="https://cdn-icons-png.flaticon.com/512/2237/2237440.png" alt="">
                        </div>
                        <div style="background-color: #000; height: 100px; width: 60%; display: flex; align-items: center; border-radius: 0px 50px 50px 0px; justify-content: end; margin-left: -20px; padding-right: 10px">
                            <h6 class="text-white text-center">The final design will be crafted to meet your needs without the pressure of upselling</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </section> --}}

    {{-- <section class="container-fluid bg-light py-4 mt-4 border-top border-warning">
        <div class="col-12 d-flex flex-column align-items-center">
        </div>
    </section> --}}

    
    <section class="container pt-5 pb-2 mb-5">
        <div class="row">
            <h3 class="col-md-12 col-11 text-center mb-4 fw-bold text-black text-uppercase">WHAT ARE BESPOKE MAX STORAGE KITCHENS?</h3>
            {{-- <h4 class="col-md-12 p-0 col-11 text-start  fw-bold text-danger text-uppercase">ARE YOU STRUGGLING WITH STORAGE SPACE?</h4> --}}

        </div>
        <div class="row">
            <div class="col-12 px-5 p-md-0 d-flex align-items-center">
                <div>
                    <h4 class="text-uppercase text-danger">ARE YOU STRUGGLING WITH STORAGE SPACE?</h4>
                    <h5 class="text-uppercase" style="color: #2a6161">SOLUTION
                        
                         <br><b style="color: #000">BESPOKE MAX STORAGE KITCHENS</b></h5>
                    <small>
                        Standard designer kitchens are beautiful but with limited storage space. Bulk-manufactured standard space units are not the solution for your major storage problems. 
                        <br>
                        <span>
                            <span class="text-black fw-bold">
                                Are overcrowded </span> <span class="text-warning fw-bold"> cabinets and cluttered countertops </span> <span class="text-black fw-bold">causing you daily stress?</span><br>
                            At BKO, we offer made to measure kitchens units to maximize your kitchen with the deepest, tallest, and widest units in the market, and they are customized to suit your needs. 
                        </span>
                        <br>
                    </small>
                        {{-- <h5><b>Never settle for a standard-size kitchen because you don’t have to any more. </b></h5>
                        It is your chance to enjoy luxurious designs with practicality, especially when the prices are lower than those of standard designer kitchens.
                     --}}
                </div>
            </div>
            {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                <img src="https://bkonline.uk/public/imgs/products/storage-space1739481877_67ae631511215.jpg" class="img-fluid" alt="Luxury Kitchen">
            </div> --}}
        </div>
    </section>

    
    <section class="container bg-white mb-5">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/deepest.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="p-5 bg-green-color d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h3 class="text-white fw-bold text-center">TALLEST UNITS</h3>
                        <p class="text-white text-center">Floor-to-ceiling cabinets for extra storage. Ideal for small kitchens needing vertical space.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/widest.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="p-5 bg-yellow-color2 d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h4 class="text-white fw-bold text-center">DEEPEST UNITS</h4>
                        <p class="text-white text-center">Deeper storage than standard cabinets. Maximizes space for pots, pans and appliances.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/tallest.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="p-5 bg-dark d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h4 class="text-white fw-bold text-center">WIDEST UNITS</h4>
                        <p class="text-white text-center">Wide cabinets for organized storage of kitchens essentials. Make use of every inch efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
            <h4 class=" text-center text-md-start text-black">Never settle for a standard-size kitchen because you don’t have to any more.</h4>
            
            </div>
        </div>
        <div class="row justify-content-center">
            <div calss="col-3">
                <p class="text-center">It is your chance to enjoy luxurious designs with practicality, especially when we have eliminated the price issue</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-8">
                <button class="btn btn-warning px-2 px-lg-5 text-uppercase rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Book your free consultation now!</button>
            </div>
        </div>
    </section>


    <!-- <section class="container mb-4" style="margin-top: 4rem;">
        <div class="row mb-4">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                <img src="https://bkonline.uk/public/imgs/products/our-process1739481888_67ae63203533a.jpg" class="img-fluid" alt="Luxury Kitchen">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                <h2 class="text-center">Our process is straight forward</h2>
                <ul>
                    <li><span>You inform us about your requirements</span></li>
                    <li><span>We create a personalized design and provide clear, upfront pricing</span></li>
                    <li><span>The final design will be crafted to meet your needs without the pressure of upselling/suggestive selling</span></li>
                </ul>
            </div>
        </div>
    </section> -->

    <div class="container-fluid py-5" style="background-color:#f2f4f5;">
    <section class="container mb-4">
        <div class="row justify-content-center gap-md-2 gap-lg-5">
        <div class="col-9 col-md-5 col-lg-3">
            <img src="{{ asset('images/tall-cabinets.png') }}" 
            class="img-fluid" 
            alt="Modern Kitchen" 
            style=" box-shadow: 20px 22px 0px 0px rgba(254,202,109,1); object-fit: cover;">
            <div class="content mt-5">
            <h3 class="text-uppercase text-center">TALL CABINETS</h3>
            <p class="text-center"> Our tall cabinets are made up to 850mm deep and more to flush the American fridge and freezer (750mm deep). The kitchen looks seamless when all the appliances, and cabinets are perfectly aligned.</p>
            </div>
        </div>
        <div class="col-9 col-md-5 col-lg-3">
            <img src="{{ asset('images/bridging.png') }}" class="img-fluid border border-warning" alt="Smart Kitchen" style=" object-fit: cover; box-shadow: 20px 22px 0px 0px rgba(42, 97, 97,1);">
            <div class="content mt-5">
                <h3 class="text-uppercase text-center">Bridging Units</h3>
                <p class="text-center"> Our bridging units are designed to seamlessly align with tall units, offering a custom fit for you. While the market standard typically offers a depth of 300mm, we provide options with depths of up to 850mm or more. </p>
                </div>
        </div>
    </div>
        {{-- <div class="row">
            
            <div class="col-xl-7 p-0 col-lg-7 col-sm-12 col-12 mb-4 d-flex align-items-center">
                <div class="card bg-white border-0 shadow-sm" style="padding:80px 170px 80px 50px;">
                    <h2 class="">TALL CABINETS</h2>
                    <p class="">Our tall cabinets are made up to 800mm deep to flush the American kitchen (750mm deep). The kitchen looks seamless when all the appliances, and cabinets are perfectly aligned. </p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-sm-12 col-12 p-0 mb-4">
                <img src="https://bkonline.uk/public/imgs/products/TALL-Larder-angled-12501720361557_668aa255bad6b.jpg" 
     class="img-fluid" 
     alt="Modern Kitchen" 
     style="width: 520px; height: 540px; box-shadow: 20px 22px 0px 0px rgba(254,202,109,1); object-fit: cover;">

               
            </div>
            
        </div> --}}
    </section>
</div>
{{-- <div class="container-fluid py-5" style="background-color:#f2f4f5;">
    <section class="container mb-4">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-4 col-sm-12 col-12 mb-4">
                <img src="https://bkonline.uk/public/imgs/products/bridging-unit1739481721_67ae627909ea3.jpg" class="img-fluid" alt="Smart Kitchen" style="width:520px; height:540px; object-fit: cover; box-shadow: -22px 20px 0px 0px rgba(42, 97, 97,1);">
            </div>
            <div class="col-xl-7 col-lg-7 col-md-5 col-sm-12 col-12 mb-4 d-flex align-items-center">
                <div class= "card bg-white border-0 shadow-sm" style="padding:80px 60px 80px 50px;">
                    <h2 class="">BRIDGING UNITS</h2>
                    <small>Our bridging units are designed to seamlessly align with tall units, offering a custom fit for your space. While the market standard typically offers a depth of 300mm, we provide options with depths of up to 800mm for enhanced flexibility and storage capacity. Additionally, we ensure symmetry above your fridge for a clean, balanced aesthetic.</small>
                </div>
            </div>
           
        </div>
    </section>

</div> --}}
{{-- <div class="container-fluid py-5" style="background-color:#f2f4f5;">
    <section class="container mb-4">
        <div class="row">
           
            <div class="col-xl-7  col-lg-7 col-md-6 col-sm-12 col-12 mb-4 d-flex align-items-center">
                <div class="bg-white p-5">
                    <h2 class="ms-3">WE OFFER</h2>
                    <ul>
                        <li class="font-weight-bold" style="list-style-type:disc">22 mm Thick ROBUST DOORS</li>
                        <li>
                            <li class="font-weight-bold" style="list-style-type:disc">18 mm+ THICK BACK AND SIDES</span>
                            
                                <li class ="fw-bold" style="list-style-type:disc">
                                    Our units have 18mm+ back. It makes them solid, durable, and customized. They are more efficient than the standard 6-12 mm fragile unit backs available in the market.</li>
                        
                        </li class="">
                        <li class="font-weight-bold" style="list-style-type:disc">The height and depth of all the units is customized according to your preferences</li>
                    </ul> 
                  
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 mb-4">
                <img src="https://bkonline.uk/public/imgs/products/thick-doors1739481730_67ae6282e5549.jpg" class="img-fluid" alt="Smart Kitchen" style="width:400px; height:420px; box-shadow: 20px 22px 0px 0px rgba(254,202,109,1);">
            </div>
        </div>
    </section>
</div> --}}

    <section class="conatiner px-4 py-4 text-center mb-4">
        <div class="px-4 text-center">
            <h4 class="text-center text-danger">WHY settle for an average-sized kitchen  </h4>
            <h5 class="text-center" style="color:#2a6161">WHEN WE HAVE ELIMINATED THE PRICE ISSUE FOR A FULLY CUSTOMIZED KITCHEN? </h5>
        </div>
    </section>

    <section class="container mb-4">
        <div class="row gap-lg-5 gap-md-2 justify-content-center mb-4">
            <div class="col-lg-3 col-md-5  col-9 mb-4">
                <h6 class="fw-bold text-center mb-4">NATIONAL RETAILER<br> STANDARD-SIZED KITCHEN</h6>
                <img src="{{ asset('images/standard-sized-kitche.png') }}" class="img-fluid" alt="" style=" box-shadow: -22px -13px 0px 0px rgba(42, 97, 97,1);">
            </div>
            <div class="col-lg-3 col-md-5  col-9 mb-4" style="overflow: hidden;">
                <h6 class="fw-bold text-center mb-4">BESPOKE MAX <br> STORAGE KITCHEN</h6>
                {{-- <img style="max-height: 500px; overflow: hidden" src="https://bkonline.uk/public/imgs/products/421878074_891869916280279_5405404846063335271_n1739538312_67af3f882943d.jpg" class="img-fluid" alt="" > --}}
                <img style=" box-shadow: 18px -13px 0px 0px rgba(254,202,109,1);" src="{{ asset('images/max-storage-kitchen-image.png') }}" class="img-fluid" alt="" >
            
            </div>
           
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4 d-flex align-items-center">
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-warning text-white">
                        <tr>
                            <th class="align-middle">FEATURES</th>
                            <th class="align-middle">NATIONAL RETAILER STANDARD-SIZED KITCHEN</th>
                            <th class="align-middle">BESPOKE MAX STORAGE KITCHEN</th>
                            <th class="align-middle">BENEFITS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Layout & Flow</th>
                            <td>Often limited to pre-determined configurations.</td>
                            <td>Designed specifically for your space and how you use it.</td>
                            <th>Eliminates cramped spaces and inefficient workflows.</th>
                        </tr>
                        <tr>
                            <th>Storage Capacity</th>
                            <td>Standard-sized cabinets with basic shelving.</td>
                            <td>Maximized storage through deep drawers, pull-outs, and organizers.</td>
                            <th>Solves the problem of overflowing cabinets and cluttered countertops.</th>
                        </tr>
                        <tr>
                            <th>Corner Cabinet Use</th>
                            <td>Often awkward and underutilized.</td>
                            <td>Clever solutions like lazy susans, pull-outs, and magic corners.</td>
                            <th>Eliminates wasted space in hard-to-reach areas. </th>
                        </tr>
                        <tr>
                            <th>Internal Organization</th>
                            <td>Basic shelves; limited options for customization.</td>
                            <td>Tailored drawer dividers, spice racks, utensil holders, etc.</td>
                            <th>Ends the frustration of rummaging through disorganized drawers.</th>
                        </tr>
                        <tr>
                            <th>Accessibility</th>
                            <td>Can be difficult to reach items in high or low areas.</td>
                            <td>Designed with accessibility in mind, including pull-down shelves</td>
                            <th>Reduces physical strain from bending and reaching. </th>
                        </tr>
                        <tr>
                            <th>Material & Finish Choices</th>
                            
                            <td>Limited selection of standard options.</td>
                            <td>Wide range of high-quality, unique, and durable materials.</td>
                            <th>Allows for personalization and a higher-quality, longer-lasting kitchen.</th>

                        </tr>
                        <tr>
                            <th>Appliance Integration</th>
                            <td>Can sometimes look like an afterthought.</td>
                            <td>Seamless integration for a cohesive and streamlined appearance.</td>
                            <th>Creates a more visually appealing and functional space.</th>
                        </tr>
                        <tr>
                            <th>Personalization</th>
                            <td>Limited ability to customize to individual needs.</td>
                            <td>Fully customizable to your specific requirements and preferences.</td>
                            <th>Ensures the kitchen perfectly suits your lifestyle, cooking habits, and aesthetic tastes.</th>
                        </tr>
                        <tr>
                            <th>Countertop Space</th>
                            <td>Can be limited due to lack of efficient storage.</td>
                            <td>Optimized storage frees up valuable workspace.</td>
                            <th>Provides more room for food preparation and other kitchen tasks. </th>
                            
                        </tr>
                        <tr>
                            <th>Overall Functionality</th>
                            <td>Can be inefficient and frustrating to use.</td>
                            <td>Designed for optimal workflow and ease of use.</td>
                            <th>Makes cooking, cleaning, and organizing more enjoyable and less time-consuming.</th>
                            
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div class="row justify-content-center">
           <div class="col-8">
                 <h2 class="text-center">Smart storage solutions</h2>
                 <h4 class="text-success text-center"> Wish you could find that one spice without emptying the entire        cupboard?</h4>
                 <h3 class="text-center">We Can Help!</h3>
           </div>
       </div>
       <div class="row">
            <div class="storage-solution-carousel owl-carousel">
                <div class="item">
                <div class="card border">
                    <img>
                    <div class="card-body">
                        <h3>Carousel Set, Chrome Wire</h3>
                    </div>
                </div>
            </div>
            </div>
       </div>
    </div> --}}


    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-8">
                  <h2 class="text-center fw-bold">Smart storage solutions</h2>
                  <h5 class="text-success text-center mt-4"> Wish you could find that one spice without emptying the entire        cupboard?</h5>
                  <h5 class="text-center fw-bold">We Can Help!</h5>
            </div>
        </div>
        <div class="row mt-5 mb-3 justify-content-center">
            <div class="col-10 ">
                <div class="owl-carousel owl-theme overflow-hidden">
                    @foreach (\App\Models\Product::where('parent_category_id', 17)->groupBy('short_title')->limit(10)->get() as $intenalProduct)
                    <div class="item">
                        <a href="{{ route('orderbyproduct', [$intenalProduct->slug, $intenalProduct->serial_number]) }}" class="text-dark text-decoration-none">
                            <div class="card">
                                <img src="{{ asset('imgs/products/'.$intenalProduct->image_path) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $intenalProduct->short_title }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-4 col-8">
                    <a href="{{ route('ordercomponentbyname', ['slug' => 'internals']) }}" class="btn btn-warning px-3 text-uppercase rounded-0"> Explore Unique Storage Solutions</a>
                </div>
            </div>
        </div>
      </div>
      

      @include('frontend.why_choose_bkonline')
    {{-- <section class="bg-dark text-white m-0 p-0">
        <footer class="text-center bg-dark text-white m-0 py-2">
            &copy; 2025 Max Storage Kitchen Designs. All rights reserved
        </footer>
    </section> --}}


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
                @include('frontend.inquiry_form')
                {{-- <form method="POST" action="{{ route('contact_us_inquiry') }}" class="border border-warning p-4">
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
                </form> --}}
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>



    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Owl Carousel JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
      $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
                margin: 90,
                stagePadding: 20, // Add padding to avoid clipping
                // rtl: false,
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
                        items: 5,
                        loop: true,
                        margin: 50,
                        nav: true,
                        dots: true,
                        center: true,
                    }
                }
    });
  });
</script>
</x-guest-layout>
