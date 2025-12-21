@extends('layouts.guest2')

@section('title', 'Order Components | Buy Kitchen Online')

@section('meta_description', 'Read customer reviews and Components about our kitchen design and installation services.')

@section('styles')
<style>
    .backgroundimage {
        background-image: url("{{ asset('images/order-component.jpg') }}");
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
</style>
@endsection

@section('content')
    {{-- Breadcrumb --}}
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-1 ltn__breadcrumb-color-white--- pt-35 pb-35 backgroundimage mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title text-white p-3 w-50" style="background-color: #000000a1">{{ str_replace('Kitchen', '', $styleData['data']['name']) }} Kitchen</h1>
                        <!-- <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}" class="text-white"><span class="text-dark"><i class="fas fa-home text-white"></i></span> Home</a></li>
                                <li class="text-white">Order Components</li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Left Heading + Right Form Section --}}
    <div class="ltn__about-us-area pt-60 pt-md-80 pb-60 pb-md-80 section-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="about-us-info-wrap">
                        <div class="mb-20">
                            <h4>THINGS TO CONSIDER BEFORE SELECTING YOUR KITCHEN</h4>
                            <p>To start ordering a J Pull kitchen, first choose your preferred assembly, then from our range of colours and finishes.

J-Pull Kitchens are sleek, handle-less style that looks exquisite in modern homes. The “J” refers to a groove or cut-out in the cabinet that resembles the letter "J." Users can hook their fingers in the groove and pull open drawers and doors without the traditional handles.

