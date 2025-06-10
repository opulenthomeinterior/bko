<x-guest-layout>
    <style>
        .arrow-ul {
            display: flex;
            flex-wrap: wrap;
            column-gap: 1rem;
            justify-content: center;
            padding-left: 0;
            list-style: none; /* Remove default bullets */
        }

        .arrow-ul .arrow-li {
            white-space: nowrap;
            position: relative;
            padding-left: 20px; /* Space for custom bullet */
        }

        .arrow-ul .arrow-li::before {
            content: "▶"; /* Custom bullet (arrow) */
            position: absolute;
            left: 0;
            color: #004d40; /* Bullet color */
        }
    </style>
    
    <div class="container-fluid px-lg-5 py-4 px-md-3 px-3 bg-light border-bottom border-warning">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}" class="text-uppercase">Shop</a></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-8 container">
                <h1 class="fs-1 fw-bolder text-center text-dark text-uppercase">Order Your New Kitchen</h1>
                <p class="text-center">
                    Choosing the proper kitchen can affect the aesthetic and functionality of your entire house. The most crucial factor is that your kitchen should reflect your personality while meeting your needs. It’s not just a place to cook; it is where life happens.
                </p>
                <p class="text-center text-warning fw-bold fs-5">
                    THINGS TO CONSIDER BEFORE SELECTING YOUR KITCHEN
                </p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-12 text-center"> <!-- Full width for better responsiveness -->
                <ul class="arrow-ul">
                    <li class="arrow-li">Functionality</li>
                    <li class="arrow-li">Space constraints</li>
                    <li class="arrow-li">Style preferences</li>
                    <li class="arrow-li">Future trends</li>
                    <li class="arrow-li">Storage needs</li>
                    <li class="arrow-li">Materials</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container px-lg-5 py-4 px-md-3 px-3">
        {{-- Loop through each style --}}
        <div class="row mb-md-5 mb-4">
        @foreach ($data as $styleName => $styleData)
            @php
            if ($loop->iteration % 2 == 0) {
                $boxShadow = '20px -20px 0px rgba(254, 189, 73, 0.8)';
            } else {
            $boxShadow = '-20px -20px 0px rgba(42, 97, 97, 0.8)';
            }
            @endphp
            <!-- <div class="col-lg-6 col-md-6 col-12 pr-4">
                <img src="{{ $styleData['data']->image_path ? asset('uploads/styles/' . $styleData['data']->image_path) : asset('images/order-component.jpg') }}"
                    class="img-fluid" />
            </div> -->

            <div class="row-class col-xl-6 col-lg-6 col-md-6 col-12 my-5">
                <div class="col-12 px-3 mb-3">
                    <!-- <img src="{{ $styleData['data']->image_path ? asset('uploads/styles/' . $styleData['data']->image_path) : asset('images/order-component.jpg') }}"
                    class="img-fluid" /> -->
                    <img src="{{asset('imgs/styles/'.$styleData['data']->image_path)}}"
                    class="img-fluid" style="box-shadow: {{$boxShadow}}; height: 500px; object-fit: cover;" />
                </div>
                <div class="d-flex justify-content-between align-items-center border-bottom border-warning mb-3 mx-3">
                    <h1 class="fs-3 fw-bolder text-dark text-uppercase">{{ $styleData['data']->name }}</h1>
                    <a class="btn btn-sm btn-outline-warning text-dark" href="{{route('orderkitchenbyname', [$styleData['data']->slug])}}" style="border-radius: 0;">Explore</a>
                </div>

                <!-- <p>
                        18mm MDF slab doors available in 12 SuperGloss and UltraMatt finishes. Also available in 2 MFC
                        standard finishes.
                    </p> -->

                <h2 class="fs-5 px-3 text-dark fw-bold text-uppercase">Dispatch</h2>
                <p class="px-3">First select your choice of assembly:</p>

                @foreach ($styleData['assemblies'] as $assemblyName => $assemblyData)
                <button type="button" id="{{ $assemblyName == 'Rigid' ? 'rigid_btn' : 'flatpacked_btn' }}"
                    class="btn btn-sm btn-outline-warning text-dark rounded-0 mx-3">{{ $assemblyName }}</button>
                @endforeach

                @foreach ($styleData['assemblies'] as $assemblyName => $assemblyData)
                <div class="py-2 mt-3 d-none px-3" id="{{ $assemblyData['data']->slug == 'rigid' ? 'rigid' : 'flatpacked' }}">
                    <h2 class="fs-6 text-dark fw-bold">MDF COLOURS ({{ $assemblyName }})</h2>
                    <p>Choose a colour:</p>
                    <div class="row g-1">
                        @foreach ($assemblyData['colours'] as $colour)
                        <div
                            class="col-6 d-flex position-relative align-items-center justify-content-center">
                            @if (!empty($colour->colour_code))
                            <div
                                class="colour-div position-absolute start-0 top-50 translate-middle-y ms-2 border border-dark" style="background-color: {{$colour->colour_code}};">
                            </div>
                            @else
                            <div
                                class="colour-div position-absolute start-0 top-50 translate-middle-y ms-2 border border-dark" style="background: linear-gradient(to right, red, yellow, green);">
                            </div>
                            @endif
                            <a href="{{ route('orderkitchenbycolour', ['style' => $styleData['data']->slug , 'assembly' => $assemblyData['data']->slug, 'colour' => $colour->slug]) }}" class="colour-btn btn w-100 rounded-0 sidebar-btn text-start">
                                {{ $colour->trade_colour }}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        @endforeach
        </div>
    </div>

    {{-- <section class="container-fluid bg-light py-4">
        <div class="col-12 d-flex flex-column align-items-center">
        </div>
    </section> --}}

    <!-- Why choose BKONLINE -->
    @include('frontend.why_choose_bkonline')
    
    {{-- <section class="container-fluid bg-white" style="border-bottom: 40px solid #2a6161;">
    </section> --}}

    <!-- Testimonials -->
    @include('frontend.testimonials_component', ['testimonials' => $testimonials])

    <!-- FAQs -->
    <section class="container-fluid py-5 px-4 bg-white" style="border-bottom: 3px solid #ebc266; border-right: 3px solid #ebc266">
        <div class="row">
            <h3 class="text-dark text-uppercase fw-bolder text-center">FAQs</h3>
        </div>
        <div class="row bg-white">
            <div class="col-lg-12 bg-white">
                <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                Do we offer customised colours in Matt or Gloss?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Yes, we offer a customised range of colours in matt, gloss and painted finish for every kitchen style.</div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 bg-white">
                <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                What is the difference between J Pull and J Pull 22?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            J Pull 22 is a premium, refined version of the classic J Pull design, The "22" signifies an upgraded version with an enhanced, contemporary edge compared to the traditional, softer J Pull.</div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 bg-white">
                <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                What Is the Most Trending Kitchen Style in the UK?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            The most trending kitchen styles for 2024 include sleek, modern designs with minimalistic aesthetics.</div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 bg-white">
                <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                What Is the Quality Difference Between a Slab Laminated and a Slab Painted?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Laminated slabs are highly durable, scratch-resistant, and budget-friendly, while painted slabs provide a luxurious, smooth finish with vibrant colour depth, perfect for creating a premium look.</div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 bg-white">
                <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                What Things Should You Know Before Ordering Any Kitchen?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Having a clear understanding of your kitchen space, budget, and personal preferences for colour and design is essential before ordering any kitchen.</div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@push('scripts')
    <script>
        $(document).ready(function () {            
            const $carousel02 = $('.main-carousel-banner-02');
            // Initialize OwlCarousel
            $carousel02.owlCarousel({
                loop: true,
                margin: 30,
                stagePadding: 15, // Add padding to avoid clipping
                rtl: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    768: {
                        items: 2,
                        nav: true
                    },
                    992: {
                        items: 3,
                        loop: true,
                        margin: 10,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1200: {
                        items: 4,
                        loop: true,
                        margin: 20,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1400: {
                        items: 4,
                        loop: true,
                        margin: 20,
                        nav: true,
                        dots: true,
                        center: true,
                    }
                }
            });
            // Customize the autoplay behavior to reverse the direction
            $carousel02.on('translated.owl.carousel', function() {
                $carousel02.find('.owl-item.active').css('animation', 'move-left 0.3s ease-in-out');
            });
        });
    </script>
@endpush
</x-guest-layout>