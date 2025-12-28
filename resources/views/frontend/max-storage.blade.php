@extends('layouts.guest2')

@section('title', 'Max Storage Solutions - Buy Kitchen Online')

@section('content')
    {{-- Hero Slider (includes consultation form) --}}
    @include('components.hero-slider')

    {{-- Full-width Image with Text Overlay Section (from Explore Kitchen) --}}
    <div class="ltn__slider-area pt-60 pt-md-80 pb-60 pb-md-80">
            <div class="container">
                <div class="col-12">
                    <div class="position-relative overflow-hidden" style="max-height: 320px;">
                        <a href="#contactModal" data-bs-toggle="modal" data-bs-target="#contactModal">
                            <img src="https://bkonline.uk/public/images/max-storage-after-hero.png" alt="Max Storage Kitchen" class="img-fluid w-100" style="height: 300px; object-fit: cover;">
                        </a>
                        <!-- <div class="position-absolute start-0" style="top: 18px; left: 18px; max-width: 380px; margin: 20px">
                            <div style="background: rgba(255,255,255,0.7); backdrop-filter: blur(6px); padding: 14px 18px; border-radius: 10px;">
                                <h3 class="fw-bold mb-1 text-dark" style="font-size: 22px;">Maximize Your Kitchen</h3>
                                <h5 class="fw-bold mb-1 text-dark" style="font-size: 16px;">Not Your Budget.</h5>
                                <p class="mb-2 text-dark" style="font-size: 14px;">Premium quality max storage kitchens at the price of a national retailer.</p>
                                <a href="#" class="btn btn-warning text-uppercase px-4 py-2" style="font-weight: 600; border-radius: 999px;">Subscribe</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
    </div>
    
    {{-- Video Section with Heading and Iframe --}}
    <div class="ltn__video-popup-area pt-0 pb-60">
        <div class="">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12 text-center">
                    <h2 class="fw-bold mb-4">
                        Bespoke Storage Solutions That Fit Every Pot, Pan &amp; Gadget Guaranteed!
                    </h2>
                    <div class="col-md-12 rounded position-relative" style="height: 500px;">
                        <iframe src="https://www.youtube.com/embed/bk4_64zzKJI?si=YDMGTA1w622JuqTg" style="width: 100%; height: 100%;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 3-Step Max Storage Process Section (3 cards with icons) --}}
    <div class="ltn__feature-area bg-white pt-80 pb-90">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-2">Are you tired of just dreaming about a better kitchen?</h2>
                    <h5 class="text-uppercase mb-2" style="letter-spacing: 2px;">Bespoke Design, Standard Price</h5>
                    <p class="mb-0">We offer premium, bespoke designer kitchens at the price of standard kitchens. Our process is straightforward.</p>
                </div>
            </div>

            <div class="row ltn__custom-gutter--- justify-content-center mt-4">
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 d-flex flex-column h-100">
                        <div class="ltn__feature-icon mb-2">
                            <span><i class="flaticon-call-center-agent"></i></span>
                        </div>
                        <div class="ltn__feature-info px-3 pb-3">
                            <h3 class="mb-2">You Contact Us</h3>
                            <p>Share your vision, we listen to your ideas, needs, and lifestyle to understand your dream kitchen.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 d-flex flex-column h-100">
                        <div class="ltn__feature-icon mb-2">
                            <span><i class="flaticon-select"></i></span>
                        </div>
                        <div class="ltn__feature-info px-3 pb-3">
                            <h3 class="mb-2">We handle everything for you</h3>
                            <p>Our experts create a personalised design for you, including layouts, materials, colours and storage solutions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 d-flex flex-column h-100">
                        <div class="ltn__feature-icon mb-2">
                            <span><i class="flaticon-house"></i></span>
                        </div>
                        <div class="ltn__feature-info px-3 pb-3">
                            <h3 class="mb-2">You enjoy your perfect kitchen</h3>
                            <p>Our skilled craftsmen build and install your custom kitchen, ensuring a perfect fit and lasting beauty.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <a href="#contactModal" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn text-uppercase" style="background-color:#ffc107; color:#111; padding:12px 40px; border-radius:30px; font-weight:600;">Schedule Free Consultation</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Max Storage Units Gallery Section (image cards) --}}
    <div class="ltn__gallery-area section-bg-1 pt-80 pb-90">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-2">What is a Max Storage Kitchen?</h2>
                    <h5 class="text-uppercase mb-2" style="letter-spacing: 2px;">Are you struggling with storage space?</h5>
                    <p class="mb-1"><strong>Solution: Bespoke Max Storage Kitchens</strong></p>
                    <p class="mb-0">We design deepest, tallest and widest storage units to turn cramped cabinets into organised, stress-free spaces.</p>
                </div>
            </div>

            <div class="row ltn__gallery-style-2 justify-content-center">
                <!-- Tallest Units -->
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <img src="{{ asset('img/gallery/1.jpg') }}" alt="Tallest Units" class="img-fluid">
                        </div>
                        <div class="ltn__gallery-item-info mt-2">
                            <h4 class="fw-bold mb-1">Tallest Units</h4>
                            <p class="mb-0">Floor-to-ceiling cabinets for extra storage. Ideal for small kitchens needing vertical space.</p>
                        </div>
                    </div>
                </div>

                <!-- Deepest Units -->
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <img src="{{ asset('img/gallery/2.jpg') }}" alt="Deepest Units" class="img-fluid">
                        </div>
                        <div class="ltn__gallery-item-info mt-2">
                            <h4 class="fw-bold mb-1">Deepest Units</h4>
                            <p class="mb-0">Deeper cabinets than standard units to maximise space for pots, pans and appliances.</p>
                        </div>
                    </div>
                </div>

                <!-- Widest Units -->
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <img src="{{ asset('img/gallery/3.jpg') }}" alt="Widest Units" class="img-fluid">
                        </div>
                        <div class="ltn__gallery-item-info mt-2">
                            <h4 class="fw-bold mb-1">Widest Units</h4>
                            <p class="mb-0">Wide cabinets for organised storage of kitchen essentials. Make use of every inch efficiently.</p>
                        </div>
                    </div>
                </div>

                <!-- Corner Solutions -->
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <img src="{{ asset('img/gallery/4.jpg') }}" alt="Corner Solutions" class="img-fluid">
                        </div>
                        <div class="ltn__gallery-item-info mt-2">
                            <h4 class="fw-bold mb-1">Corner Solutions</h4>
                            <p class="mb-0">Smart corner pull-outs so no space is wasted in hard-to-reach areas.</p>
                        </div>
                    </div>
                </div>

                <!-- Pantry Organisation -->
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <img src="{{ asset('img/gallery/5.jpg') }}" alt="Pantry Organisation" class="img-fluid">
                        </div>
                        <div class="ltn__gallery-item-info mt-2">
                            <h4 class="fw-bold mb-1">Pantry Organisation</h4>
                            <p class="mb-0">Beautifully organised pantry units with drawers, dividers and dedicated zones.</p>
                        </div>
                    </div>
                </div>

                <!-- Island Storage -->
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <img src="{{ asset('img/gallery/6.jpg') }}" alt="Island Storage" class="img-fluid">
                        </div>
                        <div class="ltn__gallery-item-info mt-2">
                            <h4 class="fw-bold mb-1">Island Storage</h4>
                            <p class="mb-0">Multi-functional islands with drawers, shelves and seating for added storage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tall Cabinets / Comparison Cards Section (2 small top, 2 wide bottom) --}}
    <div class="ltn__product-area bg-white pt-60 pb-90">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-2">Max Storage Unit Types</h2>
                    <p class="mb-0">See how our tall cabinets, bridging units and full kitchens maximise every centimetre of space.</p>
                </div>
            </div>

            {{-- Top row: two smaller cards --}}
            <div class="row justify-content-center mb-4">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <img src="{{ asset('img/product-3/1.jpg') }}" alt="Tall Cabinets" class="img-fluid">
                        </div>
                        <div class="product-info text-start p-3">
                            <h4 class="product-title mb-1">Tall Cabinets</h4>
                            <p class="mb-0">Tall units up to 850mm deep to align with American-style fridge freezers and maximise vertical storage.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <img src="{{ asset('img/product-3/2.jpg') }}" alt="Bridging Units" class="img-fluid">
                        </div>
                        <div class="product-info text-start p-3">
                            <h4 class="product-title mb-1">Bridging Units</h4>
                            <p class="mb-0">Designed to sit perfectly above tall units, creating seamless storage around large appliances.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bottom row: two wider cards --}}
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 mb-30">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <img src="{{ asset('img/product-3/3.jpg') }}" alt="Standard-sized Kitchen" class="img-fluid">
                        </div>
                        <div class="product-info text-start p-3">
                            <h4 class="product-title mb-1">National Retailer Standard-sized</h4>
                            <p class="mb-0">Typical high street layouts with limited depth and width, often leaving unused and cluttered space.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 mb-30">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <img src="{{ asset('img/product-3/4.jpg') }}" alt="Bespoke Max Storage Kitchen" class="img-fluid">
                        </div>
                        <div class="product-info text-start p-3">
                            <h4 class="product-title mb-1">Bespoke Max Storage Kitchen</h4>
                            <p class="mb-0">Our made-to-measure layouts with deepest, tallest and widest units to transform everyday usability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Comparison Table: Standard vs Max Storage vs Benefits --}}
    <div class="ltn__compare-table-area section-bg-1 pt-60 pb-90">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-2">Max Storage vs Standard Kitchen</h2>
                    <p class="mb-0">Compare features side by side to see how Max Storage Kitchens solve everyday storage problems.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle mb-0">
                            <thead class="bg-white text-dark text-uppercase fw-bold">
                                <tr>
                                    <th scope="col">Features</th>
                                    <th scope="col">National Retailer Standard-sized Kitchen</th>
                                    <th scope="col">Bespoke Max Storage Kitchen</th>
                                    <th scope="col">Benefits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Layout &amp; Flow</th>
                                    <td>Often limited to pre-determined configurations.</td>
                                    <td>Designed specifically for your space and how you use it.</td>
                                    <td>Eliminates cramped spaces and inefficient workflows.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Storage Capacity</th>
                                    <td>Standard-sized cabinets with basic shelving.</td>
                                    <td>Maximised storage through deep drawers, pull-outs and tall units.</td>
                                    <td>Solves the problem of overflowing cabinets and cluttered worktops.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Corner Cabinet Use</th>
                                    <td>Often awkward and underutilised.</td>
                                    <td>Clever corner solutions like lazy susans and pull-outs.</td>
                                    <td>Eliminates wasted space in hard-to-reach areas.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Internal Organisation</th>
                                    <td>Basic shelves with limited options for customisation.</td>
                                    <td>Tailored drawer dividers, spice racks and utensil holders.</td>
                                    <td>Ends the frustration of rummaging through disorganised drawers.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Accessibility</th>
                                    <td>Can be difficult to reach items in high or low areas.</td>
                                    <td>Designed with accessibility in mind, including pull-down shelves.</td>
                                    <td>Reduces physical strain from bending and stretching.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Material &amp; Finish Choices</th>
                                    <td>Limited selection of standard options.</td>
                                    <td>Wide range of high-quality, unique and durable materials.</td>
                                    <td>Allows for personalisation and a higher-quality, longer-lasting kitchen.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Appliance Integration</th>
                                    <td>Can sometimes look like an afterthought.</td>
                                    <td>Seamless integration for a cohesive and balanced look.</td>
                                    <td>Creates a more visually appealing and functional space.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Personalisation</th>
                                    <td>Limited ability to customise to individual needs.</td>
                                    <td>Fully customisable to suit your specific lifestyle and preferences.</td>
                                    <td>Ensures the kitchen perfectly fits your cooking habits and aesthetic taste.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Countertop Space</th>
                                    <td>Can be limited due to lack of efficient storage.</td>
                                    <td>Optimised storage frees up valuable worktop areas.</td>
                                    <td>Provides more room for food preparation and other kitchen tasks.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Overall Functionality</th>
                                    <td>Can feel inefficient and frustrating to use.</td>
                                    <td>Designed for optimal workflow and ease of use.</td>
                                    <td>Makes cooking, cleaning and organising more enjoyable and less time-consuming.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Smart Storage Solutions Carousel --}}
    <div class="ltn__product-slider-area bg-white ltn__product-gutter pt-60 pb-90">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-2">Smart Storage Solutions</h2>
                    <p class="mb-1">Wish you could find that one spice without emptying the entire cupboard? <strong>We can help!</strong></p>
                </div>
            </div>

            <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
                {{-- Slide 1 --}}
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center--- d-flex flex-column h-100">
                        <div class="product-img">
                            <img src="{{ asset('img/product-3/5.jpg') }}" alt="Wicker basket set with runners">
                        </div>
                        <div class="product-info text-start p-3">
                            <h4 class="product-title mb-1">Wicker basket set </h4>
                            <p class="mb-0">Smooth sliding baskets that keep fruit and veg organised, visible and easy to reach.</p>
                        </div>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center--- d-flex flex-column h-100">
                        <div class="product-img">
                            <img src="{{ asset('img/product-3/6.jpg') }}" alt="Swing-out corner storage">
                        </div>
                        <div class="product-info text-start p-3">
                            <h4 class="product-title mb-1">Swing-out corner storage</h4>
                            <p class="mb-0">Corner pull-out units that bring hidden pots and pans right to you in one smooth motion.</p>
                        </div>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center--- d-flex flex-column h-100">
                        <div class="product-img">
                            <img src="{{ asset('img/product-3/7.jpg') }}" alt="Larder unit glass side baskets">
                        </div>
                        <div class="product-info text-start p-3">
                            <h4 class="product-title mb-1">Larder unit glass side baskets</h4>
                            <p class="mb-0">Tall larder pull-outs with clear glass sides so every item is visible at a glance.</p>
                        </div>
                    </div>
                </div>

                {{-- Slide 4 --}}
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center--- d-flex flex-column h-100">
                        <div class="product-img">
                            <img src="{{ asset('img/product-3/8.jpg') }}" alt="Under-sink organiser">
                        </div>
                        <div class="product-info text-start p-3">
                            <h4 class="product-title mb-1">Under-sink organiser</h4>
                            <p class="mb-0">Smart trays and dividers that tame cleaning products under the sink and free up space.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <a href="#contactModal" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn text-uppercase" style="background-color:#ffc107; color:#111; padding:12px 40px; border-radius:30px; font-weight:600;">Explore Unique Storage Solutions</a>
                </div>
            </div>
        </div>
    </div>

    <!-- make a modal for contact us form  -->
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('contact_us_inquiry') }}" method="POST" class="row">
                        @csrf
                        <div class="col-12 mb-2 text-dark">
                            <div class="input-item input-item-name ltn__custom-icon">
                                <input type="text" name="name" placeholder="Enter your name *" required style="margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="input-item input-item-email ltn__custom-icon">
                                <input type="email" name="email" placeholder="Enter your email *" required style="margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="input-item input-item-phone ltn__custom-icon">
                                <input type="number" name="phone" placeholder="Enter your phone number *" required style="margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="input-item input-item-date ltn__custom-icon" style="margin-bottom: 0px;">
                                <input type="datetime-local" name="call_time" placeholder="Call Us At" class="form-control" style="height: 60px; margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <input type="text" name="message" placeholder="Enter your message" style="margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <div class="btn-wrapper mt-0">
                                <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- FAQs Section (imported from component) --}}
    <div class="section-bg-1 pt-60 pb-90">
        @include('components.faqs-section')
    </div>
@endsection
