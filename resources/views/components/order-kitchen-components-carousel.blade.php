{{-- ORDER KITCHEN CAROUSEL START --}}
<div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7 bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Kitchens</h6>
                    <h1 class="section-title">ORDER KITCHEN</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
            <button class="slick-prev slick-arrow" aria-label="Previous" type="button">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slick-next slick-arrow" aria-label="Next" type="button">
                <i class="fas fa-chevron-right"></i>
            </button>
            @foreach ($styles as $key => $style)
            <!-- ltn__product-item -->
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <a href="#"><img src="{{asset('imgs/styles/'.$style->image_path)}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green">{{$style->name}}</li>
                            </ul>
                        </div>
                        <div class="product-img-location-gallery">
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="#"><i class="flaticon-pin"></i> Premium Design</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="product-img-gallery">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-camera"></i> 4</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-film"></i> 2</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="{{route('orderkitchenbyname', ['style' => $style->name])}}">{{$style->name}}</a></h2>
                        <div class="product-description">
                            <p>Beautiful Modern {{$style->name}} Design</p>
                        </div>
                        <!-- <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li><span>3 <i class="flaticon-bed"></i></span>
                                Styles
                            </li>
                            <li><span>2 <i class="flaticon-clean"></i></span>
                                Colors
                            </li>
                            <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                Options
                            </li>
                        </ul> -->
                    </div>
                    <!-- <div class="product-info-bottom">
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="#"><img src="{{ asset('assets/img/blog/author.jpg') }}" alt="#"></a>
                            </div>
                            <div class="agent-brief">
                                <h6><a href="#">Expert Designer</a></h6>
                                <small>Kitchen Specialist</small>
                            </div>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Product Details">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- ltn__product-item -->
            @endforeach
        </div>
    </div>
</div>
<!-- ORDER KITCHEN CAROUSEL END -->
@php
    $categories = \App\Models\Category::where('parent_category_id', null)->where('status', 1)->whereNotIn('id', [2, 3, 4, 5, 7, 13, 16])->get();
@endphp

{{-- ORDER COMPONENTS CAROUSEL START --}}
<div class="ltn__product-slider-area ltn__product-gutter pt-80 pb-90 plr--7 section-bg-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Components</h6>
                    <h1 class="section-title">ORDER COMPONENTS</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
            <button class="slick-prev slick-arrow" aria-label="Previous" type="button">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slick-next slick-arrow" aria-label="Next" type="button">
                <i class="fas fa-chevron-right"></i>
            </button>
            @foreach($categories as $category)
            <!-- ltn__product-item -->
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img" style="height: 350px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                        <a href="#"><img src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green">{{Str::limit($category->name, 13)}}</li>
                            </ul>
                        </div>
                        <div class="product-img-location-gallery">
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="#"><i class="flaticon-pin"></i> High Quality</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="product-img-gallery">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-camera"></i> 4</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-film"></i> 2</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="{{route('ordercomponentbyname', [strtolower($category->slug)])}}">{{Str::limit($category->name, 13)}}</a></h2>
                        <div class="product-description">
                            <p>Premium Quality {{Str::limit($category->name, 13)}}</p>
                        </div>
                        <!-- <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li><span>10 <i class="flaticon-bed"></i></span>
                                Sizes
                            </li>
                            <li><span>5 <i class="flaticon-clean"></i></span>
                                Colors
                            </li>
                            <li><span>50 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                Styles
                            </li>
                        </ul> -->
                    </div>
                    <!-- <div class="product-info-bottom">
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="#"><img src="{{ asset('assets/img/blog/author.jpg') }}" alt="#"></a>
                            </div>
                            <div class="agent-brief">
                                <h6><a href="#">Component Expert</a></h6>
                                <small>Cabinet Specialist</small>
                            </div>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Product Details">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- ltn__product-item -->
            @endforeach
        </div>
    </div>
</div>
<!-- ORDER COMPONENTS CAROUSEL END -->
