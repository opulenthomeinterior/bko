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
                        <h1 class="page-title text-white p-3 w-50" style="background-color: #000000a1">Order Kitchen</h1>
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
                            <p>Choosing the proper kitchen can affect the aesthetic and functionality of your entire house. The most crucial factor is that your kitchen should reflect your personality while meeting your needs. It’s not just a place to cook; it is where life happens.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row ltn__product-slider-item-three-active--- slick-arrow-1">
                <!-- ltn__product-item -->
                 @foreach ($data as $styleName => $styleData)
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img d-flex justify-content-center">
                            <img src="https://bkonline.uk/public/imgs/styles/06_06_2025_104957_6842c7d5c26f5-j-pull(1).png" alt="#">
                        </div>
                        <div class="product-info row-class pb-3">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h2>{{ $styleData['data']->name }}</h2>
                                </div>
                                <div>
                                    <a class="btn btn-sm btn-outline-warning text-dark p-2" href="{{route('orderkitchenbyname', [$styleData['data']->slug])}}" style="border-radius: 0;">Explore</a>
                                </div>
                            </div>
                            <div class="product-hover-action">
                                <h6>DISPATCH</h6>
                                <p>First select your choice of assembly</p>
                            </div>
                            <div class="d-flex gap-3">
                                @foreach ($styleData['assemblies'] as $assemblyName => $assemblyData)
                                <button type="button" class="btn btn-sm btn-outline-warning text-dark p-1" id="{{ $assemblyName == 'Rigid' ? 'rigid_btn' : 'flatpacked_btn' }}">{{ $assemblyName }}</button>
                                @endforeach
                            </div>
                                @foreach ($styleData['assemblies'] as $assemblyName => $assemblyData)
                                <div class="py-2 d-none" id="{{ $assemblyData['data']->slug == 'rigid' ? 'rigid' : 'flatpacked' }}">
                                    <h2 class="fs-6 text-dark fw-bold">MDF COLOURS ({{ $assemblyName }})</h2>
                                    <p class="my-0 text-dark">Choose a colour:</p>
                                    <div class="row">
                                        @foreach ($assemblyData['colours'] as $colour)
                                        <div class="col-6 py-0 my-0">
                                            @if (!empty($colour->colour_code))
                                                <div class="colour-div position-absolute start-0 top-50 translate-middle-y ms-3 border border-dark" style="background-color: {{$colour->colour_code}}; width: 12px; height: 12px"></div>
                                            @else
                                                <div class="colour-div position-absolute start-0 top-50 translate-middle-y ms-3 border border-dark" style="background: linear-gradient(to right, red, yellow, green); width: 12px; height: 12px"></div>
                                            @endif
                                            <a class="ms-3" href="{{ route('orderkitchenbycolour', ['style' => $styleData['data']->slug , 'assembly' => $assemblyData['data']->slug, 'colour' => $colour->slug]) }}">
                                                {{ $colour->trade_colour }}
                                            </a>
                                        </div>
                                        <!-- <div class="col-6">
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
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $colour->trade_colour }}
                                            </a>
                                        </div> -->
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
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
    @include('components.faqs-section')
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