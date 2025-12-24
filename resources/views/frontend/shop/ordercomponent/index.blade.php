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
                        <h1 class="page-title text-white p-3 w-75" style="background-color: #000000a1">Order Component</h1>
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
                            <a href="{{ route('ordercomponentbyname', [$component->slug]) }}">
                                <img src="{{ $component->image_path ? asset('imgs/categories/' . $component->image_path) : asset('images/no-image-available.jpg') }}" alt="Image">
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
    @include('components.testimonials-section')
    @include('components.smart-league-section')
{{-- SMART LEAGUE / WHY BKO SECTION END --}}


    <!-- TESTIMONIALS SECTION START -->
    @include('components.testimonials-section')
    <!-- TESTIMONIALS SECTION END -->

    <!-- FAQS SECTION START -->
    @include('components.faqs-section')
    <!-- FAQS SECTION END -->

@endsection


@section('scripts')

<script>
$(document).ready(function() {

});
</script>
@endsection