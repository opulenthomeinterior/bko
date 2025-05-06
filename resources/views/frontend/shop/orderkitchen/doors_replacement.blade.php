<x-guest-layout>
    <head>
        @section('meta_tags')
        <title>Kitchen Door Replacement | Kitchen Cupboards & Cabinet Doors </title>
        <meta name="description" content="Buy Kitchen Online is here with Affordable & Custom kitchen units in London, in J Pull, Shaker, Slab, MFC & True Handleless styles. Book Consultation Now.">
        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "Kitchens Door Replacement",
            "url": "https://bkonline.uk/shop/doors-replacement",
            "logo": "https://bkonline.uk/public/images/bko-black-logo.png",
            "description": "Buy Kitchen Online is here to upgrade your space with kitchen cupboard doors & cabinet doors replacement by changing your kitchen unit doors in London (North London, North East London, Central London & East London).",
            "image": "https://bkonline.uk/public/images/21offdesktop.png",
            "brand": {
                "@type": "Brand",
                "name": "Buy Kitchen Online"
            },
            "offers": {
                "@type": "Offer",
                "url": "https://bkonline.uk/shop/doors-replacement",
                "priceCurrency": "GBP",
                "price": "0.00",
                "priceValidUntil": "2025-12-31",
                "itemCondition": "https://schema.org/NewCondition",
                "availability": "https://schema.org/InStock"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "26"
            },
            "review": {
                "@type": "Review",
                "author": {
                "@type": "Person",
                "name": "Samantha Greer"
                },
                "datePublished": "2025-03-15",
                "reviewBody": "We replaced all our kitchen cabinet doors through Buy Kitchen Online. The result looks like a brand new kitchen—very happy with the service and quality!",
                "reviewRating": {
                "@type": "Rating",
                "ratingValue": "5",
                "bestRating": "5"
                }
            },
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://bkonline.uk/shop/doors-replacement"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Buy Kitchen Online",
                "logo": "https://bkonline.uk/public/images/bko-black-logo.png",
                "url": "https://bkonline.uk/"
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
        <link rel="canonical" href="https://bkonline.uk/shop/doors-replacement" />
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">

        <style>

            
        .hero {
            /* background: url('https://bkonline.uk/public/imgs/products/464785299_8512016742222733_5169156552107455268_n1739534754_67af31a285b0e.jpg') center/cover no-repeat; */
            
            background: url('{{ asset('images/door-hero-image.png') }}') center/cover no-repeat;
           
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
            .product-card
            {
                background-color:white;
                border-radius: 12px;
                box-shadow: 0 4px 16px rgba(0,0,0,0.08);
                overflow:hidden;
                /* width:390px; */
                width:100%;
                padding: 32px;
                min-height:600px;
            }
            /* @media (max-width:576px)
            {
                .product-card
                {
                    width:360px;
                }
            } */
            .product-image-container
            {
                width:100%;
                height:300px;
                /* min-height:250px; */
                /* max-height:200px; */
                /* height:auto; */
                /* object-fit:fill;
                object-position:center; */
                border-radius:8px;
                margin-bottom: 24px;
                
            }
            .product-image-container img
            {
                width:100%;
                height:100%;
                object-fit:contain;
                /* box-shadow: 0 2px 8px rgba(0,0,0,0.05); */
            }

            .product-title
            {
                font-size:28px;
                font-weight:700;
                color:#1a202c;
                margin-bottom:20px;
                text-align: center;
            }
            
            .color-grid {
                display: flex;
                gap:12px;
                flex-wrap: wrap;
                justify-content: center;
            }
            .color-option
            {
                width:36px;
                height:36px;
                border-radius:50%;
                cursor:pointer;
                position:relative;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                transition: all 0.2s ease;
            }
            .color-option:hover
            {
                transform:scale(1.1);
            }
            .color-options
            {
                margin-bottom:16px;
            }
            .option-title
            {
                font-size:16px;
                font-weight:600px;
                margin-bottom:12px;
                color:#2d3748;
                text-align:center;
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
            min-height:320px;
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
        .order-sample
        {
            left:20px;
            padding:40px 110px   40px 30px;
        }
        @media (max-width:576px)
        {
            .order-sample
            {
                position: relative;
                left:0px;
                padding:40px 30px;
                margin-bottom: 10px;
                
            }
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



        .section-title {
            text-align: center;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }
        
        .highlight {
            color: #F8B93B;
            font-weight: 700;
        }
        
        .title-underline {
            height: 4px;
            width: 70%;
            margin: 0 auto;
            margin-top: 0.5rem;
            background: linear-gradient(to right, #2B5A5E 33%, #F8B93B 33%, #F8B93B 66%, #2B5A5E 66%);
        }
        
        .how-it-works {
            text-align: center;
            margin-top:1rem;
            margin-bottom: 3rem;
            font-weight: 600;
        }
        
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
        
        .benefit-text {
            text-align: center;
            color: #2B5A5E;
            font-weight: 500;
            margin: 2rem 0;
        }
        
        .btn-consultation {
            background-color: #F8B93B;
            color: #333;
            text-transform: uppercase;
            font-weight: 600;
            border: none;
        }
        
        .btn-consultation:hover {
            background-color: #e9a82b;
            color: #333;
        }


        .modal-dialog {
            max-width: 900px;
            margin: 1.75rem auto;
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
                min-height: 200px;
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
    
    .modal-dialog {
      max-width: 800px;
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

        .yt-video iframe
        {
            
            width: 100%; 
            height: 100%; 
            object-fit:cover;
        }

        @media (max-width: 576px)
        {
            .yt-video iframe
            {
                margin-top:10px;
                height:400px;
            }
        }

        </style>
    </head>
<body>

    
    <header class="hero d-flex justify-content-center">
        
        <div class="hero-content">
            <h5 class="text-center text-white " style="font-size:14px; letter-spacing:5px;font-weight:bold">BUY KITCHEN  ONLINE</h5>
            <h1 class="text-white fw-bold mb-5">DOOR REPLACEMENT <span style="color:#ffe000"> SERVICE</span></h1>
            <h2 class="text-white mb-4 yell">2-3 Months of full kitchen remodel nightmare or <br> <span style="font-size:32px;color:#ffe000;font-weight:700">
                New CABINET Doors IN JUST 2-3 Days?</span></h2>
            
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-6">
                        <!-- <img src="{{ asset('images/door-badges.png') }}" class="img-fluid w-100 "/> -->
                        <div class="row justify-content-center column-badges" >
                            <img class="w-25" src="{{ asset('images/premium-badge.png') }}" alt="">
                            <!-- <a href="https://www.trustpilot.com/review/opulenthomeinteriors.com">
                             </a>    -->
                             <!-- <a class="btn" href="https://www.trustpilot.com/review/opulenthomeinteriors.com"> -->
                                <img style="cursor: pointer;" class="w-25" src="{{ asset('images/trust-pilot-badge.png') }}" 
                                onclick="window.location.href ='https://www.trustpilot.com/review/opulenthomeinteriors.com'">
                            

                             
                                <img style="cursor: pointer;" class="w-25" src="{{ asset('images/google-reviews-badge.png') }}" alt="" onclick="window.location.href ='https://www.google.com/maps/place/Buy+Kitchen+Online/@51.5192167,-0.0093268,17z/data=!4m8!3m7!1s0x48761d591fe166d7:0x456fed0ffc8a8222!8m2!3d51.5192167!4d-0.0093268!9m1!1b1!16s%2Fg%2F11vbf0zdzm?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D'">
                           
                        </div>
                    </div>

                    <!-- <div class="col-2">
                        <img src="{{ asset('images/premium-doors-badge.png') }}" class="img-fluid w-100 "/>
                    </div>
                   
                    <div class="col-2">
                        <img src="{{ asset('images/trust-pilot-badge.png') }}" class="img-fluid w-100"/>
                    </div>
                   
                    <div class="col-2">
                        <img src="{{ asset('images/google-reviews-badge.png') }}" class="img-fluid w-100"/>
                    </div> -->
                   
                </div>
            </div>
            
            
        </div>
    </header>

    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="btn p-0 w-100" data-bs-toggle="modal" data-bs-target="#newsletterModal">
                <img class="w-100 img-fluid d-none d-md-block" src="{{ asset('images/21offdesktop.png') }}"/>
                
                <img class="w-100 img-fluid d-md-none mt-2" src="{{ asset('images/21offmobile.png') }}"/>
            </a>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12">
                <img class="img-fluid w-100 d-none d-md-block rounded shadow-lg" src="{{ asset('images/tired-of.png') }}" alt="">
                <img class="img-fluid w-100 d-md-none rounded shadow-lg" src="{{ asset('images/tired-of-mobile.png') }}" alt="">
                <!-- <h2 style="font-size:40px; font-weight:700" class="text-black text-center text-uppercase">Your kitchen looks <span class="text-danger">outdated</span> </h2>
                <h3 style="font-size:40px; font-weight:700" class="text-black text-center text-uppercase"> <span class="font-weight:600"> because of those doors,</span>  <span style="font-weight:500">not the cabinets </span> </h3>
             -->
            </div>
            <div class="col-7"></div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="img-fluid d-none d-sm-block" src="{{ asset('images/dream-to-reality.png') }}"/>
                <img class="img-fluid d-sm-none" src="{{ asset('images/dream-to-reality-mobile.png') }}"/>
            </div>
            
            
            <div class="col-12 col-md-6 rounded yt-video">
                <!-- <img class="img-fluid" src="{{ asset('images/google-reviews.png') }}"/> -->
                <!-- <video src="Downloads/door-replacement-video.mp4"></video> -->
                {{-- <video  controls class="w-100 h-100" autoplay>
                    <source src="{{ asset('videos/door-replacement-video.mp4') }}" type="video/mp4">
                    </video> --}}

                    <iframe src="https://www.youtube.com/embed/P0th7FUu-zU" 
          
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </iframe>

            </div>
            
        </div>
    </div>

    <section class="container-fluid my-5 bg-light py-4">
        <div class="container">
        <div class="row">
            {{-- <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-3"></div> --}}
            <div class=" col-xl-8 col-12 align-self-center px-5 d-flex flex-column flex-md-row p-0">
                <div class="row">
                    
                    <div class="align-self-center rounded shadow-lg order-sample position-relative col-12 col-xl-8 bg-white rounded-lg border-0 shadow-sm" style="">
                        <h4 style="font-size:30px; font-weight:600;"><span class="text-danger">Try</span> <span class="text-black">Before You Buy<span>
                           <br> <span class="text-danger"> FREE</span> Door Samples!</h4>
                           <h4 class="text-primary my-4" style="font-size:24px;">£6 Delivery Charge Only.</h4>
                        {{-- <h4 class="fw-bold text-black">Does the thought of updating your kitchen feel overwhelming and expensive?</h4>
                        <h2 class="fw-bolder"><span class="orange">Order a Sample</span> <span class=""text-black fw-bolder"> of Your Favorite Door</span></h2>
                        <p class="">Choosing the right kitchen doors is an important decision. Our sample service allows you to experience the finish, material, and color of our doors in your own home before committing to a full order. </p>
                        --}}
                        <a href="{{ route('ordercomponentbyname', 'doors') }}" class="btn bg-orange px-1 fw-bold text-uppercase rounded-0 " style="font-size:14px;">  Order a Sample of your choice NOW!</a>
                    </div>
                    <div class="p-0 mb-3 mb-xl-0 col-12 col-xl-4">
                     <img class="w-100 object-fit-cover rounded border border-warning" src="https://bkonline.uk/public/imgs/products/Cartmel-Cashmere-Flat-Door-A1720452961_668c0761d6f16.jpg"  class="img-fluid"  alt="Modern Kitchen" 
                        style="width: 300px; height: 400px; object-fit: cover;">
                    
                    <!-- <img class="w-100 object-fit-cover rounded border border-warning" src="{{ asset('images/door-cabinets.png') }}"  class="img-fluid"  alt="Modern Kitchen" 
                        style="width: 300px; height: 400px; object-fit: cover;"> -->
                   
                    </div>
                </div>

            </div>
            <div class="col-xl-4 p-0 col-12">
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
        {{-- <div class="row flex-column my-5 align-items-center justify-content-center">
            <div class="col-sm-5">
            <h4 class="text-center mt-5">Benefit from our limited time offer and get a FREE QUOTE for Kitchen Door Replacement</h4>
            </div>
            <div class="col-12 col-sm-3">
                <button class="w-100 btn bg-orange px-4 text-uppercase rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">book your FREE CONSULTATION NOW!</button>
            </div>
        </div> --}}
    </div>
    </section>

    

        {{-- <div class="row mt-3">
            <div class="col-12">
            <h2 class="text-primary text-center" style="font-size:16px">Benefit from our limited time offer and get a Free Quote for Door Replacement</h2>
            </div>
        </div> --}}
        {{-- <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-12">
                <button class="btn  px-2 px-lg-5 text-uppercase rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:#febd49;">Book your free consultation now!</button>
            </div>
        </div> --}}
    </div>

<div class="container-fluid" >
    <div class="container py-5">
        <div class="mb-3 row justify-content-center">
            <h4 class="text-black  mb-4 text-center mb-2" style="font-size:26px; font-weight:500">Those <span class="text-danger">Awful OLD LOOKING KITCHEN CABINET DOORS </span> Are <br>Driving You Nuts, Aren’t they?</h4>
            <h1 class="mb-1 text-center text-black"> Discover the Perfect Doors for Your Kitchen</h1>
            <p class="text-center fs-6 w-75">Browse our extensive collection of kitchen door styles, available in a wide array of colors and finishes. Find the ideal match for your existing cabinets and buy kitchen doors to create the kitchen of your dreams</p>

        </div>
        <div class="row justify-content-center">
            @foreach ($styles as $style)
            <div class="col-12 col-lg-4 my-3">
                {{-- <div class="card" style="min-height: 515px !important"> --}}
                <div class="product-card">
                    @if ($style->id == 1)
                    {{-- <div class="d-flex justify-content-center" style="margin-top: 10px; min-height: 250px !important;"><img src="https://bkonline.uk/public/imgs/products/J-pull-Dove-Grey1744357344_67f8c7e02f610.png" class="card-img-top" style="max-height: 200px; width: 120px" id="main-image" alt="Kitchen Cabinet"></div> --}}

                   <div class="product-image-container">
                    <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/J-pull-Dove-Grey1744357344_67f8c7e02f610.png" class="product-image" id="main-image" alt="Kitchen Cabinet"></a>
                   </div>
                    @elseif($style->id == 2)
                    <div class="product-image-container">
                    <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Belsay-Cashmere1744359926_67f8d1f695086.jpg" class="product-image"  id="main-image" alt="Kitchen Cabinet"></a>
                    </div>
                    @elseif($style->id == 3)
                    {{-- <div class="d-flex justify-content-center" style="margin-top: 10px; min-height: 250px !important;"><img src="https://bkonline.uk/public/imgs/products/Vivo-Gloss-Dust-Grey-Door-Flat_CMYK_PRINT1720430622_668bb01e6686d.jpg" class="card-img-top" style="max-height: 200px; width: 120px" id="main-image" alt="Kitchen Cabinet"></div> --}}
                   <div class="product-image-container">
                   <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Vivo-Gloss-Dust-Grey-Door-Flat_CMYK_PRINT1720430622_668bb01e6686d.jpg" class="product-image"  id="main-image" alt="Kitchen Cabinet"></a>
                   </div>
                    @elseif($style->id == 4)
                    
                    {{-- <div class="d-flex justify-content-center" style="margin-top: 10px; min-height: 250px !important;"><img src="https://bkonline.uk/public/imgs/products/vivo_vero_matt_anthracite1744270130_67f773321d81e.png" class="card-img-top" style="max-height: 200px; width: 120px" id="main-image" alt="Kitchen Cabinet"></div> --}}
                    <div class="product-image-container">
                    <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/vivo_vero_matt_anthracite1744270130_67f773321d81e.png" class="" id="main-image" alt="Kitchen Cabinet"></a>
                    </div>
                    @elseif($style->id == 5)
                    {{-- <div class="d-flex justify-content-center" style="margin-top: 10px; min-height: 250px !important;"><img src="https://bkonline.uk/public/imgs/products/Lucente-Gloss-Dust-Grey-Door-Perspective_CMYK_PRINT1720441467_668bda7b578b1.jpg" class="card-img-top" style="max-height: 200px; width: 120px" id="main-image" alt="Kitchen Cabinet"></div> --}}
                    <div class="product-image-container">
                    <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Lucente-Gloss-Dust-Grey-Door-Perspective_CMYK_PRINT1720441467_668bda7b578b1.jpg" class=""  id="main-image" alt="Kitchen Cabinet"></a>
                    </div>
                    @elseif($style->id == 6)
                    {{-- <div class="d-flex justify-content-center" style="margin-top: 10px; min-height: 250px !important;"><img src="https://bkonline.uk/public/imgs/products/Cartmel-Anthracite-Flat-Door-Cutout_RGB_Web1720451119_668c002f56976.jpg" class="card-img-top" style="max-height: 200px; width: 120px" id="main-image" alt="Kitchen Cabinet"></div> --}}
                    <div class="product-image-container">
                    <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Cartmel-Anthracite-Flat-Door-Cutout_RGB_Web1720451119_668c002f56976.jpg" class=""  id="main-image" alt="Kitchen Cabinet"></a>
                    </div>
                    @elseif($style->id == 7)
                    {{-- <div class="d-flex justify-content-center" style="margin-top: 10px; min-height: 250px !important;"><img src="https://bkonline.uk/public/imgs/products/Vivo-Matt_Cashmere_Door-Flat_With-Handle1720432485_668bb765d85c3.jpg" class="card-img-top" style="max-height: 200px; width: 120px" id="main-image" alt="Kitchen Cabinet"></div> --}}
                    <div class="product-image-container">
                    <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Vivo-Matt_Cashmere_Door-Flat_With-Handle1720432485_668bb765d85c3.jpg" class=""  id="main-image" alt="Kitchen Cabinet"></a>
                    </div>
                    @elseif($style->id == 8)
                    <div class="product-image-container">
                    <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/vivo_vero_matt_light_grey1744270102_67f77316cd6eb.png" class=""  id="main-image" alt="Kitchen Cabinet"></a>
                    </div>
                    @elseif($style->id == 10)
                    {{-- <div class="d-flex justify-content-center" style="margin-top: 10px; min-height: 250px !important;"><img src="https://bkonline.uk/public/imgs/products/Matt-Light-Grey-Door-with-Handle1730581810_67269532decf5.jpg" class="card-img-top" style="max-height: 200px; width: 120px" id="main-image" alt="Kitchen Cabinet"></div> --}}
                    <!-- <div class="product-image-container">
                    <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Matt-Light-Grey-Door-with-Handle1730581810_67269532decf5.jpg" class=""  id="main-image" alt="Kitchen Cabinet"></a>
                    </div> -->
                    @endif
                    {{-- <div class="card-body text-center"> --}}
                        {{-- <div class="d-flex justify-content-center align-items-center mb-4"> --}}
                            <h1 class="product-title">{{$style->name}}</h1>
                        {{-- </div> --}}
                        {{-- <div class="d-flex justify-content-center align-items-center mb-4">
                            <h5 class="mb-0 text-decoration-underline">Available Colors:</h5>
                        </div> --}}
                        <div class="color-options">
                            <div class="option-title">Available Colors</div>
                        <div class="color-grid">
                            @foreach ($style['colours'] as $styleColour)
                            @php ($colour = \App\Models\Colour::where('id', $styleColour)->first()) @endphp
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}&colour_id={{$styleColour}}" title="{{ $colour->trade_colour }}">
                                {{-- <div class="color-thumbnail active" style="background-color: {{$colour->colour_code}};" data-color="white" title="{{ $colour->trade_colour }}"></div> --}}
                                <div class="color-option active" style="background-color: {{$colour->colour_code}};" data-color="white" title="{{ $colour->trade_colour }}"></div>
                            
                            </a>
                            @endforeach
                            <!-- <div class="color-thumbnail" style="background-color: #E8E4DC;" data-color="light-gray"></div>
                            <div class="color-thumbnail" style="background-color: #E9E2D5;" data-color="cream"></div>
                            <div class="color-thumbnail" style="background-color: #4A4A4A;" data-color="dark-gray"></div>
                            <div class="color-thumbnail" style="background-color: #F5EFE2;" data-color="off-white"></div>
                            <div class="color-thumbnail" style="background-color: #F0E9D6;" data-color="beige"></div> -->
                        </div>
                    {{-- </div> --}}
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>

<div class="container mb-md-5 mb-3">
    <div class="col-12">
        <img class="img-fluid w-100 rounded shadow-lg d-none d-md-block" src="{{ asset('images/why-diy.png') }}" alt="">
        <img class="img-fluid w-100 rounded shadow-lg d-md-none" src="{{ asset('images/why-diy-mobile.png') }}" alt="">
    </div>
</div>

<div class="container-fluid py-3" style="background-color:#f2f4f5">
    <div class="container py-5">
        <h2 class="section-title text-black">OUR <span class="highlight">SIMPLE 3-STEP</span> DOOR REPLACEMENT PROCESS</h2>
        <div class="title-underline"></div>
        
        <h3 class="how-it-works text-black my-5">HOW IT WORKS</h3>
        
        <div class="row justify-content-center align-items-center">
            <!-- Step 1 -->
            <div class="col-md-4 col-lg-3 text-center mb-4 mb-lg-0">
                <div class="step-icon">
                    <i class="text-warning fs-1 fa-solid fa-phone"></i>
                </div>
                <div class="step-number">Step 01</div>
                <h4 class="step-title">GET IN TOUCH</h4>
                <p class="step-description px-3">Provide your contact information so we can schedule a convenient time to chat with you.</p>
           
            </div>
            
            <!-- Arrow 1 - Hidden on screens smaller than large -->
            <div class="col-lg-1 d-none d-lg-flex justify-content-center align-items-center">
                <div class="arrow-line w-100"></div>
            </div>
            
            <!-- Step 2 -->
            <div class="col-md-4 col-lg-3 text-center mb-4 mb-lg-0">
                <div class="step-icon">
                    <i class="text-warning fs-1 fa-solid fa-kitchen-set"></i>
                </div>
                <div class="step-number">Step 02</div>
                <h4 class="step-title">WE PLAN YOUR PROJECT</h4>
                <p class="step-description px-3">Our agent will contact you within 24 hours to discuss your budget, preferred styles, and colors, for your kitchen doors.</p>
            </div>
            
            <!-- Arrow 2 - Hidden on screens smaller than large -->
            <div class="col-lg-1 d-none d-lg-flex justify-content-center align-items-center">
                <div class="arrow-line w-100"></div>
            </div>
            
            <!-- Step 3 -->
            <div class="col-md-4 col-lg-3 text-center">
                <div class="step-icon">
                    <i class="text-warning fs-1 fa-solid fa-wrench"></i>
                </div>
                <div class="step-number">Step 03</div>
                <h4 class="step-title">ENJOY THE UPGRADE</h4>
                <p class="step-description px-3">For your peace of mind, our experienced team will handle the entire installation process for you, if required.</p>
            </div>
        </div>
        
        <p class="benefit-text mb-2 mt-5 fs-4">Benefit from our limited time offer and get a Free Quote for Door Replacement</p>
        
        <div class="text-center">
            <a href="#" class="btn btn-consultation py-3 px-4 w-100" style="max-width: 500px;" data-bs-toggle="modal" data-bs-target="#exampleModal">BOOK YOUR FREE CONSULTATION NOW!</a>
        </div>
    </div>
    </div>

    <div class="container my-5">
        <div class="col-12">
            <img class="img-fluid w-100 d-none d-md-block rounded shadow-lg" src="{{ asset('images/we-dont.png') }}" alt="">
            <img class="img-fluid w-100 d-md-none rounded shadow-lg" src="{{ asset('images/we-dont-mobile.png') }}" alt="">
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-1 text-center text-black mb-5"> DOOR REPLACEMENT SERVICE</h1>
        <!-- <h3 style="font-style:28px;font-weight:600" class="text-black text-center mb-2"></h3> -->
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-2 mb-md-0 col-md-6">
            <img class="img-fluid w-100" src="{{ asset('images/door-1.png') }}"/>
        </div>
        <div class="col-12 mb-2 mb-md-0 col-md-6">
            <img class="img-fluid w-100" src="{{ asset('images/door-2.png') }}"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 mb-2 mb-md-0">
            <img  class="img-fluid w-100" src="{{ asset('images/door-3.png') }}"/>
        </div>
      
    </div>
    <div class="row mt-2">
        <div class="col-12 mb-2 mb-md-0 col-md-6">
            <img class="img-fluid w-100" src="{{ asset('images/door-4.png') }}"/>
        </div>
        <div class="col-12 mb-2 mb-md-0 col-md-6">
            <img class="img-fluid w-100" src="{{ asset('images/door-5.png') }}"/>
        </div>
    </div>
</div>
{{-- <div class ="container-fluid bg-white">
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
                        <h3>01. <span class="text-primary">Cost-Effective Upgrade</span></h3>
                        <p class="max-description suggestion">Save money compared to a full kitchen remodel.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="consultation-step rounded bg-light">
                        <div class="icon-circle bg-white">
                            <img src="{{ asset('images/clock.png') }}"/>
                        </div>
                        <h3>02. <span class="text-primary">Quick Transformation</span></h3>
                        <p class="max-description suggestion">Achieve a new look in a fraction of the time.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="consultation-step rounded bg-light">
                        <div class="icon-circle bg-white">
                            <img src="{{ asset('images/minimal-disruption.png') }}"/>
                        </div>
                        <h3>03. <span class="text-primary">Minimal Disruption</span></h3>
                        <p class="max-description suggestion">Less mess and inconvenience than a full renovation</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="consultation-step rounded bg-light">
                        <div class="icon-circle bg-white">
                            <i class="bi bi-card-list"></i>
                        </div>
                        <h3>04. <span class="text-primary">Enhance Your Style</span></h3>
                        <p class="max-description suggestion">Update your kitchen to reflect your current taste.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="consultation-step rounded bg-light">
                        <div class="icon-circle bg-white">
                            <img src="{{ asset('images/palette.png') }}"/>
                        </div>
                        <h3>05. <span class="text-primary">Increase Home Value</span></h3>
                        <p class="max-description suggestion">A refreshed kitchen can boost your property's appeal.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="consultation-step rounded bg-light">
                        <div class="icon-circle bg-white">
                            <img src="{{ asset('https://bkonline.uk/public/imgs/products/Leaf1744481544_67faad084b91d.png') }}"/>
                        </div>
                        <h3>06. <span class="text-primary">Eco-Friendly Option</span></h3>
                        <p class="max-description suggestion">Reusing existing cabinets is a more sustainable choice.</p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
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
                            <h3 class="">01. <span class="text-primary">Browse & Enquire</span></h3>
                            <p class="max-description suggestion">Explore our door styles and colors online. Contact us for a free quote (for a limited time) or to discuss your project.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/choose.png') }}"/>
                            </div>
                            <h3>02. <span class="text-primary">Measure & Choose</span></h3>
                            <p class="max-description suggestion">We'll guide you through measuring your existing doors or offer an optional on-site survey (limited time offer) for precise measurements. Select your desired style and color.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="consultation-step rounded bg-light">
                            <div class="icon-circle bg-white">
                                <img src="{{ asset('images/kitchen-room.png') }}"/>
                            </div>
                            <h3>03. <span class="text-primary">Expert Installation</span></h3>
                            <p class="max-description suggestion"> Our professional team will carefully install your new doors, ensuring a perfect fit and finish. </p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </section>
    </div> --}}

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
                                <!-- <img src="{{ asset('images/high-quality-materials.png') }}"/> -->
                                <i class="fa-solid fa-medal"></i>
                            </div>
                            <h4 class="fw-bold text-primary fs-5">High-Quality Materials</h4>
                            <p>We use durable and stylish materials for long-lasting beauty.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="consultation-step rounded bg-light px-5">
                            <div class="icon-circle bg-white">
                                <!-- <img src="{{ asset('images/wide-range-of-styles.png') }}"/> -->
                                <i class="fa-solid fa-palette"></i>
                            </div>
                            <h4 class="fw-bold text-primary fs-5">Wide Range of Styles & Colors</h4>
                            <p>Find the perfect match for your taste</p>
                        </div>
                    </div> <div class="col-md-3">
                        <div class="consultation-step rounded bg-light px-5">
                            <div class="icon-circle bg-white">
                                <!-- <img src="{{ asset('images/experienced-installation.png') }}"/> -->
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                            <h4 class="fw-bold text-primary fs-5">Experienced Installation Team</h4>
                            <p>Professional and reliable fitting services.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="consultation-step rounded bg-light px-5">
                            <div class="icon-circle">
                               <!-- <img src="{{ asset('images/excellence-customer-support.png') }}"/> -->
                               <i class="fa-solid fa-headset"></i>
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



     <div class="container-fluid faq-body">
        <div class="container faq-container">
            <div class="faq-header">
                <h1>FAQS</h1>
            </div>
        
            <div class="faq-list">
                {{-- @if (!empty($home)) --}}
                     <!-- FAQ Item 1 -->
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                
                                Is it cheaper to replace the cabinets or just the doors?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Yes, the door replacement is cheaper as your carcasses (cabinets) and units remain the same. Replacing only the doors lowers both cost and labour.</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                
                                How do I measure the new kitchen doors?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Don’t worry about the measurements. Our experienced team will handle them for you, minimizing your hassle and ensuring a stress-free process.</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                
                                How long does the process of door replacement take?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Usually, it takes 2-3 days for installation after the cupboard doors are manufactured and ready.</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                Is door replacement more cost-efficient than a complete kitchen remodel?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Yes, a full kitchen remodel cost includes charges for everything, whereas kitchen cupboard door replacement will only include the cost of doors.</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                Can the handles and hinges be replaced?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Absolutely, we can change the knobs, handles and hinges if you’d like to update them along with the kitchen doors.</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                Will the new doors work with my current appliance setup?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Yes, the new doors will work perfectly with your current appliance setup. Replacing cupboard doors doesn’t affect plumbing, gas, electrical, or appliance layout, so you can be confident in their compatibility.</p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                What if I want to change my kitchen's style (e.g., from modern to traditional)?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>Yes, you can select your preferred style and colour from our wide range of options on the website. </p>
                        </div>
                    </div>
                     <div class="faq-item" data-category="general">
                        <div class="faq-question">
                            <div>
                                Can you guide me if I am confused about my style preference?
                            </div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                       <p>
                        Yes, it is okay to feel confused and overwhelmed. We offer basic style guidance to help simplify your decision.
                        </p>
                        </div>
                    </div>
                    
        
                
        
            </div>
        </div>
        </div>
     





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




  <div class="modal fade" id="newsletterModal" tabindex="-1" aria-labelledby="newsletterModalLabel" aria-hidden="true">
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
                    <h2 class="content-title">Sign Up To <span class="discount-text">Get 21% Discount</span> On Your First Order</h2>
                    <p class="offer-text">Take Advantage of our Limited Time Offer and Get <span class="free-text">FREE</span> Consultation & On-Site Survey.</p>
                    <p class="terms-text">Terms & Conditions Applied.</p>
                    <div class="subscribe-container">
                        <input type="email" id="emailInput" class="form-control news-letter-input" placeholder="Enter Your Email">
                        <button class="subscribe-btn" id="subscribeBtn">Subscribe</button>
                    </div>
                    <p class="privacy-text">We respect your Privacy. Unsubscribe at any time.</p>
                </div>
                
            </div>
        </div>
    </div>
</div>

  <!-- Thank You Modal -->
<div class="modal fade" id="thankyouModal" tabindex="-1" aria-labelledby="thankyouModalLabel" aria-hidden="true">
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



</body>
    
@push('scripts')
    <script>

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
                    message: 'You have successfully subscribed for 15% discount',
                    _token: '{{ csrf_token() }}' // if you're using Laravel
                },
                success: function (response) {
                    // discountModal.show();
                }
            });
        }
 // Handle subscribe button click

    

            document.getElementById('subscribeBtn').addEventListener('click',function(){

                const emailInput = document.getElementById('emailInput');
                const email = emailInput.value.trim();
                
                    // Basic email validation
                    if (email && email.includes('@') && email.includes('.')) {
                        // Hide newsletter modal
                        var newsletterModal = bootstrap.Modal.getInstance(document.getElementById('newsletterModal'));
                        newsletterModal.hide();
                        
                        // Show discount modal after a short delay
                        setTimeout(function() {
                            var thankyouModal = new bootstrap.Modal(document.getElementById('thankyouModal'));
                            // discountModal.show();
                            sendEmail();
                            thankyouModal.show();
                            
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