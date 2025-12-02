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

    
</style>
@endsection
<div class="container mt-4" id="home-section">
    <section class="hero">
        <div class="container p-0">
            <div class="row mb-3">
                <h1 style="font-size: 50px;">
                    The 100% Kitchen Delivery Promise:
                    <br class="d-none d-md-block">
                    Get It All, Get It On Time!
                </h1>
            </div>
            <div class="row">

                <!-- LEFT COLUMN -->
                <div class="col-lg-7 mb-4 mb-lg-0">

                    <p class="lead text-dark mb-4">
                        Tired of missing items, delays, or being ignored after you’ve paid?
                        We supply premium UK kitchens with guaranteed delivery, real support, and no upfront payment traps.
                    </p>

                    <a href="#" class="theme-btn-1 btn btn-effect-1 mb-4" tabindex="0" data-bs-toggle="modal" data-bs-target="#kitchenModal">Make An Enquiry</a>

                    <div class="d-flex gap-2 lead mb-4">
                        <span class="fw-bold section-bg-1 px-3 text-dark">UK Made</span>
                        <span class="fw-bold section-bg-1 px-3 text-dark">5-Year Warranty</span>
                        <span class="fw-bold section-bg-1 px-3 text-dark">No Upfront Payment</span>
                    </div>

                    <div id="simpleSlider" class="carousel slide mb-4" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active" style="max-height: 350px;">
                                <img src="{{asset('images/shaker-22.jpeg')}}" class="d-block w-100" alt="Slide 1">
                            </div>
                            <div class="carousel-item" style="max-height: 350px;">
                                <img src="{{asset('images/True-Handleless-SuperGloss-Graphite.jpg')}}" class="d-block w-100" alt="Slide 2">
                            </div>
                            <div class="carousel-item" style="max-height: 350px;">
                                <img src="{{asset('images/slab.jpeg')}}" class="d-block w-100" alt="Slide 3">
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
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#simpleSlider" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#simpleSlider" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#simpleSlider" data-bs-slide-to="2"></button>
                        </div>

                    </div>

                    <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide--- mb-4">
                        <h3 class="text-decoration-underline">Featured Products</h3>
                        <!-- gallery-item -->
                        <div class="ltn__gallery-item filter_category_3 col-lg-3 col-sm-3 col-3">
                            <div class="ltn__gallery-item-inner">
                                <div class="ltn__gallery-item">
                                    <span data-rel="lightcase:myCollection">
                                        <img src="{{asset('imgs/styles/06_06_2025_104957_6842c7d5c26f5-j-pull(1).png')}}" alt="Image">
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
                                        <img src="{{asset('imgs/styles/04_05_2025_063206_681709e62cd48-shaker(1).png')}}" alt="Image">
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
                                        <img src="{{asset('imgs/styles/04_05_2025_063345_68170a490b56f-slabedge(2).png')}}" alt="Image">
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
                                        <img src="{{asset('imgs/styles/04_05_2025_063653_68170b053487d-budgetkitchen.png')}}" alt="Image">
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
                        <div class="mb-4">
                            <img src="{{ asset('images/homepage.jpeg') }}" class="border border-default img-fluid" alt="">
                        </div>
                    <form method="POST" action="{{ route('contact_us_inquiry') }}">
                        @csrf

                        <input type="text" class="form-control mb-4" placeholder="Name" name="name" required>
                        <input type="email" class="form-control mb-4" placeholder="Email" name="email" required>
                        <input type="number" class="form-control mb-4" placeholder="Phone" name="phone" required>
                        <input type="number" class="form-control mb-4" placeholder="Postcode" name="postcode" required>

                        <div class="input-item">
                            <select class="nice-select w-100 mb-4" name="message" required>
                                <option>Select Kitchen Type</option>
                                <option>J Pull Kitchen</option>
                                <option>Shaker Kitchen</option>
                                <option>Slab Edged Kitchen</option>
                                <option>True Handleless Kitchen</option>
                                <option>J Pull 22mm Kitchen</option>
                                <option>Shaker 22mm Kitchen</option>
                                <option>Slab Painted Kitchen</option>
                                <option>True Handleless Painted Kitchen</option>
                                <option>Budget Kitchen</option>
                            </select>
                        </div>

                        <button class="btn btn-dark w-100" type="submit">
                            Start Designing My Dream Kitchen
                        </button>
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<div class="ltn__feature-area section-bg-1 pt-60 pb-60 mb-60---" id="kitchens-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h1 class="section-title">Explore Our Beautiful UK Kitchens Collection </h1>
                </div>
            </div>
        </div>
