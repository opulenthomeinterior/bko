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
                        <h1 class="page-title text-white p-3 w-75" style="background-color: #000000a1">Order Kitchen</h1>
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
    
    @include('components.smart-league-section')
    @include('components.testimonials-section')
    @include('components.faqs-section')

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