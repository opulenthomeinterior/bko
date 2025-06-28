<x-guest-layout>
    @section('meta_tags')
        <title>Order Component</title>
        <meta name="description" content="">
        <link rel="canonical" href="" />
    @endsection
    <style>
          :root {
            --primary-color: #ffc01f;
            --primary-light: #ffd45e;
            --primary-dark: #e6a600;
            --dark-color: #333333;
            --light-color: #f8fafc;
            --text-on-primary: #333333;
        }
        
        .hero-section {
            padding: 70px 0;
            text-align: center;
            background-color: #fafafa;
        }
        
        .hero-subtitle {
            color: #ff9800;
            font-weight: 500;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }
        
        .hero-description {
            max-width: 800px;
            margin: 0 auto;
            font-size: 16px;
            line-height: 1.7;
            color: #666;
        }
        
        .component-card {
            border: none;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            /* height: 100%; */
            height: 430px !important;
            margin-bottom: 30px;
        }
        
        .component-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .component-img {
            height: 250px;
            object-fit: contain;
        }
        
        .card-title {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
            margin-bottom: 15px;
            color: #333;
        }
        
        .card-text {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }
        
        .components-section {
            padding: 50px 0;
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
    <section class="container-fluid"
        style="background-image: url('{{ asset('images/order-component.jpg') }}'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 80vh;">
    </section>
    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3 border-bottom border-warning">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase" style=" font-size:16px !important">Home</a></li>
                <li class="breadcrumb-item"><span class="text-uppercase" style=" font-size:16px !important">Order Component</span></li>
                
            </ol>
        </nav>

        <!-- <div class="row">
            <div class="col-12">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder text-center">
                    Order Component
                </h1>
                <h4 class="text-warning text-uppercase fw-bolder text-center">
                    SEAMLESS REPAIRS | BEAUTIFUL RESULTS
                </h4>
                <p class="text-primary text-center">
                    A broken component should not break your kitchen's workflow and asthetic.
                </p>
                <div class="container">
                <p class="text-dark text-center">
                    Many small components make up your entire kitchen. One faulty or old component can affect its beauty and functionality. Whether it’s a broken sink, a worn-out hinge, or a rusty handle, let us help you get your kitchen back on track. You can also change your kitchen aesthetic by replacing the old cabinet doors. We have everything you need, from traditional replacements to modern upgrades, to keep your kitchen functioning flawlessly.
                </p>
                </div>
            </div>
        </div> -->
    </section>

    <section class="hero-section">
        <div class="container">
            <h1 class="fw-bold mb-3">ORDER COMPONENT</h1>
            <h5 class="hero-subtitle">SEAMLESS REPAIRS • BEAUTIFUL RESULTS</h5>
            <p class="hero-description">
                Many small components make up your entire kitchen. One faulty or old component can affect its beauty and functionality. Whether it's a broken hinge, a worn-out faucet, or a rusty handle, let us help you get your kitchen back on track. You can also change your kitchen aesthetics by replacing the old cabinet doors, the floor everything you need: from traditional replacements to modern upgrades, to keep your kitchen functioning flawlessly.
            </p>
        </div>
    </section>
    
    <!-- Components Section -->
    <section class="components-section">
        <div class="container">
            <div class="row g-4">
                @if ($components->count() > 0)
                    @foreach ($components as $index => $component)
                    @if ($component->slug != 'base-cabinets' && $component->slug != 'wall-cabinets' && $component->slug != 'tall-cabinets')
                    <!-- Doors Card -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="{{ route('ordercomponentbyname', [$component->slug]) }}">
                            <div class="card component-card shadow-sm">
                                <img src="{{ $component->image_path ? asset('imgs/categories/' . $component->image_path) : asset('images/no-image-available.jpg') }}" alt="{{$component->name}}" class="component-img">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $component->name }}</h5>
                                    
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
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endif
            </div>
        </div>
    </section>

    {{--<section class="container-fluid px-lg-5 px-md-3 px-3 py-2" style="background-color: #f0f0f0;">
        <div class="row py-4">
            @if ($components->count() > 0)
                @foreach ($components as $index => $component)
                @if ($component->slug != 'base-cabinets' && $component->slug != 'wall-cabinets' && $component->slug != 'tall-cabinets')
                    <div class="col-lg-3 col-md-4 col-12 mb-4">
                        <div class="card component-card btn {{ $index % 2 == 0 ? 'btn-outline-warning' : 'btn-outline-primary'}}">
                            <a href="{{ route('ordercomponentbyname', $component->slug) }}"
                                class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                            <div class="card-header p-0"
                                style="background-image: url('{{ $component->image_path ? asset('imgs/categories/' . $component->image_path) : asset('images/no-image-available.jpg') }}'); min-height: 300px; background-size: cover;background-position: center center;background-repeat: no-repeat;">
                            </div>
                            <div class="card-body component-card-body">
                                <div class="component-card-content">
                                    <h4 class="text-uppercase fs-3 fw-bold text-dark">{{ $component->name }}</h4>
                                    @if ($component->slug == 'doors')
                                        <small class="text-dark text-start">The doors are the first impression of your kitchen. You can transform your kitchen by selecting from our various colors and finishes. Our doors are the essence of style and durability, creating an elegant look.</small>
                                    @elseif ($component->slug == 'handles')
                                    <small class="text-dark text-start">The doors are the first impression of your kitchen. You can transform your kitchen by selecting from our various colors and finishes. Our doors are the essence of style and durability, creating an elegant look.</small>
                                    @elseif ($component->slug == 'accessories')
                                    <small class="text-dark text-start">Enhance the style and functionality of your kitchen with our premium accessories. From smart storage solutions to innovative accessories, everything is designed to combine modern convenience with timeless elegance.</small>
                                    @elseif ($component->slug == 'appliances')
                                    <small class="text-dark text-start">Make your life hassle-free with our efficient and reliable appliances. Selected for their design, quality, and performance. You can pick from the highest-quality ovens, microwaves, dishwashers, or washing machines.</small>
                                    @elseif ($component->slug == 'worktops')
                                    <small class="text-dark text-start">Keep your kitchen’s form exquisite by selecting the perfect worktop. The worktops are designed to withstand daily use while enhancing the beauty of your kitchen. Choose from a range of worktops featuring Brazilian Greige, Maia®, and many others.</small>
                                    @elseif ($component->slug == 'upstands')
                                    <small class="text-dark text-start">Explore our range of upstands for a refined, contemporary finishing look. They provide a polished, clean finish and protect your walls from splashes and spills. Choose an upstand that will complement your worktop perfectly.</small>
                                    @elseif ($component->slug == 'breakfast-bars')
                                    <small class="text-dark text-start">Our customizable breakfast bars will be the perfect space for family breakfasts and social gatherings. They offer worktop space and additional storage while increasing the flow of your kitchen.</small>
                                    @elseif ($component->slug == 'taps')
                                    <small class="text-dark text-start">Add luxury to your kitchen with our stylish and functional taps. Whether you prefer a classic traditional or a modern design, our top-notch quality taps are built to add convenience and flair to your kitchen.</small>
                                    @elseif ($component->slug == 'sinks')
                                    <small class="text-dark text-start">The sink is not just the focal point of your kitchen but also the most used part. You can select one from our vast collection of durable stainless steel sinks, according to your preference. They are available in different styles and heights.</small>
                                    @elseif ($component->slug == 'internals')
                                    <small class="text-dark text-start">Use your kitchen space efficiently with our innovative internal storage solutions. Keep your kitchen clutter-free and organized by selecting from our smart storage options like wire carousel sets, pull-out storage baskets, swing-out corner storage, and many more.</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            @else
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        No components found!
                    </div>
                </div>
            @endif
        </div>
    </section>--}}

    <section class="container-fluid bg-light py-4">
        <div class="col-12 d-flex flex-column align-items-center">
        </div>
    </section>

    <!-- Why choose BKONLINE -->
    @include('frontend.why_choose_bkonline')

    <!-- Testimonials -->
    @include('frontend.testimonials_component', ['testimonials' => $testimonials])

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
                       
                         Do We provide consultations to help choose the right kitchen style?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">
                 Yes, we offer free consultation calls to help you understand which kitchen is your go-to kitchen by considering various factors.
                           
               </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <div class="fs-4">
                       
                          Is it worth replacing the old doors?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">
                Yes, replacing doors is the cost-effective option to refresh & upgrade your kitchen without undergoing complete kitchen renovation.
   
               </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <div class="fs-4">
                       
                         What are the most popular cabinet handles in London?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">
                Some people prefer true handleless as it gives a sleek, modern and aesthetic look while other factors such as kitchen colour, material and finish are also considered when choosing handles. 
               </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <div class="fs-4">
                       
                         Are your cabinet doors available in different finishes?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">
                Yes, we offer a broad spectrum of colours in various finishes including matt, gloss and painted.
               </p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <div class="fs-4">
                       
                            What types of sinks do you offer?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">
                 We offer stainless steel, single & double-bowl sinks, half-bowl sinks and ceramic.
               </p>
                </div>
            </div>
    </div>
</div>


    <!-- <section class="container py-5 px-4 bg-white" style="border-bottom: 3px solid #ebc266; border-right: 3px solid #ebc266">
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
                                Do We provide consultations to help choose the right kitchen style?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Yes, we offer free consultation calls to help you understand which kitchen is your go-to kitchen by considering various factors.</div>
                           
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
                                Is it worth replacing the old doors?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Yes, replacing doors is the cost-effective option to refresh & upgrade your kitchen without undergoing complete kitchen renovation.</div>
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
                                What are the most popular cabinet handles in London?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Some people prefer true handleless as it gives a sleek, modern and aesthetic look while other factors such as kitchen colour, material and finish are also considered when choosing handles.</div>
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
                                Are your cabinet doors available in different finishes?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Yes, we offer a broad spectrum of colours in various finishes including matt, gloss and painted.</div>
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
                                What types of sinks do you offer?
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            We offer stainless steel, single & double-bowl sinks, half-bowl sinks and ceramic.</div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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
