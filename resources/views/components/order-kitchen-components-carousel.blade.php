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
            @foreach ($styles as $key => $style)
            <!-- ltn__product-item -->
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img" style="height: 350px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                        <a href="{{route('orderkitchenbyname', ['style' => $style->slug])}}"><img src="{{asset('imgs/styles/'.$style->image_path)}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green">{{Str::limit($style->name, 13)}}</li>
                            </ul>
                        </div>
                        <div class="product-img-location-gallery">
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="{{route('orderkitchenbyname', ['style' => $style->slug])}}">{{Str::limit($style->name, 13)}}</a></h2>
                        <div class="product-description">
                            <p>Beautiful Modern {{Str::limit($style->name, 13)}}</p>
                        </div>
                    </div>
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

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter section-bg-1 pt-115 pb-90 plr--7">
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
            @foreach($categories as $category)
            <!-- ltn__product-item -->
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img" style="height: 350px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                        <a href="{{route('ordercomponentbyname', [strtolower($category->slug)])}}"><img src="{{ $category->image_path ? asset('imgs/categories/' . $category->image_path) : asset('images/no-image-available.jpg') }}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green">{{Str::limit($category->name, 13)}}</li>
                            </ul>
                        </div>
                        <div class="product-img-location-gallery">
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="{{route('ordercomponentbyname', [strtolower($category->slug)])}}">{{Str::limit($category->name, 13)}}</a></h2>
                        <div class="product-description">
                            <p>Premium Quality {{Str::limit($category->name, 13)}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            @endforeach
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->