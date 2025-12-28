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

    .product-image-container {
        width: 100%;
        height: 200px;
        /* min-height:250px; */
        /* max-height:200px; */
        /* height:auto; */
        /* object-fit:fill;
        object-position:center; */
        border-radius: 8px;
        /* margin-bottom: 24px; */

    }

    .product-image-container img {
        width: 100%;
        height: 90%;
        object-fit: contain;
        /* box-shadow: 0 2px 8px rgba(0,0,0,0.05); */
    }

    .product-title {
        font-size: 28px;
        font-weight: 700;
        color: #1a202c;
        margin-bottom: 20px;
        text-align: center;
    }

    .color-grid {
        /* display: flex;
        gap:12px;
        flex-wrap: wrap;
        justify-content: center; */
        width: 250px;
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .color-option {
        /* width:36px;
        height:36px; */
        width: 25px;
        height: 25px;
        border-radius: 50%;
        cursor: pointer;
        position: relative;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.2s ease;
    }

    .color-option:hover {
        transform: scale(1.1);
    }

    .color-options {
        /* margin-bottom:16px; */
        display: flex;
        flex-direction: column;
        margin-bottom: 16px;
        align-items: center;
    }

    .option-title {
        font-size: 16px;
        font-weight: 600px;
        margin-bottom: 12px;
        color: #2d3748;
        text-align: center;
    }
</style>
@endsection
@section('content')
{{-- Hero Slider (includes consultation form) --}}
@include('components.hero-slider')

{{-- Full-width Image with Text Overlay Section (from Explore Kitchen) --}}
<div class="ltn__slider-area pt-60 pt-md-80 pb-60 pb-md-80 section-bg-1">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="img-fluid d-none d-sm-block" src="https://bkonline.uk/public/images/dream-to-reality.png">
                <img class="img-fluid d-sm-none" src="https://bkonline.uk/public/images/dream-to-reality-mobile.png">
            </div>


            <div class="col-12 col-md-6 rounded yt-video">
                <iframe src="https://www.youtube.com/embed/P0th7FUu-zU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="width: 100%; height: 100%; min-height: 300px;">
                </iframe>

            </div>

        </div>
    </div>
</div>

{{-- Video Section with Heading and Iframe --}}
<div class="ltn__video-popup-area pt-0 pb-60 section-bg-0">
    <div class="container-fluid">
        <div class="container py-5">
            <div class="mb-3 row justify-content-center">

                <h1 class="mb-1 text-center text-black">&nbsp;Discover the Perfect Doors for Your Kitchen</h1>
                <p class="text-center fs-6 w-75">Browse our extensive collection of kitchen door styles, available in a wide array of colors and finishes. Find the ideal match for your existing cabinets and buy kitchen doors to create the kitchen of your dreams</p>

            </div>
            <div class="row justify-content-center">
                @foreach ($styles as $style)
                <div class="col-12 col-lg-4 my-3">
                    <div class="product-card">
                        @if ($style->id == 1)
                        <div class="product-image-container">
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/J-pull-Dove-Grey1744357344_67f8c7e02f610.png" class="product-image" id="main-image" alt="Kitchen Cabinet"></a>
                        </div>
                        @elseif($style->id == 2)
                        <div class="product-image-container">
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Belsay-Cashmere1744359926_67f8d1f695086.jpg" class="product-image" id="main-image" alt="Kitchen Cabinet"></a>
                        </div>
                        @elseif($style->id == 3)
                        <div class="product-image-container">
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Vivo-Gloss-Dust-Grey-Door-Flat_CMYK_PRINT1720430622_668bb01e6686d.jpg" class="product-image" id="main-image" alt="Kitchen Cabinet"></a>
                        </div>
                        @elseif($style->id == 4)
                        <div class="product-image-container">
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/vivo_vero_matt_anthracite1744270130_67f773321d81e.png" class="" id="main-image" alt="Kitchen Cabinet"></a>
                        </div>
                        @elseif($style->id == 5)
                        <div class="product-image-container">
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Lucente-Gloss-Dust-Grey-Door-Perspective_CMYK_PRINT1720441467_668bda7b578b1.jpg" class="" id="main-image" alt="Kitchen Cabinet"></a>
                        </div>
                        @elseif($style->id == 6)
                        <div class="product-image-container">
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Cartmel-Anthracite-Flat-Door-Cutout_RGB_Web1720451119_668c002f56976.jpg" class="" id="main-image" alt="Kitchen Cabinet"></a>
                        </div>
                        @elseif($style->id == 7)
                        <div class="product-image-container">
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Vivo-Matt_Cashmere_Door-Flat_With-Handle1720432485_668bb765d85c3.jpg" class="" id="main-image" alt="Kitchen Cabinet"></a>
                        </div>
                        @elseif($style->id == 8)
                        <div class="product-image-container">
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/vivo_vero_matt_light_grey1744270102_67f77316cd6eb.png" class="" id="main-image" alt="Kitchen Cabinet"></a>
                        </div>
                        @elseif($style->id == 9)
                        <div class="product-image-container">
                            <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}"><img src="https://bkonline.uk/public/imgs/products/Matt-Light-Grey-Door-with-Handle1730581810_67269532decf5.jpg" class="" id="main-image" alt="Kitchen Cabinet"></a>
                        </div>
                        @endif
                        <h1 class="product-title">{{$style->name}}</h1>
                        <div class="color-options">
                            <div class="option-title">Available Colors</div>
                            <div class="color-grid">
                                @foreach ($style['colours'] as $styleColour)
                                    @php ($colour = \App\Models\Colour::where('id', $styleColour)->first()) @endphp
                                    <a href="{{ route('ordercomponentbyname', ['doors']) }}?style_id={{$style->id}}&colour_id={{$styleColour}}" title="{{ $colour->trade_colour }}">
                                        <div class="color-option active" style="background-color: {{$colour->colour_code}};" data-color="white" title="{{ $colour->trade_colour }}"></div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- 3-Step Max Storage Process Section (3 cards with icons) --}}
