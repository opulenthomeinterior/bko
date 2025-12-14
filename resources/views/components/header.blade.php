<?php
    use App\Models\Category;
    use App\Models\Style;
?>
{{-- HEADER AREA START --}}
<header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">

    
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky section-bg-1" style="border-bottom: 1px solid #febd49">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('images/bko-black-logo.png') }}" alt="Logo" style="max-height:60px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ltn__header-options ltn__header-options-2 mb-sm-20">
                        <!-- header-search-1 -->
                        <div class="header-search-wrap">
                            <div class="header-search-1">
                                <div class="search-icon">
                                    <i class="icon-search for-search-show"></i>
                                    <i class="icon-cancel  for-search-close"></i>
                                </div>
                            </div>
                            <div class="header-search-1-form">
                                <form id="#" method="get"  action="#">
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul>
                                        <li><a href="#">Sign in</a></li>
                                        <li><a href="#">Register</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- mini-cart -->
                        <div class="mini-cart-icon">
                            <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                <i class="icon-shopping-cart"></i>
                                <sup>2</sup>
                            </a>
                        </div>
                        <!-- mini-cart -->
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__header-middle-area ltn__header-sticky section-bg-0">
        <div class="container">
            <div class="row">
                <div class="col header-menu-column d-flex justify-content-end">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li class="menu-icon mega-menu-parent"><a href="{{ route('orderkitchen') }}">Explore</a>
                                        <ul class="mega-menu column-3">
                                            <div class="container px-4"><h5>Choose Style</h5></div>
                                            <li><a href="#" class="text-dark">Standard Kitchens</a>
                                                <ul>
                                                    @foreach ($styles->slice(0, 4) as $style)
                                                    <li><a href="{{ route('orderkitchenbyname', [$style->slug]) }}">{{ $style->name }} KITCHEN</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="#" class="text-dark">Premium Kitchens</a>
                                                <ul>
                                                    @foreach ($styles->slice(4, 4) as $style)
                                                    <li><a href="{{ route('orderkitchenbyname', [$style->slug]) }}">{{ $style->name }} KITCHEN</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="#" class="text-dark">Budget Kitchens</a>
                                                <ul>
                                                    @foreach ($styles->slice(8, 4) as $style)
                                                    <li><a href="{{ route('orderkitchenbyname', [$style->slug]) }}">{{ $style->name }} KITCHEN</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-icon mega-menu-parent"><a href="{{ route('orderkitchen') }}">Order Kitchen</a>
                                        <ul class="mega-menu row">
                                            <div class="col-12">
                                                <div class="container px-4"><h5>Choose Kitchen Type</h5></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="px-4"><li class="text-dark bg-light p-2">Choose Style</li></div> 
                                                <ul>
                                                    @php
                                                        $styles = Style::where('status', 1)->get();
                                                    @endphp
                                                    @if (!empty($styles))
                                                    @foreach ($styles as $index => $style)
                                                    <li class="p-2"><input data-style-id="{{$style->id}}" type="radio" value="{{$style->slug}}" name="style_name" class="radio-btn style-item me-2">{{ $style->name }} KITCHEN</li>
                                                    @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="col-4">
                                                <div class="px-4"><li class="text-dark bg-light p-2">Choose Colour</li></div> 
                                                <ul style="max-height: 320px; overflow-y: scroll">
                                                    @php 
                                                        $colours = \App\Models\Colour::distinct()->whereNotNull('finishing')->get();
                                                    @endphp
                                                    @foreach ($colours as $index => $colour)
                                                    <li class="p-2"><input data-colour-id="{{$colour->id}}" type="radio" name="colour_name" class="colour_type radio-btn colour-item colour{{$colour->id}} me-2" id="superGlossWhite" value="{{$colour->slug}}">{{$colour->trade_colour}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-4">
                                                <div class="px-4"><li class="text-dark bg-light p-2">Choose Assembly</li></div> 
                                                <ul>
                                                    @php 
                                                        $assemblies = \App\Models\Assembly::whereNot('slug', 'stock')->get();
                                                    @endphp
                                                    @foreach ($assemblies as $index => $assembly)
                                                    <li class="p-2"><input data-assembly-id="{{$assembly->id}}" type="radio" value="{{$assembly->slug}}" name="assembly_name" class="assembly_type assembly-item radio-btn me-2">{{$assembly->name}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="col-12">
                                                <div class="px-4 pb-3 d-flex justify-content-center">
                                                    <a href="{{ route('orderkitchen') }}" id="order-kitchen-btn" class="btn btn-default text-black w-75" style="background-color: #febd49; font-weight: 600; clip-path: polygon(50% 15%, 60% 0, 100% 0, 100% 100%, 0 100%, 0 0, 40% 0);">Order Kitchen</a>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="menu-icon"><a href="#">Order Component</a>
                                        <ul>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="#">Shop Grid</a></li>
                                            <li><a href="#">Shop Left sidebar</a></li>
                                            <li><a href="#">Shop right sidebar</a></li>
                                            <li><a href="#">Shop details </a></li>
                                            <li><a href="#">Other Pages <span class="float-right">>></span></a>
                                                <ul>
                                                    <li><a href="#">Cart</a></li>
                                                    <li><a href="#">Wishlist</a></li>
                                                    <li><a href="#">Checkout</a></li>
                                                    <li><a href="#">Order Tracking</a></li>
                                                    <li><a href="#">My Account</a></li>
                                                    <li><a href="#">Sign in</a></li>
                                                    <li><a href="#">Register</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-icon"><a href="#">Help & Guides</a>
                                        <ul>
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">News Grid</a></li>
                                            <li><a href="#">News Left sidebar</a></li>
                                            <li><a href="#">News Right sidebar</a></li>
                                            <li><a href="#">News details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Max Storage</a></li>
                                    <li><a href="#">Doors Replacement</a></li>
                                    <li><a href="#">Design Service</a></li>
                                    <li><a href="#">Blogs</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->

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
                    <a href="#"><img src="{{ asset('img/product/1.png') }}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Wheel Bearing Retainer</a></h6>
                    <span class="cart-quantity">1 x <span class="price">£120.00</span></span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('img/product/2.png') }}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Brake Shoe</a></h6>
                    <span class="cart-quantity">1 x <span class="price">£80.00</span></span>
                </div>
            </div>
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-total">
                <h5>Subtotal: <span>£200.00</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="#" class="btn theme-btn-1 btn-effect-1">View Cart</a>
                <a href="#" class="btn theme-btn-2 btn-effect-2">Checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/bko-black-logo.png') }}" alt="Logo" style="max-height:60px;"></a>
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
                <li><a href="{{ route('home') }}">Home</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('home') }}">Home Style 01</a></li>
                        <li><a href="#">Home Style 02</a></li>
                        <li><a href="#">Home Style 03</a></li>
                        <li><a href="#">Home Style 04</a></li>
                        <li><a href="#">Home Style 05 <span class="menu-item-badge">video</span></a></li>
                        <li><a href="#">Home Style 06</a></li>
                        <li><a href="#">Home Style 07</a></li>
                        <li><a href="#">Home Style 08</a></li>
                        <li><a href="#">Home Style 09</a></li>
                        <li><a href="#">Home Style 10 <span class="menu-item-badge">Map</span></a></li>
                        <li><a href="#">Home Style 11</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a>
                    <ul class="sub-menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Service Details</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Portfolio - 02</a></li>
                        <li><a href="#">Portfolio Details</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Team Details</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Google Map Locations</a></li>
                    </ul>
                </li>
                <li><a href="#">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Shop Grid</a></li>
                        <li><a href="#">Shop Left sidebar</a></li>
                        <li><a href="#">Shop right sidebar</a></li>
                        <li><a href="#">Shop details </a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Order Tracking</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </li>
                <li><a href="#">News</a>
                    <ul class="sub-menu">
                        <li><a href="#">News</a></li>
                        <li><a href="#">News Grid</a></li>
                        <li><a href="#">News Left sidebar</a></li>
                        <li><a href="#">News Right sidebar</a></li>
                        <li><a href="#">News details</a></li>
                    </ul>
                </li>
                <li><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Portfolio - 02</a></li>
                        <li><a href="#">Portfolio Details</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Team Details</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Add Listing</a></li>
                        <li><a href="#">Google Map Locations</a></li>
                        <li><a href="#">404</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="#">Coming Soon</a></li>
                    </ul>
                </li>
                <li><a href="">Contact</a></li>
                <li><a href="">Explore Kitchen</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="#" title="Search" class="ltn__utilize-toggle">
                        <i class="icon-search"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="User" class="ltn__utilize-toggle">
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="Wishlist" class="ltn__utilize-toggle">
                        <i class="icon-heart"></i>
                    </a>
                </li>
                <li>
                    <a href="#ltn__utilize-cart-menu" title="Cart" class="ltn__utilize-toggle">
                        <i class="icon-shopping-cart"></i>
                        <sup>2</sup>
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons">
            <ul>
                <li>
                    <a href="tel:+123456789" title="Call" class="ltn__utilize-toggle">
                        <i class="icon-phone"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="Mail" class="ltn__utilize-toggle">
                        <i class="icon-mail"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->
