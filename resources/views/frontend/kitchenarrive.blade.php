<x-guest-layout>

<head>
    <style>
               /* .image-container {
            position: relative;
            display: inline-block;
        }
        .image-container img {
            width: 100%;
            border-radius: 5px;
        }
        .image-overlay,.image-overlay-rigid {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100%;
            height: 100%;
            background-color: #FEBD49;
            
            z-index: -1;
        } */
        /* .image-overlay-rigid
        {
            background-color:#2A6161;
        } */
        .image-container {
            position: relative;
            /* display: flex;
            justify-content: center;
            align-items: center; */
        }
        .image-container img {
            width: 100%;
            /* max-width: 400px; */
            border-radius: 5px;
        }
        .image-overlay,.image-overlay-rigid {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100%;
            height: 100%;
            background-color: #FEBD49;
            
            z-index: -1;
        } 
        .image-overlay-rigid
        {
            background-color:#2a6161;
        }
        /* .image-overlay {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 90%;
            height: 90%;
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            z-index: -1;
        } */
        @media (max-width: 768px) {
            .image-container img {
                max-width: 100%;
            }
            .image-overlay {
                width: 100%;
                height: 100%;
                top: 0;
                left: 10;
            }
            
        }
        .last-section
        {
            /* background-color:red; */
            width:50%;
        }

    </style>
</head>
    {{--
    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a class="text-uppercase">Help & Guides</a></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-12 text-center">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder">
                    HOW WILL MY KITCHEN ARRIVE?
                </h1>
                <!-- <h4 class="text-dark">
                    Having been making, packing and distributing kitchens, we have developed trusted methods
                    to get what it is you need, to where you need it.
                </h4> -->
            </div>
        </div>
    </section>

    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3" style="background-color: #f0f0f0;">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <!-- <h2 class="text-dark fw-bold text-uppercase">TRUSTED METHODS, TRUSTED PARTNERS</h2> -->
                At Buy Kitchen Online, the most important thing for us is to deliver your kitchen safely and on time. With our years of experience in delivering kitchens, we make sure that every component of your kitchen is packed securely and reaches you in primal condition. 
                <br>
                <br>
<ul>
    <li>Flat-Pack Kitchens: When you choose a flat-pack kitchen, we partner with trusted and reliable couriers like DX to deliver your kitchen in the perfect condition. Each part is packed using protective material like cardboard and polystyrene to prevent any damage during the transport. Larger items are secured onto pallets for safe delivery. The plinths and multi-rails are always delivered separately, in long bundles, also carefully wrapped. </li>
    <br>
    <li>
Rigid Kitchens: For the delivery of Rigid Kitchens, we work with our reliable partners like TDL to ensure that your kitchen is packed and delivered with care. Items are securely wrapped in shrink wrap and placed on pallets to prevent damage. The plinths and multi-rails are sent separately as long bundles. 
    </li>
</ul>
                <br>
Every order is handled with the utmost care, ensuring that all components of your kitchen are in excellent condition when they arrive at your doorstep. Whether flat-packed or rigid, our dedicated delivery process is designed to give you peace of mind from the moment you order to the moment you begin installation.



            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <img src="{{ asset('images/order-component.jpg') }}" class="img-fluid" />
            </div>
        </div>
    </section>
--}}


