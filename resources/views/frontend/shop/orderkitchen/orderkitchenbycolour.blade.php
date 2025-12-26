@extends('layouts.guest2')
@section('content')
    @section('meta_tags')
        <title>{{$title}}</title>
        <meta name="description" content="">
        <link rel="canonical" href="" />
    @endsection
    <style>
        .bg-green-color {
            background-color: #2a6161 !important;
        }
        
        .text-green-color {
            color: #2a6161 !important;
        }

        .bg-yellow{
            background-color: #febd49;
        }
        
        .nav.nav-tabs .nav-link.active
        {
            background-color: #2a6161 !important;
        }
            
        .backgroundimage {
            /* background-image: url('{{ $styleHasColour->image_path ? asset('imgs/styles/colours/' . $styleHasColour->image_path) : asset('images/order-component.jpg') }}'); */
            background-image: url('https://bkonline.uk/public/imgs/styles/colours/16_03_2025_161856_67d6f9f0eb63c-ArloGlossWhite2copy.jpg');
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

        /* force horizontal layout even if flex-wrap exists */
        .horizontal-scroll > .d-flex {
            flex-wrap: nowrap !important;
        }

        .horizontal-scroll {
            overflow-x: auto;
            overflow-y: hidden;
            width: 100%;
        }

        /* prevent items from shrinking */
        .horizontal-scroll > .d-flex > div {
            flex: 0 0 auto;
        }

        /* optional: smooth scrolling */
        .horizontal-scroll {
            scroll-behavior: smooth;
        }

        /* optional: visible scrollbar */
        .horizontal-scroll::-webkit-scrollbar {
            height: 6px;
        }
        .horizontal-scroll::-webkit-scrollbar-thumb {
            background: #bbb;
            border-radius: 10px;
        }

        .custom-dropdown {
    position: relative;
    width: 100%;
    font-family: Arial, sans-serif;
}

.dropdown-search {
    width: 100%;
    padding: 8px 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.dropdown-options {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    max-height: 200px; /* shows ~5-6 options */
    overflow-y: auto;
    border: 1px solid #ccc;
    border-top: none;
    background: #fff;
    z-index: 999;
    display: none; /* hidden by default */
    list-style: none;
    margin: 0;
    padding: 0;
}

.dropdown-option {
    padding: 8px 10px;
    cursor: pointer;
}

.dropdown-option:hover {
    background-color: #f0f0f0;
}

.bg-yellow {
    background-color: #febd49 !important;
    color: #000 !important;
}


    </style>
    
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-1 ltn__breadcrumb-color-white--- pt-35 pb-35 backgroundimage mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title text-white p-3 w-75" style="background-color: #000000a1">{{$title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__faq-inner ltn__faq-inner-2 ltn__faq-inner-3 mb-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="accordion_2" class=" section-bg-1">
                    <!-- card -->
                    <div class="card border border-default">
                        <div class="">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1" aria-expanded="true">
                                <i class="">1</i> Cabinets and Panels
                            </h6>
                        </div>
                        
                        <div id="faq-item-2-1" class="collapse show" data-bs-parent="#accordion_2">
                            <div class="card-body p-0">
                                <div class="ltn__apartments-plan-area product-details-apartments-plan mb-60 p-0 m-0">
                                    <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center--- m-0 p-2">
                                        <div class="nav">
                                            <a data-bs-toggle="tab" href="#liton_tab_3_1" class="active">Base Cabinets</a>
                                            <a class="" data-bs-toggle="tab" href="#liton_tab_3_2">Wall Cabinets</a>
                                            <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Tall Cabinets</a>
                                            <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="tab-content p-2 m-0">
                                        @if ($baseCabinets->count() > 0)
                                        @php 
                                            $baseCabinetData = $baseCabinets->first();
                                        @endphp
                                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $baseCabinetData->parent_category_id)->where('style_id', $baseCabinetData->style_id)->where('colour_id', $baseCabinetData->colour_id)->where('assembly_id', $baseCabinetData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$baseCabinetData->style?->slug, $baseCabinetData->assembly?->slug, $baseCabinetData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL BASE CABINETS</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($baseCabinetData->style) && !empty($baseCabinetData->assembly) && !empty($baseCabinetData->colour)){{route('viewallorderkitchenbycolour', ['style' => $baseCabinetData->style?->slug , 'assembly' => $baseCabinetData->assembly?->slug, 'colour' => $baseCabinetData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" placeholder="Search base cabinets...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($baseCabinets as $baseCabinet)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $baseCabinet->id }}"
                                                                        data-product-short-title="{{ $baseCabinet->short_title }}"
                                                                        data-product-fullname="{{ $baseCabinet->full_title }}"
                                                                        data-product-image="{{ !empty($baseCabinet->image_path) ? asset('imgs/products/'.$baseCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $baseCabinet->price }}"
                                                                        data-product-parent-category-slug="{{ $baseCabinet->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $baseCabinet->discounted_price }}"
                                                                        data-product-assembly-name="{{ $baseCabinet->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $baseCabinet->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $baseCabinet->product_code }}"
                                                                        data-product-dimensions="{{ $baseCabinet->dimensions }}"
                                                                        data-product-style="{{ $baseCabinet->style?->name }}"
                                                                        data-product-colour="{{ $baseCabinet->colour?->trade_colour ?? $baseCabinet->colour?->name }}"
                                                                        data-serial-number="{{ $baseCabinet->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $baseCabinet->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $baseCabinet->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $baseCabinet->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        {{--<div class="row">
                                                            <div class="col-12">
                                                                <h3 class="">{{$baseCabinetData->short_title}}</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-12">
                                                                <div class="modal-product-img">
                                                                    <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#">
                                                                </div>                                                                
                                                            </div>
                                                            <div class="col-lg-6 col-12">
                                                                <div class="modal-product-info p-0">
                                                                    <div class="product-price">
                                                                        <h6>£00.00</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="cart-plus-minus">
                                                                        <input type="text" value="0" name="qtybutton" class="cart-plus-minus-box">
                                                                    </div>
                                                                    
                                                                    <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                        <i class="fas fa-shopping-cart"></i>
                                                                        <span>ADD TO CART</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>--}}
                                                        <div class="row">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $baseCabinetData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <!-- <img src="{{ !empty($baseCabinetData->image_path) ? asset('imgs/products/'.$baseCabinetData->image_path) : asset('images/no-image-available.jpg') }}" alt="#"> -->
                                                                                <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($baseCabinetData->style)<span>{{ $baseCabinetData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($baseCabinetData->assembly)<span>{{ $baseCabinetData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($baseCabinetData->colour)<span>{{ $baseCabinetData->colour->trade_colour ? $baseCabinetData->colour->trade_colour : $baseCabinetData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($baseCabinetData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($baseCabinetData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($baseCabinetData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£00.00</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                                </div>
                                                                                <div>
                                                                                    <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span>ADD TO CART</span>
                                                                                    </a>
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
                                        @else
                                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area blog-sidebar ltn__right-sidebar">
                    <div class="widget ltn__menu-widget ltn__menu-widget-2--- ltn__menu-widget-2-color-2---">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Order Overview</h4>
                        <ul>
                            <li><a href="#">Style <span>{{ $style->name }}</span></a></li>
                            <li><a href="#">Assembly <span>{{ $assembly->name }}</span></a></li>
                            <li><a href="#">Colour  <span>{{ $colour->trade_colour ? $colour->trade_colour : $colour->name }}</span></a></li>
                        </ul>
                    </div>
                    <div class="widget ltn__top-rated-product-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Items</h4>
                        <ul id="orderKitchenCartItemsList">
                            <li>No items added yet</li>
                        </ul>
                    </div>
                    <div class="widget ltn__menu-widget ltn__menu-widget-2--- ltn__menu-widget-2-color-2---">
                        <h4 class="ltn__widget-title ltn__widget-title-border-2">Kitchen Price</h4>
                        <ul>
                            <li><h3 class="fw-bold" id="cartTotalAmount_side"></h3></li>
                            <li class="text-danger">Price includes delivery costs. Surcharges may apply.</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
        </div>
    </div>
    @endsection

@section('scripts')
<script>
jQuery(document).ready(function($) {

    // Show dropdown on focus
    $('.dropdown-search').on('focus', function() {
        $(this).siblings('.dropdown-options').slideDown(150);
    });

    // Hide dropdown if clicked outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.custom-dropdown').length) {
            $('.dropdown-options').slideUp(150);
        }
    });

    // Filter options while typing
    $('.dropdown-search').on('keyup', function() {
        var search = $(this).val().toLowerCase();
        $(this).siblings('.dropdown-options').find('.dropdown-option').each(function() {
            var text = $(this).text().toLowerCase();
            if (text.indexOf(search) > -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    // Select option
    $('.dropdown-option').on('click', function() {
        var value = $(this).data('id');
        var text = $.trim($(this).text());
        var $dropdown = $(this).closest('.custom-dropdown');

        // Set hidden input value
        $dropdown.find('.selected-value').val(value);

        // Set input text
        $dropdown.find('.dropdown-search').val(text);

        // Hide options
        $dropdown.find('.dropdown-options').slideUp(150);
    });

});

</script>
@endsection