<x-guest-layout>
    @section('meta_tags')
        <title>{{$seo?->meta_title}}</title>
        <meta name="description" content="{{$seo?->meta_description}}">
        <link rel="canonical" href="{{$seo?->canonical_tag}}" />
        {!! $seo?->schema_code !!}
    @endsection
    <style>
        /* .product-card {
            border: 1px solid transparent;
            transition: border-color 0.3s ease;
        }

        .product-card:hover {
            border-color: #ebc266;
            Outline warning color on hover
        }

        .product-short-title-container {
            margin-bottom: 10px;
            Space between the title and other content
        }

        .product-short-title {
            display: inline-block;
            padding: 5px 10px;
            color: #000;
            Default text color
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .product-card:hover,
        .card-header {
            background-color: #ebc266;
            Warning color background on hover
            color: #000;
            Text color on hover
        }

        .product-image:hover {
            transform: scale(1.1);
            transition: 0.5s ease;
        } */



        /* handles */

        .handles-section {
            position: relative;
            width: 100%;
            height: 65vh; /* Responsive height */
            min-height: 300px; /* Minimum height */
            background-image: url('{{ asset('images/doors-hero-image.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .handles-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.1); /* Optional overlay */
        }

        .handles-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 20px;
            width: 100%;
        }

        .handles-heading {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: clamp(1.5rem, 4vw, 2.5rem);
        }

        .badges-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: clamp(15px, 3vw, 40px);
            max-width: 100%;
        }

        .badge-link {
            display: block;
            transition: transform 0.3s ease;
            /* width: clamp(120px, 25vw, 150px);
            height: clamp(120px, 25vw, 150px); */
          
           
            min-width: 150px;
            min-height: 150px;

            max-width: 150px;
            max-height: 150px;
        }

        .badge-link:hover {
            transform: scale(1.05);
        }

        .badge {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color: #fff; */
            /* box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); */
            overflow: hidden;
        }

        .badge img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .premium-badge {
            border: 2px solid #e74c3c;
        }

        .promo-box {
            position: absolute;
            right: 0;
            bottom: 50px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-top-left-radius: 5px;
            width: clamp(100px, 20vw, 150px);
            box-shadow: -2px -2px 10px rgba(0, 0, 0, 0.1);
            z-index: 3;
        }

        .promo-text {
            color: #e74c3c;
            font-weight: bold;
            font-size: clamp(0.7rem, 1.5vw, 1rem);
            text-align: center;
            padding: clamp(5px, 1vw, 10px);
            width: 100%;
        }

        .promo-cta {
            background-color: #ffd700;
            color: #333;
            font-weight: bold;
            font-size: clamp(0.7rem, 1.5vw, 1rem);
            text-align: center;
            padding: clamp(5px, 1vw, 10px);
            width: 100%;
        }

        /* Media queries for enhanced responsiveness */
        @media (max-width: 767px) {
            .handles-section {
                height: 40vh;
            }
            
            .badges-container {
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .handles-section {
                height: auto;
                padding: 60px 10px;
            }
            
            .badges-container {
                gap: 5px;
            }
            
            .badge-link {
                min-width: 80px;
                min-height: 80px;

                max-width: 80px;
                max-height: 80px;
            }
            
            .promo-box {
                position: relative;
                width: 100%;
                margin-top: 50px;
                flex-direction: row;
                justify-content: space-between;
                border-radius: 0;
            }
            
            .promo-text, .promo-cta {
                font-size: 18px;
                width: 50%;
                padding: 8px 5px;
            }
        }


        .bg-orange
        {
            background-color:#febd49;
        }

                .custom-scrollbar::-webkit-scrollbar {
  width: 6px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
  background-color: #2A6161; /* Bootstrap warning color */
  border-radius: 4px;
}

.custom-scrollbar::-webkit-scrollbar-track {
  background: transparent;
}

/* Firefox support */
.custom-scrollbar {
  scrollbar-color: #2A6161 transparent;
  scrollbar-width: thin;
}

td
{
    vertical-align: middle;
}


   .toggle-box {
      display: none !important;
    }

    .mobile-only {
      display: none;
    }

    .desktop-only {
      display: inline;
    }

    @media (max-width: 767px) {
      .mobile-only {
        display: inline;
      }

      .desktop-only {
        display: none;
      }

      .toggle-box {
        display: none;
      }

      .more-text {
        display: none;
      }

      .toggle-box:checked + .text .more-text {
        display: inline;
      }

      .toggle-box:checked + .text .dots {
        display: none;
      }

      .read-toggle {
        color: #0d6efd;
        text-decoration: underline;
        cursor: pointer;
      }

      .toggle-box:not(:checked) + .text .read-toggle::after {
        content: " Read More";
      }

      .toggle-box:checked + .text .read-toggle::after {
        content: " Read Less";
      }
    }



    
    /* product card */

        .product-card {
      position: relative;
      display:flex;
      flex-direction:column;
      justify-content: space-between;
      width: 320px;
      height:500px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .product-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    
    .product-image {
      /* height: 220px; */
      /* background-color:green; */
      height: 180px;
      overflow: hidden;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    
    .product-image img {
        /* width: 280px; */
        width: 290px;
      /* width: 100%;
      height: 100%; */
      /* height: 300px; */
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .product-card:hover .product-image img {
      transform: scale(1.1);
    }
    
    .category {
      position: absolute;
      top: 15px;
      left: 15px;
      background: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    
    .product-details {
      padding: 20px;
    }
    
    .product-title {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 10px;
      color: #333;
    }
    
    .product-price {
      font-size: 1.5rem;
      font-weight: 700;
      color: #4CAF50;
      margin-bottom: 15px;
    }
    
    .quantity-selector {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 15px;
      background: #f5f7fa;
      border-radius: 50px;
      padding: 5px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }
    
    .quantity-selector:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    .quantity-btn {
      width: 38px;
      height: 38px;
      background: white;
      border: none;
      color: #4CAF50;
      font-size: 1.2rem;
      font-weight: bold;
      cursor: pointer;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: all 0.2s ease;
    }
    
    .quantity-btn:hover {
      background: #4CAF50;
      color: white;
      transform: translateY(-2px);
    }
    
    .quantity {
      width: 60px;
      height: 38px;
      border: none;
      background: transparent;
      text-align: center;
      font-size: 1.1rem;
      font-weight: 600;
      color: #333;
      margin: 0 5px;
    }
    
    .quantity:focus {
      outline: none;
    }
    
    .add-to-cart {
      display: block;
      width: 100%;
      padding: 15px;
      margin-top: 20px;
      background: #ffc107;
      color: black;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    
    .add-to-cart:hover {
      /* background: #3e8e41; */
      border:1px solid #ffc107;
      background: white;
    }
    
    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .product-card {
      animation: fadeIn 0.6s ease-out;
    }
    
    /* Additional styles for quantity selector */
    .quantity-btn:active {
      transform: scale(0.85);
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }
    
    .quantity::-webkit-outer-spin-button,
    .quantity::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    
    .quantity {
      -moz-appearance: textfield;
    }
    
    .add-to-cart:active {
      transform: scale(0.98);
    }

    @media(max-width:576px)
    {
        .product-card
        {

            width:100%;
            /* height:450px; */
            /* justify-content: start; */
            
        }
        .product-title
        {
            font-size:24px;
        }
        .product-price
        {
            font-size:18px;
        }
        .add-to-cart,
        .quantity
        {
            font-size:16px;
        }
        .category
        {
            font-size:14px;
        }
        .quantity-btn
        {
            font-size:20px;
        }
    }
/* product card end */




    </style>




<section class="handles-section">
    <div class="handles-overlay"></div>
    <div class="handles-content">
        <h2 class="handles-heading text-black fs-mob-30">{{strtoupper($slug)}}</h2>
        <div class="badges-container">
            <a href="" class="badge-link">
                <div class="badge">
                    <img src="{{ asset('images/premium-badge.png') }}" alt="">
                </div>
            </a>
            <a href="https://www.trustpilot.com/review/opulenthomeinteriors.com" class="badge-link">
                <div class="badge trustpilot-badge">
                    
                    <img class="" src="{{ asset('images/trust-pilot-badge.png') }}" alt="">
                </div>
            </a>
            <a href="https://www.google.com/maps/place/Buy+Kitchen+Online/@51.5192167,-0.0093268,17z/data=!4m8!3m7!1s0x48761d591fe166d7:0x456fed0ffc8a8222!8m2!3d51.5192167!4d-0.0093268!9m1!1b1!16s%2Fg%2F11vbf0zdzm?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" class="badge-link">
                <div class="badge google-badge">
                    <img src="{{ asset('images/google-reviews-badge.png') }}" alt="">
                </div>
            </a>
        </div>
    </div>
    <div class="promo-box">
        <div class="promo-text">For a Limited<br>Time Only!</div>
        <div class="promo-cta btn" data-bs-toggle="modal" data-bs-target="#newsletterModalDoor">Get <span class="text-danger">FREE </span><br>On-Site<br>Survey!</div>
    </div>
</section>

<section class="container-fluid my-5 bg-light py-4">
    <div class="container">
    <div class="row">
        {{-- <div class=" col-xl-8 col-12 align-self-center px-5 d-flex flex-column flex-md-row p-0">
            <div class="row">
                
                <div class="align-self-center rounded shadow-lg order-sample position-relative col-12 col-xl-8 bg-white rounded-lg border-0 shadow-sm" style="">
                    <h4 style="font-size:30px; font-weight:600;"><span class="text-danger">Try</span> <span class="text-black">Before You Buy<span>
                       <br> <span class="text-danger"> FREE</span> Door Samples!</h4>
                       <h4 class="text-primary my-4" style="font-size:24px;">£6 Delivery Charge Only.</h4>
                    
                    <a href="{{ route('ordercomponentbyname', 'doors') }}" class=" px-2 btn bg-orange px-1 fw-bold text-uppercase rounded-0 " style="font-size:14px;">  Order a Sample of your choice NOW!</a>
                </div>
                <div class="p-0 mb-3 mb-xl-0 col-12 col-xl-4">
                 <img class="w-100 object-fit-cover rounded border border-warning" src="https://bkonline.uk/public/imgs/products/Cartmel-Cashmere-Flat-Door-A1720452961_668c0761d6f16.jpg"  class="img-fluid"  alt="Modern Kitchen" 
                    style="width: 300px; height: 400px; object-fit: cover;">
                
               
                </div>
            </div>

        </div> --}}
        <div class="col-xl-6 mt-lg-5">
            <h1 class="text-black fw-bold">Doors</h1>


              
             <p>
      <!-- For large screens -->
      <span class="desktop-only fs-5">
        The doors are the first impression of your kitchen. You can <span class="fw-bold">transform your kitchen </span>by availing our <span class="fw-bold">kitchen cupboard and cabinet door replacement offer. </span>By selecting from our various colors and finishes you will give your kitchen a new life. Our doors are the essence of style and durability, creating an elegant look. <br>
        <span class="fw-bold">Buy Kitchen Online</span>  offers a wide range of kitchen doors in various sizes to suit your needs. Our <span class="fw-bold">replacement kitchen doors</span> are available in different height and width dimensions, ensuring a perfect fit for your kitchen.
        <br>
         The standard size, commonly used, is <span class="fw-bold">715 x 496mm.</span> For larger requirements, we provide doors up to <span class="fw-bold"> 1965 x 596mm,</span> while the smallest size available is <span class="fw-bold">110 x 596mm.</span> With this extensive selection, you can easily find the right door to upgrade or replace your kitchen cupboard & cabinet doors.

    </p>
            <!-- <p class="fs-5">{!! $category->description !!} </p> -->
          
                
      </span>


       <span class="mobile-only">
        <input type="checkbox" class="toggle-box" id="toggle-text" />
        <span class="text fs-5 fs-mob">
          The doors are the first impression of your kitchen. You can <span class="fw-bold">transform your kitchen </span>by availing our <span class="fw-bold">kitchen cupboard and cabinet door replacement offer. </span>By selecting from our various colors and<span class="dots"></span><span class="more-text">  
           finishes you will give your kitchen a new life. Our doors are the essence of style and durability, creating an elegant look.
           <br>
           <span class="fw-bold">Buy Kitchen Online</span>  offers a wide range of kitchen doors in various sizes to suit your needs. Our <span class="fw-bold">replacement kitchen doors</span> are available in different height and width dimensions, ensuring a perfect fit for your kitchen.
           <br>
           The standard size, commonly used, is <span class="fw-bold">715 x 496mm.</span> For larger requirements, we provide doors up to <span class="fw-bold"> 1965 x 596mm,</span> while the smallest size available is <span class="fw-bold">110 x 596mm.</span> With this extensive selection, you can easily find the right door to upgrade or replace your kitchen cupboard & cabinet doors.
        
        </span>
          <label for="toggle-text" class="read-toggle"></label>
        </span>
      </span>


    


<!-- 
            <p class="fs-5 fs-mob">The doors are the first impression of your kitchen. You can <span class="fw-bold">transform your kitchen</span>by availing our <span class="fw-bold">kitchen cupboard and cabinet door replacement offer. </span>By selecting from our various colors and finishes you will give your kitchen a new life. Our doors are the essence of style and durability, creating an elegant look. </p> -->
            <!-- <p class="fs-5">{!! $category->description !!} </p> -->
            <!-- <p class="fs-5 fs-mob">
                <span class="fw-bold">Buy Kitchen Online</span>  offers a wide range of kitchen doors in various sizes to suit your needs. Our <span class="fw-bold">replacement kitchen doors</span> are available in different height and width dimensions, ensuring a perfect fit for your kitchen.
            </p>
            <p class="fs-5 fs-mob">
                The standard size, commonly used, is <span class="fw-bold">715 x 496mm.</span> For larger requirements, we provide doors up to <span class="fw-bold"> 1965 x 596mm,</span> while the smallest size available is <span class="fw-bold">110 x 596mm.</span> With this extensive selection, you can easily find the right door to upgrade or replace your kitchen cupboard & cabinet doors.
            </p> -->
        </div>
        <div class="col-xl-2"></div>
        <div class="col-xl-4 p-0 col-12">
            @include('frontend.inquiry_form')
        </div>
    </div>
   
</div>
</section>

<div class="container">
    <div class="row">
    <div class="col-12">
    <img class="img-fluid w-100 d-none d-md-block" src="{{ asset('images/replace-door.png') }}" alt="">
    <img class="img-fluid w-100 d-md-none" src="{{ asset('images/replace-door-mobile.png') }}" alt="">
   
</div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-1 d-lg-block"></div>
        <div class="col-lg-4 col-12">
             <a  class="btn bg-orange px-3 fw-bold text-uppercase rounded-0 " style="font-size:14px;" data-bs-toggle="modal" data-bs-target="#exampleModal"> book your FREE CONSULTATION NOW!</a>
        </div>
    </div>

</div>

    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">

        <div class="row">
            <div class="col-lg-3">
                {{-- <div class="m-0">
                    <!-- <h4 class="text-dark" style="font-weight: 600; font-size: 1.3rem">Filters</h4> -->
                    <h2 class="text-dark text-center" style="font-weight: 600;">Filters</h2>
                    <!-- <h3 style="font-weight: 600; font-size: 1.3rem" class="text-dark">CURRENT ITEMS:<span id="number-of-products">{{ $count }}</span></h3> -->
                </div> --}}
                <!-- <div class="bg-light border border-dark border-1 px-2 py-2 mt-2">
                    <h3 style="font-weight: 600; font-size: 1.3rem" class="text-dark">CURRENT ITEMS:<span id="number-of-products">{{ $count }}</span></h3>
                </div> -->
                <form action="" class="">
                    <input type="hidden" name="slug" id="slug" value="{{ $category->slug }}">
                    <div class="row">
                        @if ($styles->count() > 0)
                            @if ($category->slug == 'doors' || $category->slug == 'accessories')
                                <div class="col-12 accordion accordion-flush mt-3" id="accordionFlushExample3">
                                    <div class="accordion-item bg-transparent border border-warning border-1 rounded-0">
                                        <h2 class="accordion-header " id="flush-headingThree">
                                            <button class="accordion-button legend collapsed text-uppercase fs-mob-18" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="true" aria-controls="flush-collapseThree">
                                                Style
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse my-2 custom-scrollbar"
                                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample3" style="max-height: 150px; overflow-y: scroll">
                                            <div class="accordion-body px-0 py-0 pb-1">
                                                <div class="row g-1">
                                                    <!-- updated -->
                                                    @foreach ($styles as $index => $style)
                                                    <div class="col-12">
                                                        <div class="form-check form-check-inline">
                                                            <input data-style-id="{{$style->id}}" class="form-check-input  style-filter" {{ (!empty($urlStyleId) && ($urlStyleId == $style->id)) ? 'checked' : '' }} type="checkbox" name="styles[]" id="style{{ $index }}" value="{{ $style->id }}">
                                                            <label class="form-check-label"
                                                                for="style{{ $index }}">{{ $style->name }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            @endif
                        @endif

                        @if ($colours->count() > 0)
                            @if ($category->slug != 'appliances')
                            @if ($category->slug =='handles')
                            <div class="col-md-6 mt-3">
                                                     <h2 class="text-black">Flawless Finishes. Reliable Function.</h2>
                                                </div>
                             @endif                   
                                <div class="col-12 accordion accordion-flush mt-3" id="accordionFlushExample4">
                                    <div class="accordion-item bg-transparent border border-warning border-1 rounded-0">
                                        <h2 class="accordion-header" id="flush-headingFour">
                                            <button class="accordion-button legend collapsed text-uppercase" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                aria-expanded="true" aria-controls="flush-collapseFour">
                                                Colour
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse my-2 custom-scrollbar"
                                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample4" style="max-height: 150px; overflow-y: auto">
                                            <div class="accordion-body bg-light px-0 py-0 pb-1">
                                                <div class="row g-1" id="colours-filter">
                                                    @foreach ($colours as $index => $colour)
                                                    <div class="col-12">
                                                        <div class="form-check form-check-inline">
                                                            <input data-colour-id="{{$colour->id}}" class="form-check-input colour-filter" type="checkbox" {{ (!empty($urlColourId) && ($urlColourId == $colour->id)) ? 'checked' : '' }}
                                                                name="colours[]" id="colour{{ $index }}"
                                                                value="{{ $colour->id }}">
                                                                @if (!empty($colour->colour_code))
                                                                <label class="form-check-label d-flex gap-1" for="colour{{ $index }}">
                                                                    <div class="d-inline border border-dark"
                                                                        style="border-radius: 50px; width: 20px;height:20px; background-color:{{ $colour->colour_code }};">
                                                                    </div>
                                                                    {{ $colour->trade_colour ? $colour->trade_colour : $colour->name }}
                                                                </label>
                                                                @else
                                                                <label class="form-check-label d-flex gap-1" for="colour{{ $index }}">
                                                                    <div class="border border-dark" style="border-radius: 50px; width: 20px;height:20px; background: linear-gradient(to right, red, yellow, green);">
                                                                    </div>
                                                                    {{ $colour->trade_colour ? $colour->trade_colour : $colour->name }}
                                                                </label>
                                                                @endif
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                
                            @endif
                        @endif

                        @if ($assemblies->count() > 0)
                            {{--<div class="col-3 accordion accordion-flush mt-3" id="accordionFlushExample2">
                                <div class="accordion-item bg-transparent border border-warning border-1 rounded-0 px-2">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button legend collapsed text-uppercase" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="true" aria-controls="flush-collapseTwo">
                                            ASSEMBLY
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse my-2"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample2">
                                        <div class="accordion-body px-0 py-0 pb-1">
                                            <div class="row g-1">
                                                @foreach ($assemblies as $index => $assembly)
                                                    @if ($assembly->slug == 'stock' && ($category->slug == 'doors' || $category->slug == 'accessories' || $category->slug == 'handles' || $category->slug == 'sinks' || $category->slug == 'internals'))
                                                        <div class="col-lg-12 col-md-12 col-6">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="assemblies[]" id="assembly{{ $index }}"
                                                                    value="{{ $assembly->id }}">
                                                                <label class="form-check-label"
                                                                    for="assembly{{ $index }}">{{ $assembly->name }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @else
                                                        
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        @endif

                        @if (strtolower($category->name) != 'handles')
                            @if ($heights->count() > 0)
                                <div class="col-12 accordion accordion-flush mt-3" id="accordionFlushExample5">
                                    <div class="accordion-item bg-transparent border border-warning border-1 rounded-0">
                                        <h2 class="accordion-header" id="flush-headingFive">
                                            <button class="accordion-button legend collapsed text-uppercase" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                                aria-expanded="true" aria-controls="flush-collapseFive">
                                                Heights
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse my-2 custom-scrollbar"
                                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample5" style="max-height: 150px; overflow-y: auto">
                                            <div class="accordion-body px-0 py-0 pb-1">
                                                <div class="ps-2">
                                                    <div class="row g-1" id="heights-filter">
                                                        @foreach ($heights as $index => $height)
                                                        <div class="col-12">
                                                            <div class="form-check form-check-inline">
                                                                <input data-heights-id="{{$height->height}}" class="form-check-input height-filter" type="checkbox"
                                                                    name="heights[]" id="height{{ $index }}"
                                                                    value="{{ $height->height }}">
                                                                <label class="form-check-label"
                                                                    for="height{{ $index }}">
                                                                    {{ $height->height }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                        @if (strtolower($category->name) == 'doors')
                            @if ($widths->count() > 0)
                                <div class="col-12 accordion accordion-flush mt-3" id="accordionFlushExample5">
                                    <div class="accordion-item bg-transparent border border-warning border-1 rounded-0">
                                        <h2 class="accordion-header" id="flush-headingFive">
                                            <button class="accordion-button legend collapsed text-uppercase" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                                aria-expanded="true" aria-controls="flush-collapseFive">
                                                Widths
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse my-2 custom-scrollbar"
                                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample5" style="max-height: 150px; overflow-y: auto">
                                            <div class="accordion-body px-0 py-0 pb-1">
                                                <div class="ps-2">
                                                    <div class="row g-1" id="widths-filter">
                                                        @foreach ($widths as $index => $width)
                                                        <div class="col-12">
                                                            <div class="form-check form-check-inline">
                                                                <input data-widths-id="{{$width->id}}" class="form-check-input width-filter" type="checkbox"
                                                                    name="widths[]" id="width{{ $index }}"
                                                                    value="{{ $width->width }}">
                                                                <label class="form-check-label"
                                                                    for="width{{ $index }}">
                                                                    {{ $width->width }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                        @if (strtolower($category->name) != 'doors' && strtolower($category->name) != 'handles' && strtolower($category->name) != 'taps' && strtolower($category->name) != 'worktops' && strtolower($category->name) != 'appliances' && strtolower($category->name) != 'upstands' && strtolower($category->name) != 'breakfast bars' && strtolower($category->name) != 'sinks' && strtolower($category->name) != 'internals') 
                            @if ($types->count() > 0)
                                <div class="col-12 accordion accordion-flush mt-3" id="accordionFlushExample1">
                                    <div class="accordion-item bg-transparent border border-warning border-1 rounded-0">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button legend collapsed text-uppercase" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="true" aria-controls="flush-collapseOne">
                                                @if (strtolower($category->name) != 'handles' && strtolower($category->name) != 'taps' && strtolower($category->name) != 'worktops' && strtolower($category->name) != 'appliances' && strtolower($category->name) != 'upstands' && strtolower($category->name) != 'breakfast bars' && strtolower($category->name) != 'sinks' && strtolower($category->name) != 'internals') SIZES @else TYPES @endif
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse my-2 custom-scrollbar"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample1" style="max-height: 150px; overflow-y: auto">
                                            <div class="accordion-body px-0 py-0 pb-1">
                                                <div class="ps-2">
                                                    <div class="row g-1">
                                                        @foreach ($types as $index => $type)
                                                        <div class="col-12">
                                                            <div class="form-check form-check-inline">
                                                                <input data-type-id="{{$type->id}}" id="type-filter" class="form-check-input" type="checkbox"
                                                                    name="types[]" id="type{{ $index }}"
                                                                    value="{{ $type->id }}">
                                                                <label class="form-check-label"
                                                                    for="type{{ $index }}">{{ $type->name }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </form>
               
            </div>


            <div class="pb-5 col-lg-9 col-12 mt-md-3">
                <div class="row g-4" id="products_container">
                      @foreach ($products as $index => $product)
                     <div class="col-lg-4">
                      
                        <div class="product-card">
                            <a href="{{ route('orderbyproduct', [$product->slug, $product->serial_number]) }}">
                                <div class="product-image">
                                 <img src="{{ !empty($product->image_path) ? asset('imgs/products/'.$product->image_path) : asset('images/no-image-available.jpg') }}" alt="">
                                <!-- <img  src="{{ asset('images/handle.jpg') }}"> -->
                                <span class="category">{{$product->product_code}}</span>
                                </div>
                             </a>
                            <div class="product-details">
                                 <a href="{{ route('orderbyproduct', [$product->slug, $product->serial_number]) }}">
                                    <h2 class="product-title">{{ \Str::limit($product->full_title, 20) }}</h2>
                                    <div class="rounded bg-danger text-white text-center">{{$product->related_products_count > 0 ? $product->related_products_count : '1'}} available colour/s</div>
                                 </a>
                                <div class="product-price">£{{$product->price}}</div>
                                <div class="quantity-selector">
                                    <button class="quantity-btn" id="dec-btn{{ $product->id }}" onclick="decQty({{ $product->id }})">−</button>
                                    <input name="quantity" type="text" class="quantity" value="0"  id="quantity{{ $product->id }}"
                                    onkeyup=""
                                    >
                                    
                                    <button class="quantity-btn" onclick="incQty({{ $product->id }})">+</button>
                                    {{-- <button class="quantity-btn" onclick="increaseQuantity('{{ $product->id }}', '{{ $product->product_code }}', '{{ $product->full_title }}', {{ $product->price }}, {{ $product->discounted_price }}, {{ $product->discounted_percentage ?? 0 }}, '{{ $product->ParentCategory->slug }}','{{ $product->image_path }}')">+</button> --}}
                                </div>
                                <button class="add-to-cart"
                                onclick="inputQty(document.querySelector('#quantity{{ $product->id }}').value, '{{ $product->id }}', '{{ $product->product_code }}', '{{ $product->full_title }}', {{ $product->price }}, {{ $product->discounted_price }}, {{ $product->discounted_percentage ?? 0 }}, '{{ $product->ParentCategory->slug }}','{{ $product->image_path }}'
                                                        )"
                                >Add to Cart</button>
                            </div>
                        </div>
                      
                    </div>
                     @endforeach
                    
                </div>
            </div>


            <!-- <div class="col-lg-9 col-12 mt-md-3">
                <div class="table-responsive custom-scrollbar">
                <table class="table table-bordered">
                    <thead>
                        <th>Short Title</th>
                        <th>Image</th>
                        <th>Product Code</th>
                        <th>Dimensions</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Style</th>
                        <th>Colour</th>
                        <th>Assembly</th>
                    </thead>
                    <tbody id="products_container">
                        @if ($products->count() > 0)
                            @foreach ($products as $index => $product)
                                <tr>
                                    <td><a class="text-decoration-underline" href="{{ route('orderbyproduct', [$product->slug, $product->serial_number]) }}">{{ $product->short_title }}</a></td>
                                    <td>
                                        <a href="{{ route('orderbyproduct', [$product->slug, $product->serial_number]) }}">
                                            <figure class="my-0" style="margin-bottom: 0px !important;">
                                                <img class="product-image px-0"
                                                    style="margin-bottom: 0px !important;min-height:175px;max-height:175px;max-width:225px;object-fit:contain"
                                                    src="{{ !empty($product->image_path) ? asset('imgs/products/'.$product->image_path) : asset('images/no-image-available.jpg') }}"
                                                    alt="Card image cap" data-bs-toggle="modal"
                                                    data-bs-target="#productModal{{ $index }}">
                                            </figure>
                                        </a>
                                    </td>
                                    <td>{{ $product->product_code }}</td>
                                    <td>{{ $product->dimensions }}</td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <div
                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center product-counter">
                                                <input id="minus{{ $product->id }}"
                                                    class="minus border bg-dark text-light p-0"
                                                    type="button" value="-"
                                                    onclick="decreaseQuantity('{{ $product->id }}', '{{ $product->product_code }}', '{{ $product->full_title }}', {{ $product->price }}, {{ $product->discounted_price }}, {{ $product->discounted_percentage ?? 0 }}, '{{ $product->ParentCategory->slug }}')" />
                                                <input id="quantity{{ $product->id }}"
                                                    class="quantity border border-black text-center"
                                                    type="text" value="0" name="quantity"
                                                    oninput="inputQty(this.value, '{{$product->id}}', 
                                                    '{{$product->product_code}}',
                                                    '{{ $product->full_title }}', '{{ $product->price }}', '{{ $product->discounted_price }}', 
                                                    '{{ $product->discounted_percentage }}')" />
                                                <input id="plus{{ $product->id }}"
                                                    class="plus border bg-dark text-light p-0"
                                                    type="button" value="+" type="number"
                                                    max="10"
                                                    {{$product->price == 0 ? 'disabled' : '' }} 
                                                    onclick="increaseQuantity('{{ $product->id }}', '{{ $product->product_code }}', '{{ $product->full_title }}', {{ $product->price }}, {{ $product->discounted_price }}, {{ $product->discounted_percentage ?? 0 }}, '{{ $product->ParentCategory->slug }}')" />
                                            </div>
                                            {{-- <div class="col-6">
                                                <p class="fs-5 fw-bold mt-lg-2 text-dark">
                                                    {{ $product->price == 0 ? 'Out of Stock' : '£' . $product->price }}
                                                </p>
                                            </div> --}}
                                        </div>
                                    </td>
                                    <td>{{ $product->price == 0 ? 'Out of Stock' : '£' . $product->price }}</td>
                                    <td>
                                        <div class="container-fluid">
                                            @if ($product->style)
                                                <small>{{ $product->style->name }}</small>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        @if ($product->colour)
                                            <small>
                                                {{ $product->colour->trade_colour ? $product->colour->trade_colour : $product->colour->name }}
                                            </small>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($category->name != 'DOORS')
                                        @if ($product->assembly)
                                            <small>{{ $product->assembly->name }}</small>
                                        @endif
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="alert alert-warning" role="alert">
                                    No products found.
                                </div>
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>
            </div> -->

            <div class="row justify-content-center">
                <div class="col-lg-3">
            <div id="custom-pagination-container">
                {{-- {{ $products->links() }} --}}
                {{-- <nav aria-label="...">
                    <ul class="pagination">
                        @for ($i = 1; $i <= $pages; $i++)
                            <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                <a class="page-link" href="javascript:void(0)"
                    data-page="{{ $i }}">{{ $i }}</a>
                </li>
                @endfor
                </ul>
                </nav> --}}
                <nav aria-label="...">
                    <ul class="pagination">
                        <!-- Back arrow -->
                        @if ($currentPage > 1)
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" data-page="{{ $currentPage - 1 }}">Back</a>
                        </li>
                        @endif

                        <!-- Page numbers -->
                        @php
                        $start = max(1, $currentPage - 4);
                        $end = min($pages, $currentPage + 4);
                        if ($end - $start < 4) {
                            $start=max(1, $end - 4);
                            $end=min($pages, $start + 4);
                            }
                            @endphp

                            @for ($i=$start; $i <=$end; $i++)
                            <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                            <a class="page-link" href="javascript:void(0)" data-page="{{ $i }}">{{ $i }}</a>
                            </li>
                            @endfor

                            <!-- Next arrow -->
                            @if ($currentPage < $pages)
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" data-page="{{ $currentPage + 1 }}">Next</a>
                                </li>
                                @endif
                    </ul>
                </nav>

            </div>
        </div>
    </div>
        </div>

        



        <div class="row">

            @if (count($category->testimonials) > 0)
            <section class="container-fluid py-5 bg-white" style="background-image: url({{asset('images/homepage.jpeg')}}); opacity: 2; border-bottom: 3px solid #ebc266; border-left: 3px solid #ebc266; padding: 20px; width: 100% !important; overflow: hidden">
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
                        @foreach ($category->testimonials as $testimonial)
                        <div class="item mx-10 px-0">
                            <div class="carousel-card card border border-warning" style="border-radius: 20px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                                <div class="card-body carousel-card-body">
                                    <div class="col-12 mb-4 d-flex justify-content-center">
                                        <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                                    </div>
                                    <!-- <div class="fw-bold text-center">
                                        Smith
                                    </div>
                                    <div class="text-center">
                                        <small class="text-center">2023-11-19</small>
                                    </div> -->
                                </div>
                                <div class="card-footer carousel-card-footer" style="border-radius: 20px;">
                                    <small class="text-dark text-center" style="font-size: 12px">
                                        {{$testimonial->testimonial}}
                                    </small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
            
            <!-- FAQs -->
            @include('frontend.faqs_component', ['faqsData' => $category->faqs])
            
        </div>
    </section>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class=" col-12">
                @include('frontend.inquiry_form')
                {{-- <form method="POST" action="{{ route('contact_us_inquiry') }}" class="border border-warning p-4">
                    @csrf
                    <div>
                        <div class="d-block">
                            <div class="text-center text-dark fw-bold">FOR FREE SURVEY AND QUOTE <span class="text-warning"> CALL US NOW!</span></div>
                             <div class="my-2 d-flex justify-content-center">
                                <a href="tel:02080505605" class="btn btn-warning text-decoration-underline text-center text-dark fs-4 fw-bold">
                                <i class="bi pt-2 me-2 bi-phone text-dark"></i> 
                                    020 805 05605
                                </a>
                            </div> 
                            
                        </div>
                    </div>
                    <h6 class="text-dark text-center fw-bold">OR</h6>
                    <hr class="border border-dark">

                    
                    <h4 id="blinking-text" class="bg-warning  fw-bold text-center py-2 rounded-pill">
                        Book a free consultation now!
                    </h4>
                    <hr class="border border-dark">
                    <div class="mb-3">
                        <input type="text" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <input type="email" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <input type="number" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="phone" id="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-white py-2 px-3  text-end fw-bold" style="background-color:#2a6161;" >Call US AT</label>
                        <input type="datetime-local" style="color: black" class="border border-dark rounded-0 form-control text-dark" name="call_time">
                    </div>
                    <div class="mb-3">
                        <textarea name="message" id="message" name="message" rows="3" class="w-100 rounded-0 border border-dark form-control text-dark" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class=" btn py-2 px-4 rounded-0 fw-bolder text-uppercase text-white" style="background-color:#2a6161;">Submit</button>
                </form> --}}
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>


        <div class="modal fade" id="newsletterModalDoor" tabindex="-1" aria-labelledby="newsletterModalDoorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="newsletter-container">
                <button type="button" class="close-btn subscribed-close" data-bs-dismiss="modal" aria-label="Close">
                    &times;
                </button>
                 
                <div class="popup-image">
                    <img src="{{asset('images/main-popup-image.png')}}" class="img-fluid w-100" alt="">
                </div>
                <div class="newsletter-content">
                    <h2 class="content-title mt-5 text-black" style="font-size: 40px;">Subscribe To Get <span class="free-text">FREE On-Site Survey</span></h2>
                        
                    <p class="offer-text"><span class="discount-text">For your Peace of Mind, </span> expert installation is also provided<br> <span class="" style="color: green;">(Qoute Available)</span></p>
                        
                    <p class="terms-text">Terms & Conditions Applied.</p>
                    <div class="subscribe-container">
                        <input type="email" id="emailInput" class="form-control news-letter-input" placeholder="Enter Your Email">
                        <button class="subscribe-btn" id="subscribeBtnDoor" onclick="newsletterModalDoorFn()">Subscribe</button>
                    </div>
                    <p class="privacy-text">We respect your Privacy. Unsubscribe at any time.</p>
                </div>

                
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="thankyouModal" tabindex="-1" aria-labelledby="thankyouModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="butn-close close-btn" data-bs-dismiss="modal" aria-label="Close">X</button>
    </div>
    <div class="modal-body p-3">
      <div class="row mb-4">
        <div class="col-12">
          <h1><span class="thank-you">Thank You</span> <span class="for-subscribing">For Subscribing!</span></h1>
        </div>
      </div>
      
      <div class="row mb-3">
        <div class="col-12">
          <p class="fs-5 mb-0">We've sent the <strong>Discount Code</strong> to your <strong>email address</strong>.</p>
        </div>
      </div>
      
      <div class="row mb-4">
        <div class="col-12">
          <p class="fs-4">Additionally, <span class="youve-won">YOU'VE WON</span> <span class="free-text">FREE</span> <span class="consultation">CONSULTATION!</span></p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-7 mb-4">
          <p class="fs-5 mb-3">If you want to avail this offer, Please provide:</p>
          
          <form>
            <input type="text" class="form-control thankyou-input" placeholder="Your Name:">
            <input type="tel" class="form-control thankyou-input" placeholder="Phone Number:" pattern="[0-9]+" inputmode="numeric">
            <input type="datetime-local" class="form-control thankyou-input" placeholder="Preferred Date & Time:">
            <textarea class="form-control thankyou-input" rows="3" placeholder="Add a Note:"></textarea>
            
            <button type="submit" class="submit-btn mt-3">Submit</button>
          </form>
        </div>
        
        <div class="col-md-5">
          <div class="benefits-box">
            <p class="benefits-title mb-4">BENEFITS OF <span style="color: #ffa500;">FREE CONSULTATION</span>:</p>
            
            <ul class="list-unstyled">
              <li class="benefit-item">• <span class="highlight-text">FREE</span> Virtual Consultation</li>
              <li class="benefit-item">• <span class="highlight-text">FREE</span> Design Advice</li>
              <li class="benefit-item">• <span class="highlight-text">FREE</span> Efficient Planning</li>
              <li class="benefit-item">• Schedule at your <span class="convenience-text">CONVENIENCE</span></li>
              <li class="benefit-item">• <span class="highlight-text">NO OBLIGATION</span> to Purchase</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>






    @push('scripts')
    <script>



    function newsletterModalDoorFn(){
        document.getElementById('subscribeBtnDoor').addEventListener('click',function(){
            console.log("btn clicked")
            const emailInput = document.getElementById('emailInput');
            const email = emailInput.value.trim();
            console.log(email);
            // Basic email validation
            if (email && email.includes('@') && email.includes('.')) {
                // Hide newsletter modal
                var newsletterModalDoor = bootstrap.Modal.getInstance(document.getElementById('newsletterModalDoor'));
                newsletterModalDoor.hide();
                
                // Show discount modal after a short delay
                setTimeout(function() {
                    var thankyouModal = new bootstrap.Modal(document.getElementById('thankyouModal'));
                    // discountModal.show();
                    sendEmail();
                    thankyouModal.show();
                    
                }, 500);
            } else {
                // Simple error visual
                emailInput.style.borderColor = '#ef4444';
                setTimeout(() => {
                    emailInput.style.borderColor = '#fde68a';
                }, 2000);
            }
            localStorage.setItem('subscribed', true);
        });
    }







    $(document).ready(function () {            
        
        var slug = $('#slug').val();

        $(document).on('click', '.style-filter', function() {
            var styleIds = [];
            $('.style-filter').each(function() {
                if ($(this).is(':checked')) {
                    styleIds.push($(this).attr('data-style-id'));
                }
            });
            $.ajax({
                url: "{{ route('ordercomponent_filter') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    style_ids: styleIds,
                    slug: slug
                },
                success:function(response) {
                    if (response.status == true) {
                        var _htmlColours = '';
                        response.colours.forEach((colr, index) => {
                            _htmlColours += `
                                <div class="col-lg-12 col-md-12 col-6">
                                    <div class="form-check form-check-inline">
                                        <input data-colour-id="${colr.id}"  class="form-check-input colour-filter" type="checkbox"
                                            name="colours[]" id="colour${index}"
                                            value="${colr.id}">`;
                                            if (colr.colour_code != '' || colr.colour_code != undefined) {
                                                _htmlColours += `<label class="form-check-label d-flex gap-1" for="colour${index}">
                                                    <div class="d-inline border border-dark"
                                                        style="border-radius: 50px; width: 20px;height:20px; background-color:${colr.colour_code};">
                                                    </div>
                                                    ${ colr.trade_colour ? colr.trade_colour : colr.name }
                                                </label>`;
                                            } else {
                                                _htmlColours += `<label class="form-check-label d-flex gap-1" for="colour${index}">
                                                    <div class="border border-dark" style="border-radius: 50px; width: 20px;height:20px; background: linear-gradient(to right, red, yellow, green);">
                                                    </div>
                                                    ${ colr.trade_colour ? colr.trade_colour : colr.name }
                                                </label>`;
                                            }
                                    _htmlColours += `</div>
                                </div>
                            `;
                        });
                        $('#colours-filter').html(_htmlColours);
                        var _htmlHeights = '';
                        response.heights.forEach((hght, index) => {
                            _htmlHeights += `
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input data-heights-id="${hght.height}" class="form-check-input height-filter" type="checkbox"
                                            name="heights[]" id="height${index}"
                                            value="${hght.height}">
                                        <label class="form-check-label"
                                            for="height${index}">
                                            ${hght.height}
                                        </label>
                                    </div>
                                </div>
                            `;
                        });
                        $('#heights-filter').html(_htmlHeights);
                        var _htmlWidths = '';                            
                        response.sizes.forEach((wdth, index) => {
                            _htmlWidths += `
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input data-widths-id="${wdth.id}" class="form-check-input width-filter" type="checkbox"
                                            name="widths[]" id="width${index}"
                                            value="${wdth.width}">
                                        <label class="form-check-label"
                                            for="width${index}">
                                            ${wdth.width}
                                        </label>
                                    </div>
                                </div>
                            `;
                        });
                        $('#widths-filter').html(_htmlWidths);
                    }
                }
            });
        });
        
        $(document).on('click', '.colour-filter', function() {
            var slug = $('#slug').val();
            var styleIds = [];
            $('.style-filter').each(function() {
                if ($(this).is(':checked')) {
                    styleIds.push($(this).attr('data-style-id'));
                }
            });
            var selectedColors = [];
            $('.colour-filter').each(function() {
                if ($(this).is(':checked')) {
                    selectedColors.push($(this).attr('data-colour-id'));
                }
            });
            
            $.ajax({
                url: orderComponent_filter,
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    colour_style_ids: styleIds,
                    colour_ids: selectedColors,
                    slug: slug
                },
                success:function(response) {
                    if (response.status == true) {
                        var _html = '';
                        response.heights.forEach((hght, index) => {
                            _html += `
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input data-heights-id="${hght.height}" class="form-check-input height-filter" type="checkbox"
                                            name="heights[]" id="height${index}"
                                            value="${hght.height}">
                                        <label class="form-check-label"
                                            for="height${index}">
                                            ${hght.height}
                                        </label>
                                    </div>
                                </div>
                            `;
                        });
                        $('#heights-filter').html(_html);
                        var _htmlWidths = '';                            
                        response.sizes.forEach((wdth, index) => {
                            _htmlWidths += `
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input data-widths-id="${wdth.id}" class="form-check-input width-filter" type="checkbox"
                                            name="widths[]" id="width${index}"
                                            value="${wdth.width}">
                                        <label class="form-check-label"
                                            for="width${index}">
                                            ${wdth.width}
                                        </label>
                                    </div>
                                </div>
                            `;
                        });
                        $('#widths-filter').html(_htmlWidths);
                    }
                }
            });
        });
        
        $(document).on('click', '.height-filter', function() {
            var slug = $('#slug').val();
            var styleIds = [];
            $('.style-filter').each(function() {
                if ($(this).is(':checked')) {
                    styleIds.push($(this).attr('data-style-id'));
                }
            });
            var selectedColors = [];
            $('.colour-filter').each(function() {
                if ($(this).is(':checked')) {
                    selectedColors.push($(this).attr('data-colour-id'));
                }
            });
            var selectedHeights = [];
            $('.height-filter').each(function() {
                if ($(this).is(':checked')) {
                    selectedHeights.push($(this).attr('data-heights-id'));
                }
            });
            $.ajax({
                url: orderComponent_filter,
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    height_style_ids: styleIds,
                    height_colour_ids: selectedColors,
                    height_ids: selectedHeights,
                    slug: slug
                },
                success:function(response) {
                    if (response.status == true) {
                        var _html = '';
                        console.log(response.sizes, 'widths');
                        
                        response.sizes.forEach((wdth, index) => {
                            _html += `
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input data-widths-id="${wdth.id}" class="form-check-input width-filter" type="checkbox"
                                            name="widths[]" id="width${index}"
                                            value="${wdth.width}">
                                        <label class="form-check-label"
                                            for="width${index}">
                                            ${wdth.width}
                                        </label>
                                    </div>
                                </div>
                            `;
                        });
                        $('#widths-filter').html(_html);
                    }
                }
            });
        });

    });
    var order_component_filter = '{{ route('order_component_filter', $category->slug) }}';
    var orderComponent_filter = '{{ route('ordercomponent_filter') }}';
    let selectedHeights = [];

    function toggleHeightSelection(button) {
        const heightId = button.getAttribute('data-height-id');

        // Toggle selected state
        if (selectedHeights.includes(heightId)) {
            selectedHeights = selectedHeights.filter(id => id !== heightId);
            button.classList.remove('btn-success');
            button.classList.add('btn-primary');
        } else {
            selectedHeights.push(heightId);
            button.classList.remove('btn-primary');
            button.classList.add('btn-success');
        }

        // Update the hidden input with selected heights
        document.getElementById('selectedHeights').value = selectedHeights.join(',');
    }
</script>
<script src="{{ asset('js/order-component-by-name.js') }}"></script>
@endpush
</x-guest-layout>