<!-- Swiper HTML -->
<div class="swiper mySwiper">
  <div class="swiper-wrapper">

    <!-- Slide 1 -->
    <div class="swiper-slide">
      <div class="card p-2">
        <img src="{{ asset('imgs/styles/06_06_2025_104957_6842c7d5c26f5-j-pull(1).png') }}" alt="J Pull Kitchen">
        <div class="p-2 text-center">
          <h6 class="mb-1">J Pull Kitchen</h6>
          <small>Modern, smooth, minimalist handle groove.</small>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="swiper-slide">
      <div class="card p-2">
        <img src="{{ asset('imgs/styles/04_05_2025_063206_681709e62cd48-shaker(1).png') }}" alt="Shaker Kitchen">
        <div class="p-2 text-center">
          <h6 class="mb-1">Shaker Kitchen</h6>
          <small>Classic framed elegance with modern durability.</small>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="swiper-slide">
      <div class="card p-2">
        <img src="{{ asset('imgs/styles/04_05_2025_063345_68170a490b56f-slabedge(2).png') }}" alt="Slab Edged Kitchen">
        <div class="p-2 text-center">
          <h6 class="mb-1">Slab Edged Kitchen</h6>
          <small>Flat, clean, contemporary doors.</small>
        </div>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="swiper-slide">
      <div class="card p-2">
        <img src="{{ asset('imgs/styles/04_05_2025_063809_68170b51b771f-truhandleless(1).png') }}" alt="True Handleless">
        <div class="p-2 text-center">
          <h6 class="mb-1">True Handleless Kitchen</h6>
          <small>Pure, uninterrupted modern design.</small>
        </div>
      </div>
    </div>

    <!-- Slide 5 -->
    <div class="swiper-slide">
      <div class="card p-2">
        <img src="{{ asset('imgs/styles/31_05_2025_102009_683ad7d95310c-j-pull22.png') }}" alt="J Pull 22mm">
        <div class="p-2 text-center">
          <h6 class="mb-1">J Pull 22mm Kitchen</h6>
          <small>Thicker, premium J Pull range.</small>
        </div>
      </div>
    </div>

    <!-- Slide 6 -->
    <div class="swiper-slide">
      <div class="card p-2">
        <img src="{{ asset('imgs/styles/04_05_2025_063253_68170a1592a60-shaker22(1).png') }}" alt="Shaker 22mm">
        <div class="p-2 text-center">
          <h6 class="mb-1">Shaker 22mm Kitchen</h6>
          <small>Heavy-duty craftsmanship, premium finish.</small>
        </div>
      </div>
    </div>

    <!-- Slide 7 -->
    <div class="swiper-slide">
      <div class="card p-2">
        <img src="{{ asset('imgs/styles/04_05_2025_063733_68170b2d90a9e-slabedgepainted(1).png') }}" alt="Slab Painted">
        <div class="p-2 text-center">
          <h6 class="mb-1">Slab Painted Kitchen</h6>
          <small>High-end painted slab doors.</small>
        </div>
      </div>
    </div>

    <!-- Slide 8 -->
    <div class="swiper-slide">
      <div class="card p-2">
        <img src="{{ asset('imgs/styles/04_05_2025_063854_68170b7e97ee8-truehandlelesspainted.png') }}" alt="True Handleless Painted">
        <div class="p-2 text-center">
          <h6 class="mb-1">True Handleless Painted</h6>
          <small>Luxury painted handleless design.</small>
        </div>
      </div>
    </div>

    <!-- Slide 9 -->
    <div class="swiper-slide">
      <div class="card p-2">
        <img src="{{ asset('imgs/styles/04_05_2025_063653_68170b053487d-budgetkitchen.png') }}" alt="Budget Kitchen">
        <div class="p-2 text-center">
          <h6 class="mb-1">Budget Kitchen Collection</h6>
          <small>Durable, stylish, cost-effective.</small>
        </div>
      </div>
    </div>

  </div>

  <!-- navigation & pagination (optional) -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>

    </div>
