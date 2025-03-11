<x-guest-layout>
    <style>
        .cut-side-section {
            position: relative;
            background: white;
            padding: 4rem;
            height: 100px; /* Adjust height */
            border-top: 50px solid #febd49;
        }
        .cut-side-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 150px;
            height: 100%;
            background: #febd49;
            clip-path: polygon(0 0, 100% 0, 10% 100%, 0% 100%);
        }
    </style>
    @section('meta_tags')
        <title>{{$seo?->meta_title}}</title>
        <meta name="description" content="{{$seo?->meta_description}}">
        <link rel="canonical" href="{{$seo?->canonical_tag}}" />
    @endsection
    <section class="container-fluid"
        style="background-image: url('{{ $styleData['data']['image_path'] ? asset('uploads/styles/' . $styleData['data']['image_path']) : asset('images/order-component.jpg') }}'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 50vh;">
    </section>
    <section class="container-fluid px-lg-5 py-lg-5 py-4 px-md-3 px-3" style="background-color: #f0f0f0;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}" class="text-uppercase">Shop</a></li>
                <li class="breadcrumb-item"><a href="{{ route('orderkitchen') }}" class="text-uppercase">Order
                        Kitchen</a></li>
            </ol>
        </nav>

        <div class="row mb-lg-5 mb-4">
            <div class="col-12">
                <h1 class="fs-1 fw-bolder text-dark text-uppercase text-center">
                    {{ $styleData['data']['name'] }} Kitchen
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- <h1 class="fs-3 fw-bold text-uppercase text-dark">
                    Ordering a {{ $styleData['data']['name'] }} Kitchen
                </h1> -->
                <p class="text-center">To start ordering a {{ $styleData['data']['name'] }} kitchen, first choose your preferred assembly,
                    then from our range of colours and finishes.</p>
                <hr>
            </div>
            @if ($styleData['data']['style_description'])
                <div class="col-md-12 text-center">
                    {!! $styleData['data']['style_description'] !!}
                </div>
            @endif
        </div>
    </section>

    <section class="container-fluid">
        <div class="row">
            <div class="col-12 bg-warning py-5">
                <h1 class="fw-bold text-center text-dark text-decoration-underline">{{ $styleData['data']['name'] }} Kitchen</h1>
            </div>
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex justify-content-center col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12 my-4">
                                <div style="width: 150px; text-align: center; font-family: Arial, sans-serif; position: relative;">
                                    <!-- Top Semi-Circle -->
                                    <div style="width: 100%; height: 150px; background-color: #2e6c67; border-radius: 50%; position: absolute; top: -20px; background: linear-gradient(to bottom, #2e6c67 50%, transparent 50%);"></div>
                                    
                                    <!-- Circular Number -->
                                    <div style="width: 85px; height: 85px; background-color: white; border-radius: 50%; color: #6c756c; font-size: 24px; font-weight: bolder; display: flex; align-items: center; justify-content: center; position: absolute; top: 15px; left: 50%; transform: translateX(-50%); box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                        <h1 class="fw-bold" style="margin-top: 10px;">1</h1>
                                    </div>
                                    
                                    <!-- Card Content -->
                                    <div style="background-color: white; padding: 50px 10px; border-radius: 0px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); height: 220px; overflow-y: hidden">
                                        <h3 style="margin: 65px 0px 10px 0px; font-size: 14px; color: #333;">FINISHES</h3>
                                        <p style="font-size: 12px; color: gray;">• SuperGloss</p>
                                    </div>

                                    <!-- Bottom Plain Bar -->
                                    <div style="width: 100%; height: 30px; background-color: #2e6c67; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12 my-4">
                                <div style="width: 150px; text-align: center; font-family: Arial, sans-serif; position: relative;">
                                    <!-- Top Semi-Circle -->
                                    <div style="width: 100%; height: 150px; background-color: #febd49; border-radius: 50%; position: absolute; top: -20px; background: linear-gradient(to bottom, #febd49 50%, transparent 50%);"></div>
                                    
                                    <!-- Circular Number -->
                                    <div style="width: 85px; height: 85px; background-color: white; border-radius: 50%; color: #febd49; font-size: 24px; font-weight: bolder; display: flex; align-items: center; justify-content: center; position: absolute; top: 15px; left: 50%; transform: translateX(-50%); box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                        <h1 class="fw-bold" style="margin-top: 10px;">2</h1>
                                    </div>
                                    
                                    <!-- Card Content -->
                                    <div style="background-color: white; padding: 50px 10px; border-radius: 0px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); height: 220px; overflow-y: hidden">
                                        <h3 style="margin: 65px 0px 10px 0px; font-size: 14px; color: #333;">ASTHETIC APPEAL</h3>
                                        <p style="font-size: 12px; color: gray;">• Modern</p>
                                        <p style="font-size: 12px; color: gray;">• Minimalist</p>
                                    </div>

                                    <!-- Bottom Plain Bar -->
                                    <div style="width: 100%; height: 30px; background-color: #febd49; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12 my-4">
                                <div style="width: 150px; text-align: center; font-family: Arial, sans-serif; position: relative;">
                                    <!-- Top Semi-Circle -->
                                    <div style="width: 100%; height: 150px; background-color: #000; border-radius: 50%; position: absolute; top: -20px; background: linear-gradient(to bottom, #000 50%, transparent 50%);"></div>
                                    
                                    <!-- Circular Number -->
                                    <div style="width: 85px; height: 85px; background-color: white; border-radius: 50%; color: #000; font-size: 24px; font-weight: bolder; display: flex; align-items: center; justify-content: center; position: absolute; top: 15px; left: 50%; transform: translateX(-50%); box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                        <h1 class="fw-bold" style="margin-top: 10px;">3</h1>
                                    </div>
                                    
                                    <!-- Card Content -->
                                    <div style="background-color: white; padding: 50px 10px; border-radius: 0px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); height: 220px; overflow-y: hidden">
                                        <h3 style="margin: 65px 0px 10px 0px; font-size: 14px; color: #333;">COLORS</h3>
                                        <p style="font-size: 12px; color: gray;">• White SuperGloss</p>
                                        <p style="font-size: 12px; color: gray;">• LightGrey SuperGloss</p>
                                    </div>

                                    <!-- Bottom Plain Bar -->
                                    <div style="width: 100%; height: 30px; background-color: #000; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12 my-4">
                                <div style="width: 150px; text-align: center; font-family: Arial, sans-serif; position: relative;">
                                    <!-- Top Semi-Circle -->
                                    <div style="width: 100%; height: 150px; background-color: #97c346; border-radius: 50%; position: absolute; top: -20px; background: linear-gradient(to bottom, #97c346 50%, transparent 50%);"></div>
                                    
                                    <!-- Circular Number -->
                                    <div style="width: 85px; height: 85px; background-color: white; border-radius: 50%; color: #97c346; font-size: 24px; font-weight: bolder; display: flex; align-items: center; justify-content: center; position: absolute; top: 15px; left: 50%; transform: translateX(-50%); box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                        <h1 class="fw-bold" style="margin-top: 10px; color:#97c346">4</h1>
                                    </div>
                                    
                                    <!-- Card Content -->
                                    <div style="background-color: white; padding: 50px 10px; border-radius: 0px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); height: 220px; overflow-y: hidden">
                                        <h3 style="margin: 65px 0px 10px 0px; font-size: 14px; color: #333;">ASSEMBLY</h3>
                                        <p style="font-size: 12px; color: gray;">• Rigid</p>
                                        <p style="font-size: 12px; color: gray;">• Flatpack</p>
                                    </div>

                                    <!-- Bottom Plain Bar -->
                                    <div style="width: 100%; height: 30px; background-color: #97c346; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12 my-4">
                                <div style="width: 150px; text-align: center; font-family: Arial, sans-serif; position: relative;">
                                    <!-- Top Semi-Circle -->
                                    <div style="width: 100%; height: 150px; background-color: #91968a; border-radius: 50%; position: absolute; top: -20px; background: linear-gradient(to bottom, #91968a 50%, transparent 50%);"></div>
                                    
                                    <!-- Circular Number -->
                                    <div style="width: 85px; height: 85px; background-color: white; border-radius: 50%; color: #6c756c; font-size: 24px; font-weight: bolder; display: flex; align-items: center; justify-content: center; position: absolute; top: 15px; left: 50%; transform: translateX(-50%); box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                        <h1 class="fw-bold" style="margin-top: 10px; color: #91968a">5</h1>
                                    </div>
                                    
                                    <!-- Card Content -->
                                    <div style="background-color: white; padding: 50px 10px; border-radius: 0px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); height: 220px; overflow-y: hidden">
                                        <h3 style="margin: 65px 0px 10px 0px; font-size: 14px; color: #333;">COST</h3>
                                        <p style="font-size: 12px; color: gray;">Usually available at a higher price range, but BKO offers luxurious quality at an affordable prices.</p>
                                    </div>

                                    <!-- Bottom Plain Bar -->
                                    <div style="width: 100%; height: 30px; background-color: #91968a; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12 my-4">
                                <div style="width: 150px; text-align: center; font-family: Arial, sans-serif; position: relative;">
                                    <!-- Top Semi-Circle -->
                                    <div style="width: 100%; height: 150px; background-color: #9b6700; border-radius: 50%; position: absolute; top: -20px; background: linear-gradient(to bottom, #9b6700 50%, transparent 50%);"></div>
                                    
                                    <!-- Circular Number -->
                                    <div style="width: 85px; height: 85px; background-color: white; border-radius: 50%; color: #9b6700; font-size: 24px; font-weight: bolder; display: flex; align-items: center; justify-content: center; position: absolute; top: 15px; left: 50%; transform: translateX(-50%); box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                        <h1 class="fw-bold" style="margin-top: 10px; color:#9b6700">6</h1>
                                    </div>
                                    
                                    <!-- Card Content -->
                                    <div style="background-color: white; padding: 50px 10px; border-radius: 0px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); height: 220px; overflow-y: hidden">
                                        <h3 style="margin: 65px 0px 10px 0px; font-size: 14px; color: #333;">MATERIAL</h3>
                                        <p style="font-size: 12px; color: gray;">MDF</p>
                                    </div>

                                    <!-- Bottom Plain Bar -->
                                    <div style="width: 100%; height: 30px; background-color: #9b6700; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($styleData['data']['style_title'] || $styleData['data']['style_description'] || $styleData['data']['image_path'])
        <section class="container" style="background-color: #fff;">
            <div class="row">
                <div class="col-12 mb-lg-5 mb-4">
                    <h1 class="fs-1 fw-bolder text-dark text-uppercase">
                        {{ $styleData['data']['style_title'] }}
                    </h1>
                </div>
                @if ($styleData['data']['image_path'])
                    <!-- <div class="col-md-6">
                        <img src="{{ asset('uploads/styles/' . $styleData['data']['image_path']) }}"
                            class="img-fluid" />
                    </div> -->
                @endif
                    <div class="row">
                        <!-- Assemblies -->
                        <div class="col-lg-12 mb-3">
                            <h1 class="text-dark text-uppercase fw-bold text-center">Despatch</h1>
                            <!-- <p>First select your choice of assembly:</p> -->
                            @foreach ($styleData['assemblies'] as $assemblyName => $assemblyData)
                                <!-- <button type="button" id="{{ $assemblyName == 'Rigid' ? 'rigid_btn' : 'flatpacked_btn' }}"
                                    class="btn btn-sm btn-outline-warning text-dark rounded-0">{{ $assemblyName }}</button> -->
                            @endforeach
                        </div>
                        <!-- Colours -->
                        <div class="col-lg-12">
                            <div class="row">
                                @foreach ($styleHasColours as $key => $styleHasColour)
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-4">
                                        <div class="card w-100" style="border-radius: 0px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                                            <div class="card-header border-bottom border-default">
                                                <div class="mb-2 fw-bold">
                                                    {{$styleData['data']['name']}} {{$styleHasColour->colour?->trade_colour}}
                                                </div>
                                                <div>
                                                    <small>Assembly Type:</small> <br>
                                                    <a href="{{route('orderkitchenbycolour', [$styleData['data']['slug'], 'rigid', $styleHasColour->colour?->slug])}}" class="btn btn-sm btn-outline-warning text-dark rounded-0">Rigid</a>
                                                    <a href="{{route('orderkitchenbycolour', [$styleData['data']['slug'], 'flat-pack', $styleHasColour->colour?->slug])}}" class="btn btn-sm btn-outline-warning text-dark rounded-0">Flat Pack</a>
                                                </div>
                                            </div>
                                            <div class="card-body carousel-card-body p-0">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="@if(!empty($styleHasColour->image_path)){{asset('uploads/styles/colours/'.$styleHasColour->image_path)}}@else{{asset('images/no-image-available.jpg')}}@endif" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        
        <!-- Start your journey -->
        @include('frontend.start_your_journey')

        <section class="container-fluid bg-white" style="border-bottom: 40px solid #2a6161;">
        </section>

        <!-- Start your journey -->
        @include('frontend.why_choose_bkonline')

        @if (count($styleData['data']->testimonials) > 0)
            <section class="container-fluid py-5 bg-white" style="background-image: url({{asset('images/homepage.jpeg')}}); opacity: 2; border-bottom: 3px solid #ebc266; border-left: 3px solid #ebc266; padding: 20px">
                <div class="row">
                    <h3 class="text-dark text-uppercase fw-bolder text-center mb-4">Testimonials</h3>
                </div>
                <div class="row">
                    <div class="carousel main-carousel-banner-02 owl-carousel clients mb-0"
                        data-margin="30"
                        data-loop="true"
                        data-dots="false"
                        data-autoplay="true"
                        data-autoplay-timeout="3000"
                        data-responsive='{"0":{"items": "3"}, "768":{"items": "4"}, "992":{"items": "4"}, "1200":{"items": "4"}, "1400":{"items": "4"}}'>
                        @foreach ($styleData['data']->testimonials as $testimonial)
                        <div class="item mx-10 px-0">
                            <div class="carousel-card card border border-warning" style="border-radius: 20px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                                <div class="card-body carousel-card-body">
                                    <div class="col-12 mb-4 d-flex justify-content-center">
                                        <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                                    </div>
                                    <div class="fw-bold text-center">
                                        Smith
                                    </div>
                                    <div class="text-center">
                                        <small class="text-center">2023-11-19</small>
                                    </div>
                                </div>
                                <div class="card-footer carousel-card-footer" style="border-radius: 20px;">
                                    <small class="text-dark text-center" style="font-size: 12px">I discovered BKO Kitchen's online services through a recommendation from a colleague. Reaching out to them via WhatsApp was incredibly convenient, and they quickly arranged a free consultation call. From the initial planning to the seamless installation of my shaker kitchen, the entire experience was outstanding. I wouldn’t hesitate to recommend their design and installation services to others!</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- FAQs -->
        @if (count($styleData['data']->faqs) > 0)
            @include('frontend.faqs_component', ['faqsData' => $styleData['data']->faqs])
        @endif
    @endif

    @push('scripts')
    <script>
        $(document).ready(function () {            
            const $carousel02 = $('.main-carousel-banner-02');
            // Initialize OwlCarousel
            $carousel02.owlCarousel({
                loop: true,
                margin: 30,
                stagePadding: 15, // Add padding to avoid clipping
                rtl: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    768: {
                        items: 2,
                        nav: true
                    },
                    992: {
                        items: 3,
                        loop: true,
                        margin: 10,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1200: {
                        items: 4,
                        loop: true,
                        margin: 20,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1400: {
                        items: 4,
                        loop: true,
                        margin: 20,
                        nav: true,
                        dots: true,
                        center: true,
                    }
                }
            });
            // Customize the autoplay behavior to reverse the direction
            $carousel02.on('translated.owl.carousel', function() {
                $carousel02.find('.owl-item.active').css('animation', 'move-left 0.3s ease-in-out');
            });
        });
    </script>
@endpush
</x-guest-layout>
