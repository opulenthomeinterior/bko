@extends('layouts.guest2')

@section('title', 'Max Storage Solutions - Buy Kitchen Online')

@section('styles')
    <style>
        .bg-yellow2 {
            background-color: #f0a500 !important;
        }
        .bg-green2 {
            background-color: #2a6161 !important;
        }
    </style>
@endsection
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
                <section class="container mb-5">
                    <div class="row">
                        
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                            <div class="card rounded-0 border-0">
                                <div class="" style="height: 250px; width: 100%">
                                    <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="https://bkonline.uk/public/images/deepest.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                            <div class="card rounded-0 border-0">
                                <div class="p-5 bg-yellow2 d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                                    <h2 class="text-white fw-bold text-center">TALLEST UNITS</h2>
                                    <p class="max-description suggestion text-white text-center">Floor-to-ceiling cabinets for extra storage. Ideal for small kitchens needing vertical space.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                            <div class="card rounded-0 border-0">
                                <div class="" style="height: 250px; width: 100%">
                                    <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="https://bkonline.uk/public/images/widest.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                            <div class="card rounded-0 border-0">
                                <div class="p-5 bg-green2 d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                                    <h2 class="text-white fw-bold text-center">DEEPEST UNITS</h2>
                                    <p class="max-description suggestion text-white text-center">Deeper storage than standard cabinets. Maximizes space for pots, pans and appliances.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                            <div class="card rounded-0 border-0">
                                <div class="" style="height: 250px; width: 100%">
                                    <img class="img-fluid" style="height: 250px; width: 100%; object-fit: cover" src="https://bkonline.uk/public/images/tallest.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 m-0 p-0">
                            <div class="card rounded-0 border-0">
                                <div class="p-5 bg-dark d-flex flex-column align-items-center justify-content-center" style="height: 250px; width: 100%">
                                    <h2 class="text-white fw-bold text-center">WIDEST UNITS</h2>
                                    <p class="suggestion max-description text-white text-center">Wide cabinets for organized storage of kitchens essentials. Make use of every inch efficiently.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://bkonline.uk/public/images/tall-cabinets.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">TALL CABINETS</h5>
                                    <p class="card-text text-dark">Our tall cabinets are made up to 850mm deep and more to flush the American fridge and freezer (750mm deep). The kitchen looks seamless when all the appliances, and cabinets are perfectly aligned.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://bkonline.uk/public/images/bridging.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Bridging Units</h5>
                                    <p class="card-text text-dark">Our bridging units are designed to seamlessly align with tall units, offering a custom fit for you. While the market standard typically offers a depth of 300mm, we provide options with depths of up to 850mm or more.</p>
                                </div>
                            </div>
                        </div>
                    
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- Tall Cabinets / Comparison Cards Section (2 small top, 2 wide bottom) --}}
    <div class="ltn__product-area bg-white pt-60 pb-90">
        <div class="container">
            {{-- Bottom row: two wider cards --}}
            <div class="row justify-content-center">
                <section class="container mb-4">
                    <div class="row gap-lg-2 justify-content-center mb-4">
                            <div class="col-md-5">
                                    <div class="card">
                                        <img src="https://bkonline.uk/public/images/standard-sized-kitche.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">NATIONAL RETAILER <br> STANDARD-SIZED</h5>
                                            
                                        </div>
                                    </div>
                            </div> 
                        <div class="col-md-5">
                            <div class="card">
                                <img src="https://bkonline.uk/public/images/max-storage-kitchen-image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">BESPOKE MAX <br> STORAGE KITCHEN</h5>
                                
                                </div>
                            </div>
                        </div>
                
                        
                    </div>
                </section>
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
