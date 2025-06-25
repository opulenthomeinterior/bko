<x-guest-layout>
    @section('meta_tags')
        <title>{{$seo?->meta_title}}</title>
        <meta name="description" content="{{$seo?->meta_description}}">
        <link rel="canonical" href="{{$seo?->canonical_tag}}" />
        {!! $seo?->schema_code !!}
    @endsection
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
        

         .hero-section {
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .left-content {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .decorative-dots {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .dot {
            position: absolute;
            border-radius: 50%;
            opacity: 0.6;
            animation: float 6s ease-in-out infinite;
        }

        .dot-1 {
            width: 12px;
            height: 12px;
            background: #ffc107;
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }

        .dot-2 {
            width: 8px;
            height: 8px;
            background: #17a2b8;
            top: 25%;
            right: 20%;
            animation-delay: 2s;
        }

        .dot-3 {
            width: 6px;
            height: 6px;
            background: #ffc107;
            bottom: 30%;
            left: 15%;
            animation-delay: 4s;
        }

        .dot-4 {
            width: 10px;
            height: 10px;
            background: #6c757d;
            bottom: 20%;
            right: 15%;
            animation-delay: 1s;
        }

        .triangle {
            position: absolute;
            width: 0;
            height: 0;
            opacity: 0.4;
        }

        .triangle-1 {
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 25px solid #ffc107;
            top: 10%;
            right: 10%;
            animation: rotate 8s linear infinite;
        }

        .triangle-2 {
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 18px solid #17a2b8;
            bottom: 40%;
            left: 5%;
            animation: rotate 12s linear infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            25% { transform: translateY(-10px) translateX(5px); }
            50% { transform: translateY(-5px) translateX(-3px); }
            75% { transform: translateY(-15px) translateX(3px); }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .content-wrapper {
            text-align: center;
            max-width: 400px;
            padding: 2rem;
        }

        .main-title {
            font-size: 3.5rem;
            font-weight: 900;
            color: #212529;
            margin-bottom: 1.5rem;
            letter-spacing: -2px;
            line-height: 1.1;
        }

        .subtitle {
            font-size: 1.3rem;
            color: #6c757d;
            font-weight: 400;
            line-height: 1.4;
            margin-bottom: 0;
        }

        .right-content {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            background: #f8f9fa;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: all 0.8s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .color-square {
            width: 280px;
            height: 280px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            transition: transform 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 3;
            backdrop-filter: blur(5px);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .color-square:hover {
            transform: scale(1.05);
        }

        .color-square::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
            pointer-events: none;
        }

        .color-name {
            font-size: 1.4rem;
            font-weight: 700;
            margin: 0;
            text-align: center;
            z-index: 2;
            position: relative;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }



        /* Responsive adjustments */
        @media (max-width: 768px) {
            .main-title {
                font-size: 2.5rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .hero-section {
                min-height: auto;
            }
            
            .left-content, .right-content {
                min-height: 50vh;
            }
            
            .content-wrapper {
                padding: 1.5rem;
            }
            
            .color-square {
                width: 200px;
                height: 200px;
            }
            
            .color-name {
                font-size: 1.2rem;
            }
        }




    </style>
    <section class="container-fluid"
        style="background-image: url('{{ $styleData['data']['header_image'] ? asset('imgs/styles/' . $styleData['data']['header_image']) : asset('images/order-component.jpg') }}'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 50vh;">
    </section>
    <section class="container-fluid px-lg-5 py-lg-5 py-4 px-md-3 px-3" style="background-color: #f0f0f0;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('orderkitchen') }}" class="text-uppercase">Order
                        Kitchen</a></li>
                <li class="breadcrumb-item"><span href="" class="text-uppercase">{{ $styleData['data']['name'] }}</span></li>
            </ol>
        </nav>

        {{-- <div class="row mb-lg-5 mb-4">
            <div class="col-12">
                <h1 class="fs-1 fw-bolder text-dark text-uppercase text-center">
                    {{ $styleData['data']['name'] }} Kitchen
                </h1>
            </div>
        </div> --}}

       
    </section>
    <div class="container mb-5">
         <div class="row mt-4">
            <div class="col-md-6">
                 <h1 class="fs-1 fw-bolder text-dark text-uppercase">
                    {{ $styleData['data']['name'] }} Kitchen
                </h1>
                <!-- <h1 class="fs-3 fw-bold text-uppercase text-dark">
                    Ordering a {{ $styleData['data']['name'] }} Kitchen
                </h1> -->
                <p class="">To start ordering a {{ $styleData['data']['name'] }} kitchen, first choose your preferred assembly,
                    then from our range of colours and finishes.</p>
                {{-- <hr> --}}
                @if ($styleData['data']['style_description'])
                {{-- <div class="col-md-6 text-center"> --}}
                    
                    {!! $styleData['data']['style_description'] !!}
                    
                {{-- </div> --}}
            @endif
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 p-0 col-12">
                @include('frontend.inquiry_form')
            </div>
            
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('imgs/styles/' . $styleData['data']['image_path_two'])}}" alt="">
                <img src="{{asset('imgs/styles/' . $styleData['data']['mobile_image_path'])}}" alt="">
            </div>
        </div>
    </div>
    
    {{--<section class="container-fluid">
        <div class="row">
            <div class="col-12 bg-warning py-5">
                <h1 class="fw-bold text-center text-dark text-decoration-underline">{{ $styleData['data']['name'] }} Kitchen</h1>
            </div>
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
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
                                        <h1 class="fw-bold" style="margin-top: 10px; color:#97c346">3</h1>
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
                                        <h1 class="fw-bold" style="margin-top: 10px; color: #91968a">4</h1>
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
                                        <h1 class="fw-bold" style="margin-top: 10px; color:#9b6700">5</h1>
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
    </section>--}}


    
    <section class="hero-section">
        <div class="container-fluid p-0">
            <div class="row g-0 h-100">
                <!-- Left Static Content -->
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="decorative-dots">
                            <div class="dot dot-1"></div>
                            <div class="dot dot-2"></div>
                            <div class="dot dot-3"></div>
                            <div class="dot dot-4"></div>
                            <div class="triangle triangle-1"></div>
                            <div class="triangle triangle-2"></div>
                        </div>
                        
                        <div class="content-wrapper">
                            <h1 class="main-title">{{ $styleData['data']['name'] }} Kitchen</h1>
                            <p class="subtitle">Where Minimalism Meets Elegance and Functionality.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Right Dynamic Slideshow -->
                <div class="col-lg-6">
                    <div class="right-content">

                        <!-- Slide 1 - Light Grey -->
                        @if(!empty($styleData['data']->styleHasColours))
                        @foreach ($styleData['data']->styleHasColours as $styleColour)
                            @if ($styleColour->status == 1)

                            <div class="slide" data-color="{{$styleColour->colour?->colour_code}}">
                            <img src="{{asset('imgs/styles/colours/' . $styleColour->image_path)}}" alt="" class="slide-image">
                            <div class="slide-overlay"></div>
                            <div class="color-square" style="background-color:{{$styleColour->colour?->colour_code}};">
                                <p class="color-name p-1 rounded" style="color: #fff; background: rgba(172, 172, 172, 0.5)">{{$styleColour->colour?->name}}</p>
                            </div>
                        </div>

                            {{-- <div class="slide active" data-color="{{$styleColour->colour?->colour_code}}">
                                <img src="{{asset('imgs/styles/colours/' . $styleColour->image_path)}}" alt="{{$styleColour->image_path}}" class="slide-image">
                                <div class="slide-overlay"></div>
                                <div class="color-square" style="background-color: {{$styleColour->colour?->colour_code}};">
                                    <p class="color-name p-1 rounded" style="color: #fff; background: rgba(172, 172, 172, 0.5)">{{$styleColour->colour?->name}}</p>
                                </div>
                            </div> --}}
                            @endif
                        @endforeach
                        @endif
                        
                        <!-- Navigation Arrows -->
                        <!-- <button class="nav-arrows prev-btn" onclick="changeSlide(-1)">‹</button>
                        <button class="nav-arrows next-btn" onclick="changeSlide(1)">›</button>
                         -->
                        <!-- Slide Controls -->
                        <!-- <div class="slide-controls">
                            <button class="control-dot active" onclick="currentSlide(1)"></button>
                            <button class="control-dot" onclick="currentSlide(2)"></button>
                            <button class="control-dot" onclick="currentSlide(3)"></button>
                            <button class="control-dot" onclick="currentSlide(4)"></button>
                            <button class="control-dot" onclick="currentSlide(5)"></button>
                            <button class="control-dot" onclick="currentSlide(6)"></button>
                        </div> -->
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
                            <h1 class="text-dark text-uppercase fw-bold text-center">Dispatch</h1>
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
                                                <div class="mb-2 d-flex justify-content-between">
                                                    <div class="fw-bold">
                                                        {{$styleData['data']['name']}} {{$styleHasColour->colour?->trade_colour}}
                                                    </div>
                                                    @if ($styleHasColour->page_status == 1)
                                                    <div>
                                                        <a href="{{ route('orderkitchenbycolourname', [$styleData['data']['slug'], $styleHasColour->colour?->slug]) }}" class="btn btn-outline-warning rounded-0 text-dark p-2">Explore</a>
                                                    </div>
                                                    @endif
                                                </div>
                                                @if ($styleHasColour->page_status == 0)
                                                <div>
                                                    <small>Assembly Type:</small> <br>
                                                    <a href="{{route('orderkitchenbycolour', [$styleData['data']['slug'], 'rigid', $styleHasColour->colour?->slug])}}" class="btn btn-sm btn-outline-warning text-dark rounded-0">Rigid</a>
                                                    <a href="{{route('orderkitchenbycolour', [$styleData['data']['slug'], 'flat-pack', $styleHasColour->colour?->slug])}}" class="btn btn-sm btn-outline-warning text-dark rounded-0">Flat Pack</a>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="card-body carousel-card-body p-0">
                                                <div class="col-12 d-flex justify-content-center">
                                                    <img style="height:450px;" src="@if(!empty($styleHasColour->image_path)){{asset('imgs/styles/colours/'.$styleHasColour->image_path)}}@else{{asset('images/no-image-available.jpg')}}@endif" class="img-fluid">
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

        @include('frontend.testimonials_component', ['testimonials' => $testimonials, 'header_name' => $styleData['data']->name])

        <!-- FAQs -->
        @if (count($styleData['data']->faqs) > 0)
            @include('frontend.faqs_component', ['faqsData' => $styleData['data']->faqs])
        @endif
    @endif

    @push('scripts')

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const rightContent = document.querySelector('.right-content');
        const totalSlides = slides.length;
        let autoSlideInterval;

        function showSlide(index) {
            
            slides.forEach(slide => slide.classList.remove('active'));
            
            
            slides[index].classList.add('active');
            
            currentSlideIndex = index;
        }

        function nextSlide() {
            const nextIndex = (currentSlideIndex + 1) % totalSlides;
            showSlide(nextIndex);
        }

        function prevSlide() {
            const prevIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
            showSlide(prevIndex);
        }

        function changeSlide(direction) {
            clearInterval(autoSlideInterval);
            if (direction === 1) {
                nextSlide();
            } else {
                prevSlide();
            }
            startAutoSlide();
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 4000);
        }

       
        document.addEventListener('DOMContentLoaded', function() {
            showSlide(0);
            startAutoSlide();
        });

       
        rightContent.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });

        rightContent.addEventListener('mouseleave', () => {
            startAutoSlide();
        });

        
        let startX = 0;
        let startY = 0;

        rightContent.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
        });

        rightContent.addEventListener('touchend', (e) => {
            if (!startX || !startY) return;

            const endX = e.changedTouches[0].clientX;
            const endY = e.changedTouches[0].clientY;
            
            const diffX = startX - endX;
            const diffY = startY - endY;

            
            if (Math.abs(diffX) > Math.abs(diffY)) {
                if (Math.abs(diffX) > 50) { 
                    if (diffX > 0) {
                        changeSlide(1); 
                    } else {
                        changeSlide(-1); 
                    }
                }
            }

            startX = 0;
            startY = 0;
        });
    </script>

    <script>
        $(document).ready(function () {            
            const $carousel02 = $('.main-carousel-banner-02');
            // Initialize OwlCarousel
            $carousel02.owlCarousel({
                loop: true,
                margin: 30,
                stagePadding: 15, // Add padding to avoid clipping
                rtl: false,
                autoplay: true,
                autoplayTimeout: 1500,
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
