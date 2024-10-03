<x-guest-layout>
    <style>
        ol li {
            list-style-type: unset;
        }

        ul li {
            list-style-type: disc;
        }

        .hover-button:hover {
            background-color: #000; /* Change background color to dark */
        }

        .hover-button:hover .card-title {
            color: #fff; /* Change text color to white */
        }

    </style>
    <section class="container-fluid bg-dark px-lg-5 py-4 px-md-3 px-3 mt-4">
        <div class="row py-4">
            <div class="col-12 text-center">
                <h1 class="fs-3 text-white text-uppercase fw-bolder">
                    BK Online Kitchens - Quality Design, Installation, and Affordability in One Package
                </h1>
                <a href="{{ route('orderkitchen') }}" class="mt-4 btn btn-md btn-outline-warning fw-bolder text-uppercase rounded-0"
                    href="{{ route('orderkitchen') }}">Order Now</a>
            </div>
        </div>
    </section>

    <!-- <section class="container-fluid px-lg-5 px-md-3 px-3 py-lg-5 py-3" style="background-color: #f0f0f0;">
        <div class="row">
            <div class="col-lg-6 text-center">
                <h2 class="text-uppercase text-dark fw-bolder" style="font-size: 4rem">20% OFF </h2>
                <h3 class="text-uppercase fw-bolder text-dark">GET 20% OFF ALL ORDERS WHEN YOU OPEN A TRADE ACCOUNT</h3>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li class="fw-bold py-1"><i class="ri-check-line"></i>
                        Kitchen despatched in 48 hours
                    </li>
                    <li class="fw-bold py-1"><i class="ri-check-line"></i>
                        Over 30 years manufacturing in the UK
                    </li>
                    <li class="fw-bold py-1"><i class="ri-check-line"></i>
                        Standard or made to measure
                    </li>
                    <li class="fw-bold py-1"><i class="ri-check-line"></i>
                        25 years quality guarantee on all cabinets
                    </li>
                    <li class="fw-bold py-1"><i class="ri-check-line"></i>
                        FIRA Gold Certified
                    </li>
                </ul>
            </div>
        </div>
    </section> -->

    <section class="container-fluid position-relative" style="height: 70vh; overflow: hidden; border-bottom: 5px solid #febd49; border-left: 5px solid #febd49">
        <img src="{{ asset('images/Slab-Kitchen.jpg') }}"
            alt="Bespoke Kitchen Units in London and Surroundings"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; object-position: center; z-index: -1;">
        <div class="row h-100">
            <div class="col-12 text-center text-over-image d-flex justify-content-center align-self-center p-0">
                <h2 class="text-white fw-bolder text-center py-2 px-2" style="text-shadow: 5px 5px 5px black; background-color: rgba(0, 0, 0, 0.5); width: 42%; border-radius: 50px">WE CAN'T BE BEATEN ON PRICE!</h2>
                <!-- <a href="{{ route('orderkitchen') }}"
                    class="btn btn-md fw-bolder btn-warning text-uppercase rounded-0">Shop now</a> -->
            </div>
        </div>
    </section>

    <section class="container-fluid px-lg-5 px-md-3 px-3 py-lg-5 py-3" style="background-color: #f0f0f0; border-bottom: 1px solid #febd49">
        <div class="row">
            <div class="col-12">
                <p>
                    BK Online is a premier provider of complete kitchen solutions, specialising in the design and delivery of ready-made kitchens, rigid kitchen units, and components in slab, shaker, or J-pull styles. Serving London and the surrounding areas, we pride ourselves on delivering showroom-quality kitchens directly to your door.
                </p>
                <p>
                    At BK Online, we are committed to crafting every kitchen with precision and care, ensuring that our customers receive only the highest quality products. Our years of experience in kitchen design and manufacturing allow us to offer a seamless and stress-free ordering process, from initial design consultation to final delivery.
                </p>
                <p>
                    Operating from state-of-the-art facilities, our skilled workforce uses the latest sustainable manufacturing techniques to create kitchens that not only meet but exceed our clients' expectations. Our dedication to innovation ensures that our customers always have access to the most up-to-date designs and materials.
                </p>
                <p>
                    Whether you're looking for a modern slab kitchen, a timeless shaker design, or the sleek lines of a J-pull handleless kitchen, BK Online makes it easy. Our kitchens are designed to be user-friendly, with components that are straightforward to assemble, thanks to our advanced clic technology. We offer both flat-pack and pre-assembled options, with fast and reliable delivery times—receive your flat-pack kitchen in just 3 working days (UK Mainland) or opt for our pre-assembled units with a lead time of 10 working days until dispatch.
                </p>
                <p>
                    Born out of a passion for offering better kitchen solutions, BK Online stands as a trusted partner in creating kitchens that bring joy for years to come. We invite you to explore our range and experience the difference that quality craftsmanship can make.

                </p>
            </div>
        </div>
    </section>

    <section class="container-fluid py-lg-5 py-3" style="border-bottom: 1px solid #febd49">
        <div class="row">
            <h3 class="text-uppercase fw-bolder text-dark text-center">ORDER KITCHEN</h3>
        </div>
        <div class="row mt-4 px-0">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'j-pull-22') }}">
                    <div class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">J-PULL Kitchen</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end">
                            <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sequi. Alias autem eum ut voluptatum, error porro officia eaque accusamus architecto, provident numquam incidunt hic eveniet nulla atque! Porro, hic.</p>
                            <p style="text-decoration: underline;">Order now</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'true-handleless') }}">
                    <div class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">TRUE HANDLELESS Kitchen</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end">
                            <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sequi. Alias autem eum ut voluptatum, error porro officia eaque accusamus architecto, provident numquam incidunt hic eveniet nulla atque! Porro, hic.</p>
                            <p style="text-decoration: underline;">Order now</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'shaker-22') }}">
                    <div class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">SHAKER Kitchen</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end">
                            <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sequi. Alias autem eum ut voluptatum, error porro officia eaque accusamus architecto, provident numquam incidunt hic eveniet nulla atque! Porro, hic.</p>
                            <p style="text-decoration: underline;">Order now</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'slab-kitchens') }}">
                    <div class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">SLAB Kitchen</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end">
                            <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sequi. Alias autem eum ut voluptatum, error porro officia eaque accusamus architecto, provident numquam incidunt hic eveniet nulla atque! Porro, hic.</p>
                            <p style="text-decoration: underline;">Order now</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-light py-5" style="width: 100%; border-bottom: 1px solid #febd49">
        <div class="row">
            <h3 class="text-uppercase fw-bolder text-dark text-center">ORDER COMPONENT</h3>
        </div>
        <div class="row mt-4">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'doors')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">DOORS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'panels-&-appliance-doors')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">PANELS & APPLIANCE DOORS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'appliances')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">APPLIANCES</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'edging')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">EDGING</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'base-cabinets')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">BASE CABINETS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'handles')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">HANDLES</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'worktops')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">WORKTOPS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'taps')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">TAPS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'wall-cabinets')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">WALL CABINETS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'gola-handleless-rails')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">GOLA HANDLELESS RAILS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'worktops-and-upstands')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">WORKTOPS AND UPSTANDS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'sinks')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">SINKS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'tall-cabinets')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">TALL CABINETS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'accessories')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">ACCESSORIES</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'breakfast-bars')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">BREAKFAST BARDS</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', 'swatches-and-samples')}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold text-center">SWATCHES AND SAMPLES</h5>
                        </div>
        
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5 p-0">
        <div class="row">
            <h3 class="text-dark text-uppercase fw-bolder text-center">General BK Online FAQs</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @if ($generalFaqs->count() > 0)
                        @foreach ($generalFaqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bolder text-dark btn btn-outline-warning" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $loop->index + 1 }}"
                                        aria-expanded="false" aria-controls="flush-collapse{{ $loop->index + 1 }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $loop->index + 1 }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">{!! $faq->answer !!}</div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-info" role="alert">
                            No FAQ's found.
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- <div class="row pt-3">
            <div class="col-lg-12">
                <h3 class="text-dark text-uppercase fw-bolder">Deliveries FAQs</h3>
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    @if ($deliveryFaqs->count() > 0)
                        @foreach ($deliveryFaqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header text-decoration-underline">
                                    <button class="accordion-button collapsed fw-bolder" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsedelivery{{ $loop->index + 1 }}"
                                        aria-expanded="false"
                                        aria-controls="flush-collapsedelivery{{ $loop->index + 1 }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="flush-collapsedelivery{{ $loop->index + 1 }}"
                                    class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">{!! $faq->answer !!}</div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-info" role="alert">
                            No FAQ's found.
                        </div>
                    @endif
                </div>
            </div>
        </div> -->
    </section>

</x-guest-layout>