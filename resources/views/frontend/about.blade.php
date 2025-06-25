    <x-guest-layout>
    <title>About </title>
        <head>
            <link rel="stylesheet" href="{{ asset('css/home.css') }}">
            <style>
                p {
                    text-align: justify;
                }

                .hero {
                    width: 100%;
                    height: 70vh;

                    background-image: url('{{ asset('images/about-us.png') }}');
                    /* min-height: 300px; */
                    background-size: cover;
                    background-position: center center;
                    background-repeat: no-repeat;
                    ">

                }

                .hero-content {
                    width: 40%;
                    position:absolute;
                    
                }

                .card {
                    min-height: 390px;
                    border: 1px solid #2a6161;
                }

                .bg-yellow {
                    background-color: #febd49;

                }

                .text-yellow {
                    color: #FFE000;
                }

                .bg-cyan {
                    background-color: #2a6161;
                }

                .our-story-image-shadow {
                    width: 550px;
                    height: 560px;
                    position: absolute;
                    left: 46%;
                    top: 3%;
                    z-index: -2;
                }

                .our-story-image img {
                    position: absolute;
                    left: 43%;
                    z-index: -1;
                    border: 1px solid #febd49;
                    border-radius:7px;
                    width:550px;
                }


                .our-team-image {
                    width: 400px;
                    height: 400px;
                    /* background-color:red; */

                }

                .our-team-content {
                    position: absolute;
                    top: 0;
                    left: 28%;
                }

                .our-team-image img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    object-position: 75% 100%;
                }

                .our-team-image-shadow {
                    width: 350.32px;
                    height: 380px;
                    position: absolute;
                    left: -1px;
                    top: 7%;
                    z-index: -2;
                }

                .overlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    /* Adjust width as needed */
                    height: 100%;
                    /* background: linear-gradient(to right, rgba(0, 0, 0, 0.9), transparent); */
                    background-color:black;
                    opacity:0.4;
                    z-index:0;
                    /* background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.4), transparent); */


                }
                .our-story-content
                {
                    max-height:350px; max-width:620px;
                }
                

                /* Mobile Devices (up to 480px) */
@media only screen and (max-width: 480px) {
    .our-story-image-shadow {
                    /* width: 90%;
                    height: 92%;
                    position: absolute;
                    left: 0;
                    top: 53%;
                    z-index: -2; */
                    display:none;
                }

                .our-story-image img {
                    position: absolute;
                    left: 0;
                    top:200px;
                    /* z-index: -1; */
                    border: 1px solid #febd49;
                    border-radius:7px;
                    width:100%;
                }
                
                 .our-story-content
                {

                    width: 700px;
                    max-height:200px;
                    background-color:green;
                    
                }
                .our-story
                {
                    margin-top: -12px;
                }
                .hero-content {
                    width: 90%;
                    
                }
                .hero-content p
                {
                    font-size: 18px;
                }
                .online-experience
                {
                    margin-top:-70px;
                }
                .our-core-values-card
                {
                    min-height:260px;
                }
  
}

/* Tablets (481px to 768px) */
@media only screen and (min-width: 481px) and (max-width: 768px) {
    .our-story-image-shadow {
                    /* width: 90%;
                    height: 92%;
                    position: absolute;
                    left: 0;
                    top: 53%;
                    z-index: -2; */
                    display:none;
                }

                .our-story-image img {
                    position: absolute;
                    left: 0;
                    top:300px;
                    /* z-index: -1; */
                    border: 1px solid #febd49;
                    border-radius:7px;
                    width:100%;
                }
                
                 .our-story-content
                {
                    min-width:100%;
                   
                    max-height:300px;
                    background-color:green;
                    
                }
                .our-story
                {
                    margin-top: -12px;
                }
                .hero-content {
                    width: 90%;
                    
                }
                .hero-content p
                {
                    font-size: 18px;
                }
                .online-experience
                {
                    margin-top:-70px;
                }
                
                .our-core-values-card
                {
                    min-height:260px;
                }
                .core-values-container
                {
                    margin-top:420px;
                }

}

/* Small Laptops (769px to 1024px) */
@media only screen and (min-width: 769px) and (max-width: 1024px) {
  
}

/* Desktops (1025px and above) */
@media only screen and (min-width: 1025px) {
  
}

               
    @media (max-width: 991.98px) {
      .story-card {
        margin-bottom: 2rem;
      }
    }
    .our-story-section {
      padding: 2rem 0;
      /* background-color: #f8f9fa; */
      overflow: hidden;
    }
    
    .story-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      padding: 2.5rem;
      position: relative;
      z-index: 2;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    .story-title {
      font-weight: 700;
      margin-bottom: 1.5rem;
      font-size: 2rem;
    }
    
    .highlight-text {
      color: #2e8b57;
      font-weight: 600;
    }
    
    /* .image-container {
      position: relative;
    } */
    
    .story-image {
      border-radius: 10px;
      width: 100%;
      height: auto;
      object-fit: cover;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

            </style>
        </head>

        <header class="hero position-relative d-flex flex-row justify-content-center align-items-center">
            <div class="overlay">

            </div>
            <div class="hero-content">

                <h1 class="text-white fw-bold text-center">Welcome To</h1>
                <h1 class="text-yellow fw-bold text-center">Buy kitchen online</h1>
                <p class="text-center fw-bold text-white">At BKO, we transform your dreams into reality. We're passionate
                    about making your kitchen lively and functional. Our mission is to make luxury kitchens accessible to
                    all by providing top-tier quality at affordable prices. </p>
            </div>
        </header>

        <div class="contaienr-fluid bg-light">
            <div class="container">
                <div class="row mb-0 mb-lg-5 flex-lg-row flex-sm-column position-relative" style="top:-50px"">
                    <div class=" col-lg-6 col-sm-12 bg-yellow rounded-3 p-5">
                    <h2 class="text-black fw-bolder text-center">GET THE BEST OF BOTH WORLDS</h2>
                        <h4 class="lh-base text-center  text-black">We are the ONLY brand offering high-quality products at wholesale prices displayed online,
                            complemented by on-site surveys and expert consultations.</h4>

                </div>
                <div class="col-lg-6 col-sm-12 bg-cyan rounded-3 p-5 text-white text-center">
                    <h2 class="text-white ">Time Efficiency</h2>
                        <h4 class="lh-base text-center  text-white"> 1.5 months of work in a few days.Save time with our streamlined process - what would typically take months, we deliver in days.</h4>

                </div>
            </div>
            
            <section class="our-story-section">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 p-0">
                      <div class="story-card" style="width:107%; padding:5rem 7rem 5rem 3rem;">
                        <h2 class="story-title">OUR STORY</h2>
                        <p class="mb-0">
                          BKO was founded with the concept of providing <span class="highlight-text"> high-quality products 
                          without a high price tag</span>. 
                          It does not matter if you want to build an entire kitchen, replace an existing component, 
                          or want premium wardrobes; BKO is here to cater to all your needs. 
                          You can bring your kitchens to life through our cutting-edge virtual design 
                          consultations and personalized service.
                        </p>
                      </div>
                    </div>
                    
                    <div class="col-12 col-lg-6 p-0">
                      {{-- <div class="image-container"> --}}
                        <img class="" src="{{ asset('images/story.png') }}" style="box-shadow: 17px 16px 0px 0px rgba(254,189,73,0.75);" />
                   
                      {{-- </div> --}}
                    </div>
                  </div>
                </div>
              </section>
              

            {{-- <div class="row position-relative our-story" style="min-height:650px;"> --}}
            {{-- <div class="row my-3 position-relative our-story" style="">
                <div class="col-12 my-3 col-lg-4 mt-lg-5 p-3 bg-dark">
                    <h2 class="text-black fw-bolder">Our Story</h3>
                        <p class="fs-6">BKO was founded with the concept of providing high-quality products without a high
                            price tag. It does not matter if you want to build an entire kitchen, replace an existing
                            component, or want premium wardrobes; BKO is here to cater to all your needs. You can bring your
                            kitchens to life through our cutting-edge virtual design consultations and personalized
                            service. </p>
                </div>
                <div class="col-lg-6 our-story-image">
                    <img class=shadow" src="{{ asset('/images/story.png') }}" style="box-shadow: 17px 16px 0px 0px rgba(254,189,73,0.75);" />
                   
                    {{-- <div class="our-story-image-shadow bg-yellow">

                    </div> --}}
                {{-- </div> --}}
                <!-- /.row our-story -->


            {{-- </div>  --}}
            <div class="container core-values-container mt-2">
                <div class="row mb-3">
                    <div class="col-lg-12">

                        <h3 class="text-center text-black fw-bold">OUR CORE VALUES</h3>
                    </div>
                </div>
                <div class="row our-core-values">
                    <div class="col-lg-4">
                        <div class="card our-core-values-card d-flex flex-column align-items-center px-3" style="">
                            <img src="{{ asset('/images/honest.png') }}" style="width:139px; " class="mx-auto" />
                            <div class="card-body">
                                <h3 class="fw-bold card-title text-center">
                                    Honest & Fair Trade
                                </h3>
                                <p class="card-text">We believe in providing the best value for your money. Our design
                                    services are flexible, and you have complete control over your kitchen design. You can
                                    make adjustments at any time to suit your preferences—without any pressure from us.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card our-core-values-card px-3" style="">
                            <img src="{{ asset('/images/transparency.png') }}" style="width:139px; " class="mx-auto" />
                            <div class="card-body">
                                <h3 class="fw-bold card-title text-center">Transparency & Fair Pricing</h3>
                                <p class="card-text">
                                    At Buy Kitchen Online, our main objective is sustainability. We use the latest
                                    sustainable manufacturing techniques to create up-to-date designs while delivering the
                                    highest quality products at affordable prices. Our products are elegant and
                                    eco-friendly. While building aesthetic and functional kitchens, we offer luxury without
                                    the luxury price tag.

                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card our-core-values-card px-3" style="">
                            <img src="{{  asset('/images/sustainability.png') }}" style="width:139px; " class="mx-auto" />

                            <div class="card-body">
                                <h3 class="fw-bold card-title text-center">
                                    Sustainability
                                </h3>
                                <p class="card-text">
                                    At Buy Kitchen Online, our main objective is sustainability. We use the latest
                                    sustainable manufacturing techniques to create up-to-date designs while delivering the
                                    highest quality products at affordable prices. Our products are elegant and eco
                                    friendly. While building aesthetic and functional kitchens, we offer luxury without the
                                    luxury price tag.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row our-core-values -->

            </div>
            <div class="container mt-5 py-5" style="min-height: 500px;">




                 {{-- <div class="row position-relative" style="min-height:500px;">

                    <div class="col-lg-6 our-team-image">
                        <img class=shadow" src="{{ asset('images/our-team.png') }}"" />
                        <div class=" our-team-image-shadow bg-yellow">
                    </div>

                    <div class="col-lg-4 mt-5 our-team-content bg-white py-4 px-5 rounded-3 shadow"
                        style="max-height:250px; min-width:500px">
                        <h3>Our Team</h3>
                        <p>
                            Behind every beautifully completed kitchen, there is a dedicated team working meticulously to
                            bring
                            your vision to life. Our team consists of experienced project managers, skilled designers, and
                            expert fitters, all committed to delivering exceptional results. With years of industry
                            experience,
                            each member brings a wealth of knowledge and expertise to every project, ensuring that we
                            provide
                            you with the highest standard of service.
                             </p>
                    </div>
                </div>  --}}
                


                <section class="our-story-section">
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-12 col-lg-5 ps-3">
                          
                            <img class="" src="{{ asset('images/our-team.png') }}" style="width:500px; height:500px; object-fit:cover; box-shadow: -35px 16px 0px 0px rgba(254,189,73,0.75);" />
                       
                          
                        </div>
                        <div class="col-12 col-lg-7 mb-4 mb-lg-0 p-0">
                          <div class="story-card mt-5 mt-lg-0 position-relative" style="left:-32px; padding:5rem 7rem 5rem 3rem;">
                            <h2 class="story-title">Our Team</h2>
                            <p class="mb-0">
                                Behind every beautifully completed kitchen, there is a dedicated team working meticulously to bring your vision to life. Our team consists of experienced project managers, skilled designers, and expert fitters, all committed to delivering exceptional results. With years of industry experience, each member brings a wealth of knowledge and expertise to every project, ensuring that we provide you with the highest standard of service.  
                            </p>
                          </div>
                        </div>
                        
                       
                      </div>
                    </div>
                  </section>
              


                <div class="row my-lg-5 py-5 online-experience">
                    <div class="col-lg-12">
                        <h3 class="text-uppercase text-center">the Buy Kitchen Online experience</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 bg-yellow p-5 d-flex flex-column">
                            <img src="{{ asset('/images/choose-the-comfort.png') }}"
                                class="img-fluid py-3 align-self-center" style="width:55px" />
                            <h4 class="text-black text-center">Choose From The Comfort Of Your Home</h4>
                            <p class="text-center">Browse, select, and finalize your kitchen design online from the comfort
                                of
                                your home.</p>
                        </div>
                        <div class="col-lg-4 bg-cyan p-5 d-flex flex-column">
                            <img src="{{ asset('/images/smart-design-process.png') }}"
                                class="img-fluid py-3 align-self-center" style="width:55px" />
                            <h4 class="text-white text-center">
                                Smart Design Process
                            </h4>
                            <p class="text-center text-white">
                                 We work virtually, but for a limited time, we are offering on-site surveys, complete
                                designing
                                and installation services.
                            </p>
                        </div>
                        <div class="col-lg-4 bg-yellow p-5 d-flex flex-column">
                            <img src="{{ asset('/images/premium-quality.png') }}" class="img-fluid py-3 align-self-center"
                                style="width:55px" />
                            <h4 class="text-black text-center">Premium Quality</h3>
                                <p class="text-center">
                                     We use only the finest materials and craftsmanship to ensure exceptional quality. Our
                                    products are built to stand the test of time, combining aesthetics with durability.
                                </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 bg-cyan p-5 d-flex flex-column">
                            <img src="{{ asset('/images/seamless-service.png') }}" class="img-fluid py-3 align-self-center"
                                style="width:55px" />
                            <h4 class="text-white text-center">Seamless Service</h4>
                            <p class="text-center text-white">
                                From design to installation, we provide a hassle-free experience. From the first
                                consultation to
                                the final installation, our team helps you every step of the way. 
                            </p>
                        </div>
                        <div class="col-lg-4 bg-yellow p-5 d-flex flex-column">
                            <img src="{{ asset('/images/experince-transparency.png') }}"
                                class="img-fluid py-3 align-self-center" style="width:55px" />
                            <h4 class="text-black text-center">
                                Transparency
                            </h4>
                            <p class="text-center text-dark">
                                 Clear, upfront pricing with no hidden costs displayed on our website. Browse and purchase
                                with
                                full clarity. These trade prices are available to everyone without any high-pressure sales
                                tactics
                            </p>
                        </div>

                        <div class="col-lg-4 bg-cyan p-5 d-flex flex-column">
                            <img src="{{ asset('/images/customization.png') }}" class="img-fluid py-3 align-self-center"
                                style="width:55px" />
                            <h4 class="text-white text-center">Customization</h3>
                                <p class="text-center text-white">
                                     With standard-sized kitchens, we also provide Bespoke Kitchens. Premium Quality at best
                                    market prices. The experts at Buy Kitchen Online specialize in creating kitchen solutions that
                                    reflect your style and cater to your specific requirements. 
                                </p>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        @include('frontend.start_your_journey')

    </x-guest-layout>