<div class="ltn__feature-area pt-80 pb-90 section-bg-1">
    <div class="container my-5">
        <h1 class="bko-beats-title text-center">OUR SIMPLE 3-STEP<br>DOOR REPLACEMENT PROCESS</h1>
        <h4 class="fw-bold mb-5 text-center text-center">HOW IT WORKS</h4>
        <div class="bko-beats-container row">
            <div class="bko-beats-box col-lg-4 col-md-4 col-sm-12 col-12 mb-4">
                <div class="card p-4">
                    <!-- <div class="bko-beats-icon-number bko-beats-icon-1 text-center">
                        <i class="fa-solid fa-phone"></i>
                    </div> -->
                    <h3 class="feature-bko-beats-title text-center">
                        GET IN TOUCH
                    </h3>
                    <p class="text-center bko-beats-description">
                        Provide your contact information so we can schedule a convenient time to chat with you.
                    </p>
                </div>
            </div>

            <div class="bko-beats-box col-lg-4 col-md-4 col-sm-12 col-12 mb-4">
                <div class="card p-4">
                    <!-- <div class="bko-beats-icon-number bko-beats-icon-2 text-center">
                        <i class=" fa-solid fa-kitchen-set"></i>
                    </div> -->
                    <h3 class="feature-bko-beats-title text-center">
                        WE PLAN YOUR PROJECT
                    </h3>
                    <p class="text-center bko-beats-description">
                        Our agent will contact you within 24 hours to discuss your budget, preferred styles, and colors, for your kitchen doors.
                    </p>
                </div>
            </div>

            <div class="bko-beats-box col-lg-4 col-md-4 col-sm-12 col-12 mb-4">
                <div class="card p-4">
                    <!-- <div class="bko-beats-icon-number bko-beats-icon-3 text-center">
                        <i class="fa-solid fa-wrench"></i>
                    </div> -->
                    <h3 class="feature-bko-beats-title text-center">ENJOY THE UPGRADE</h3>
                    <p class="text-center bko-beats-description">
                        For your peace of mind, our experienced team will handle the entire installation process for you, if required.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ltn__feature-area pt-80 pb-90 section-bg-0">
    <div class="container my-5">
        <h1 class="bko-beats-title text-center">Why Choose Buy Kitchen Online for Door Replacement?</h1>
        <div class="bko-beats-container row">
            <div class="bko-beats-box col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                <div class="card p-4">
                    <!-- <div class="bko-beats-icon-number bko-beats-icon-1 text-center">
                        <i class="fa-solid fa-phone"></i>
                    </div> -->
                    <h3 class="feature-bko-beats-title text-center">
                        High-Quality Materials
                    </h3>
                    <p class="text-center bko-beats-description">
                        We use durable and stylish materials for long-lasting beauty.
                    </p>
                </div>
            </div>

            <div class="bko-beats-box col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                <div class="card p-4">
                    <!-- <div class="bko-beats-icon-number bko-beats-icon-2 text-center">
                        <i class=" fa-solid fa-kitchen-set"></i>
                    </div> -->
                    <h3 class="feature-bko-beats-title text-center">
                        Wide Range of Styles & Colors
                    </h3>
                    <p class="text-center bko-beats-description">
                        Find the perfect match for your taste.
                    </p>
                </div>
            </div>

            <div class="bko-beats-box col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                <div class="card p-4">
                    <!-- <div class="bko-beats-icon-number bko-beats-icon-3 text-center">
                        <i class="fa-solid fa-wrench"></i>
                    </div> -->
                    <h3 class="feature-bko-beats-title text-center">Experienced Installation Team</h3>
                    <p class="text-center bko-beats-description">
                        Professional and reliable fitting services.
                    </p>
                </div>
            </div>
            
            <div class="bko-beats-box col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                <div class="card p-4">
                    <!-- <div class="bko-beats-icon-number bko-beats-icon-3 text-center">
                        <i class="fa-solid fa-wrench"></i>
                    </div> -->
                    <h3 class="feature-bko-beats-title text-center">Excellent Customer Service</h3>
                    <p class="text-center bko-beats-description">
                        We're here to help you every step of the way.
                    </p>
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