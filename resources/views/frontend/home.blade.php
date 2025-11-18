@extends('frontend.layouts.app')
@section('content')

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
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> BUY KITCHEN ONLINE</h6>
                                        <h1 class="slide-title animated "><span>Best</span> of both worlds</h1>
                                        <div class="slide-brief animated">
                                            <p>The <b>Only Online Platform</b> with online value and professional survey with installation.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="#" class="theme-btn-1 btn btn-effect-1">Make An Enquiry</a>
                                            <a href="#" class="theme-btn-2 btn btn-effect-2">Order Now</a>
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

<div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-0 pt-110 pb-110 plr--9 d-none---">
    <div class="container-fluid">
        <div class="row ltn__brand-logo-active slick-initialized slick-slider">
            <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 4672px; transform: translate3d(-1460px, 0px, 0px);" role="listbox">
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true" style="width: 292px;" tabindex="-1">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/2.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" style="width: 292px;" tabindex="-1">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/3.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 292px;" tabindex="-1">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/4.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 292px;" tabindex="-1">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/5.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 292px;" tabindex="-1">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/3.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 292px;" tabindex="-1" role="option" aria-describedby="slick-slide30">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/1.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 292px;" tabindex="-1" role="option" aria-describedby="slick-slide31">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/2.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 292px;" tabindex="-1" role="option" aria-describedby="slick-slide32">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/3.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 292px;" tabindex="-1" role="option" aria-describedby="slick-slide33">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/4.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 292px;" tabindex="-1" role="option" aria-describedby="slick-slide34">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/5.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide" data-slick-index="5" aria-hidden="true" style="width: 292px;" tabindex="-1" role="option" aria-describedby="slick-slide35">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/3.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 292px;" tabindex="-1">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/1.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 292px;" tabindex="-1">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/2.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 292px;" tabindex="-1">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/3.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 292px;" tabindex="-1">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/4.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 292px;" tabindex="-1">
                        <div class="ltn__brand-logo-item">
                            <img src="{{asset('assets/img/brand-logo/5.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>