</div>


<div class="ltn__feature-area section-bg-0 pt-60 pb-60 mb-60---" id="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h1 class="section-title">Is your Kitchen experience turning into a Nightmare?</h1>
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


<div class="ltn__feature-area section-bg-1 pt-60 pb-60 mb-60" id="testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h1 class="section-title">Don't just take our word for it... </h1>
                </div>
            </div>
        </div>
        <div id="multiImageSlider2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row">
                         <div class="col-4 col-md-4">
                            <div class="card py-2">
                                <div class="text-center">
                                    <!-- user icon-->
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="px-2 text-center mt-2">
                                    <h6 class="text-decoration-underline">William</h6>
                                    <small class="">Amazing quality, transformed my home beautifully.</small>
                                </div>
                            </div>
                        </div>
                         <div class="col-4 col-md-4">
                            <div class="card py-2">
                                <div class="text-center">
                                    <!-- user icon-->
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="px-2 text-center mt-2">
                                    <h6 class="text-decoration-underline">James</h6>
                                    <small class="">Elegant designs that perfectly fit my space.</small>
                                </div>
                            </div>
                        </div>
                         <div class="col-4 col-md-4">
                            <div class="card py-2">
                                <div class="text-center">
                                    <!-- user icon-->
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="px-2 text-center mt-2">
                                    <h6 class="text-decoration-underline">Harry</h6>
                                    <small class="">Superb craftsmanship, exceeded all my expectations.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row">
                         <div class="col-4 col-md-4">
                            <div class="card py-2">
                                <div class="text-center">
                                    <!-- user icon-->
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="px-2 text-center mt-2">
                                    <h6 class="text-decoration-underline">Alfie</h6>
                                    <small class="">Stylish, durable, and worth every penny.</small>
                                </div>
                            </div>
                        </div>
                         <div class="col-4 col-md-4">
                            <div class="card py-2">
                                <div class="text-center">
                                    <!-- user icon-->
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="px-2 text-center mt-2">
                                    <h6 class="text-decoration-underline">Thomas</h6>
                                    <small class="">My kitchen finally looks modern and luxurious.</small>
                                </div>
                            </div>
                        </div>
                         <div class="col-4 col-md-4">
                            <div class="card py-2">
                                <div class="text-center">
                                    <!-- user icon-->
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="px-2 text-center mt-2">
                                    <h6 class="text-decoration-underline">Charlotte</h6>
                                    <small class="">Brilliant service and stunning kitchen finish.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#multiImageSlider2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#multiImageSlider2" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
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

                        <div class="input-item">
                            <select class="nice-select w-100 mb-3" name="message" required>
                                <option>Select Kitchen Type</option>
                                <option>J Pull Kitchen</option>
                                <option>Shaker Kitchen</option>
                                <option>Slab Edged Kitchen</option>
                                <option>True Handleless Kitchen</option>
                                <option>J Pull 22mm Kitchen</option>
                                <option>Shaker 22mm Kitchen</option>
                                <option>Slab Painted Kitchen</option>
                                <option>True Handleless Painted Kitchen</option>
                                <option>Budget Kitchen</option>
                            </select>
                        </div>

                        <button class="btn btn-dark w-100" type="submit">
                            Start Designing My Dream Kitchen
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