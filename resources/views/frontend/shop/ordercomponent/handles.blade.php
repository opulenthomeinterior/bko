@extends('layouts.guest2')

@section('title', 'Order Components | Buy Kitchen Online')

@section('meta_description', 'Read customer reviews and Components about our kitchen design and installation services.')

@section('styles')
<style>
    .backgroundimage {
        background-image: url("{{ asset('images/order-component.jpg') }}");
        background-size: cover;
        background-position: center center;
    }
</style>
@endsection

@section('content')
    {{-- Breadcrumb --}}
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-1 ltn__breadcrumb-color-white--- pt-35 pb-35 backgroundimage mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title text-white p-3 w-50" style="background-color: #000000a1">{{strtoupper($slug)}}</h1>
                        <!-- <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}" class="text-white"><span class="text-dark"><i class="fas fa-home text-white"></i></span> Home</a></li>
                                <li class="text-white">Order Components</li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Left Heading + Right Form Section --}}
    <div class="ltn__about-us-area pt-60 pt-md-80 pb-60 pb-md-80 section-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="about-us-info-wrap">
                        <div class="mb-20">
                            <h1 class="section-title">SEAMLESS REPAIRS • BEAUTIFUL RESULTS</h1>
                            <p>The doors are the first impression of your kitchen. You can transform your kitchen by availing our kitchen cupboard and cabinet door replacement offer. By selecting from our various colors and finishes you will give your kitchen a new life. Our doors are the essence of style and durability, creating an elegant look. 
Buy Kitchen Online  offers a wide range of kitchen doors in various sizes to suit your needs. Our replacement kitchen doors are available in different height and width dimensions, ensuring a perfect fit for your kitchen.
The standard size, commonly used, is 715 x 496mm. For larger requirements, we provide doors up to 1965 x 596mm, while the smallest size available is 110 x 596mm. With this extensive selection, you can easily find the right door to upgrade or replace your kitchen cupboard & cabinet doors.</p>
                        </div>
                        <!-- <ul class="ltn__list-item-half ltn__list-item-half-2 list-item-margin clearfix">
                            <li>
                                <i class="icon-done"></i>
                                Living rooms are pre-wired for Surround
                            </li>
                            <li>
                                <i class="icon-done"></i>
                                Luxurious interior design and amenities
                            </li>
                            <li>
                                <i class="icon-done"></i>
                                Nestled in the Buckhead Vinings communities
                            </li>
                            <li>
                                <i class="icon-done"></i>
                                Private balconies with stunning views
                            </li>
                            <li>
                                <i class="icon-done"></i>
                                A rare combination of inspired architecture
                            </li>
                            <li>
                                <i class="icon-done"></i>
                                Outdoor grilling with dining court
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Full-width Image with Text Overlay Section --}}
    <!-- <div class="ltn__slider-area pt-60 pt-md-80 pb-60 pb-md-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative overflow-hidden rounded-3" style="max-height: 320px;">
                        <img src="{{ asset('images/homepage.jpeg') }}" alt="J-Pull Kitchen" class="img-fluid w-100" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute start-0" style="top: 18px; left: 18px; max-width: 380px;">
                            <div style="background: rgba(255,255,255,0.7); backdrop-filter: blur(6px); padding: 14px 18px; border-radius: 10px;">
                                <h3 class="fw-bold mb-1 text-dark" style="font-size: 22px;">Fingerprints, Scratches, &amp; Clutter?</h3>
                                <h5 class="fw-bold mb-1 text-dark" style="font-size: 16px;">J-Pull 22's Handleless Design Keeps Your Kitchen Pristine.</h5>
                                <p class="mb-0 text-dark" style="font-size: 14px;">Smooth, easy-to-clean surfaces with a modern handleless look, perfect for busy family kitchens.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- SHOP SECTION START -->
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        <!-- Advance Information widget -->
                        <form method="GET" id="filterForm">
                            <div class="widget ltn__menu-widget">
                                <div class="d-flex justify-content-between">
                                    <h4 class="ltn__widget-title">
                                        Types
                                    </h4>
                                    <a href="{{ request()->fullUrlWithQuery(['type_id' => null, 'page' => 1]) }}" class="text-decoration-underline">Clear</a>
                                </div>
                                <ul style="height: 200px; overflow-y: scroll">
                                    @foreach ($types as $typeKey => $type)
                                        <li>
                                            <label class="checkbox-item">
                                                {{ $type->name }}
                                                <input
                                                    type="radio"
                                                    name="type_id"
                                                    value="{{ $type->id }}"
                                                    {{ request('type_id') == $type->id ? 'checked' : '' }}
                                                    onchange="this.form.submit();"
                                                >
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            {{-- Preserve other filters --}}
                            @foreach(request()->except(['type_id', 'page']) as $type_id_key => $value)
                                <input type="hidden" name="{{ $type_id_key }}" value="{{ $value }}">
                            @endforeach
                        </form>
                        <form method="GET" id="filterForm">
                            <div class="widget ltn__menu-widget">
                                <div class="d-flex justify-content-between">
                                    <h4 class="ltn__widget-title">
                                        Colours
                                    </h4>
                                    <a href="{{ request()->fullUrlWithQuery(['colour_id' => null, 'page' => 1]) }}" class="text-decoration-underline">Clear</a>
                                </div>
                                <ul style="height: 200px; overflow-y: scroll">
                                    @foreach ($colours as $colourKey => $colour)
                                        <li>
                                            <label class="checkbox-item">
                                                {{ $colour->trade_colour ? $colour->trade_colour : $colour->name }}
                                                <input
                                                    type="radio"
                                                    name="colour_id"
                                                    value="{{ $colour->id }}"
                                                    {{ request('colour_id') == $colour->id ? 'checked' : '' }}
                                                    onchange="this.form.submit();"
                                                >
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            {{-- Preserve other filters --}}
                            @foreach(request()->except(['colour_id', 'page']) as $colour_id_key => $value)
                                <input type="hidden" name="{{ $colour_id_key }}" value="{{ $value }}">
                            @endforeach
                        </form>
                        <form method="GET" id="filterForm">
                            <div class="widget ltn__menu-widget">
                                <div class="d-flex justify-content-between">
                                    <h4 class="ltn__widget-title">
                                        Heights
                                    </h4>
                                    <a href="{{ request()->fullUrlWithQuery(['height' => null, 'page' => 1]) }}" class="text-decoration-underline">Clear</a>
                                </div>
                                <ul style="height: 200px; overflow-y: scroll">
                                    @foreach ($heights as $heightKey => $height)
                                        <li>
                                            <label class="checkbox-item">
                                                {{ $height->height }}
                                                <input
                                                    type="radio"
                                                    name="height"
                                                    value="{{ $height->height }}"
                                                    {{ request('height') == $height->height ? 'checked' : '' }}
                                                    onchange="this.form.submit();"
                                                >
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            {{-- Preserve other filters --}}
                            @foreach(request()->except(['height', 'page']) as $height_key => $value)
                                <input type="hidden" name="{{ $height_key }}" value="{{ $value }}">
                            @endforeach
                        </form>
                        <form method="GET" id="filterForm">
                            <div class="widget ltn__menu-widget">
                                <div class="d-flex justify-content-between">
                                    <h4 class="ltn__widget-title">
                                        Widths
                                    </h4>
                                    <a href="{{ request()->fullUrlWithQuery(['width' => null, 'page' => 1]) }}" class="text-decoration-underline">Clear</a>
                                </div>
                                <ul style="height: 200px; overflow-y: scroll">
                                    @foreach ($widths as $widthKey => $width)
                                        <li>
                                            <label class="checkbox-item">
                                                {{ $width->width }}
                                                <input
                                                    type="radio"
                                                    name="width"
                                                    value="{{ $width->width }}"
                                                    {{ request('width') == $width->width ? 'checked' : '' }}
                                                    onchange="this.form.submit();"
                                                >
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            {{-- Preserve other filters --}}
                            @foreach(request()->except(['width', 'page']) as $width_key => $value)
                                <input type="hidden" name="{{ $width_key }}" value="{{ $value }}">
                            @endforeach
                        </form>
                    </aside>
                </div>
                <div class="col-lg-8">
                    {{ $products->appends(request()->query())->links() }}
                    <div class="row mt-5">
                        <!-- ltn__product-item -->
                        @foreach ($products as $index => $product)
                        <div class="col-xl-6 col-sm-6 col-12">
                            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                <div class="product-img">
                                    <a href="#"><img src="{{ !empty($product->image_path) ? asset('imgs/products/'.$product->image_path) : asset('images/no-image-available.jpg') }}" alt="#"></a>
                                    <div class="real-estate-agent">
                                        <div class="agent-img">
                                            <!-- <a href="#"><img src="{{ asset('img/blog/author.jpg') }}" alt="#"></a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h2 class="product-title"><a href="#">{{ \Str::limit($product->full_title, 20) }}</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="#" class="bg-light p-2"><i class="flaticon-pin"></i>{{$product->related_products_count > 0 ? $product->related_products_count : '1'}} available colour/s</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        @if (!empty($product->height) && !empty($product->width))
                                        <li class="bg-light p-2">{{$product->height}} x {{$product->width}}</li>
                                        @endif
                                        <li>
                                            <div class="product-price">
                                                <span>£{{$product->price}}</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="product-hover-action">
                                        <ul>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_compare_modal">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <button class="btn btn-warning p-2 w-100 mt-2 add-to-cart" onclick="inputQty(document.querySelector('#quantity{{ $product->id }}').value, '{{ $product->id }}', '{{ $product->product_code }}', '{{ $product->full_title }}', {{ $product->price }}, {{ $product->discounted_price }}, {{ $product->discounted_percentage ?? 0 }}, '{{ $product->ParentCategory->slug }}','{{ $product->image_path }}')">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- ltn__product-item -->
                    </div>
                    {{ $products->appends(request()->query())->links() }}
                    <!-- <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination">
                            <ul>
                                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

    <!-- TESTIMONIALS SECTION START -->
    <div id="testimonials-section" class="ltn__testimonial-area section-bg-1 pt-90 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-40">
                    <h3 class="text-uppercase fw-bolder text-dark mb-10">FACT, EVERYONE LOVES US</h3>
                    <p>Real experiences from homeowners who trusted Buy Kitchen Online with their dream kitchens.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4 box-shadow-1 bg-white">
                        <div class="ltn__testimoni-info">
                            <p>"I discovered BKO Kitchen through a colleague. From the free consultation call to final installation of my shaker kitchen, everything was outstanding. Highly recommended!"</p>
                        </div>
                        <div class="ltn__testimoni-info-inner d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Jamie</h5>
                                <small>Shaker Kitchen Installation</small>
                            </div>
                            <div class="product-ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4 box-shadow-1 bg-white">
                        <div class="ltn__testimoni-info">
                            <p>"I ordered a grey sink, tap and tall L-shaped corner unit. Delivery was on time and quality was better than expected, with very reasonable prices. Perfect blend of quality and affordability."</p>
                        </div>
                        <div class="ltn__testimoni-info-inner d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Sarah</h5>
                                <small>Components Order</small>
                            </div>
                            <div class="product-ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4 box-shadow-1 bg-white">
                        <div class="ltn__testimoni-info">
                            <p>"BKO transformed my small space into a stunning handleless kitchen. Their precision, design sense and installation team made the whole process smooth and stress-free."</p>
                        </div>
                        <div class="ltn__testimoni-info-inner d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Ahmed</h5>
                                <small>Handleless Kitchen</small>
                            </div>
                            <div class="product-ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIALS SECTION END -->

    <!-- FAQS SECTION START -->
    <div id="faqs-section" class="ltn__faq-area pt-90 pb-90 mb-100">
        <div class="container">
            <div class="row justify-content-center mb-40">
                <div class="col-lg-8 col-12 text-center">
                    <h3 class="text-uppercase fw-bolder text-dark mb-10">Frequently Asked Questions</h3>
                    <p>Answers to common questions about affordable units, bespoke designer kitchens and our process.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="ltn__faq-inner ltn__faq-inner-2">
                        <div id="bkoFaqAccordion">
                            <!-- card 1 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
                                    What is the difference between an affordable kitchen unit and a custom kitchen unit?
                                </h6>
                                <div id="faq1" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>An affordable kitchen unit offers budget-friendly solutions without compromising quality. Custom kitchen units are tailor-made to your style, space and preferences, usually at a higher price point.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 2 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq2" aria-expanded="false">
                                    How is a bespoke designer kitchen different from a standard kitchen?
                                </h6>
                                <div id="faq2" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Standard kitchens come in preset sizes and designs. A bespoke designer kitchen is custom-made for you, including layout, materials and overall aesthetic tailored to your home.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 3 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title"indr-toggle="collapse" data-target="#faq3" aria-expanded="false">
                                    Can Iresso use affordable kitchen units for a renovation?
                                </h6>
                                <div id="faq3" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes. Affordable kitchen units are ideal when renovating on a budget. At Buy Kitchen Online even our budget-friendly options use quality materials and craftsmanship.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 4 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq4" aria-expanded="false">
                                    What is the process of designing custom kitchen units?
                                </h6>
                                <div id="faq4" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>We start with an in-depth consultation, discuss your style and functionality needs, measure your space and then create a unique design proposal for your kitchen.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 5 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq5" aria-expanded="false">
                                    Can a designer kitchen increase the value of my property?
                                </h6>
                                <div id="faq5" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes. A well-designed luxury kitchen adds both aesthetic appeal and functionality, which can significantly increase the value and desirability of your property.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 6 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq6" aria-expanded="false">
                                    Are there any affordable kitchen units available that offer customization?
                                </h6>
                                <div id="faq6" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes, Buy Kitchen Online allows you to customize a budget-friendly kitchen unit to some extent. You get a personalized kitchen at an affordable price.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 7 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq7" aria-expanded="false">
                                    How much does a designer kitchen unit cost?
                                </h6>
                                <div id="faq7" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>The entire cost of a designer kitchen depends on many different factors like materials, size, and design complexity. However, Buy Kitchen Online offers premium quality at affordable prices for various budgets.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 8 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq8" aria-expanded="false">
                                    Can Buy Kitchen Online design a custom kitchen unit to fit my small physical space?
                                </h6>
                                <div id="faq8" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Absolutely! The experts at Buy Kitchen Online specialize in building kitchen units according to your available space and lifestyle.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 9 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq9" aria-expanded="false">
                                    Does Buy Kitchen Online offer any flexible financing options for kitchen units?
                                </h6>
                                <div id="faq9" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes, Buy Kitchen Online aims to make your dream kitchen a reality by offering different financing options. Please get in touch with us for any further details.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 10 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq10" aria-expanded="false">
                                    Which materials are used to make a kitchen unit?
                                </h6>
                                <div id="faq10" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>The most popular materials include stainless steel, quartz, and wood (such as oak, maple, and cherry). Buy Kitchen Online helps you in choosing the perfect material according to your preference.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 11 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq11" aria-expanded="false">
                                    Is a bespoke designer kitchen worth it?
                                </h6>
                                <div id="faq11" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Bespoke kitchens are worth it if you prefer customized, high-quality, long-lasting kitchens. The price may be higher than a standard kitchen, but the advantages of having a kitchen custom-made for your space and style are worth the investment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQS SECTION END -->

@endsection

@section('scripts')

<script>
$(document).ready(function() {
    alert();
});
</script>
@endsection