<div class="ltn__product-slider-area ltn__product-gutter section-bg-1 pt-120 pb-115 plr--7">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Properties</h6>
                    <h1 class="section-title">Featured Listings</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1 slick-initialized slick-slider slick-dotted" role="toolbar">
            <!-- ltn__product-item -->

            <!-- ltn__product-item -->

            <!-- ltn__product-item -->

            <!-- ltn__product-item -->

            <!-- ltn__product-item -->

            <!--  -->
            <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 5357px; transform: translate3d(-1461px, 0px, 0px);" role="listbox">
                    <div class="col-lg-12 slick-slide slick-cloned" style="width: 487px;" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="-1"><img src="{{asset('assets/img/product-3/3.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="-1"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="-1">Comfortable Apartment</a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="-1"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="-1">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="-1">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="-1">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="-1">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" style="width: 487px;" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="-1"><img src="{{asset('assets/img/product-3/4.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="-1"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="-1">Luxury villa in Rego Park </a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="-1"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="-1">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="-1">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="-1">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="-1">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" style="width: 487px;" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="-1"><img src="{{asset('assets/img/product-3/5.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="-1"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="-1">Beautiful Flat in Manhattan </a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="-1"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="-1">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="-1">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="-1">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="-1">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-current slick-active" style="width: 487px;" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="0"><img src="{{asset('assets/img/product-3/1.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="0"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="0"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="0"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="0">New Apartment Nice View</a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="0"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="0">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="0">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="0">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="0">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-active" style="width: 487px;" data-slick-index="1" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide01">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="0"><img src="{{asset('assets/img/product-3/2.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green---">For Sale</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="0"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="0"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="0"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="0">Modern Apartments</a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="0"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="0">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="0">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="0">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="0">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-active" style="width: 487px;" data-slick-index="2" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide02">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="0"><img src="{{asset('assets/img/product-3/3.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="0"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="0"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="0"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="0">Comfortable Apartment</a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="0"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="0">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="0">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="0">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="0">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide" style="width: 487px;" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide03">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="-1"><img src="{{asset('assets/img/product-3/4.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="-1"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="-1">Luxury villa in Rego Park </a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="-1"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="-1">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="-1">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="-1">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="-1">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide" style="width: 487px;" data-slick-index="4" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide04">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="-1"><img src="{{asset('assets/img/product-3/5.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="-1"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="-1">Beautiful Flat in Manhattan </a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="-1"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="-1">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="-1">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="-1">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="-1">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" style="width: 487px;" data-slick-index="5" id="" aria-hidden="true" tabindex="-1">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="-1"><img src="{{asset('assets/img/product-3/1.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="-1"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="-1">New Apartment Nice View</a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="-1"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="-1">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="-1">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="-1">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="-1">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" style="width: 487px;" data-slick-index="6" id="" aria-hidden="true" tabindex="-1">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="-1"><img src="{{asset('assets/img/product-3/2.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green---">For Sale</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="-1"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="-1">Modern Apartments</a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="-1"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="-1">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="-1">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="-1">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="-1">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" style="width: 487px;" data-slick-index="7" id="" aria-hidden="true" tabindex="-1">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="product-details.html" tabindex="-1"><img src="{{asset('assets/img/product-3/3.jpg')}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green">For Rent</li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="locations.html" tabindex="-1"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-img-gallery">
                                        <ul>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-camera"></i> 4</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" tabindex="-1"><i class="fas fa-film"></i> 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span>$34,900<label>/Month</label></span>
                                </div>
                                <h2 class="product-title"><a href="product-details.html" tabindex="-1">Comfortable Apartment</a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="team-details.html" tabindex="-1"><img src="img/blog/author.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="team-details.html" tabindex="-1">William Seklo</a></h6>
                                        <small>Estate Agents</small>
                                    </div>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" tabindex="-1">
                                                <i class="flaticon-expand"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal" tabindex="-1">
                                                <i class="flaticon-heart-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details.html" title="Product Details" tabindex="-1">
                                                <i class="flaticon-add"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="slick-dots" style="" role="tablist">
                <li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none" role="button" tabindex="0">1</button></li>
                <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01"><button type="button" data-role="none" role="button" tabindex="0">2</button></li>
                <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02"><button type="button" data-role="none" role="button" tabindex="0">3</button></li>
                <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation03" id="slick-slide03"><button type="button" data-role="none" role="button" tabindex="0">4</button></li>
                <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation04" id="slick-slide04"><button type="button" data-role="none" role="button" tabindex="0">5</button></li>
            </ul>
        </div>
    </div>
</div>

<div class="ltn__banner-area pt-120 section-bg-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Property</h6>
                    <h1 class="section-title">Property By Categories</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="ltn__banner-item ltn__banner-style-4 text-color-white bg-image" data-bs-bg="img/gallery/2.jpg" style="background-image: url(&quot;img/gallery/2.jpg&quot;);">
                    <div class="ltn__banner-info">
                        <h3 class="animated fadeIn"><a href="shop.html"> Apartments </a></h3>
                        <p> Great Deals Available</p>
                        <mark> 13 Listings</mark>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item ltn__banner-style-4 text-color-white bg-image" data-bs-bg="img/gallery/3.jpg" style="background-image: url(&quot;img/gallery/3.jpg&quot;);">
                    <div class="ltn__banner-info">
                        <h3 class="animated fadeIn"><a href="shop.html"> Condos </a></h3>
                        <p> Great Deals Available</p>
                        <mark> 13 Listings</mark>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item ltn__banner-style-4 text-color-white bg-image" data-bs-bg="img/gallery/7.jpg" style="background-image: url(&quot;img/gallery/7.jpg&quot;);">
                    <div class="ltn__banner-info">
                        <h3 class="animated fadeIn"><a href="shop.html"> Houses </a></h3>
                        <p> Great Deals Available</p>
                        <mark> 13 Listings</mark>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item ltn__banner-style-4 text-color-white bg-image" data-bs-bg="img/gallery/8.jpg" style="background-image: url(&quot;img/gallery/8.jpg&quot;);">
                    <div class="ltn__banner-info">
                        <h3 class="animated fadeIn"><a href="shop.html"> Retail </a></h3>
                        <p> Great Deals Available</p>
                        <mark> 13 Listings</mark>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item ltn__banner-style-4 text-color-white bg-image" data-bs-bg="img/gallery/9.jpg" style="background-image: url(&quot;img/gallery/9.jpg&quot;);">
                    <div class="ltn__banner-info">
                        <h3 class="animated fadeIn"><a href="shop.html"> Villas </a></h3>
                        <p> Great Deals Available</p>
                        <mark> 13 Listings</mark>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__feature-area pt-90 section-bg-1 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">features</h6>
                    <h1 class="section-title">Core Features</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6">
                    <div class="ltn__feature-icon">
                        <span><i class="flaticon-apartment"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="service-details.html">Smart living</a></h4>
                        <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6">
                    <div class="ltn__feature-icon">
                        <span><i class="flaticon-park"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="service-details.html">ECO Construction</a></h4>
                        <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 active">
                    <div class="ltn__feature-icon">
                        <span><i class="flaticon-maps-and-location"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="service-details.html">Atractive Location</a></h4>
                        <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6">
                    <div class="ltn__feature-icon">
                        <span><i class="flaticon-excavator"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="service-details.html">Modern Technology</a></h4>
                        <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CALL TO ACTION START (call-to-action-4) -->
<div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120 mb-120" data-bs-bg="{{asset('assets/img/bg/6.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-4 text-center">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// any question you have //</h6>
                        <h1 class="section-title white-color">897-876-987-90</h1>
                    </div>
                    <div class="btn-wrapper">
                        <a href="tel:+123456789" class="theme-btn-1 btn btn-effect-1">MAKE A CALL</a>
                        <a href="contact.html" class="btn btn-transparent btn-effect-4 white-color">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__call-to-4-img-1">
        <img src="{{asset('assets/img/slider/21.png')}}" alt="#">
    </div>
    <div class="ltn__call-to-4-img-2">
        <img src="{{asset('assets/img/bg/11.png')}}" alt="#">
    </div>
</div>
<!-- CALL TO ACTION END -->

<!-- APARTMENTS PLAN AREA START -->
<div class="ltn__apartments-plan-area pt-115--- pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2--- black-color">Apartment Sketch</h6>
                    <h1 class="section-title">Apartments Plan</h1>
                </div>
                <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center">
                    <div class="nav">
                        <a data-bs-toggle="tab" href="#liton_tab_3_1">The Studio</a>
                        <a class="active show" data-bs-toggle="tab" href="#liton_tab_3_2">Deluxe Portion</a>
                        <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Penthouse</a>
                        <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Top Garden</a>
                        <a data-bs-toggle="tab" href="#liton_tab_3_5" class="">Double Height</a>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade" id="liton_tab_3_1">
                        <div class="ltn__apartments-tab-content-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="apartments-plan-info ltn__secondary-bg--- section-bg-1 text-color-white---">
                                        <h2>The Studio</h2>
                                        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                            eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                            sed ayd minim veniam.</p>
                                        <div class="apartments-info-list apartments-info-list-color mt-40">
                                            <ul>
                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="apartments-plan-img">
                                        <img src="{{ asset('assets/img/others/10.png') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="liton_tab_3_2">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="apartments-plan-info ltn__secondary-bg--- section-bg-1 text-color-white---">
                                        <h2>Deluxe Portion</h2>
                                        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                            eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                            sed ayd minim veniam.</p>
                                        <div class="apartments-info-list apartments-info-list-color mt-40">
                                            <ul>
                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="apartments-plan-img">
                                        <img src="{{ asset('assets/img/others/10.png') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_tab_3_3">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="apartments-plan-info ltn__secondary-bg--- section-bg-1 text-color-white---">
                                        <h2>Penthouse</h2>
                                        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                            eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                            sed ayd minim veniam.</p>
                                        <div class="apartments-info-list apartments-info-list-color mt-40">
                                            <ul>
                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="apartments-plan-img">
                                        <img src="{{ asset('assets/img/others/10.png') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_tab_3_4">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="apartments-plan-info ltn__secondary-bg--- section-bg-1 text-color-white---">
                                        <h2>Top Garden</h2>
                                        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                            eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                            sed ayd minim veniam.</p>
                                        <div class="apartments-info-list apartments-info-list-color mt-40">
                                            <ul>
                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="apartments-plan-img">
                                        <img src="{{ asset('assets/img/others/10.png') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_tab_3_5">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="apartments-plan-info ltn__secondary-bg--- section-bg-1 text-color-white---">
                                        <h2>Double Height</h2>
                                        <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                            Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                            eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                            sed ayd minim veniam.</p>
                                        <div class="apartments-info-list apartments-info-list-color mt-40">
                                            <ul>
                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                <li><label>Bathroom</label> <span>45 Sq. Ft</span></li>
                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="apartments-plan-img">
                                        <img src="{{ asset('assets/img/others/10.png') }}" alt="#">
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
<!-- APARTMENTS PLAN AREA END -->

<!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area section-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1" aria-expanded="false">
                                How to buy a product?
                            </h6>
                            <div id="faq-item-2-1" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac. Mauris sit amet massa vitae tortor. Quisque id diam vel quam elementum pulvinar. Gravida in fermentum et sollicitudin ac orci phasellus. Facilisis gravida neque convallis a cras semper. Non arcu risus quis varius quam quisque id.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true">
                                How can i make refund from your website?
                            </h6>
                            <div id="faq-item-2-2" class="collapse show" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <div class="ltn__video-img alignleft">
                                        <img src="{{asset('assets/img/bg/17.jpg')}}" alt="video popup bg image">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----" href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac. Mauris sit amet massa vitae tortor. Quisque id diam vel quam elementum pulvinar. Gravida in fermentum et sollicitudin ac orci phasellus. Facilisis gravida neque convallis a cras semper. Non arcu risus quis varius quam quisque id.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false">
                                I am a new user. How should I start?
                            </h6>
                            <div id="faq-item-2-3" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac. Mauris sit amet massa vitae tortor. Quisque id diam vel quam elementum pulvinar. Gravida in fermentum et sollicitudin ac orci phasellus. Facilisis gravida neque convallis a cras semper. Non arcu risus quis varius quam quisque id.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-4" aria-expanded="false">
                                Returns and refunds
                            </h6>
                            <div id="faq-item-2-4" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac. Mauris sit amet massa vitae tortor. Quisque id diam vel quam elementum pulvinar. Gravida in fermentum et sollicitudin ac orci phasellus. Facilisis gravida neque convallis a cras semper. Non arcu risus quis varius quam quisque id.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-5" aria-expanded="false">
                                Are my details secured?
                            </h6>
                            <div id="faq-item-2-5" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac. Mauris sit amet massa vitae tortor. Quisque id diam vel quam elementum pulvinar. Gravida in fermentum et sollicitudin ac orci phasellus. Facilisis gravida neque convallis a cras semper. Non arcu risus quis varius quam quisque id.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-6" aria-expanded="false">
                                Sale code is not working
                            </h6>
                            <div id="faq-item-2-6" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac. Mauris sit amet massa vitae tortor. Quisque id diam vel quam elementum pulvinar. Gravida in fermentum et sollicitudin ac orci phasellus. Facilisis gravida neque convallis a cras semper. Non arcu risus quis varius quam quisque id.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-7" aria-expanded="false">
                                How do I make payment by my credit card
                            </h6>
                            <div id="faq-item-2-7" class="collapse" data-bs-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac. Mauris sit amet massa vitae tortor. Quisque id diam vel quam elementum pulvinar. Gravida in fermentum et sollicitudin ac orci phasellus. Facilisis gravida neque convallis a cras semper. Non arcu risus quis varius quam quisque id.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="need-support text-center mt-100">
                        <h2>Still need help? Reach out to support 24/7:</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="contact.html" class="theme-btn-1 btn">Contact Us</a>
                        </div>
                        <h3><i class="fas fa-phone"></i> +0123-456-789</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">// subscribe</h6>
                        <h4 class="ltn__widget-title">Get Newsletter</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="{{asset('assets/img/banner/banner-3.jpg')}}" alt="Banner Image"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- FAQ AREA START -->

<div class="ltn__img-slider-area">
    <div class="container-fluid">
        <div class="row ltn__image-slider-4-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all slick-initialized slick-slider"><a class="slick-prev slick-arrow" style=""><i class="fas fa-arrow-left" alt="Arrow Icon"></i></a>
            <div aria-live="polite" class="slick-list draggable" style="padding: 0px;">
                <div class="slick-track" style="opacity: 1; width: 5715px; transform: translate3d(-1143px, 0px, 0px);" role="listbox">
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true" style="width: 381px;" tabindex="-1">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/21.jpg')}}" data-rel="lightcase:myCollection" tabindex="-1">
                                <img src="{{asset('assets/img/img-slide/21.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>Heart of NYC</h6>
                                    <h1><a href="portfolio-details.html" tabindex="-1">Manhattan </a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="-1">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" style="width: 381px;" tabindex="-1">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/22.jpg')}}" data-rel="lightcase:myCollection" tabindex="-1">
                                <img src="{{asset('assets/img/img-slide/22.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>The luxury crib</h6>
                                    <h1><a href="portfolio-details.html" tabindex="-1">Upper East Side</a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="-1">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 381px;" tabindex="-1">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/23.jpg')}}" data-rel="lightcase:myCollection" tabindex="-1">
                                <img src="{{asset('assets/img/img-slide/23.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>The Best City</h6>
                                    <h1><a href="portfolio-details.html" tabindex="-1">Jersey City</a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="-1">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned slick-active" data-slick-index="-2" id="" aria-hidden="false" style="width: 381px;" tabindex="-1">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/24.jpg')}}" data-rel="lightcase:myCollection" tabindex="0">
                                <img src="{{asset('assets/img/img-slide/24.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>Friendly neighborhood</h6>
                                    <h1><a href="portfolio-details.html" tabindex="0">Queens </a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="0">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned slick-active" data-slick-index="-1" id="" aria-hidden="false" style="width: 381px;" tabindex="-1">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/22.jpg')}}" data-rel="lightcase:myCollection" tabindex="0">
                                <img src="{{asset('assets/img/img-slide/22.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>The perfect city</h6>
                                    <h1><a href="portfolio-details.html" tabindex="0">Greenville</a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="0">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-current slick-active slick-center" data-slick-index="0" aria-hidden="false" style="width: 381px;" tabindex="-1" role="option" aria-describedby="slick-slide30">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/21.jpg')}}" data-rel="lightcase:myCollection" tabindex="0">
                                <img src="{{asset('assets/img/img-slide/21.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>Heart of NYC</h6>
                                    <h1><a href="portfolio-details.html" tabindex="0">Manhattan </a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="0">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 381px;" tabindex="-1" role="option" aria-describedby="slick-slide31">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/22.jpg')}}" data-rel="lightcase:myCollection" tabindex="0">
                                <img src="{{asset('assets/img/img-slide/22.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>The luxury crib</h6>
                                    <h1><a href="portfolio-details.html" tabindex="0">Upper East Side</a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="0">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 381px;" tabindex="-1" role="option" aria-describedby="slick-slide32">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/23.jpg')}}" data-rel="lightcase:myCollection" tabindex="0">
                                <img src="{{asset('assets/img/img-slide/23.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>The Best City</h6>
                                    <h1><a href="portfolio-details.html" tabindex="0">Jersey City</a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="0">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide" data-slick-index="3" aria-hidden="true" style="width: 381px;" tabindex="-1" role="option" aria-describedby="slick-slide33">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/24.jpg')}}" data-rel="lightcase:myCollection" tabindex="-1">
                                <img src="{{asset('assets/img/img-slide/24.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>Friendly neighborhood</h6>
                                    <h1><a href="portfolio-details.html" tabindex="-1">Queens </a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="-1">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide" data-slick-index="4" aria-hidden="true" style="width: 381px;" tabindex="-1" role="option" aria-describedby="slick-slide34">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/22.jpg')}}" data-rel="lightcase:myCollection" tabindex="-1">
                                <img src="{{asset('assets/img/img-slide/22.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>The perfect city</h6>
                                    <h1><a href="portfolio-details.html" tabindex="-1">Greenville</a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="-1">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned slick-center" data-slick-index="5" id="" aria-hidden="true" style="width: 381px;" tabindex="-1">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/21.jpg')}}" data-rel="lightcase:myCollection" tabindex="-1">
                                <img src="{{asset('assets/img/img-slide/21.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>Heart of NYC</h6>
                                    <h1><a href="portfolio-details.html" tabindex="-1">Manhattan </a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="-1">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 381px;" tabindex="-1">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/22.jpg')}}" data-rel="lightcase:myCollection" tabindex="-1">
                                <img src="{{asset('assets/img/img-slide/22.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>The luxury crib</h6>
                                    <h1><a href="portfolio-details.html" tabindex="-1">Upper East Side</a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="-1">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 381px;" tabindex="-1">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/23.jpg')}}" data-rel="lightcase:myCollection" tabindex="-1">
                                <img src="{{asset('assets/img/img-slide/23.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>The Best City</h6>
                                    <h1><a href="portfolio-details.html" tabindex="-1">Jersey City</a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="-1">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 381px;" tabindex="-1">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/24.jpg')}}" data-rel="lightcase:myCollection" tabindex="-1">
                                <img src="{{asset('assets/img/img-slide/24.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>Friendly neighborhood</h6>
                                    <h1><a href="portfolio-details.html" tabindex="-1">Queens </a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="-1">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 381px;" tabindex="-1">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{asset('assets/img/img-slide/22.jpg')}}" data-rel="lightcase:myCollection" tabindex="-1">
                                <img src="{{asset('assets/img/img-slide/22.jpg')}}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>The perfect city</h6>
                                    <h1><a href="portfolio-details.html" tabindex="-1">Greenville</a></h1>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="portfolio-details.html" class="btn theme-btn-1 btn-effect-1 text-uppercase" tabindex="-1">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <a class="slick-next slick-arrow" style=""><i class="fas fa-arrow-right" alt="Arrow Icon"></i></a>
        </div>
    </div>
</div>

<div class="ltn__blog-area pt-115--- pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">News &amp; Blogs</h6>
                    <h1 class="section-title">Leatest News Feeds</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal slick-initialized slick-slider"><a class="slick-prev slick-arrow" style=""><i class="fas fa-arrow-left" alt="Arrow Icon"></i></a>
            <!-- Blog Item -->
            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4400px; transform: translate3d(-1200px, 0px, 0px);" role="listbox"><div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="-1"><img src="{{asset('assets/img/blog/3.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="-1"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="-1"><i class="fas fa-tags"></i>Estate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="-1">Recent Commercial Real Estate Transactions</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="-1"><img src="{{asset('assets/img/blog/4.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="-1"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="-1"><i class="fas fa-tags"></i>Room</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="-1">Renovating a Living Room? Experts Share Their Secrets</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-12 slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="-1"><img src="{{asset('assets/img/blog/5.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="-1"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="-1"><i class="fas fa-tags"></i>Trends</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="-1">7 home trends that will shape your house in 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-12 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide10">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="0"><img src="{{asset('assets/img/blog/1.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="0"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="0"><i class="fas fa-tags"></i>Decorate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="0">10 Brilliant Ways To Decorate Your Home</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="0">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-12 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide11">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="0"><img src="{{asset('assets/img/blog/2.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="0"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="0"><i class="fas fa-tags"></i>Interior</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="0">The Most Inspiring Interior Design Of 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="0">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-12 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="0"><img src="{{asset('assets/img/blog/3.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="0"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="0"><i class="fas fa-tags"></i>Estate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="0">Recent Commercial Real Estate Transactions</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="0">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-12 slick-slide" data-slick-index="3" aria-hidden="true" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide13">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="-1"><img src="{{asset('assets/img/blog/4.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="-1"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="-1"><i class="fas fa-tags"></i>Room</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="-1">Renovating a Living Room? Experts Share Their Secrets</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-12 slick-slide" data-slick-index="4" aria-hidden="true" style="width: 400px;" tabindex="-1" role="option" aria-describedby="slick-slide14">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="-1"><img src="{{('assets/img/blog/5.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="-1"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="-1"><i class="fas fa-tags"></i>Trends</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="-1">7 home trends that will shape your house in 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-12 slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="-1"><img src="{{asset('assets/img/blog/1.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="-1"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="-1"><i class="fas fa-tags"></i>Decorate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="-1">10 Brilliant Ways To Decorate Your Home</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-12 slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="-1"><img src="{{asset('assets/img/blog/2.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="-1"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="-1"><i class="fas fa-tags"></i>Interior</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="-1">The Most Inspiring Interior Design Of 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-12 slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 400px;" tabindex="-1">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html" tabindex="-1"><img src="{{asset('assets/img/blog/3.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#" tabindex="-1"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#" tabindex="-1"><i class="fas fa-tags"></i>Estate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title animated fadeIn"><a href="blog-details.html" tabindex="-1">Recent Commercial Real Estate Transactions</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html" tabindex="-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div>
            <!-- Blog Item -->
            
            <!-- Blog Item -->
            
            <!-- Blog Item -->
            
            <!-- Blog Item -->
            
            <!--  -->
        <a class="slick-next slick-arrow" style=""><i class="fas fa-arrow-right" alt="Arrow Icon"></i></a></div>
    </div>
</div>

<div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                    <div class="coll-to-info text-color-white">
                        <h1>Looking for a dream home?</h1>
                        <p>We help you make the dream of new house a reality</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-3 btn-white" href="contact.html">Explore Properties <i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection