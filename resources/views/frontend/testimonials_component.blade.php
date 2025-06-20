{{-- <section class="container-fluid py-5 bg-white" style="background-image: url({{asset('images/homepage.jpeg')}}); opacity: 2; border-bottom: 3px solid #ebc266; border-left: 3px solid #ebc266; padding: 20px; width: 100% !important; overflow: hidden">
    <div class="row">
        <h3 class="text-dark text-uppercase fw-bolder text-center mb-4">Testimonials</h3>
    </div>
    <div class="row">
        <div class="carousel main-carousel-banner-02 owl-carousel clients mb-0"
            data-margin="30"
            data-loop="true"
            data-dots="false"
            data-autoplay="true"
            data-autoplay-timeout="3000"
            data-responsive='{"0":{"items": "3"}, "768":{"items": "4"}, "992":{"items": "4"}, "1200":{"items": "4"}, "1400":{"items": "4"}}'>
            <div class="item mx-10 px-0">
                <div class="carousel-card card border border-warning" style="border-radius: 20px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body carousel-card-body">
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                       
                        </div>
                        <div class="fw-bold text-center">
                            
                        </div>
                        <div class="text-center">
                            <small class="text-center"></small>
                        </div>
                    </div>
                    <div class="card-footer carousel-card-footer" style="border-radius: 20px;">
                        <small class="text-dark text-start" style="font-size: 12px">I discovered BKO Kitchen's online services through a recommendation from a colleague. Reaching out to them via WhatsApp was incredibly convenient, and they quickly arranged a free consultation call. From the initial planning to the seamless installation of my shaker kitchen, the entire experience was outstanding. I wouldn’t hesitate to recommend their design and installation services to others!</small>
                    </div>
                </div>
            </div>
            <div class="item mx-10 px-0">
                <div class="carousel-card card border border-warning" style="border-radius: 20px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body carousel-card-body">
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                        </div>
                        <div class="fw-bold text-center">
                            
                        </div>
                        <div class="text-center">
                            <small class="text-center"></small>
                        </div>
                    </div>
                    <div class="card-footer carousel-card-footer" style="border-radius: 20px;">
                        <small class="text-dark text-start" style="font-size: 12px">After much planning to upgrade my kitchen utilities, I decided to order from BKO Kitchen. I purchased their grey sink, tap, and a tall L-shaped blind corner unit. Everything was delivered on time, and the quality exceeded my expectations. On top of that, their prices were very reasonable. I highly recommend BKO Kitchen to anyone looking for a perfect blend of quality and affordability.</small>
                    </div>
                </div>
            </div>
            <div class="item mx-10 px-0">
                <div class="carousel-card card border border-warning" style="border-radius: 20px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body carousel-card-body">
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                        </div>
                        <div class="fw-bold text-center">
                            
                        </div>
                        <div class="text-center">
                            <small class="text-center"></small>
                        </div>
                    </div>
                    <div class="card-footer carousel-card-footer" style="border-radius: 20px;">
                        <small class="text-dark text-start" style="font-size: 12px">I’ve always loved exploring luxurious handleless kitchens online, and BKO Kitchen gave me the opportunity to bring that dream to life. Their commitment to precision and design excellence truly impressed me. They transformed my small space into a stunning handle-less kitchen that has become my favorite spot to cook and create cherished memories.</small>
                    </div>
                </div>
            </div>
            <div class="item mx-10 px-0">
                <div class="carousel-card card border border-warning" style="border-radius: 20px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body carousel-card-body">
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                        </div>
                        <div class="fw-bold text-center">
                            
                        </div>
                        <div class="text-center">
                            <small class="text-center"></small>
                        </div>
                    </div>
                    <div class="card-footer carousel-card-footer" style="border-radius: 20px;">
                        <small class="text-dark text-start" style="font-size: 12px">I reached out to BKO Kitchen through WhatsApp for their bespoke kitchen design and installation services in London, and the experience was seamless. They conducted a detailed kitchen survey and crafted a bespoke kitchen for my small space, with results that were nothing short of magical. Everything was perfectly executed, and my kitchen now feels more spacious and functional. I’m beyond satisfied with BKO Kitchen and highly recommend their services!</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        $(document).ready(function () {
            const $carousel02 = $('.main-carousel-banner-02');
            // Initialize OwlCarousel
            $carousel02.owlCarousel({
                loop: true,
                margin: 30,
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
                        margin: 20,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1400: {
                        items: 4,
                        loop: true,
                        margin: 20,
                        nav: true,
                        dots: true,
                        center: true,
                    }
                }
            });
            // Customize the autoplay behavior to reverse the direction
            $carousel02.on('translated.owl.carousel', function() {
                $carousel02.find('.owl-item.active').css('animation', 'move-left 0.3s ease-in-out');
            });
        });
    </script>
@endpush --}}


