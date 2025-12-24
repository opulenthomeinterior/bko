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
                        <h1 class="page-title text-white p-3 w-75" style="background-color: #000000a1">{{ str_replace('Kitchen', '', $styleData['data']['name']) }} Kitchen</h1>
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
                            <p>{!! $styleData['data']['style_description'] !!}</p>
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