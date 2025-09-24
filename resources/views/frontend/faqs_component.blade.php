<head>

    <style>
        :root {
            --primary-color: #ffc01f;
            --primary-light: #ffd45e;
            --primary-dark: #e6a600;
            --dark-color: #333333;
            --light-color: #f8fafc;
            --text-on-primary: #333333;
        }

        /* body {
            background-color: #fffaf0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        } */

        .faq-container {
            
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .faq-header {
            text-align: center;
            /* margin-bottom: 3rem; */
        
        }

        .faq-header h3 {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .faq-header h3:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background-color: var(--primary-color);
            bottom: -10px;
            left: 25%;
            border-radius: 2px;
        }

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
            max-height: 1000px;
            padding: 1rem 1.5rem 1.5rem;
            border-top: 1px solid #fff5e0;
        }
        
        /* Card styles for FAQ answers */
        .faq-card-container {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
            flex-wrap: wrap;
        }

        
        .faq-card {
            flex: 1;
            min-width: 250px;
            background-color: white;
            border-radius: 8px;
            padding: 1.25rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            border-left: 3px solid var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .faq-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .faq-card-title {
            color: var(--dark-color);
            font-weight: 600;
            margin-bottom: 0.75rem;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
        }
        
        .faq-card-title i {
            color: var(--primary-color);
            margin-right: 0.5rem;
        }
        
        .faq-card-desc {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.5;
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
                font-size: 16px;
                padding: 1rem 1.25rem;
            }
          
         
            .faq-question i{
            font-size: 16px !important;
            }
            .faq-card-desc
            {
                font-size: 16px !important;
            }
            .faq-answer p{
                font-size: 16px !important;
            }
        
        }


         .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .faq-header {
            text-align: center;
            /* margin-bottom: 80px; */
            margin-bottom:10px;
        }

        .faq-title {
            color: black;
            font-size: 2.8rem;
            font-weight: 600;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .faqs-title
        {
             color: white;
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 10px;
            line-height: 1.2;

        }
        .subfaq-title {
            color: #888;
            font-size: 1rem;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        .faqs {
            list-style: none;
        }

        .faq-item-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 32px 0;
            border-bottom: 1px solid #333;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .faq-left {
            display: flex;
            align-items: center;
            gap: 48px;
            flex: 1;
        }

        .faq-number {
            font-size: 1rem;
            color: #666;
            font-weight: 500;
            width: 24px;
        }

        .faq-content {
            flex: 1;
        }

        .faq-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 16px;
        }

        .faq-description {
            color: #888;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item-tags {
            display: flex;
            gap: 12px;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease 0.1s;
        }

        .tag {
            background: #333;
            color: #ccc;
            padding: 6px 14px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .faq-item-arrow {
            width: 48px;
            height: 48px;
            background: #4285f4;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .arrow-icon {
            width: 20px;
            height: 20px;
            stroke: white;
            stroke-width: 2;
        }

        .faq-item-item.expanded .faq-description {
            opacity: 1;
            max-height: 300px;
        }

        .faq-item-item.expanded .faq-item-tags {
            opacity: 1;
            transform: translateY(0);
        }

        .faq-item-item.expanded .faq-item-arrow {
            transform: rotate(90deg);
        }

        .other-faqs {
            text-align: center;
            margin-top: 60px;
        }

        .other-faqs-btn {
            background: #4285f4;
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .other-faqs-btn:hover {
            background: #3367d6;
            transform: translateY(-2px);
        }

        @media(max-width:768px) {
            .faq-title {
                font-size: 2.2rem;
            }

            .faq-left {
                gap: 24px;
            }

            .faq-title {
                font-size: 1.8rem;
            }

            .faq-container {
                max-width: 100%;
                padding: 0 20px;
            }
        }

    </style>

</head>

<body>
{{-- <section class="container-fluid py-5 px-4 bg-white" style="border-bottom: 3px solid #ebc266; border-right: 3px solid #ebc266">
    <div class="row">
        <h3 class="text-black text-uppercase fw-bolder text-center">FAQs</h3>
    </div>
    <div class="row bg-white">
        <div class="col-lg-12 bg-white">
            <div class="accordion accordion-flush bg-white" id="accordionFlushExample">
                @if (!empty($home))
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px">
                                What is the difference between an affordable kitchen unit and a custom kitchen unit?
                            
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            An affordable kitchen unit offers budget-friendly solutions without compromising the quality. In comparison, custom kitchen units are tailor-made to your style, space, and preferences. They are available at a higher cost as compared to affordable kitchen units.
                            
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse2"
                                aria-expanded="false" aria-controls="flush-collapse2" style="border-radius: 20px">
                                How is a bespoke designer kitchen different from a standard kitchen?
                            </button>
                        </h2>
                        <div id="flush-collapse2" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Standard kitchens usually come in pre-set sizes and designs. In contrast, a bespoke designer kitchen is custom-made for you. You can choose details like layout, materials, and the aesthetic.
                           
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse3"
                                aria-expanded="false" aria-controls="flush-collapse3" style="border-radius: 20px">
                                Can I use affordable kitchen units for a kitchen renovation?
                            </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Affordable kitchen units can be a lifesaver when you need to renovate your kitchen on a budget. At Buy Kitchen Online, even our budget-friendly kitchen units have high-quality materials and craftsmanship.
                           
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse4"
                                aria-expanded="false" aria-controls="flush-collapse4" style="border-radius: 20px">
                                What is the process of designing custom kitchen units?
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            In order to design a custom kitchen unit with Buy Kitchen Online, we conduct an in-depth consultation. We discuss your style and functionality, measure your space, and then create a unique design for your home.
                           
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse5"
                                aria-expanded="false" aria-controls="flush-collapse5" style="border-radius: 20px">
                                Can a designer kitchen increase the value of my property?
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Yes, a designer kitchen can significantly increase the value of your property. A luxury kitchen from Buy Kitchen Online adds both aesthetic appeal and functionality, making it a desirable feature for potential buyers.
                            
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse6"
                                aria-expanded="false" aria-controls="flush-collapse6" style="border-radius: 20px">
                                Are there any affordable kitchen units available that offer customization?
                           
                            </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Yes, Buy Kitchen Online allows you to customize a budget-friendly kitchen unit to some extent. You get a personalized kitchen at an affordable price.
                           
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse7"
                                aria-expanded="false" aria-controls="flush-collapse7" style="border-radius: 20px">
                                How much does a designer kitchen unit cost?
                            </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            The entire cost of a designer kitchen depends on many different factors like; materials, size, and design complexity. However, Buy Kitchen Online offers premium quality at affordable prices for various budgets.
                            
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse8"
                                aria-expanded="false" aria-controls="flush-collapse8" style="border-radius: 20px">
                                Can Buy Kitchen Online design a custom kitchen unit to fit my small physical space?
                           
                            </button>
                        </h2>
                        <div id="flush-collapse8" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Absolutely! The experts at Buy Kitchen Online specialize in building kitchen units according to your available space and lifestyle.
                           
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse9"
                                aria-expanded="false" aria-controls="flush-collapse9" style="border-radius: 20px">
                                Does Buy Kitchen Online offer any flexible financing options for kitchen units?
                            </button>
                        </h2>
                        <div id="flush-collapse9" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Yes, Buy Kitchen Online aims to make your dream kitchen a reality by offering different financing options. Please get in touch with us for any further details.
                            </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse10"
                                aria-expanded="false" aria-controls="flush-collapse10" style="border-radius: 20px">
                                Which materials are used to make a kitchen unit?
                            </button>
                        </h2>
                        <div id="flush-collapse10" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            The most popular materials include stainless steel, quarts, and wood (such as oak, maple, and cherry). Buy Kitchen Online helps you in choosing the perfect material according to your preference.
                           
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse11"
                                aria-expanded="false" aria-controls="flush-collapse11" style="border-radius: 20px">
                                Is a bespoke designer kitchen worth it?
                            </button>
                        </h2>
                        <div id="flush-collapse11" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            Bespoke kitchens are worth it if you prefer customized, high-quality, long-lasting kitchens. The price may be higher than a standard kitchen, but the advantages of having a kitchen custom-made for your space and style are worth the investment.
                          
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                    <div class="accordion-item bg-white border-0">
                        <h2 class="accordion-header bg-white border-0">
                            <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse12"
                                aria-expanded="false" aria-controls="flush-collapse12" style="border-radius: 20px">
                                What kitchen styles are available at Buy Kitchen Online?
                            </button>
                        </h2>
                        <div id="flush-collapse12" class="accordion-collapse collapse bg-white"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-white text-dark">
                            The kitchen styles offered by Buy Kitchen Online are J Pull, Shaker, True handleless, Slab-edged. If you want a luxurious kitchen with a contemporary look then you can choose from J Pull 22, Shaker 22, True handleless painted and Slab-Edged Painted. We also have budget-friendly kitchen option like MFC.
                            
                        </div>
                            <hr class="border-bottom border-warning px-4 mx-4">
                        </div>
                    </div>
                @else 
                    @if (count($faqsData) > 0)
                        @foreach ($faqsData as $faq)
                            <div class="accordion-item bg-white border-0">
                                <h2 class="accordion-header bg-white border-0">
                                    <button class="mb-2 accordion-button collapsed fw-bolder text-dark border-bottom border-warning btn btn-outline-warning" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $loop->index + 1 }}"
                                        aria-expanded="false" aria-controls="flush-collapse{{ $loop->index + 1 }}" style="border-radius: 20px">
                                        {{ $faq['question'] }}
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $loop->index + 1 }}" class="accordion-collapse collapse bg-white"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body bg-white text-dark">{!! $faq['answer'] !!}</div>
                                    <hr class="border-bottom border-warning px-4 mx-4">
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-light" role="alert">
                            No FAQ's found.
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</section> 
--}}


