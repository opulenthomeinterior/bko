@extends('layouts.guest2')
@section('content')
    <head>
    <title>Fitting Guides </title></head>

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

    {{-- Breadcrumb --}}
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-1 ltn__breadcrumb-color-white--- pt-35 pb-35 backgroundimage mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title text-white p-3 w-75" style="background-color: #000000a1">Fitting Guides</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">

        <div class="row">
            <div class="col-12 text-center">
                <h5 class="text-dark">We've put together a host of step-by-step videos and downloads to help you
                    understand, plan and install Buy Kitchen Online kitchens.</h5>
            </div>
        </div>
    </section>

    <section class="container-fluid px-lg-5 py-5 px-md-3 px-3">
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase text-dark fw-bolder">How to Video Guides</h2>
            </div>
            @if ($videoguide->count() > 0)
                @foreach ($videoguide as $video)
                    <div class="col-lg-6 col-md-6 col-12 pt-2">
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ $video->video_url }}" title="YouTube video"
                                style="max-width: 100%;height: 100%;" allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <p class="text-dark">No video guide available</p>
                </div>
            @endif
        </div>
    </section>


    <section class="container-fluid px-lg-5 py-5 px-md-3 px-3" style="background-color: #f0f0f0;">
        <div class="row">
            <div class="col-lg-6 py-lg-0 py-md-3 py-4">
                <h2 class="text-uppercase fw-bolder text-dark">HOW TO DOWNLOADABLE GUIDES
                </h2>
            </div>
        </div>
        <div class="row">
            @if ($downloadguide->count() > 0)
                @foreach ($downloadguide as $guide)
                    <div class="col-lg-3">
                        <a href="{{ asset('/uploads/guides/' . $guide->file_path) }}" target="_blank">
                            <div class="card">
                                <div class="card-header p-0">
                                    <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}"
                                        class="img-fluid" />
                                </div>

                                <div class="card-footer">
                                    <p>{{ $guide->title }}</p>
                                    <small>PDF</small>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <p class="text-dark">No downloadable guide available</p>
                </div>

            @endif
        </div>
    </section>

    {{ view('frontend.help-and-guides') }}
    
    @endsection
