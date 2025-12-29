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
    .quantity-group {
        width: 110px; /* controls overall size */
    }

    .quantity-input {
        padding: 2px 4px;
        font-size: 13px;
    }
    
    input[type="number"] {
        padding: 0px !important;
        margin: 0px !important;
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
                        <h1 class="page-title text-white p-3 w-75" style="background-color: #000000a1">{{strtoupper($slug)}}</h1>
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
                            <p>The doors are the first impression of your kitchen. You can transform your kitchen by availing our kitchen cupboard and cabinet door replacement offer. By selecting from our various colors and finishes you will give your kitchen a new life. Our doors are the essence of style and durability, creating an elegant look. Buy Kitchen Online  offers a wide range of kitchen doors in various sizes to suit your needs. Our replacement kitchen doors are available in different height and width dimensions, ensuring a perfect fit for your kitchen. The standard size, commonly used, is 715 x 496mm. For larger requirements, we provide doors up to 1965 x 596mm, while the smallest size available is 110 x 596mm. With this extensive selection, you can easily find the right door to upgrade or replace your kitchen cupboard & cabinet doors.</p>
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
                                        Styles
                                    </h4>
                                    <a href="{{ request()->fullUrlWithQuery(['style_id' => null, 'page' => 1]) }}" class="text-decoration-underline">Clear</a>
                                </div>
                                <ul style="height: 200px; overflow-y: scroll">
                                    @foreach ($styles as $styleKey => $style)
                                        <li>
                                            <label class="checkbox-item">
                                                {{ $style->name }}
                                                <input
                                                    type="radio"
                                                    name="style_id"
                                                    value="{{ $style->id }}"
                                                    {{ request('style_id') == $style->id ? 'checked' : '' }}
                                                    onchange="this.form.submit();"
                                                >
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            {{-- Preserve other filters --}}
                            @foreach(request()->except(['style_id', 'page']) as $style_id_key => $value)
                                <input type="hidden" name="{{ $style_id_key }}" value="{{ $value }}">
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
                                <div class="product-img" style="height: 185px;">
                                    <a href="{{route('orderbyproduct', [$product->slug, $product->serial_number])}}"><img src="{{ !empty($product->image_path) ? asset('imgs/products/'.$product->image_path) : asset('images/no-image-available.jpg') }}" alt="#"></a>
                                    <div class="real-estate-agent">
                                        <div class="agent-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h2 class="product-title"><a href="{{route('orderbyproduct', [$product->slug, $product->serial_number])}}">{{ \Str::limit($product->full_title, 20) }}</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <span class="bg-light p-2">{{$product->related_products_count > 0 ? $product->related_products_count : '1'}} available colour/s</span>
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
                                        <div class="d-flex justify-content-center bg-light p-2">
                                            <div class="mx-0 p-0">
                                                <button style="border-radius: 50px;" type="button" class="btn btn-outline-warning px-3 py-1 me-1 quantity-btn text-dark" id="dec-btn{{ $product->id }}" onclick="decQty({{ $product->id }})">−</button>
                                            </div>
                                            <div>
                                                <input 
                                                name="quantity"
                                                type="number"
                                                class="form-control text-center quantity-input mx-0 py-1 h-100 border border-warning quantity"
                                                id="quantity{{ $product->id }}"
                                                value="0"
                                                min="1"
                                                style="border-radius: 50px;"
                                                onkeyup=""
                                                >
                                            </div>
                                            <div class="mx-0 p-0">
                                                <button style="border-radius: 50px;" type="button" class="btn btn-outline-warning px-3 py-1 ms-1 quantity-btn text-dark" onclick="incQty({{ $product->id }})">+</button>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <button class="btn btn-warning p-2 w-100 add-to-cart" onclick="inputQty(document.querySelector('#quantity{{ $product->id }}').value, '{{ $product->id }}', '{{ $product->product_code }}', '{{ $product->full_title }}', {{ $product->price }}, {{ $product->discounted_price }}, {{ $product->discounted_percentage ?? 0 }}, '{{ $product->ParentCategory->slug }}','{{ $product->image_path }}')">Add to Cart</button>
                                            </div>
                                            <div>
                                                <a class="btn btn-dark p-2 w-100 ltn__utilize-toggle" href="#ltn__utilize-cart-menu">View Cart</a>
                                            </div>
                                        </div>
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
    @include('components.testimonials-section')
    <!-- TESTIMONIALS SECTION END -->

    <!-- FAQS SECTION START -->
    @include('components.faqs-section')
    <!-- FAQS SECTION END -->

@endsection


@section('scripts')

<script>
$(document).ready(function() {

});
</script>
@endsection