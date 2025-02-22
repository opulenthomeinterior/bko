<x-guest-layout>
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
                At BK Online, the most important thing for us is to deliver your kitchen safely and on time. With our years of experience in delivering kitchens, we make sure that every component of your kitchen is packed securely and reaches you in primal condition. 
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
                            <h3 class="fw-bold text-dark text-uppercase">BK Online faqs</h3>
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
