<x-guest-layout>
    @section('meta_tags')
        <title>{{$title}}</title>
        <meta name="description" content="">
    @endsection
    <div class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}" class="text-uppercase">Shop</a></li>
                <li class="breadcrumb-item"><a href="{{ route('orderkitchen') }}" class="text-uppercase">Order
                        Kitchen</a></li>
            </ol>
        </nav>
        <h1 class="fs-1 fw-bolder text-dark d-flex justify-content-end">
            <div>
                <a href="{{route('orderkitchenbycolour', ['style' => $style->slug , 'assembly' => $assembly->slug, 'colour' => $colour->slug])}}" class="btn btn-outline-warning text-dark text-uppercase mb-2" style="border-radius: 0">Back</a>
            </div>
        </h1>
        <h1 class="fs-4 fw-bolder text-dark">{{$title}}</h1>

        <div class="row" style="background-color: #e0e0e0;">
            <div class="col-lg-9">
                <div class="collapse-wrapper my-4">
                    <a class="fw-semibold text-dark text-uppercase collapse-heading" data-bs-toggle="collapse"
                        href="#cabinetspanels" role="button" aria-expanded="false" aria-controls="cabinetspanels">
                        <span
                            class="bg-dark text-white fw-semibold py-2 px-2 text-center me-2 collapse-heading-number">1</span>
                        Cabinets and Panels
                    </a>
                    <div class="collapse-container mt-3" id="cabinetspanels">
                        <nav class="d-flex justify-content-between">
                            <div class="nav nav-tabs custom-nav" style="" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-baseCabinet-tab" data-bs-toggle="tab"
                                    data-bs-target="#baseCabinet-tab" type="button" role="tab"
                                    aria-controls="baseCabinet-tab" aria-selected="true">Base Cabinets</button>
                                <button class="nav-link" id="nav-wallCabinet-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-wallCabinet" type="button" role="tab"
                                    aria-controls="nav-wallCabinet" aria-selected="false">Wall Cabinets</button>
                                <button class="nav-link" id="nav-tallCabinet-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-tallCabinet" type="button" role="tab"
                                    aria-controls="nav-tallCabinet" aria-selected="false">Tall Cabinets</button>
                                <button class="nav-link" id="nav-accessories-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-accessories" type="button" role="tab"
                                    aria-controls="nav-accessories" aria-selected="false">Accessories</button>
                            </div>
                        </nav>
                        <div class="tab-content p-3" style="border: 1px solid black !important" id="nav-tabContent">

                            {{-- Base Cabinets --}}
                            <div class="tab-pane fade show active" id="baseCabinet-tab" role="tabpanel"
                                aria-labelledby="nav-baseCabinet-tab" tabindex="0">
                                <div class="row">
                                    @if ($baseCabinets->count() > 0)
                                        @foreach ($baseCabinets as $index => $baseCabinet)
                                            {{--<div class="col-lg-4 col-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <!-- Button trigger modal -->
                                                        <a class="modal-icon z-3" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#baseCabinets{{ $index }}">
                                                            <i class="ri-add-circle-line text-black fs-4"></i>
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="baseCabinets{{ $index }}"
                                                            tabindex="-1"
                                                            aria-labelledby="baseCabinetsLabel{{ $index }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-5 col-12">
                                                                                    <img src="{{ !empty($baseCabinet->image_path) ? asset('imgs/products/'.$baseCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid" />
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-8 col-md-7 col-12 text-start">
                                                                                    <h1 class="fs-5 fw-bold">
                                                                                        {{ $baseCabinet->full_title }}
                                                                                    </h1>
                                                                                    <hr>
                                                                                    <h6
                                                                                        class="fs-6 fw-bolder text-dark">
                                                                                        Styling</h6>
                                                                                    <ul>
                                                                                        <li>HEIGHT: 720mm</li>
                                                                                        <li>WIDTH: 1000mm</li>
                                                                                        <li>DEPTH: 570mm</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <figure>
                                                                <img class="product-image px-0"
                                                                    src="{{ !empty($baseCabinet->image_path) ? asset('imgs/products/'.$baseCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap">
                                                            </figure>
                                                            <div class="">
                                                                <a href=""
                                                                    class="text-center text-decoration-underline fs-5 fw-bold">
                                                                    {{ $baseCabinet->short_title }}
                                                                </a>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $baseCabinet->product_code }}</small>
                                                                </p>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $baseCabinet->dimensions }}</small>
                                                                </p>
                                                                <div class="container-fluid">
                                                                    <div
                                                                        class="row justify-content-center product-counter">
                                                                        <input id="minus{{ $baseCabinet->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $baseCabinet->id }}', '{{ $baseCabinet->product_code }}', '{{ $baseCabinet->full_title }}', {{ $baseCabinet->price }}, {{ $baseCabinet->discounted_price }}, {{ $baseCabinet->discounted_percentage ?? 0 }}, '{{ $baseCabinet->ParentCategory->slug }}')" />
                                                                        <input id="quantity{{ $baseCabinet->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0"
                                                                            name="quantity" disabled />
                                                                        <input id="plus{{ $baseCabinet->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+"
                                                                            {{$baseCabinet->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $baseCabinet->id }}', '{{ $baseCabinet->product_code }}', '{{ $baseCabinet->full_title }}', {{ $baseCabinet->price }}, {{ $baseCabinet->discounted_price }}, {{ $baseCabinet->discounted_percentage ?? 0 }}, '{{ $baseCabinet->ParentCategory->slug }}')" />
                                                                    </div>
                                                                </div>
                                                                <p class="fs-5 fw-bold mt-lg-2">
                                                                    {{ $baseCabinet->price == 0 ? 'Out of Stock' : '£' . $baseCabinet->price }}
                                                                </p>
                                                                <div class="container-fluid">
                                                                    @if ($baseCabinet->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $baseCabinet->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($baseCabinet->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $baseCabinet->colour->trade_colour ? $baseCabinet->colour->trade_colour : $baseCabinet->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($baseCabinet->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $baseCabinet->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>--}}
                                            <div class="col-lg-4 col-6 mb-3">
                                                <div class="card border-1 btn btn-outline-warning bg-light p-0" style="border-radius: 0;">
                                                    <div class="bg-warning card-header px-0 py-0">
                                                        <div class="py-2 text-center product-short-title-container w-100">
                                                            <a href="#" class="product-short-title fw-bold text-decoration-underline fs-4">
                                                                {{ $baseCabinet->short_title }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <div class="modal fade" id="productModal{{ $baseCabinet->id }}" tabindex="-1"
                                                            aria-labelledby="productModalLabel{{ $baseCabinet->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content" style="border-radius: 0; border-top: 3px solid #ebc266; border-bottom: 3px solid #ebc266">
                                                                    <div class="modal-header border-bottom border-light">
                                                                        <h1 class="fs-5 fw-bold text-dark border-bottom border-dark">
                                                                            {{ $baseCabinet->full_title }}
                                                                        </h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-8 col-md-8 col-8 border-bottom border-warning bg-light">
                                                                                    <img src="{{ !empty($baseCabinet->image_path) ? asset('imgs/products/'.$baseCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid product-image" style="height: 300px;" />
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-4 text-start text-dark">
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">Styling</h6>
                                                                                        <ul style="list-style: none; padding: 0">
                                                                                            @if ($baseCabinet->style)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Style:</small>
                                                                                                    {{ $baseCabinet->style->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if ($baseCabinet->assembly)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Assembly:</small>
                                                                                                    {{ $baseCabinet->assembly->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if ($baseCabinet->colour)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Colour:</small>
                                                                                                    {{ $baseCabinet->colour->trade_colour ? $baseCabinet->colour->trade_colour : $baseCabinet->colour->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">Dimensions
                                                                                        </h6>
                                                                                        <ul style="list-style: none; padding: 0">
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                    {{ intval($baseCabinet->height) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                    {{ intval($baseCabinet->width) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                    {{ intval($baseCabinet->depth) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">
                                                                                            Range Specification
                                                                                        </h6>
                                                                                        <p class="mb-0">
                                                                                            <small>
                                                                                                @if ($baseCabinet->category?->description)
                                                                                                {!! $baseCabinet->category->description !!}
                                                                                                @elseif ($baseCabinet->category?->parentCategory?->description)
                                                                                                {!! $baseCabinet->category->parentCategory->description !!}
                                                                                                @endif
                                                                                            </small>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <figure class="my-0" style="margin-bottom: 0px !important;">
                                                                        <img class="product-image px-0"
                                                                            style="margin-bottom: 0px !important;min-height:175px;max-height:175px;object-fit:contain"
                                                                            src="{{ !empty($baseCabinet->image_path) ? asset('imgs/products/'.$baseCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                            alt="Card image cap" data-bs-toggle="modal"
                                                                            data-bs-target="#productModal{{ $baseCabinet->id }}">
                                                                    </figure>
                                                                    <p class="mt-2"><small class="fw-bold text-start text-dark">{{ $baseCabinet->product_code }}</small></p>
                                                                    <p class="">
                                                                        <small
                                                                            class="fw-bold text-start text-dark">{{ $baseCabinet->dimensions }}</small>
                                                                    </p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="container-fluid">
                                                                        <div class="row justify-content-center">
                                                                            <div
                                                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center product-counter">
                                                                                <input id="minus{{ $baseCabinet->id }}"
                                                                                    class="minus border bg-dark text-light p-0"
                                                                                    type="button" value="-"
                                                                                    onclick="decreaseQuantity('{{ $baseCabinet->id }}', '{{ $baseCabinet->product_code }}', '{{ $baseCabinet->full_title }}', {{ $baseCabinet->price }}, {{ $baseCabinet->discounted_price }}, {{ $baseCabinet->discounted_percentage ?? 0 }}, '{{ $baseCabinet->ParentCategory->slug }}')" />
                                                                                <input id="quantity{{ $baseCabinet->id }}"
                                                                                    class="quantity border border-black text-center"
                                                                                    type="text" value="0" name="quantity"
                                                                                    disabled />
                                                                                <input id="plus{{ $baseCabinet->id }}"
                                                                                    class="plus border bg-dark text-light p-0"
                                                                                    type="button" value="+" type="number"
                                                                                    max="10"
                                                                                    {{$baseCabinet->price == 0 ? 'disabled' : '' }} 
                                                                                    onclick="increaseQuantity('{{ $baseCabinet->id }}', '{{ $baseCabinet->product_code }}', '{{ $baseCabinet->full_title }}', {{ $baseCabinet->price }}, {{ $baseCabinet->discounted_price }}, {{ $baseCabinet->discounted_percentage ?? 0 }}, '{{ $baseCabinet->ParentCategory->slug }}')" />
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="fs-5 fw-bold mt-lg-2 text-dark">
                                                                                    {{ $baseCabinet->price == 0 ? 'Out of Stock' : '£' . $baseCabinet->price }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="container-fluid">
                                                                        @if ($baseCabinet->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $baseCabinet->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @if ($baseCabinet->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $baseCabinet->colour->trade_colour ? $baseCabinet->colour->trade_colour : $baseCabinet->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @if ($baseCabinet->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $baseCabinet->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <p class="">No Base Cabinets available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Wall Cabinets --}}
                            <div class="tab-pane fade" id="nav-wallCabinet" role="tabpanel"
                                aria-labelledby="nav-wallCabinet-tab" tabindex="0">
                                <div class="row">
                                    @if ($wallCabinets->count() > 0)
                                        @foreach ($wallCabinets as $index => $wallCabinet)
                                            {{--<div class="col-lg-4 col-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <!-- Button trigger modal -->
                                                        <a class="modal-icon z-3" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#wallCabinets{{ $index }}">
                                                            <i class="ri-add-circle-line text-black fs-4"></i>
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="wallCabinets{{ $index }}"
                                                            tabindex="-1"
                                                            aria-labelledby="wallCabinetsLabel{{ $index }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-5 col-12">
                                                                                    <img src="{{ !empty($wallCabinet->image_path) ? asset('imgs/products/'.$wallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid" />
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-8 col-md-7 col-12 text-start">
                                                                                    <h1 class="fs-5 fw-bold">
                                                                                        {{ $wallCabinet->full_title }}
                                                                                    </h1>
                                                                                    <hr>
                                                                                    <h6
                                                                                        class="fs-6 fw-bolder text-dark">
                                                                                        Styling</h6>
                                                                                    <ul>
                                                                                        <li>HEIGHT: 720mm</li>
                                                                                        <li>WIDTH: 1000mm</li>
                                                                                        <li>DEPTH: 570mm</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <figure>
                                                                <img class="product-image px-0"
                                                                    src="{{ !empty($wallCabinet->image_path) ? asset('imgs/products/'.$wallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap">
                                                            </figure>
                                                            <div class="">
                                                                <a href=""
                                                                    class="text-center text-decoration-underline fs-5 fw-bold">
                                                                    {{ $wallCabinet->short_title }}
                                                                </a>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $wallCabinet->product_code }}</small>
                                                                </p>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $wallCabinet->dimensions }}</small>
                                                                </p>
                                                                <div class="container-fluid">
                                                                    <div
                                                                        class="row justify-content-center product-counter">
                                                                        <input id="minus{{ $wallCabinet->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $wallCabinet->id }}', '{{ $wallCabinet->product_code }}', '{{ $wallCabinet->full_title }}', {{ $wallCabinet->price }}, {{ $wallCabinet->discounted_price }}, {{ $wallCabinet->discounted_percentage ?? 0 }}, '{{ $wallCabinet->ParentCategory->slug }}')" />
                                                                        <input id="quantity{{ $wallCabinet->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0"
                                                                            name="quantity" disabled />
                                                                        <input id="plus{{ $wallCabinet->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+"
                                                                            {{$wallCabinet->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $wallCabinet->id }}', '{{ $wallCabinet->product_code }}', '{{ $wallCabinet->full_title }}', {{ $wallCabinet->price }}, {{ $wallCabinet->discounted_price }}, {{ $wallCabinet->discounted_percentage ?? 0 }}, '{{ $wallCabinet->ParentCategory->slug }}')" />
                                                                    </div>
                                                                </div>
                                                                <p class="fs-5 fw-bold mt-lg-2">
                                                                    {{ $wallCabinet->price == 0 ? 'Out of Stock' : '£' . $wallCabinet->price }}
                                                                </p>
                                                                <div class="container-fluid">
                                                                    @if ($wallCabinet->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $wallCabinet->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($wallCabinet->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $wallCabinet->colour->trade_colour ? $wallCabinet->colour->trade_colour : $wallCabinet->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($wallCabinet->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $wallCabinet->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>--}}
                                            <div class="col-lg-4 col-6 mb-3">
                                                <div class="card border-1 btn btn-outline-warning bg-light p-0" style="border-radius: 0;">
                                                    <div class="bg-warning card-header px-0 py-0">
                                                        <div class="py-2 text-center product-short-title-container w-100">
                                                            <a href="#" class="product-short-title fw-bold text-decoration-underline fs-4">
                                                                {{ $wallCabinet->short_title }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <div class="modal fade" id="productModal{{ $wallCabinet->id }}" tabindex="-1"
                                                            aria-labelledby="productModalLabel{{ $wallCabinet->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content" style="border-radius: 0; border-top: 3px solid #ebc266; border-bottom: 3px solid #ebc266">
                                                                    <div class="modal-header border-bottom border-light">
                                                                        <h1 class="fs-5 fw-bold text-dark border-bottom border-dark">
                                                                            {{ $wallCabinet->full_title }}
                                                                        </h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-8 col-md-8 col-8 border-bottom border-warning bg-light">
                                                                                    <img src="{{ !empty($wallCabinet->image_path) ? asset('imgs/products/'.$wallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid product-image" style="height: 300px;" />
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-4 text-start text-dark">
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">Styling</h6>
                                                                                        <ul style="list-style: none; padding: 0">
                                                                                            @if ($wallCabinet->style)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Style:</small>
                                                                                                    {{ $wallCabinet->style->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if ($wallCabinet->assembly)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Assembly:</small>
                                                                                                    {{ $wallCabinet->assembly->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if ($wallCabinet->colour)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Colour:</small>
                                                                                                    {{ $wallCabinet->colour->trade_colour ? $wallCabinet->colour->trade_colour : $wallCabinet->colour->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">Dimensions
                                                                                        </h6>
                                                                                        <ul style="list-style: none; padding: 0">
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                    {{ intval($wallCabinet->height) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                    {{ intval($wallCabinet->width) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                    {{ intval($wallCabinet->depth) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">
                                                                                            Range Specification
                                                                                        </h6>
                                                                                        <p class="mb-0">
                                                                                            <small>
                                                                                                @if ($wallCabinet->category?->description)
                                                                                                {!! $wallCabinet->category->description !!}
                                                                                                @elseif ($wallCabinet->category?->parentCategory?->description)
                                                                                                {!! $wallCabinet->category->parentCategory->description !!}
                                                                                                @endif
                                                                                            </small>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <figure class="my-0" style="margin-bottom: 0px !important;">
                                                                        <img class="product-image px-0"
                                                                            style="margin-bottom: 0px !important;min-height:175px;max-height:175px;object-fit:contain"
                                                                            src="{{ !empty($wallCabinet->image_path) ? asset('imgs/products/'.$wallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                            alt="Card image cap" data-bs-toggle="modal"
                                                                            data-bs-target="#productModal{{ $wallCabinet->id }}">
                                                                    </figure>
                                                                    <p class="mt-2"><small class="fw-bold text-start text-dark">{{ $wallCabinet->product_code }}</small></p>
                                                                    <p class="">
                                                                        <small
                                                                            class="fw-bold text-start text-dark">{{ $wallCabinet->dimensions }}</small>
                                                                    </p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="container-fluid">
                                                                        <div class="row justify-content-center">
                                                                            <div
                                                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center product-counter">
                                                                                <input id="minus{{ $wallCabinet->id }}"
                                                                                    class="minus border bg-dark text-light p-0"
                                                                                    type="button" value="-"
                                                                                    onclick="decreaseQuantity('{{ $wallCabinet->id }}', '{{ $wallCabinet->product_code }}', '{{ $wallCabinet->full_title }}', {{ $wallCabinet->price }}, {{ $wallCabinet->discounted_price }}, {{ $wallCabinet->discounted_percentage ?? 0 }}, '{{ $wallCabinet->ParentCategory->slug }}')" />
                                                                                <input id="quantity{{ $wallCabinet->id }}"
                                                                                    class="quantity border border-black text-center"
                                                                                    type="text" value="0" name="quantity"
                                                                                    disabled />
                                                                                <input id="plus{{ $wallCabinet->id }}"
                                                                                    class="plus border bg-dark text-light p-0"
                                                                                    type="button" value="+" type="number"
                                                                                    max="10"
                                                                                    {{$wallCabinet->price == 0 ? 'disabled' : '' }} 
                                                                                    onclick="increaseQuantity('{{ $wallCabinet->id }}', '{{ $wallCabinet->product_code }}', '{{ $wallCabinet->full_title }}', {{ $wallCabinet->price }}, {{ $wallCabinet->discounted_price }}, {{ $wallCabinet->discounted_percentage ?? 0 }}, '{{ $wallCabinet->ParentCategory->slug }}')" />
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="fs-5 fw-bold mt-lg-2 text-dark">
                                                                                    {{ $wallCabinet->price == 0 ? 'Out of Stock' : '£' . $wallCabinet->price }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="container-fluid">
                                                                        @if ($wallCabinet->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $wallCabinet->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @if ($wallCabinet->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $wallCabinet->colour->trade_colour ? $wallCabinet->colour->trade_colour : $wallCabinet->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @if ($wallCabinet->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $wallCabinet->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <p class="">No Wall Cabinets available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Tall Cabinets --}}
                            <div class="tab-pane fade" id="nav-tallCabinet" role="tabpanel"
                                aria-labelledby="nav-tallCabinet-tab" tabindex="0">
                                <div class="row">
                                    @if ($tallCabinets->count() > 0)
                                        @foreach ($tallCabinets as $index => $tallCabinet)
                                            {{--<div class="col-lg-4 col-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <!-- Button trigger modal -->
                                                        <a class="modal-icon z-3" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#tallCabinets{{ $index }}">
                                                            <i class="ri-add-circle-line text-black fs-4"></i>
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="tallCabinets{{ $index }}"
                                                            tabindex="-1"
                                                            aria-labelledby="tallCabinetsLabel{{ $index }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-5 col-12">
                                                                                    <img src="{{ !empty($tallCabinet->image_path) ? asset('imgs/products/'.$tallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid" />
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-8 col-md-7 col-12 text-start">
                                                                                    <h1 class="fs-5 fw-bold">
                                                                                        {{ $tallCabinet->full_title }}
                                                                                    </h1>
                                                                                    <hr>
                                                                                    <h6
                                                                                        class="fs-6 fw-bolder text-dark">
                                                                                        Styling</h6>
                                                                                    <ul>
                                                                                        <li>HEIGHT: 720mm</li>
                                                                                        <li>WIDTH: 1000mm</li>
                                                                                        <li>DEPTH: 570mm</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <figure>
                                                                <img class="product-image px-0"
                                                                    src="{{ !empty($tallCabinet->image_path) ? asset('imgs/products/'.$tallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap">
                                                            </figure>
                                                            <div class="">
                                                                <a href=""
                                                                    class="text-center text-decoration-underline fs-5 fw-bold">
                                                                    {{ $tallCabinet->short_title }}
                                                                </a>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $tallCabinet->product_code }}</small>
                                                                </p>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $tallCabinet->dimensions }}</small>
                                                                </p>
                                                                <div class="container-fluid">
                                                                    <div
                                                                        class="row justify-content-center product-counter">
                                                                        <input id="minus{{ $tallCabinet->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $tallCabinet->id }}', '{{ $tallCabinet->product_code }}', '{{ $tallCabinet->full_title }}', {{ $tallCabinet->price }}, {{ $tallCabinet->discounted_price }}, {{ $tallCabinet->discounted_percentage ?? 0 }}, '{{ $tallCabinet->ParentCategory->slug }}')" />
                                                                        <input id="quantity{{ $tallCabinet->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0"
                                                                            name="quantity" disabled />
                                                                        <input id="plus{{ $tallCabinet->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+"
                                                                            {{$tallCabinet->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $tallCabinet->id }}', '{{ $tallCabinet->product_code }}', '{{ $tallCabinet->full_title }}', {{ $tallCabinet->price }}, {{ $tallCabinet->discounted_price }}, {{ $tallCabinet->discounted_percentage ?? 0 }}, '{{ $tallCabinet->ParentCategory->slug }}')" />
                                                                    </div>
                                                                </div>
                                                                <p class="fs-5 fw-bold mt-lg-2">
                                                                    {{ $tallCabinet->price == 0 ? 'Out of Stock' : '£' . $tallCabinet->price }}
                                                                </p>
                                                                <div class="container-fluid">
                                                                    @if ($tallCabinet->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $tallCabinet->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($tallCabinet->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $tallCabinet->colour->trade_colour ? $tallCabinet->colour->trade_colour : $tallCabinet->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($tallCabinet->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $tallCabinet->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>--}}
                                            <div class="col-lg-4 col-6 mb-3">
                                                <div class="card border-1 btn btn-outline-warning bg-light p-0" style="border-radius: 0;">
                                                    <div class="bg-warning card-header px-0 py-0">
                                                        <div class="py-2 text-center product-short-title-container w-100">
                                                            <a href="#" class="product-short-title fw-bold text-decoration-underline fs-4">
                                                                {{ $tallCabinet->short_title }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <div class="modal fade" id="productModal{{ $tallCabinet->id }}" tabindex="-1"
                                                            aria-labelledby="productModalLabel{{ $tallCabinet->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content" style="border-radius: 0; border-top: 3px solid #ebc266; border-bottom: 3px solid #ebc266">
                                                                    <div class="modal-header border-bottom border-light">
                                                                        <h1 class="fs-5 fw-bold text-dark border-bottom border-dark">
                                                                            {{ $tallCabinet->full_title }}
                                                                        </h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-8 col-md-8 col-8 border-bottom border-warning bg-light">
                                                                                    <img src="{{ !empty($tallCabinet->image_path) ? asset('imgs/products/'.$tallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid product-image" style="height: 300px;" />
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-4 text-start text-dark">
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">Styling</h6>
                                                                                        <ul style="list-style: none; padding: 0">
                                                                                            @if ($tallCabinet->style)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Style:</small>
                                                                                                    {{ $tallCabinet->style->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if ($tallCabinet->assembly)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Assembly:</small>
                                                                                                    {{ $tallCabinet->assembly->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if ($tallCabinet->colour)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Colour:</small>
                                                                                                    {{ $tallCabinet->colour->trade_colour ? $tallCabinet->colour->trade_colour : $tallCabinet->colour->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">Dimensions
                                                                                        </h6>
                                                                                        <ul style="list-style: none; padding: 0">
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                    {{ intval($tallCabinet->height) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                    {{ intval($tallCabinet->width) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                    {{ intval($tallCabinet->depth) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">
                                                                                            Range Specification
                                                                                        </h6>
                                                                                        <p class="mb-0">
                                                                                            <small>
                                                                                                @if ($tallCabinet->category?->description)
                                                                                                {!! $tallCabinet->category->description !!}
                                                                                                @elseif ($tallCabinet->category?->parentCategory?->description)
                                                                                                {!! $tallCabinet->category->parentCategory->description !!}
                                                                                                @endif
                                                                                            </small>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <figure class="my-0" style="margin-bottom: 0px !important;">
                                                                        <img class="product-image px-0"
                                                                            style="margin-bottom: 0px !important;min-height:175px;max-height:175px;object-fit:contain"
                                                                            src="{{ !empty($tallCabinet->image_path) ? asset('imgs/products/'.$tallCabinet->image_path) : asset('images/no-image-available.jpg') }}"
                                                                            alt="Card image cap" data-bs-toggle="modal"
                                                                            data-bs-target="#productModal{{ $tallCabinet->id }}">
                                                                    </figure>
                                                                    <p class="mt-2"><small class="fw-bold text-start text-dark">{{ $tallCabinet->product_code }}</small></p>
                                                                    <p class="">
                                                                        <small
                                                                            class="fw-bold text-start text-dark">{{ $tallCabinet->dimensions }}</small>
                                                                    </p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="container-fluid">
                                                                        <div class="row justify-content-center">
                                                                            <div
                                                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center product-counter">
                                                                                <input id="minus{{ $tallCabinet->id }}"
                                                                                    class="minus border bg-dark text-light p-0"
                                                                                    type="button" value="-"
                                                                                    onclick="decreaseQuantity('{{ $tallCabinet->id }}', '{{ $tallCabinet->product_code }}', '{{ $tallCabinet->full_title }}', {{ $tallCabinet->price }}, {{ $tallCabinet->discounted_price }}, {{ $tallCabinet->discounted_percentage ?? 0 }}, '{{ $tallCabinet->ParentCategory->slug }}')" />
                                                                                <input id="quantity{{ $tallCabinet->id }}"
                                                                                    class="quantity border border-black text-center"
                                                                                    type="text" value="0" name="quantity"
                                                                                    disabled />
                                                                                <input id="plus{{ $tallCabinet->id }}"
                                                                                    class="plus border bg-dark text-light p-0"
                                                                                    type="button" value="+" type="number"
                                                                                    max="10"
                                                                                    {{$tallCabinet->price == 0 ? 'disabled' : '' }} 
                                                                                    onclick="increaseQuantity('{{ $tallCabinet->id }}', '{{ $tallCabinet->product_code }}', '{{ $tallCabinet->full_title }}', {{ $tallCabinet->price }}, {{ $tallCabinet->discounted_price }}, {{ $tallCabinet->discounted_percentage ?? 0 }}, '{{ $tallCabinet->ParentCategory->slug }}')" />
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="fs-5 fw-bold mt-lg-2 text-dark">
                                                                                    {{ $tallCabinet->price == 0 ? 'Out of Stock' : '£' . $tallCabinet->price }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="container-fluid">
                                                                        @if ($tallCabinet->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $tallCabinet->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @if ($tallCabinet->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $tallCabinet->colour->trade_colour ? $tallCabinet->colour->trade_colour : $tallCabinet->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @if ($tallCabinet->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $tallCabinet->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <p class="">No Tall Cabinets available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Accessories --}}
                            <div class="tab-pane fade" id="nav-accessories" role="tabpanel"
                                aria-labelledby="nav-accessories-tab" tabindex="0">
                                <div class="row">
                                    @if ($accessories->count() > 0)
                                        @foreach ($accessories as $index => $accessory)
                                            <div class="col-lg-4 col-6 mb-3">
                                                <div class="card border-1 btn btn-outline-warning bg-light p-0" style="border-radius: 0;">
                                                    <div class="bg-warning card-header px-0 py-0">
                                                        <div class="py-2 text-center product-short-title-container w-100">
                                                            <a href="#" class="product-short-title fw-bold text-decoration-underline fs-4">
                                                                {{ $accessory->short_title }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <div class="modal fade" id="productModal{{ $accessory->id }}" tabindex="-1"
                                                            aria-labelledby="productModalLabel{{ $accessory->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content" style="border-radius: 0; border-top: 3px solid #ebc266; border-bottom: 3px solid #ebc266">
                                                                    <div class="modal-header border-bottom border-light">
                                                                        <h1 class="fs-5 fw-bold text-dark border-bottom border-dark">
                                                                            {{ $accessory->full_title }}
                                                                        </h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-8 col-md-8 col-8 border-bottom border-warning bg-light">
                                                                                    <img src="{{ !empty($accessory->image_path) ? asset('imgs/products/'.$accessory->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid product-image" style="height: 300px;" />
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-4 text-start text-dark">
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">Styling</h6>
                                                                                        <ul style="list-style: none; padding: 0">
                                                                                            @if ($accessory->style)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Style:</small>
                                                                                                    {{ $accessory->style->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if ($accessory->assembly)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Assembly:</small>
                                                                                                    {{ $accessory->assembly->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                            @if ($accessory->colour)
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">Colour:</small>
                                                                                                    {{ $accessory->colour->trade_colour ? $accessory->colour->trade_colour : $accessory->colour->name }}
                                                                                                </p>
                                                                                            </li>
                                                                                            @endif
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">Dimensions
                                                                                        </h6>
                                                                                        <ul style="list-style: none; padding: 0">
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                                    {{ intval($accessory->height) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                                    {{ intval($accessory->width) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    <small
                                                                                                        class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                                    {{ intval($accessory->depth) }}mm
                                                                                                </p>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-6 fw-bolder text-dark">
                                                                                            Range Specification
                                                                                        </h6>
                                                                                        <p class="mb-0">
                                                                                            <small>
                                                                                                @if ($accessory->category?->description)
                                                                                                {!! $accessory->category->description !!}
                                                                                                @elseif ($accessory->category?->parentCategory?->description)
                                                                                                {!! $accessory->category->parentCategory->description !!}
                                                                                                @endif
                                                                                            </small>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <figure class="my-0" style="margin-bottom: 0px !important;">
                                                                        <img class="product-image px-0"
                                                                            style="margin-bottom: 0px !important;min-height:175px;max-height:175px;object-fit:contain"
                                                                            src="{{ !empty($accessory->image_path) ? asset('imgs/products/'.$accessory->image_path) : asset('images/no-image-available.jpg') }}"
                                                                            alt="Card image cap" data-bs-toggle="modal"
                                                                            data-bs-target="#productModal{{ $accessory->id }}">
                                                                    </figure>
                                                                    <p class="mt-2"><small class="fw-bold text-start text-dark">{{ $accessory->product_code }}</small></p>
                                                                    <p class="">
                                                                        <small
                                                                            class="fw-bold text-start text-dark">{{ $accessory->dimensions }}</small>
                                                                    </p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="container-fluid">
                                                                        <div class="row justify-content-center">
                                                                            <div
                                                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center product-counter">
                                                                                <input id="minus{{ $accessory->id }}"
                                                                                    class="minus border bg-dark text-light p-0"
                                                                                    type="button" value="-"
                                                                                    onclick="decreaseQuantity('{{ $accessory->id }}', '{{ $accessory->product_code }}', '{{ $accessory->full_title }}', {{ $accessory->price }}, {{ $accessory->discounted_price }}, {{ $accessory->discounted_percentage ?? 0 }}, '{{ $accessory->ParentCategory->slug }}')" />
                                                                                <input id="quantity{{ $accessory->id }}"
                                                                                    class="quantity border border-black text-center"
                                                                                    type="text" value="0" name="quantity"
                                                                                    disabled />
                                                                                <input id="plus{{ $accessory->id }}"
                                                                                    class="plus border bg-dark text-light p-0"
                                                                                    type="button" value="+" type="number"
                                                                                    max="10"
                                                                                    {{$accessory->price == 0 ? 'disabled' : '' }} 
                                                                                    onclick="increaseQuantity('{{ $accessory->id }}', '{{ $accessory->product_code }}', '{{ $accessory->full_title }}', {{ $accessory->price }}, {{ $accessory->discounted_price }}, {{ $accessory->discounted_percentage ?? 0 }}, '{{ $accessory->ParentCategory->slug }}')" />
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="fs-5 fw-bold mt-lg-2 text-dark">
                                                                                    {{ $accessory->price == 0 ? 'Out of Stock' : '£' . $accessory->price }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="container-fluid">
                                                                        @if ($accessory->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $accessory->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @if ($accessory->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $accessory->colour->trade_colour ? $accessory->colour->trade_colour : $accessory->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @if ($accessory->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                                    <small>{{ $accessory->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <p class="">No Accessories available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="collapse-wrapper my-4">
                    <a class="fw-semibold text-dark text-uppercase collapse-heading" data-bs-toggle="collapse"
                        href="#internals" role="button" aria-expanded="false" aria-controls="internals">
                        <span
                            class="bg-dark text-white fw-semibold py-2 px-2 text-center me-2 collapse-heading-number">2</span>
                        Internals
                    </a>
                    <div class="collapse-container collapse mt-3" id="internals">
                        <div class="row">
                            @if ($internals->count() > 0)
                                @foreach ($internals as $index => $internal)
                                    {{--<div class="col-lg-4 col-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <!-- Button trigger modal -->
                                                <a class="modal-icon z-3" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#accessories{{ $index }}">
                                                    <i class="ri-add-circle-line text-black fs-4"></i>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="accessories{{ $index }}"
                                                    tabindex="-1"
                                                    aria-labelledby="accessoriesLabel{{ $index }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-5 col-12">
                                                                            <img src="{{ !empty($internal->image_path) ? asset('imgs/products/'.$internal->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                class="img-fluid" />
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-8 col-md-7 col-12 text-start">
                                                                            <h1 class="fs-5 fw-bold">
                                                                                {{ $internal->full_title }}
                                                                            </h1>
                                                                            <hr>
                                                                            <h6 class="fs-6 fw-bolder text-dark">
                                                                                Styling</h6>
                                                                            <ul>
                                                                                <li>HEIGHT: 720mm</li>
                                                                                <li>WIDTH: 1000mm</li>
                                                                                <li>DEPTH: 570mm</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <figure>
                                                        <img class="product-image px-0"
                                                            src="{{ !empty($internal->image_path) ? asset('imgs/products/'.$internal->image_path) : asset('images/no-image-available.jpg') }}"
                                                            alt="Card image cap">
                                                    </figure>
                                                    <div class="">
                                                        <a href=""
                                                            class="text-center text-decoration-underline fs-5 fw-bold">
                                                            {{ $internal->short_title }}
                                                        </a>
                                                        <p class="py-lg-3 py-2">
                                                            <small
                                                                class="fw-bold text-center">{{ $internal->product_code }}</small>
                                                        </p>
                                                        <p class="py-lg-3 py-2">
                                                            <small
                                                                class="fw-bold text-center">{{ $internal->dimensions }}</small>
                                                        </p>
                                                        <div class="container-fluid">
                                                            <div class="row justify-content-center product-counter">
                                                                <input id="minus{{ $internal->id }}"
                                                                    class="minus border bg-dark text-light p-0"
                                                                    type="button" value="-"
                                                                    onclick="decreaseQuantity('{{ $internal->id }}', '{{ $internal->product_code }}', '{{ $internal->full_title }}', {{ $internal->price }}, {{ $internal->discounted_price }}, {{ $internal->discounted_percentage ?? 0 }}, '{{ $internal->ParentCategory->slug }}')" />
                                                                <input id="quantity{{ $internal->id }}"
                                                                    class="quantity border border-black text-center"
                                                                    type="text" value="0" name="quantity"
                                                                    disabled />
                                                                <input id="plus{{ $internal->id }}"
                                                                    class="plus border bg-dark text-light p-0"
                                                                    type="button" value="+"
                                                                    {{$internal->price == 0 ? 'disabled' : '' }} 
                                                                    onclick="increaseQuantity('{{ $internal->id }}', '{{ $internal->product_code }}', '{{ $internal->full_title }}', {{ $internal->price }}, {{ $internal->discounted_price }}, {{ $internal->discounted_percentage ?? 0 }}, '{{ $internal->ParentCategory->slug }}')" />
                                                            </div>
                                                        </div>
                                                        <p class="fs-5 fw-bold mt-lg-2">
                                                            {{ $internal->price == 0 ? 'Out of Stock' : '£' . $internal->price }}
                                                        </p>
                                                        <div class="container-fluid">
                                                            @if ($internal->style)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-uppercase m-0 pt-1">
                                                                            <small>Style</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p
                                                                            class="category-value fw-semibold py-1 mb-2">
                                                                            <small>{{ $internal->style->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if ($internal->colour)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-uppercase m-0 pt-1">
                                                                            <small>Colour</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p
                                                                            class="category-value fw-semibold py-1 mb-2">
                                                                            <small>{{ $internal->colour->trade_colour ? $internal->colour->trade_colour : $internal->colour->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if ($internal->assembly)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-uppercase m-0 pt-1">
                                                                            <small>Assembly</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p
                                                                            class="category-value fw-semibold py-1 mb-2">
                                                                            <small>{{ $internal->assembly->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}
                                    <div class="col-lg-4 col-6 mb-3">
                                        <div class="card border-1 btn btn-outline-warning bg-light p-0" style="border-radius: 0;">
                                            <div class="bg-warning card-header px-0 py-0">
                                                <div class="py-2 text-center product-short-title-container w-100">
                                                    <a href="#" class="product-short-title fw-bold text-decoration-underline fs-4">
                                                        {{ $internal->short_title }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body text-center">
                                                <div class="modal fade" id="productModal{{ $internal->id }}" tabindex="-1"
                                                    aria-labelledby="productModalLabel{{ $internal->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content" style="border-radius: 0; border-top: 3px solid #ebc266; border-bottom: 3px solid #ebc266">
                                                            <div class="modal-header border-bottom border-light">
                                                                <h1 class="fs-5 fw-bold text-dark border-bottom border-dark">
                                                                    {{ $internal->full_title }}
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-lg-8 col-md-8 col-8 border-bottom border-warning bg-light">
                                                                            <img src="{{ !empty($internal->image_path) ? asset('imgs/products/'.$internal->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                class="img-fluid product-image" style="height: 300px;" />
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-4 text-start text-dark">
                                                                            <div>
                                                                                <h6 class="fs-6 fw-bolder text-dark">Styling</h6>
                                                                                <ul style="list-style: none; padding: 0">
                                                                                    @if ($internal->style)
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">Style:</small>
                                                                                            {{ $internal->style->name }}
                                                                                        </p>
                                                                                    </li>
                                                                                    @endif
                                                                                    @if ($internal->assembly)
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">Assembly:</small>
                                                                                            {{ $internal->assembly->name }}
                                                                                        </p>
                                                                                    </li>
                                                                                    @endif
                                                                                    @if ($internal->colour)
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">Colour:</small>
                                                                                            {{ $internal->colour->trade_colour ? $internal->colour->trade_colour : $internal->colour->name }}
                                                                                        </p>
                                                                                    </li>
                                                                                    @endif
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <h6 class="fs-6 fw-bolder text-dark">Dimensions
                                                                                </h6>
                                                                                <ul style="list-style: none; padding: 0">
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                            {{ intval($internal->height) }}mm
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                            {{ intval($internal->width) }}mm
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                            {{ intval($internal->depth) }}mm
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <h6 class="fs-6 fw-bolder text-dark">
                                                                                    Range Specification
                                                                                </h6>
                                                                                <p class="mb-0">
                                                                                    <small>
                                                                                        @if ($internal->category?->description)
                                                                                        {!! $internal->category->description !!}
                                                                                        @elseif ($internal->category?->parentCategory?->description)
                                                                                        {!! $internal->category->parentCategory->description !!}
                                                                                        @endif
                                                                                    </small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <figure class="my-0" style="margin-bottom: 0px !important;">
                                                                <img class="product-image px-0"
                                                                    style="margin-bottom: 0px !important;min-height:175px;max-height:175px;object-fit:contain"
                                                                    src="{{ !empty($internal->image_path) ? asset('imgs/products/'.$internal->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap" data-bs-toggle="modal"
                                                                    data-bs-target="#productModal{{ $internal->id }}">
                                                            </figure>
                                                            <p class="mt-2"><small class="fw-bold text-start text-dark">{{ $internal->product_code }}</small></p>
                                                            <p class="">
                                                                <small
                                                                    class="fw-bold text-start text-dark">{{ $internal->dimensions }}</small>
                                                            </p>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="container-fluid">
                                                                <div class="row justify-content-center">
                                                                    <div
                                                                        class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center product-counter">
                                                                        <input id="minus{{ $internal->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $internal->id }}', '{{ $internal->product_code }}', '{{ $internal->full_title }}', {{ $internal->price }}, {{ $internal->discounted_price }}, {{ $internal->discounted_percentage ?? 0 }}, '{{ $internal->ParentCategory->slug }}')" />
                                                                        <input id="quantity{{ $internal->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0" name="quantity"
                                                                            disabled />
                                                                        <input id="plus{{ $internal->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+" type="number"
                                                                            max="10"
                                                                            {{$internal->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $internal->id }}', '{{ $internal->product_code }}', '{{ $internal->full_title }}', {{ $internal->price }}, {{ $internal->discounted_price }}, {{ $internal->discounted_percentage ?? 0 }}, '{{ $internal->ParentCategory->slug }}')" />
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p class="fs-5 fw-bold mt-lg-2 text-dark">
                                                                            {{ $internal->price == 0 ? 'Out of Stock' : '£' . $internal->price }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container-fluid">
                                                                @if ($internal->style)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                            <small>Style</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                            <small>{{ $internal->style->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                @if ($internal->colour)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                            <small>Colour</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                            <small>{{ $internal->colour->trade_colour ? $internal->colour->trade_colour : $internal->colour->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                @if ($internal->assembly)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                            <small>Assembly</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                            <small>{{ $internal->assembly->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0">
                                                <a href="#" class="product-short-title text-decoration-underline">
                                                <small>View more</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12">
                                    <p class="">No internal available</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="collapse-wrapper my-4">
                    <a class="fw-semibold text-dark text-uppercase collapse-heading" data-bs-toggle="collapse"
                        href="#handles" role="button" aria-expanded="false" aria-controls="handles">
                        <span
                            class="bg-dark text-white fw-semibold py-2 px-2 text-center me-2 collapse-heading-number">3</span>
                        Handles
                    </a>
                    <div class="collapse-container collapse mt-3" id="handles">
                        <div class="row">
                            @if ($handles->count() > 0)
                                @foreach ($handles as $index => $handle)
                                    {{--<div class="col-lg-4 col-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <!-- Button trigger modal -->
                                                <a class="modal-icon z-3" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#handles{{ $index }}">
                                                    <i class="ri-add-circle-line text-black fs-4"></i>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="handles{{ $index }}"
                                                    tabindex="-1" aria-labelledby="handlesLabel{{ $index }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-5 col-12">
                                                                            <img src="{{ !empty($handle->image_path) ? asset('imgs/products/'.$handle->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                class="img-fluid" />
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-8 col-md-7 col-12 text-start">
                                                                            <h1 class="fs-5 fw-bold">
                                                                                {{ $handle->full_title }}
                                                                            </h1>
                                                                            <hr>
                                                                            <h6 class="fs-6 fw-bolder text-dark">
                                                                                Styling</h6>
                                                                            <ul>
                                                                                <li>HEIGHT: 720mm</li>
                                                                                <li>WIDTH: 1000mm</li>
                                                                                <li>DEPTH: 570mm</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <figure>
                                                        <img class="product-image px-0"
                                                            src="{{ !empty($handle->image_path) ? asset('imgs/products/'.$handle->image_path) : asset('images/no-image-available.jpg') }}"
                                                            alt="Card image cap">
                                                    </figure>
                                                    <div class="">
                                                        <a href=""
                                                            class="text-center text-decoration-underline fs-5 fw-bold">
                                                            {{ $handle->short_title }}
                                                        </a>
                                                        <p class="py-lg-3 py-2">
                                                            <small
                                                                class="fw-bold text-center">{{ $handle->product_code }}</small>
                                                        </p>
                                                        <p class="py-lg-3 py-2">
                                                            <small
                                                                class="fw-bold text-center">{{ $handle->dimensions }}</small>
                                                        </p>
                                                        <div class="container-fluid">
                                                            <div class="row justify-content-center product-counter">
                                                                <input id="minus{{ $handle->id }}"
                                                                    class="minus border bg-dark text-light p-0"
                                                                    type="button" value="-"
                                                                    onclick="decreaseQuantity('{{ $handle->id }}', '{{ $handle->product_code }}', '{{ $handle->full_title }}', {{ $handle->price }}, {{ $handle->discounted_price }}, {{ $handle->discounted_percentage ?? 0 }}, '{{ $handle->ParentCategory->slug }}')" />
                                                                <input id="quantity{{ $handle->id }}"
                                                                    class="quantity border border-black text-center"
                                                                    type="text" value="0" name="quantity"
                                                                    disabled />
                                                                <input id="plus{{ $handle->id }}"
                                                                    class="plus border bg-dark text-light p-0"
                                                                    type="button" value="+"
                                                                    {{$handle->price == 0 ? 'disabled' : '' }} 
                                                                    onclick="increaseQuantity('{{ $handle->id }}', '{{ $handle->product_code }}', '{{ $handle->full_title }}', {{ $handle->price }}, {{ $handle->discounted_price }}, {{ $handle->discounted_percentage ?? 0 }}, '{{ $handle->ParentCategory->slug }}')" />
                                                            </div>
                                                        </div>
                                                        <p class="fs-5 fw-bold mt-lg-2">
                                                            {{ $handle->price == 0 ? 'Out of Stock' : '£' . $handle->price }}
                                                        </p>
                                                        <div class="container-fluid">
                                                            @if ($handle->style)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-uppercase m-0 pt-1">
                                                                            <small>Style</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p
                                                                            class="category-value fw-semibold py-1 mb-2">
                                                                            <small>{{ $handle->style->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if ($handle->colour)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-uppercase m-0 pt-1">
                                                                            <small>Colour</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p
                                                                            class="category-value fw-semibold py-1 mb-2">
                                                                            <small>{{ $handle->colour->trade_colour ? $handle->colour->trade_colour : $handle->colour->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if ($handle->assembly)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-uppercase m-0 pt-1">
                                                                            <small>Assembly</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p
                                                                            class="category-value fw-semibold py-1 mb-2">
                                                                            <small>{{ $handle->assembly->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}
                                    <div class="col-lg-4 col-6 mb-3">
                                        <div class="card border-1 btn btn-outline-warning bg-light p-0" style="border-radius: 0;">
                                            <div class="bg-warning card-header px-0 py-0">
                                                <div class="py-2 text-center product-short-title-container w-100">
                                                    <a href="#" class="product-short-title fw-bold text-decoration-underline fs-4">
                                                        {{ $handle->short_title }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body text-center">
                                                <div class="modal fade" id="productModal{{ $handle->id }}" tabindex="-1"
                                                    aria-labelledby="productModalLabel{{ $handle->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content" style="border-radius: 0; border-top: 3px solid #ebc266; border-bottom: 3px solid #ebc266">
                                                            <div class="modal-header border-bottom border-light">
                                                                <h1 class="fs-5 fw-bold text-dark border-bottom border-dark">
                                                                    {{ $handle->full_title }}
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-lg-8 col-md-8 col-8 border-bottom border-warning bg-light">
                                                                            <img src="{{ !empty($handle->image_path) ? asset('imgs/products/'.$handle->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                class="img-fluid product-image" style="height: 300px;" />
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-4 text-start text-dark">
                                                                            <div>
                                                                                <h6 class="fs-6 fw-bolder text-dark">Styling</h6>
                                                                                <ul style="list-style: none; padding: 0">
                                                                                    @if ($handle->style)
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">Style:</small>
                                                                                            {{ $handle->style->name }}
                                                                                        </p>
                                                                                    </li>
                                                                                    @endif
                                                                                    @if ($handle->assembly)
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">Assembly:</small>
                                                                                            {{ $handle->assembly->name }}
                                                                                        </p>
                                                                                    </li>
                                                                                    @endif
                                                                                    @if ($handle->colour)
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">Colour:</small>
                                                                                            {{ $handle->colour->trade_colour ? $handle->colour->trade_colour : $handle->colour->name }}
                                                                                        </p>
                                                                                    </li>
                                                                                    @endif
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <h6 class="fs-6 fw-bolder text-dark">Dimensions
                                                                                </h6>
                                                                                <ul style="list-style: none; padding: 0">
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">HEIGHT:</small>
                                                                                            {{ intval($handle->height) }}mm
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">WIDTH:</small>
                                                                                            {{ intval($handle->width) }}mm
                                                                                        </p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <p class="mb-0">
                                                                                            <small
                                                                                                class="fw-bold text-uppercase text-dark">DEPTH:</small>
                                                                                            {{ intval($handle->depth) }}mm
                                                                                        </p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <h6 class="fs-6 fw-bolder text-dark">
                                                                                    Range Specification
                                                                                </h6>
                                                                                <p class="mb-0">
                                                                                    <small>
                                                                                        @if ($handle->category?->description)
                                                                                        {!! $handle->category->description !!}
                                                                                        @elseif ($handle->category?->parentCategory?->description)
                                                                                        {!! $handle->category->parentCategory->description !!}
                                                                                        @endif
                                                                                    </small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <figure class="my-0" style="margin-bottom: 0px !important;">
                                                                <img class="product-image px-0"
                                                                    style="margin-bottom: 0px !important;min-height:175px;max-height:175px;object-fit:contain"
                                                                    src="{{ !empty($handle->image_path) ? asset('imgs/products/'.$handle->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap" data-bs-toggle="modal"
                                                                    data-bs-target="#productModal{{ $handle->id }}">
                                                            </figure>
                                                            <p class="mt-2"><small class="fw-bold text-start text-dark">{{ $handle->product_code }}</small></p>
                                                            <p class="">
                                                                <small
                                                                    class="fw-bold text-start text-dark">{{ $handle->dimensions }}</small>
                                                            </p>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="container-fluid">
                                                                <div class="row justify-content-center">
                                                                    <div
                                                                        class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center product-counter">
                                                                        <input id="minus{{ $handle->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $handle->id }}', '{{ $handle->product_code }}', '{{ $handle->full_title }}', {{ $handle->price }}, {{ $handle->discounted_price }}, {{ $handle->discounted_percentage ?? 0 }}, '{{ $handle->ParentCategory->slug }}')" />
                                                                        <input id="quantity{{ $handle->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0" name="quantity"
                                                                            disabled />
                                                                        <input id="plus{{ $handle->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+" type="number"
                                                                            max="10"
                                                                            {{$handle->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $handle->id }}', '{{ $handle->product_code }}', '{{ $handle->full_title }}', {{ $handle->price }}, {{ $handle->discounted_price }}, {{ $handle->discounted_percentage ?? 0 }}, '{{ $handle->ParentCategory->slug }}')" />
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p class="fs-5 fw-bold mt-lg-2 text-dark">
                                                                            {{ $handle->price == 0 ? 'Out of Stock' : '£' . $handle->price }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container-fluid">
                                                                @if ($handle->style)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                            <small>Style</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                            <small>{{ $handle->style->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                @if ($handle->colour)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                            <small>Colour</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                            <small>{{ $handle->colour->trade_colour ? $handle->colour->trade_colour : $handle->colour->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                @if ($handle->assembly)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                                                            <small>Assembly</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                                                            <small>{{ $handle->assembly->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0">
                                                <a href="#" class="product-short-title text-decoration-underline">
                                                <small>View more</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12">
                                    <p class="">No Handles available</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="collapse-wrapper my-4">
                    <a class="fw-semibold text-dark text-uppercase collapse-heading" data-bs-toggle="collapse"
                        href="#worktops" role="button" aria-expanded="false" aria-controls="worktops">
                        <span
                            class="bg-dark text-white fw-semibold py-2 px-2 text-center me-2 collapse-heading-number">4</span>WORKTOPS / UPSTANDS / BREAKFAST BARS
                    </a>
                    <div class="collapse-container collapse mt-3" id="worktops">
                        <nav>
                            <div class="nav nav-tabs custom-nav" style="" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-worktops-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-worktops" type="button" role="tab"
                                    aria-controls="nav-worktops" aria-selected="true">Worktops</button>
                                <button class="nav-link" id="nav-upstands-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-upstands" type="button" role="tab"
                                    aria-controls="nav-upstands" aria-selected="false">Upstands</button>
                                <button class="nav-link" id="nav-breakfast-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-breakfast" type="button" role="tab"
                                    aria-controls="nav-breakfast" aria-selected="false">Breakfast Bars</button>
                                <!-- <button class="nav-link" id="nav-edging-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-edging" type="button" role="tab"
                                    aria-controls="nav-edging-tab" aria-selected="false">Edging
                                    Doors</button> -->
                            </div>
                        </nav>
                        <div class="tab-content p-3" style="border: 1px solid black !important" id="nav-tabContent">

                            {{-- Worktops --}}
                            <div class="tab-pane fade show active" id="nav-worktops" role="tabpanel"
                                aria-labelledby="nav-worktops-tab" tabindex="0">
                                <div class="row">
                                    @if ($worktops->count() > 0)
                                        @foreach ($worktops as $index => $worktop)
                                            <div class="col-lg-4 col-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <!-- Button trigger modal -->
                                                        <a class="modal-icon z-3" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#worktops{{ $index }}">
                                                            <i class="ri-add-circle-line text-black fs-4"></i>
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="worktops{{ $index }}"
                                                            tabindex="-1"
                                                            aria-labelledby="worktopsLabel{{ $index }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-5 col-12">
                                                                                    <img src="{{ !empty($worktop->image_path) ? asset('imgs/products/'.$worktop->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid" />
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-8 col-md-7 col-12 text-start">
                                                                                    <h1 class="fs-5 fw-bold">
                                                                                        {{ $worktop->full_title }}
                                                                                    </h1>
                                                                                    <hr>
                                                                                    <h6
                                                                                        class="fs-6 fw-bolder text-dark">
                                                                                        Styling</h6>
                                                                                    <ul>
                                                                                        <li>HEIGHT: 720mm</li>
                                                                                        <li>WIDTH: 1000mm</li>
                                                                                        <li>DEPTH: 570mm</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <figure>
                                                                <img class="product-image px-0"
                                                                    src="{{ !empty($worktop->image_path) ? asset('imgs/products/'.$worktop->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap">
                                                            </figure>
                                                            <div class="">
                                                                <a href=""
                                                                    class="text-center text-decoration-underline fs-5 fw-bold">
                                                                    {{ $worktop->short_title }}
                                                                </a>
                                                                
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $worktop->product_code }}</small>
                                                                </p>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $worktop->dimensions }}</small>
                                                                </p>
                                                                <div class="container-fluid">
                                                                    <div
                                                                        class="row justify-content-center product-counter">
                                                                        <input id="minus{{ $worktop->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $worktop->id }}', '{{ $worktop->product_code }}', '{{ $worktop->full_title }}', {{ $worktop->price }}, {{ $worktop->discounted_price }}, {{ $worktop->discounted_percentage ?? 0 }}, '{{ $worktop->ParentCategory->slug }}')" />
                                                                        <input id="quantity{{ $worktop->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0"
                                                                            name="quantity" disabled />
                                                                        <input id="plus{{ $worktop->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+"
                                                                            {{$worktop->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $worktop->id }}', '{{ $worktop->product_code }}', '{{ $worktop->full_title }}', {{ $worktop->price }}, {{ $worktop->discounted_price }}, {{ $worktop->discounted_percentage ?? 0 }}, '{{ $worktop->ParentCategory->slug }}')" />
                                                                    </div>
                                                                </div>
                                                                <p class="fs-5 fw-bold mt-lg-2">
                                                                    {{ $worktop->price == 0 ? 'Out of Stock' : '£' . $worktop->price }}
                                                                </p>
                                                                <div class="container-fluid">
                                                                    @if ($worktop->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $worktop->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($worktop->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $worktop->colour->trade_colour ? $worktop->colour->trade_colour : $worktop->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($worktop->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $worktop->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <p class="">No Worktops available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Worktops and Upstands --}}
                            <div class="tab-pane fade" id="nav-upstands" role="tabpanel"
                                aria-labelledby="nav-upstands-tab" tabindex="0">
                                <div class="row">
                                    @if ($worktopsAndUpStands->count() > 0)
                                        @foreach ($worktopsAndUpStands as $index => $worktopsAndUpStand)
                                            <div class="col-lg-4 col-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <!-- Button trigger modal -->
                                                        <a class="modal-icon z-3" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#worktopsAndUpStands{{ $index }}">
                                                            <i class="ri-add-circle-line text-black fs-4"></i>
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade"
                                                            id="worktopsAndUpStands{{ $index }}"
                                                            tabindex="-1"
                                                            aria-labelledby="worktopsAndUpStandsLabel{{ $index }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-5 col-12">
                                                                                    <img src="{{ !empty($worktopsAndUpStand->image_path) ? asset('imgs/products/'.$worktopsAndUpStand->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid" />
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-8 col-md-7 col-12 text-start">
                                                                                    <h1 class="fs-5 fw-bold">
                                                                                        {{ $worktopsAndUpStand->full_title }}
                                                                                    </h1>
                                                                                    <hr>
                                                                                    <h6
                                                                                        class="fs-6 fw-bolder text-dark">
                                                                                        Styling</h6>
                                                                                    <ul>
                                                                                        <li>HEIGHT: 720mm</li>
                                                                                        <li>WIDTH: 1000mm</li>
                                                                                        <li>DEPTH: 570mm</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <figure>
                                                                <img class="product-image px-0"
                                                                    src="{{ !empty($worktopsAndUpStand->image_path) ? asset('imgs/products/'.$worktopsAndUpStand->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap">
                                                            </figure>
                                                            <div class="">
                                                                <a href=""
                                                                    class="text-center text-decoration-underline fs-5 fw-bold">
                                                                    {{ $worktopsAndUpStand->short_title }}
                                                                </a>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $worktopsAndUpStand->product_code }}</small>
                                                                </p>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $worktopsAndUpStand->dimensions }}</small>
                                                                </p>
                                                                <div class="container-fluid">
                                                                    <div
                                                                        class="row justify-content-center product-counter">
                                                                        <input
                                                                            id="minus{{ $worktopsAndUpStand->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $worktopsAndUpStand->id }}', '{{ $worktopsAndUpStand->product_code }}', '{{ $worktopsAndUpStand->full_title }}', {{ $worktopsAndUpStand->price }}, {{ $worktopsAndUpStand->discounted_price }}, {{ $worktopsAndUpStand->discounted_percentage ?? 0 }}, '{{ $worktopsAndUpStand->ParentCategory->slug }}')" />
                                                                        <input
                                                                            id="quantity{{ $worktopsAndUpStand->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0"
                                                                            name="quantity" disabled />
                                                                        <input id="plus{{ $worktopsAndUpStand->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+"
                                                                            {{$worktopsAndUpStand->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $worktopsAndUpStand->id }}', '{{ $worktopsAndUpStand->product_code }}', '{{ $worktopsAndUpStand->full_title }}', {{ $worktopsAndUpStand->price }}, {{ $worktopsAndUpStand->discounted_price }}, {{ $worktopsAndUpStand->discounted_percentage ?? 0 }}, '{{ $worktopsAndUpStand->ParentCategory->slug }}')" />
                                                                    </div>
                                                                </div>
                                                                <p class="fs-5 fw-bold mt-lg-2">
                                                                    {{ $worktopsAndUpStand->price == 0 ? 'Out of Stock' : '£' . $worktopsAndUpStand->price }}
                                                                </p>
                                                                <div class="container-fluid">
                                                                    @if ($worktopsAndUpStand->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $worktopsAndUpStand->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($worktopsAndUpStand->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $worktopsAndUpStand->colour->trade_colour ? $worktopsAndUpStand->colour->trade_colour : $worktopsAndUpStand->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($worktopsAndUpStand->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $worktopsAndUpStand->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <p class="">No Worktops and Upstands available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Breakfast Bars --}}
                            <div class="tab-pane fade" id="nav-breakfast" role="tabpanel"
                                aria-labelledby="nav-breakfast-tab" tabindex="0">
                                <div class="row">
                                    @if ($breakfastBars->count() > 0)
                                        @foreach ($breakfastBars as $index => $breakfastBar)
                                            <div class="col-lg-4 col-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <!-- Button trigger modal -->
                                                        <a class="modal-icon z-3" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#breakfastBars{{ $index }}">
                                                            <i class="ri-add-circle-line text-black fs-4"></i>
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade"
                                                            id="breakfastBars{{ $index }}" tabindex="-1"
                                                            aria-labelledby="breakfastBarsLabel{{ $index }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-5 col-12">
                                                                                    <img src="{{ !empty($breakfastBar->image_path) ? asset('imgs/products/'.$breakfastBar->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid" />
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-8 col-md-7 col-12 text-start">
                                                                                    <h1 class="fs-5 fw-bold">
                                                                                        {{ $breakfastBar->full_title }}
                                                                                    </h1>
                                                                                    <hr>
                                                                                    <h6
                                                                                        class="fs-6 fw-bolder text-dark">
                                                                                        Styling</h6>
                                                                                    <ul>
                                                                                        <li>HEIGHT: 720mm</li>
                                                                                        <li>WIDTH: 1000mm</li>
                                                                                        <li>DEPTH: 570mm</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <figure>
                                                                <img class="product-image px-0"
                                                                    src="{{ !empty($breakfastBar->image_path) ? asset('imgs/products/'.$breakfastBar->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap">
                                                            </figure>
                                                            <div class="">
                                                                <a href=""
                                                                    class="text-center text-decoration-underline fs-5 fw-bold">
                                                                    {{ $breakfastBar->short_title }}
                                                                </a>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $breakfastBar->product_code }}</small>
                                                                </p>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $breakfastBar->dimensions }}</small>
                                                                </p>
                                                                <div class="container-fluid">
                                                                    <div
                                                                        class="row justify-content-center product-counter">
                                                                        <input id="minus{{ $breakfastBar->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $breakfastBar->id }}', '{{ $breakfastBar->product_code }}', '{{ $breakfastBar->full_title }}', {{ $breakfastBar->price }}, {{ $breakfastBar->discounted_price }}, {{ $breakfastBar->discounted_percentage ?? 0 }}, '{{ $breakfastBar->ParentCategory->slug }}')" />
                                                                        <input id="quantity{{ $breakfastBar->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0"
                                                                            name="quantity" disabled />
                                                                        <input id="plus{{ $breakfastBar->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+"
                                                                            {{$breakfastBar->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $breakfastBar->id }}', '{{ $breakfastBar->product_code }}', '{{ $breakfastBar->full_title }}', {{ $breakfastBar->price }}, {{ $breakfastBar->discounted_price }}, {{ $breakfastBar->discounted_percentage ?? 0 }}, '{{ $breakfastBar->ParentCategory->slug }}')" />
                                                                    </div>
                                                                </div>
                                                                <p class="fs-5 fw-bold mt-lg-2">
                                                                    {{ $breakfastBar->price == 0 ? 'Out of Stock' : '£' . $breakfastBar->price }}
                                                                </p>
                                                                <div class="container-fluid">
                                                                    @if ($breakfastBar->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $breakfastBar->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($breakfastBar->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $breakfastBar->colour->trade_colour ? $breakfastBar->colour->trade_colour : $breakfastBar->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($breakfastBar->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $breakfastBar->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <p class="">No Breakfast Bars available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Edging Doors --}}
                            <div class="tab-pane fade" id="nav-edging" role="tabpanel"
                                aria-labelledby="nav-edging-tab" tabindex="0">
                                <div class="row">
                                    @if ($edgings->count() > 0)
                                        @foreach ($edgings as $index => $edging)
                                            <div class="col-lg-4 col-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <!-- Button trigger modal -->
                                                        <a class="modal-icon z-3" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edgings{{ $index }}">
                                                            <i class="ri-add-circle-line text-black fs-4"></i>
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="edgings{{ $index }}"
                                                            tabindex="-1"
                                                            aria-labelledby="edgingsLabel{{ $index }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-5 col-12">
                                                                                    <img src="{{ !empty($edging->image_path) ? asset('imgs/products/'.$edging->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid" />
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-8 col-md-7 col-12 text-start">
                                                                                    <h1 class="fs-5 fw-bold">
                                                                                        {{ $edging->full_title }}
                                                                                    </h1>
                                                                                    <hr>
                                                                                    <h6
                                                                                        class="fs-6 fw-bolder text-dark">
                                                                                        Styling</h6>
                                                                                    <ul>
                                                                                        <li>HEIGHT: 720mm</li>
                                                                                        <li>WIDTH: 1000mm</li>
                                                                                        <li>DEPTH: 570mm</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <figure>
                                                                <img class="product-image px-0"
                                                                    src="{{ !empty($edging->image_path) ? asset('imgs/products/'.$edging->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap">
                                                            </figure>
                                                            <div class="">
                                                                <a href=""
                                                                    class="text-center text-decoration-underline fs-5 fw-bold">
                                                                    {{ $edging->short_title }}
                                                                </a>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $edging->product_code }}</small>
                                                                </p>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $edging->dimensions }}</small>
                                                                </p>
                                                                <div class="container-fluid">
                                                                    <div
                                                                        class="row justify-content-center product-counter">
                                                                        <input id="minus{{ $edging->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $edging->id }}', '{{ $edging->product_code }}', '{{ $edging->full_title }}', {{ $edging->price }}, {{ $edging->discounted_price }}, {{ $edging->discounted_percentage ?? 0 }}, '{{ $edging->ParentCategory->slug }}')" />
                                                                        <input id="quantity{{ $edging->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0"
                                                                            name="quantity" disabled />
                                                                        <input id="plus{{ $edging->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+"
                                                                            {{$edging->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $edging->id }}', '{{ $edging->product_code }}', '{{ $edging->full_title }}', {{ $edging->price }}, {{ $edging->discounted_price }}, {{ $edging->discounted_percentage ?? 0 }}, '{{ $edging->ParentCategory->slug }}')" />
                                                                    </div>
                                                                </div>
                                                                <p class="fs-5 fw-bold mt-lg-2">
                                                                    {{ $edging->price == 0 ? 'Out of Stock' : '£' . $edging->price }}
                                                                </p>
                                                                <div class="container-fluid">
                                                                    @if ($edging->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $edging->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($edging->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $edging->colour->trade_colour ? $edging->colour->trade_colour : $edging->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($edging->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $edging->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <p class="">No Edging Doors available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="collapse-wrapper my-4">
                    <a class="fw-semibold text-dark text-uppercase collapse-heading" data-bs-toggle="collapse"
                        href="#sinkstaps" role="button" aria-expanded="false" aria-controls="sinkstaps">
                        <span
                            class="bg-dark text-white fw-semibold py-2 px-2 text-center me-2 collapse-heading-number">5</span>
                        Sinks and Taps
                    </a>
                    <div class="collapse-container collapse mt-3" id="sinkstaps">
                        <nav>
                            <div class="nav nav-tabs custom-nav" style="" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-sinks-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-sinks" type="button" role="tab"
                                    aria-controls="nav-sinks" aria-selected="true">Sinks</button>
                                <button class="nav-link" id="nav-taps-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-taps" type="button" role="tab"
                                    aria-controls="nav-taps" aria-selected="false">Taps</button>
                            </div>
                        </nav>
                        <div class="tab-content p-3" style="border: 1px solid black !important" id="nav-tabContent">

                            {{-- Sinks --}}
                            <div class="tab-pane fade show active" id="nav-sinks" role="tabpanel"
                                aria-labelledby="nav-sinks-tab" tabindex="0">
                                <div class="row">
                                    @if ($sinks->count() > 0)
                                        @foreach ($sinks as $index => $sink)
                                            <div class="col-lg-4 col-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <!-- Button trigger modal -->
                                                        <a class="modal-icon z-3" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#sinks{{ $index }}">
                                                            <i class="ri-add-circle-line text-black fs-4"></i>
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="sinks{{ $index }}"
                                                            tabindex="-1"
                                                            aria-labelledby="sinksLabel{{ $index }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-5 col-12">
                                                                                    <img src="{{ !empty($sink->image_path) ? asset('imgs/products/'.$sink->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid" />
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-8 col-md-7 col-12 text-start">
                                                                                    <h1 class="fs-5 fw-bold">
                                                                                        {{ $sink->full_title }}
                                                                                    </h1>
                                                                                    <hr>
                                                                                    <h6
                                                                                        class="fs-6 fw-bolder text-dark">
                                                                                        Styling</h6>
                                                                                    <ul>
                                                                                        <li>HEIGHT: 720mm</li>
                                                                                        <li>WIDTH: 1000mm</li>
                                                                                        <li>DEPTH: 570mm</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <figure>
                                                                <img class="product-image px-0"
                                                                    src="{{ !empty($sink->image_path) ? asset('imgs/products/'.$sink->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap">
                                                            </figure>
                                                            <div class="">
                                                                <a href=""
                                                                    class="text-center text-decoration-underline fs-5 fw-bold">
                                                                    {{ $sink->short_title }}
                                                                </a>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $sink->product_code }}</small>
                                                                </p>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $sink->dimensions }}</small>
                                                                </p>
                                                                <div class="container-fluid">
                                                                    <div
                                                                        class="row justify-content-center product-counter">
                                                                        <input id="minus{{ $sink->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $sink->id }}', '{{ $sink->product_code }}', '{{ $sink->full_title }}', {{ $sink->price }}, {{ $sink->discounted_price }}, {{ $sink->discounted_percentage ?? 0 }}, '{{ $sink->ParentCategory->slug }}')" />
                                                                        <input id="quantity{{ $sink->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0"
                                                                            name="quantity" disabled />
                                                                        <input id="plus{{ $sink->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+"
                                                                            {{$sink->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $sink->id }}', '{{ $sink->product_code }}', '{{ $sink->full_title }}', {{ $sink->price }}, {{ $sink->discounted_price }}, {{ $sink->discounted_percentage ?? 0 }}, '{{ $sink->ParentCategory->slug }}')" />
                                                                    </div>
                                                                </div>
                                                                <p class="fs-5 fw-bold mt-lg-2">
                                                                    {{ $sink->price == 0 ? 'Out of Stock' : '£' . $sink->price }}
                                                                </p>
                                                                <div class="container-fluid">
                                                                    @if ($sink->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $sink->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($sink->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $sink->colour->trade_colour ? $sink->colour->trade_colour : $sink->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($sink->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $sink->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <p class="">No Sinks available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Taps --}}
                            <div class="tab-pane fade" id="nav-taps" role="tabpanel"
                                aria-labelledby="nav-taps-tab" tabindex="0">
                                <div class="row">
                                    @if ($taps->count() > 0)
                                        @foreach ($taps as $index => $tap)
                                            <div class="col-lg-4 col-6 mb-3">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <!-- Button trigger modal -->
                                                        <a class="modal-icon z-3" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#taps{{ $index }}">
                                                            <i class="ri-add-circle-line text-black fs-4"></i>
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="taps{{ $index }}"
                                                            tabindex="-1"
                                                            aria-labelledby="tapsLabel{{ $index }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-5 col-12">
                                                                                    <img src="{{ !empty($tap->image_path) ? asset('imgs/products/'.$tap->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                        class="img-fluid" />
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-8 col-md-7 col-12 text-start">
                                                                                    <h1 class="fs-5 fw-bold">
                                                                                        {{ $tap->full_title }}
                                                                                    </h1>
                                                                                    <hr>
                                                                                    <h6
                                                                                        class="fs-6 fw-bolder text-dark">
                                                                                        Styling</h6>
                                                                                    <ul>
                                                                                        <li>HEIGHT: 720mm</li>
                                                                                        <li>WIDTH: 1000mm</li>
                                                                                        <li>DEPTH: 570mm</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">
                                                            <figure>
                                                                <img class="product-image px-0"
                                                                    src="{{ !empty($tap->image_path) ? asset('imgs/products/'.$tap->image_path) : asset('images/no-image-available.jpg') }}"
                                                                    alt="Card image cap">
                                                            </figure>
                                                            <div class="">
                                                                <a href=""
                                                                    class="text-center text-decoration-underline fs-5 fw-bold">
                                                                    {{ $tap->short_title }}
                                                                </a>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $tap->product_code }}</small>
                                                                </p>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $tap->dimensions }}</small>
                                                                </p>
                                                                <div class="container-fluid">
                                                                    <div
                                                                        class="row justify-content-center product-counter">
                                                                        <input id="minus{{ $tap->id }}"
                                                                            class="minus border bg-dark text-light p-0"
                                                                            type="button" value="-"
                                                                            onclick="decreaseQuantity('{{ $tap->id }}', '{{ $tap->product_code }}', '{{ $tap->full_title }}', {{ $tap->price }}, {{ $tap->discounted_price }}, {{ $tap->discounted_percentage ?? 0 }}, '{{ $tap->ParentCategory->slug }}')" />
                                                                        <input id="quantity{{ $tap->id }}"
                                                                            class="quantity border border-black text-center"
                                                                            type="text" value="0"
                                                                            name="quantity" disabled />
                                                                        <input id="plus{{ $tap->id }}"
                                                                            class="plus border bg-dark text-light p-0"
                                                                            type="button" value="+"
                                                                            {{$tap->price == 0 ? 'disabled' : '' }} 
                                                                            onclick="increaseQuantity('{{ $tap->id }}', '{{ $tap->product_code }}', '{{ $tap->full_title }}', {{ $tap->price }}, {{ $tap->discounted_price }}, {{ $tap->discounted_percentage ?? 0 }}, '{{ $tap->ParentCategory->slug }}')" />
                                                                    </div>
                                                                </div>
                                                                <p class="fs-5 fw-bold mt-lg-2">
                                                                    {{ $tap->price == 0 ? 'Out of Stock' : '£' . $tap->price }}
                                                                </p>
                                                                <div class="container-fluid">
                                                                    @if ($tap->style)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Style</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $tap->style->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($tap->colour)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Colour</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $tap->colour->trade_colour ? $tap->colour->trade_colour : $tap->colour->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($tap->assembly)
                                                                        <div class="row">
                                                                            <div class="col-4 p-0 d-md-flex d-none">
                                                                                <p
                                                                                    class="category-text text-start text-uppercase m-0 pt-1">
                                                                                    <small>Assembly</small>
                                                                                </p>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-8 col-sm-12 p-0 text-center">
                                                                                <p
                                                                                    class="category-value fw-semibold py-1 mb-2">
                                                                                    <small>{{ $tap->assembly->name }}</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <p class="">No Taps available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="collapse-wrapper my-4">
                    <a class="fw-semibold text-dark text-uppercase collapse-heading" data-bs-toggle="collapse"
                        href="#appliances" role="button" aria-expanded="false" aria-controls="appliances">
                        <span
                            class="bg-dark text-white fw-semibold py-2 px-2 text-center me-2 collapse-heading-number">6</span>Appliances
                    </a>
                    <div class="collapse-container collapse mt-3" id="appliances">
                        <div class="row">
                            @if ($appliances->count() > 0)
                                @foreach ($appliances as $index => $appliance)
                                    <div class="col-lg-4 col-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <!-- Button trigger modal -->
                                                <a class="modal-icon z-3" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#appliances{{ $index }}">
                                                    <i class="ri-add-circle-line text-black fs-4"></i>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="appliances{{ $index }}"
                                                    tabindex="-1"
                                                    aria-labelledby="appliancesLabel{{ $index }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-5 col-12">
                                                                            <img src="{{ !empty($appliance->image_path) ? asset('imgs/products/'.$appliance->image_path) : asset('images/no-image-available.jpg') }}"
                                                                                class="img-fluid" />
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-8 col-md-7 col-12 text-start">
                                                                            <h1 class="fs-5 fw-bold">
                                                                                {{ $appliance->full_title }}
                                                                            </h1>
                                                                            <hr>
                                                                            <h6 class="fs-6 fw-bolder text-dark">
                                                                                Styling</h6>
                                                                            <ul>
                                                                                <li>HEIGHT: 720mm</li>
                                                                                <li>WIDTH: 1000mm</li>
                                                                                <li>DEPTH: 570mm</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <figure>
                                                        <img class="product-image px-0"
                                                            src="{{ !empty($appliance->image_path) ? asset('imgs/products/'.$appliance->image_path) : asset('images/no-image-available.jpg') }}"
                                                            alt="Card image cap">
                                                    </figure>
                                                    <div class="">
                                                        <a href=""
                                                            class="text-center text-decoration-underline fs-5 fw-bold">
                                                            {{ $appliance->short_title }}
                                                        </a>
                                                                <p class="py-lg-3 py-2">
                                                                    <small
                                                                        class="fw-bold text-center">{{ $appliance->product_code }}</small>
                                                                </p>
                                                        <p class="py-lg-3 py-2">
                                                            <small
                                                                class="fw-bold text-center">{{ $appliance->dimensions }}</small>
                                                        </p>
                                                        <div class="container-fluid">
                                                            <div class="row justify-content-center product-counter">
                                                                <input id="minus{{ $appliance->id }}"
                                                                    class="minus border bg-dark text-light p-0"
                                                                    type="button" value="-"
                                                                    onclick="decreaseQuantity('{{ $appliance->id }}', '{{ $appliance->product_code }}', '{{ $appliance->full_title }}', {{ $appliance->price }}, {{ $appliance->discounted_price }}, {{ $appliance->discounted_percentage ?? 0 }}, '{{ $appliance->ParentCategory->slug }}')" />
                                                                <input id="quantity{{ $appliance->id }}"
                                                                    class="quantity border border-black text-center"
                                                                    type="text" value="0" name="quantity"
                                                                    disabled />
                                                                <input id="plus{{ $appliance->id }}"
                                                                    class="plus border bg-dark text-light p-0"
                                                                    type="button" value="+"
                                                                    {{$appliance->price == 0 ? 'disabled' : '' }} 
                                                                    onclick="increaseQuantity('{{ $appliance->id }}', '{{ $appliance->product_code }}', '{{ $appliance->full_title }}', {{ $appliance->price }}, {{ $appliance->discounted_price }}, {{ $appliance->discounted_percentage ?? 0 }}, '{{ $appliance->ParentCategory->slug }}')" />
                                                            </div>
                                                        </div>
                                                        <p class="fs-5 fw-bold mt-lg-2">
                                                            {{ $appliance->price == 0 ? 'Out of Stock' : '£' . $appliance->price }}
                                                        </p>
                                                        <div class="container-fluid">
                                                            @if ($appliance->style)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-uppercase m-0 pt-1">
                                                                            <small>Style</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p
                                                                            class="category-value fw-semibold py-1 mb-2">
                                                                            <small>{{ $appliance->style->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if ($appliance->colour)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-uppercase m-0 pt-1">
                                                                            <small>Colour</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p
                                                                            class="category-value fw-semibold py-1 mb-2">
                                                                            <small>{{ $appliance->colour->trade_colour ? $appliance->colour->trade_colour : $appliance->colour->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if ($appliance->assembly)
                                                                <div class="row">
                                                                    <div class="col-4 p-0 d-md-flex d-none">
                                                                        <p
                                                                            class="category-text text-start text-uppercase m-0 pt-1">
                                                                            <small>Assembly</small>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                        <p
                                                                            class="category-value fw-semibold py-1 mb-2">
                                                                            <small>{{ $appliance->assembly->name }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12">
                                    <p class="">No Appliances available</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 p-4">
                <div class="container">
                    <div class="row bg-dark">
                        <div class="col-lg-12 px-4 py-3">
                            <div class="row border-bottom text-white">
                                <h5 class="fw-bold text-white">Order Overview</h5>
                            </div>
                            <div class="row text-white pt-2">
                                <h6 class="text-white fw-bold">Style: <span
                                        class="fw-normal">{{ $style->name }}</span></h6>
                                <h6 class="text-white fw-bold">Assembly: <span
                                        class="fw-normal">{{ $assembly->name }}</span></h6>
                                <h6 class="text-white fw-bold">Colour: <span
                                        class="fw-normal">{{ $colour->trade_colour ? $colour->trade_colour : $colour->name }}</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-dark mt-2">
                        <div class="col-lg-12 px-4 py-3">
                            <div class="row border-bottom text-white">
                                <h5 class="fw-bold text-white">Items</h5>
                            </div>
                            <div class="row text-white pt-1" id="orderKitchenCartItemsList">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row bg-dark mt-2">
                        <div class="col-lg-12 px-4 py-3">
                            <div class="row border-bottom text-white">
                                <h5 class="fw-bold text-white">Kitchen Price</h5>
                            </div>
                            <div class="row text-white ">
                                <h2 class="text-white fw-bold py-2 m-0" id="cartTotalAmount_side">
                                    
                                </h2>
                                <small class="text-white">Price includes delivery costs.</small>
                                <small class="text-white">Surcharges may apply.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