Featuring laminated edge finishes, these J Pull Kitchen units include durable 18mm side panels, solid backs, and doors for long-lasting quality. Enjoy the smooth functionality of soft-close hinges and drawers. With wall units up to 900mm high and tall units reaching 2150mm, we cater to various storage needs. Bespoke sizes and over 50 stunning color options allow you to personalize your kitchen effortlessly. Plus, our virtual design and consultancy service ensures your dream J Profile kitchen comes to life with ease.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row ltn__product-slider-item-three-active--- slick-arrow-1">
                @foreach ($styleHasColours as $key => $styleHasColour)
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img d-flex justify-content-center">
                            <img src="@if(!empty($styleHasColour->image_path)){{asset('imgs/styles/colours/'.$styleHasColour->image_path)}}@else{{asset('images/no-image-available.jpg')}}@endif" alt="#">
                        </div>
                        <div class="product-info row-class pb-3">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>{{str_replace('Kitchen', '', $styleData['data']['name'])}} {{$styleHasColour->colour?->trade_colour}}</h4>
                                </div>
                                <div>
                                    <a class="btn btn-sm btn-outline-warning text-dark p-2" href="{{ route('orderkitchenbycolourname', [$styleData['data']['slug'], $styleHasColour->colour?->slug]) }}" style="border-radius: 0;">Explore</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="ltn__feature-area pt-80 pb-90 mb-120--- section-bg-1">
        <div class="container">
            {{-- Top heading --}}
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Why BKO?</h6>
                    <h1 class="section-title">WHY BUY KITCHEN ONLINE?</h1>
                </div>
            </div>

            {{-- Stats row --}}
            <div class="row justify-content-center mb-40">
                <div class="col-lg-4 col-sm-4 col-6 mb-3">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                        <div class="ltn__feature-info py-3">
                            <span class="d-inline-flex justify-content-center align-items-center rounded-circle text-white mb-2" style="background:#2d9cdb; width:58px; height:58px; font-weight:700;">1</span>
                            <h6 class="mb-0" style="min-height: 18px;">Site Survey and Measurements</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-6 mb-3">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                        <div class="ltn__feature-info py-3">
                            <span class="d-inline-flex justify-content-center align-items-center rounded-circle text-white mb-2" style="background:#9b51e0; width:58px; height:58px; font-weight:700;">2</span>
                            <h6 class="mb-0" style="min-height: 18px;">Kitchen Design</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-6 mb-3">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                        <div class="ltn__feature-info py-3">
                            <span class="d-inline-flex justify-content-center align-items-center rounded-circle text-white mb-2" style="background:#f2994a; width:58px; height:58px; font-weight:700;">3</span>
                            <h6 class="mb-0" style="min-height: 18px;">Ordering Process</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-6 mb-3">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                        <div class="ltn__feature-info py-3">
                            <span class="d-inline-flex justify-content-center align-items-center rounded-circle text-white mb-2" style="background:#27ae60; width:58px; height:58px; font-weight:700;">4</span>
                            <h6 class="mb-0" style="min-height: 18px;">Delivery & Quality Check</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-6 mb-3">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                        <div class="ltn__feature-info py-3">
                            <span class="d-inline-flex justify-content-center align-items-center rounded-circle text-white mb-2" style="background:#eb5757; width:58px; height:58px; font-weight:700;">5</span>
                            <h6 class="mb-0" style="min-height: 18px;">Installation</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TESTIMONIALS SECTION START -->
    <div id="testimonials-section" class="ltn__testimonial-area section-bg-0 pt-90 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-40">
                    <h3 class="text-uppercase fw-bolder text-dark mb-10">FACT, EVERYONE LOVES US</h3>
                    <p>Real experiences from homeowners who trusted Buy Kitchen Online with their dream kitchens.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4 box-shadow-1 bg-white">
                        <div class="ltn__testimoni-info">
                            <p>"I discovered BKO Kitchen through a colleague. From the free consultation call to final installation of my shaker kitchen, everything was outstanding. Highly recommended!"</p>
                        </div>
                        <div class="ltn__testimoni-info-inner d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Jamie</h5>
                                <small>Shaker Kitchen Installation</small>
                            </div>
                            <div class="product-ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4 box-shadow-1 bg-white">
                        <div class="ltn__testimoni-info">
                            <p>"I ordered a grey sink, tap and tall L-shaped corner unit. Delivery was on time and quality was better than expected, with very reasonable prices. Perfect blend of quality and affordability."</p>
                        </div>
                        <div class="ltn__testimoni-info-inner d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Sarah</h5>
                                <small>Components Order</small>
                            </div>
                            <div class="product-ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4 box-shadow-1 bg-white">
                        <div class="ltn__testimoni-info">
                            <p>"BKO transformed my small space into a stunning handleless kitchen. Their precision, design sense and installation team made the whole process smooth and stress-free."</p>
                        </div>
                        <div class="ltn__testimoni-info-inner d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Ahmed</h5>
                                <small>Handleless Kitchen</small>
                            </div>
                            <div class="product-ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIALS SECTION END -->

    <!-- FAQS SECTION START -->
    <div id="faqs-section" class="ltn__faq-area pt-90 pb-90 mb-100 section-bg-1">
        <div class="container">
            <div class="row justify-content-center mb-40">
                <div class="col-lg-8 col-12 text-center">
                    <h3 class="text-uppercase fw-bolder text-dark mb-10">Frequently Asked Questions</h3>
                    <p>Answers to common questions about affordable units, bespoke designer kitchens and our process.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="ltn__faq-inner ltn__faq-inner-2">
                        <div id="bkoFaqAccordion">
                            <!-- card 1 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
                                    What is the difference between an affordable kitchen unit and a custom kitchen unit?
                                </h6>
                                <div id="faq1" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>An affordable kitchen unit offers budget-friendly solutions without compromising quality. Custom kitchen units are tailor-made to your style, space and preferences, usually at a higher price point.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 2 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq2" aria-expanded="false">
                                    How is a bespoke designer kitchen different from a standard kitchen?
                                </h6>
                                <div id="faq2" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Standard kitchens come in preset sizes and designs. A bespoke designer kitchen is custom-made for you, including layout, materials and overall aesthetic tailored to your home.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 3 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title"indr-toggle="collapse" data-target="#faq3" aria-expanded="false">
                                    Can Iresso use affordable kitchen units for a renovation?
                                </h6>
                                <div id="faq3" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes. Affordable kitchen units are ideal when renovating on a budget. At Buy Kitchen Online even our budget-friendly options use quality materials and craftsmanship.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 4 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq4" aria-expanded="false">
                                    What is the process of designing custom kitchen units?
                                </h6>
                                <div id="faq4" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>We start with an in-depth consultation, discuss your style and functionality needs, measure your space and then create a unique design proposal for your kitchen.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 5 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq5" aria-expanded="false">
                                    Can a designer kitchen increase the value of my property?
                                </h6>
                                <div id="faq5" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes. A well-designed luxury kitchen adds both aesthetic appeal and functionality, which can significantly increase the value and desirability of your property.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 6 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq6" aria-expanded="false">
                                    Are there any affordable kitchen units available that offer customization?
                                </h6>
                                <div id="faq6" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes, Buy Kitchen Online allows you to customize a budget-friendly kitchen unit to some extent. You get a personalized kitchen at an affordable price.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 7 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq7" aria-expanded="false">
                                    How much does a designer kitchen unit cost?
                                </h6>
                                <div id="faq7" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>The entire cost of a designer kitchen depends on many different factors like materials, size, and design complexity. However, Buy Kitchen Online offers premium quality at affordable prices for various budgets.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 8 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq8" aria-expanded="false">
                                    Can Buy Kitchen Online design a custom kitchen unit to fit my small physical space?
                                </h6>
                                <div id="faq8" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Absolutely! The experts at Buy Kitchen Online specialize in building kitchen units according to your available space and lifestyle.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 9 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq9" aria-expanded="false">
                                    Does Buy Kitchen Online offer any flexible financing options for kitchen units?
                                </h6>
                                <div id="faq9" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes, Buy Kitchen Online aims to make your dream kitchen a reality by offering different financing options. Please get in touch with us for any further details.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 10 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq10" aria-expanded="false">
                                    Which materials are used to make a kitchen unit?
                                </h6>
                                <div id="faq10" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>The most popular materials include stainless steel, quartz, and wood (such as oak, maple, and cherry). Buy Kitchen Online helps you in choosing the perfect material according to your preference.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 11 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq11" aria-expanded="false">
                                    Is a bespoke designer kitchen worth it?
                                </h6>
                                <div id="faq11" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Bespoke kitchens are worth it if you prefer customized, high-quality, long-lasting kitchens. The price may be higher than a standard kitchen, but the advantages of having a kitchen custom-made for your space and style are worth the investment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQS SECTION END -->

@endsection


@section('scripts')

<script>
$(document).ready(function() {
   $(document).on('click', '#flatpacked_btn', function (e) {
      e.preventDefault();
      const row = $(e.target).closest('.row-class');
      row.find(`#flatpacked`).removeClass('d-none').addClass('d-block');
      row.find('#rigid').addClass('d-none');
      e.preventDefault();
   })

   $(document).on('click', '#rigid_btn', function (e) {
      const row = $(e.target).closest('.row-class');
      row.find('#rigid').removeClass('d-none').addClass('d-block');
      row.find('#flatpacked').addClass('d-none');
      e.preventDefault();
   });
});
</script>
@endsection