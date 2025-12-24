@extends('layouts.guest2')
@section('content')
    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <div class="row">
            <div class="col-12">
                <h1 class="text-dark text-uppercase fw-bolder text-center">
                    Terms and Conditions
                </h1>
            </div>
        </div>
    </section>

    <section class="container-fluid px-lg-5 px-md-3 px-3 py-lg-5 py-3" style="background-color: #f0f0f0;">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="fw-bolder text-dark text-uppercase py-2">DOWNLOAD THE TERMS AND CONDITIONS</h4>
                <p class="py-2">To download the terms and condition of our website <a href="#">click this link
                        here</a></p>

                <h4 class="fw-bolder text-dark text-uppercase py-2">More terms and conditions</h4>
            </div>
<hr>
            <div class="col-lg-4 col-md-6 col-12 py-1">
                <a href="{{ route('promotion') }}">
                    <div class="card card-hover">
                        <div class="card-header pb-0">
                            <h4 class="fw-bolder text-dark text-uppercase">promotion terms & conditions</h4>
                        </div>
                        <div class="card-body py-3">
                            <p>Terms and contitions for promotions on Buy Kitchen Online website</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-12 py-1">
                <a href="{{ route('pricebeat') }}">
                    <div class="card card-hover">
                        <div class="card-header pb-0 pt-2">

                            <h4 class="fw-bolder text-dark text-uppercase">WE CAN’T BE BEATEN ON PRICE: TERMS AND
                                CONDITION
                            </h4>
                        </div>
                        <div class="card-body py-0">
                            <p>All Terms and Conditions for our We Can't Be Beaten on Price guarantee, which commenced
                                in June 2023.</p>
                        </div>
                    </div>
                </a>

            </div>

            <div class="col-lg-4 col-md-6 col-12 py-1">
                <a href="{{ route('pricepromise') }}">
                    <div class="card card-hover">
                        <div class="card-header pb-0">
                            <h4 class="fw-bolder text-dark text-uppercase mb-0">
                                Price Promise Guarantee: Terms & Conditions
                            </h4>
                        </div>
                        <div class="card-body py-0">
                            <p>Terms and Conditions for Price Promise Guarantee on KitchenKit website.</p>
                        </div>
                    </div>
                </a>

            </div>

            <div class="col-lg-4 col-md-6 col-12 py-1">
                <a href="{{ route('virtualdesignterm') }}">
                    <div class="card card-hover">
                        <div class="card-header pb-0">
                            <h4 class="fw-bolder text-dark text-uppercase">
                                Virtual Design Service: Terms & Conditions
                            </h4>
                        </div>
                        <div class="card-body py-0">
                            <p>
                                The terms and conditions for the Virtual Design Service, applicable since March 2023
                            </p>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </section>
@endsection