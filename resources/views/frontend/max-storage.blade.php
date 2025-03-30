<x-guest-layout>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Storage Kitchen Designs</title>
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
            <h1 class="text-white fw-bold">Custom Kitchen Units</h1>
            <h1 class="text-warning fw-bold">Timeless Elegance</h1>
            <p>We offer premium, bespoke designer kitchens at competitive prices.</p>
            <div class="scroll-down">Scroll Down <i>&#x2193;</i></div>
        </div>
    </header>

    <section class="container my-5">
        <div class="row">
            {{-- <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-3"></div> --}}
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 align-self-center px-5">
                <div style="width:70%; ">
                    <h1>Start Your Journey with <span class="text-warning">BK Online</span>
                    </h1>
                    <p class=" fs-5">
                        Book your <span class="text-danger"> Free </span>consultation today and take the first step toward your dream kitchen. Whether virtually or with an on-site survey, we are here to guide you every step of the way.
                    </p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
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
            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-3"></div>
        </div>
    </section>


    <!-- Key designs -->
    {{-- <section class="container-fluid bg-green-color py-4 mt-4">
        <div class="col-12 d-flex flex-column align-items-center">
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
        <p>Build a kitchen that reflects your needs & style.</p>
        <button  class="btn rounded-0 btn-warning px-5 mx-n4 text-uppercase">BOOK An on-site survey NOW!</button>
        </div>
   </div>
</div> --}}



<div class="container-fluid py-3" style="background-color:#f2f4f5">
    <section class="container pb-4">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card border-0 h-100">
                    <div class="card-body text-center p-4">
                        <div class="card-icon">
                            <i class="bi bi-card-list text-warning" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                        </div>
                        <h5 class="card-title mb-3 text-dark">01.</h5>
                        <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Design Requirements</h5>
                        <p class="card-text text-muted">You inform us about your requirements.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card border-0 h-100">
                    <div class="card-body text-center p-4">
                        <div class="card-icon">
                            <i class="bi bi-cash-stack text-warning" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                        </div>
                        <h5 class="card-title mb-3 text-dark">02.</h5>
                        <h5 class="card-subtitle mb-3 text-teal" style="color:#2a6161;">Upfront Pricing</h5>
                        <p class="card-text text-muted">We create a personalized design and provide clear, upfront pricing.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card border-0 h-100">
                    <div class="card-body text-center p-4">
                        <div class="card-icon">
                            <i class="bi bi-clipboard-check text-warning" style="font-size: 3rem; margin-bottom: 1rem;"></i>
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
            <p class="fw-bold">Build a kitchen that reflects your needs & style.</p>
            <button class="btn btn-warning px-5 text-uppercase rounded-0">Book An On-Site Survey Now!</button>
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

    
    <section class="container pt-5 pb-2">
        <div class="row">
            <h2 class="col-12 text-center mb-4 fw-bold text-danger text-uppercase">Are you struggling with kitchen storage space?</h2>

        </div>
        <div class="row">
            <div class="col-12 d-flex align-items-center">
                <div>
                    <h5 style="color: #2a6161">We are introducing <br><b style="color: #000">BESPOKE MAX STORAGE KITCHENS</b></h5>
                    <small>Standard designer kitchens are beautiful but with limited storage space. Bulk-manufactured standard space units are not the solution for your major storage problems. At BKO, we offer a bespoke kitchen unit designed to maximize your kitchen’s storage with the deepest, tallest, and widest units in the market, and they are customized to suit your needs.
                        We have many colours available in supergloss and ultramatt finishes like white, cream, ivory, cashmere, etc. Choose from our huge range of unique designs, and we will customize them to fit your kitchen's dimensions and style.
                        <br>
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
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/homepage.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card border-0">
                    <div class="p-5 bg-green-color d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
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
                    <div class="p-5 bg-yellow-color2 d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
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
                    <div class="p-5 bg-dark d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h4 class="text-white fw-bold text-center">WIDEST UNITS</h4>
                        <p class="text-white text-center">Wide drawers for organized storage of kitchens essentials. Make use of every inch efficiently.</p>
                    </div>
                </div>
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
        <div class="row">
            
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

                {{-- <img src="https://bkonline.uk/public/imgs/products/TALL-Larder-angled-12501720361557_668aa255bad6b.jpg" class="img-fluid" alt="Modern Kitchen" style="width:520px; height:540px; box-shadow: 20px 22px 0px 0px rgba(254,202,109,1);"> --}}
            </div>
            
        </div>
    </section>
</div>
<div class="container-fluid py-5" style="background-color:#f2f4f5;">
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

</div>
<div class="container-fluid py-5" style="background-color:#f2f4f5;">
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
                    
                    {{-- <ul class="list-group">
                        <li class="list-group-item">22 mm Thick ROBUST DOORS</li>
                        <li class="list-group-item">18 mm+ THICK BACK AND SIDES</li>
                        <li class="list-group-item"> Our units have 18mm+ back. It makes them solid, durable, and customized. They are more efficient than the standard 6-12 mm fragile unit backs available in the market.</li>
                        <li class="list-group-item">The height and depth of all the units is customized according to your preferences</li>
                        
                      </ul> --}}
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 mb-4">
                <img src="https://bkonline.uk/public/imgs/products/thick-doors1739481730_67ae6282e5549.jpg" class="img-fluid" alt="Smart Kitchen" style="width:400px; height:420px; box-shadow: 20px 22px 0px 0px rgba(254,202,109,1);">
            </div>
        </div>
    </section>
</div>

    <section class="conatiner px-4 py-4 text-center mb-4">
        <div class="px-4 text-center mb-4">
            <h4 class="text-center text-danger">WHY settle for an average-sized kitchen </h4>
            <h4 class="text-center" style="color:#2a6161">WHEN WE HAVE ELIMINATED THE PRICE ISSUE FOR A FULLY CUSTOMIZED KITCHEN? </h4>
        </div>
    </section>

    <section class="container mb-4">
        <div class="row mb-4">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                <h6 class="fw-bold mb-4">NATIONAL RETAILER STANDARD-SIZED KITCHEN</h6>
                <img src="https://bkonline.uk/public/images/slab.jpeg" class="img-fluid" alt="" style="width:540px; height:560px; box-shadow: -22px -13px 0px 0px rgba(42, 97, 97,1);">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="overflow: hidden;">
                <h6 class="fw-bold mb-4">BESPOKE MAX STORAGE KITCHEN</h6>
                {{-- <img style="max-height: 500px; overflow: hidden" src="https://bkonline.uk/public/imgs/products/421878074_891869916280279_5405404846063335271_n1739538312_67af3f882943d.jpg" class="img-fluid" alt="" > --}}
                <img style="width:540px; height:560px; box-shadow: 18px -13px 0px 0px rgba(254,202,109,1);" src="https://bkonline.uk/public/imgs/products/421878074_891869916280279_5405404846063335271_n1739538312_67af3f882943d.jpg" class="img-fluid" alt="" >
            
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4 d-flex align-items-center">
                <table class="table table-bordered">
                    <thead class="bg-warning text-white">
                        <tr>
                            <th>FEATURES</th>
                            <th>NATIONAL RETAILER STANDARD-SIZED KITCHEN</th>
                            <th>BESPOKE MAX STORAGE KITCHEN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Design flexibility</td>
                            <td>NO</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>Cost</td>
                            <td>£££</td>
                            <td>£££</td>
                        </tr>
                        <tr>
                            <td>Installation time</td>
                            <td>Reasonable Time Required</td>
                            <td>Reasonable Time Required</td>
                        </tr>
                        <tr>
                            <td>Aesthetic appeal</td>
                            <td>Cannot be Customized, Repetitive Designs</td>
                            <td>Fully Customized, Unique Designs.</td>
                        </tr>
                        <tr>
                            <td>Storage solutions</td>
                            <td>Less Storage Solutions.</td>
                            <td>More Storage Solutions.</td>
                        </tr>
                        <tr>
                            <td>Durability</td>
                            <td>Standard/Fragile Quality Material is Used</td>
                            <td>Premium/Durable Quality Material is Used</td>
                        </tr>
                        <tr>
                            <td>Professional expertise</td>
                            <td>Not Needed Because Kitchens Are Predesigned</td>
                            <td>A Whole Team Of Professionals Is Required</td>
                        </tr>
                        <tr>
                            <td>Value for money</td>
                            <td>Functional And Affordable</td>
                            <td>Fully Customized, Functional, Practical and Affordable</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    {{-- <section class="bg-dark text-white m-0 p-0">
        <footer class="text-center bg-dark text-white m-0 py-2">
            &copy; 2025 Max Storage Kitchen Designs. All rights reserved
        </footer>
    </section> --}}


    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</x-guest-layout>
