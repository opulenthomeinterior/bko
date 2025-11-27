@extends('frontend.layouts.app')
@section('content')
@section('styles')
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
</style>
@endsection
<div class="container mb-120">
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT COLUMN -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h1 class="mb-3">
                        The 100% Kitchen Delivery Promise:
                        <br class="d-none d-md-block">
                        Get It All, Get It On Time!
                    </h1>

                    <p class="lead mb-4">
                        Tired of missing items, delays, or being ignored after you’ve paid?
We supply premium UK kitchens with guaranteed delivery, real support, and no upfront payment traps.
                    </p>

                    <a href="#" class="btn btn-primary btn-lg mb-4">
                        Get Your Free Kitchen Design & Quote
                    </a>

                    <div class="d-flex gap-4 icon-list">
                        <span>🇬🇧 UK Made</span>
                        <span>🛠 5-Year Warranty</span>
                        <span>💳 No Upfront Payment</span>
                    </div>
                </div>

                <!-- RIGHT COLUMN (FORM) -->
                <div class="col-lg-4">
                    <div class="p-4 shadow rounded bg-white">
                        <div class="mb-4">
                            <img src="{{ asset('assets/img/product/1.png') }}" class="border border-default img-fluid" alt="">
                        </div>
                        <form>
                            <input type="text" class="form-control mb-3" placeholder="Name">
                            <input type="email" class="form-control mb-3" placeholder="Email">
                            <input type="text" class="form-control mb-3" placeholder="Phone">
                            <input type="text" class="form-control mb-3" placeholder="Postcode">
                            <button class="btn btn-dark w-100">
                                Start Designing My Dream Kitchen
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<div class="ltn__search-by-place-area before-bg-top bg-image-top--- pt-115 pb-70" data-bs-bg="img/bg/20.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center---">
                    <h1 class="section-title">Kitchen Styles You'll Love</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__search-by-place-slider-1-active slick-arrow-1 slick-initialized slick-slider"><a class="slick-prev slick-arrow" style=""><i class="fas fa-arrow-left" alt="Arrow Icon"></i></a>
            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4000px; transform: translate3d(-2000px, 0px, 0px);" role="listbox"><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html" tabindex="-1"><img src="img/product-3/2.jpg" alt="#"></a>
                    </div>
                    <div class="search-by-place-info">
                        <h4><a href="product-details.html" tabindex="-1">Shaker</a></h4>
                    </div>
                </div>
            </div><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html" tabindex="-1"><img src="img/product-3/3.jpg" alt="#"></a>
                    </div>
                    <div class="search-by-place-info">
                        <h4><a href="product-details.html" tabindex="-1">J-Pull</a></h4>
                        <p></p>
                    </div>
                </div>
            </div><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html" tabindex="-1"><img src="img/product-3/2.jpg" alt="#"></a>
                    </div>
                    <div class="search-by-place-info">
                        <h4><a href="product-details.html" tabindex="-1">Shaker</a></h4>
                    </div>
                </div>
            </div><div class="col-lg-4 slick-slide" data-slick-index="0" aria-hidden="true" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide50">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html" tabindex="-1"><img src="img/product-3/1.jpg" alt="#"></a>
                    </div>
                    <div class="search-by-place-info">
                        <h4><a href="product-details.html" tabindex="-1">J-Pull 22</a></h4>
                    </div>
                </div>
            </div><div class="col-lg-4 slick-slide" data-slick-index="1" aria-hidden="true" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide51">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html" tabindex="-1"><img src="img/product-3/2.jpg" alt="#"></a>
                    </div>
                    <div class="search-by-place-info">
                        <h4><a href="product-details.html" tabindex="-1">Shaker</a></h4>
                    </div>
                </div>
            </div><div class="col-lg-4 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide52">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html" tabindex="0"><img src="img/product-3/3.jpg" alt="#"></a>
                    </div>
                    <div class="search-by-place-info">
                        <h4><a href="product-details.html" tabindex="0">J-Pull</a></h4>
                    </div>
                </div>
            </div><div class="col-lg-4 slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide53">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html" tabindex="0"><img src="img/product-3/2.jpg" alt="#"></a>
                    </div>
                    <div class="search-by-place-info">
                        <h4><a href="product-details.html" tabindex="0">Shaker</a></h4>
                    </div>
                </div>
            </div><div class="col-lg-4 slick-slide slick-cloned slick-active" data-slick-index="4" id="" aria-hidden="false" style="width: 400px;" tabindex="-1">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html" tabindex="0"><img src="img/product-3/1.jpg" alt="#"></a>
                    </div>
                    <div class="search-by-place-info">
                        <h4><a href="product-details.html" tabindex="0">J-Pull 22</a></h4>
                    </div>
                </div>
            </div><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html" tabindex="-1"><img src="img/product-3/2.jpg" alt="#"></a>
                    </div>
                    <div class="search-by-place-info">
                        <h4><a href="product-details.html" tabindex="-1">Shaker</a></h4>
                    </div>
                </div>
            </div><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html" tabindex="-1"><img src="img/product-3/3.jpg" alt="#"></a>
                    </div>
                    <div class="search-by-place-info">
                        <h4><a href="product-details.html" tabindex="-1">J-Pull</a></h4>
                    </div>
                </div>
            </div></div></div>
            
            
            
            <!--  -->
        <a class="slick-next slick-arrow" style=""><i class="fas fa-arrow-right" alt="Arrow Icon"></i></a></div>
    </div>
</div>

<div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
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
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="service-details.html">The Delivery Cat, Delay Trap</a></h3>
                        <p>Forget the 5months wait. We deliver accurate orders on a schedule you trust.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="service-details.html">The Upfront Payment Trap</a></h3>
                        <p>Pay for perfection, not promises. Never pay full price until your kitchen is confirmed, delivered and checked.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="service-details.html">No hidden fees ever</a></h3>
                        <p>Transparent pricing from design to delivery. The quote you receive is the final price - no fraudulent "upgrade" charges.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__search-by-place-area section-bg-0 pt-115 pb-70" data-bs-bg="img/bg/20.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center---">
                    <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">Area Properties</h6>
                    <h1 class="section-title">Don't just take our word for it...</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__search-by-place-slider-1-active slick-arrow-1 slick-initialized slick-slider"><a class="slick-prev slick-arrow" style=""><i class="fas fa-arrow-left" alt="Arrow Icon"></i></a>
            <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 4000px; transform: translate3d(-2000px, 0px, 0px);" role="listbox">
                    
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="product-details.html" tabindex="0">J-Pull</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="product-details.html" tabindex="0">J-Pull</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="product-details.html" tabindex="0">J-Pull</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="product-details.html" tabindex="0">J-Pull</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="product-details.html" tabindex="0">J-Pull</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="product-details.html" tabindex="0">Delivery was exactly on schedule</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="product-details.html" tabindex="0">Communication was fantastic</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--  -->
            <a class="slick-next slick-arrow" style=""><i class="fas fa-arrow-right" alt="Arrow Icon"></i></a>
        </div>
    </div>
</div>

<div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h1 class="section-title">Ready for a kitchen experience that isn't a Disaster?</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter--- justify-content-center">
            <div class="col-lg-8 col-sm-8 col-8">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                    <div class="ltn__feature-info">
                        <h5 class="animated fadeIn"><a href="service-details.html">Get your free design and quote - No obligation</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection