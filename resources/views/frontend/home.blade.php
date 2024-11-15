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
   
        #message {
            resize: none; /* Prevents resizing */
        }
   
        #name::placeholder {
            color: black;
            opacity: 1; /* Ensures the color is fully applied */
        }

        #email::placeholder {
            color: black;
            opacity: 1; /* Ensures the color is fully applied */
        }

        #phone::placeholder {
            color: black;
            opacity: 1; /* Ensures the color is fully applied */
        }

        #call-me-at::placeholder {
            color: black;
            opacity: 1; /* Ensures the color is fully applied */
        }

        #message::placeholder {
            color: black;
            opacity: 1; /* Ensures the color is fully applied */
        }

    /* Ensure the image fades out smoothly on hover */
    .card-body:hover img {
        opacity: 0.3;
        transition: opacity 0.4s ease-in-out;
    }

    /* Display the hover text when hovering over the card */
    .card-body:hover .hover-text {
        opacity: 1;
    }

    /* Ensure the hover text is initially hidden */
    .hover-text {
        opacity: 0;
        transition: opacity 0.4s ease-in-out;
        z-index: 2; /* Make sure text is above the image */
    }

    /* Ensure the image has a lower z-index */
    .img-container img {
        z-index: 1;
        display: block;
        width: 100%;
        height: auto;
    }

    /* Ensuring relative positioning for hover text and image */
    .img-container {
        position: relative;
    }

    .unique-font {
        font-family: 'Merienda', cursive;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Optional shadow for emphasis */
        letter-spacing: 0.02rem;
    }

    </style>
    <section class="container-fluid bg-white px-lg-5 py-3 px-md-3 px-3 mt-4" style="border-top: 3px solid #febd49; border-right: 3px solid #febd49">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="fs-4 text-dark text-uppercase fw-bolder unique-font">
                    BK Online Kitchens - Quality Design, Installation, and Affordability in One Package
                </h1>
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

    <section class="container-fluid position-relative" style="height: 100vh; overflow: hidden; border-top: 3px solid #febd49; border-bottom: 3px solid #febd49; border-left: 3px solid #febd49">
        <img src="{{ asset('images/homepage.jpeg') }}"
            alt="Bespoke Kitchen Units in London and Surroundings"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; object-position: center; z-index: -1;">

        <div class="row h-100 w-100 d-flex justify-content-between align-items-center">
            <!-- Left div content -->
            <div class="col-xl-7 col-lg-7 col-md-5 col-sm-12 col-xs-12 col-12 text-center d-flex flex-column justify-content-center align-items-center">
                <h2 class="unique-font text-white fw-bolder text-center p-2" 
                    style="text-shadow: 5px 5px 5px black; background-color: rgba(0, 0, 0, 0.5); width: 90%; border-radius: 50px; border: 1px solid #febd49;">
                    Retail Quality at Online Prices!
                </h2>
                <div class="mt-auto p-2">
                    <a href="{{ route('orderkitchen') }}" class="btn btn-md btn-warning text-dark fw-bolder text-uppercase rounded-0">
                        Order Now
                    </a>
                </div>
            </div>

            <!-- Right form content -->
            <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-xs-12 col-12 p-0 d-flex justify-content-center">
                <form method="POST" action="{{ route('contact_us_inquiry') }}" class="border border-warning w-75" style="background-color: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 0px;">
                    @csrf
                    <h4 class="text-warning fw-bold text-center">
                        Book a free consultation now!
                    </h4>
                    <hr class="border border-warning">
                    <div class="mb-3">
                        <input type="text" style="color: black" class="border border-warning form-control text-dark" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <input type="email" style="color: black" class="border border-warning form-control text-dark" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <input type="number" style="color: black" class="border border-warning form-control text-dark" name="phone" id="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-white bg-warning p-2 text-end fw-bold">Call me at</label>
                        <input type="datetime-local" style="color: black" class="border border-warning form-control text-dark" name="call_time">
                    </div>
                    <div class="mb-3">
                        <textarea name="message" id="message" name="message" rows="3" class="w-100 border border-warning form-control text-dark" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning fw-bolder text-uppercase" style="border-radius: 0;">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <section class="container-fluid px-lg-5 px-md-3 px-3 py-lg-5 py-3" style="background-color: #f0f0f0; border-bottom: 3px solid #febd49; border-right: 3px solid #febd49">
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
                    Whether you're looking for a modern slab kitchen, a timeless shaker design, or the sleek lines of a J-pull handleless kitchen, BK Online makes it easy. Our kitchens are designed to be user-friendly, with components that are straightforward to assemble, thanks to our advanced clic technology. We offer both flat-pack and pre-assembled options, with fast and reliable delivery..
                </p>
                <p>
                    Born out of a passion for offering better kitchen solutions, BK Online stands as a trusted partner in creating kitchens that bring joy for years to come. We invite you to explore our range and experience the difference that quality craftsmanship can make.

                </p>
            </div>
        </div>
    </section>

    <section class="container-fluid py-lg-5 py-3" style="border-bottom: 3px solid #febd49; border-left: 3px solid #febd49">
        <div class="row">
            <h3 class="text-uppercase fw-bolder text-dark text-center">ORDER KITCHEN</h3>
        </div>
        <div class="row mt-4 px-0">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'j-pull') }}">
                    <div style="height: 200px;" class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">J-PULL 22 KITCHEN</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end position-relative">
                            <!-- Image container -->
                            <div class="position-relative img-container">
                                <img src="https://bkonline.uk/public/uploads/styles/15_11_2024_121241_67373ab9d8f19-j-pull-22.jpeg" class="img-fluid w-100 h-100">
                                <!-- Hover text -->
                                <div class="hover-text position-absolute w-100 h-100 bg-warning text-dark d-flex justify-content-center align-items-center" style="top: 0; left: 0; transition: opacity 0.4s;">
                                    <h5 class="text-dark">If you are looking for J-pull Kitchen designs and installation in 1 package but at a lower price, you are at the right place!  BKO Kitchen can be your trusted partner in this kitchen renovation journey from consultation to installation.</h5>
                                </div>
                            </div>
                            <p class="text-center mt-3" style="text-decoration: underline;">See our range</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'true-handleless') }}">
                    <div style="height: 200px;" class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">TRUE HANDLELESS KITCHEN</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end position-relative">
                            <!-- Image container -->
                            <div class="position-relative img-container">
                                <img src="https://bkonline.uk/public/uploads/styles/15_11_2024_171644_673781fcba4e5-true-handleless.jpeg" class="img-fluid w-100 h-100">
                                <!-- Hover text -->
                                <div class="hover-text position-absolute w-100 h-100 bg-warning text-dark d-flex justify-content-center align-items-center" style="top: 0; left: 0; transition: opacity 0.4s;">
                                    <h5 class="text-dark">Do you find it challenging to find the dream luxury true-handleless kitchen within your budget? No more with BKO kitchen, we are here with our true handleless style kitchens that combine elegance and style with affordability.</h5>
                                </div>
                            </div>
                            <p class="text-center mt-3" style="text-decoration: underline;">See our range</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'shaker') }}">
                    <div style="height: 200px;" class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">SHAKER 22 KITCHEN</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end position-relative">
                            <!-- Image container -->
                            <div class="position-relative img-container">
                                <img src="https://bkonline.uk/public/uploads/styles/15_11_2024_171606_673781d675f0e-shaker-22.jpeg" class="img-fluid w-100 h-100">
                                <!-- Hover text -->
                                <div class="hover-text position-absolute w-100 h-100 bg-warning text-dark d-flex justify-content-center align-items-center" style="top: 0; left: 0; transition: opacity 0.4s;">
                                    <h5 class="text-dark">Are you struggling to find an online kitchen partner in the UK that installs shaker kitchens with retail quality at online prices? Consider BKO Kitchen as your trusted partner for streamlining your kitchen remodeling journey.</h5>
                                </div>
                            </div>
                            <p class="text-center mt-3" style="text-decoration: underline;">See our range</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="btn btn-outline-warning p-1 border-0" style="border-radius: 0;" href="{{ route('orderkitchenbyname', 'slab-painted') }}">
                    <div style="height: 200px;" class="card component-card border-0 h-100 d-flex flex-column justify-content-between">
                        <h4 class="p-4 card-title bg-warning text-uppercase fw-bold text-center">SLAB PAINTED KITCHEN</h4>
                        <div class="card-body p-0 border-warning bg-light border d-flex flex-column justify-content-end position-relative">
                            <!-- Image container -->
                            <div class="position-relative img-container">
                                <img src="https://bkonline.uk/public/uploads/styles/15_11_2024_171731_6737822b56477-slab-painted.jpeg" class="img-fluid w-100 h-100">
                                <!-- Hover text -->
                                <div class="hover-text position-absolute w-100 h-100 bg-warning text-dark d-flex justify-content-center align-items-center" style="top: 0; left: 0; transition: opacity 0.4s;">
                                    <h5 class="text-dark">Are you thinking of renovating your old kitchen with a blend of aesthetics and modern touches? If so, it’s time to ease your life with BKO Kitchen. choose from our Slab Kitchen designs in your preferred colour to refresh your home vibes.</h5>
                                </div>
                            </div>
                            <p class="text-center mt-3" style="text-decoration: underline;">See our range</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-light py-5" style="width: 100%; border-bottom: 3px solid #febd49; border-right: 3px solid #febd49">
        <div class="row">
            <h3 class="text-uppercase fw-bolder text-dark text-center">ORDER COMPONENT</h3>
        </div>
        <div class="row mt-4">
            @php
                $categories = \App\Models\Category::where('parent_category_id', null)->whereIn('slug', ['doors', 'accessories', 'internals', 'sinks', 'handles'])->get();
            @endphp
            @foreach($categories as $category)
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                <a class="text-dark btn btn-outline-warning w-100" style="border-radius: 0;" href="{{route('ordercomponentbyname', [$category->slug])}}">
                    <div class="card-old">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center">{{$category->name}}</h5>
                        </div>
        
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <section class="container-fluid py-5" style="border-bottom: 3px solid #febd49; border-left: 3px solid #febd49">
        <div class="row">
            <h3 class="text-dark text-uppercase fw-bolder text-center mb-4">Testimonials</h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="card border border-default">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <img src="https://cdn-icons-png.flaticon.com/512/9385/9385289.png" height="100px" width="100px" class="img-fluid rounded-circle">
                        </div>
                        <div class="ms-2">
                            Smith
                            <br>
                            <small>2023-11-19</small>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-dark text-center">My name is Smith, and my colleague told me about BKO Kitchen's online services. I contacted them via WhatsApp at my convenience, and they promptly arranged a free Consultation Call. My experience with BKO Kitchen was tremendous! Everything went smoothly from the planning stage to the installation of my shaker kitchen. I would definitely recommend their kitchen design and installation services to my friends.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="card border border-default">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <img src="https://cdn-icons-png.flaticon.com/512/9385/9385289.png" height="100px" width="100px" class="img-fluid rounded-circle">
                        </div>
                        <div class="ms-2">
                            Daisy
                            <br>
                            <small>2024-09-27</small>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-dark text-center">I am Daisy, and for a long time, I had been planning to update some utilities in my kitchen. I decided to purchase from BKO Kitchen and ordered their grey sink, tap, and a tall L-shaped blind corner unit. They delivered everything within the promised time frame, and the quality was exceptional. Plus, their prices were very affordable. I highly recommend BKO Kitchen to anyone seeking quality and affordability.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="card border border-default">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <img src="https://cdn-icons-png.flaticon.com/512/9385/9385289.png" height="100px" width="100px" class="img-fluid rounded-circle">
                        </div>
                        <div class="ms-2">
                            Katherine Kate
                            <br>
                            <small>2024-03-12</small>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-dark text-center">My name is Katherine Kate, and I love exploring luxurious handle-less kitchens online. I had the chance to buy from BKO Kitchen and their installation services as well.  I was amazed by their commitment to spot-on,  kitchen designs. They installed my dream handle-less kitchen in my small space, and ever since my kitchen has become my happy place to cook and create memories.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="card border border-default">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <img src="https://cdn-icons-png.flaticon.com/512/9385/9385289.png" height="100px" width="100px" class="img-fluid rounded-circle">
                        </div>
                        <div class="ms-2">
                            Amelia Turner
                            <br>
                            <small>2024-07-21</small>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-dark text-center">My name is Amelia Turner, and I contacted BKO Kitchen through WhatsApp for their bespoke kitchen designs and installation services in London. They made my kitchen renovation journey incredibly easy. After conducting a thorough kitchen survey, they installed a bespoke kitchen in my small space, and the result was magical. Everything was spot on, and my kitchen even feels more roomy now. I'm fully satisfied with BKO Kitchen and highly recommend their services."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5 p-0" style="border-bottom: 3px solid #febd49; border-right: 3px solid #febd49">
        <div class="row">
            <h3 class="text-dark text-uppercase fw-bolder text-center">FAQs</h3>
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