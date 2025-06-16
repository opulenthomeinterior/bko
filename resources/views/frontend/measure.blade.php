<x-guest-layout>
    <head>
    <title>Need Help Measuring </title></head>
    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}" class="text-uppercase">Help & guides</a></li>
            </ol>
        </nav>

        <!-- <div class="row">
            <div class="col-12 text-center">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder">
                    NEED HELP MEASURING?
                </h1>
            </div>
        </div> -->
    </section>
    <section class="container-fluid mb-2 px-lg-5 py-5 px-md-3 px-3 bg-light">

    <div class="d-flex flex-row justify-content-center">
        <div class="row w-75">
            <div class="col-12 text-center">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder">
                NEED HELP MEASURING?
                </h1>
               
                <h4 class="text-dark pt-1">
                Getting the measurements right is crucial before placing your kitchen order to ensure everything fits perfectly. Accurate measurements form the foundation of your kitchen design, and we want to make the process as easy as possible for you.
                    </h5>
            </div>
        </div>
        </div>
    </section>

    <div class="position-relative">
        
    <div class="z-n2 bg-warning position-absolute" style="width:100%; top:40%; height:200px;"></div>
                <img src="{{ asset('images/order-component.jpg') }}" class="img-fluid" style="width:50%; transform:translateX(50%);" />
                
                </div>
                
    <section class="container-fluid px-lg-5 px-md-3 px-3">
    
        <div class="row mx-auto">
            <div class="col-lg-9 col-md-10 col-sm-12 mx-auto p-0">
                
                <br>
                <br>

                <!-- <h5 class="text-dark">
                Getting the measurements right is crucial before placing your kitchen order to ensure everything fits perfectly. Accurate measurements form the foundation of your kitchen design, and we want to make the process as easy as possible for you.
                </h5> -->
                <br>
                <h3 class="" style="color: #2a6161;">Start with the Kitchen Builder Tool</h4>
                <h5 class="text-dark">
                If you’re unsure where to begin, our intuitive <span class="color-yellow"> Kitchen Builder tool</span> is here to guide you. Simply input the overall dimensions of your kitchen and select your desired style. The tool will suggest kitchen layouts that best suit your space. It also accounts for any bespoke, made-to-measure units, taking the guesswork out of your measurements. From there, you can easily drag and drop units to customize the layout to your preference.
                </h5>
                <br>
                <h3 class="fw-bold" style="color: #2a6161;">Final Step: Lining Out Your Kitchen</h4>
                <h5 class="text-dark">
                Once your kitchen arrives, it’s important to line it out properly before fitting. We have helpful installation videos to walk you through this step, ensuring everything is aligned for a smooth installation. If you have any concerns about your measurements, our customer service team is here to assist you. Reach out to us at <b class="color-yellow">customerservices@bkonline.uk</b> for expert advice.
                </h5>
                <!-- <p class="text-dark pt-3">Not sure where to start? Our clever, easy to use Kitchen Builder tool will
                    help you work out the best use of your space. Simply choose your kitchen style, input the overall
                    measurements and our tool will recommend a kitchen for you. Our Kitchen Builder tool will factor in
                    if you require bespoke, made to measure units saving you the worry of measurements being incorrect.
                    You can then drag and drop units to suit your own preference.

                    Once your kitchen has arrived it is important that your kitchen is lined out prior to fitting.
                    Please refer to our Installation Videos section for a tutorial on how to line out your kitchen.

                    Alternatively you can contact customerservices@kitchenkit.co.uk if you have any measurement
                    concerns.</p> -->

            </div>
        </div>
    </section>

    {{ view('frontend.help-and-guides') }}

    {{-- <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
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
