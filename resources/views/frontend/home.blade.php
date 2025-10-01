<x-guest-layout>
    <head>
    @section('meta_tags')
    <title>Kitchen Design Services in London | Buy Kitchen Online </title>
    <!-- testing -->
    <meta name="description" content="Buy Kitchen Online is here with Affordable & Custom kitchen units in London with all Kitchen Styles & Kitchen Components. Book Consultation Now.">
    <!-- <meta name="description" content="Customize your Dream Kitchen with our Bespoke Kitchen Units in London. Our Bespoke Designer Kitchens include Slab, Shaker, True handleless & J-pull Styles."> -->
    <link rel="canonical" href="https://bkonline.uk/" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Buy Kitchen Online",
        "url": "https://bkonline.uk/",
        "logo": "https://bkonline.uk/public/images/bko-black-logo.png",
        "description": "Buy Kitchen Online specializes in customized kitchen units, offering J Pull, Shaker, Slab Laminated,True Handleless kitchens, J pull 22, Slab Painted, True Handleless Painted, Budget Kitchens along with Bespoke Kichens in London which includes North London, North East London, Central London & EAST London.",
        "image": "https://bkonline.uk/public/images/homepage.jpeg",
        "brand": {
            "@type": "Brand",
            "name": "Buy Kitchen Online"
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://bkonline.uk/"
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Unit 7, 44 Gillender street",
            "addressLocality": "London",
            "postalCode": "E14 6RP",
            "addressCountry": "UK"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "020 805 05605",
            "contactType": "Customer Service",
            "areaServed": "Overall London but in london specifically North London, North East London, Central London & EAST London.",
            "availableLanguage": "English UK"
        },
        "email": "customerservices@bkonline.co.uk",
        "openingHours": [
            "Mo-Th 08:00-17:00",
            "Fr 08:00-14:30"
        ],
        "sameAs": [
            "https://www.facebook.com/opulenthomeinteriorsltd",
            "https://www.instagram.com/bkonline__kitchen/?igsh=YWZqaDg4b2ppZ3Zw#",
            "https://www.youtube.com/@BKOnline570"
        ]
        }
    </script>

    
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
            min-height:300px;
            /* background-color: white; */
            /* border-radius: 10px; */
            /* box-shadow: 0 4px 6px rgba(0,0,0,0.1); */
            /* transition: transform 0.3s ease; */
        }
        .max-description
            {
                font-size:16px;
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
        .survey-section-p
        {
            font-size:18px;
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

        
    }

    .highlight-line {
            height: 4px;
            background: linear-gradient(to right, #3a7a6f 33%, #f4b41a 33%, #f4b41a 66%, #3a7a6f 66%);
            max-width: 750px;
            margin: 0 auto 2rem;
        }
        
        .feature-icon {
            color: #f4b41a;
            font-size: 2rem;
            margin-right: 15px;
        }
        
        .feature-box {
            background-color: #f2f2f2;
            padding: 20px;
            height: 100%;
            display: flex;
            align-items: center;
            border-radius: 4px;
        }
        
        .red-text {
            color: #e52321;
        }

        .how-we-work {
            background-image: url('{{asset('images/how-we-work.png')}}');
            background-size: cover;
            background-repeat:no-repeat;
            background-position:center;
            padding: 80px 0;
            color: white;
            position: relative;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
        }
        
        .section-title span {
            color: #FDB813;
        }
        
        /* .section-title:after {
            content: "";
            height: 3px;
            width: 80px;
            background: #FDB813;
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        } */
        
        .step-card {
            background: white;
            /* Only apply border radius to top-right and bottom-left */
            border-radius: 0;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            padding: 40px 20px;
            color: #333;
            text-align: center;
            height: 100%;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .step-icon {
            width: 80px;
            height: 80px;
            background: #f5f5f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            border: 2px solid #FDB813;
        }
        
        .step-icon img {
            width: 40px;
            height: 40px;
        }
        
        .step-number {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .step-title {
            color: #2F6B6A;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        
        .step-desc {
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        .corner-accent {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 20px;
            height: 20px;
            border-right: 2px solid #FDB813;
            border-bottom: 2px solid #FDB813;
        }
        
        .cta-button {
            background: #FDB813;
            color: #333;
            font-weight: bold;
            padding: 15px 30px;
            border: none;
            border-radius: 0;
            font-size: 1.1rem;
            text-transform: uppercase;
            margin-top: 40px;
        }
        
        .cta-button:hover {
            background: #e0a107;
            color: #333;
        }

        .carousel-item {
            padding: 20px 0;
        }
        
        .service-item {
            position: relative;
            overflow: hidden;
        }
        
        .service-item img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }
        
        /* .service-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 15px;
            text-align: center;
        } */
        
        .service-caption h3 {
            text-align: center;
            color: #2d6a6a;
            font-weight: bold;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .carousel-indicators {
            bottom: -20px !important;
            /* top: 10px; */
            color: black !important;
        }
        .swiper-pagination
        {
            margin-top: 10px !important;
        }
        .swiper-pagination-bullet
        {
            margin-top: 10px !important;
            bottom: -20px !important;
            /* top: 10px; */
            color: black !important; 
        }
        .swiper-pagination-bullet-active
        {
            background-color: green !important;
        }
        .carousel-indicators button {
            background-color: #999 !important;
            /* background-color: red; */
            height: 4px;
            width: 30px;
        }
        
        .carousel-indicators .active {
            /* background-color: #666; */
            background-color: green !important;
        }
        
       
       
       
        .swiper-button-prev,
        .swiper-button-next
        {
            width: 5%;
        }
       /* .carousel-control-prev
       {
        left: -50px;
       } */
        
        .carousel-control-prev-icon
        {
            /* left:-5px !important; */
            /* margin-left: -90px ; */
            color: green;
        }
        .carousel-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 30px 40px;
            position: relative;
            overflow: visible;
        }
        
        @media (max-width: 768px) {
            .service-item {
                margin-bottom: 20px;
            }
            .service-item img {
                height: 250px;
            }

            .carousel-inner .row {
    flex-wrap: nowrap;
    overflow-x: hidden;
  }
        }

        .section-heading {
      font-weight: 700;
      color: #1a1a1a;
    }

    .section-subheading {
      color: #1a7570;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .card-wrapper-bespoke {
      position: relative;
      display: inline-block;
      height: 100%;
    }

    .border-box-bespoke {
      position: absolute;
      top: 10px;
      left: 10px;
      width: 100%;
      height: 100%;
      border: 1px solid #1a7570;
      z-index: 0;
      border-radius: 0; /* No rounded corners */
    }
@media(max-width:576px)
{
    .border-box-bespoke{
        height: 90%;
    }
}
    .custom-card-bespoke {
      background-color: #fff;
      padding: 60px 60px; /* more vertical space */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
      width: 100%;
      z-index: 1;
      position: relative;
      text-align: center;
      min-height: 280px;
      max-height:280px;
      max-width:290px;
    }

    .custom-card-bespoke h3 {
      color: #f5a623;
      margin-bottom: 20px;
    }

    .custom-card-bespoke p {
      color: #333;
      font-size: 1rem;
      margin: 0;
    }

    .cta-text-bespoke {
      color: #d93025;
      font-weight: 700;
      font-size: 1.75rem;
      margin-top: 60px;
      margin-bottom: 20px;
    }

    .cta-button-bespoke {
      background-color: #f5a623;
      color: black;
      font-weight: 600;
      padding: 12px 28px;
      border: none;
      border-radius: 4px;
    }

    @media (max-width: 767px) {
      .custom-card-bespoke {
        margin-bottom: 40px;
      }
    }

    .services-section {
            padding: 50px 0;
            overflow: visible !important;
        }
        
        .left-slider-card,
        .service-card {
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            height: 450px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            
        }
        .left-slider-card
        {
            height: 220px;
        }
        
        .left-slider-image-container
        {
            width: 100%;
            height: 220px;
            overflow: hidden;
        }
        .left-slider-image{
            height: 100%;
            width: 100%;
            /* filter: brightness(0.8); */
            transition: transform 0.5s ease;
        }
        
        .service-image-container {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .service-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* filter: brightness(0.8); */
            transition: transform 0.5s ease;
        }
        
        .service-card:hover .service-image,
        .left-slider-card:hover .left-slider-image {
            transform: scale(1.1);
        }
        
        .service-title {
            position: absolute;
            bottom: 60px;
            left: 20px;
            color: white;
            font-weight: 800;
            font-size: 1.7rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
            z-index: 2;
        }
        
        .left-slider-title
        {
            position: absolute;
            bottom: 15px;
            left: 20px;
            color: white;
            font-weight: 800;
            font-size: 1.3rem;  
        }
        /* Arrow button styling */
        .arrow-btn {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            background-color: #ffc107;
            color: #000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: float 2s ease-in-out infinite;
        }
        
        .arrow-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 50%;
            box-shadow: 0 0 0 3px #fff inset;
            z-index: -1;
        }
        
        .arrow-btn i {
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }
        
        .arrow-btn:hover i {
            transform: translateX(3px);
        }
        
        /* Floating animation */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-5px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        .carousel-indicators {
            bottom: -50px;
        }
        
        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #ccc;
            margin: 0 5px;
        }
        
        .carousel-indicators .active {
            background-color: #ffc107;
        }
        
        /* Modern carousel controls */
        .carousel-control-prev, .carousel-control-next {
            width: 50px;
            height: 50px;
            background-color: #ffc107;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        
        .carousel-control-prev {
            left: -25px;
        }
        
        .carousel-control-next {
            right: -25px;
        }
        
        .carousel-control-prev:hover, .carousel-control-next:hover {
            background-color: #e5a800;
            transform: translateY(-50%) scale(1.1);
        }
        
        .carousel-control-prev-icon, .carousel-control-next-icon {
            width: 24px;
            height: 24px;
            background-image: none;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        
        .carousel-control-prev-icon:after {
            content: "‹";
            font-size: 30px;
            font-weight: bold;
            color: #000;
            line-height: 24px;
        }
        
        .carousel-control-next-icon:after {
            content: "›";
            font-size: 30px;
            font-weight: bold;
            color: #000;
            line-height: 24px;
        }
        
        @media (max-width: 768px) {
            .carousel-control-prev, .carousel-control-next {
                display: none;
            }
            .service-card {
                height: 250px;
            }
            
        }

        .swiper {
    width: 100%;
    padding: 20px 0;
    /* overflow: hidden; */
  }

  .swiper-button-prev,
    .swiper-button-next {
      width: 50px !important;
      height: 50px !important;
      border-radius: 50% !important;
      background-color: white !important;
      box-shadow: 0 3px 10px rgba(0,0,0,0.2) !important;
    }
    .swiper-button-prev:hover,
    .swiper-button-next:hover
    {
        background-color: #ffc107 !important;
    }
    .swiper-button-prev:after,
    .swiper-button-next:after {
      font-size: 18px !important;
      /* color: #FFD700;  */
      color: black;
      font-weight: bold !important;
    }
    
  /* .swiper-slide {
    background: #eee;
    text-align: center;
    font-size: 18px;
    padding: 40px 0;
    border: 1px solid #ccc;
    border-radius: 10px;
  } */
    
  .orderKitchenSwiper
  {
    width: 100%;
      max-width: 1000px;
      margin: auto;
      padding: 30px 0;
      /* overflow: hidden !important; */
  }
  .swiper-wrapper-order-kitchen
  {
    display: flex;
      gap: 10px;
  }
  .swiper-slide-order-kitchen
  {
    /* width: 200px !important; */
    background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      height: auto;
      /* width: 200px !important; */
  }
  .swiper-order-kitchen-img {
      width: 100%;
      
      height: 200px !important;
      object-fit: cover;
    }

    
    .swiper-order-kitchen-title {
      margin: 10px;
      font-size: 16px;
      color: #333;
    }

    .swiper-order-kitchen-btn {
      margin: 0 10px 10px;
      padding: 6px 12px;
      /* background-color: #333; */
      background-color: #ffc107;
      color: black;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    /* .swiper-order-kitchen-btn:hover {
      background-color: #555;
    } */

    /* Custom Prev/Next Buttons */
    .swiper-button-next-order-kitchen,
    .swiper-button-prev-order-kitchen {
      background-color: white;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    }

    .swiper-button-next-order-kitchen::after,
    .swiper-button-prev-order-kitchen::after {
      color: black;
      font-size: 16px;
      font-weight: bold;
    }

    .swiper-button-next-order-kitchen:hover,
    .swiper-button-prev-order-kitchenv:hover {
      background-color: yellow;
    }

    .swiper-pagination {
      display: none !important;
    }


    @media(max-width:576px)
        {
            .left-slider-title
            {
                font-size: 2.1rem;
                text-align: center;
            }


            .swiper-button-prev,
    .swiper-button-next {
      width: 30px !important;
      height: 30px !important;
      
    }
    
    .swiper-button-prev:after,
    .swiper-button-next:after {
      font-size: 14px !important;
      
    }


            .bespoke-title
            {
                font-size: 26px;
            }
            
            .bespoke-description
            {
                font-size: 18px !important;


            }
        .bespoke-title
        {
            font-size: 28px;
        }
            /* .step-number,.step-icon
            {
                font-size: 26px;
            }
            .step-title
            {
                font-size:30px;
            }
            .step-description
            {
                font-size: 14px !important;
            } */
            
        
            
        }

        /* .column-badges
        {
            position: absolute;
            top: -120px;
            right: -740px;
        } */
        /* .column-bdages a 
        {
            position: relative !important;
        }
        .column-badges a img 
        {
            position: absolute !important;
        } */
            /* @media (max-width:1024px) {
                .column-badges
                {
                    position: static;
                    top:auto;
                    right: auto;
                }
            } */
            .modern-card {
            border: none !important;
            border-radius: 15px !important;
            overflow: hidden !important;

            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08) !important;
            /* transition: transform 0.3s ease, box-shadow 0.3s ease !important; */
        }
        
        .modern-card:hover {
            transform: translateY(-5px) !important;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12) !important;
        }
        
        .card-img-top {
            height: 220px !important;
            object-fit: cover !important;
        }
        
        .card-body {
            padding: 25px !important;
        }
        
        .card-title {
            font-weight: 700 !important; 
            margin-bottom: 12px !important;
            color: #212529 !important;
        }
        
        .card-text {
            color: #6c757d !important;
            line-height: 1.6 !important;
        }
        

         .bko-beats-title {
            margin-top: 3.5rem;
            font-size: 2.5rem;
            font-weight: 600;
            color: #1a1a1a;
            text-align: left;
            margin-bottom: 50px;
            line-height: 1.2;
        }

        .bko-beats-container {
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }

        .bko-beats-box {
            border-radius: 12px;
            padding: 30px 20px;
            flex: 1;
            display: flex;
            align-items: center;
            gap: 15px;
            border: 1px solid #e9ecef;
        }

                .bko-beats-box {
    
    border-radius: 12px;
    flex: 1;
    display: flex;
    align-items: center;
    gap: 15px;
    
    transition: all 0.3s ease;
    cursor: pointer;
}
        .bko-beats-icon-number {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: 600;
            flex-shrink: 0;
        }

        .bko-beats-icon-1 {
            background-color: #e3f2fd;
            color: #1976d2;
        }

        .bko-beats-icon-2 {
            background-color: #f3e5f5;
            color: #7b1fa2;
        }

        .bko-beats-icon-3 {
            background-color: #fff3e0;
            color: #f57c00;
        }

        .bko-beats-icon-4 {
            background-color: #e8f5e8;
            color: #388e3c;
        }

        .bko-beats-icon-5 {
            background-color: #ffebee;
            color: #d32f2f;
        }

        .feature-bko-beats-title {
            font-size: 1rem;
            font-weight: 500;
            color: #1a1a1a;
        }

        @media (max-width: 768px) {
         .feature-bko-beats-title {

            font-size: 2rem;
            text-align: left;
         }
            .bko-beats-title {
                font-size: 2.2rem;
                text-align: center;
                margin-bottom: 40px;
            }

            .bko-beats-container {
                flex-direction: column;
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .bko-beats-title {
                font-size: 1.8rem;
            }

            

            .bko-beats-box {
                padding: 25px 15px;
            }
        }

                /* new ui */
        
          .bko-beats-title {
            /* margin-top: 3.5rem; */
            margin-top: 5.5rem;
            font-size: 2.5rem;
            font-weight: 600;
            color: #1a1a1a;
            text-align: left;
            /* margin-bottom: 50px; */
            margin-bottom: 15px;
            line-height: 1.2;
        }
        .bko-beats-description
        {
            font-size: 1rem;

        }

        .bko-beats-container {
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }


        


        


.bko-beats-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    border-color: #1976d2;
}

.bko-beats-icon-number {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    font-weight: 600;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.bko-beats-box:hover .bko-beats-icon-number {
    transform: scale(1.1);
    box-shadow: 0 4px 12px rgba(25, 118, 210, 0.3);
}



.feature-bko-beats-title {
    transition: color 0.3s ease;
}


       

        .bko-beats-icon-1 {
    background-color: #e3f2fd;
    color: #1976d2;
}
.bko-beats-box:hover .bko-beats-icon-1 {
    box-shadow: 0 4px 12px rgba(25, 118, 210, 0.4);
}

.bko-beats-icon-2 {
    background-color: #f3e5f5;
    color: #7b1fa2;
}
.bko-beats-box:hover .bko-beats-icon-2 {
    box-shadow: 0 4px 12px rgba(123, 31, 162, 0.4);
}

.bko-beats-icon-3 {
    background-color: #fff3e0;
    color: #f57c00;
}
.bko-beats-box:hover .bko-beats-icon-3 {
    box-shadow: 0 4px 12px rgba(245, 124, 0, 0.4);
}

.bko-beats-icon-4 {
    background-color: #e8f5e8;
    color: #388e3c;
}
.bko-beats-box:hover .bko-beats-icon-4 {
    box-shadow: 0 4px 12px rgba(56, 142, 60, 0.4);
}
.bko-beats-box:hover:has(.bko-beats-icon-4) {
    border-color: #388e3c;
}

.bko-beats-icon-5 {
    background-color: #ffebee;
    color: #d32f2f;
}
.bko-beats-box:hover .bko-beats-icon-5 {
    box-shadow: 0 4px 12px rgba(211, 47, 47, 0.4);
}
        /* .feature-bko-beats-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1a1a1a;
        } */
 .bko-beats-box:hover:has(.bko-beats-icon-2) {
    border-color: #7b1fa2;
}
.bko-beats-box:hover:has(.bko-beats-icon-3) {
    border-color: #f57c00;
}


.bko-beats-box:hover:has(.bko-beats-icon-5) {
    border-color: #d32f2f;
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
                    Buy Kitchen Online Kitchens - Elevate Your Kitchen, Elevate Your Lifestyle
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

    {{-- <section class="container-fluid position-relative hero-section d-flex align-items-center" style="min-height: 100vh; overflow: hidden; border-top: 3px solid #ebc266; border-bottom: 3px solid #ebc266;">
        
        <div class="image-container">
            <img src="{{ asset('images/homepage.jpeg') }}" alt="Image 1" class="fade-img active">
            <img src="{{ asset('images/shaker-22.jpeg') }}" alt="Image 2" class="fade-img">
            <img src="{{ asset('images/True-Handleless-SuperGloss-Graphite.jpg') }}" alt="Image 3" class="fade-img">
            <img src="{{ asset('images/slab.jpeg') }}" alt="Image 4" class="fade-img">
        </div>

        <div class="container">
            <div class="row justify-content-center main-image-content align-items-center " style="z-index: 1000;">
                
                <div class="col-md-9 text-start text-white px-4 p-0" style="z-index: 100;">
                    <div class="ps-4 animated slide-top">
                      
                        <h6 class="text-white fw-bold text-center" style="letter-spacing:8px;">BUY KITCHEN ONLINE</h6>
                    </div>
                       
                        <div class="text-green-color ps-3">
                               
                                <h1 class="text-yellow-color fw-bold animated slide-left text-uppercase text-center">Best of both worldS</h1>
                               
                                <p  class=" mt-4 text-white animated slide-bottom text-center text-uppercase fw-bold" style="font-size:30px"><span class="text-yellow-color">FINALLY!</span> Escape online risk & Ditch <br> high-street costs. <br>
                                    
                                </p>
                                    <p class="text-white animated slide-bottom text-center" style="font-size:30px"> The <span class="text-yellow-color fw-bold">ONLY Online Platform </span> with <span> Online value </span> and professional <span class="text-yellow-color fw-bold">Survey</span> with <span class="text-yellow-color fw-bold">Installation</span>.</p>
                            
                            </div>
                            <div class="container d-flex flex-column align-items-center text-center position-relative">
                                <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 animated slide-top mx-auto" style="margin-top: 5px;">
                                   
                                     <div class="row justify-content-center column-badges" >
                                        <img class="w-25" src="{{ asset('images/premium-badge.png') }}" alt="">
                                          
                                            <img style="cursor: pointer;" class="w-25" src="{{ asset('images/trust-pilot-badge.png') }}" 
                                            onclick="window.location.href ='https://www.trustpilot.com/review/opulenthomeinteriors.com'">
                                        

                                         
                                            <img style="cursor: pointer;" class="w-25" src="{{ asset('images/google-reviews-badge.png') }}" alt="" onclick="window.location.href ='https://www.google.com/maps/place/Buy+Kitchen+Online/@51.5192167,-0.0093268,17z/data=!4m8!3m7!1s0x48761d591fe166d7:0x456fed0ffc8a8222!8m2!3d51.5192167!4d-0.0093268!9m1!1b1!16s%2Fg%2F11vbf0zdzm?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D'">
                                       
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 animated slide-bottom mt-4 mx-auto">
                                   
                                        <a href="{{ route('orderkitchen') }}" class="btn px-5 btn-md bg-yellow-color2 text-white text-uppercase">
                                        Order Now
                                    </a>
                                </div>
                            </div>
                 
                </div>
                <div class="left-shadow"></div>
            </div>
        </div>
    </section> --}}

    <section class="container-fluid position-relative hero-section d-flex align-items-center"
        style="min-height: 100vh; overflow: hidden;">

        <!-- Background Image -->
        <div class="image-container">
            <img src="{{ asset('images/homepage.jpeg') }}" alt="Image 1" class="fade-img active">
            <img src="{{ asset('images/shaker-22.jpeg') }}" alt="Image 2" class="fade-img">
            <img src="{{ asset('images/True-Handleless-SuperGloss-Graphite.jpg') }}" alt="Image 3" class="fade-img">
            <img src="{{ asset('images/slab.jpeg') }}" alt="Image 4" class="fade-img">
        </div>

        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center main-image-content align-items-center " style="z-index: 1000;">
                <!-- Left Content -->
                <div class="col-md-7 text-start text-white p-0" style="z-index: 100;">
                    <div class=" animated slide-top">

                        <h6 class="text-white fw-bold text-md-start text-center" style="letter-spacing:8px;">BUY KITCHEN
                            ONLINE</h6>
                    </div>

                    <div class="text-green-color">

                        <h1
                            class="text-white fw-bold animated slide-left text-uppercase text-md-start text-center d-none d-md-block">
                            Best of both worldS</h1>


                        <p class="text-white animated slide-bottom text-md-start text-center" style="font-size:30px">
                            The <span class="text-white fw-bolder">Only Online Platform </span> with <span> Online value
                            </span> and professional <span class="text-white fw-bolder">Survey</span> with <span
                                class="text-white fw-bolder">Installation</span>.</p>

                    </div>
                    <div class="container d-flex flex-column align-items-center text-center position-relative ps-0">
                        <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 animated slide-top mx-auto"
                            style="margin-top: 5px;">

                        </div>
                        <div class=" col-sm-12 d-flex justify-content-start animated slide-bottom mt-1 mb-5 mb-md-0">

                            <a href="{{ route('orderkitchen') }}"
                                class="btn px-5 py-3 order-btn btn-md text-black text-uppercase rounded-pill"
                                style="background-color: #ffc107;">
                                Order Now
                            </a>
                        </div>
                    </div>

                </div>

                <div class="pb-4 align-self-center col-xl-5 col-lg-5 col-md-8 col-sm-12 col-12 " style="z-index: 100;">

                    @include('frontend.inquiry_form')
                </div>

                <div class="left-shadow"></div>
            </div>
        </div>
    </section>

   

    <!-- <div class="container" style="margin-top: 120px;">
        <div class="row">
        <div class="col-12">
            <img class="d-md-none w-100" src="{{ asset('images/affordable-mobile.png') }}" alt="">
            <img class="d-none d-md-block w-100" src="{{ asset('images/affordable.png') }}" alt="">
        </div>
        <div class="row">
            <div class="text-center"> -->
                <!-- <a href="#" class="btn cta-button">BOOK YOUR FREE CONSULTATION NOW!</a> -->
                <!-- <button  class="btn btn-lg cta-button rounded-0" style="background-color:#ffc107;" data-bs-toggle="modal" data-bs-target="#exampleModal">book your FREE CONSULTATION NOW!</button>
               
            </div>
        </div>
    </div>
    </div>
    <div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-uppercase text-center mt-5 mb-4 text-black fw-bold">Ordering elsewhere <span class="text-danger">vs.</span> Letting us handle it</h2>
            
            <img class="d-md-none w-100 border boder-success" src="{{ asset('images/letting-us-mobile.png') }}" alt="">
            <img class="d-none d-md-block w-100 border boder-primary" src="{{ asset('images/letting-us-handle.png') }}" alt="">
        </div>
    </div>
    </div> -->

{{-- <div class="container-fluid" style="background-color: #fffaf0;"> --}}

    <!-- <div class="container faq-container"> -->
    {{-- <div class="container faq-container"> --}}
        {{-- <div class="faq-header"> --}}
            {{-- <h3 class="text-black fw-bolder mb-1">WHY Buy Kitchen Online Beats Every Other Online Store?</h3> --}}
            <!-- <h4 class="mt-4 text-black fw-bolder">Buy Kitchen Online <span class="text-danger"> VS</span> Other Online Stores</h4> -->
        {{-- </div> --}}

        
        

        {{-- <div class="faq-list"> --}}
            <!-- FAQ Item 1 -->
            {{-- <div class="faq-item" data-category="general"> --}}
                {{-- <div class="faq-question"> --}}
                    {{-- <div>
                        <span class="faq-badge faq-badge-popular">1</span>
                        Site Survey & Measurements
                    </div> --}}
                    {{-- <i class="fas fa-chevron-down"></i> --}}
                {{-- </div> --}}
                {{-- <div class="faq-answer">
                  
                    <div class="faq-card-container">
                        <div class="faq-card">
                            <div class="faq-card-title text-black text-center">
                                <!-- <i class="fas fa-box-open"></i> -->
                                Other Online Stores
                            </div>
                            <div class="faq-card-desc">
                               <h4 class="text-black">You measure. You guess. You hope it fits.</h4>
                               <p>– DIY site survey (risk of errors).</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-title text-center">
                                <!-- <i class="fas fa-cloud-download-alt"></i> -->
                                Buy Kitchen Online
                            </div>
                            <div class="faq-card-desc">
                                <h4 class="text-black"> We measure. We plan. We guarantee it fits. </h4>
                                <p>-Free professional site survey.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            {{-- </div> --}}
            {{-- <div class="faq-item" data-category="general">
                <div class="faq-question">
                    <div>
                        <span class="faq-badge faq-badge-popular">2</span>
                        Kitchen Design
                    </div> --}}
                    {{-- <i class="fas fa-chevron-down"></i> --}}
                {{-- </div> --}}
                {{-- <div class="faq-answer">
                  
                    <div class="faq-card-container">
                        <div class="faq-card">
                            <div class="faq-card-title text-black text-center">
                                <!-- <i class="fas fa-box-open"></i> -->
                                Other Online Stores
                            </div>
                            <div class="faq-card-desc">
                               <h4 class="text-black">You design alone (with generic software).</h4>
                               <p>– No personalized advice.</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-title text-center">
                                <!-- <i class="fas fa-cloud-download-alt"></i> -->
                                Buy Kitchen Online
                            </div>
                            <div class="faq-card-desc">
                                <h4 class="text-black">We design with you (for your actual space).</h4>
                                <p>– Expert designers tailor layouts to suit your needs.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            {{-- </div>
            <div class="faq-item" data-category="general">
                <div class="faq-question">
                    <div>
                        <span class="faq-badge faq-badge-popular">3</span>
                        Ordering Process
                    </div> --}}
                    {{-- <i class="fas fa-chevron-down"></i> --}}
                {{-- </div> --}}
                {{-- <div class="faq-answer">
                  
                    <div class="faq-card-container">
                        <div class="faq-card">
                            <div class="faq-card-title text-black text-center">
                                <!-- <i class="fas fa-box-open"></i> -->
                                Other Online Stores
                            </div>
                            <div class="faq-card-desc">
                               <h4 class="text-black">You play project manager.</h4>
                               <p>– Manually add items to cart (risk of mistakes or reordering).</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-title text-center">
                                <!-- <i class="fas fa-cloud-download-alt"></i> -->
                                Buy Kitchen Online
                            </div>
                            <div class="faq-card-desc">
                                <h4 class="text-black">We handle everything for you.</h4>
                                <p>– We place your order (accurate products, every time).</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            {{-- </div>
            <div class="faq-item" data-category="general">
                <div class="faq-question">
                    <div>
                        <span class="faq-badge faq-badge-popular">4</span>
                        Delivery & Quality Check
                    </div> --}}
                    {{-- <i class="fas fa-chevron-down"></i> --}}
                {{-- </div> --}}
                {{-- <div class="faq-answer">
                  
                    <div class="faq-card-container">
                        <div class="faq-card">
                            <div class="faq-card-title text-black text-center">
                                <!-- <i class="fas fa-box-open"></i> -->
                                Other Online Stores
                            </div>
                            <div class="faq-card-desc">
                               <h4 class="text-black">You inspect. You stress. You’re on your own.</h4>
                               <p>– Faulty items? Return deadlines apply.</p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-title text-center">
                                <!-- <i class="fas fa-cloud-download-alt"></i> -->
                                Buy Kitchen Online
                            </div>
                            <div class="faq-card-desc">
                                <h4 class="text-black">We inspect. You relax.</h4>
                                <p>– Our team verifies all items before installation.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            {{-- </div>
            <div class="faq-item" data-category="general">
                <div class="faq-question">
                    <div>
                        <span class="faq-badge faq-badge-popular">5</span>
                        Installation
                    </div> --}}
                    {{-- <i class="fas fa-chevron-down"></i> --}}
                {{-- </div> --}}
                {{-- <div class="faq-answer">
                  
                    <div class="faq-card-container">
                        <div class="faq-card">
                            <div class="faq-card-title text-black text-center">
                                <!-- <i class="fas fa-box-open"></i> -->
                                Other Online Stores
                            </div>
                            <div class="faq-card-desc">
                               <h4 class="text-black">You hire a fitter. You cross your fingers.</h4>
                               <p>– Third-party installers charge extra for fixes. <br>
                                – Mistakes = reorder & repay shipping (You pay the price for the mistake of others)
                                </p>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-title text-center">
                                <!-- <i class="fas fa-cloud-download-alt"></i> -->
                                Buy Kitchen Online
                            </div>
                            <div class="faq-card-desc">
                                <h4 class="text-black">We install. We guarantee. We prioritize your peace of mind.</h4>
                                <p>– Expert fitters (no strangers in your home). <br>
                                    – Full project management accountability—if something’s wrong, we handle it.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            {{-- </div> --}}
            
            
        {{-- </div> --}}
        {{-- <h4 class="text-black fw-bold text-center">With Buy Kitchen Online, you get the best of both worlds—online prices with retail-store quality and service—all under one roof.</h4> --}}
    {{-- </div> --}}
{{-- </div> --}}

    {{-- <div class="container mt-4">
        <div class="row">
            <h2 class="text-uppercase text-center mt-5 mb-4 text-black fw-bold">There are <span style="color: #FDB71A;">three types </span>of Kitchen buyers. <br> <span class="text-danger">Which one are you?</span></h2>
            
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                
                <img class="w-100 img-fluid d-none d-md-block" src="{{ asset('images/the-luxury-lover.png') }}"/>
                    
                <img class="w-100 img-fluid d-md-none mt-2" src="{{ asset('images/the-luxury-lover-mobile.png') }}"/>
            </div>
            <div class="col-md-6 col-12">
                
                <img class="w-100 img-fluid d-none d-md-block" src="{{ asset('images/the-online-gambler.png') }}"/>
                    
                <img class="w-100 img-fluid d-md-none mt-2" src="{{ asset('images/the-online-gambler-mobile.png') }}"/>
            </div>
    </div> --}}
    {{-- </div> --}}


    {{-- <div class="container mt-4">
        <div class="row">
        <div class="col-12">
            
            <img class="w-100 img-fluid d-none d-md-block" src="{{ asset('images/the-smart-cookie.png') }}"/>
                
            <img class="w-100 img-fluid d-md-none mt-2" src="{{ asset('images/the-smart-cookie-mobile.png') }}"/>
        </div>
    </div>
    </div> --}}


    <div class="container">
        <div class="row">
             <div class="col-12  overflow-hidden  py-4">
                <div class="row">
                    <h3 class="text-uppercase fw-bolder text-dark mb-4">ORDER KITCHEN</h3>
                </div>
                <div class="row">
                    <!-- <div class="swiper orderKitchenSwiper"> -->
                    <div class="swiper mySwiper">
                        <!-- <div class="swiper-wrapper swiper-wrapper-order-kitchen"> -->
                        <div class="swiper-wrapper ">


                            @foreach ($styles as $key => $style)
                            <!-- <div class="swiper-slide swiper-slide-order-kitchen"> -->
                                <div class="swiper-slide">
                                <a  href="{{ route('orderkitchenbyname', $style->slug) }}">

                                    <div class="left-slider-card">
                                        <div class="left-slider-image-container">
                                            
                                            {{-- <img  src="{{asset('imgs/styles/'.$style->image_path)}}" class="left-slider-image" /> --}}
                                         <img  src="{{asset('images/shaker-22-500.png')}}" class="left-slider-image" /> 
                                  
                                    </div>
                                    
                                    
                                    <div class="left-slider-title">{{$style->name}}</div>
                                
                                    <!-- <div class="arrow-btn">
                                        <i class="bi bi-arrow-right"></i>
                                    </div> -->
                                </div>

                                <!-- <img src="{{asset('imgs/styles/'.$style->image_path)}}" class="img-fluid" /> -->
                                <!-- <img width="100" height="100" src="{{asset('images/j-pull-22.jpeg')}}" class="img-fluid swiper-order-kitchen-img" /> -->
                                <!-- <img  src="{{asset('images/shaker-22-250.png')}}" class="img-fluid swiper-order-kitchen-img" /> -->
                                <!-- <h3 class="swiper-order-kitchen-title">{{$style->name}}</h3> -->
                                <!-- <a type="button" href="{{ route('orderkitchenbyname', $style->slug) }}" class="swiper-order-kitchen-btn">See Our Range</a> -->
                            </a>
                              </div>
                            @endforeach
                            </div>
                            
                            <!-- Navigation buttons -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- <div class="swiper-button-next swiper-button-next-order-kitchen"></div>
                            <div class="swiper-button-prev swiper-button-prev-order-kitchen"></div> -->
                     </div>
                </div>
                <div class="row mt-5 mb-2">
                    <h3 class="text-uppercase fw-bolder text-dark mb-4">ORDER Components</h3>
                
                </div>
                <div class="row">
                    @php
                    $categories = \App\Models\Category::where('parent_category_id', null)->where('status', 1)->whereNotIn('id', [2, 3, 4, 5, 7, 13, 16])->get();
                @endphp
                <!-- <div class="swiper orderKitchenSwiper"> -->
                <div class="swiper mySwiper">
                    <!-- <div class="swiper-wrapper swiper-wrapper-order-kitchen"> -->
                    <div class="swiper-wrapper">
                        
                        @foreach($categories as $category)
                        
                        <!-- <div class="swiper-slide swiper-slide-order-kitchen"> -->
                        <div class="swiper-slide ">
                            <!-- <img src="{{asset('imgs/styles/'.$style->image_path)}}" class="img-fluid" /> -->
                           <a href="{{route('ordercomponentbyname', [$category->slug])}}">
                            <div class="left-slider-card">
                                <div class="left-slider-image-container">
                                <img  src="{{asset('images/shaker-22-slide.png')}}" class="left-slider-image" /> 
                            {{-- <img  class="left-slider-image" src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt=""> --}}
                            </div> 
                                  
                            <!-- <h3 class="swiper-order-kitchen-title text-center py-2">{{Str::limit($category->name, 13)}}</h3> -->
                            <div class="left-slider-title">{{Str::limit($category->name, 13)}}</div>
                            <!-- <button class="swiper-order-kitchen-btn">See Our Range</button> -->
                        </a>
                    </div>
                        </div>
                        
                        @endforeach
                        </div>
                        
                        <!-- Navigation buttons -->
                        <div class="swiper-button-next swiper-button-next-order-kitchen"></div>
                        <div class="swiper-button-prev swiper-button-prev-order-kitchen"></div>
                </div>
                </div>
                <!-- <div class="row">
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
                </div> -->
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
        </div>
    </div>

    <div class="container mb-5">
        <h1 class="bko-beats-title">Why Buy Kitchen Online<br>Beats Every Other Online Store?</h1>

        <div class="bko-beats-container">
            <div class="bko-beats-box">
                <div class="bko-beats-icon-number bko-beats-icon-1">1</div>
                <h3 class="feature-bko-beats-title">Site Survey & Measurements</h3>
            </div>

            <div class="bko-beats-box">
                <div class="bko-beats-icon-number bko-beats-icon-2">2</div>
                <h3 class="feature-bko-beats-title">Kitchen Design</h3>
            </div>

            <div class="bko-beats-box">
                <div class="bko-beats-icon-number bko-beats-icon-3">3</div>
                <h3 class="feature-bko-beats-title">Ordering Process</h3>
            </div>

            <div class="bko-beats-box">
                <div class="bko-beats-icon-number bko-beats-icon-4">4</div>
                <h3 class="feature-bko-beats-title">Delivery & Quality Check</h3>
            </div>

            <div class="bko-beats-box">
                <div class="bko-beats-icon-number bko-beats-icon-5">5</div>
                <h3 class="feature-bko-beats-title">Installation</h3>
            </div>
        </div>


          <h1 class="bko-beats-title">JOIN THE SMART LEAGUE!</h1>

        <div class="bko-beats-container flex-column">
            
            <div class="row" >
                <div class="col-lg-4 col-md-6 mb-2 mb-lg-0">
                    <div class="bko-beats-box">
                        <div class="bko-beats-icon-number bko-beats-icon-1">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h3 class="feature-bko-beats-title">Free on-site survey</h3>
                    </div>
                 </div>
                 <div class="col-lg-4 col-md-6 mb-2 mb-lg-0">
                    <div class="bko-beats-box">
                        <div class="bko-beats-icon-number bko-beats-icon-2">
                             <i class="fas fa-headset"></i>
                        </div>
                        <h3 class="feature-bko-beats-title">Free virtual consultation</h3>
                    </div>
                 </div>

                 <div class="col-lg-4 col-md-6 mb-2 mb-lg-0">
                    <div class="bko-beats-box">
                        
                        <div class="bko-beats-icon-number bko-beats-icon-3">
                                 <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h3 class="feature-bko-beats-title">No obligation to buy</h3>
                    </div>
                 </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2 mb-lg-0">
                    <div class="bko-beats-box">
                        <div class="bko-beats-icon-number bko-beats-icon-4">
                             <i class="fas fa-tags"></i>
                        </div>
                        <h3 class="feature-bko-beats-title">Transparent online displayed prices</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2 mb-lg-0">
                    <div class="bko-beats-box">
                        <div class="bko-beats-icon-number bko-beats-icon-5">
                               <i class="fas fa-user-check"></i>
                        </div>
                        <h3 class="feature-bko-beats-title">Peace of mind</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2 mb-lg-0">   
                    <div class="bko-beats-box">
                        <div class="bko-beats-icon-number bko-beats-icon-5">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3 class="feature-bko-beats-title">Premium quality guaranteed</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    @include('frontend.button', ['type' =>'button', 'text'=>'SCHEDULE FREE CONSULTATION'])
                </div>
            </div>
         </div>
    </div>

    {{-- <div class="container py-5">
        <div class="row text-center mb-4">
            <div class="col-12"> --}}
                {{-- <h1 class=" text-black fw-bold mb-2">JOIN THE SMART LEAGUE!</h1>
                
                <div class = "row mb-1 justify-content-center">
                    <div class="col-6">
                        <div id="lines" class="mb-3">
                            <div id="line1"></div>
                            <div id="line2"></div>
                            <div id="line3"></div>
                        
                    </div>
                    </div>
                </div>
                <h2 class="fs-1 mt-4">
                    <span class="text-black">WE MAKE </span>
                    <span class="text-danger fw-bolder"> OTHER KITCHEN PROVIDERS </span> <span class="text-black">LOOK LIKE</span> <span class="text-danger fw-bolder">SCAM</span>
                </h2>
            </div>
        </div>
         --}}
        {{-- <div class="row g-4 mt-3"> --}}
            <!-- Row 1 -->
            {{-- <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"> --}}
{{--                       
                         
                         <img width="50" src="{{ asset('images/survey.svg') }}" alt="">
                    </div>
                    <div class="feature-text">
                        <h3 class="fs-5 mb-0">Free on-site survey</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"> --}}
{{--                       
                         
                        <img width="50" src="{{ asset('images/virtual-consultation.svg') }}" alt="">
                    </div>
                    <div class="feature-text">
                        <h3 class="fs-5 mb-0">Free virtual consultation</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"> --}}
                        <!-- <i class="fas fa-shopping-cart"></i> -->
                        {{-- <img width="50" src="{{ asset('images/cart.svg') }}" alt="">
                    </div>
                    <div class="feature-text">
                        <h3 class="fs-5 mb-0">No obligation to buy</h3>
                    </div>
                </div>
            </div> --}}
            
            <!-- Row 2 -->
            {{-- <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"> --}}
                        <!-- <i class="fas fa-tag"></i> -->
                        {{-- <img width="50" src="{{ asset('images/price-tag.svg') }}" alt="">
                    </div>
                    <div class="feature-text">
                        <h3 class="fs-5 mb-0">Transparent online displayed prices</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"> --}}
                         {{-- <img width="50" src="{{ asset('images/peace-of-mind.svg') }}" alt="">
                    </div>
                    <div class="feature-text">
                        <h3 class="fs-5 mb-0">Peace of mind</h3>
                    </div>
                </div>
            </div> --}}
{{--             
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-award ms-3" width="50" style="font-size:35px;"></i>
                        
                    </div>
                    <div class="feature-text">
                        <h3 class="fs-5 mb-0">Premium quality guaranteed</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <button  class="btn btn-lg cta-button rounded-0 px-5" style="background-color:#ffc107;" data-bs-toggle="modal" data-bs-target="#exampleModal">SCHEDULE YOUR FREE CONSULTATION NOW!</button>
               
            </div>
        </div>
    </div> --}}

    {{-- <div class="container py-5 text-center"> --}}
        {{-- <h2 class="section-heading">BESPOKE DESIGNER KITCHENS</h2>
        <h3 class="section-subheading mb-5">WHERE DREAMS MEET PRECISION</h3> --}}
    
        {{-- <div class="row justify-content-center gy-4">
          <div class="col-md-3 col-sm-6">
            <div class="card-wrapper-bespoke">
              <div class="border-box-bespoke"></div>
              <div class="custom-card-bespoke shadow-lg">
                <h3 class="bespoke-title">100% Custom Designs</h3>
                <p class="bespoke-description">Tailored to your space, style, and lifestyle.</p>
              </div>
            </div>
          </div>
    
          <div class="col-md-3 col-sm-6">
            <div class="card-wrapper-bespoke">
              <div class="border-box-bespoke"></div>
              <div class="custom-card-bespoke shadow-lg">
                <h3 class="bespoke-title">Premium Materials</h3>
                <p class="bespoke-description">Durable materials and hand picked finishes.</p>
              </div>
            </div>
          </div>
    
          <div class="col-md-3 col-sm-6">
            <div class="card-wrapper-bespoke">
              <div class="border-box-bespoke"></div>
              <div class="custom-card-bespoke shadow-lg">
                <h3 class="bespoke-title">Smart & <br> Stylish</h3>
                <p class="bespoke-description">Seamless storage, Trendy and at the market retail price.</p>
              </div>
            </div>
          </div>
    
          <div class="col-md-3 col-sm-6">
            <div class="card-wrapper-bespoke">
              <div class="border-box-bespoke"></div>
              <div class="custom-card-bespoke shadow-lg">
                <h3 class="bespoke-title">End-to-End Service</h3>
                <p class="bespoke-description">From concept to installation, all under one roof.</p>
              </div>
            </div>
          </div>
        </div> --}}
    
        {{-- <div class="cta-text-bespoke">ARE YOU <span class="text-danger"> TIRED OF WASTED SPACE?</span></div> --}}
        <!-- <button class="cta-button-bespoke">CHECK OUR MAX STORAGE KITCHENS</button> -->
         {{-- <a href="{{ route('max_storage') }}" class="m-0 btn btn-lg cta-button rounded-0" style="background-color:#ffc107;">CHECK OUR MAX STORAGE KITCHENS</a> --}}
               
      {{-- </div> --}}
    


    <!-- how we work -->

    {{-- <section class="how-we-work">
        <div class="container">
            <div class="section-title">
                <h2 class="text-white">HOW <span>WE WORK</span></h2>
                <div class = "row mb-1 justify-content-center">
                    <div class="col-6">
                        <div id="lines" class="mb-3">
                            <div id="line1"></div>
                            <div id="line2"></div>
                            <div id="line3"></div>
                        
                    </div>
                    </div>
                </div>
            </div>
            
            
            <div class="row g-4">
                <!-- Step 01 -->
                <div class="col-lg-4 col-md-6">
                    <div class="step-card">
                        <div class="step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FDB813" viewBox="0 0 16 16">
                                <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
                                <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12z"/>
                                <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                            </svg>
                        </div>
                        <div class="step-number">Step 01</div>
                        <h3 class="step-title">BOOK AN APPOINTMENT</h3>
                        <p class="step-desc">You just have to book an appointment with our design consultants.</p>
                        <!-- <div class="corner-accent"></div> -->
                    </div>
                </div>
                
                <!-- Step 02 -->
                <div class="col-lg-4 col-md-6">
                    <div class="step-card">
                        <div class="step-icon">
                            <img width="50" src="{{ asset('images/team.svg') }}" alt="">
                        </div>
                        <div class="step-number">Step 02</div>
                        <h3 class="step-title">WE DO EVERYTHING FOR YOU</h3>
                        <p class="step-desc">You share your space details, style preferences, and budget. Our team will do all the work and design the perfect kitchen for you.</p>
                        <!-- <div class="corner-accent"></div> -->
                        
                            <!-- <img class="bg-black" style="position: absolute; right: 0px; bottom: 0;" src="{{ asset('images/down-arrow.png') }}" alt="" ></div> -->
                         
                    </div>
                </div>
                
                <!-- Step 03 -->
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="step-card position-relative">
                        <div class="step-icon">
                            <img width="50" src="{{ asset('images/kitchen.svg') }}" alt="">
                        </div>
                        <div class="step-number">Step 03</div>
                        <h3 class="step-title">ENJOY YOUR NEW KITCHEN</h3>
                        <p class="step-desc">Your dream kitchen is now a reality – a space you'll love for years to come.</p>
                        <!-- <div class="corner-accent"></div> -->
                        <!-- <div class="bg-black" style="position: absolute; right: 0px; bottom: 0;">
                            <img class="" src="{{ asset('images/down-arrow.png') }}" alt="" ></div>
                         </div> -->
                </div>
            </div>
            
            <div class="text-center">
                <!-- <a href="#" class="btn cta-button">BOOK YOUR FREE CONSULTATION NOW!</a> -->
                <button  class="btn btn-lg cta-button rounded-0" style="background-color:#ffc107;" data-bs-toggle="modal" data-bs-target="#exampleModal">SCHEDULE YOUR FREE CONSULTATION NOW!</button>
               
            </div>
        </div>
    </section> --}}



    <!-- Our services -->

    {{-- <section class="services-section"> --}}
        {{-- <div class="container"> --}}
            {{-- <h2 class="text-black text-center mb-3">OUR SERVICES</h2> --}}
            <!-- Slider Container -->
{{-- <div class="swiper mySwiper"> --}}
    {{-- <div class="swiper-wrapper"> --}}
      <!-- Slide 1 -->
      {{-- <div class="swiper-slide"> --}}
        
            {{-- <a href="{{ route('max_storage') }}">
            <div class="service-card">
                <div class="service-image-container">
                    
            <img class="service-image" src="{{asset('images/max-storage.png')}}" alt="">
                </div>
                <div class="service-title">MAX STORAGE</div>
                <div class="arrow-btn">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>
        </a>
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide">
        <a href="{{ route('doors_replacement') }}">
        <div class="service-card">
            <div class="service-image-container">
                
        <img src="{{asset('images/door-replacement.png')}}" alt="" class="service-image">
            </div>
            <div class="service-title">DOOR REPLACEMENT</div>
            <div class="arrow-btn">
                <i class="bi bi-arrow-right"></i>
            </div>
        </div>
        </a>
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide">
        <a href="{{ route('ordercomponent') }}">
        <div class="service-card">
            <div class="service-image-container">
                
        <img class="service-image" src="{{asset('images/order-component.png')}}" alt="">
            </div>
            <div class="service-title">ORDER COMPONENT</div>
            <div class="arrow-btn">
                <i class="bi bi-arrow-right"></i>
            </div>
        </div>
        </a>
      </div>
      <!-- Slide 4 -->
      <div class="swiper-slide">
        <a type="button" data-bs-toggle="modal" data-bs-target="#newsletterModalHome">
        <div class="service-card">
            <div class="service-image-container">
                
        <img class="service-image" src="{{asset('images/on-site-survey.png')}}" alt="">
            </div>

            <div class="service-title">ON-SITE SURVEY</div>
            <div class="arrow-btn">
                <i class="bi bi-arrow-right"></i>
            </div>
        </div>
    </a>
      </div>
      <!-- Slide 5 -->
      <div class="swiper-slide">
        <a href="{{ route('designservice') }}">
        <div class="service-card">
            <div class="service-image-container">
                
        <img class="service-image" src="{{asset('images/virtual-consultation.png')}}" alt="">
            </div>
            <div class="service-title">Virtual Consultation</div>
            <div class="arrow-btn">
                <i class="bi bi-arrow-right"></i>
            </div>
        </div>
        </a>
      </div>
      <!-- Add more slides as needed -->
    </div>
  
    <!-- Optional: Pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- Optional: Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div> --}}


            <!-- <div id="hvacServicesCarousel" class="carousel slide" data-bs-ride="carousel" style="overflow: visible;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="service-card">
                                    <div class="service-image-container">
                                        
                                {{-- <img class="service-image" src="{{asset('images/max-storage.png')}}" alt=""> --}}
                                    </div>
                                    <div class="service-title">MAX STORAGE</div>
                                    <div class="arrow-btn">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="service-card">
                                    <div class="service-image-container">
                                        
                                {{-- <img src="{{asset('images/door-replacement.png')}}" alt="" class="service-image"> --}}
                                    </div>
                                    <div class="service-title">DOOR REPLACEMENT</div>
                                    <div class="arrow-btn">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="service-card">
                                    <div class="service-image-container">
                                        
                                {{-- <img class="service-image" src="{{asset('images/order-component.png')}}" alt=""> --}}
                                    </div>
                                    <div class="service-title">ORDER COMPONENT</div>
                                    <div class="arrow-btn">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="service-card">
                                    <div class="service-image-container">
                                        
                                {{-- <img class="service-image" src="{{asset('images/on-site-survey.png')}}" alt=""> --}}
                                    </div>

                                    <div class="service-title">ON-SITE SURVEY</div>
                                    <div class="arrow-btn">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="service-card">
                                    <div class="service-image-container">
                                        
                                {{-- <img class="service-image" src="{{asset('images/virtual-consultation.png')}}" alt=""> --}}
                                    </div>
                                    <div class="service-title">Virtual Consultation</div>
                                    <div class="arrow-btn">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#hvacServicesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#hvacServicesCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#hvacServicesCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#hvacServicesCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
        {{-- </div> --}}
    {{-- </section> --}}

    

    {{-- <section class="services-section">
        <div class="container">
            <h2 class="text-black text-center mb-3">Why choose BUY KITCHEN ONLINE?</h2>
            <!-- Slider Container -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        
            
                <div class="card service-card h-100 border-0">
                    <!-- <img src="{{asset('images/shaker-22-250.png')}}" class="card-img-top" alt="Card image"> -->
                    <img src="{{asset('images/best-prices.png')}}" class="object-fit-cover" alt="Card image" height="350"  >
                        <div class="card-body">
                            <h4 class="card-title">Best Prices</h4>
                            <p class="card-text">Our discounts are so good, even our accountant cries.</p>
                            <!-- <a href="#" class="btn btn-primary mt-3">Learn More</a> -->
                        </div>
                </div>
           
      </div>
      <div class="swiper-slide">
        
            
                <div class="card service-card h-100 border-0">
                    <!-- <img src="{{asset('images/shaker-22-250.png')}}" class="card-img-top" alt="Card image"> -->
                    <img src="{{asset('images/post-installation-support.png')}}" class="object-fit-cover" alt="Card image" height="350">
                        <div class="card-body">
                            <h4 class="card-title">
                                Post-Installation Support</h4>
                            <p class="card-text">We won’t ghost you after delivery - unlike your last contractor.</p>
                            <!-- <a href="#" class="btn btn-primary mt-3">Learn More</a> -->
                        </div>
                </div>
           
      </div>
      <div class="swiper-slide">
        
            
                <div class="card service-card h-100 border-0">
                    <!-- <img src="{{asset('images/shaker-22-250.png')}}" class="card-img-top" alt="Card image"> -->
                    <img src="{{asset('images/free-consultation-on-site-survey.png')}}" class="object-fit-cover" alt="Card image" height="350">
                        <div class="card-body">
                            <h4 class="card-title">
                                Free Consultation and On-site Survey</h4>
                            <p class="card-text">Limited Time Offer</p>
                            <!-- <a href="#" class="btn btn-primary mt-3">Learn More</a> -->
                        </div>
                </div>
           
      </div>
      
      <div class="swiper-slide">
        
            
                <div class="card service-card h-100 border-0">
                    <!-- <img src="{{asset('images/shaker-22-250.png')}}" class="card-img-top" alt="Card image"> -->
                    <img src="{{asset('images/expert-installation-image.png')}}" class="object-fit-cover" alt="Card image" height="350">
                        <div class="card-body">
                            <h4 class="card-title">Expert Installation</h4>
                            <p class="card-text">We won’t leave you crying over an ‘easy DIY’ manual.</p>
                            <!-- <a href="#" class="btn btn-primary mt-3">Learn More</a> -->
                        </div>
                </div>
           
      </div>
      
      <div class="swiper-slide">
        
            
                <div class="card service-card h-100 border-0">
                    <!-- <img src="{{asset('images/shaker-22-250.png')}}" class="card-img-top" alt="Card image"> -->
                    <img src="{{asset('images/5-star-rating.png')}}" class="object-fit-cover" alt="Card image" height="350">
                        <div class="card-body">
                            <h4 class="card-title">Rated 5-Stars</h4>
                            <p class="card-text">Our reviews are real (unlike that ‘antique’ cabinet you bought).</p>
                            <!-- <a href="#" class="btn btn-primary mt-3">Learn More</a> -->
                        </div>
                </div>
           
      </div>
      
      
      
      
      
      
      
      
      
      
    </div>
  
    <!-- Optional: Pagination -->
    <!-- <div class="swiper-pagination"></div> -->
  
    <!-- Optional: Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>


            
        </div>
    </section> --}}


    <!-- <div class="container"> -->
     

    <!-- <div class ="container-fluid bg-white mt-5">
        <section class="consultation-section bg-white">
            <div class="container bg-white">
                <h2 class="mb-2 text-black mt-">EXPERT VIRTUAL DESIGN CONSULTATION</h2>
                <div class = "row mb-1 justify-content-center">
                    <div class="col-6">
                        <div id="lines" class="mb-3">
                            <div id="line1"></div>
                            <div id="line2"></div>
                            <div id="line3"></div>
                        
                    </div>
                    </div>
                </div>
                <p class="lead mb-5">Too busy for in-person meeting? We handle everything virtually, so you can stay on schedule. At Buy Kitchen Online, we offer the ideal virtual kitchen design services and consultation, where our designers collaborate with you to create a kitchen tailored to your available space and preferences.</p>
                
                <h4 class="mb-4">HOW IT WORKS</h4>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <i class="bi bi-card-list"></i>
                            </div>
                            <h3 class="text-black">01. Appointment Booking</h3>
                            <p>Start by booking an appointment with our design experts.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <h3 class="text-black">02. Sharing Preferences</h3>
                            <p>You share your space details, style preferences, and budget.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <h3 class="text-black">03. Design Creation & Approval</h3>
                            <p>We craft a design for your kitchen specific to your needs in record time.</p>
                        </div>
                    </div>
                </div>
                
                <div class="suggestion">
                    <p class="mb-2">Don't let time hold you back.</p>
                    <button href="#" class="btn btn-lg cta-button rounded-0" style="background-color:#ffc107;" data-bs-toggle="modal" data-bs-target="#exampleModal">SCHEDULE YOUR FREE CONSULTATION NOW!</button>
               
                </div>
            </div>
        </section>
    </div> -->

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
                    Buy Kitchen Online is a premier provider of complete kitchen solutions, specialising in the design and delivery of ready-made kitchens, rigid kitchen units, and components in slab, shaker, or J-pull styles. Serving London and the surrounding areas, we pride ourselves on delivering showroom-quality kitchens directly to your door.
                </p>
                <p>
                    At Buy Kitchen Online, we are committed to crafting every kitchen with precision and care, ensuring that our customers receive only the highest quality products. Our years of experience in kitchen design and manufacturing allow us to offer a seamless and stress-free ordering process, from initial design consultation to final delivery.
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

<!-- 
    <div class="container-fluid bg-light">
        <section class="survey-section">
            <div class="container">
                <div class="row text-center mb-4">
                    <div class="col-12">
                        <h2 class="mb-3" style="color:#2a6161;">WANT A MORE HANDS-ON APPROACH?</h2>
                        <p class="survey-section-p">For your peace of mind, we are offering!</p>
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
                        <p class="col-sm-7 text-black survey-section-p">Our team will visit your space, take measurements, and assess your needs. After that, the design for the custom kitchen unit will be finalized online.</p>
                        </div>
                    </div>
                </div>

                <div class="row text-center mb-4">
                    <div class="col-12">
                        <h2 class="mb-4 text-black">BENEFITS</h2>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-4 bg-white rounded">
                            <div class="benefit-icon">
                                <i class="bi bi-calculator"></i>
                            </div>
                            <h3 class=""><b>01.</b> Extensive study of your space by a professional.</h3>
                            
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-4 bg-white rounded">
                            <div class="benefit-icon">
                                {{-- <i class="bi bi-coin"></i> --}}
                                <img src="{{ asset('images/no-hidden.png') }}"/>
                            </div>
                            <h3><b>02.</b> Transparent pricing, No </br>hidden charges</h3>
                            {{-- <p class="text-muted">No hidden charges</p> --}}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-4 bg-white rounded">
                            <div class="benefit-icon">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <h3><b>03.</b> Survey payment is deducted from your final bill</h3>
                            
                            {{-- <p class="text-muted"></p> --}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class=" mb-3 text-black">
                        <span class="text-danger"> *</span>The advance payment for this survey will be deducted from your final bill, ensuring that you're only paying for your kitchen.
                        </h3>
                        <h3 class="mb-4" style="color:#2a6161">
                            Concerned about not getting the right measurements? Let our professionals handle it for you.
                        </h3>
                        <button href="#" class=" btn btn-lg px-5 rounded-0 " data-bs-toggle="modal" data-bs-target="#exampleModal" style="
    background-color: #ffc107 ;">Start designing your Ideal Kitchen</button>
                    </div>
                </div>
            </div>
        </section>
    </div> -->

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
    <!-- <section class="container-fluid py-4 bg-light">
        <div class="col-12 d-flex flex-column align-items-center">
            <h4 class="text-black  text-center fw-bold">
                ARE YOU STRUGGLING WITH KITCHEN STORAGE SPACE?
            </h4>
            <h3 class="text-center text-dark w-75 fw-bolder">
                EXPLORE BESPOKE MAX STORAGE KITCHENS
            </h3>
            <div id="lines" class="mb-3">
                <div id="line1"></div>
                <div id="line2"></div>
                <div id="line3"></div>
            
        </div>
        </div>
    </section> -->

    <!-- <section class="container-fluid bg-light py-4">
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
                        <h2 class=" fw-bold text-center text-black">02.</h2>
                        <h2 class=" fw-bold text-center text-black">TALLEST UNITS</h2>
                        <p class=" text-center max-description">Floor-to-ceiling cupboards for extra storage. Ideal for small kitchens needing vertical space.</p>
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
                        
                        <h2 class=" fw-bold text-center text-black">01.</h2>
                        
                        <h2 class=" fw-bold text-center text-black">DEEPEST UNITS</h2>
                        <p class=" text-center max-description">Deeper storage than standard cabinets. Maximizes space for pots, pans and appliances.</p>
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
                        <h2 class=" fw-bold text-center text-black">03.</h2>
                        <h2 class=" fw-bold text-center text-black">WIDEST UNITS</h2>
                        <p class="text-center max-description">Wide drawers for organized storage of kitchens essentials. Make use of every inch efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 row justify-content-center bg-light">
          <div class="col-lg-5 col-12 bg-light">
            <h4 style="color:#2a6161" class="text-center suggestion">Say Goodbye to clutter with bespoke max storage kitchens. </h4>
          </div>

        </div>
        <div class="row justify-content-center bg-light">
            <div class="col-lg-3 col-12 text-center bg-light">
                {{-- <a href="{{ route('max_storage') }}" class="btn w-100 px-3 px-lg-5 rounded-0" style="background-color:#febd49">Maximize your space now!</a> --}}
            </div>
        </div>
        </div>
    </section> -->

    {{-- <section class="container-fluid bg-green-color py-4">
        <div class="col-12 d-flex flex-column align-items-center">
        </div>
    </section> --}}

    <!-- <section class="container-fluid mt-5 grid-box-gray-color py-4 " >
        <div class="container d-flex flex-column align-items-center">
            <div class="row pt-3 justify-content-center">
                <div class ="col-sm-8 col-12">
                    <h2 class="text-center text-black"><b>RETAIL QUALITY AT ONLINE PRICES</b></h2>
            <p class="text-center suggestion">
                We Believe In Offering High-Quality Products That Rival Retail Standards, But Without The Retail Prices.
                Our Products Are Always Top-Notch, Ensuring Your Bespoke Designer Kitchen Is Built To Last.
            </p>
                </div>
            </div>
        </div>
    </section> -->
    
    <!-- <section class="container-fluid grid-box-gray-color py-4">
        <div class="container d-flex flex-column align-items-center">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bg-yellow-color2 p-5 h-100">
                        <h2 class="text-dark text-black fw-bolder">PREMIUM WARDROBES</h2>
                        <p class="text-dark suggestion">Buy Kitchen Online also takes responsibility for adding luxury to your rooms. The wardrobes are built to meet unique storage needs with meticulous attention to detail. They are not only functional but they change the aesthetic of your room.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bg-green-color p-5 h-100">
                        <h2 class="text-white fw-bolder">DOOR REPLACEMENT</h2>
                        <p class="text-white suggestion">We have a quick and affordable way of giving your kitchen a new look. Buy Kitchen Online offers door replacements for your old kitchen doors. The doors are made from premium quality and great craftsmanship. Choose from a range of colors and finishes to suit your kitchen’s style.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

   

    {{-- <section class="catalogue-bg py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <!-- Left Content -->
                <div class="col-md-12 col-lg-6 text-center text-lg-start">
                    <div class="card rounded border-0 shadow-sm p-4">
                        <h3 class="" style="color:#2a6161">Our Catalogue</h3>
                        <h2 class="mb-3 text-black">EXPLORE OUR EXCLUSIVE CATALOGUE</h2>
                        <p class="mb-3 max-description suggestion">Get access to our full catalogue for free, featuring custom kitchen designs, premium materials, and smart storage solutions. Whether you're seeking style, function, or both, we've got everything you need to bring your vision to life.</p>
                        <p class=" max-description suggestion" style="color:#2a6161" >Register now to receive our free catalogue in your inbox.</p>
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
    </section> --}}

    <!-- Testimonials -->
    @include('frontend.testimonials_component', ['testimonials' => $testimonials])

    <!-- FAQs -->
    @include('frontend.faqs_component', ['faqsData' => $generalFaqs, 'home' => 'home'])
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
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
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
        </div>
    </div>



      <div class="modal fade" id="newsletterModalHome" tabindex="-1" aria-labelledby="newsletterModalHomeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="newsletter-container">
                <button type="button" class="close-btn subscribed-close" data-bs-dismiss="modal" aria-label="Close">
                    &times;
                </button>
                 
                <div class="popup-image">
                    <img src="{{asset('images/main-popup-image.png')}}" class="img-fluid w-100" alt="">
                </div>
                <div class="newsletter-content">
                    <h2 class="content-title mt-5 text-black" style="font-size: 40px;">Subscribe To Get <span class="free-text">FREE On-Site Survey</span></h2>
                        
                    <p class="offer-text"><span class="discount-text">For your Peace of Mind, </span> expert installation is also provided<br> <span class="" style="color: green;">(Quote Available)</span></p>
                        
                    <p class="terms-text">Terms & Conditions Applied.</p>
                    <div class="subscribe-container">
                        <input type="email" id="emailInput" class="form-control news-letter-input" placeholder="Enter Your Email">
                        <button class="subscribe-btn" id="subscribeBtnHome" onclick="newsletterModalHomeFn()">Subscribe</button>
                    </div>
                    <p class="privacy-text">We respect your Privacy. Unsubscribe at any time.</p>
                </div>
                
            </div>
        </div>
    </div>
</div>

  <!-- Thank You Modal -->
<div class="modal fade" id="thankyouModalHome" tabindex="-1" aria-labelledby="thankyouModalHomeLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="butn-close close-btn" data-bs-dismiss="modal" aria-label="Close">X</button>
    </div>
    <div class="modal-body p-3">
      <div class="row mb-4">
        <div class="col-12">
          <h1><span class="thank-you">Thank You</span> <span class="for-subscribing">For Subscribing!</span></h1>
        </div>
      </div>
      
      <div class="row mb-3">
        <div class="col-12">
          <p class="fs-5 mb-0">We've sent the <strong>Discount Code</strong> to your <strong>email address</strong>.</p>
        </div>
      </div>
      
      <div class="row mb-4">
        <div class="col-12">
          <p class="fs-4">Additionally, <span class="youve-won">YOU'VE WON</span> <span class="free-text">FREE</span> <span class="consultation">CONSULTATION!</span></p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-7 mb-4">
          <p class="fs-5 mb-3">If you want to avail this offer, Please provide:</p>
          
          <form>
            <input type="text" class="form-control thankyou-input" placeholder="Your Name:">
            <input type="tel" class="form-control thankyou-input" placeholder="Phone Number:" pattern="[0-9]+" inputmode="numeric">
            <input type="datetime-local" class="form-control thankyou-input" placeholder="Preferred Date & Time:">
            <textarea class="form-control thankyou-input" rows="3" placeholder="Add a Note:"></textarea>
            
            <button type="submit" class="submit-btn mt-3">Submit</button>
          </form>
        </div>
        
        <div class="col-md-5">
          <div class="benefits-box">
            <p class="benefits-title mb-4">BENEFITS OF <span style="color: #ffa500;">FREE CONSULTATION</span>:</p>
            
            <ul class="list-unstyled">
              <li class="benefit-item">• <span class="highlight-text">FREE</span> Virtual Consultation</li>
              <li class="benefit-item">• <span class="highlight-text">FREE</span> Design Advice</li>
              <li class="benefit-item">• <span class="highlight-text">FREE</span> Efficient Planning</li>
              <li class="benefit-item">• Schedule at your <span class="convenience-text">CONVENIENCE</span></li>
              <li class="benefit-item">• <span class="highlight-text">NO OBLIGATION</span> to Purchase</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>








    @push('scripts')
        <script>



function newsletterModalHomeFn(){
    
     document.getElementById('subscribeBtnHome').addEventListener('click',function(){
                    console.log("btn clicked")
                    const emailInput = document.getElementById('emailInput');
                    const email = emailInput.value.trim();
                    console.log(email);
                    
                    // Basic email validation
                    if (email && email.includes('@') && email.includes('.')) {
                        // Hide newsletter modal
                        var newsletterModalHome = bootstrap.Modal.getInstance(document.getElementById('newsletterModalHome'));
                        newsletterModalHome.hide();
                        
                        // Show discount modal after a short delay
                        setTimeout(function() {
                            var thankyouModalHome = new bootstrap.Modal(document.getElementById('thankyouModalHome'));
                            // discountModal.show();
                            sendEmail();
                            thankyouModalHome.show();
                            
                        }, 500);
                    } else {
                        // Simple error visual
                        emailInput.style.borderColor = '#ef4444';
                        setTimeout(() => {
                            emailInput.style.borderColor = '#fde68a';
                        }, 2000);
                    }
                    
                    localStorage.setItem('subscribed', true);
                });
                   

       

}





const swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay:true,
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 5,
      },
    },
  });

  const orderKitchen = new Swiper(".orderKitchenSwiper", {
      slidesPerView: 3,  /* Auto adjusts the number of slides per row */
      spaceBetween: 30,
      loop: true,
      autoplay:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: false,
      },
      breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween:0
      },
      640: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
    });

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