<x-guest-layout>
    <style>
        .related-products-link {
            display: inline-block;
            text-indent: 0px;
            /* Adjust to align with the first line */
            padding-left: 5px;
            /* Same value as text-indent but positive */
        }

        /* Ensure the carousel has a fixed height */
        .carousel-inner {
            height: 500px;
            /* Adjust as needed */
        }

        /* Center images properly without stretching */
        .carousel-item {
            height: 100%;
            text-align: center; /* Ensures proper centering */
        }

        .carousel-item img {
            max-width: 100%;
            max-height: 100%;
            height: auto;
            width: auto;
            object-fit: contain;
            display: block;
            margin: auto;
        }

        /* Make arrows black */
        .carousel-control-prev-icon,
        .carousel-control-next-icon,
        .control-button {
            filter: invert(1);
            /* Converts white to black */
        }
    </style>
    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}" class="text-uppercase">Shop</a></li>
                <li class="breadcrumb-item">
                    <a href="{{ route('orderkitchen') }}" class="text-uppercase">
                        Order Kitchen
                    </a>
                </li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-6 col-12">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder">
                    {{ $product->full_title }}
                </h1>
            </div>
        </div>
    </section>

    <section class="container-fluid px-lg-5 px-md-3 px-3 py-2">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <figure class="text-center position-relative">
                    <!-- Button trigger modal -->
                    <a class="modal-icon z-3" href="#" data-bs-toggle="modal" data-bs-target="#productImage">
                        <i class="ri-add-circle-line text-black fs-4"></i>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="productImage" tabindex="-1" aria-labelledby="productImage"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-5 col-12 mx-auto">
                                                <img src="{{ asset('imgs/products/' . $product->image_path) }}"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                    </div> -->
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active control-button" aria-current="true" aria-label="Slide 1"></button>
                                            @if ($product->second_image_path)
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="control-button" aria-label="Slide 2"></button>
                                            @endif
                                            @if ($product->third_image_path)
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="control-button" aria-label="Slide 3"></button>
                                            @endif
                                            @if ($product->fourth_image_path)
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="control-button" aria-label="Slide 4"></button>
                                            @endif
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('imgs/products/' . $product->image_path) }}" class="d-block" alt="Slide 1">
                                            </div>
                                            @if ($product->second_image_path)
                                            <div class="carousel-item">
                                                <img src="{{ asset('imgs/products/' . $product->second_image_path) }}" class="d-block" alt="Slide 2">
                                            </div>
                                            @endif
                                            @if ($product->third_image_path)
                                            <div class="carousel-item">
                                                <img src="{{ asset('imgs/products/' . $product->third_image_path) }}" class="d-block" alt="Slide 3">
                                            </div>
                                            @endif
                                            @if ($product->fourth_image_path)
                                            <div class="carousel-item">
                                                <img src="{{ asset('imgs/products/' . $product->fourth_image_path) }}" class="d-block" alt="Slide 4">
                                            </div>
                                            @endif
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <img class="img-fluid px-0" style="width: 300px; height: auto;"
                        src="{{ $product->image_path ? asset('imgs/products/' . $product->image_path) : asset('images/no-image-available.jpg') }}"
                        alt="Card image cap">
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="text-start">
                    <h1 class="fs-2 text-dark text-uppercase fw-bolder">
                        {{ $product->short_title }}
                    </h1>
                    <p class="py-lg-3 py-2">
                        <small class="fw-bold text-start">{{ $product->dimensions }}</small>
                    </p>
                </div>
                <div class="row flex-column justify-content-center">
                    <div class="col-12">
                        <p class="fs-5 fw-bold">£{{ $product->price }}</p>
                    </div>
                    <div class="col-12 d-flex product-counter">
                        <input id="minus{{ $product->id }}" class="minus border bg-dark text-light p-0" type="button"
                            value="-"
                            onclick="decreaseQuantity('{{ $product->id }}', '{{ $product->product_code }}', '{{ $product->full_title }}', {{ $product->price }}, {{ $product->discounted_price }}, {{ $product->discounted_percentage ?? 0 }})" />
                        <input id="quantity{{ $product->id }}" class="quantity border border-black text-center"
                            type="text" value="0" name="quantity" disabled />
                        <input id="plus{{ $product->id }}" class="plus border bg-dark text-light p-0" type="button"
                            value="+"
                            {{$product->price == 0 ? 'disabled' : '' }}
                            onclick="increaseQuantity('{{ $product->id }}', '{{ $product->product_code }}', '{{ $product->full_title }}', {{ $product->price }}, {{ $product->discounted_price }}, {{ $product->discounted_percentage ?? 0 }})" />
                    </div>
                </div>
                @if ($product->product_code)
                <div class="row mt-4">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Product Code</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ $product->product_code }}</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->category)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Category</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ $product->category?->name }}</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->style)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Style</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ $product->style?->name }}</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->colour)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Colour</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ $product->colour?->trade_colour ? $product->colour?->trade_colour : $product->colour?->name }}</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->colour?->finishing)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Finishing</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ $product->colour?->finishing }}</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->assembly)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Assembly</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ $product->assembly?->name }}</small>
                        </p>
                    </div>
                </div>
                <hr>
                @endif
                @if ($product->height)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Height</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ intval($product->height) }} mm</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->second_height)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Second Height</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ intval($product->second_height) }} mm</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->third_height)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Third Height</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ intval($product->third_height) }} mm</small>
                        </p>
                    </div>
                </div>
                <hr>
                @endif
                @if ($product->width)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Width</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ intval($product->width) }} mm</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->second_width)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Second Width</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ intval($product->second_width) }} mm</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->third_width)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Third Width</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ intval($product->third_width) }} mm</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->fourth_width)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Fourth Width</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ intval($product->fourth_width) }} mm</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->fifth_width)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Fifth Width</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ intval($product->fifth_width) }} mm</small>
                        </p>
                    </div>
                </div>
                <hr>
                @endif
                @if ($product->depth)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Depth</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ intval($product->depth) }} mm</small>
                        </p>
                    </div>
                </div>
                @endif
                @if ($product->second_depth)
                <div class="row">
                    <div class="col-4 d-md-flex d-none">
                        <p class="category-text text-start text-uppercase m-0 pt-1">
                            <small>Second Depth</small>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p class="category-value fw-semibold px-3 py-1 mb-2">
                            <small>{{ intval($product->second_depth) }} mm</small>
                        </p>
                    </div>
                </div>
                <hr>
                @endif
            </div>

            <div class="col-lg-4">
                <section class="container-fluid px-3 pb-4 pt-3" style="background-color: #f0f0f0;">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <h3 class="fw-bold text-dark py-1">Overview</h3>
                            <h4 class="fw-bold text-dark py-1">Range Specification</h4>
                            <div class="product-cat-description">
                                @if ($product->category?->description)
                                {!! $product->category?->description !!}
                                @elseif ($product->category?->parentCategory->description)
                                {!! $product->category?->parentCategory->description !!}
                                @endif
                            </div>
                        </div>
                        {{-- @if ($product->category?->image_path)
                            <div class="col-lg-12 col-md-6 position-relative">
                                <!-- Button trigger modal -->
                                <a class="modal-icon z-3" href="#" data-bs-toggle="modal"
                                    data-bs-target="#productCat">
                                    <i class="ri-add-circle-line text-black fs-4"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="productCat" tabindex="-1" aria-labelledby="productCat"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                                                            <img src="{{ asset('uploads/categories/' . $product->category->image_path) }}"
                        class="img-fluid" />
                    </div>
            </div>
        </div>
        </div>
        <div class="modal-footer"></div>
        </div>
        </div>
        </div>

        <img class="card-img-top px-0"
            src="{{ asset('uploads/categories/' . $product->category->image_path) }}"
            alt="Card image cap">
        </div>
        @elseif ($product->category?->parentCategory->image_path)
        <div class="col-lg-12 col-md-6 position-relative">
            <a class="position-absolute top-10 end-0 me-4 mt-2 z-3" href="#"
                data-bs-toggle="modal" data-bs-target="#productModal">
                <i class="ri-add-circle-line text-black fs-4"></i>
            </a>
            <img class="card-img-top px-0"
                src="{{ asset('uploads/categories/' . $product->category?->parentCategory->image_path) }}"
                alt="Card image cap">
        </div>
        @endif --}}
        </div>
    </section>
    </div>
    </div>

    <div class="row">
        @if ($colours && count($colours) > 0)
        {{--<div class="col-lg-6 col-md-6 col-12 py-4">
            <h3 class="fw-bold text-dark pb-3">Colour Options</h3>
            <div class="row g-1">
                @foreach ($colours as $colour)
                <div class="col-6 d-flex position-relative align-items-center justify-content-center">
                    @if ($colour->colour_code)
                    <div class="colour-div position-absolute start-0 top-50 translate-middle-y ms-2 border border-dark"
                        style="background-color: {{ $colour->colour_code }}">
                    </div>
                    @endif
                    <button type="button" class="colour-btn btn w-100 rounded-0 sidebar-btn text-start">
                        {{ $colour->trade_colour }}
                    </button>
                </div>
                @endforeach
            </div>
        </div>--}}
        @endif

        @if ($relatedProducts && count($relatedProducts) > 0)
        {{--<div class="col-lg-6 col-md-6 col-12 py-4">
            <h3 class="fw-bold text-dark pb-3">Related Products</h3>
            <div class="row">
                @foreach ($relatedProducts as $relatedProduct)
                <div class="col-6 d-flex align-items-start">
                    <i class="ri-arrow-right-s-fill"></i>
                    <a href="{{ route('orderbyproduct', [$relatedProduct->slug, $relatedProduct->serial_number]) }}"
                        class="text-dark text-decoration-underline related-products-link">
                        {{ $relatedProduct->full_title }}
                    </a>
                </div>
                @endforeach
            </div>
        </div>--}}
        @endif
    </div>


    </section>

</x-guest-layout>