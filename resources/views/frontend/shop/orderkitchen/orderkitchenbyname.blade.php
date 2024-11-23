<x-guest-layout>
    <section class="container-fluid"
        style="background-image: url('{{ $styleData['data']['image_path'] ? asset('uploads/styles/' . $styleData['data']['image_path']) : asset('images/order-component.jpg') }}'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 50vh;">
    </section>
    <section class="container-fluid px-lg-5 py-lg-5 py-4 px-md-3 px-3">
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
                <h1 class="fs-1 fw-bolder text-dark text-uppercase">
                    {{ $styleData['data']['name'] }} Kitchen
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h1 class="fs-3 fw-bold text-uppercase text-dark">
                    Ordering a {{ $styleData['data']['name'] }} Kitchen
                </h1>
                <p>To start ordering a {{ $styleData['data']['name'] }} kitchen, first choose your preferred assembly,
                    then from our range of colours and finishes.</p>
                <hr>
            </div>
            @if ($styleData['data']['style_description'])
                <div class="col-md-12">
                    {!! $styleData['data']['style_description'] !!}
                </div>
            @endif
        </div>
    </section>

    @if ($styleData['data']['style_title'] || $styleData['data']['style_description'] || $styleData['data']['image_path'])
        <section class="container-fluid px-lg-5 px-md-3 px-3 py-lg-4 py-md-3 py-2" style="background-color: #f0f0f0;">
            <div class="row">
                <div class="col-12 mb-lg-5 mb-4">
                    <h1 class="fs-1 fw-bolder text-dark text-uppercase">
                        {{ $styleData['data']['style_title'] }}
                    </h1>
                </div>
                @if ($styleData['data']['image_path'])
                    <div class="col-md-6">
                        <img src="{{ asset('uploads/styles/' . $styleData['data']['image_path']) }}"
                            class="img-fluid" />
                    </div>
                @endif
                <div class="col-6 mb-4">
                    <div class="row">
                        <!-- Assemblies -->
                        <div class="col-lg-12 mb-3">
                            <h2 class="fs-5 text-dark text-uppercase fw-bold">Despatch</h2>
                            <p>First select your choice of assembly:</p>
                            @foreach ($styleData['assemblies'] as $assemblyName => $assemblyData)
                                <button type="button" id="{{ $assemblyName == 'Rigid' ? 'rigid_btn' : 'flatpacked_btn' }}"
                                    class="btn btn-sm btn-outline-warning text-dark rounded-0">{{ $assemblyName }}</button>
                            @endforeach
                        </div>
                        <!-- Colours -->
                        <div class="col-lg-12 mt-lg-0 mt-3">
                            @foreach ($styleData['assemblies'] as $assemblyName => $assemblyData)
                                <div class="d-none" id="{{ $assemblyName == 'Rigid' ? 'rigid' : 'flatpacked' }}">
                                    <h2 class="fs-6 text-dark fw-bold">MDF COLOURS ({{ $assemblyName }})</h2>
                                    <p>Choose a colour:</p>
                                    <div class="row g-1">
                                        @foreach ($assemblyData['colours'] as $colour)
                                            <div class="col-6 d-flex position-relative align-items-center justify-content-center">
                                                <div
                                                    class="colour-div position-absolute start-0 top-50 translate-middle-y ms-2" style="background-color: {{$colour->colour_code}};">
                                                </div>
                                                <a href="{{ route('orderkitchenbycolour', ['style' => $styleData['data']->slug, 'assembly' => $assemblyData['data']->slug, 'colour' => $colour->slug]) }}"
                                                    class="colour-btn btn w-100 rounded-0 sidebar-btn text-start">
                                                    {{ $colour->trade_colour }}
                                                </a>
                                                {{-- <button type="button"
                                                    class="colour-btn btn w-100 rounded-0 sidebar-btn text-start">
                                                    {{ $colour->trade_colour }}
                                                </button> --}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if (count($styleData['data']->testimonials) > 0)
        <section class="container-fluid py-5">
            <div class="row">
                <h3 class="text-dark text-uppercase fw-bolder text-center mb-4">Testimonials</h3>
            </div>
            <div class="row">
                <div class="carousel main-carousel-banner owl-carousel clients mb-0"
                        data-margin="30"
                        data-loop="true"
                        data-dots="false"
                        data-autoplay="true"
                        data-autoplay-timeout="3000"
                        data-responsive='{"0":{"items": "3"}, "768":{"items": "4"}, "992":{"items": "4"}, "1200":{"items": "4"}, "1400":{"items": "4"}}'>
                        @foreach ($styleData['data']->testimonials as $testimonial)
                        <div class="item mx-10 px-0 w-100" style="border: 2px solid #febd49">
                            <div class="carousel-card card border border-default w-100" style="border-radius: 0px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                                <div class="card-body carousel-card-body">
                                    <div class="col-12 mb-4 d-flex justify-content-center">
                                        <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" height="50px" width="50px" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="fw-bold text-center">
                                        {{$testimonial->user_name}}
                                    </div>
                                    <div class="text-center">
                                        <small class="text-center">{{$testimonial->date}}</small>
                                    </div>
                                </div>
                                <div class="card-footer carousel-card-footer">
                                    <small class="text-dark text-start" style="font-size: 12px">{{$testimonial->testimonial}}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </section>
        @endif
        @if (count($styleData['data']->faqs) > 0)
        <section class="container-fluid py-5 p-0">
            <div class="row">
                <h3 class="text-dark text-uppercase fw-bolder text-center">FAQs</h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @if (count($styleData['data']->faqs) > 0)
                            @foreach ($styleData['data']->faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bolder text-dark btn btn-outline-warning" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $loop->index + 1 }}"
                                            aria-expanded="false" aria-controls="flush-collapse{{ $loop->index + 1 }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{ $loop->index + 1 }}" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">{!! $faq->answer !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-info" role="alert">
                                No FAQ's found.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif

</x-guest-layout>
