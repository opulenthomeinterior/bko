<x-guest-layout>
    <head>
    <title>Order Kitchen </title>
    </head>
    <style>

           :root {
            --primary-color: #ffc01f;
            --primary-light: #ffd45e;
            --primary-dark: #e6a600;
            --dark-color: #333333;
            --light-color: #f8fafc;
            --text-on-primary: #333333;
        }
        .arrow-ul {
            display: flex;
            flex-wrap: wrap;
            column-gap: 1rem;
            justify-content: center;
            padding-left: 0;
            list-style: none; /* Remove default bullets */
        }

        .arrow-ul .arrow-li {
            white-space: nowrap;
            position: relative;
            padding-left: 20px; /* Space for custom bullet */
        }

        .arrow-ul .arrow-li::before {
            content: "▶"; /* Custom bullet (arrow) */
            position: absolute;
            left: 0;
            color: #004d40; /* Bullet color */
        }



        
  .faq-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .faq-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .faq-header h1 {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        /* .faq-header h1:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background-color: var(--primary-color);
            bottom: -10px;
            left: 25%;
            border-radius: 2px;
        } */

        .faq-header p {
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
        }

        .faq-item {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
            overflow: hidden;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .faq-item:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
            border-left: 4px solid var(--primary-color);
        }

        .faq-question {
            cursor: pointer;
            padding: 1.25rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .faq-question.active {
            background-color: var(--primary-color);
            color: var(--text-on-primary);
        }

        .faq-question i {
            transition: transform 0.3s ease;
            color: var(--primary-color);
        }

        .faq-question.active i {
            transform: rotate(180deg);
            color: var(--text-on-primary);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            padding: 0 1.5rem;
            color: #475569;
            line-height: 1.6;
            transition: all 0.5s ease;
            background-color: #fffdf7;
        }

        .faq-answer.show {
            max-height: 500px;
            padding: 1rem 1.5rem 1.5rem;
            border-top: 1px solid #fff5e0;
        }

        /* Custom badge styles */
        .faq-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-right: 0.5rem;
        }

        .faq-badge-popular {
            background-color: var(--primary-light);
            color: var(--text-on-primary);
        }

        .faq-badge-new {
            background-color: #ffe8a3;
            color: #b38000;
        }

        /* Search box styles */
        .faq-search {
            position: relative;
            margin-bottom: 2rem;
        }

        .faq-search input {
            width: 100%;
            padding: 1rem 1.5rem;
            padding-left: 3rem;
            border: 2px solid #e2e8f0;
            border-radius: 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .faq-search input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(255, 192, 31, 0.3);
        }

        .faq-search i {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
        }

        /* Category filters */
        .faq-categories {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 2rem;
            justify-content: center;
        }

        .faq-category {
            padding: 0.5rem 1rem;
            background-color: white;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #64748b;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .faq-category:hover, .faq-category.active {
            background-color: var(--primary-color);
            color: var(--text-on-primary);
            border-color: var(--primary-color);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .faq-categories {
                flex-wrap: nowrap;
                overflow-x: auto;
                padding-bottom: 0.5rem;
                justify-content: flex-start;
                scrollbar-width: none;
            }

            .faq-categories::-webkit-scrollbar {
                display: none;
            }

            .faq-category {
                white-space: nowrap;
            }

            .faq-question {
                font-size: 1rem;
                padding: 1rem 1.25rem;
            }
        }



    </style>
    
    <div class="container-fluid px-lg-5 py-4 px-md-3 px-3 bg-light border-bottom border-warning">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}" class="text-uppercase">Shop</a></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-8 container">
                <h1 class="fs-1 fw-bolder text-center text-dark text-uppercase">Order Your New Kitchen</h1>
                <p class="text-center">
                    Choosing the proper kitchen can affect the aesthetic and functionality of your entire house. The most crucial factor is that your kitchen should reflect your personality while meeting your needs. It’s not just a place to cook; it is where life happens.
                </p>
                <p class="text-center text-warning fw-bold fs-5">
                    THINGS TO CONSIDER BEFORE SELECTING YOUR KITCHEN
                </p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-12 text-center"> <!-- Full width for better responsiveness -->
                <ul class="arrow-ul">
                    <li class="arrow-li">Functionality</li>
                    <li class="arrow-li">Space constraints</li>
                    <li class="arrow-li">Style preferences</li>
                    <li class="arrow-li">Future trends</li>
                    <li class="arrow-li">Storage needs</li>
                    <li class="arrow-li">Materials</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container px-lg-5 py-4 px-md-3 px-3">
        {{-- Loop through each style --}}
        <div class="row mb-md-5 mb-4">
        @foreach ($data as $styleName => $styleData)
            @php
            if ($loop->iteration % 2 == 0) {
                $boxShadow = '20px -20px 0px rgba(254, 189, 73, 0.8)';
            } else {
            $boxShadow = '-20px -20px 0px rgba(42, 97, 97, 0.8)';
            }
            @endphp
            <!-- <div class="col-lg-6 col-md-6 col-12 pr-4">
                <img src="{{ $styleData['data']->image_path ? asset('uploads/styles/' . $styleData['data']->image_path) : asset('images/order-component.jpg') }}"
                    class="img-fluid" />
            </div> -->

            <div class="row-class col-xl-6 col-lg-6 col-md-6 col-12 my-5">
                <div class="col-12 px-3 mb-3">
                    <!-- <img src="{{ $styleData['data']->image_path ? asset('uploads/styles/' . $styleData['data']->image_path) : asset('images/order-component.jpg') }}"
                    class="img-fluid" /> -->
                    <img src="{{asset('imgs/styles/'.$styleData['data']->image_path)}}"
                    class="img-fluid" style="box-shadow: {{$boxShadow}}; height: 500px; object-fit: cover;" />
                </div>
                <div class="d-flex justify-content-between align-items-center border-bottom border-warning mb-3 mx-3">
                    <h1 class="fs-3 fw-bolder text-dark text-uppercase">{{ $styleData['data']->name }}</h1>
                    <a class="btn btn-sm btn-outline-warning text-dark" href="{{route('orderkitchenbyname', [$styleData['data']->slug])}}" style="border-radius: 0;">Explore</a>
                </div>

                <!-- <p>
                        18mm MDF slab doors available in 12 SuperGloss and UltraMatt finishes. Also available in 2 MFC
                        standard finishes.
                    </p> -->

                <h2 class="fs-5 px-3 text-dark fw-bold text-uppercase">Dispatch</h2>
                <p class="px-3">First select your choice of assembly:</p>

                @foreach ($styleData['assemblies'] as $assemblyName => $assemblyData)
                <button type="button" id="{{ $assemblyName == 'Rigid' ? 'rigid_btn' : 'flatpacked_btn' }}"
                    class="btn btn-sm btn-outline-warning text-dark rounded-0 mx-3">{{ $assemblyName }}</button>
                @endforeach

                @foreach ($styleData['assemblies'] as $assemblyName => $assemblyData)
                <div class="py-2 mt-3 d-none px-3" id="{{ $assemblyData['data']->slug == 'rigid' ? 'rigid' : 'flatpacked' }}">
                    <h2 class="fs-6 text-dark fw-bold">MDF COLOURS ({{ $assemblyName }})</h2>
                    <p>Choose a colour:</p>
                    <div class="row g-1">
                        @foreach ($assemblyData['colours'] as $colour)
                        <div
                            class="col-6 d-flex position-relative align-items-center justify-content-center">
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
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        @endforeach
        </div>
    </div>

    {{-- <section class="container-fluid bg-light py-4">
        <div class="col-12 d-flex flex-column align-items-center">
        </div>
    </section> --}}

    <!-- Why choose BKONLINE -->
    @include('frontend.why_choose_bkonline')
    
    {{-- <section class="container-fluid bg-white" style="border-bottom: 40px solid #2a6161;">
    </section> --}}

    <!-- Testimonials -->
    @include('frontend.testimonials_component', ['testimonials' => $testimonials, 'header_name' => $styleData['data']->name])

    <!-- FAQs -->


      <div class="container faq-container">
        <div class="faq-header">
            <h1>FAQS</h1>
        </div>

    <div class="faq-list">
            <!-- FAQ Item 1 -->
            <div class="faq-item">
                <div class="faq-question">
                    <div class="fs-4">
                       
                          Do we offer customised colours in Matt or Gloss?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">
                 Yes, we offer a customised range of colours in matt, gloss and painted finish for every kitchen style.       
               </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <div class="fs-4">
                       
                           What is the difference between J Pull and J Pull 22?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">
                 J Pull 22 is a premium, refined version of the classic J Pull design, The "22" signifies an upgraded version with an enhanced, contemporary edge compared to the traditional, softer J Pull.
               </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <div class="fs-4">
                       
                        What Is the Most Trending Kitchen Style in the UK?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">
                The most trending kitchen styles for 2024 include sleek, modern designs with minimalistic aesthetics.
               </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <div class="fs-4">
                       
                         What Is the Quality Difference Between a Slab Laminated and a Slab Painted?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">
                Laminated slabs are highly durable, scratch-resistant, and budget-friendly, while painted slabs provide a luxurious, smooth finish with vibrant colour depth, perfect for creating a premium look.
               </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <div class="fs-4">
                       
                            What Things Should You Know Before Ordering Any Kitchen?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">
                 Having a clear understanding of your kitchen space, budget, and personal preferences for colour and design is essential before ordering any kitchen.
               </p>
                </div>
            </div>
    </div>
