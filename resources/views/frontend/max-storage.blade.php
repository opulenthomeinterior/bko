<x-guest-layout>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bespoke Kitchens in London | Custom Kitchens Units </title>

    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "Bespoke Kitchens",
        "url": "https://bkonline.uk/max-storage",
        "logo": "https://bkonline.uk/public/images/bko-black-logo.png",
        "description": "Buy Kitchen Online offers premium, bespoke designer kitchens at competitive prices in London (North London, North East London, Central London & East London).",
        "image": "https://bkonline.uk/public/images/widest.jpgg",
        "brand": {
            "@type": "Brand",
            "name": "Buy Kitchen Online"
        },
        "offers": {
            "@type": "Offer",
            "url": "https://bkonline.uk/max-storage",
            "priceCurrency": "GBP",
            "price": "0.00",
            "priceValidUntil": "2025-12-31",
            "itemCondition": "https://schema.org/NewCondition",
            "availability": "https://schema.org/InStock"
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://bkonline.uk/max-storage"
        },
        "manufacturer": {
            "@type": "Organization",
            "name": "Buy Kitchen Online",
            "logo": "https://bkonline.uk/public/images/bko-black-logo.png",
            "url": "https://bkonline.uk/"
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Unit 7, 44 Gillender Street",
            "addressLocality": "London",
            "postalCode": "E14 6RP",
            "addressCountry": "UK"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "020 805 05605",
            "contactType": "Customer Service",
            "areaServed": "London specifically in North London, North East London, Central London & East London.",
            "availableLanguage": "English UK"
        },
        "sameAs": [
            "https://www.facebook.com/opulenthomeinteriorsltd",
            "https://www.instagram.com/bkonline__kitchen/?igsh=YWZqaDg4b2ppZ3Zw",
            "https://www.youtube.com/@BKOnline570"
        ]
        }
    </script>
    <link rel="canonical" href="https://bkonline.uk/max-storage" />
    <meta name="description" content="Buy Kitchen Online offers Premium Made to Meausre Kitchen Units with Retail Quality at Trade Prices. Maximize your Kitchen Space with Expert Installation.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>

        .step-icon {
            background-color: #f9f9f9;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
        
        .step-number {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 1rem 0;
        }
        
        .step-title {
            color: #2B5A5E;
            font-weight: 600;
            margin-bottom: 1rem;
            text-transform: uppercase;
        }
        
        .step-description {
            text-align: center;
            font-size: 0.9rem;
            color: #444;
            margin: 0 auto;
        }
        @media(max-width:576px)
        {
            .step-number,.step-icon
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
            }
            
        }
        .arrow-line {
            height: 2px;
            width: 100%;
            background-color: #2B5A5E;
            position: relative;
        }
        
        .arrow-line:after {
            content: "";
            position: absolute;
            right: 0;
            top: -5px;
            width: 0;
            height: 0;
            border-left: 8px solid #2B5A5E;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
        }
       

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
            /* background: url('{{ asset('images/hero-image.jpeg') }}') center/cover no-repeat; */
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



    
        /* .modal-dialog {
            max-width: 900px;
            margin: 1.75rem auto;
        } */
        .modal.show .modal-dialog
        {
            max-width:900px;
        }
        .modal-content {
            border-radius: 8px;
            border: none;
            overflow: hidden;
            box-shadow: 0 5px 30px rgba(255, 192, 31, 0.5); /* Changed shadow color to #ffc01f with transparency */
        }

        .modal-body {
            padding: 0;
        }

        .newsletter-container {
            display: flex;
            flex-direction: row;
        }

        .popup-image {
            flex: 1;
            background-image: url('/api/placeholder/600/900');
            background-size: cover;
            background-position: center;
            min-height: 500px;
        }

        .newsletter-content {
            flex: 1;
            padding: 40px;
        }

        .content-title {
            font-size: 48px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .discount-text {
            color: #F2A900;
        }

        .offer-text {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .free-text {
            color: #FF0000;
            font-weight: bold;
        }

        .terms-text {
            font-size: 14px;
            margin-bottom: 30px;
        }

        .subscribe-container {
            display: flex;
            margin-bottom: 15px;
        }


        .subscribe-btn {
            background-color: #1D6363;
            color: white;
            border: none;
            border-radius: 0;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .privacy-text {
            font-size: 14px;
            color: #888;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #FF3547;
            color: white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            border: none;
            z-index: 1050;
            box-shadow: 0 2px 5px #ffc01f; /* Changed close button shadow to #ffc01f */
        }

        @media (max-width: 767px) {
            .newsletter-container {
                flex-direction: column;
            }
            
            .popup-image {
                /* min-height: 200px; */
                display: none;
            }
            
            .newsletter-content {
                padding: 25px;
            }
            
            .content-title {
                font-size: 32px;
            }
            
            .offer-text {
                font-size: 18px;
            }
        }

        .demo-button {
            margin: 100px auto;
            display: block;
        }
    
    
    
        .modal-content {
            border-radius: 1rem;
            border: none;
            padding: 1rem;
        }
        
        .modal-header {
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .btn-close {
            background-color: #dc3545;
            opacity: 1;
            padding: 0.5rem;
            border-radius: 50%;
            position: absolute;
            top: 15px;
            right: 15px;
            color: white;
            font-weight: bold;
        }
    
        .btn-close:focus {
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
        }
        
        .thank-you {
            color: #dc3545;
            font-weight: bold;
            font-size: 2.5rem;
        }
        
        .for-subscribing {
            color: #212529;
            font-size: 2.5rem;
        }
        
        .youve-won {
            color: #ffa500;
            font-weight: bold;
        }
        
        .free-text {
            color: #dc3545;
            font-weight: bold;
        }
        
        .consultation {
            color: #212529;
            font-weight: bold;
        }
    
        /* .form-control {
            border: 1px solid #6c757d;
            border-radius: 5px;
            padding: 0.75rem;
            margin-bottom: 1rem;
        } */
        
        .submit-btn {
            background-color: #ffc107;
            color: #212529;
            font-weight: bold;
            border: none;
            padding: 1rem;
            width: 100%;
            text-transform: uppercase;
        }
        
        .benefits-box {
            border: 1px solid #6c757d;
            border-radius: 5px;
            padding: 1.5rem;
            height: 100%;
        }
    
        .benefits-title {
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .benefit-item {
            margin-bottom: 0.75rem;
        }
        
        .highlight-text {
            color: #dc3545;
            font-weight: bold;
        }
        
        .convenience-text {
            color: #dc3545;
            font-weight: bold;
        }
        
        @media (max-width: 768px) {
            .thank-you, .for-subscribing {
                font-size: 2rem;
            }
        }
        .news-letter-input {
            border-radius: 0 !important;
            border: 1px solid #ced4da !important;
            padding: 12px 15px !important;
            height: auto !important;
        }


        :root {
            --primary-color: #ffc01f;
            --primary-light: #ffd45e;
            --primary-dark: #e6a600;
            --dark-color: #333333;
            --light-color: #f8fafc;
            --text-on-primary: #333333;
        }


        .faq-container {
            
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .faq-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .faq-header h1 {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .faq-header h1:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background-color: var(--primary-color);
            bottom: -10px;
            left: 25%;
            border-radius: 2px;
        }

        .faq-header p {
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
        }

        .faq-item {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
            overflow: hidden;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .faq-item:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
            border-left: 4px solid var(--primary-color);
        }

        .faq-question {
            cursor: pointer;
            padding: 1.25rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .faq-question.active {
            background-color: var(--primary-color);
            color: var(--text-on-primary);
        }

        .faq-question i {
            transition: transform 0.3s ease;
            color: var(--primary-color);
        }

        .faq-question.active i {
            transform: rotate(180deg);
            color: var(--text-on-primary);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            padding: 0 1.5rem;
            color: #475569;
            line-height: 1.6;
            transition: all 0.5s ease;
            background-color: #fffdf7;
        }

        .faq-answer.show {
            max-height: 1000px;
            padding: 1rem 1.5rem 1.5rem;
            border-top: 1px solid #fff5e0;
        }
        
        /* Card styles for FAQ answers */
        .faq-card-container {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
            flex-wrap: wrap;
        }
        
        .faq-card {
            flex: 1;
            min-width: 250px;
            background-color: white;
            border-radius: 8px;
            padding: 1.25rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            border-left: 3px solid var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .faq-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .faq-card-title {
            color: var(--dark-color);
            font-weight: 600;
            margin-bottom: 0.75rem;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
        }
        
        .faq-card-title i {
            color: var(--primary-color);
            margin-right: 0.5rem;
        }
        
        .faq-card-desc {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Custom badge styles */
        .faq-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-right: 0.5rem;
        }

        .faq-badge-popular {
            background-color: var(--primary-light);
            color: var(--text-on-primary);
        }

        .faq-badge-new {
            background-color: #ffe8a3;
            color: #b38000;
        }

        /* Search box styles */
        .faq-search {
            position: relative;
            margin-bottom: 2rem;
        }

        .faq-search input {
            width: 100%;
            padding: 1rem 1.5rem;
            padding-left: 3rem;
            border: 2px solid #e2e8f0;
            border-radius: 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .faq-search input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(255, 192, 31, 0.3);
        }

        .faq-search i {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
        }

        /* Category filters */
        .faq-categories {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 2rem;
            justify-content: center;
        }

        .faq-category {
            padding: 0.5rem 1rem;
            background-color: white;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #64748b;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .faq-category:hover, .faq-category.active {
            background-color: var(--primary-color);
            color: var(--text-on-primary);
            border-color: var(--primary-color);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .faq-categories {
                flex-wrap: nowrap;
                overflow-x: auto;
                padding-bottom: 0.5rem;
                justify-content: flex-start;
                scrollbar-width: none;
            }

            .faq-categories::-webkit-scrollbar {
                display: none;
            }

            .faq-category {
                white-space: nowrap;
            }

            .faq-question {
                font-size: 1rem;
                padding: 1rem 1.25rem;
            }
        }
        
        .internal-card-swiper {
            position: relative !important;
            padding: 30px 0 !important;
        }
        
        .internal-card-swiper .swiper-slide {
            /* width: 200px !important; */
            height: 400px !important;
            transition: all 0.4s ease !important;
            transform: scale(0.85) !important;
            opacity: 0.5 !important;
        }
        
        .internal-card-swiper .swiper-slide-active {
            transform: scale(1) !important;
            opacity: 1 !important;
        }
        
        .card {
            height: 100% !important;
            border-radius: 16px !important;
            overflow: hidden !important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1) !important;
            background-color: #fff !important;
            transition: all 0.3s ease !important;
            position: relative !important;
        }
        
        .card:hover {
            transform: translateY(-10px) !important;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
        }
        
        .card-img {
            /* height: 65% !important; */
            width: 100% !important;
            /* height: 100% !important; */
            overflow: hidden !important;
        }
        
        .card-img img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            transition: all 0.5s ease !important;
        }
        
        .card:hover .card-img img {
            transform: scale(1.1) !important;
        }
        
        .card-content {
            padding: 20px !important;
        }
        
        .card-title {
            font-size: 1.3rem !important;
            font-weight: 600 !important;
            color: #333 !important;
            margin-bottom: 12px !important;
        }
        
        .card-desc {
            font-size: 0.9rem !important;
            color: #666 !important;
            line-height: 1.5 !important;
        }
        
        .swiper-button-next, .swiper-button-prev {
            width: 40px !important;
            height: 40px !important;
            background-color: #fff !important;
            border-radius: 50% !important;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1) !important;
            color: #333 !important;
        }
        
        .swiper-button-next:after, .swiper-button-prev:after {
            font-size: 18px !important;
            font-weight: bold !important;
        }
        
        .swiper-pagination-bullet {
            width: 10px !important;
            height: 10px !important;
            background-color: #333 !important;
            opacity: 0.3 !important;
        }
        
        .swiper-pagination-bullet-active {
            opacity: 1 !important;
            background-color: #333 !important;
        }
        
        h1.heading {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
            font-size: 2.5rem;
            position: relative;
            padding-bottom: 15px;
        }
        
        h1.heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #333;
            border-radius: 2px;
        }
        
        /* Animation for card entrance */
        @keyframes fadeInUp {
            from {
                opacity: 0 !important;
                transform: translateY(30px) !important;
            }
            to {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }
        }
        
        .card {
            animation: fadeInUp 0.6s ease forwards !important;
        }
        
    </style>
</head>

    <!-- <nav class="top-navbar">
        <a class="top-navbar-text" href="{{route('home')}}"> 
            Visit Buy Kitchen Online
        </a> 
    </nav> -->

    <header class="hero">
        <div class="hero-content">
            <h1 class="fs-md-0  text-white fw-bold text-uppercase" style="font-size:48px;">Bespoke designer <span class="text-warning">kitchens</span></h1>
            {{-- <h1 class="text-warning fw-bold">Timeless Elegance</h1> --}}
            <p style="" class="mt-5 suggestion"><span class="suggestion">Are You Settling for a Kitchen That Doesn't Fit Your Life?</span> <br><span class="suggestion max-description">We offer premium, Bespoke Kitchen Units at the price of standard kitchens</span></p>
            {{-- <div class="scroll-down">Scroll Down <i>&#x2193;</i></div> --}}
      
            <div class="container">
                <div class="row justify-content-center">
                    
                     <div class="col-md-6">
                        <div class="row justify-content-center column-badges" >
                            <img class="w-25" src="{{ asset('images/max-storage-badge.png') }}" alt="">
                            <!-- <a href="https://www.trustpilot.com/review/opulenthomeinteriors.com">
                             </a>    -->
                             <!-- <a class="btn" href="https://www.trustpilot.com/review/opulenthomeinteriors.com"> -->
                                <img style="cursor: pointer;" class="w-25" src="{{ asset('images/trust-pilot-badge.png') }}" 
                                onclick="window.location.href ='https://www.trustpilot.com/review/opulenthomeinteriors.com'">
                            

                             
                                <img style="cursor: pointer;" class="w-25" src="{{ asset('images/google-reviews-badge.png') }}" alt="" onclick="window.location.href ='https://www.google.com/maps/place/Buy+Kitchen+Online/@51.5192167,-0.0093268,17z/data=!4m8!3m7!1s0x48761d591fe166d7:0x456fed0ffc8a8222!8m2!3d51.5192167!4d-0.0093268!9m1!1b1!16s%2Fg%2F11vbf0zdzm?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D'">
                           
                        </div>
                        {{-- <img src="{{ asset('images/max-badges.png') }}" class="img-fluid w-100 "/> --}}
                    </div>
                    {{-- <div class="col-2">
                        <img src="{{ asset('images/max-storage-badge.png') }}" class="img-fluid w-100 "/>
                    </div>
                    
                   
                    <div class="col-2">
                        <img  src="{{ asset('images/trust-pilot-badge.png') }}" class="img-fluid w-100"/>
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('images/google-reviews-badge.png') }}" class="img-fluid w-100"/>
                    </div> --}}
                   
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">


            <div class="col-12 my-5 p-0">
                <a class="w-100 p-0 btn" data-bs-toggle="modal" data-bs-target="#newsletterModalMax">
                {{-- <img class=" p-0 w-100 rounded img-fluid d-none d-md-block" src="{{ asset('images/max-banner.png') }}"/> --}}
                <img class=" p-0 w-100 rounded img-fluid d-none d-md-block" src="{{ asset('images/max-storage-after-hero.png') }}"/>
                
                <img class="w-100 img-fluid d-md-none mt-2" src="{{ asset('images/max-banner-mob.png') }}"/>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid py-3" style="background: linear-gradient(135deg,#f5f7fa 0%, #e0e4e9 100%)">
        <section class="container my-5">
            <div class="row">
                {{-- <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-3"></div> --}}
                <div class=" col-md-8 col-12 align-self-center mb-4 mb-sm-0 px-lg-4">
                    {{-- <div style="">
                        <h1>
                            <span class="text-warning">Standard Kitchens </span>
                            <br>
                            frequently require <span class="text-warning">compromises</span>

                    
                        </h1>
                    
                        <h2>
                            Limited layout, generic styles, and materials that do not suit your needs
                        </h2>
                    

                        <h3 class="mt-5 fw-bold">
                            Do you find yourself wishing for specific features, or a more personalized aesthetic that off-the-shelf options simply can't provide?
                            <br>
                            Stop Compromising!
                        </h3>

                        <h4 class="mt-5">
                            <span class="text-danger fw-bold text-uppercase mb-2 mb-sm-0">FOR A LIMITED TIME, WE ARE OFFERING FREE CONSULTATION and on-site survey.</span>
                            <br>
                            Because we believe your kitchen should be more than just a place to cook – it should be a reflection of your personality and a hub for your lifestyle
                        </h4>
                    </div> --}}
                        <div class="row">
                            <div class="col-12">
                            <img class="pb-3 w-100 rounded img-fluid d-none d-md-block" src="{{ asset('images/standard-kitchen-disadvantages.png') }}" alt="">
                            <img class="pb-3 w-100 rounded img-fluid d-none d-md-block" src="{{ asset('images/max-storage-kitchen-advantages.png') }}" alt="">     
                            
                                
                        </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 mb-3 rounded img-fluid d-md-none" src="{{ asset('images/standard-kitchen-disadvantages-mobile.png') }}" alt="">
                        
                            <img class="w-100 rounded img-fluid d-md-none" src="{{ asset('images/max-storage-kitchen-advantages-mobile.png') }}" alt="">
                            
                            </div>
                        </div>
                        
                        {{-- <img class="w-100 rounded  rounded img-fluid d-none d-md-block" src="{{ asset('images/max-form-left-banner-desktop.png') }}"/>
                        <img class="w-100 rounded rounded img-fluid d-md-none" src="{{ asset('images/max-form-left-banner-mob.png') }}"/>
                        --}}
                </div>
                <div class="p-0 col-md-4 col-12">


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


    <div class = "container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-dark text-center fw-bolder mb-3">
                    Bespoke Storage Solutions That Fit Every Pot, Pan & Gadget—Guaranteed!
                </h2>
            </div>
        </div>
        <div class ="row justify-content-center" style="min-height:70vh">
         <div class="col-md-10 rounded position-relative" style="">
            
            <iframe src="https://www.youtube.com/embed/bk4_64zzKJI?si=YDMGTA1w622JuqTg" 
          
                style="width: 100%; height: 100%;" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
            {{-- <video  controls class="w-100 h-100" autoplay loop>
            <source src="{{ asset('videos/max-storage-video.mp4') }}" type="video/mp4">
            </video> --}}
         </div>
        </div>
    </div>
    <div class="container mt-5">
    </div>
    <section class="container-fluid  pt-5 pb-3" style="background-color:#f2f4f5">
        <div>
        <div class="col-12 d-flex flex-column align-items-center">
            <h3 class="max-description suggestion text-center text-danger fw-bold">Are you tired of just dreaming about a better kitchen?</h3>
            <h2 class="text-dark text-center fw-bolder">
                BESPOKE DESIGN, STANDARD PRICE
            </h2>
            <div id="lines" class="mb-3">
                <div id="line1"></div>
                <div id="line2"></div>
                <div id="line3"></div>
            
        </div>
        <p class="text-center text-dark w-md-75 w-100 max-description suggestion">
            We offer premium, bespoke designer kitchens at the price of standard kitchens. Our process is straightforward.
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
    <div class="container">
        <div class="row justify-content-center">

             <!-- Step 1 -->
             <div class="col-md-4 col-lg-3 text-center mb-4 mb-lg-0">
                <div class="step-icon">
                    <i class="text-warning fs-1 fa-solid fa-phone"></i>
                </div>
                <div class="step-number">Step 01</div>
                <h4 class="step-title">You Contact Us</h4>
                <p class="step-description px-3">Share your vision, we’ll listen to your ideas, needs, and lifestyle to understand your dream kitchen</p>
           
            </div>
            
            <!-- Arrow 1 - Hidden on screens smaller than large -->
            <div class="col-lg-1 d-none d-lg-flex justify-content-center align-items-center">
                <div class="arrow-line w-100"></div>
            </div>
            
            <!-- Step 2 -->
            <div class="col-md-4 col-lg-3 text-center mb-4 mb-lg-0">
                <div class="step-icon">
                    <i class="text-warning fs-1 fa-solid fa-handshake"></i>
                </div>
                <div class="step-number">Step 02</div>
                <h4 class="step-title">We handle everything for you</h4>
                <p class="step-description px-3">Our experts create a personalized design for you, including layouts, materials, and colors etc.</p>
            </div>
            
            <!-- Arrow 2 - Hidden on screens smaller than large -->
            <div class="col-lg-1 d-none d-lg-flex justify-content-center align-items-center">
                <div class="arrow-line w-100"></div>
            </div>
            
            <!-- Step 3 -->
            <div class="col-md-4 col-lg-3 text-center">
                <div class="step-icon">
                    <i class="fs-1 text-warning fa-solid fa-kitchen-set"></i>
                </div>
                <div class="step-number">Step 03</div>
                <h4 class="step-title">You enjoy your perfect kitchen</h4>
                <p class="step-description px-3">Our skilled craftsmen build and install your custom kitchen. Ensuring a perfect fit and lasting beauty.</p>
            </div>
            <div class="text-center mt-5">
                <!-- <a href="#" class="btn cta-button">BOOK YOUR FREE CONSULTATION NOW!</a> -->
                <button  class="btn btn-lg cta-button rounded-0" style="background-color:#ffc107;" data-bs-toggle="modal" data-bs-target="#exampleModal">SCHEDULE YOUR FREE CONSULTATION NOW!</button>
               
            </div>
        </div>
        

        {{-- <div class="col-lg-4 col-12 mb-3 mb-sm-0">
             @include('frontend.card', ['icon_class'=>'fa-solid fa-phone','number'=>'01', 'title'=>'You Contact Us','description'=>"Share your vision, we’ll listen to your ideas, needs, and lifestyle to understand your dream kitchen"])
        </div>
        <div class="col-lg-4 col-12 mb-3 mb-sm-0">
            @include('frontend.card', ['icon_class'=>'fa-solid fa-handshake','number'=>'02', 'title'=>'We handle everything for you','description'=>"Our experts create a personalized design for you, including layouts, materials, and colors etc."])
       </div>
       <div class="col-lg-4 col-12 mb-3 mb-sm-0">
        @include('frontend.card', ['icon_class'=>'fa-solid fa-kitchen-set','number'=>'03', 'title'=>'You enjoy your perfect kitchen','description'=>"Our skilled craftsmen build and install your custom kitchen. Ensuring a perfect fit and lasting beauty."])
      </div> --}}
    </div>

    {{-- <div class="container-fluid py-3" style="background-color:#f2f4f5">
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
    </div> --}}



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
            <h2 class="col-md-12 col-11 text-center mb-4 fw-bold text-black text-uppercase">WHAT IS A MAX STORAGE KITCHEN?</h2>
            {{-- <h4 class="col-md-12 p-0 col-11 text-start  fw-bold text-danger text-uppercase">ARE YOU STRUGGLING WITH STORAGE SPACE?</h4> --}}

        </div>
        <div class="row">
            <div class="col-12  d-flex align-items-center">
                <div>
                    <h3 class="mb-3 text-uppercase ">Are you <span class="text-danger"> STRUGGLING with STORAGE SPACE?</span></h3>
                    <h3 class="text-uppercase" style="color: #2a6161">SOLUTION
                        
                         <br><b style="color: #000">BESPOKE MAX STORAGE KITCHENS</b></h3>
                    <small class=suggestion>
                        Standard designer kitchens are beautiful but with limited storage space. Bulk-manufactured standard space units are not the solution for your major storage problems. 
                        <br>
                        <span>
                            <span class="text-black fw-bold">
                                Are overcrowded </span> <span class="text-warning fw-bold"> cabinets and cluttered countertops </span> <span class="text-black fw-bold">causing you daily stress?</span><br>
                            At Buy Kitchen Online, we offer made to measure kitchens units to maximize your kitchen with the deepest, tallest, and widest units in the market, and they are customized to suit your needs. 
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

    
    <section class="container mb-5">
        <div class="row">
            {{-- <div class="col-12">
                <img class="img-fluid w-100" src="{{ asset('images/max-cabinets.jpeg') }}"/>
            </div> --}}
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card rounded-0 border-0">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/deepest.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card rounded-0 border-0">
                    <div class="p-5 bg-green-color d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h2 class="text-white fw-bold text-center">TALLEST UNITS</h2>
                        <p class="max-description suggestion text-white text-center">Floor-to-ceiling cabinets for extra storage. Ideal for small kitchens needing vertical space.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card rounded-0 border-0">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/widest.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card rounded-0 border-0">
                    <div class="p-5 bg-yellow-color2 d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h2 class="text-white fw-bold text-center">DEEPEST UNITS</h2>
                        <p class="max-description suggestion text-white text-center">Deeper storage than standard cabinets. Maximizes space for pots, pans and appliances.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card rounded-0 border-0">
                    <div class="" style="height: 250px; width: 100%">
                        <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="{{ asset('images/tallest.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                <div class="card rounded-0 border-0">
                    <div class="p-5 bg-dark d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                        <h2 class="text-white fw-bold text-center">WIDEST UNITS</h2>
                        <p class="suggestion max-description text-white text-center">Wide cabinets for organized storage of kitchens essentials. Make use of every inch efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row justify-content-center mt-5">

            
            <div class="text-center">
            <h3> Bespoke Storage Solutions That Fit <span class="fw-bolder"> Every Pot, Pan & Gadget—Guaranteed!</span></h3>
            </div> --}}
            {{-- <div class="col-lg-8">
            <h3 class=" text-center text-md-start text-black">Never settle for a standard-size kitchen because you don’t have to any more.</h3>
            
            </div>
        </div>
        <div class="row justify-content-center">
            <div calss="col-3">
                <p class="text-center max-description suggestion">It is your chance to enjoy luxurious designs with practicality, especially when we have eliminated the price issue</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-12">
                <button class="btn btn-warning px-2 px-lg-5 text-uppercase rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Book your free consultation now!</button>
            </div> --}}
        {{-- </div>
    </section> --}}


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
                <div class="col-12 col-md-5 col-lg-3">
                    <img src="{{ asset('images/tall-cabinets.png') }}" 
                    class="img-fluid" 
                    alt="Modern Kitchen" 
                    style=" box-shadow: 20px 22px 0px 0px rgba(254,202,109,1); object-fit: cover;">
                    <div class="content mt-5">
                    <h3 class="text-uppercase fw-bold text-center">TALL CABINETS</h3>
                    <p class="text-center suggestion max-description"> Our tall cabinets are made up to 850mm deep and more to flush the American fridge and freezer (750mm deep). The kitchen looks seamless when all the appliances, and cabinets are perfectly aligned.</p>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-3">
                    <img src="{{ asset('images/bridging.png') }}" class="img-fluid border border-warning" alt="Smart Kitchen" style=" object-fit: cover; box-shadow: 20px 22px 0px 0px rgba(42, 97, 97,1);">
                    <div class="content mt-5">
                        <h3 class="text-uppercase fw-bold text-center">Bridging Units</h3>
                        <p class="text-center suggestion max-description"> Our bridging units are designed to seamlessly align with tall units, offering a custom fit for you. While the market standard typically offers a depth of 300mm, we provide options with depths of up to 850mm or more. </p>
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
                    <img src="https://bkonline.uk/public/imgs/products/TALL-Larder-angled-12501720361557_668aa255bad6b.jpg" class="img-fluid" alt="Modern Kitchen" style="width: 520px; height: 540px; box-shadow: 20px 22px 0px 0px rgba(254,202,109,1); object-fit: cover;">
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

    <section class="conatiner py-2 text-center mb-4">
        <div class="row">
            <div class="col-12 ">
                <a class="w-100 btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img class="rounded img-fluid w-100 d-none d-md-block" src="{{ asset('images/never-settle.png') }}"/>
                {{-- <img class="rounded img-fluid w-100" src="{{ asset('images/never-settle.png') }}"/> --}}
                
                <img class="rounded shadow-lg img-fluid w-100 ol-12  d-md-none" src="{{ asset('images/never-settle-mobile.png') }}"/>
                </a>
            </div>
        </div>
        {{-- <div class="px-4 text-center">
            <h4 class="text-center text-danger">WHY settle for an average-sized kitchen  </h4>
            <h5 class="text-center" style="color:#2a6161">WHEN WE HAVE ELIMINATED THE PRICE ISSUE FOR A FULLY CUSTOMIZED KITCHEN? </h5>
        </div> --}}
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
    
    <div class="container">
        <div class="row">


            <div class="col-12 my-5 p-0">
               
                <img class=" p-0 w-100 rounded img-fluid d-none d-md-block" src="{{ asset('images/max-custom-sizes.png') }}"/>
                
                <img class="w-100 img-fluid d-md-none mt-2" src="{{ asset('images/max-custom-sizes-mobile.png') }}"/>
               
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">


            <div class="col-12 my-5 p-0">
            
                <img class=" p-0 w-100 rounded img-fluid d-none d-md-block" src="{{ asset('images/max-appliances.png') }}"/>
                
                <img class="w-100 img-fluid d-md-none mt-2" src="{{ asset('images/max-appliances-mobile.png') }}"/>
            
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">

        

        <div class="row justify-content-center">
            <div class="col-8">
                  <h2 class="text-center fw-bold">Smart storage solutions</h2>
                  <h5 class="text-success text-center mt-4"> Wish you could find that one spice without emptying the entire        cupboard?</h5>
                  <h5 class="text-center fw-bold">We Can Help!</h5>
            </div>
        </div>

        <div class="internal-card-swiper">
            <div class="swiper internalCardSwiper">
                <div class="swiper-wrapper">
                    <!-- Card 1 -->
                    <div class="swiper-slide">
                        <a href="https://bkonline.uk/shop/by-product/corner-pull-out-shelving-unit,-for-base-cabinets,-pole-free,-vauth-sagel-vs-cor-wheel-pro/14666" class="text-dark text-decoration-none">

                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/pull-out-shelving-unit.png') }}" class="card-img-top" alt="">

                            </div>
                            <div class="card-content">
                                <h6 class="card-title">Corner pull out shelving Unit</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="swiper-slide">
                        <a href="https://bkonline.uk/shop/by-product/swing-out-larder--unit,-for-cabinet-width-500-600-mm,-with-planero-lava-grey-storage-baskets,-vauth-sagel-vs-tal-gate/14447" class="text-dark text-decoration-none">

                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/swing-out-larder-unit.png') }}" class="card-img-top" alt="">
                            </div>
                            <div class="card-content">
                                <h6 class="card-title">Swing Out Larder Unit</h6>
                                
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="swiper-slide">
                        <a href="https://bkonline.uk/shop/by-product/wicker-basket-set,-two-baskets-with-runners,-for-cabinet-widths-500-600-mm/14672" class="text-dark text-decoration-none">

                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/wicker-basket-set-with-runners.png') }}" class="card-img-top" alt="">
                            </div>
                            <div class="card-content">
                                <h6 class="card-title">Wicker basket set  with runners</h6>
                                
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="swiper-slide">
                        <a href="https://bkonline.uk/shop/by-product/swing-out-corner-storage,-artline-glass-sided-chrome-wire-baskets,-vauth-sagel-vs-cor-fold-%28left%29/14383" class="text-dark text-decoration-none">

                        <div class="card">
                            <div class="card-img">
                                 <img src="{{ asset('images/swing-out-corner-storage.png') }}" class="card-img-top" alt="">
                            </div>
                            <div class="card-content">
                                <h6 class="card-title">Swing out corner storage</h6>
                                
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    <!-- Card 5 -->
                    <div class="swiper-slide">
                        <a href="https://bkonline.uk/shop/by-product/swing-out-larder--unit,-for-cabinet-width-500-600-mm,-artline-glass-side-baskets,-vs-tal-gate/14522" class="text-dark text-decoration-none">
                        
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('images/swing-out-larder-unit-artline-glass-side-baskets.png') }}" class="card-img-top" alt="">
                            </div>
                            <div class="card-content">
                                <h6 class="card-title">Swing out larder unit artline glass side baskets</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    <div class="swiper-slide">
                        <a href="https://bkonline.uk/shop/by-product/double-basket,-pull-out,-for-300-400-mm-cabinet-width/14653" class="text-dark text-decoration-none">
                        <div class="card">
                            <div class="card-img">
                                           <img src="{{ asset('images/double-basket-pull-out.png') }}" class="card-img-top" alt="">
                            </div>
                            <div class="card-content">
                                <h6 class="card-title">Double basket pull out</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                          <a href="https://bkonline.uk/shop/by-product/extension-pole,-for-vauth-sagel-cornerstone-maxx/14316" class="text-dark text-decoration-none">
                        <div class="card">
                            <div class="card-img">
                                          <img src="{{ asset('images/extension-pole.png') }}" class="card-img-top" alt="">
                            </div>
                            <div class="card-content">
                              <h6 class="card-title">Extension pole</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                                         <a href="https://bkonline.uk/shop/by-product/base-inserts,-set,-white-plastic/14366" class="text-dark text-decoration-none">
                        <div class="card">
                            <div class="card-img">
                                          <img src="{{ asset('images/base-insert-set-white-plastic.png') }}" class="card-img-top" alt="">
                            </div>
                            <div class="card-content">
                             <h6 class="card-title">Base insert set white plastic</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                                         <a href="https://bkonline.uk/shop/by-product/base-inserts,-for-pull-out-storage--unit/14746" class="text-dark text-decoration-none">
                        <div class="card">
                            <div class="card-img">
                                     <img src="{{ asset('images/base-inserts-for-pull-out-storage.png') }}" class="card-img-top" alt="">

                            </div>
                            <div class="card-content">
                            <h6 class="card-title">Base inserts for pull out storage</h6>
                            </div>
                        </div>
                        </a>
                    </div>

                </div>
                
                <!-- Add Navigation Buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        
         <div class="row mt-5 justify-content-center">
                <div class="col-lg-4 col-8">
                    <a href="{{ route('ordercomponentbyname', ['slug' => 'internals']) }}" class="btn btn-warning px-3 text-uppercase rounded-0"> Explore Unique Storage Solutions</a>
                </div>
            </div>


     
      </div>
      



      <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class=" text-center text-black mb-2"> MAX STORAGE KITCHENS</h1>
                <div id="lines" class="mb-5">
                    <div id="line1"></div>
                    <div id="line2"></div>
                    <div id="line3"></div>
                
            </div>
            <!-- <h3 style="font-style:28px;font-weight:600" class="text-black text-center mb-2"></h3> -->
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-2 mb-md-0 ">
                <img class="img-fluid w-100" src="{{ asset('images/max-gallery-1.png') }}"/>
            </div>
            
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-6 mb-2 mb-md-0">
                <img  class="img-fluid w-100" src="{{ asset('images/max-gallery-2.png') }}"/>
            </div>
            <div class="col-12 col-md-6 mb-2 mb-md-0">
                <img  class="img-fluid w-100" src="{{ asset('images/max-gallery-3.png') }}"/>
            </div>
          
        </div>
        <div class="row mt-2">
            <div class="col-12 mb-2 mb-md-0">
                <img class="img-fluid w-100" src="{{ asset('images/max-gallery-4.png') }}"/>
            </div>
            
        </div>
    </div>







      @include('frontend.why_choose_bkonline')






      
     <div class="container-fluid faq-body">
        <div class="container faq-container">
            <div class="faq-header">
                <h1>FAQS</h1>
            </div>
        
            <div class="faq-list">
                
                     <!-- FAQ Item 1 -->
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                What is meant by ‘Max storage kitchen’?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>It is a fully customised kitchen that utilises every inch of your space. We use custom-sized units that suit your storage needs and kitchen layout.</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                
                                How is it different from a regular modular kitchen?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>
                        Our Bespoke kitchens are made-to-measure; we optimise the horizontal and vertical spaces with specifically designed units for your kitchen’s dimensions, whereas regular modular kitchens use standard-sized kitchen units. 
                       </p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                
                                Will my cluttered countertop be managed with the design?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Yes, one of the design’s main goals is to reduce clutter and free up your worktop by creating designated storage spaces for all the items.

                       </p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                Can we add storage in unused spaces?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Absolutely! The main goal is to utilise the unused spaces in your kitchen to maximise storage through customised units</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                Do I get to choose the colour and style of the kitchen?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Yes, the layout, color, and design of all the cabinets will be according to your style, reflecting your taste and the overall outlook of your house.</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                How are tall units helpful in maximising storage?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Vertical spaces are often wasted in the kitchen. Our tall units utilise those spaces for maximum storage, keeping your base cabinets free for your everyday cooking essentials.</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                Will the kitchen be customised to suit my cooking habits and appliance needs?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Definitely! We design the custom layout around the usage of your kitchen essentials.</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                Can you add storage into tricky spaces like the corners or space above the fridge?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>
                        Yes, we have specialised corner units and bridging units to convert unused spaces into valuable storage solutions.
                        </p>
                        </div>
                    </div>
                    
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                What if my appliances don’t fit anymore?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>
                        Our priority is to ensure that your appliances have their proper spots to prevent crowding on countertops.
                        </p>
                        </div>
                    </div>
                    
        
                
        
            </div>
        </div>
        </div>
     





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


  <div class="modal fade" id="newsletterModalMax" tabindex="-1" aria-labelledby="newsletterModalMaxLabel" aria-hidden="true">
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
                        <button class="subscribe-btn" id="subscribeBtnMax" onclick="newsletterModalMaxFn()">Subscribe</button>
                    </div>
                    <p class="privacy-text">We respect your Privacy. Unsubscribe at any time.</p>
                </div>
                
            </div>
        </div>
    </div>
</div>

  <!-- Thank You Modal -->
<div class="modal fade" id="thankyouModalMax" tabindex="-1" aria-labelledby="thankyouModalMaxLabel" aria-hidden="true">
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


    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Owl Carousel JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>



    document.addEventListener('DOMContentLoaded', function() {
        const internalCardSwiper = new Swiper('.internalCardSwiper', {
            // Essential Parameters
            // effect: 'slide',
            slidesPerView: 'auto',
            centeredSlides: true,
            spaceBetween: 30,
            grabCursor: true,
            loop: true,
            
            // Responsive Breakpoints
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            },
            
            // Pagination
            // pagination: {
            //     el: '.swiper-pagination',
            //     clickable: true,
            // },
            
            // Navigation Arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            
            // Autoplay
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            
            // Animation Speed
            speed: 600,
            
            // Add event listeners for animation effects
            on: {
                slideChange: function () {
                    // Add any custom slide change animations here if needed
                }
            }
        });
    });





function newsletterModalMaxFn(){
    
     document.getElementById('subscribeBtnMax').addEventListener('click',function(){
                    console.log("btn clicked")
                    const emailInput = document.getElementById('emailInput');
                    const email = emailInput.value.trim();
                    console.log(email);
                    
                    // Basic email validation
                    if (email && email.includes('@') && email.includes('.')) {
                        // Hide newsletter modal
                        var newsletterModalMax = bootstrap.Modal.getInstance(document.getElementById('newsletterModalMax'));
                        newsletterModalMax.hide();
                        
                        // Show discount modal after a short delay
                        setTimeout(function() {
                            var thankyouModalMax = new bootstrap.Modal(document.getElementById('thankyouModalMax'));
                            // discountModal.show();
                            sendEmail();
                            thankyouModalMax.show();
                            
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


const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    
                    this.classList.toggle('active');
                    
                    const answer = this.nextElementSibling;
                    answer.classList.toggle('show');
                    
                    faqQuestions.forEach(q => {
                        if (q !== question) {
                            q.classList.remove('active');
                            q.nextElementSibling.classList.remove('show');
                        }
                    });
                });
            });

            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            faqItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = `all 0.5s ease ${index * 0.1}s`;
                observer.observe(item);
            });


            



function sendEmail() {
            var email = $('#emailInput').val();
            var button = $(this);
            var btnText = button.find('.btn-text');
            var btnLoading = button.find('.btn-loading');
    
            // Show loading
            btnText.hide();
            btnLoading.show();
    
            $.ajax({
                url: "{{ route('contact_us_inquiry') }}", // Change to your actual route
                method: 'POST',
                data: {
                    email: email,
                    catalogue_register_now: 'catalogue_register_now',
                    first_order_discount: 'first_order_discount',
                    message: 'Congratulations! You have won a free onsite survey <br> Your code is <b>May15</b>',
                    _token: '{{ csrf_token() }}' // if you're using Laravel
                },
                success: function (response) {
                    // discountModal.show();
                }
            });
        }
 // Handle subscribe button click

    
function newsletterMaxfn(){
            document.getElementById('subscribeBtnMax').addEventListener('click',function(){

                const emailInput = document.getElementById('emailInput');
                const email = emailInput.value.trim();
                
                    // Basic email validation
                    if (email && email.includes('@') && email.includes('.')) {
                        // Hide newsletter modal
                        var newsletterModalMax = bootstrap.Modal.getInstance(document.getElementById('newsletterModalMax'));
                        newsletterModalMax.hide();
                        
                        // Show discount modal after a short delay
                        setTimeout(function() {
                            var thankyouModalMax = new bootstrap.Modal(document.getElementById('thankyouModalMax'));
                            // discountModal.show();
                            sendEmail();
                            thankyouModalMax.show();
                            
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
                        nav: true,
                        dots:false
                    },
                    768: {
                        items: 2,
                        nav: true,
                        dots:false
                    },
                    992: {
                        items: 3,
                        loop: true,
                        margin: 10,
                        nav: true,
                        dots: false,
                        center: true,
                    },
                    1200: {
                        items: 4,
                        loop: true,
                        margin: 50,
                        nav: true,
                        dots: false,
                        center: true,
                    },
                    1400: {
                        items: 5,
                        loop: true,
                        margin: 50,
                        nav: true,
                        dots: false,
                        center: true,
                    }
                }
    });
  });
</script>
</x-guest-layout>
