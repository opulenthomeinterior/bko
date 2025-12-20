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
                        <h1 class="page-title text-white p-3 w-50" style="background-color: #000000a1">Order Component</h1>
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
                            <h4>SEAMLESS REPAIRS • BEAUTIFUL RESULTS</h4>
                            <p>Many small components make up your entire kitchen. One faulty or old component can affect its beauty and functionality. Whether it's a broken hinge, a worn-out faucet, or a rusty handle, let us help you get your kitchen back on track. You can also change your kitchen aesthetics by replacing the old cabinet doors, the floor everything you need: from traditional replacements to modern upgrades, to keep your kitchen functioning flawlessly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__gallery-area mb-120 mt-120">
        <div class="container">
            <!-- 
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__gallery-menu">
                        <div class="ltn__gallery-filter-menu portfolio-filter text-uppercase mb-50">
                            <button data-filter="*" class="active">all</button>
                            <button data-filter=".filter_category_1">Houses</button>
                            <button data-filter=".filter_category_2">Retail</button>
                            <button data-filter=".filter_category_3">Condos</button>
                        </div>
                    </div>
                </div>
            </div>
             -->

            <!-- Portfolio Wrapper Start -->
            <!-- (ltn__gallery-info-hide) Class for 'ltn__gallery-item-info' not showing -->
            <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide---" style="position: relative; height: 1251.75px;">
                <div class="ltn__gallery-sizer col-1"></div>
                @foreach ($components as $index => $component)
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12" style="height: 400px; position: absolute; left: 0%; top: 0px;">
                    <div class="ltn__gallery-item-inner" style="height: 400px">
                        <div class="ltn__gallery-item-img d-flex justify-content-center align-items-center" style="height: 400px">
                            <a href="{{ route('ordercomponentbyname', [$component->slug]) }}" data-rel="lightcase:myCollection">
                                <img src="{{ $component->image_path ? asset('imgs/categories/' . $component->image_path) : asset('images/no-image-available.jpg') }}" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="{{ route('ordercomponentbyname', [$component->slug]) }}">{{ $component->name }} </a></h4>
                            @if ($component->slug == 'doors')
                                <p class="card-text">The doors are the first impression of your kitchen. You can transform your kitchen by selecting from our various colors and finishes. Our doors are the essence of style and durability, creating an elegant look.</p>
                                @elseif ($component->slug == 'handles')
                                <p class="card-text">A wide variety of handles for kitchen units are available at Buy Kitchen Online. The handles are suitable for drawers, cabinets and doors. You can choose a handle according to your style preference and kitchen aesthetic.</p>
                                @elseif ($component->slug == 'accessories')
                                <p class="card-text">Enhance the style and functionality of your kitchen with our premium accessories. From smart storage solutions to innovative accessories, everything is designed to combine modern convenience with timeless elegance.</p>
                                @elseif ($component->slug == 'appliances')
                                <p class="card-text">Make your life hassle-free with our efficient and reliable appliances. Selected for their design, quality, and performance. You can pick from the highest-quality ovens, microwaves, dishwashers, or washing machines.</p>
                                @elseif ($component->slug == 'worktops')
                                <p class="card-text">Keep your kitchen’s form exquisite by selecting the perfect worktop. The worktops are designed to withstand daily use while enhancing the beauty of your kitchen. Choose from a range of worktops featuring Brazilian Greige, Maia®, and many others.</p>
                                @elseif ($component->slug == 'upstands')
                                <p class="card-text">Explore our range of upstands for a refined, contemporary finishing look. They provide a polished, clean finish and protect your walls from splashes and spills. Choose an upstand that will complement your worktop perfectly.</p>
                                @elseif ($component->slug == 'breakfast-bars')
                                <p class="card-text">Our customizable breakfast bars will be the perfect space for family breakfasts and social gatherings. They offer worktop space and additional storage while increasing the flow of your kitchen.</p>
                                @elseif ($component->slug == 'taps')
                                <p class="card-text">Add luxury to your kitchen with our stylish and functional taps. Whether you prefer a classic traditional or a modern design, our top-notch quality taps are built to add convenience and flair to your kitchen.</p>
                                @elseif ($component->slug == 'sinks')
                                <p class="card-text">The sink is not just the focal point of your kitchen but also the most used part. You can select one from our vast collection of durable stainless steel sinks, according to your preference. They are available in different styles and heights.</p>
                                @elseif ($component->slug == 'internals')
                                <p class="card-text">Use your kitchen space efficiently with our innovative internal storage solutions. Keep your kitchen clutter-free and organized by selecting from our smart storage options like wire carousel sets, pull-out storage baskets, swing-out corner storage, and many more.</p>
                            @endif
                        </div>
                    </div>
                </div>     
                @endforeach         
            </div>

            <!-- <div id="ltn__inline_description_1" style="display: none;">
                <h4 class="first">This content comes from a hidden element on that page</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor.</p>
                <p>Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel.</p>
            </div> -->

        </div>
    </div>

    {{-- SMART LEAGUE / KITCHEN EXCELLENCE SECTION START --}}
