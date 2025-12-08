@extends('frontend.layouts.app')
@section('content')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<style>
    .ltn__slide-item-inner {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    /* MOBILE & TABLET RESPONSIVE FIX */
    @media (max-width: 992px) {
        .ltn__slide-item-inner {
            flex-direction: column;
            /* Stack vertically */
            justify-content: center;
            /* Center everything */
            text-align: center;
        }

        .slide-item-info {
            width: 100%;
            margin-left: 0;
            margin-top: 20px;
        }

        .main-heading-text h1 {
            font-size: 22px;
            /* Adjust heading size for small screens */
            line-height: 1.3;
        }

        .slide-item-car-dealer-form {
            width: 100%;
        }

        .slide-item-info img {
            max-width: 220px;
            /* Smaller image on mobile */
            margin: 0 auto;
        }
    }

    .slide-item-info {
        margin-left: auto;
    }
    
    input[type="number"] {
        background-color: var(--white);
        border: 2px solid;
        border-color: var(--border-color-9);
        height: 65px;
        -webkit-box-shadow: none;
        box-shadow: none;
        padding-left: 20px;
        font-size: 16px;
        color: var(--ltn__paragraph-color);
        width: 100%;
        margin-bottom: 30px;
        border-radius: 0;
        padding-right: 40px;
    }
    .nice-select {
        background-color: var(--white);
        border: 2px solid;
        border-color: var(--border-color-9);
        height: 65px;
        -webkit-box-shadow: none;
        box-shadow: none;
        padding-left: 20px;
        font-size: 16px;
        color: var(--ltn__paragraph-color);
        width: 100%;
        margin-bottom: 30px;
        border-radius: 0;
        padding-right: 40px;
    }

    .kitchen-carousel .carousel-inner .carousel-item {
        transition: transform 0.6s ease;
    }

    @media (min-width: 768px) {
        .kitchen-carousel .carousel-inner .carousel-item-next,
        .kitchen-carousel .carousel-inner .carousel-item-end.active {
            transform: translateX(25%);
        }

        .kitchen-carousel .carousel-inner .carousel-item-prev,
        .kitchen-carousel .carousel-inner .carousel-item-start.active {
            transform: translateX(-25%);
        }

        .kitchen-carousel .carousel-inner .carousel-item {
            display: flex;
        }
    }
    .card small {
        display: block;
        width: 100%;
    }
    /* make sure slides and images fill space correctly */
    .mySwiper { padding: 1rem 0; }
    .swiper-slide { display: flex; justify-content: center; align-items: flex-start; }
    .swiper-slide .card { width: 100%; max-width: 360px; } /* optional card width */
    .swiper-slide img { width: 100%; height: auto; display: block; object-fit: cover; border-radius: 4px; }
    .swiper-button-next, .swiper-button-prev { color: #000; } /* visible nav color */
    
    textarea.form-control {
        font-family: 'Nunito Sans', sans-serif !important;
        border-radius: 0 !important;
    }
    
    .textarea.form-control {
        background-color: var(--white);
        border: 2px solid;
        border-color: var(--border-color-9);
        height: 65px;
        -webkit-box-shadow: none;
        box-shadow: none;
        padding-left: 20px;
        font-size: 16px;
        color: var(--ltn__paragraph-color);
        width: 100%;
        margin-bottom: 30px;
        border-radius: 0;
        padding-right: 40px;
    }
    
</style>
@endsection
<div class="mt-4" id="home-section">
    <section class="hero mb-120">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 style="font-size: 30px;">
                        The UK’s Most Trusted Ceramic Tile Collection.
                    </h1>
                    <p class="lead text-dark mb-4">
                        Guaranteed On-Time, Damage-Free Delivery — Every Order, Every Time.
                        <br>
                        CeramiLux Ceramic Tiles – Starting from £19.65 per m² 

                        The UK’s Most Trusted Ceramic Tile Collection. 
                        Guaranteed On-Time, Damage-Free Delivery — Every Order, Every Time. 
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="theme-btn-1 btn btn-effect-1 mb-4 px-2 py-3" tabindex="0" data-bs-toggle="modal" data-bs-target="#kitchenModal">BUY NOW & GET 10% OFF</a>
                        <a href="#" class="theme-btn-2 btn btn-effect-1 mb-4 p-2 py-3" tabindex="0" data-bs-toggle="modal" data-bs-target="#kitchenModal">ORDER YOUR FREE SAMPLE</a>
                    </div>
                    <div class="d-flex gap-2 lead mb-4">
                        <small class="fs-6 fw-bold section-bg-1 px-2 py-3 text-dark">Damage-Free Guarantee</small>
                        <small class="fs-6 fw-bold section-bg-1 px-2 py-3 text-dark">Next-Day Delivery Available</small>
                        <small class="fs-6 fw-bold section-bg-1 px-2 py-3 text-dark">Lowest Price</small>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="simpleSlider" class="carousel slide mb-4" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active" style="">
                                <img src="{{asset('assets/img/tiles/9-1024x687.jpg')}}" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item" style="">
                                <img src="{{asset('assets/img/tiles/10-1024x710.jpg')}}" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item" style="">
                                <img src="{{asset('assets/img/tiles/ANTICO-BIANCO-2.jpg')}}" class="d-block w-100" alt="Slide 3">
                            </div>
                        </div>

                        <!-- Previous/Next Buttons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#simpleSlider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#simpleSlider" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>

                        <!-- Dots Indicators -->
                        <div class="carousel-indicators" style="position: relative; bottom: 80px;">
                            <button type="button" data-bs-target="#simpleSlider" data-bs-slide-to="0" class="active me-4">
                                <img src="{{asset('assets/img/tiles/9-1024x687.jpg')}}" class="d-block" alt="Slide 1" style="position: relative; height: 60px !important; border: 3px solid white; max-width: 70px !important;">
                            </button>
                            <button type="button" data-bs-target="#simpleSlider" data-bs-slide-to="1" class="mx-4">
                                <img src="{{asset('assets/img/tiles/10-1024x710.jpg')}}" class="d-block" alt="Slide 1" style="position: relative; height: 60px !important; border: 3px solid white; max-width: 70px !important;">
                            </button>
                            <button type="button" data-bs-target="#simpleSlider" data-bs-slide-to="2" class="mx-4">
                                <img src="{{asset('assets/img/tiles/ANTICO-BIANCO-2.jpg')}}" class="d-block" alt="Slide 1" style="position: relative; height: 60px !important; border: 3px solid white; max-width: 70px !important;">
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- LEFT COLUMN -->
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div id="simpleSlider2" class="carousel slide mb-4" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active" style="">
                                <img src="{{asset('assets/img/tiles/5.jpg')}}" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item" style="">
                                <img src="{{asset('assets/img/tiles/6.jpg')}}" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item" style="">
                                <img src="{{asset('assets/img/tiles/7.jpg')}}" class="d-block w-100" alt="Slide 3">
                            </div>
                        </div>

                        <!-- Previous/Next Buttons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#simpleSlider2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#simpleSlider2" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>

                        <!-- Dots Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#simpleSlider2" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#simpleSlider2" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#simpleSlider2" data-bs-slide-to="2"></button>
                        </div>

                    </div>
                    <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide--- mb-4">
                        <h3 class="text-decoration-underline">Featured Products</h3>
                        <!-- gallery-item -->
                        <div class="ltn__gallery-item filter_category_3 col-lg-3 col-sm-3 col-3">
                            <div class="ltn__gallery-item-inner">
                                <div class="ltn__gallery-item">
                                    <span data-rel="lightcase:myCollection">
                                        <img src="{{asset('assets/img/tiles/7.jpg')}}" alt="Image">
                                    </span>
                                </div>
                                <!-- <div class="ltn__gallery-item-info">
                                    <h4><a href="portfolio-details.html">J Pull </a></h4>
                                </div> -->
                            </div>
                        </div>
                        <div class="ltn__gallery-item filter_category_3 col-lg-3 col-sm-3 col-3">
                            <div class="ltn__gallery-item-inner">
                                <div class="ltn__gallery-item">
                                    <span data-rel="lightcase:myCollection">
                                        <img src="{{asset('assets/img/tiles/8.jpg')}}" alt="Image">
                                    </span>
                                </div>
                                <!-- <div class="ltn__gallery-item-info">
                                    <h4><a href="portfolio-details.html">Shaker </a></h4>
                                </div> -->
                            </div>
                        </div>
                        <div class="ltn__gallery-item filter_category_3 col-lg-3 col-sm-3 col-3">
                            <div class="ltn__gallery-item-inner">
                                <div class="ltn__gallery-item">
                                    <span data-rel="lightcase:myCollection">
                                        <img src="{{asset('assets/img/tiles/6.jpg')}}" alt="Image">
                                    </span>
                                </div>
                                <!-- <div class="ltn__gallery-item-info">
                                    <h4><a href="portfolio-details.html">Slab Edged </a></h4>
                                </div> -->
                            </div>
                        </div>
                        <div class="ltn__gallery-item filter_category_3 col-lg-3 col-sm-3 col-3">
                            <div class="ltn__gallery-item-inner">
                                <div class="ltn__gallery-item">
                                    <span data-rel="lightcase:myCollection">
                                        <img src="{{asset('assets/img/tiles/5.jpg')}}" alt="Image">
                                    </span>
                                </div>
                                <!-- <div class="ltn__gallery-item-info">
                                    <h4><a href="portfolio-details.html">Budget Kitchen </a></h4>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>

                <!-- RIGHT COLUMN (FORM) -->
                <div class="col-lg-5">
                    <div class="p-4 shadow rounded bg-white">
                        <h3>Book a free consultion</h3>
                    <form method="POST" action="{{ route('contact_us_inquiry') }}">
                        @csrf

                        <input type="text" class="form-control mb-4" placeholder="Name" name="name" required>
                        <input type="email" class="form-control mb-4" placeholder="Email" name="email" required>
                        <input type="number" class="form-control mb-4" placeholder="Phone" name="phone" required>
                        <input type="number" class="form-control mb-4" placeholder="Postcode" name="postcode" required>
                        <textarea name="message" required class="form-control" placeholder="Enter your message" style="font-family: 'Nunito Sans', sans-serif !important;"></textarea>

                        <button class="btn btn-dark w-100" type="submit">
                            Submit
                        </button>
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="ltn__feature-area section-bg-1 pt-60 pb-60 mb-120" id="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title">Our Main Focus</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 p-4">
                        <div class="icon mb-3">
                            <i class="bi bi-truck fs-1 text-warning"></i>
                        </div>
                        <div class="ltn__feature-info">
                            <h3>The Delivery Cat, Delay Trap</h3>
                            <p>Forget the 5 months wait. We deliver accurate orders on a schedule you trust.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 p-4">
                        <div class="icon mb-3">
                            <i class="bi bi-credit-card fs-1 text-warning"></i>
                        </div>
                        <div class="ltn__feature-info">
                            <h3>The Upfront Payment Trap</h3>
                            <p>Pay for perfection, not promises. Never pay full price until your kitchen is confirmed, delivered and checked.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 p-4">
                        <div class="icon mb-3">
                            <i class="bi bi-shield-check fs-1 text-warning"></i>
                        </div>
                        <div class="ltn__feature-info">
                            <h3>No hidden fees ever</h3>
                            <p>Transparent pricing from design to delivery. The quote you receive is the final price — no fraudulent "upgrade" charges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__apartments-plan-area pt-115--- pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title">Our Product</h1>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center">
                        <div class="nav">
                            <a data-bs-toggle="tab" href="#liton_tab_3_1" class="active"> CeramiLux Ceramic Tiles</a>
                            <a class="show" data-bs-toggle="tab" href="#liton_tab_3_2">Porcelain Tiles</a>
                            <a class="show" data-bs-toggle="tab" href="#liton_tab_3_3">Terrazzo Tiles </a>
                            <a class="show" data-bs-toggle="tab" href="#liton_tab_3_4">Mosaic Tiles </a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                            <div class="ltn__apartments-tab-content-inner">
                                <div class="row">
                                    <div class="col-12">
                                            <h2> CeramiLux Ceramic Tiles</h2>
                                            <p>Crafted for durability, style, and long-term performance, CeramiLux Ceramic Tiles is perfect for modern kitchens, bathrooms, hallways, feature walls, and living spaces. 
                                            The premium finish delivers a clean, elegant aesthetic suitable for both homes and commercial interiors. 
                                            </p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                        <div class="apartments-plan-img">
                                            <img src="{{asset('assets/img/tiles/8.jpg')}}" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info text-color-black section-bg-1 py-4">
                                            <h6>Ideal for: </h6>
                                            <div class="apartments-info-list-color">
                                                <ul>
                                                    <li>Kitchens & splashbacks</li>
                                                    <li>Bathroom floors & walls </li>
                                                    <li>Wet rooms</li>
                                                    <li>Feature walls</li>
                                                    <li>Hallways & open-plan areas</li>
                                                </ul>
                                            </div>
 
                                            <h6>Product Specs: </h6>
                                            <div class="apartments-info-list-color">
                                                <ul>
                                                    <li>Size: Multiple sizes available</li>
                                                    <li>Material: Porcelain / Ceramic (update as needed)  </li>
                                                    <li>Finish: Matt / Gloss / Polished / Satin </li>
                                                    <li>Slip Rating: R9 / R10 / R11 </li>
                                                    <li>Thickness: 8–10mm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_2">
                            <div class="ltn__apartments-tab-content-inner">
                                <div class="row">
                                    <div class="col-12">
                                            <h2> Porcelain Tiles </h2>
                                            <p>High-performance, durable, and suitable for every room. 
                                                Porcelain offers superior strength, low maintenance, and flawless modern aesthetics. 
                                                Perfect for kitchens, bathrooms, hallways, and commercial areas. 
                                            </p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                        <div class="apartments-plan-img">
                                            <img src="{{asset('assets/img/tiles/7.jpg')}}" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info text-color-black section-bg-1 py-4">
                                            <h6>Ideal for: </h6>
                                            <div class="apartments-info-list-color">
                                                <ul>
                                                    <li>Kitchens & splashbacks</li>
                                                    <li>Bathroom floors & walls </li>
                                                    <li>Wet rooms</li>
                                                    <li>Feature walls</li>
                                                    <li>Hallways & open-plan areas</li>
                                                </ul>
                                            </div>
 
                                            <h6>Product Specs: </h6>
                                            <div class="apartments-info-list-color">
                                                <ul>
                                                    <li>Size: Multiple sizes available</li>
                                                    <li>Material: Porcelain / Ceramic (update as needed)  </li>
                                                    <li>Finish: Matt / Gloss / Polished / Satin </li>
                                                    <li>Slip Rating: R9 / R10 / R11 </li>
                                                    <li>Thickness: 8–10mm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_3">
                            <div class="ltn__apartments-tab-content-inner">
                                <div class="row">
                                    <div class="col-12">
                                            <h2>Terrazzo Tiles </h2>
                                            <p>The iconic designer look, reinvented. 
                                                Terrazzo tiles bring speckled, stone-like beauty to any modern space. 
                                                Ideal for contemporary bathrooms, kitchens, and statement floors. 
                                            </p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                        <div class="apartments-plan-img">
                                            <img src="{{asset('assets/img/tiles/6.jpg')}}" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info text-color-black section-bg-1 py-4">
                                            <h6>Ideal for: </h6>
                                            <div class="apartments-info-list-color">
                                                <ul>
                                                    <li>Kitchens & splashbacks</li>
                                                    <li>Bathroom floors & walls </li>
                                                    <li>Wet rooms</li>
                                                    <li>Feature walls</li>
                                                    <li>Hallways & open-plan areas</li>
                                                </ul>
                                            </div>
 
                                            <h6>Product Specs: </h6>
                                            <div class="apartments-info-list-color">
                                                <ul>
                                                    <li>Size: Multiple sizes available</li>
                                                    <li>Material: Porcelain / Ceramic (update as needed)  </li>
                                                    <li>Finish: Matt / Gloss / Polished / Satin </li>
                                                    <li>Slip Rating: R9 / R10 / R11 </li>
                                                    <li>Thickness: 8–10mm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_4">
                            <div class="ltn__apartments-tab-content-inner">
                                <div class="row">
                                    <div class="col-12">
                                            <h2>Marble Tiles  </h2>
                                            <p>The timeless luxury classic. 
                                                Get premium marble or realistic marble-effect porcelain with high-end veining and polished, matt, or satin finishes. 
                                                Perfect for high-end bathrooms, hotel-style interiors, and luxury kitchens.  
                                            </p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                        <div class="apartments-plan-img">
                                            <img src="{{asset('assets/img/tiles/5.jpg')}}" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="apartments-plan-info text-color-black section-bg-1 py-4">
                                            <h6>Ideal for: </h6>
                                            <div class="apartments-info-list-color">
                                                <ul>
                                                    <li>Kitchens & splashbacks</li>
                                                    <li>Bathroom floors & walls </li>
                                                    <li>Wet rooms</li>
                                                    <li>Feature walls</li>
                                                    <li>Hallways & open-plan areas</li>
                                                </ul>
                                            </div>
 
                                            <h6>Product Specs: </h6>
                                            <div class="apartments-info-list-color">
                                                <ul>
                                                    <li>Size: Multiple sizes available</li>
                                                    <li>Material: Porcelain / Ceramic (update as needed)  </li>
                                                    <li>Finish: Matt / Gloss / Polished / Satin </li>
                                                    <li>Slip Rating: R9 / R10 / R11 </li>
                                                    <li>Thickness: 8–10mm</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__feature-area section-bg-1 pt-60 pb-60 mb-60" id="testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title">See what's our client says about us </h1>
                    </div>
                </div>
            </div>

            <!-- Swiper HTML -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                    <div class="card p-2">
                        <div class="p-2 text-center">
                            <i class="fa fa-user bg-light p-4 rounded-circle"></i>
                        <h6 class="mb-1">Alfie</h6>
                        <small>Stylish, durable, and worth every penny.</small>
                        </div>
                    </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                    <div class="card p-2">
                        <div class="p-2 text-center">
                            <i class="fa fa-user bg-light p-4 rounded-circle"></i>
                        <h6 class="mb-1">Thomas</h6>
                        <small>My kitchen finally looks modern and luxurious.</small>
                        </div>
                    </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                    <div class="card p-2">
                        <div class="p-2 text-center">
                            <i class="fa fa-user bg-light p-4 rounded-circle"></i>
                        <h6 class="mb-1">Slab Edged Kitchen</h6>
                        <small>Flat, clean, contemporary doors for a bold, streamlined look. </small>
                        </div>
                    </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                    <div class="card p-2">
                        <div class="p-2 text-center">
                            <i class="fa fa-user bg-light p-4 rounded-circle"></i>
                        <h6 class="mb-1">Charlotte</h6>
                        <small>Brilliant service and stunning kitchen finish.</small>
                        </div>
                    </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="swiper-slide">
                    <div class="card p-2">
                        <div class="p-2 text-center">
                            <i class="fa fa-user bg-light p-4 rounded-circle"></i>
                        <h6 class="mb-1">William</h6>
                        <small>Amazing quality, transformed my home beautifully. </small>
                        </div>
                    </div>
                    </div>

                    <!-- Slide 6 -->
                    <div class="swiper-slide">
                    <div class="card p-2">
                        <div class="p-2 text-center">
                            <i class="fa fa-user bg-light p-4 rounded-circle"></i>
                        <h6 class="mb-1">James</h6>
                        <small>Elegant designs that perfectly fit my space.</small>
                        </div>
                    </div>
                    </div>

                    <!-- Slide 7 -->
                    <div class="swiper-slide">
                    <div class="card p-2">
                        <div class="p-2 text-center">
                            <i class="fa fa-user bg-light p-4 rounded-circle"></i>
                        <h6 class="mb-1">Harry</h6>
                        <small>Superb craftsmanship, exceeded all my expectations.</small>
                        </div>
                    </div>
                    </div>

                </div>

                <!-- navigation & pagination (optional) -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
    </div>
    
<div class="modal fade mt-5" id="kitchenModal" tabindex="-1" aria-labelledby="kitchenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="p-4 rounded bg-white">
                    <form method="POST" action="{{ route('contact_us_inquiry') }}">
                        @csrf

                        <input type="text" class="form-control mb-3" placeholder="Name" name="name" required>
                        <input type="email" class="form-control mb-3" placeholder="Email" name="email" required>
                        <input type="number" class="form-control mb-3" placeholder="Phone" name="phone" required>
                        <input type="number" class="form-control mb-3" placeholder="Postcode" name="postcode" required>
                        <textarea name="message" required class="form-control" placeholder="Enter your message" style="font-family: 'Nunito Sans', sans-serif !important;"></textarea>
                        <button class="btn btn-dark w-100" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.mySwiper', {
    loop: true,
    spaceBetween: 12,
    slidesPerView: 1,
    breakpoints: {
      // when window width is >= 576px
      576: { slidesPerView: 1.2 },   // small phones - optional slight peek
      // when window width is >= 768px
      768: { slidesPerView: 2 },
      // when window width is >= 992px
      992: { slidesPerView: 3 }
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: { el: '.swiper-pagination', clickable: true },
    grabCursor: true,
  });
});
</script>
@endsection