{{-- <div class="container-fluid faq-body">
<div class="container ">
    <div class="faq-header">
        <h1>FAQS</h1>
    </div> --}}

    {{-- <div class="faq-list"> --}}
        {{-- @if (!empty($home)) --}}
             <!-- FAQ Item 1 -->
             {{-- <div class="faq-item" data-category="general">
                <div class="faq-question">
                    <div class="fs-4">
                        
                        What is the difference between an affordable kitchen unit and a custom kitchen unit?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
               <p class="fs-5">An affordable kitchen unit offers budget-friendly solutions without compromising the quality. In comparison, custom kitchen units are tailor-made to your style, space, and preferences. They are available at a higher cost as compared to affordable kitchen units.</p>
                </div>
            </div> --}}

            <!-- FAQ Item 2 -->
            {{-- <div class="faq-item" data-category="account">
                <div class="faq-question">
                    <div>
                        How is a bespoke designer kitchen different from a standard kitchen?
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                   <p>Standard kitchens usually come in pre-set sizes and designs. In contrast, a bespoke designer kitchen is custom-made for you. You can choose details like layout, materials, and the aesthetic.</p>
                </div>
            </div> --}}

            <!-- FAQ Item 3 -->
            {{-- <div class="faq-item" data-category="billing">
                <div class="faq-question">
                    <div>Can I use affordable kitchen units for a kitchen renovation?</div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Affordable kitchen units can be a lifesaver when you need to renovate your kitchen on a budget. At Buy Kitchen Online, even our budget-friendly kitchen units have high-quality materials and craftsmanship.</p>
                </div>
            </div> --}}

            <!-- FAQ Item 4 -->
            {{-- <div class="faq-item" data-category="technical">
                <div class="faq-question">
                    <div>What is the process of designing custom kitchen units?</div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>In order to design a custom kitchen unit with Buy Kitchen Online, we conduct an in-depth consultation. We discuss your style and functionality, measure your space, and then create a unique design for your home.</p>
                   
                </div>
            </div> --}}
            {{-- <div class="faq-item" data-category="technical">
                <div class="faq-question">
                    <div>Can a designer kitchen increase the value of my property?</div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, a designer kitchen can significantly increase the value of your property. A luxury kitchen from Buy Kitchen Online adds both aesthetic appeal and functionality, making it a desirable feature for potential buyers.</p>
                   
                </div>
            </div> --}}
            {{-- <div class="faq-item" data-category="technical">
                <div class="faq-question">
                    <div>Are there any affordable kitchen units available that offer customization?</div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, Buy Kitchen Online allows you to customize a budget-friendly kitchen unit to some extent. You get a personalized kitchen at an affordable price.</p>
                   
                </div>
            </div> --}}
            {{-- <div class="faq-item" data-category="technical">
                <div class="faq-question">
                    <div>How much does a designer kitchen unit cost?</div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p> The entire cost of a designer kitchen depends on many different factors like; materials, size, and design complexity. However, Buy Kitchen Online offers premium quality at affordable prices for various budgets.</p>
                   
                </div>
            </div> --}}
            {{-- <div class="faq-item" data-category="technical">
                <div class="faq-question">
                    <div> Can Buy Kitchen Online design a custom kitchen unit to fit my small physical space?</div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p> Absolutely! The experts at Buy Kitchen Online specialize in building kitchen units according to your available space and lifestyle.</p>
                   
                </div>
            </div> --}}
            {{-- <div class="faq-item" data-category="technical">
                <div class="faq-question">
                    <div>Does Buy Kitchen Online offer any flexible financing options for kitchen units?</div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, Buy Kitchen Online aims to make your dream kitchen a reality by offering different financing options. Please get in touch with us for any further details.</p>
                   
                </div>
            </div> --}}
            {{-- <div class="faq-item" data-category="technical">
                <div class="faq-question">
                    <div>Which materials are used to make a kitchen unit?</div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>The most popular materials include stainless steel, quarts, and wood (such as oak, maple, and cherry). Buy Kitchen Online helps you in choosing the perfect material according to your preference.</p>
                   
                </div>
            </div> --}}
            {{-- <div class="faq-item" data-category="technical">
                <div class="faq-question">
                    <div>Is a bespoke designer kitchen worth it?</div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Bespoke kitchens are worth it if you prefer customized, high-quality, long-lasting kitchens. The price may be higher than a standard kitchen, but the advantages of having a kitchen custom-made for your space and style are worth the investment.</p>
                   
                </div>
            </div> --}}
            {{-- <div class="faq-item" data-category="technical">
                <div class="faq-question">
                    <div>What kitchen styles are available at Buy Kitchen Online?</div>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p> The kitchen styles offered by Buy Kitchen Online are J Pull, Shaker, True handleless, Slab-edged. If you want a luxurious kitchen with a contemporary look then you can choose from J Pull 22, Shaker 22, True handleless painted and Slab-Edged Painted. We also have budget-friendly kitchen option like MFC.</p>
                   
                </div>
            </div> --}}

        {{-- @else --}}
            {{-- @if (count($faqsData) > 0) --}}
                {{-- @foreach ($faqsData as $faq) --}}
        <!-- FAQ Item 1 -->
        {{-- <div class="faq-item" data-category="general">
            <div class="faq-question">
                <div class="fs-4">
                   
                    {{ $faq['question'] }}
                </div>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer fs-5">
           
           {!! $faq['answer'] !!}
        </div>
        </div> --}}
            {{-- @endforeach --}}
       
        {{-- @else --}}
        {{-- <div class="alert alert-light" role="alert">
            No FAQ's found.
        </div> --}}
        {{-- @endif --}}
    {{-- @endif --}}
    {{-- </div>
</div>
</div> --}}