<div class="ltn__feature-area pt-80 pb-90 mb-120--- section-bg-0">
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
<div class="ltn__feature-area pt-80 pb-90 mb-120--- section-bg-1">
    <div class="container">
        {{-- Top heading --}}
        <!-- <div class="row mb-3">
            <div class="col-12 text-center">
                <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Why BKO?</h6>
                <h1 class="section-title">WHY BUY KITCHEN ONLINE?</h1>
            </div>
        </div> -->


        {{-- Join the Smart League heading --}}
        <div class="row mb-3 justify-content-center">
            <div class="col-12 text-center">
                <h3 class="fw-bold mb-3" style="color:#111;">JOIN THE SMART LEAGUE!</h3>
            </div>
        </div>

        {{-- Benefit cards --}}
        <div class="row ltn__custom-gutter--- justify-content-center mb-4">
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="ltn__feature-item ltn__feature-item-6 text-start bg-white box-shadow-1">
                    <div class="ltn__feature-info py-3 px-3 d-flex align-items-center">
                        <span class="ltn__feature-icon me-2"><i class="flaticon-measure"></i></span>
                        <h6 class="mb-0">Free on-site survey</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="ltn__feature-item ltn__feature-item-6 text-start bg-white box-shadow-1">
                    <div class="ltn__feature-info py-3 px-3 d-flex align-items-center">
                        <span class="ltn__feature-icon me-2"><i class="flaticon-call-center-agent"></i></span>
                        <h6 class="mb-0">Free virtual consultation</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="ltn__feature-item ltn__feature-item-6 text-start bg-white box-shadow-1">
                    <div class="ltn__feature-info py-3 px-3 d-flex align-items-center">
                        <span class="ltn__feature-icon me-2"><i class="flaticon-select"></i></span>
                        <h6 class="mb-0">No obligation to buy</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="ltn__feature-item ltn__feature-item-6 text-start bg-white box-shadow-1">
                    <div class="ltn__feature-info py-3 px-3 d-flex align-items-center">
                        <span class="ltn__feature-icon me-2"><i class="flaticon-online-shop"></i></span>
                        <h6 class="mb-0">Transparent online displayed prices</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="ltn__feature-item ltn__feature-item-6 text-start bg-white box-shadow-1">
                    <div class="ltn__feature-info py-3 px-3 d-flex align-items-center">
                        <span class="ltn__feature-icon me-2"><i class="flaticon-secure-shield"></i></span>
                        <h6 class="mb-0">Peace of mind</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="ltn__feature-item ltn__feature-item-6 text-start bg-white box-shadow-1">
                    <div class="ltn__feature-info py-3 px-3 d-flex align-items-center">
                        <span class="ltn__feature-icon me-2"><i class="flaticon-washer"></i></span>
                        <h6 class="mb-0">Premium quality guaranteed</h6>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA button --}}
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn text-uppercase" style="background-color:#febd49; color:#111; padding:12px 40px; border-radius:30px; font-weight:600;">Schedule Free Consultation</a>
            </div>
        </div>
    </div>
</div>
{{-- SMART LEAGUE / WHY BKO SECTION END --}}


    <!-- TESTIMONIALS SECTION START -->
    <div id="testimonials-section" class="ltn__testimonial-area section-bg-1 pt-90 pb-70">
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
    <div id="faqs-section" class="ltn__faq-area pt-90 pb-90 mb-100">
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

});
</script>
@endsection