<section class="container-fluid px-lg-5 py-4 px-md-3 px-3 bg-light">
        <div class="row justify-content-center">
            <div class="col-7 text-center">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder pt-5">
                HOW WILL MY KITCHEN ARRIVE?
                </h1>
                
                <h4 class="text-dark pt-1">
                At Buy Kitchen Online, the most important thing for us is to deliver your kitchen safely and on time. With our years of experience in delivering kitchens, we make sure that every component of your kitchen is packed securely and reaches you in primal condition. 
                    </h5>
            </div>
        </div>
    </section>


    <div class="container py-5">
        <div class="row align-items-center mb-5 flex-column-reverse flex-md-row">
            <div class="col-md-6 text-center text-md-start">
                <h3 class="text fw-bold mt-4">FLAT-PACK KITCHENS</h3>
                <p>When you choose a flat-pack kitchen, we partner with trusted and reliable couriers like DX to deliver your kitchen in the perfect condition. Each part is packed using protective material like cardboard and polystyrene to prevent any damage during the transport. Larger items are secured onto pallets for safe delivery. The plinths and multi-rails are always delivered separately, in long bundles, also carefully wrapped.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <div class="image-container">
                    {{-- <img src="{{ asset('/images/flat-pack-kitchen.png') }}" alt="Flat-Pack Kitchen" class="img-fluid"> --}}
                    <img class="" src="{{ asset('images/flat-pack-kitchen.png') }}" style="box-shadow: 17px 16px 0px 0px rgba(254,189,73,0.75);" />
                   
                    {{-- <div class="image-overlay"></div> --}}
                </div>
            </div>
        </div>

        {{-- <div class="row align-items-center flex-column-reverse flex-md-row-reverse"> --}}
        <div class="row align-items-center flex-column flex-lg-row">
            
            <div class="col-md-6">
                <div class="image-container">
                    {{-- <img src="{{ asset('/images/rigid-kitchen.png') }}" alt="Rigid Kitchen" class="img-fluid"> --}}
                    <img class="" src="{{ asset('images/rigid-kitchen.png') }}" style="width:500px; height:500px; object-fit:cover; box-shadow: -35px 16px 0px 0px rgba(42, 97, 97,0.75);" />
                       
                </div>
            </div>
            <div class="col-md-6 text-center text-md-start">
                <h3 class="text-primary fw-bold mt-4">RIGID KITCHENS</h3>
                <p>For the delivery of Rigid Kitchens, we work with our reliable partners like TDL to ensure that your kitchen is packed and delivered with care. Items are securely wrapped in shrink wrap and placed on pallets to prevent damage. The plinths and multi-rails are sent separately as long bundles.</p>
            </div>
        </div>
    </div>

    <div class="container text-center mt-5 last-section">
        <p>Every order is handled with the utmost care, ensuring that all components of your kitchen are in excellent condition when they arrive at your doorstep. Whether flat-packed or rigid, our dedicated delivery process is designed to give you peace of mind from the moment you order to the moment you begin installation.</p>
    </div>


    {{-- <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h3 class="fw-bold" style="color:#2A6161">FLAT-PACK KITCHENS</h3>
                <p>When you choose a flat-pack kitchen, we partner with trusted and reliable couriers like DX to deliver your kitchen in the perfect condition. Each part is packed using protective material like cardboard and polystyrene to prevent any damage during the transport. Larger items are secured onto pallets for safe delivery. The plinths and multi-rails are always delivered separately, in long bundles, also carefully wrapped.</p>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src=" {{ asset('/images/flat-pack-kitchen.png') }}" alt="Flat-Pack Kitchen" class="img-fluid">
                    <div class="image-overlay"></div>
                </div>
            </div>
        </div>

        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6">
                <h3 class="text-primary fw-bold">RIGID KITCHENS</h3>
                <p>For the delivery of Rigid Kitchens, we work with our reliable partners like TDL to ensure that your kitchen is packed and delivered with care. Items are securely wrapped in shrink wrap and placed on pallets to prevent damage. The plinths and multi-rails are sent separately as long bundles.</p>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src=" {{ asset('/images/rigid-kitchen.png') }}" alt="Rigid Kitchen" class="img-fluid">
                    <div class="image-overlay-rigid"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center mt-5">
        <p>Every order is handled with the utmost care, ensuring that all components of your kitchen are in excellent condition when they arrive at your doorstep. Whether flat-packed or rigid, our dedicated delivery process is designed to give you peace of mind from the moment you order to the moment you begin installation.</p>
    </div> --}}


    {{ view('frontend.help-and-guides') }}

    {{-- <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <div class="row py-3">
            <div class="col-lg-6 py-lg-0 py-md-3 py-4">
                <h2 class="text-uppercase fw-bolder text-dark">Help & Guides</h2>
            </div>
        </div>
        <div class="row slick-slider">
            <div class="px-3">
                <a href="#">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card-body">
                            <h3 class="fw-bold text-dark text-uppercase">Kitchen Terminology</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="px-3">
                <a href="#">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card-body h-100">
                            <h3 class="fw-bold text-dark text-uppercase">How will my kitchen arrive?</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="px-3">
                <a href="#">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card-body h-100">
                            <h3 class="fw-bold text-dark text-uppercase">Buy Kitchen Online faqs</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="px-3">
                <a href="#">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card-body">
                            <h3 class="fw-bold text-dark text-uppercase">Fitting guides</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="px-3">
                <a href="#">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card-body">
                            <h3 class="fw-bold text-dark text-uppercase">Need help measuring?</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="px-3">
                <a href="#">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="{{ asset('/images/Strada-matt-porcelain-kitchen.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card-body">
                            <h3 class="fw-bold text-dark text-uppercase">Virtual Design Service</h3>
                            <p>Having been making, packing and distributing kitchens, we have developed
                                trusted
                                methods to get what it is you need, to where you need it.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>


    </section> --}}

</x-guest-layout>