<div class="container-fluid pb-5" style="background-color: #1a1a1a;">
 <div class="container">
        <div class="faq-header">
            <h1 class="faqs-title mb-0 pt-5" >FAQS</h1>
            {{-- <p class="subfaq-title">
               
            </p> --}}
        </div>

        <ul class="faqs">
        @if (!empty($home)) 
            <li class="faq-item-item expanded">
                <div class="faq-left">
                    <span class="faq-number">01</span>
                    <div class="faq-content">
                        <h3 class="faq-title">What is the difference between an affordable kitchen unit and a custom
                            kitchen unit?</h3>
                        <p class="faq-description">
                            An affordable kitchen unit offers budget-friendly solutions without compromising the
                            quality. In comparison, custom kitchen units are tailor-made to your style, space, and
                            preferences. They are available at a higher cost as compared to affordable kitchen units.

                        </p>
                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>

            <li class="faq-item-item">
                <div class="faq-left">
                    <span class="faq-number">02</span>
                    <div class="faq-content">
                        <h3 class="faq-title">How is a bespoke designer kitchen different from a standard kitchen?</h3>
                        <p class="faq-description">
                            Standard kitchens usually come in pre-set sizes and designs. In contrast, a bespoke designer
                            kitchen is custom-made for you. You can choose details like layout, materials, and the
                            aesthetic.

                        </p>
                      
                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>

            <li class="faq-item-item">
                <div class="faq-left">
                    <span class="faq-number">03</span>
                    <div class="faq-content">
                        <h3 class="faq-title">Can I use affordable kitchen units for a kitchen renovation?</h3>
                        <p class="faq-description">
                            Affordable kitchen units can be a lifesaver when you need to renovate your kitchen on a
                            budget. At Buy Kitchen Online, even our budget-friendly kitchen units have high-quality
                            materials and craftsmanship.

                        </p>

                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>

            <li class="faq-item-item">
                <div class="faq-left">
                    <span class="faq-number">04</span>
                    <div class="faq-content">
                        <h3 class="faq-title">What is the process of designing custom kitchen units?</h3>
                        <p class="faq-description">
                            In order to design a custom kitchen unit with Buy Kitchen Online, we conduct an in-depth
                            consultation. We discuss your style and functionality, measure your space, and then create a
                            unique design for your home.

                        </p>

                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>
            <li class="faq-item-item">
                <div class="faq-left">
                    <span class="faq-number">05</span>
                    <div class="faq-content">
                        <h3 class="faq-title"> Can a designer kitchen increase the value of my property?</h3>
                        <p class="faq-description">
                            Yes, a designer kitchen can significantly increase the value of your property. A luxury
                            kitchen from Buy Kitchen Online adds both aesthetic appeal and functionality, making it a
                            desirable feature for potential buyers.


                        </p>

                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>
            <li class="faq-item-item">
                <div class="faq-left">
                    <span class="faq-number">06</span>
                    <div class="faq-content">
                        <h3 class="faq-title"> Are there any affordable kitchen units available that offer
                            customization?
                        </h3>
                        <p class="faq-description">
                            Yes, Buy Kitchen Online allows you to customize a budget-friendly kitchen unit to some
                            extent. You get a personalized kitchen at an affordable price.


                        </p>

                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>
            <li class="faq-item-item">
                <div class="faq-left">
                    <span class="faq-number">07</span>
                    <div class="faq-content">
                        <h3 class="faq-title"> How much does a designer kitchen unit cost?
                        </h3>
                        <p class="faq-description">
                            The entire cost of a designer kitchen depends on many different factors like; materials,
                            size, and design complexity. However, Buy Kitchen Online offers premium quality at
                            affordable prices for various budgets.


                        </p>

                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>
            <li class="faq-item-item">
                <div class="faq-left">
                    <span class="faq-number">08</span>
                    <div class="faq-content">
                        <h3 class="faq-title"> Can Buy Kitchen Online design a custom kitchen unit to fit my small
                            physical space?

                        </h3>
                        <p class="faq-description">
                            Absolutely! The experts at Buy Kitchen Online specialize in building kitchen units according
                            to your available space and lifestyle.

                        </p>

                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>
            <li class="faq-item-item">
                <div class="faq-left">
                    <span class="faq-number">09</span>
                    <div class="faq-content">
                        <h3 class="faq-title"> Which materials are used to make a kitchen unit?

                        </h3>
                        <p class="faq-description">
                            The most popular materials include stainless steel, quarts, and wood (such as oak, maple,
                            and cherry). Buy Kitchen Online helps you in choosing the perfect material according to your
                            preference.

                        </p>

                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>
            <li class="faq-item-item">
                <div class="faq-left">
                    <span class="faq-number">10</span>
                    <div class="faq-content">
                        <h3 class="faq-title"> Is a bespoke designer kitchen worth it?

                        </h3>
                        <p class="faq-description">
                            Bespoke kitchens are worth it if you prefer customized, high-quality, long-lasting kitchens.
                            The price may be higher than a standard kitchen, but the advantages of having a kitchen
                            custom-made for your space and style are worth the investment.


                        </p>

                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>
            <li class="faq-item-item">
                <div class="faq-left">
                    <span class="faq-number">11</span>
                    <div class="faq-content">
                        <h3 class="faq-title"> What kitchen styles are available at Buy Kitchen Online?

                        </h3>
                        <p class="faq-description">
                            The kitchen styles offered by Buy Kitchen Online are J Pull, Shaker, True handleless,
                            Slab-edged. If you want a luxurious kitchen with a contemporary look then you can choose
                            from J Pull 22, Shaker 22, True handleless painted and Slab-Edged Painted. We also have
                            budget-friendly kitchen option like MFC.

                        </p>

                    </div>
                </div>
                <div class="faq-item-arrow">
                    <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </div>
            </li>
            
         @else
            @if (count($faqsData) > 0)
                @foreach ($faqsData as $faq)
                        <li class="faq-item-item expanded">
                            <div class="faq-left">
                                <span class="faq-number">01</span>
                                <div class="faq-content">
                                    <h3 class="faq-title">{{ $faq['question'] }}</h3>
                                    <p class="faq-description">
                                        {{ strip_tags($faq['answer']) }}
                                    </p>
                                </div>
                            </div>
                            <div class="faq-item-arrow">
                                <svg class="arrow-icon" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17" />
                                </svg>
                            </div>
                        </li>
                 @endforeach
                  @else
                    <div class="alert alert-light" role="alert">
                        No FAQ's found.
                    </div>
            @endif
        @endif

        </ul>

     
    </div>

</div>

<script>

document.addEventListener('DOMContentLoaded', function() {
            
        //     const faqQuestions = document.querySelectorAll('.faq-question');
            
        //     faqQuestions.forEach(question => {
        //         question.addEventListener('click', function() {
                    
        //             this.classList.toggle('active');
                    
        //             const answer = this.nextElementSibling;
        //             answer.classList.toggle('show');
                    
        //             faqQuestions.forEach(q => {
        //                 if (q !== question) {
        //                     q.classList.remove('active');
        //                     q.nextElementSibling.classList.remove('show');
        //                 }
        //             });
        //         });
        //     });

        //     const observerOptions = {
        //         threshold: 0.1
        //     };

        //     const observer = new IntersectionObserver((entries) => {
        //         entries.forEach(entry => {
        //             if (entry.isIntersecting) {
        //                 entry.target.style.opacity = '1';
        //                 entry.target.style.transform = 'translateY(0)';
        //             }
        //         });
        //     }, observerOptions);

        //     faqItems.forEach((item, index) => {
        //         item.style.opacity = '0';
        //         item.style.transform = 'translateY(20px)';
        //         item.style.transition = `all 0.5s ease ${index * 0.1}s`;
        //         observer.observe(item);
        //     });
        
         document.querySelectorAll('.faq-item-item').forEach(item => {
            item.addEventListener('click', () => {
                const alreadyOpen = item.classList.contains('expanded');
                document.querySelectorAll('.faq-item-item').forEach(i => i.classList.remove('expanded'));
                if (!alreadyOpen) { item.classList.add('expanded'); }
            });
        });
        });



</script>

</body>

