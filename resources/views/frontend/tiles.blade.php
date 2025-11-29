@extends('frontend.layouts.app')
@section('content')
@section('styles')
<style>
    /* Minimal, embedded styles to keep layout readable while remaining a single HTML file */
    .product-card { max-width:360px; border:1px solid #e6e6e6; padding:16px; border-radius:6px; }
    .option-box { border:1px solid #ddd; padding:10px; border-radius:4px; min-height:60px; background:#fafafa; }
    .calculator { border:1px solid #eee; padding:8px; border-radius:4px; }
    .calculator input[type="text"] { width:100%; padding:8px; box-sizing:border-box; margin-bottom:8px; }
    .muted { color:#666; font-size:13px; margin:12px 0; }
    .purchase-row { display:flex; gap:8px; margin-bottom:10px; }
    .purchase-row .col { flex:1; }
    .sample-note { text-align:center; margin-top:14px; color:#333; font-weight:600; }
    img.sample-ref { width:100%; border-radius:4px; margin-bottom:12px; object-fit:cover; }
  </style>
@endsection


<div class="ltn__utilize-overlay"></div>

<!-- SLIDER AREA START (slider-11) -->
<div class="ltn__slider-area ltn__slider-11 ltn__slider-11-slide-item-count-show--- ltn__slider-11-pagination-count-show--- section-bg-0">
    <div class="ltn__slider-11-inner">
        <div class="ltn__slider-11-active">
            <!-- slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3 ltn__slide-item-11">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> BUY TILES ONLINE</h6>
                                        <h1 class="slide-title animated "><span>Best</span> of both worlds</h1>
                                        <div class="slide-brief animated">
                                            <p>The Best-Selling tile in UK. Guaranteed on-time, damage free delivery</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="#" class="theme-btn-1 btn btn-effect-1" data-bs-toggle="modal" data-bs-target="#kitchenModal">Buy now & Get 10% OFF</a>
                                            <a href="#" class="theme-btn-2 btn btn-effect-2" data-bs-toggle="modal" data-bs-target="#kitchenModal">Order your free sample</a>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="#" class="btn btn-effect-1">Damage free guarantee</a>
                                            <a href="#" class="btn btn-effect-2">Next day delivery available</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{ asset('assets/img/tiles/4 (1).jpg') }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-4-pagination -->
        <div class="ltn__slider-11-pagination-count">
            <span class="count"></span>
            <span class="total"></span>
        </div>
        
        <div class="ltn__slider-11-img-slide-arrow">
            <div class="ltn__slider-11-img-slide-arrow-inner">
                <div class="ltn__slider-11-img-slide-arrow-active">
                    <!-- <div class="image-slide-item">
                        <img src="{{ asset('assets/img/tiles/4 (1).jpg') }}" alt="Flower Image">
                    </div> -->
                </div>
                <!-- slider-4-slide-item-count -->
                <div class="ltn__slider-11-slide-item-count">
                    <span class="count"></span>
                    <span class="total"></span>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- SLIDER AREA END -->

<div class="ltn__feature-area section-bg-1 pt-115 pb-90 mb-120---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h1 class="section-title">Tired of broken tiles, Late Deliveries and Poor Services?</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter---  justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house"></i></span> -->
                        <img src="{{asset('assets/img/tiles/guarantee.jpg')}}" height="100px" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="#">Zero damage guarantee</a></h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 active">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house-3"></i></span> -->
                        <img src="{{asset('assets/img/tiles/on_time.jpg')}}" height="100px" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="#">On Time, Every Time</a></h3>
                        <p>Choose your delivery slot and get live tracking updates</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-deal-1"></i></span> -->
                        <img src="{{asset('assets/img/tiles/expert.png')}}" height="100px" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3 class="animated fadeIn"><a href="#">Expert Help</a></h3>
                        <p>Real tiles experts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__about-us-area section-bg-0 pt-120 pb-90 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-30">
                        <h1 class="section-title">Product Details</h1>
                        <div>
                            <img src="{{ asset('assets/img/tiles/5.jpg') }}" alt="">
                        </div>
                    </div>
                    <ul class="ltn__list-item-2 ltn__list-item-2-before--- ltn__list-item-2-img mb-50 d-flex justify-content-center">
                        <li>
                            <a href="#" data-rel="lightcase:myCollection">
                                <img src="{{ asset('assets/img/tiles/5.jpg') }}" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-rel="lightcase:myCollection">
                                <img src="{{ asset('assets/img/tiles/5.jpg') }}" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-rel="lightcase:myCollection">
                                <img src="{{ asset('assets/img/tiles/5.jpg') }}" alt="Image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            {{--<div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-right">
                    <h5>Product Specification</h5>

                    <div class="product-card" role="region" aria-label="Product purchase options">
                        <!-- Optional image reference (uses uploaded local path) -->
                        <img class="sample-ref" src="/mnt/data/0573f554-930e-4319-a36e-378731ccea98.png" alt="Product panel reference">

                        <!-- Size / Options / Calculator -->
                        <div class="row" style="align-items:flex-start;">
                        <div class="col" style="flex:0 0 40%;">
                            <label>Size</label>
                            <div class="option-box">—</div>

                            <label style="margin-top:10px;">Material</label>
                            <div class="option-box">uuc</div>

                            <label style="margin-top:10px;">Finish</label>
                            <div class="option-box">—</div>
                        </div>

                        <div class="col" style="flex:0 0 30%;">
                            <label>Squ</label>
                            <div class="option-box">uuc<br>Fibrele</div>
                        </div>

                        <div class="col" style="flex:0 0 30%;">
                            <label>Calculator</label>
                            <div class="calculator" aria-label="calculator">
                            <input type="text" placeholder="Enter sQur" aria-label="Calculator input">
                            <div style="display:flex; gap:6px;">
                                <input type="text" value="Both Dators" readonly style="flex:1; padding:8px; border:1px solid #ddd; border-radius:4px;">
                                <input type="text" value="Thick ness" readonly style="flex:1; padding:8px; border:1px solid #ddd; border-radius:4px;">
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Additional product details -->
                        <label>Slip Rating</label>
                        <div class="option-box">—</div>

                        <label style="margin-top:10px;">Thickness</label>
                        <div class="option-box">—</div>

                        <p class="muted">All tiles for this order are guaranteed to come from the same production batch.</p>

                        <!-- Purchase Options -->
                        <h3 style="font-size:16px; margin:12px 0 8px;">Purchase Options</h3>

                        <div class="purchase-row" style="margin-bottom:12px;">
                        <div class="col">
                            <label for="quantity">Quantity</label>
                            <select id="quantity" name="quantity" aria-label="Choose quantity">
                            <option>Choose quantity in boxes</option>
                            <option>1 box</option>
                            <option>2 boxes</option>
                            <option>3 boxes</option>
                            <option>4 boxes</option>
                            </select>
                        </div>

                        <div class="col">
                            <label for="finish-color">Finish/Colour</label>
                            <select id="finish-color" name="finish-color" aria-label="Finish or colour">
                            <option>Ee-d.</option>
                            <option>Matte</option>
                            <option>Gloss</option>
                            <option>Textured</option>
                            </select>
                        </div>
                        </div>

                        <div style="margin-bottom:8px;">
                        <button class="btn" type="button" aria-label="Add to basket">★ ADD TO BASKET</button>
                        </div>

                        <p class="sample-note">Still Undecided? Order Your Generous, Free Sample Today!</p>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
</div>

<div class="modal fade" id="kitchenModal" tabindex="-1" aria-labelledby="kitchenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="p-4 rounded bg-white">
                    <form method="POST" action="{{ route('contact_us_inquiry') }}">
                        @csrf

                        <input type="text" class="form-control mb-3" placeholder="Name" name="name" required>
                        <input type="email" class="form-control mb-3" placeholder="Email" name="email" required>
                        <input type="number" class="form-control mb-3" placeholder="Phone" name="phone" required>
                        <input type="number" class="form-control mb-3" placeholder="Postcode" name="postcode" required>

                        <div class="input-item">
                            <select class="nice-select w-100 mb-3" name="message" required>
                                <option>Select Kitchen Type</option>
                                <option>J Pull Kitchen</option>
                                <option>Shaker Kitchen</option>
                                <option>Slab Edged Kitchen</option>
                                <option>True Handleless Kitchen</option>
                                <option>J Pull 22mm Kitchen</option>
                                <option>Shaker 22mm Kitchen</option>
                                <option>Slab Painted Kitchen</option>
                                <option>True Handleless Painted Kitchen</option>
                                <option>Budget Kitchen</option>
                            </select>
                        </div>

                        <button class="btn btn-dark w-100" type="submit">
                            Start Designing My Dream Kitchen
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection