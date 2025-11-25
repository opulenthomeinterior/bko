@extends('frontend.layouts.app')
@section('content')
@section('styles')
<style>
    /* Minimal, embedded styles to keep layout readable while remaining a single HTML file */
    .product-card { max-width:360px; border:1px solid #e6e6e6; padding:16px; border-radius:6px; }
    .option-box { border:1px solid #ddd; padding:10px; border-radius:4px; min-height:60px; background:#fafafa; }
    .calculator { border:1px solid #eee; padding:8px; border-radius:4px; }
    .calculator input[type="text"] { width:100%; padding:8px; box-sizing:border-box; margin-bottom:8px; }
    .muted { color:#666; font-size:13px; margin:12px 0; }
    .purchase-row { display:flex; gap:8px; margin-bottom:10px; }
    .purchase-row .col { flex:1; }
    .sample-note { text-align:center; margin-top:14px; color:#333; font-weight:600; }
    img.sample-ref { width:100%; border-radius:4px; margin-bottom:12px; object-fit:cover; }
  </style>
@endsection

<!-- Utilize Cart Menu Start -->
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('assets/img/product/1.png') }}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Wheel Bearing Retainer</a></h6>
                    <span class="mini-cart-quantity">1 x $65.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('assets/img/product/2.png') }}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">3 Rooms Manhattan</a></h6>
                    <span class="mini-cart-quantity">1 x $85.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('assets/img/product/3.png') }}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">OE Replica Wheels</a></h6>
                    <span class="mini-cart-quantity">1 x $92.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('assets/img/product/4.png') }}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Shock Mount Insulator</a></h6>
                    <span class="mini-cart-quantity">1 x $68.00</span>
                </div>
            </div>
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>$310.00</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>

    </div>
</div>
<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home Style 01</a></li>
                        <li><a href="index-2.html">Home Style 02</a></li>
                        <li><a href="index-3.html">Home Style 03</a></li>
                        <li><a href="index-4.html">Home Style 04</a></li>
                        <li><a href="index-5.html">Home Style 05 <span class="menu-item-badge">video</span></a></li>
                        <li><a href="index-6.html">Home Style 06</a></li>
                        <li><a href="index-7.html">Home Style 07</a></li>
                        <li><a href="index-8.html">Home Style 08</a></li>
                        <li><a href="index-9.html">Home Style 09</a></li>
                        <li><a href="index-10.html">Home Style 10 <span class="menu-item-badge">Map</span></a></li>
                        <li><a href="index-11.html">Home Style 11</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="locations.html">Google Map Locations</a></li>
                    </ul>
                </li>
                <li><a href="#">Property</a>
                    <ul class="sub-menu">
                        <li><a href="shop.html">Property Grid</a></li>
                        <li><a href="shop-list.html">Property List</a></li>
                        <li><a href="shop-grid.html">Property No Sidebar</a></li>
                        <li><a href="shop-left-sidebar.html">Property Left sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Property right sidebar</a></li>
                        <li><a href="product-details.html">Property details </a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="order-tracking.html">Order Tracking</a></li>
                        <li><a href="account.html">My Account</a></li>
                        <li><a href="login.html">Sign in</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </li>
                <li><a href="#">News</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">News</a></li>
                        <li><a href="blog-grid.html">News Grid</a></li>
                        <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                        <li><a href="blog-details.html">News details</a></li>
                    </ul>
                </li>
                <li><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="history.html">History</a></li>
                        <li><a href="add-listing.html">Add Listing</a></li>
                        <li><a href="locations.html">Google Map Locations</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="account.html" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="far fa-user"></i>
                        </span>
                        My Account
                    </a>
                </li>
                <li>
                    <a href="wishlist.html" title="Wishlist">
                        <span class="utilize-btn-icon">
                            <i class="far fa-heart"></i>
                            <sup>3</sup>
                        </span>
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="cart.html" title="Shoping Cart">
                        <span class="utilize-btn-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <sup>5</sup>
                        </span>
                        Shoping Cart
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>