{{-- <head>
    
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .testimonial-section {
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }
        
        .heading {
            font-weight: 700;
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
        }

       
        .testimonial-card {
            background-color: white;
            border-radius: 50%;
            width: 500px;
            height: 500px;
            margin: 0 auto;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-content {
            max-width: 80%;
            text-align: center;
            padding: 20px;
        }
        
        .quote-icon {
            color: #FFBD3D;
            /* font-size: 5rem; */
            /* position: absolute; */
            /* right: 80px; */
            /* top: 150px; */

            position:absolute; right:20px; top:10px; font-size:170px;
        }
        
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .testimonial-img
        {
            height: 150px; width: 150px; position:absolute; top:0; left:20px
        }
        @media(max-width:760px)
        {
            .testimonial-card
            {
                width:300px;
                height:300px;
            }
            .testimonial-img
            {
                width:80px;
                height:80px;
                left:0;
                top:-15px;
                z-index:100;
            }

            .floating-profile
            {
                display:none;
            }
            .quote-icon
            {
                font-size:80px;
            }
        }
        
        
        .carousel-control-prev, .carousel-control-next {
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .carousel-control-prev {
            /* left: -20px; */
            left: 30%;
        }
        
        .carousel-control-next {
            /* right: -20px; */
            right: 30%;
        }
        @media (max-width:576px)
        {
             .carousel-control-prev{
                left:0;

             } .carousel-control-next {
                right:0;
             }
        }
        
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-image: none;
            color: #333;
            width: auto;
            height: auto;
        }
        
        .stars {
            color: #FFBD3D;
            margin: 10px 0;
        }
        
        .floating-profile {
            position: absolute;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }
        
        .profile-1 {
            top: 10%;
            left: 5%;
            background-image: url('{{ asset('images/testimonial-image.png') }}');
            background-size: cover;
        }
        
        .profile-2 {
            top: 50%;
            left: 10%;
            background-image: url('{{ asset('images/testimonial-image.png') }}');
            background-size: cover;
        }
        
        .profile-3 {
            bottom: 20%;
            left: 25%;
            background-image: url('{{ asset('images/testimonial-image.png') }}');
            background-size: cover;
        }
        
        .profile-4 {
            top: 15%;
            right: 10%;
            background-image: url('{{ asset('images/testimonial-image.png') }}');
            background-size: cover;
        }
        
        .profile-5 {
            top: 45%;
            right: 5%;
            background-image: url('{{ asset('images/testimonial-image.png') }}');
            background-size: cover;
        }
        
        .profile-6 {
            bottom: 15%;
            right: 15%;
            background-image: url('{{ asset('images/testimonial-image.png') }}');
            background-size: cover;
        }
        
        .dot {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            position: absolute;
        }
        
        .dot-yellow {
            background-color: #FFBD3D;
            left: 2%;
            top: 25%;
        }
        
        .dot-green {
            background-color: #2C6D68;
            right: 15%;
            top: 20%;
        }
        
        .dot-light {
            border: 2px solid #FFBD3D;
            background-color: transparent;
            right: 20%;
            bottom: 30%;
        }
        
        .testimonial-author {
            margin-top: 10px;
            font-weight: 600;
        }
        
        .testimonial-time {
            font-size: 0.85rem;
            color: #777;
        }
        
        .carousel-indicators {
            bottom: -60px;
        }
        
        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ccc;
            margin: 0 5px;
        }
        
        .carousel-indicators .active {
            background-color: #555;
        }

        .testimonial-content p
        {
            font-size:0.9rem;
        }
    </style>
</head> --}}

