<x-guest-layout>
    @section('meta_tags')
        <title>{{$seo?->meta_title}}</title>
        <meta name="description" content="{{$seo?->meta_description}}">
        <link rel="canonical" href="{{$seo?->canonical_tag}}" />
        {!! $seo?->schema_code !!}
    @endsection
    <style>
        .product-card {
            border: 1px solid transparent;
            transition: border-color 0.3s ease;
        }

        .product-card:hover {
            border-color: #ebc266;
            /* Outline warning color on hover */
        }

        .product-short-title-container {
            margin-bottom: 10px;
            /* Space between the title and other content */
        }

        .product-short-title {
            display: inline-block;
            padding: 5px 10px;
            color: #000;
            /* Default text color */
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .product-card:hover,
        .card-header {
            background-color: #ebc266;
            /* Warning color background on hover */
            color: #000;
            /* Text color on hover */
        }

        .product-image:hover {
            transform: scale(1.1);
            transition: 0.5s ease;
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

        <div class="row mb-lg-5 mb-4">
            <div class="col-12">
                <h1 class="fs-1 fw-bolder text-dark text-uppercase">{{ $category->name }}</h1>
            </div>
            <div class="col-12">
                <p class="text-dark">{!! $category->description !!}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 bg-light p-0 pb-4">
                <div class="m-0">
                    <h4 class="text-dark text-decoration-underline" style="font-weight: 600; font-size: 1.3rem">Filters</h4>
                    <!-- <h3 style="font-weight: 600; font-size: 1.3rem" class="text-dark">CURRENT ITEMS:<span id="number-of-products">{{ $count }}</span></h3> -->
                </div>
                <!-- <div class="bg-light border border-dark border-1 px-2 py-2 mt-2">
                    <h3 style="font-weight: 600; font-size: 1.3rem" class="text-dark">CURRENT ITEMS:<span id="number-of-products">{{ $count }}</span></h3>
                </div> -->
                <form action="" class="">
                    <input type="hidden" name="slug" id="slug" value="{{ $category->slug }}">
                    <div class="row">
                        @if ($styles->count() > 0)
                            @if ($category->slug == 'doors' || $category->slug == 'accessories')
                                <div class="col-md-3 accordion accordion-flush mt-3" id="accordionFlushExample3">
                                    <div class="accordion-item bg-transparent border border-dark border-1 rounded-0">
                                        <h2 class="accordion-header bg-warning" id="flush-headingThree">
                                            <button class="accordion-button legend collapsed text-uppercase" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="true" aria-controls="flush-collapseThree">
                                                Style
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse my-2"
                                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample3" style="max-height: 150px; overflow-y: scroll">
                                            <div class="accordion-body px-0 py-0 pb-1">
                                                <div class="row g-1">
                                                    <!-- updated -->
                                                    @foreach ($styles as $index => $style)
                                                    <div class="col-lg-12 col-md-12 col-6">
                                                        <div class="form-check form-check-inline">
                                                            <input data-style-id="{{$style->id}}" class="form-check-input style-filter" {{ (!empty($urlStyleId) && ($urlStyleId == $style->id)) ? 'checked' : '' }} type="checkbox" name="styles[]" id="style{{ $index }}" value="{{ $style->id }}">
                                                            <label class="form-check-label"
                                                                for="style{{ $index }}">{{ $style->name }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                        @if ($colours->count() > 0)
                            @if ($category->slug != 'appliances')
                                <div class="col-md-3 accordion accordion-flush mt-3" id="accordionFlushExample4">
                                    <div class="accordion-item bg-transparent border border-dark border-1 rounded-0">
                                        <h2 class="accordion-header bg-warning" id="flush-headingFour">
                                            <button class="accordion-button legend collapsed text-uppercase" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                aria-expanded="true" aria-controls="flush-collapseFour">
                                                Colour
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse my-2"
                                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample4" style="max-height: 150px; overflow-y: auto">
                                            <div class="accordion-body px-0 py-0 pb-1">
                                                <div class="row g-1" id="colours-filter">
                                                    @foreach ($colours as $index => $colour)
                                                    <div class="col-lg-12 col-md-12 col-6">
                                                        <div class="form-check form-check-inline">
                                                            <input data-colour-id="{{$colour->id}}" class="form-check-input colour-filter" type="checkbox" {{ (!empty($urlColourId) && ($urlColourId == $colour->id)) ? 'checked' : '' }}
                                                                name="colours[]" id="colour{{ $index }}"
                                                                value="{{ $colour->id }}">
                                                                @if (!empty($colour->colour_code))
                                                                <label class="form-check-label d-flex gap-1" for="colour{{ $index }}">
                                                                    <div class="d-inline border border-dark"
                                                                        style="border-radius: 50px; width: 20px;height:20px; background-color:{{ $colour->colour_code }};">
                                                                    </div>
                                                                    {{ $colour->trade_colour ? $colour->trade_colour : $colour->name }}
                                                                </label>
                                                                @else
                                                                <label class="form-check-label d-flex gap-1" for="colour{{ $index }}">
                                                                    <div class="border border-dark" style="border-radius: 50px; width: 20px;height:20px; background: linear-gradient(to right, red, yellow, green);">
                                                                    </div>
                                                                    {{ $colour->trade_colour ? $colour->trade_colour : $colour->name }}
                                                                </label>
                                                                @endif
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                        @if ($assemblies->count() > 0)
                            {{--<div class="col-3 accordion accordion-flush mt-3" id="accordionFlushExample2">
                                <div class="accordion-item bg-transparent border border-dark border-1 rounded-0 px-2">
                                    <h2 class="accordion-header bg-warning" id="flush-headingTwo">
                                        <button class="accordion-button legend collapsed text-uppercase" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="true" aria-controls="flush-collapseTwo">
                                            ASSEMBLY
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse my-2"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample2">
                                        <div class="accordion-body px-0 py-0 pb-1">
                                            <div class="row g-1">
                                                @foreach ($assemblies as $index => $assembly)
                                                    @if ($assembly->slug == 'stock' && ($category->slug == 'doors' || $category->slug == 'accessories' || $category->slug == 'handles' || $category->slug == 'sinks' || $category->slug == 'internals'))
                                                        <div class="col-lg-12 col-md-12 col-6">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="assemblies[]" id="assembly{{ $index }}"
                                                                    value="{{ $assembly->id }}">
                                                                <label class="form-check-label"
                                                                    for="assembly{{ $index }}">{{ $assembly->name }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @else
                                                        
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        @endif

                        @if (strtolower($category->name) != 'handles')
                            @if ($heights->count() > 0)
                                <div class="col-md-3 accordion accordion-flush mt-3" id="accordionFlushExample5">
                                    <div class="accordion-item bg-transparent border border-dark border-1 rounded-0">
                                        <h2 class="accordion-header bg-warning" id="flush-headingFive">
                                            <button class="accordion-button legend collapsed text-uppercase" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                                aria-expanded="true" aria-controls="flush-collapseFive">
                                                Heights
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse my-2"
                                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample5" style="max-height: 150px; overflow-y: auto">
                                            <div class="accordion-body px-0 py-0 pb-1">
                                                <div class="ps-2">
                                                    <div class="row g-1" id="heights-filter">
                                                        @foreach ($heights as $index => $height)
                                                        <div class="col-12">
                                                            <div class="form-check form-check-inline">
                                                                <input data-heights-id="{{$height->id}}" id="height-filter" class="form-check-input" type="checkbox"
                                                                    name="heights[]" id="height{{ $index }}"
                                                                    value="{{ $height->height }}">
                                                                <label class="form-check-label"
                                                                    for="height{{ $index }}">
                                                                    {{ $height->height }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                        @if (strtolower($category->name) != 'doors' && strtolower($category->name) != 'handles' && strtolower($category->name) != 'taps' && strtolower($category->name) != 'worktops' && strtolower($category->name) != 'appliances' && strtolower($category->name) != 'upstands' && strtolower($category->name) != 'breakfast bars' && strtolower($category->name) != 'sinks' && strtolower($category->name) != 'internals') 
                            @if ($types->count() > 0)
                                <div class="col-md-3 accordion accordion-flush mt-3" id="accordionFlushExample1">
                                    <div class="accordion-item bg-transparent border border-dark border-1 rounded-0">
                                        <h2 class="accordion-header bg-warning" id="flush-headingOne">
                                            <button class="accordion-button legend collapsed text-uppercase" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="true" aria-controls="flush-collapseOne">
                                                @if (strtolower($category->name) != 'handles' && strtolower($category->name) != 'taps' && strtolower($category->name) != 'worktops' && strtolower($category->name) != 'appliances' && strtolower($category->name) != 'upstands' && strtolower($category->name) != 'breakfast bars' && strtolower($category->name) != 'sinks' && strtolower($category->name) != 'internals') SIZES @else TYPES @endif
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse my-2"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample1" style="max-height: 150px; overflow-y: auto">
                                            <div class="accordion-body px-0 py-0 pb-1">
                                                <div class="ps-2">
                                                    <div class="row g-1">
                                                        @foreach ($types as $index => $type)
                                                        <div class="col-12">
                                                            <div class="form-check form-check-inline">
                                                                <input data-type-id="{{$type->id}}" id="type-filter" class="form-check-input" type="checkbox"
                                                                    name="types[]" id="type{{ $index }}"
                                                                    value="{{ $type->id }}">
                                                                <label class="form-check-label"
                                                                    for="type{{ $index }}">{{ $type->name }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </form>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 bg-light">
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th>Short Title</th>
                        <th>Image</th>
                        <th>Product Code</th>
                        <th>Dimensions</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Style</th>
                        <th>Colour</th>
                        <th>Assembly</th>
                    </thead>
                    <tbody id="products_container">
                        @if ($products->count() > 0)
                            @foreach ($products as $index => $product)
                                <tr>
                                    <td><a class="text-decoration-underline" href="{{ route('orderbyproduct', [$product->slug, $product->serial_number]) }}">{{ $product->short_title }}</a></td>
                                    <td>
                                        <a href="{{ route('orderbyproduct', [$product->slug, $product->serial_number]) }}">
                                            <figure class="my-0" style="margin-bottom: 0px !important;">
                                                <img class="product-image px-0"
                                                    style="margin-bottom: 0px !important;min-height:175px;max-height:175px;max-width:225px;object-fit:contain"
                                                    src="{{ !empty($product->image_path) ? asset('imgs/products/'.$product->image_path) : asset('images/no-image-available.jpg') }}"
                                                    alt="Card image cap" data-bs-toggle="modal"
                                                    data-bs-target="#productModal{{ $index }}">
                                            </figure>
                                        </a>
                                    </td>
                                    <td>{{ $product->product_code }}</td>
                                    <td>{{ $product->dimensions }}</td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <div
                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center product-counter">
                                                <input id="minus{{ $product->id }}"
                                                    class="minus border bg-dark text-light p-0"
                                                    type="button" value="-"
                                                    onclick="decreaseQuantity('{{ $product->id }}', '{{ $product->product_code }}', '{{ $product->full_title }}', {{ $product->price }}, {{ $product->discounted_price }}, {{ $product->discounted_percentage ?? 0 }}, '{{ $product->ParentCategory->slug }}')" />
                                                <input id="quantity{{ $product->id }}"
                                                    class="quantity border border-black text-center"
                                                    type="text" value="0" name="quantity"
                                                    disabled />
                                                <input id="plus{{ $product->id }}"
                                                    class="plus border bg-dark text-light p-0"
                                                    type="button" value="+" type="number"
                                                    max="10"
                                                    {{$product->price == 0 ? 'disabled' : '' }} 
                                                    onclick="increaseQuantity('{{ $product->id }}', '{{ $product->product_code }}', '{{ $product->full_title }}', {{ $product->price }}, {{ $product->discounted_price }}, {{ $product->discounted_percentage ?? 0 }}, '{{ $product->ParentCategory->slug }}')" />
                                            </div>
                                            <div class="col-6">
                                                <p class="fs-5 fw-bold mt-lg-2 text-dark">
                                                    {{ $product->price == 0 ? 'Out of Stock' : '£' . $product->price }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $product->price == 0 ? 'Out of Stock' : '£' . $product->price }}</td>
                                    <td>
                                        <div class="container-fluid">
                                            @if ($product->style)
                                                <small>{{ $product->style->name }}</small>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        @if ($product->colour)
                                            <small>
                                                {{ $product->colour->trade_colour ? $product->colour->trade_colour : $product->colour->name }}
                                            </small>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($category->name != 'DOORS')
                                        @if ($product->assembly)
                                            <small>{{ $product->assembly->name }}</small>
                                        @endif
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="alert alert-warning" role="alert">
                                    No products found.
                                </div>
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>
            </div>

            <div id="custom-pagination-container">
                {{-- {{ $products->links() }} --}}
                {{-- <nav aria-label="...">
                    <ul class="pagination">
                        @for ($i = 1; $i <= $pages; $i++)
                            <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                <a class="page-link" href="javascript:void(0)"
                    data-page="{{ $i }}">{{ $i }}</a>
                </li>
                @endfor
                </ul>
                </nav> --}}
                <nav aria-label="...">
                    <ul class="pagination">
                        <!-- Back arrow -->
                        @if ($currentPage > 1)
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" data-page="{{ $currentPage - 1 }}">Back</a>
                        </li>
                        @endif

                        <!-- Page numbers -->
                        @php
                        $start = max(1, $currentPage - 4);
                        $end = min($pages, $currentPage + 5);
                        if ($end - $start < 9) {
                            $start=max(1, $end - 9);
                            $end=min($pages, $start + 9);
                            }
                            @endphp

                            @for ($i=$start; $i <=$end; $i++)
                            <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                            <a class="page-link" href="javascript:void(0)" data-page="{{ $i }}">{{ $i }}</a>
                            </li>
                            @endfor

                            <!-- Next arrow -->
                            @if ($currentPage < $pages)
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" data-page="{{ $currentPage + 1 }}">Next</a>
                                </li>
                                @endif
                    </ul>
                </nav>

            </div>
        </div>

        <div class="row">

            @if (count($category->testimonials) > 0)
            <section class="container-fluid py-5 bg-white" style="background-image: url({{asset('images/homepage.jpeg')}}); opacity: 2; border-bottom: 3px solid #ebc266; border-left: 3px solid #ebc266; padding: 20px; width: 100% !important; overflow: hidden">
                <div class="row">
                    <h3 class="text-dark text-uppercase fw-bolder text-center mb-4">Testimonials</h3>
                </div>
                <div class="row">
                    <div class="carousel main-carousel-banner-02 owl-carousel clients mb-0"
                        data-margin="30"
                        data-loop="true"
                        data-dots="false"
                        data-autoplay="true"
                        data-autoplay-timeout="3000"
                        data-responsive='{"0":{"items": "3"}, "768":{"items": "4"}, "992":{"items": "4"}, "1200":{"items": "4"}, "1400":{"items": "4"}}'>
                        @foreach ($category->testimonials as $testimonial)
                        <div class="item mx-10 px-0">
                            <div class="carousel-card card border border-warning" style="border-radius: 20px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                                <div class="card-body carousel-card-body">
                                    <div class="col-12 mb-4 d-flex justify-content-center">
                                        <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                                    </div>
                                    <!-- <div class="fw-bold text-center">
                                        Smith
                                    </div>
                                    <div class="text-center">
                                        <small class="text-center">2023-11-19</small>
                                    </div> -->
                                </div>
                                <div class="card-footer carousel-card-footer" style="border-radius: 20px;">
                                    <small class="text-dark text-center" style="font-size: 12px">
                                        {{$testimonial->testimonial}}
                                    </small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
            
            <!-- FAQs -->
            @include('frontend.faqs_component', ['faqsData' => $category->faqs])
            
        </div>
    </section>
    @push('scripts')
    <script>
        $(document).ready(function () {            
            // const $carousel02 = $('.main-carousel-banner-02');
            // // Initialize OwlCarousel
            // $carousel02.owlCarousel({
            //     loop: true,
            //     margin: 30,
            //     stagePadding: 15, // Add padding to avoid clipping
            //     rtl: false,
            //     autoplay: true,
            //     autoplayTimeout: 3000,
            //     autoplayHoverPause: true,
            //     responsive: {
            //         0: {
            //             items: 1,
            //             nav: true
            //         },
            //         768: {
            //             items: 2,
            //             nav: true
            //         },
            //         992: {
            //             items: 3,
            //             loop: true,
            //             margin: 10,
            //             nav: true,
            //             dots: true,
            //             center: true,
            //         },
            //         1200: {
            //             items: 4,
            //             loop: true,
            //             margin: 20,
            //             nav: true,
            //             dots: true,
            //             center: true,
            //         },
            //         1400: {
            //             items: 4,
            //             loop: true,
            //             margin: 20,
            //             nav: true,
            //             dots: true,
            //             center: true,
            //         }
            //     }
            // });
            // // Customize the autoplay behavior to reverse the direction
            // $carousel02.on('translated.owl.carousel', function() {
            //     $carousel02.find('.owl-item.active').css('animation', 'move-left 0.3s ease-in-out');
            // });
            var slug = $('#slug').val();

            $(document).on('click', '.style-filter', function() {
                var styleIds = [];
                $('.style-filter').each(function() {
                    if ($(this).is(':checked')) {
                        styleIds.push($(this).attr('data-style-id'));
                    }
                });
                $.ajax({
                    url: "{{ route('ordercomponent_filter') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        style_ids: styleIds,
                        slug: slug
                    },
                    success:function(response) {
                        if (response.status == true) {
                            var _html = '';
                            response.colours.forEach((colr, index) => {
                                _html += `
                                    <div class="col-lg-12 col-md-12 col-6">
                                        <div class="form-check form-check-inline">
                                            <input data-colour-id="${colr.id}"  class="form-check-input colour-filter" type="checkbox"
                                                name="colours[]" id="colour${index}"
                                                value="${colr.id}">`;
                                                if (colr.colour_code != '' || colr.colour_code != undefined) {
                                                    _html += `<label class="form-check-label d-flex gap-1" for="colour${index}">
                                                        <div class="d-inline border border-dark"
                                                            style="border-radius: 50px; width: 20px;height:20px; background-color:${colr.colour_code};">
                                                        </div>
                                                        ${ colr.trade_colour ? colr.trade_colour : colr.name }
                                                    </label>`;
                                                } else {
                                                    _html += `<label class="form-check-label d-flex gap-1" for="colour${index}">
                                                        <div class="border border-dark" style="border-radius: 50px; width: 20px;height:20px; background: linear-gradient(to right, red, yellow, green);">
                                                        </div>
                                                        ${ colr.trade_colour ? colr.trade_colour : colr.name }
                                                    </label>`;
                                                }
                                        _html += `</div>
                                    </div>
                                `;
                            });
                            $('#colours-filter').html(_html);
                        }
                    }
                });
            });

            $(document).on('click', '#type-filter', function() {
                let _this = $(this);
                var widthId = _this.attr('data-type-id');
                $.ajax({
                    url: "{{ route('ordercomponent_filter') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        type_ids: widthId
                    },
                    success:function(response) {
                        
                    }
                });
            }); 
        });
        var order_component_filter = '{{ route('order_component_filter', $category->slug) }}';
        var orderComponent_filter = '{{ route('ordercomponent_filter') }}';
        let selectedHeights = [];

        function toggleHeightSelection(button) {
            const heightId = button.getAttribute('data-height-id');

            // Toggle selected state
            if (selectedHeights.includes(heightId)) {
                selectedHeights = selectedHeights.filter(id => id !== heightId);
                button.classList.remove('btn-success');
                button.classList.add('btn-primary');
            } else {
                selectedHeights.push(heightId);
                button.classList.remove('btn-primary');
                button.classList.add('btn-success');
            }

            // Update the hidden input with selected heights
            document.getElementById('selectedHeights').value = selectedHeights.join(',');
        }
    </script>
    <script src="{{ asset('js/order-component-by-name.js') }}"></script>
    @endpush
</x-guest-layout>