</div>



    {{-- <section class="container-fluid py-5 px-4 bg-white" style="border-bottom: 3px solid #ebc266; border-right: 3px solid #ebc266">
        <div class="row">
            <h3 class="text-dark text-uppercase fw-bolder text-center">FAQs</h3>
        </div>
        <div class="row bg-white">
            <div class="col-lg-12 bg-white">
                <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                Do we offer customised colours in Matt or Gloss?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Yes, we offer a customised range of colours in matt, gloss and painted finish for every kitchen style.</div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 bg-white">
                <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                What is the difference between J Pull and J Pull 22?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            J Pull 22 is a premium, refined version of the classic J Pull design, The "22" signifies an upgraded version with an enhanced, contemporary edge compared to the traditional, softer J Pull.</div>
                           
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 bg-white">
                <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                What Is the Most Trending Kitchen Style in the UK?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            The most trending kitchen styles for 2024 include sleek, modern designs with minimalistic aesthetics.</div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 bg-white">
                <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                What Is the Quality Difference Between a Slab Laminated and a Slab Painted?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Laminated slabs are highly durable, scratch-resistant, and budget-friendly, while painted slabs provide a luxurious, smooth finish with vibrant colour depth, perfect for creating a premium look.</div>
                            
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 bg-white">
                <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                What Things Should You Know Before Ordering Any Kitchen?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Having a clear understanding of your kitchen space, budget, and personal preferences for colour and design is essential before ordering any kitchen.</div>
                           
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@push('scripts')
    <script>


document.addEventListener('DOMContentLoaded', function() {
            
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    
                    this.classList.toggle('active');
                    
                    const answer = this.nextElementSibling;
                    answer.classList.toggle('show');
                    
                    faqQuestions.forEach(q => {
                        if (q !== question) {
                            q.classList.remove('active');
                            q.nextElementSibling.classList.remove('show');
                        }
                    });
                });
            });

            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            faqItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = `all 0.5s ease ${index * 0.1}s`;
                observer.observe(item);
            });
        });




        $(document).ready(function () {            
            const $carousel02 = $('.main-carousel-banner-02');
            // Initialize OwlCarousel
            $carousel02.owlCarousel({
                loop: true,
                margin: 30,
                stagePadding: 15, // Add padding to avoid clipping
                rtl: false,
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