{{-- <body>

    <div class="container">
        <div class="testimonial-section" style="overflow:visible">
            <h2 class="heading text-black">FACT, EVERYONE LOVES US</h2>
            
            
             <img class="floating-profile profile-1 src="{{ asset('images/testimonial-image.png') }}">
            <img class="floating-profile profile-2 src="{{ asset('images/testimonial-image.png') }}" >
            <img class="floating-profile profile-3 src="{{ asset('images/testimonial-image.png') }}" >
            <img class="floating-profile profile-4 src="{{ asset('images/testimonial-image.png') }}" >
            <img class="floating-profile profile-5 src="{{ asset('images/testimonial-image.png') }}" >
            <img class="floating-profile profile-6 src="{{ asset('images/testimonial-image.png') }}" >
                              


            <div class="dot dot-yellow"></div>
            <div class="dot dot-green"></div>
            <div class="dot dot-light"></div>
            
            <div id="" class="carousel slide" data-bs-ride="carousel" style="overflow:visible">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <h2>Test</h2>
                            <div class="testimonial-content">
                                
                                <img src="{{ asset('images/testimonial-image.png') }}" class="img-fluid rounded-circle testimonial-img" >
                                <h2>Test</h2>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>
                                    I discovered BKO Kitchen's online services through a recommendation from a colleague. Reaching out to them via WhatsApp was incredibly convenient, and they quickly arranged a free consultation call. From the initial planning to the seamless installation of my shaker kitchen, the entire experience was outstanding. I wouldn’t hesitate to recommend their design and installation services to others!
                                
                                </p>
                                <div class="testimonial-author">— Jamie (Matt Dust Grey Handleless)</div>
                                <div class="testimonial-time">8 Months Ago</div>
                                <div class="quote-icon" >❞</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span aria-hidden="true"><i class="fas fa-chevron-left text-warning"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span aria-hidden="true"><i class="fas fa-chevron-right text-warning"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
                
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </div>
       
</body> --}}


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$header_name ?? ''}}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .testimonial-section {
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }
        
        .heading {
            font-weight: 700;
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 50%;
            width: 500px;
            height: 500px;
            margin: 0 auto;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-content {
            max-width: 80%;
            text-align: center;
            padding: 20px;
        }
        
        .quote-icon {
            color: #FFBD3D;
            font-size: 5rem;
            position: absolute;
            right: 80px;
            top: 150px;
        }
        
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        /* .carousel-control-prev, .carousel-control-next {
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .carousel-control-prev {
            left: -20px;
        }
        
        .carousel-control-next {
            right: -20px;
        }
         */


         .carousel-control-prev, .carousel-control-next {
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color:#ffbd3d;
        }
        
        .carousel-control-prev {
            /* left: -20px; */
            left: 30%;
        }
        
        .carousel-control-next {
            /* right: -20px; */
            right: 30%;
        }
.carousel-control-next:hover 
.carousel-control-prev:hover
{
    color:black;
}

        /* .carousel-control-prev-icon, .carousel-control-next-icon {
            background-image: none;
            color: #333;
            width: auto;
            height: auto;
        } */

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-image: none;
            color: #333;
            width: auto;
            height: auto;
        }
        
        
        .stars {
            color: #FFBD3D;
            margin: 10px 0;
        }
        
        .floating-profile {
            position: absolute;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }
        
        .profile-1 {
            top: 10%;
            left: 5%;
        }
        
        .profile-2 {
            top: 50%;
            left: 10%;
        }
        
        .profile-3 {
            bottom: 20%;
            left: 25%;
        }
        
        .profile-4 {
            top: 15%;
            right: 10%;
        }
        
        .profile-5 {
            top: 45%;
            right: 5%;
        }
        
        .profile-6 {
            bottom: 15%;
            right: 15%;
        }
        
        .dot {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            position: absolute;
        }
        
        .dot-yellow {
            background-color: #FFBD3D;
            left: 2%;
            top: 25%;
        }
        
        .dot-green {
            background-color: #2C6D68;
            right: 15%;
            top: 20%;
        }
        
        .dot-light {
            border: 2px solid #FFBD3D;
            background-color: transparent;
            right: 20%;
            bottom: 30%;
        }
        
        .testimonial-author {
            margin-top: 10px;
            font-weight: 600;
        }
        
        .testimonial-time {
            font-size: 0.85rem;
            color: #777;
        }
        
        .carousel-indicators {
            bottom: -60px;
        }
        
        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ccc;
            margin: 0 5px;
        }
        
        .carousel-indicators .active {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="testimonial-section">
            <h2 class="heading">FACT, EVERYONE LOVES US:</h2>
         
            <div class="dot dot-yellow"></div>
            <div class="dot dot-green"></div>
            <div class="dot dot-light"></div>
            
            <!-- Testimonial Carousel -->
            {{-- <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel"> --}}
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-wrap="true">
                <div class="carousel-inner">
                    @foreach($testimonials as $index => $testimonial)
                    <div class="carousel-item @if($index === 0) active @endif">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <!-- <img src="/api/placeholder/150/150" alt="Jamie" class="profile-img mb-3"> -->
                                <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                       
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>
                                    {{$testimonial->testimonial}}
                                </p>
                                <div class="testimonial-author">— {{$testimonial->user_name}}</div>
                                <div class="testimonial-time">{{$testimonial->date}}</div>
                                <div class="quote-icon">❞</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span aria-hidden="true"><i class="fas fa-chevron-left text-warning"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span aria-hidden="true"><i class="text-warning fas fa-chevron-right"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
                
                {{-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> --}}

                <div class="carousel-indicators">
                    @foreach($testimonials as $index => $testimonial)
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{$index}}" 
                            @if($index === 0) class="active" aria-current="true" @endif 
                            aria-label="Slide {{$index + 1}}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
   


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = new bootstrap.Carousel(document.getElementById('testimonialCarousel'), {
        interval: 5000,
        wrap: true,
        touch: true
    });
});
</script>
</body>