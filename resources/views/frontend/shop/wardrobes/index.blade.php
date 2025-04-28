<x-guest-layout>
    <title>
        Made to Measure Wardrobes in London | Buy Kitchen Online
    </title>
    <meta name="description" content="Buy Kitchen Online offers Premium made-to-measure wardrobes & bespoke fitted bedroom wardrobes in London. Shop Now for Tailored Storage Solutions. ">
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Kitchen Wardrobes",
    "url": "https://bkonline.uk/wardrobes",
    "logo": "https://bkonline.uk/public/images/bko-black-logo.png",
    "description": "Buy Kitchen Online offers bespoke, high-quality wardrobes in London (North London, North East London, Central London & East London). Custom designs, smart storage solutions & expert fitting. Free quote & fast installation.",
    "image": "https://bkonline.uk/public/imgs/products/Wardrobe-11745065753_68039719b478f.jpg",
    "brand": {
        "@type": "Brand",
        "name": "Buy Kitchen Online"
    },
    "offers": {
        "@type": "Offer",
        "url": "https://bkonline.uk/wardrobes",
        "priceCurrency": "GBP",
        "price": "0.00",
        "priceValidUntil": "2025-12-31",
        "itemCondition": "https://schema.org/NewCondition",
        "availability": "https://schema.org/InStock"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "30"
    },
    "review": {
        "@type": "Review",
        "reviewRating": {
        "@type": "Rating",
        "ratingValue": "5",
        "bestRating": "5"
        },
        "author": {
        "@type": "Person",
        "name": "Verified Customer"
        },
        "reviewBody": "The wardrobe design exceeded my expectations! It's functional, stylish, and fit perfectly in my space. The installation was quick and professional. Highly recommended!"
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://bkonline.uk/wardrobes"
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
    <link rel="canonical" href="https://bkonline.uk/wardrobes" />
    
    <style>
        .product-card {
            border: 1px solid transparent;
            transition: border-color 0.3s ease;
        }

        .product-card:hover {
            border-color: #ebc266;
            /* Outline warning color on hover */
        }

        .product-short-title-container {
            margin-bottom: 10px;
            /* Space between the title and other content */
        }

        .product-short-title {
            display: inline-block;
            padding: 5px 10px;
            color: #000;
            /* Default text color */
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .product-card:hover,
        .card-header {
            background-color: #ebc266;
            /* Warning color background on hover */
            color: #000;
            /* Text color on hover */
        }

        .product-image:hover {
            transform: scale(1.1);
            transition: 0.5s ease;
        }
    </style>
    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}" class="text-uppercase">Shop</a></li>
                <li class="breadcrumb-item">
                    <a href="{{ route('orderkitchen') }}" class="text-uppercase">
                        Order Kitchen
                    </a>
                </li>
            </ol>
        </nav>

        <div class="row mb-lg-5 mb-4">
            <div class="col-12">
                <h1 class="fs-1 fw-bolder text-dark text-uppercase">Wardrobes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 bg-light">
                <div class="row text-sm-center" id="products_container">
                    @if ($products->count() > 0)
                    @foreach ($products as $index => $product)
                    <div class="col-lg-3 col-6 mb-3">
                        <div class="card btn btn-outline-warning text-dark border-1 bg-light p-0" style="border-radius: 0;">
                            <div class="card-header px-0 py-0">
                                <div class="p-0 product-short-title-container w-100">
                                    <a href="{{ route('orderbyproduct', [$product->slug]) }}" class="product-short-title fw-bold text-decoration-underline fs-4">
                                        {{ $product->short_title }}
                                    </a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div class="modal fade" id="productModal{{ $index }}" tabindex="-1"
                                    aria-labelledby="productModalLabel{{ $index }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content" style="border-radius: 0; border-top: 3px solid #ebc266; border-bottom: 3px solid #ebc266">
                                            <div class="modal-header border-bottom border-light">
                                                <h1 class="fs-5 fw-bold text-dark border-bottom border-dark">
                                                    {{ $product->full_title }}
                                                </h1>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-8 border-bottom border-warning bg-light">
                                                            <img src="{{ !empty($product->image_path) ? asset('imgs/products/'.$product->image_path) : asset('images/no-image-available.jpg') }}"
                                                                class="img-fluid product-image" style="height: 300px;" />
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-4 text-start text-dark">
                                                            <div>
                                                                <h6 class="fs-6 fw-bolder text-dark">Styling</h6>
                                                                
                                                            </div>
                                                            <div>
                                                                <h6 class="fs-6 fw-bolder text-dark">Dimensions
                                                                </h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="fs-6 fw-bolder text-dark">
                                                                    Range Specification
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <figure class="my-0" style="margin-bottom: 0px !important;">
                                                <img class="product-image px-0"
                                                    style="margin-bottom: 0px !important;min-height:175px;max-height:175px;object-fit:contain"
                                                    src="{{ !empty($product->image_path) ? asset('imgs/products/'.$product->image_path) : asset('images/no-image-available.jpg') }}"
                                                    alt="Card image cap" data-bs-toggle="modal"
                                                    data-bs-target="#productModal{{ $index }}">
                                            </figure>
                                            <p class="mt-2"><small class="fw-bold text-start text-dark">{{ $product->product_code }}</small></p>
                                            <p class="">
                                                <small
                                                    class="fw-bold text-start text-dark">{{ $product->dimensions }}</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12">
                        <div class="alert alert-warning" role="alert">
                            No products found.
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>