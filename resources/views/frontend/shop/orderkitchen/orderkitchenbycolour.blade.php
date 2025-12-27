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
                <div id="accordion_1" class="mb-2 section-bg-1">
                    <!-- card -->
                    <div class="card border border-default">
                        <div class="">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#products-accordion-1" aria-expanded="true">
                                <i class="">1</i> Cabinets and Panels
                            </h6>
                        </div>
                        
                        <div id="products-accordion-1" class="collapse show" data-bs-parent="#accordion_1">
                            <div class="card-body p-0">
                                <div class="ltn__apartments-plan-area product-details-apartments-plan mb-60 p-0 m-0">
                                    <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center--- m-0 p-2">
                                        <div class="nav">
                                            <a data-bs-toggle="tab" href="#cabinets_tab_1" class="active">Base Cabinets</a>
                                            <a data-bs-toggle="tab" href="#cabinets_tab_2" class="">Wall Cabinets</a>
                                            <a data-bs-toggle="tab" href="#cabinets_tab_3" class="">Tall Cabinets</a>
                                            <a data-bs-toggle="tab" href="#cabinets_tab_4" class="">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="tab-content p-2 m-0">


                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Base Cabinets Tab --}}
                                        {{-----------------------------------------------------------------------------}}


                                        @if ($baseCabinets->count() > 0)
                                        @php 
                                            $baseCabinetData = $baseCabinets->first();
                                        @endphp
                                        <div class="tab-pane fade active show" id="cabinets_tab_1">
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
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="base-cabinets-section" placeholder="Search base cabinets...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($baseCabinets as $baseCabinet)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $baseCabinet->id }}" 
                                                                        data-dropdown-type="base-cabinets-section"
                                                                        data-product-height="{{ $baseCabinet->height }}"
                                                                        data-product-width="{{ $baseCabinet->width }}"
                                                                        data-product-depth="{{ $baseCabinet->depth }}"
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
                                                                                src="{{ !empty($baseCabinet->image_path) ? asset('imgs/products/'.$baseCabinet->image_path) : asset('images/no-image-available.jpg') }}"
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
                                                        <div class="row base-cabinets-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $baseCabinetData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($baseCabinetData->image_path) ? asset('imgs/products/'.$baseCabinetData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
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
                                                                                    <h1 class="p-0 m-0">£{{ $baseCabinetData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $baseCabinetData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $baseCabinetData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $baseCabinetData->id }}').value, '{{ $baseCabinetData->id }}', '{{ $baseCabinetData->product_code }}', '{{ $baseCabinetData->full_title }}', {{ $baseCabinetData->price }}, {{ $baseCabinetData->discounted_price }}, {{ $baseCabinetData->discounted_percentage ?? 0 }}, '{{ $baseCabinetData->ParentCategory->slug }}','{{ $baseCabinetData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade active show" id="cabinets_tab_1">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif


                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Wall Cabinets Tab --}}
                                        {{-----------------------------------------------------------------------------}}


                                        @if ($wallCabinets->count() > 0)
                                        @php 
                                            $wallCabinetData = $wallCabinets->first();
                                        @endphp
                                        <div class="tab-pane fade" id="cabinets_tab_2">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $wallCabinetData->parent_category_id)->where('style_id', $wallCabinetData->style_id)->where('colour_id', $wallCabinetData->colour_id)->where('assembly_id', $wallCabinetData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$wallCabinetData->style?->slug, $wallCabinetData->assembly?->slug, $wallCabinetData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL WALL CABINETS</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($wallCabinetData->style) && !empty($wallCabinetData->assembly) && !empty($wallCabinetData->colour)){{route('viewallorderkitchenbycolour', ['style' => $wallCabinetData->style?->slug , 'assembly' => $wallCabinetData->assembly?->slug, 'colour' => $wallCabinetData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="wall-cabinets-section" placeholder="Search wall cabinets...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($wallCabinets as $wallCabinet)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $wallCabinet->id }}" 
                                                                        data-dropdown-type="wall-cabinets-section"
                                                                        data-product-height="{{ $wallCabinet->height }}"
                                                                        data-product-width="{{ $wallCabinet->width }}"
                                                                        data-product-depth="{{ $wallCabinet->depth }}"
                                                                        data-product-short-title="{{ $wallCabinet->short_title }}"
                                                                        data-product-fullname="{{ $wallCabinet->full_title }}"
                                                                        data-product-image="{{ !empty($wallCabinet->image_path) ? asset('imgs/products/'.$wallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $wallCabinet->price }}"
                                                                        data-product-parent-category-slug="{{ $wallCabinet->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $wallCabinet->discounted_price }}"
                                                                        data-product-assembly-name="{{ $wallCabinet->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $wallCabinet->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $wallCabinet->product_code }}"
                                                                        data-product-dimensions="{{ $wallCabinet->dimensions }}"
                                                                        data-product-style="{{ $wallCabinet->style?->name }}"
                                                                        data-product-colour="{{ $wallCabinet->colour?->trade_colour ?? $wallCabinet->colour?->name }}"
                                                                        data-serial-number="{{ $wallCabinet->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($wallCabinet->image_path) ? asset('imgs/products/'.$wallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $wallCabinet->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $wallCabinet->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $wallCabinet->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row wall-cabinets-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $wallCabinetData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($wallCabinetData->image_path) ? asset('imgs/products/'.$wallCabinetData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($wallCabinetData->style)<span>{{ $wallCabinetData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($wallCabinetData->assembly)<span>{{ $wallCabinetData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($wallCabinetData->colour)<span>{{ $wallCabinetData->colour->trade_colour ? $wallCabinetData->colour->trade_colour : $wallCabinetData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($wallCabinetData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($wallCabinetData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($wallCabinetData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $wallCabinetData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $wallCabinetData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $wallCabinetData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $wallCabinetData->id }}').value, '{{ $wallCabinetData->id }}', '{{ $wallCabinetData->product_code }}', '{{ $wallCabinetData->full_title }}', {{ $wallCabinetData->price }}, {{ $wallCabinetData->discounted_price }}, {{ $wallCabinetData->discounted_percentage ?? 0 }}, '{{ $wallCabinetData->ParentCategory->slug }}','{{ $wallCabinetData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade" id="cabinets_tab_2">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif


                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Tall Cabinets Tab --}}
                                        {{-----------------------------------------------------------------------------}}


                                        @if ($tallCabinets->count() > 0)
                                        @php 
                                            $tallCabinetData = $tallCabinets->first();
                                        @endphp
                                        <div class="tab-pane fade" id="cabinets_tab_3">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $tallCabinetData->parent_category_id)->where('style_id', $tallCabinetData->style_id)->where('colour_id', $tallCabinetData->colour_id)->where('assembly_id', $tallCabinetData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tallCabinetData->style?->slug, $tallCabinetData->assembly?->slug, $tallCabinetData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL TALL CABINETS</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($tallCabinetData->style) && !empty($tallCabinetData->assembly) && !empty($tallCabinetData->colour)){{route('viewallorderkitchenbycolour', ['style' => $tallCabinetData->style?->slug , 'assembly' => $tallCabinetData->assembly?->slug, 'colour' => $tallCabinetData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="tall-cabinets-section" placeholder="Search tall cabinets...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($tallCabinets as $tallCabinet)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $tallCabinet->id }}" 
                                                                        data-dropdown-type="tall-cabinets-section"
                                                                        data-product-height="{{ $tallCabinet->height }}"
                                                                        data-product-width="{{ $tallCabinet->width }}"
                                                                        data-product-depth="{{ $tallCabinet->depth }}"
                                                                        data-product-short-title="{{ $tallCabinet->short_title }}"
                                                                        data-product-fullname="{{ $tallCabinet->full_title }}"
                                                                        data-product-image="{{ !empty($tallCabinet->image_path) ? asset('imgs/products/'.$tallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $tallCabinet->price }}"
                                                                        data-product-parent-category-slug="{{ $tallCabinet->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $tallCabinet->discounted_price }}"
                                                                        data-product-assembly-name="{{ $tallCabinet->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $tallCabinet->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $tallCabinet->product_code }}"
                                                                        data-product-dimensions="{{ $tallCabinet->dimensions }}"
                                                                        data-product-style="{{ $tallCabinet->style?->name }}"
                                                                        data-product-colour="{{ $tallCabinet->colour?->trade_colour ?? $tallCabinet->colour?->name }}"
                                                                        data-serial-number="{{ $tallCabinet->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($tallCabinet->image_path) ? asset('imgs/products/'.$tallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $tallCabinet->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $tallCabinet->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $tallCabinet->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row tall-cabinets-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $tallCabinetData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($tallCabinetData->image_path) ? asset('imgs/products/'.$tallCabinetData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($tallCabinetData->style)<span>{{ $tallCabinetData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($tallCabinetData->assembly)<span>{{ $tallCabinetData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($tallCabinetData->colour)<span>{{ $tallCabinetData->colour->trade_colour ? $tallCabinetData->colour->trade_colour : $tallCabinetData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($tallCabinetData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($tallCabinetData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($tallCabinetData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $tallCabinetData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $tallCabinetData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $tallCabinetData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $tallCabinetData->id }}').value, '{{ $tallCabinetData->id }}', '{{ $tallCabinetData->product_code }}', '{{ $tallCabinetData->full_title }}', {{ $tallCabinetData->price }}, {{ $tallCabinetData->discounted_price }}, {{ $tallCabinetData->discounted_percentage ?? 0 }}, '{{ $tallCabinetData->ParentCategory->slug }}','{{ $tallCabinetData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade" id="cabinets_tab_3">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif
                                        

                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Accessories Tab --}}
                                        {{-----------------------------------------------------------------------------}}
                                        
                                        @if ($accessories->count() > 0)

                                        @php 
                                            $accessoriesData = $accessories->first();
                                        @endphp
                                        <div class="tab-pane fade" id="cabinets_tab_4">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $accessoriesData->parent_category_id)->where('style_id', $accessoriesData->style_id)->where('colour_id', $accessoriesData->colour_id)->where('assembly_id', $accessoriesData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$accessoriesData->style?->slug, $accessoriesData->assembly?->slug, $accessoriesData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL ACCESSORIES</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($accessoriesData->style) && !empty($accessoriesData->assembly) && !empty($accessoriesData->colour)){{route('viewallorderkitchenbycolour', ['style' => $accessoriesData->style?->slug , 'assembly' => $accessoriesData->assembly?->slug, 'colour' => $accessoriesData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="accessories-section" placeholder="Search Accessories...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($accessories as $accessory)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $accessory->id }}" 
                                                                        data-dropdown-type="accessories-section"
                                                                        data-product-height="{{ $accessory->height }}"
                                                                        data-product-width="{{ $accessory->width }}"
                                                                        data-product-depth="{{ $accessory->depth }}"
                                                                        data-product-short-title="{{ $accessory->short_title }}"
                                                                        data-product-fullname="{{ $accessory->full_title }}"
                                                                        data-product-image="{{ !empty($accessory->image_path) ? asset('imgs/products/'.$accessory->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $accessory->price }}"
                                                                        data-product-parent-category-slug="{{ $accessory->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $accessory->discounted_price }}"
                                                                        data-product-assembly-name="{{ $accessory->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $accessory->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $accessory->product_code }}"
                                                                        data-product-dimensions="{{ $accessory->dimensions }}"
                                                                        data-product-style="{{ $accessory->style?->name }}"
                                                                        data-product-colour="{{ $accessory->colour?->trade_colour ?? $accessory->colour?->name }}"
                                                                        data-serial-number="{{ $accessory->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($accessory->image_path) ? asset('imgs/products/'.$accessory->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $accessory->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $accessory->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $accessory->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row accessories-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $accessoriesData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($accessoriesData->image_path) ? asset('imgs/products/'.$accessoriesData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($accessoriesData->style)<span>{{ $accessoriesData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($accessoriesData->assembly)<span>{{ $accessoriesData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($accessoriesData->colour)<span>{{ $accessoriesData->colour->trade_colour ? $accessoriesData->colour->trade_colour : $accessoriesData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($accessoriesData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($accessoriesData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($accessoriesData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $accessoriesData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $accessoriesData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $accessoriesData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $accessoriesData->id }}').value, '{{ $accessoriesData->id }}', '{{ $accessoriesData->product_code }}', '{{ $accessoriesData->full_title }}', {{ $accessoriesData->price }}, {{ $accessoriesData->discounted_price }}, {{ $accessoriesData->discounted_percentage ?? 0 }}, '{{ $accessoriesData->ParentCategory->slug }}','{{ $accessoriesData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade" id="cabinets_tab_4">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>             
                <div id="accordion_2" class="mb-2 section-bg-1">
                    <!-- card -->
                    <div class="card border border-default">
                        <div class="">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#products-accordion-2" aria-expanded="true">
                                <i class="">2</i> Internals
                            </h6>
                        </div>
                        
                        <div id="products-accordion-2" class="collapse" data-bs-parent="#accordion_2">
                            <div class="card-body p-0">
                                <div class="ltn__apartments-plan-area product-details-apartments-plan mb-60 p-0 m-0">
                                    <!-- <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center--- m-0 p-2">
                                        <div class="nav">
                                            <a data-bs-toggle="tab" href="#liton_tab_3_1" class="active">Base Cabinets</a>
                                            <a class="" data-bs-toggle="tab" href="#liton_tab_3_2">Wall Cabinets</a>
                                            <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Tall Cabinets</a>
                                            <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Accessories</a>
                                        </div>
                                    </div> -->
                                    <div class="tab-content p-2 m-0">


                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Internals Tab --}}
                                        {{-----------------------------------------------------------------------------}}

                                        @if ($internals->count() > 0)
                                        @php 
                                            $internalsData = $internals->first();
                                        @endphp
                                        <div class="tab-pane fade active show" id="internals_tab_1">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $internalsData->parent_category_id)->where('style_id', $internalsData->style_id)->where('colour_id', $internalsData->colour_id)->where('assembly_id', $internalsData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$internalsData->style?->slug, $internalsData->assembly?->slug, $internalsData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL INTERNALS</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($internalsData->style) && !empty($internalsData->assembly) && !empty($internalsData->colour)){{route('viewallorderkitchenbycolour', ['style' => $internalsData->style?->slug , 'assembly' => $internalsData->assembly?->slug, 'colour' => $internalsData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="internals-section" placeholder="Search Internals...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($internals as $internal)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $internal->id }}" 
                                                                        data-dropdown-type="internals-section"
                                                                        data-product-height="{{ $internal->height }}"
                                                                        data-product-width="{{ $internal->width }}"
                                                                        data-product-depth="{{ $internal->depth }}"
                                                                        data-product-short-title="{{ $internal->short_title }}"
                                                                        data-product-fullname="{{ $internal->full_title }}"
                                                                        data-product-image="{{ !empty($internal->image_path) ? asset('imgs/products/'.$internal->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $internal->price }}"
                                                                        data-product-parent-category-slug="{{ $internal->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $internal->discounted_price }}"
                                                                        data-product-assembly-name="{{ $internal->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $internal->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $internal->product_code }}"
                                                                        data-product-dimensions="{{ $internal->dimensions }}"
                                                                        data-product-style="{{ $internal->style?->name }}"
                                                                        data-product-colour="{{ $internal->colour?->trade_colour ?? $internal->colour?->name }}"
                                                                        data-serial-number="{{ $internal->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($internal->image_path) ? asset('imgs/products/'.$internal->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $internal->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $internal->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $internal->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row internals-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $internalsData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($internalsData->image_path) ? asset('imgs/products/'.$internalsData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($internalsData->style)<span>{{ $internalsData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($internalsData->assembly)<span>{{ $internalsData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($internalsData->colour)<span>{{ $internalsData->colour->trade_colour ? $internalsData->colour->trade_colour : $internalsData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($internalsData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($internalsData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($internalsData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $internalsData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $internalsData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $internalsData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $internalsData->id }}').value, '{{ $internalsData->id }}', '{{ $internalsData->product_code }}', '{{ $internalsData->full_title }}', {{ $internalsData->price }}, {{ $internalsData->discounted_price }}, {{ $internalsData->discounted_percentage ?? 0 }}, '{{ $internalsData->ParentCategory->slug }}','{{ $internalsData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade active show" id="internals_tab_1">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                       
                <div id="accordion_3" class="mb-2 section-bg-1">
                    <!-- card -->
                    <div class="card border border-default">
                        <div class="">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#products-accordion-3" aria-expanded="true">
                                <i class="">3</i> Handles
                            </h6>
                        </div>
                        
                        <div id="products-accordion-3" class="collapse" data-bs-parent="#accordion_3">
                            <div class="card-body p-0">
                                <div class="ltn__apartments-plan-area product-details-apartments-plan mb-60 p-0 m-0">
                                    <!-- <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center--- m-0 p-2">
                                        <div class="nav">
                                            <a data-bs-toggle="tab" href="#liton_tab_3_1" class="active">Base Cabinets</a>
                                            <a class="" data-bs-toggle="tab" href="#liton_tab_3_2">Wall Cabinets</a>
                                            <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Tall Cabinets</a>
                                            <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Accessories</a>
                                        </div>
                                    </div> -->
                                    <div class="tab-content p-2 m-0">


                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Handles Tab --}}
                                        {{-----------------------------------------------------------------------------}}

                                        @if ($handles->count() > 0)
                                        @php 
                                            $handlesData = $handles->first();
                                        @endphp
                                        <div class="tab-pane fade active show" id="cabinets_tab_1">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $handlesData->parent_category_id)->where('style_id', $handlesData->style_id)->where('colour_id', $handlesData->colour_id)->where('assembly_id', $handlesData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$handlesData->style?->slug, $handlesData->assembly?->slug, $handlesData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL HANDLES</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($handlesData->style) && !empty($handlesData->assembly) && !empty($handlesData->colour)){{route('viewallorderkitchenbycolour', ['style' => $handlesData->style?->slug , 'assembly' => $handlesData->assembly?->slug, 'colour' => $handlesData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="handless-section" placeholder="Search Handles...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($handles as $handle)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $handle->id }}" 
                                                                        data-dropdown-type="handless-section"
                                                                        data-product-height="{{ $handle->height }}"
                                                                        data-product-width="{{ $handle->width }}"
                                                                        data-product-depth="{{ $handle->depth }}"
                                                                        data-product-short-title="{{ $handle->short_title }}"
                                                                        data-product-fullname="{{ $handle->full_title }}"
                                                                        data-product-image="{{ !empty($handle->image_path) ? asset('imgs/products/'.$handle->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $handle->price }}"
                                                                        data-product-parent-category-slug="{{ $handle->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $handle->discounted_price }}"
                                                                        data-product-assembly-name="{{ $handle->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $handle->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $handle->product_code }}"
                                                                        data-product-dimensions="{{ $handle->dimensions }}"
                                                                        data-product-style="{{ $handle->style?->name }}"
                                                                        data-product-colour="{{ $handle->colour?->trade_colour ?? $handle->colour?->name }}"
                                                                        data-serial-number="{{ $handle->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($handle->image_path) ? asset('imgs/products/'.$handle->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $handle->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $handle->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $handle->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row handless-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $handlesData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($handlesData->image_path) ? asset('imgs/products/'.$handlesData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($handlesData->style)<span>{{ $handlesData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($handlesData->assembly)<span>{{ $handlesData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($handlesData->colour)<span>{{ $handlesData->colour->trade_colour ? $handlesData->colour->trade_colour : $handlesData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($handlesData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($handlesData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($handlesData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $handlesData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $handlesData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $handlesData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $handlesData->id }}').value, '{{ $handlesData->id }}', '{{ $handlesData->product_code }}', '{{ $handlesData->full_title }}', {{ $handlesData->price }}, {{ $handlesData->discounted_price }}, {{ $handlesData->discounted_percentage ?? 0 }}, '{{ $handlesData->ParentCategory->slug }}','{{ $handlesData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade active show" id="cabinets_tab_1">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div id="accordion_4" class="mb-2 section-bg-1">
                    <!-- card -->
                    <div class="card border border-default">
                        <div class="">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#products-accordion-4" aria-expanded="true">
                                <i class="">4</i> WORKTOPS / UPSTANDS / BREAKFAST BARS
                            </h6>
                        </div>
                        
                        <div id="products-accordion-4" class="collapse" data-bs-parent="#accordion_4">
                            <div class="card-body p-0">
                                <div class="ltn__apartments-plan-area product-details-apartments-plan mb-60 p-0 m-0">
                                    <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center--- m-0 p-2">
                                        <div class="nav">
                                            <a data-bs-toggle="tab" href="#worktops_tab" class="active">WorkTops</a>
                                            <a data-bs-toggle="tab" href="#upstands_tab" class="">Upstands</a>
                                            <a data-bs-toggle="tab" href="#breakfast_bars_tab" class="">Breakfast Bars</a>
                                        </div>
                                    </div>
                                    <div class="tab-content p-2 m-0">


                                        {{-----------------------------------------------------------------------------}}
                                        {{-- WorkTops Tab --}}
                                        {{-----------------------------------------------------------------------------}}

                                        @if ($worktops->count() > 0)
                                        @php 
                                            $worktopsData = $worktops->first();
                                        @endphp
                                        <div class="tab-pane fade active show" id="worktops_tab">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $worktopsData->parent_category_id)->where('style_id', $worktopsData->style_id)->where('colour_id', $worktopsData->colour_id)->where('assembly_id', $worktopsData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsData->style?->slug, $worktopsData->assembly?->slug, $worktopsData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL WORKTOPS</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($worktopsData->style) && !empty($worktopsData->assembly) && !empty($worktopsData->colour)){{route('viewallorderkitchenbycolour', ['style' => $worktopsData->style?->slug , 'assembly' => $worktopsData->assembly?->slug, 'colour' => $worktopsData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="worktops-section" placeholder="Search Worktops...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($worktops as $worktop)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $worktop->id }}" 
                                                                        data-dropdown-type="worktops-section"
                                                                        data-product-height="{{ $worktop->height }}"
                                                                        data-product-width="{{ $worktop->width }}"
                                                                        data-product-depth="{{ $worktop->depth }}"
                                                                        data-product-short-title="{{ $worktop->short_title }}"
                                                                        data-product-fullname="{{ $worktop->full_title }}"
                                                                        data-product-image="{{ !empty($worktop->image_path) ? asset('imgs/products/'.$worktop->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $worktop->price }}"
                                                                        data-product-parent-category-slug="{{ $worktop->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $worktop->discounted_price }}"
                                                                        data-product-assembly-name="{{ $worktop->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $worktop->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $worktop->product_code }}"
                                                                        data-product-dimensions="{{ $worktop->dimensions }}"
                                                                        data-product-style="{{ $worktop->style?->name }}"
                                                                        data-product-colour="{{ $worktop->colour?->trade_colour ?? $worktop->colour?->name }}"
                                                                        data-serial-number="{{ $worktop->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($worktop->image_path) ? asset('imgs/products/'.$worktop->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $worktop->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $worktop->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $worktop->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row worktops-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $worktopsData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($worktopsData->image_path) ? asset('imgs/products/'.$worktopsData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($worktopsData->style)<span>{{ $worktopsData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($worktopsData->assembly)<span>{{ $worktopsData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($worktopsData->colour)<span>{{ $worktopsData->colour->trade_colour ? $worktopsData->colour->trade_colour : $worktopsData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($worktopsData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($worktopsData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($worktopsData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $worktopsData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $worktopsData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $worktopsData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $worktopsData->id }}').value, '{{ $worktopsData->id }}', '{{ $worktopsData->product_code }}', '{{ $worktopsData->full_title }}', {{ $worktopsData->price }}, {{ $worktopsData->discounted_price }}, {{ $worktopsData->discounted_percentage ?? 0 }}, '{{ $worktopsData->ParentCategory->slug }}','{{ $worktopsData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade active show" id="worktops_tab">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif

                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Upstands Tab --}}
                                        {{-----------------------------------------------------------------------------}}

                                        @if ($worktopsAndUpStands->count() > 0)
                                        @php 
                                            $worktopsAndUpStandsData = $worktopsAndUpStands->first();
                                        @endphp
                                        <div class="tab-pane fade active show" id="upstands_tab">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $worktopsAndUpStandsData->parent_category_id)->where('style_id', $worktopsAndUpStandsData->style_id)->where('colour_id', $worktopsAndUpStandsData->colour_id)->where('assembly_id', $worktopsAndUpStandsData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$worktopsAndUpStandsData->style?->slug, $worktopsAndUpStandsData->assembly?->slug, $worktopsAndUpStandsData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL UPSTANDS</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($worktopsAndUpStandsData->style) && !empty($worktopsAndUpStandsData->assembly) && !empty($worktopsAndUpStandsData->colour)){{route('viewallorderkitchenbycolour', ['style' => $worktopsAndUpStandsData->style?->slug , 'assembly' => $worktopsAndUpStandsData->assembly?->slug, 'colour' => $worktopsAndUpStandsData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="upstands-section" placeholder="Search Upstands...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($worktopsAndUpStands as $worktopsAndUpStand)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $worktopsAndUpStand->id }}" 
                                                                        data-dropdown-type="upstands-section"
                                                                        data-product-height="{{ $worktopsAndUpStand->height }}"
                                                                        data-product-width="{{ $worktopsAndUpStand->width }}"
                                                                        data-product-depth="{{ $worktopsAndUpStand->depth }}"
                                                                        data-product-short-title="{{ $worktopsAndUpStand->short_title }}"
                                                                        data-product-fullname="{{ $worktopsAndUpStand->full_title }}"
                                                                        data-product-image="{{ !empty($worktopsAndUpStand->image_path) ? asset('imgs/products/'.$worktopsAndUpStand->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $worktopsAndUpStand->price }}"
                                                                        data-product-parent-category-slug="{{ $worktopsAndUpStand->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $worktopsAndUpStand->discounted_price }}"
                                                                        data-product-assembly-name="{{ $worktopsAndUpStand->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $worktopsAndUpStand->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $worktopsAndUpStand->product_code }}"
                                                                        data-product-dimensions="{{ $worktopsAndUpStand->dimensions }}"
                                                                        data-product-style="{{ $worktopsAndUpStand->style?->name }}"
                                                                        data-product-colour="{{ $worktopsAndUpStand->colour?->trade_colour ?? $worktopsAndUpStand->colour?->name }}"
                                                                        data-serial-number="{{ $worktopsAndUpStand->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($worktopsAndUpStand->image_path) ? asset('imgs/products/'.$worktopsAndUpStand->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $worktopsAndUpStand->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $worktopsAndUpStand->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $worktopsAndUpStand->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row upstands-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $worktopsAndUpStandsData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($worktopsAndUpStandsData->image_path) ? asset('imgs/products/'.$worktopsAndUpStandsData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($worktopsAndUpStandsData->style)<span>{{ $worktopsAndUpStandsData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($worktopsAndUpStandsData->assembly)<span>{{ $worktopsAndUpStandsData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($worktopsAndUpStandsData->colour)<span>{{ $worktopsAndUpStandsData->colour->trade_colour ? $worktopsAndUpStandsData->colour->trade_colour : $worktopsAndUpStandsData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($worktopsAndUpStandsData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($worktopsAndUpStandsData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($worktopsAndUpStandsData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $worktopsAndUpStandsData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $worktopsAndUpStandsData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $worktopsAndUpStandsData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $worktopsAndUpStandsData->id }}').value, '{{ $worktopsAndUpStandsData->id }}', '{{ $worktopsAndUpStandsData->product_code }}', '{{ $worktopsAndUpStandsData->full_title }}', {{ $worktopsAndUpStandsData->price }}, {{ $worktopsAndUpStandsData->discounted_price }}, {{ $worktopsAndUpStandsData->discounted_percentage ?? 0 }}, '{{ $worktopsAndUpStandsData->ParentCategory->slug }}','{{ $worktopsAndUpStandsData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade active show" id="upstands_tab">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif

                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Breakfast Bars Tab --}}
                                        {{-----------------------------------------------------------------------------}}

                                        @if ($breakfastBars->count() > 0)
                                        @php 
                                            $breakfastBarsData = $breakfastBars->first();
                                        @endphp
                                        <div class="tab-pane fade active show" id="breakfast_bars_tab">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $breakfastBarsData->parent_category_id)->where('style_id', $breakfastBarsData->style_id)->where('colour_id', $breakfastBarsData->colour_id)->where('assembly_id', $breakfastBarsData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$breakfastBarsData->style?->slug, $breakfastBarsData->assembly?->slug, $breakfastBarsData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL BREAKFASTBARS</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($breakfastBarsData->style) && !empty($breakfastBarsData->assembly) && !empty($breakfastBarsData->colour)){{route('viewallorderkitchenbycolour', ['style' => $breakfastBarsData->style?->slug , 'assembly' => $breakfastBarsData->assembly?->slug, 'colour' => $breakfastBarsData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="breakfastbars-section" placeholder="Search Breakfast Bars...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($breakfastBars as $breakfastBar)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $breakfastBar->id }}" 
                                                                        data-dropdown-type="breakfastbars-section"
                                                                        data-product-height="{{ $breakfastBar->height }}"
                                                                        data-product-width="{{ $breakfastBar->width }}"
                                                                        data-product-depth="{{ $breakfastBar->depth }}"
                                                                        data-product-short-title="{{ $breakfastBar->short_title }}"
                                                                        data-product-fullname="{{ $breakfastBar->full_title }}"
                                                                        data-product-image="{{ !empty($breakfastBar->image_path) ? asset('imgs/products/'.$breakfastBar->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $breakfastBar->price }}"
                                                                        data-product-parent-category-slug="{{ $breakfastBar->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $breakfastBar->discounted_price }}"
                                                                        data-product-assembly-name="{{ $breakfastBar->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $breakfastBar->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $breakfastBar->product_code }}"
                                                                        data-product-dimensions="{{ $breakfastBar->dimensions }}"
                                                                        data-product-style="{{ $breakfastBar->style?->name }}"
                                                                        data-product-colour="{{ $breakfastBar->colour?->trade_colour ?? $breakfastBar->colour?->name }}"
                                                                        data-serial-number="{{ $breakfastBar->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($breakfastBar->image_path) ? asset('imgs/products/'.$breakfastBar->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $breakfastBar->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $breakfastBar->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $breakfastBar->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row breakfastbars-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $breakfastBarsData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($breakfastBarsData->image_path) ? asset('imgs/products/'.$breakfastBarsData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($breakfastBarsData->style)<span>{{ $breakfastBarsData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($breakfastBarsData->assembly)<span>{{ $breakfastBarsData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($breakfastBarsData->colour)<span>{{ $breakfastBarsData->colour->trade_colour ? $breakfastBarsData->colour->trade_colour : $breakfastBarsData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($breakfastBarsData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($breakfastBarsData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($breakfastBarsData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $breakfastBarsData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $breakfastBarsData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $breakfastBarsData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $breakfastBarsData->id }}').value, '{{ $breakfastBarsData->id }}', '{{ $breakfastBarsData->product_code }}', '{{ $breakfastBarsData->full_title }}', {{ $breakfastBarsData->price }}, {{ $breakfastBarsData->discounted_price }}, {{ $breakfastBarsData->discounted_percentage ?? 0 }}, '{{ $breakfastBarsData->ParentCategory->slug }}','{{ $breakfastBarsData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade active show" id="breakfast_bars_tab">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div id="accordion_5" class="mb-2 section-bg-1">
                    <!-- card -->
                    <div class="card border border-default">
                        <div class="">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#products-accordion-5" aria-expanded="true">
                                <i class="">5</i> SINKS AND TAPS
                            </h6>
                        </div>
                        
                        <div id="products-accordion-5" class="collapse" data-bs-parent="#accordion_5">
                            <div class="card-body p-0">
                                <div class="ltn__apartments-plan-area product-details-apartments-plan mb-60 p-0 m-0">
                                    <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center--- m-0 p-2">
                                        <div class="nav">
                                            <a data-bs-toggle="tab" href="#sinks_tab" class="active">Sinks</a>
                                            <a data-bs-toggle="tab" href="#taps_tab" class="">Taps</a>
                                        </div>
                                    </div>
                                    <div class="tab-content p-2 m-0">


                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Sinks Tab --}}
                                        {{-----------------------------------------------------------------------------}}

                                        @if ($sinks->count() > 0)
                                        @php 
                                            $sinksData = $sinks->first();
                                        @endphp
                                        <div class="tab-pane fade active show" id="sinks_tab">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $sinksData->parent_category_id)->where('style_id', $sinksData->style_id)->where('colour_id', $sinksData->colour_id)->where('assembly_id', $sinksData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$sinksData->style?->slug, $sinksData->assembly?->slug, $sinksData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL SINKS</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($sinksData->style) && !empty($sinksData->assembly) && !empty($sinksData->colour)){{route('viewallorderkitchenbycolour', ['style' => $sinksData->style?->slug , 'assembly' => $sinksData->assembly?->slug, 'colour' => $sinksData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="sinks-section" placeholder="Search sinks...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($sinks as $sink)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $sink->id }}" 
                                                                        data-dropdown-type="sinks-section"
                                                                        data-product-height="{{ $sink->height }}"
                                                                        data-product-width="{{ $sink->width }}"
                                                                        data-product-depth="{{ $sink->depth }}"
                                                                        data-product-short-title="{{ $sink->short_title }}"
                                                                        data-product-fullname="{{ $sink->full_title }}"
                                                                        data-product-image="{{ !empty($sink->image_path) ? asset('imgs/products/'.$sink->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $sink->price }}"
                                                                        data-product-parent-category-slug="{{ $sink->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $sink->discounted_price }}"
                                                                        data-product-assembly-name="{{ $sink->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $sink->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $sink->product_code }}"
                                                                        data-product-dimensions="{{ $sink->dimensions }}"
                                                                        data-product-style="{{ $sink->style?->name }}"
                                                                        data-product-colour="{{ $sink->colour?->trade_colour ?? $sink->colour?->name }}"
                                                                        data-serial-number="{{ $sink->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($sink->image_path) ? asset('imgs/products/'.$sink->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $sink->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $sink->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $sink->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row sinks-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $sinksData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($sinksData->image_path) ? asset('imgs/products/'.$sinksData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($sinksData->style)<span>{{ $sinksData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($sinksData->assembly)<span>{{ $sinksData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($sinksData->colour)<span>{{ $sinksData->colour->trade_colour ? $sinksData->colour->trade_colour : $sinksData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($sinksData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($sinksData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($sinksData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $sinksData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $sinksData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $sinksData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $sinksData->id }}').value, '{{ $sinksData->id }}', '{{ $sinksData->product_code }}', '{{ $sinksData->full_title }}', {{ $sinksData->price }}, {{ $sinksData->discounted_price }}, {{ $sinksData->discounted_percentage ?? 0 }}, '{{ $sinksData->ParentCategory->slug }}','{{ $sinksData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade active show" id="sinks_tab">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif


                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Taps Tab --}}
                                        {{-----------------------------------------------------------------------------}}

                                        @if ($taps->count() > 0)
                                        @php 
                                            $tapsData = $taps->first();
                                        @endphp
                                        <div class="tab-pane fade active show" id="taps_tab">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $tapsData->parent_category_id)->where('style_id', $tapsData->style_id)->where('colour_id', $tapsData->colour_id)->where('assembly_id', $tapsData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$tapsData->style?->slug, $tapsData->assembly?->slug, $tapsData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL TAPS</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($tapsData->style) && !empty($tapsData->assembly) && !empty($tapsData->colour)){{route('viewallorderkitchenbycolour', ['style' => $tapsData->style?->slug , 'assembly' => $tapsData->assembly?->slug, 'colour' => $tapsData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="taps-section" placeholder="Search taps...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($taps as $tap)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $tap->id }}" 
                                                                        data-dropdown-type="taps-section"
                                                                        data-product-height="{{ $tap->height }}"
                                                                        data-product-width="{{ $tap->width }}"
                                                                        data-product-depth="{{ $tap->depth }}"
                                                                        data-product-short-title="{{ $tap->short_title }}"
                                                                        data-product-fullname="{{ $tap->full_title }}"
                                                                        data-product-image="{{ !empty($tap->image_path) ? asset('imgs/products/'.$tap->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $tap->price }}"
                                                                        data-product-parent-category-slug="{{ $tap->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $tap->discounted_price }}"
                                                                        data-product-assembly-name="{{ $tap->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $tap->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $tap->product_code }}"
                                                                        data-product-dimensions="{{ $tap->dimensions }}"
                                                                        data-product-style="{{ $tap->style?->name }}"
                                                                        data-product-colour="{{ $tap->colour?->trade_colour ?? $tap->colour?->name }}"
                                                                        data-serial-number="{{ $tap->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($tap->image_path) ? asset('imgs/products/'.$tap->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $tap->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $tap->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $tap->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row taps-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $tapsData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($tapsData->image_path) ? asset('imgs/products/'.$tapsData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($tapsData->style)<span>{{ $tapsData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($tapsData->assembly)<span>{{ $tapsData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($tapsData->colour)<span>{{ $tapsData->colour->trade_colour ? $tapsData->colour->trade_colour : $tapsData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($tapsData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($tapsData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($tapsData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $tapsData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $tapsData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $tapsData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $tapsData->id }}').value, '{{ $tapsData->id }}', '{{ $tapsData->product_code }}', '{{ $tapsData->full_title }}', {{ $tapsData->price }}, {{ $tapsData->discounted_price }}, {{ $tapsData->discounted_percentage ?? 0 }}, '{{ $tapsData->ParentCategory->slug }}','{{ $tapsData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade active show" id="taps_tab">
                                            <p class="p-3">No Data Found.</p>
                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div id="accordion_6" class="mb-2 section-bg-1">
                    <!-- card -->
                    <div class="card border border-default">
                        <div class="">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#products-accordion-6" aria-expanded="true">
                                <i class="">6</i> APPLIANCES
                            </h6>
                        </div>
                        
                        <div id="products-accordion-6" class="collapse" data-bs-parent="#accordion_6">
                            <div class="card-body p-0">
                                <div class="ltn__apartments-plan-area product-details-apartments-plan mb-60 p-0 m-0">
                                    <div class="tab-content p-2 m-0">


                                        {{-----------------------------------------------------------------------------}}
                                        {{-- Base Cabinets Tab --}}
                                        {{-----------------------------------------------------------------------------}}

                                        @if ($appliances->count() > 0)
                                        @php 
                                            $appliancesData = $appliances->first();
                                        @endphp
                                        <div class="tab-pane fade active show" id="appliances_tab">
                                            <div class="ltn__apartments-tab-content-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                                                        @php 
                                                            $parentSubCategories = \App\Models\Product::where('parent_category_id', $appliancesData->parent_category_id)->where('style_id', $appliancesData->style_id)->where('colour_id', $appliancesData->colour_id)->where('assembly_id', $appliancesData->assembly_id)->groupBy('parent_sub_category')->orderBy('parent_sub_category', 'desc')->get();
                                                        @endphp
                                                        <div class="horizontal-scroll">
                                                            <div class="d-flex gap-3 flex-wrap">
                                                            @foreach ($parentSubCategories as $parentSubCategory)
                                                                @if ($parentSubCategory->parent_sub_category == 'A')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'A'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/highline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'A'])}}" class="text-dark text-center mt-1">
                                                                            Highline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'B')
                                                                    <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'B'])}}" >
                                                                            <img src="{{ asset('images/drawerline.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'B'])}}" class="text-dark text-center mt-1">
                                                                            Drawerline
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'C')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'C'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'C'])}}" class="text-dark text-center mt-1">
                                                                            Corner
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-one')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'one-drawer'])}}" >
                                                                            
                                                                            <img src="{{ asset('images/corner.jpeg') }}" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'one-drawer'])}}" class="text-dark text-center mt-1">
                                                                            One Drawer
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-two')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'two-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/600-2-pan-drw1720360807_668a9f6737c72.jpeg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'two-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Two Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-three')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'three-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/2-drw-base-with-1-pan-drw-600-wide-(1)1728330112_67043980f07ef.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'three-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Three Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-four')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'four-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/4-drw-base-new1728327098_67042dbae9eba.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'four-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Four Drawers
                                                                        </a>
                                                                    </div>
                                                                @elseif ($parentSubCategory->parent_sub_category == 'd-five')
                                                                <div class="d-flex flex-column">
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'five-drawers'])}}" >
                                                                            
                                                                            <img src="https://bkonline.uk/public/imgs/products/5-drw-base-6001728327254_67042e560429b.jpg" class="rounded" alt="" width="100">
                                                                        </a>
                                                                        <a href="{{route('orderkitchenbycolour', [$appliancesData->style?->slug, $appliancesData->assembly?->slug, $appliancesData->colour?->slug, 'five-drawers'])}}" class="text-dark text-center mt-1">
                                                                            Five Drawers
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            </div>
                                                        </div>
                                                        <label for="" class="fw-bold d-flex justify-content-between mt-4">
                                                            <span class="text-dark">ALL APPLIANCES</span>
                                                            <span>
                                                                <a class="text-decoration-underline text-dark" href="@if(!empty($appliancesData->style) && !empty($appliancesData->assembly) && !empty($appliancesData->colour)){{route('viewallorderkitchenbycolour', ['style' => $appliancesData->style?->slug , 'assembly' => $appliancesData->assembly?->slug, 'colour' => $appliancesData->colour?->slug])}}@else#@endif">
                                                                    View All
                                                                </a>
                                                            </span>
                                                        </label>
                                                        <div class="input-item py-0 my-2">
                                                            <div class="custom-dropdown py-0 my-0">
                                                                <input type="text" class="dropdown-search py-0 my-0 order-component-dropdown" data-dropdown-type="appliances-section" placeholder="Search Appliances...">
                                                                <ul class="dropdown-options">
                                                                    @foreach($appliances as $appliance)
                                                                    <li class="dropdown-option"
                                                                        data-id="{{ $appliance->id }}" 
                                                                        data-dropdown-type="appliances-section"
                                                                        data-product-height="{{ $appliance->height }}"
                                                                        data-product-width="{{ $appliance->width }}"
                                                                        data-product-depth="{{ $appliance->depth }}"
                                                                        data-product-short-title="{{ $appliance->short_title }}"
                                                                        data-product-fullname="{{ $appliance->full_title }}"
                                                                        data-product-image="{{ !empty($appliance->image_path) ? asset('imgs/products/'.$appliance->image_path) : asset('images/no-image-available.jpg') }}"
                                                                        data-product-price="{{ $appliance->price }}"
                                                                        data-product-parent-category-slug="{{ $appliance->ParentCategory?->slug }}"
                                                                        data-product-discountedprice="{{ $appliance->discounted_price }}"
                                                                        data-product-assembly-name="{{ $appliance->assembly?->name }}"
                                                                        data-product-discountedpercentage="{{ $appliance->discounted_percentage ?? 0 }}"
                                                                        data-product-code="{{ $appliance->product_code }}"
                                                                        data-product-dimensions="{{ $appliance->dimensions }}"
                                                                        data-product-style="{{ $appliance->style?->name }}"
                                                                        data-product-colour="{{ $appliance->colour?->trade_colour ?? $appliance->colour?->name }}"
                                                                        data-serial-number="{{ $appliance->serial_number }}">

                                                                        <div class="d-flex">
                                                                            <img
                                                                                src="{{ !empty($appliance->image_path) ? asset('imgs/products/'.$appliance->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                height="60px" width="100px"
                                                                                alt="{{ $appliance->short_title }}"
                                                                                class="dropdown-option-img"
                                                                            >
                                                                            <div class="d-flex flex-column ms-2">
                                                                                <span class="dropdown-option-text my-0">
                                                                                    {{ $appliance->full_title }}
                                                                                </span>
                                                                                <span class="dropdown-option-price fw-bold text-dark my-0">
                                                                                    (£{{ $appliance->price }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach

                                                                </ul>
                                                                <input type="hidden" class="selected-value" name="base_cabinet_id">
                                                            </div>
                                                        </div>
                                                        <div class="row appliances-section">
                                                            <div class="ltn__quick-view-modal-inner">
                                                                <div class="card px-1">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h3 class="text-center bg-yellow p-2">{{ $appliancesData->full_title }}</h3>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="modal-product-img border-grey border">
                                                                                <img src="{{ !empty($appliancesData->image_path) ? asset('imgs/products/'.$appliancesData->image_path) : asset('images/no-image-available.jpg') }}" alt="#">
                                                                                <!-- <img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="#"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="d-flex justify-content-start">   
                                                                                <div class="p-0 m-0">                
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> @if ($appliancesData->style)<span>{{ $appliancesData->style->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly: </label> @if ($appliancesData->assembly)<span>{{ $appliancesData->assembly->name }}</span>@endif</li>
                                                                                        <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> @if ($appliancesData->colour)<span>{{ $appliancesData->colour->trade_colour ? $appliancesData->colour->trade_colour : $appliancesData->colour->name }}</span>@endif</li>
                                                                                    </ul>
                                                                                </div>   
                                                                                <div class="ms-2">
                                                                                    <ul class="p-0 m-0 border-0" style="list-style: none;">
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                {{ intval($appliancesData->height) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                {{ intval($appliancesData->width) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="m-0 pb-2">
                                                                                            <p class="mb-0">
                                                                                                <small
                                                                                                    class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                {{ intval($appliancesData->depth) }}mm
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info">
                                                                                <div class="product-price mb-0">
                                                                                    <h1 class="p-0 m-0">£{{ $appliancesData->price }}</h1>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                                                                                <div class="cart-plus-minus">
                                                                                    <div class="dec qtybutton" id="dec-btn{{ $appliancesData->id }}">-</div>
                                                                                        <input type="text" value="0" name="qtybutton" id="quantity{{ $appliancesData->id }}" class="cart-plus-minus-box">
                                                                                    <div class="inc qtybutton">+</div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="theme-btn-1 btn btn-effect-1">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                        <span onclick="inputQty(document.querySelector('#quantity{{ $appliancesData->id }}').value, '{{ $appliancesData->id }}', '{{ $appliancesData->product_code }}', '{{ $appliancesData->full_title }}', {{ $appliancesData->price }}, {{ $appliancesData->discounted_price }}, {{ $appliancesData->discounted_percentage ?? 0 }}, '{{ $appliancesData->ParentCategory->slug }}','{{ $appliancesData->image_path }}')">ADD TO CART</span>
                                                                                    </button>
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
                                        <div class="tab-pane fade active show" id="appliances_tab">
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
jQuery(document).ready(function($) {$(document).ready(function () {
    $(document).on('click', '.dropdown-option', function (e) {
        e.preventDefault();

        // Get the selected option
        var selectedOption = $(this);
        var dropdownType = $(this).data('dropdown-type');

        // Access all data attributes
        var productId = selectedOption.data('id');
        var fullTitle = selectedOption.data('product-fullname');
        var shortTitle = selectedOption.data('product-short-title');
        var productImage = selectedOption.data('product-image');
        var price = selectedOption.data('product-price');
        var parentCategorySlug = selectedOption.data('product-parent-category-slug');
        var discountedPrice = selectedOption.data('product-discountedprice');
        var assemblyName = selectedOption.data('product-assembly-name');
        var styleName = selectedOption.data('product-style');
        var discountedPercentage = selectedOption.data('product-discountedpercentage');
        var productCode = selectedOption.data('product-code');
        var productDimensions = selectedOption.data('product-dimensions');
        var productColour = selectedOption.data('product-colour');
        var height = selectedOption.data('product-height'); // if you added height
        var width = selectedOption.data('product-width');   // if you added width
        var depth = selectedOption.data('product-depth');   // if you added depth

        // Build HTML using jQuery variables
        var _html = `
        <div class="ltn__quick-view-modal-inner">
            <div class="card px-1">

                <!-- PRODUCT TITLE -->
                <div class="row mb-2">
                    <div class="col-12">
                        <h3 class="text-center bg-yellow p-2">${fullTitle}</h3>
                    </div>

                    <!-- IMAGE -->
                    <div class="col-lg-6 col-12">
                        <div class="modal-product-img border-grey border">
                            <img src="${productImage}" alt="${shortTitle}" class="w-100">
                        </div>
                    </div>

                    <!-- PRODUCT DETAILS -->
                    <div class="col-lg-6 col-12">
                        <div class="d-flex justify-content-start">

                            <!-- STYLING -->
                            <div class="p-0 m-0">
                                <ul class="p-0 m-0 border-0" style="list-style: none;">
                                    <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Style:</label> ${styleName || ''}</li>
                                    <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Assembly:</label> ${assemblyName || ''}</li>
                                    <li class="m-0 pb-2"><label class="fw-bold text-uppercase text-dark">Colour:</label> ${productColour || ''}</li>
                                </ul>
                            </div>

                            <!-- DIMENSIONS -->
                            <div class="ms-2">
                                <ul class="p-0 m-0 border-0" style="list-style: none;">
                                    <li class="m-0 pb-2"><small class="fw-bold text-uppercase text-dark">HEIGHT:</small> ${height || '0'}mm</li>
                                    <li class="m-0 pb-2"><small class="fw-bold text-uppercase text-dark">WIDTH:</small> ${width || '0'}mm</li>
                                    <li class="m-0 pb-2"><small class="fw-bold text-uppercase text-dark">DEPTH:</small> ${depth || '0'}mm</li>
                                </ul>
                            </div>
                        </div>

                        <!-- PRICE -->
                        <div class="product-info">
                            <div class="product-price mb-0">
                                <h1 class="p-0 m-0">£${price || '00.00'}</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CART -->
                <div class="row">
                    <div class="col-12">
                        <div class="ltn__product-details-menu-2 my-0 d-flex justify-content-start align-items-center gap-3">
                            <div class="cart-plus-minus">
                                <div class="dec qtybutton" id="dec-btn${productId}">-</div>
                                    <input type="text" value="0" name="qtybutton" id="quantity${productId}" class="cart-plus-minus-box">
                                <div class="inc qtybutton">+</div>
                            </div>
                            <div>
                                <button class="theme-btn-1 btn btn-effect-1">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span onclick="inputQty(document.querySelector('#quantity${productId}').value, '${productId}', '${productCode}', '${fullTitle}', ${price}, ${discountedPrice}, ${discountedPercentage}, '${parentCategorySlug}','${productImage}')">ADD TO CART</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        `;

        // Inject into the target container
        $('.' + dropdownType).html(_html);
    });

});

    $(document).on('click', '.qtybutton', function () {
        var $button = $(this);
        var $input = $button.siblings('.cart-plus-minus-box');
        var currentVal = parseInt($input.val());

        if ($button.hasClass('inc')) {
            $input.val(currentVal + 1);
        } else if ($button.hasClass('dec')) {
            if (currentVal > 0) {
                $input.val(currentVal - 1);
            }
        }
    });

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