<!-- SLIDER AREA START (slider-11) -->
<div class="ltn__slider-area ltn__slider-11 ltn__slider-11-slide-item-count-show--- ltn__slider-11-pagination-count-show--- section-bg-1">
    <div class="ltn__slider-11-inner">
        <div class="ltn__slider-11-active">
            <!-- slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3 ltn__slide-item-11">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> BUY TILES ONLINE</h6>
                                        <h1 class="slide-title animated "><span>Best</span> of both worlds</h1>
                                        <div class="slide-brief animated">
                                            <p>The Best-Selling tile in UK. Guaranteed on-time, damage free delivery</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="#" class="theme-btn-1 btn btn-effect-1">Buy now & Get 10% OFF</a>
                                            <a href="#" class="theme-btn-2 btn btn-effect-2">Order your free sample</a>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="#" class="btn btn-effect-1">Damage free guarantee</a>
                                            <a href="#" class="btn btn-effect-2">Next day delivery available</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{ asset('assets/img/slider/61.jpg') }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3 ltn__slide-item-11">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                        <h1 class="slide-title animated ">Find Your Dream <br> House By Us</h1>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="service.html" class="theme-btn-1 btn btn-effect-1">OUR SERVICES</a>
                                            <a href="about.html" class="btn btn-transparent btn-effect-3">LEARN MORE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{ asset('assets/img/slider/62.jpg') }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3 ltn__slide-item-11">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                        <h1 class="slide-title animated ">Find Your Dream <br> House By Us</h1>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="service.html" class="theme-btn-1 btn btn-effect-1">OUR SERVICES</a>
                                            <a href="about.html" class="btn btn-transparent btn-effect-3">LEARN MORE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{ asset('assets/img/slider/63.jpg') }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3 ltn__slide-item-11">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                        <h1 class="slide-title animated ">Find Your Dream <br> House By Us</h1>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="service.html" class="theme-btn-1 btn btn-effect-1">OUR SERVICES</a>
                                            <a href="about.html" class="btn btn-transparent btn-effect-3">LEARN MORE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{ asset('assets/img/slider/64.jpg') }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-4-pagination -->
        <div class="ltn__slider-11-pagination-count">
            <span class="count"></span>
            <span class="total"></span>
        </div>
        <!-- slider-sticky-icon -->
        <div class="slider-sticky-icon-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
        <!-- slider-4-img-slide-arrow -->
        <div class="ltn__slider-11-img-slide-arrow">
            <div class="ltn__slider-11-img-slide-arrow-inner">
                <div class="ltn__slider-11-img-slide-arrow-active">
                    <div class="image-slide-item">
                        <img src="{{ asset('assets/img/slider/61.jpg') }}" alt="Flower Image">
                    </div>
                    <div class="image-slide-item">
                        <img src="{{ asset('assets/img/slider/62.jpg') }}" alt="Flower Image">
                    </div>
                    <div class="image-slide-item">
                        <img src="{{ asset('assets/img/slider/63.jpg') }}" alt="Flower Image">
                    </div>
                    <div class="image-slide-item">
                        <img src="{{ asset('assets/img/slider/64.jpg') }}" alt="Flower Image">
                    </div>
                </div>
                <!-- slider-4-slide-item-count -->
                <div class="ltn__slider-11-slide-item-count">
                    <span class="count"></span>
                    <span class="total"></span>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- SLIDER AREA END -->

<div class="ltn__feature-area section-bg-1--- pt-115 pb-90 mb-120---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h1 class="section-title">Tired of broken tiles, Late Deliveries and Poor Services?</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter---  justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house"></i></span> -->
                        <img src="img/icons/icon-img/21.png" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="service-details.html">Zero damage guarantee</a></h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 active">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house-3"></i></span> -->
                        <img src="img/icons/icon-img/22.png" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="service-details.html">On Time, Every Time</a></h3>
                        <p>Choose your delivery slot and get live tracking updates</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-deal-1"></i></span> -->
                        <img src="img/icons/icon-img/23.png" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="service-details.html">Expert Help</a></h3>
                        <p>Real tiles experts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__about-us-area section-bg-1 pt-120 pb-90 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-30">
                        <h1 class="section-title">Product Details</h1>
                        <div>
                            <img src="{{ asset('assets/img/product/1.png') }}" alt="">
                        </div>
                    </div>
                    <ul class="ltn__list-item-2 ltn__list-item-2-before--- ltn__list-item-2-img mb-50 d-flex justify-content-center">
                        <li>
                            <a href="{{asset('assets/img/img-slide/11.jpg')}}" data-rel="lightcase:myCollection">
                                <img src="{{asset('assets/img/img-slide/11.jpg')}}" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/img-slide/11.jpg')}}" data-rel="lightcase:myCollection">
                                <img src="{{asset('assets/img/img-slide/11.jpg')}}" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/img-slide/11.jpg')}}" data-rel="lightcase:myCollection">
                                <img src="{{asset('assets/img/img-slide/11.jpg')}}" alt="Image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-right">
                    <h5>Product Specification</h5>

                    <div class="product-card" role="region" aria-label="Product purchase options">
    <!-- Optional image reference (uses uploaded local path) -->
    <img class="sample-ref" src="/mnt/data/0573f554-930e-4319-a36e-378731ccea98.png" alt="Product panel reference">

    <!-- Size / Options / Calculator -->
    <div class="row" style="align-items:flex-start;">
      <div class="col" style="flex:0 0 40%;">
        <label>Size</label>
        <div class="option-box">—</div>

        <label style="margin-top:10px;">Material</label>
        <div class="option-box">uuc</div>

        <label style="margin-top:10px;">Finish</label>
        <div class="option-box">—</div>
      </div>

      <div class="col" style="flex:0 0 30%;">
        <label>Squ</label>
        <div class="option-box">uuc<br>Fibrele</div>
      </div>

      <div class="col" style="flex:0 0 30%;">
        <label>Calculator</label>
        <div class="calculator" aria-label="calculator">
          <input type="text" placeholder="Enter sQur" aria-label="Calculator input">
          <div style="display:flex; gap:6px;">
            <input type="text" value="Both Dators" readonly style="flex:1; padding:8px; border:1px solid #ddd; border-radius:4px;">
            <input type="text" value="Thick ness" readonly style="flex:1; padding:8px; border:1px solid #ddd; border-radius:4px;">
          </div>
        </div>
      </div>
    </div>

    <!-- Additional product details -->
    <label>Slip Rating</label>
    <div class="option-box">—</div>

    <label style="margin-top:10px;">Thickness</label>
    <div class="option-box">—</div>

    <p class="muted">All tiles for this order are guaranteed to come from the same production batch.</p>

    <!-- Purchase Options -->
    <h3 style="font-size:16px; margin:12px 0 8px;">Purchase Options</h3>

    <div class="purchase-row" style="margin-bottom:12px;">
      <div class="col">
        <label for="quantity">Quantity</label>
        <select id="quantity" name="quantity" aria-label="Choose quantity">
          <option>Choose quantity in boxes</option>
          <option>1 box</option>
          <option>2 boxes</option>
          <option>3 boxes</option>
          <option>4 boxes</option>
        </select>
      </div>

      <div class="col">
        <label for="finish-color">Finish/Colour</label>
        <select id="finish-color" name="finish-color" aria-label="Finish or colour">
          <option>Ee-d.</option>
          <option>Matte</option>
          <option>Gloss</option>
          <option>Textured</option>
        </select>
      </div>
    </div>

    <div style="margin-bottom:8px;">
      <button class="btn" type="button" aria-label="Add to basket">★ ADD TO BASKET</button>
    </div>

    <p class="sample-note">Still Undecided? Order Your Generous, Free Sample Today!</p>
  </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection