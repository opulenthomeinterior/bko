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
    
</style>
@endsection
<div class="container mb-60 mt-4">
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
                            <img src="{{ asset('images/homepage.jpeg') }}" class="border border-default img-fluid" alt="">
                        </div>
                        <form method="POST" action="{{ route('contact_us_inquiry') }}">
                            @csrf
                            <input type="text" class="form-control mb-3" placeholder="Name" name="name" required>
                            <input type="email" class="form-control mb-3" placeholder="Email" name="email" required>
                            <input type="number" class="form-control mb-3" placeholder="Phone" name="phone" required>
                            <input type="number" class="form-control mb-3" placeholder="Postcode" name="postcode" required>
                            <div class="input-item">
                                <select class="nice-select" style="display: none;" name="message" required>
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

<div class="ltn__category-area ltn__product-gutter section-bg-1 pt-60 pb-60 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h1 class="section-title">Explore Our Beautiful UK Kitchen Collection</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__category-slider-active--- slick-arrow-1 justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center p-3">
                    
                        <span class="category-ic">
                            <img src="https://bkonline.uk/public/imgs/styles/06_06_2025_104957_6842c7d5c26f5-j-pull(1).png" alt="">
                        </span>
                        <span class="category-title fw-bold border-bottom">J Pull Kitchen</span>
                        <p class="category-title">Modern, smooth, and minimalist with an integrated handle groove for effortless opening.</p>
                        
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center p-3">
                    
                        <span class="category-ic">
                            <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063206_681709e62cd48-shaker(1).png" alt="">
                        </span>
                        <span class="category-title fw-bold border-bottom">Shaker Kitchen</span>
                        <p class="category-title">Classic framed elegance with modern durability, forever stylish.</p>
                        
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center p-3">
                    
                        <span class="category-ic">
                            <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063345_68170a490b56f-slabedge(2).png" alt="">
                        </span>
                        <span class="category-title fw-bold border-bottom">Slab Edged Kitchen</span>
                        <p class="category-title">Flat, clean, contemporary doors for a bold, streamlined look.</p>
                        
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center p-3">
                    
                        <span class="category-ic">
                            <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063809_68170b51b771f-truhandleless(1).png" alt="">
                        </span>
                        <span class="category-title fw-bold border-bottom">True Handleless Kitchen</span>
                        <p class="category-title">A continuous rail system for a pure, uninterrupted modern design.</p>
                        
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center p-3">
                    
                        <span class="category-ic">
                            <img src="https://bkonline.uk/public/imgs/styles/31_05_2025_102009_683ad7d95310c-j-pull22.png" alt="">
                        </span>
                        <span class="category-title fw-bold border-bottom">J Pull 22mm Kitchen</span>
                        <p class="category-title">A premium, thicker and more robust version of our classic J Pull range.</p>
                        
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center p-3">
                    
                        <span class="category-ic">
                            <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063253_68170a1592a60-shaker22(1).png" alt="">
                        </span>
                        <span class="category-title fw-bold border-bottom">Shaker 22mm Kitchen</span>
                        <p class="category-title">Heavy-duty craftsmanship with elegant design and premium finishes.</p>
                        
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center p-3">
                    
                        <span class="category-ic">
                            <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063733_68170b2d90a9e-slabedgepainted(1).png" alt="">
                        </span>
                        <span class="category-title fw-bold border-bottom">Slab Painted Kitchen</span>
                        <p class="category-title">Smooth painted slab doors perfect for bespoke, high-end looks.</p>
                        
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center p-3">
                    
                        <span class="category-ic">
                            <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063854_68170b7e97ee8-truehandlelesspainted.png" alt="">
                        </span>
                        <span class="category-title fw-bold border-bottom">True Handleless Painted Kitchen</span>
                        <p class="category-title">A luxury painted handleless design for premium contemporary homes.</p>
                        
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center p-3">
                    
                        <span class="category-ic">
                            <img src="https://bkonline.uk/public/imgs/styles/04_05_2025_063653_68170b053487d-budgetkitchen.png" alt="">
                        </span>
                        <span class="category-title fw-bold border-bottom">Budget Kitchen Collection</span>
                        <p class="category-title">Durable, stylish, and cost-effective — perfect for rentals, flips, and project kitchens.</p>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__feature-area section-bg-0 pt-60 pb-60 mb-60---">
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
                        <h3 class="animated fadeIn"><a href="#">The Delivery Cat, Delay Trap</a></h3>
                        <p>Forget the 5months wait. We deliver accurate orders on a schedule you trust.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="#">The Upfront Payment Trap</a></h3>
                        <p>Pay for perfection, not promises. Never pay full price until your kitchen is confirmed, delivered and checked.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="#">No hidden fees ever</a></h3>
                        <p>Transparent pricing from design to delivery. The quote you receive is the final price - no fraudulent "upgrade" charges.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__search-by-place-area section-bg-1 pt-60 pb-60" data-bs-bg="img/bg/20.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center---">
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
                                <h4><a href="#" tabindex="0">J-Pull</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="#" tabindex="0">J-Pull</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="#" tabindex="0">J-Pull</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="#" tabindex="0">J-Pull</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="#" tabindex="0">J-Pull</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="#" tabindex="0">Delivery was exactly on schedule</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide42">
                        <div class="ltn__search-by-place-item">
                            <div class="search-by-place-info">
                                <h4><a href="#" tabindex="0">Communication was fantastic</a></h4>
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

<div class="ltn__feature-area section-bg-0 pt-60 pb-60 mb-60---">
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
                        <h5 class="animated fadeIn"><a href="#">Get your free design and quote - No obligation</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            
        });
    </script>
@endsection