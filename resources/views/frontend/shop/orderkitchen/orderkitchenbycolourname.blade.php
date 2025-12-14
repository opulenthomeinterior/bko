<x-guest-layout>
    @section('meta_tags')
        <title>{{$seo?->meta_title}}</title>
        <meta name="description" content="{{$seo?->meta_description}}">
        <link rel="canonical" href="{{$seo?->canonical_tag}}" />
        {!! $seo?->schema_code !!}
    @endsection
    <!-- Custom CSS -->
    <style>
        .breadcrumb-item a {
            color: #febd49;
            text-decoration: none;
        }
        .product-title {
            font-weight: 600;
        }
        .option-box {
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 8px 15px;
            margin-right: 10px;
            cursor: pointer;
        }
        .option-box.active {
            border-color: #febd49;
        }
        .color-dropdown {
            width: 100%;
            border: 1px solid #dee2e6;
        }
        .feature-icon {
            width: 80px;
            height: 80px;
            border: 1px solid #dee2e6;
            border-radius: 50%;
            padding: 15px;
            margin: 0 auto 15px;
        }
        .table th {
            background-color: #febd49;
        }
    </style>
    
    <div class="container py-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">HOME</a></li>
                <li class="breadcrumb-item"><a href="#">SHOP</a></li>
                <li class="breadcrumb-item active" aria-current="page">ORDER KITCHEN</li>
            </ol>
        </nav>

        <!-- Product Title -->
        <h1 class="product-title text-center my-4">{{ $styleHasColour->colour->trade_colour ?? '' }}</h1>

        <!-- Product Description -->
        <div class="row mb-5">
            <div class="col-12">
                <p class="text-center">
                    {!! $style->style_description !!}
                </p>
            </div>
        </div>

        <!-- Product Options -->
        <div class="row mb-5">
            <div class="col-md-6 mb-4">
                <h5>Assembly Options:</h5>
                <p>Please choose one</p>
                <div class="d-flex">
                    <a href="{{ route('orderkitchenbycolour', [$styleHasColour->style->slug ?? '', 'flat-pack', $styleHasColour->colour->slug ?? '']) }}" data-assembly-slug="flat-pack" class="option-box">Flat Pack</a>
                    <a href="{{ route('orderkitchenbycolour', [$styleHasColour->style->slug ?? '', 'rigid', $styleHasColour->colour->slug ?? '']) }}" data-assembly-slug="rigid" class="option-box">Rigid</a>
                </div>
                <div class="mt-4">
                    <h5>Other available Colours</h5>
                    <select class="form-select color-dropdown" id="colour-dropdown">
                        <option selected disabled>Select colour options</option>
                        @foreach (\App\Models\StyleHasColour::where('style_id', $styleHasColour->style_id ?? '')->where('status', 1)->get() as $colourOption)
                            <option value="{{ $colourOption->colour->slug ?? '' }}" {{ $styleHasColour->colour_id == $colourOption->colour_id ? 'selected' : '' }}>{{ $colourOption->colour->trade_colour ?? '' }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <h5>Finish:</h5>
                <div class="option-box active">{{ $styleHasColour->colour->finishing ?? '' }}</div>
                <p class="mt-2">This finish makes your kitchen reflective and smooth, making it easy to keep your surfaces clean.</p>
                <h5>Main Colour:</h5>
                <div class="option-box active mb-4">{{ $styleHasColour->colour->name ?? '' }}</div>
            </div>
        </div>

        <!-- Key Features -->
        @if (!empty($styleHasColour->colourPageContent) && (count($styleHasColour->colourPageContent) > 0))
            @php $firstContent = $styleHasColour->colourPageContent->first(); @endphp
            @if (isset($firstContent))
                <h2 class="text-center mb-4">{{ $firstContent->section_main_heading }}</h2>
                <div class="row mb-5">
                    <div class="col-md-12 mb-4">
                        {!! $firstContent->section_content !!}
                    </div>
                    <!-- <div class="col-md-6">
                        <h5>Dimensions of the Units</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Standard Unit Sizes Available</th>
                                        <th class="text-center">Width</th>
                                        <th class="text-center">Height</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Base Cabinets</td>
                                        <td>150mm-1000mm</td>
                                        <td>720mm</td>
                                    </tr>
                                    <tr>
                                        <td>Wall Cabinets</td>
                                        <td>300mm-1000mm</td>
                                        <td>720mm, 900mm</td>
                                    </tr>
                                    <tr>
                                        <td>Tall Cabinets</td>
                                        <td>300mm-600mm</td>
                                        <td>1970mm, 2150mm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
                </div>
            @endif
            <div class="row mb-5">
            @foreach ($styleHasColour->colourPageContent->slice(1) as $colourPageContent)
                <div class="col-md-6 mb-4">
                    <h2 class="text-center mb-4">{{ $colourPageContent->section_main_heading }}</h2>
                    {!! $colourPageContent->section_content !!}
                </div>
            @endforeach
            </div>
        @endif

        
        <!-- ORDER COMPONENT-->
        <section class="container-fluid bg-white py-5">
            <div class="row">
                <h3 class="text-uppercase fw-bolder text-dark text-center py-3">Suitable Components</h3>
            </div>
            <div class="row bg-white">
                @php
                    $catIds = json_decode($styleHasColour->suitable_components ?? json_encode([]));
                    $categories = \App\Models\Category::whereIn('id', $catIds)->get();
                @endphp
                <div class="d-flex order-component-scroller" style="max-width: 1900px; overflow-x: scroll">
                    @foreach($categories as $category)
                    <div class="d-flex align-items-center justify-content-center" style="border-radius: 50%; margin: 0px 10px; padding: 15px 50px">
                        <div class="text-center">
                            <a class="text-dark btn btn-outline-warning d-flex align-items-center justify-content-center" style="height: 100px; width: 100px; border-radius: 100%; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);" href="{{route('ordercomponentbyname', [$category->slug])}}">
                                <div class="card-old">
                                    <div class="card-body d-flex">
                                        @if($category->slug == 'doors')
                                        <div>
                                            <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/2237/2237440.png" alt="">
                                        </div>
                                        @elseif($category->slug == 'handles')
                                        <div>
                                            <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn4.iconfinder.com/data/icons/thin-home-living-2/24/thin-1459_door_handle_lock-512.png" alt="">
                                        </div>
                                        @elseif($category->slug == 'accessories')
                                        <div>
                                            <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/3365/3365678.png" alt="">
                                        </div>
                                        @elseif($category->slug == 'sinks')
                                        <div>
                                            <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/810/810192.png" alt="">
                                        </div>
                                        @elseif($category->slug == 'internals')
                                        <div>
                                            <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/4717/4717615.png" alt="">
                                        </div>
                                        @elseif($category->slug == 'taps')
                                        <div>
                                            <img height="55px" width="50px" class="rounded-circular-image" src="https://icons.veryicon.com/png/o/object/home-icon/water-tap.png" alt="">
                                        </div>
                                        @elseif($category->slug == 'worktops')
                                        <div>
                                            <img height="55px" width="50px" class="rounded-circular-image" src="https://static.thenounproject.com/png/2342543-200.png" alt="">
                                        </div>
                                        @elseif($category->slug == 'upstands')
                                        <div>
                                            <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/6785/6785530.png" alt="">
                                        </div>
                                        @elseif($category->slug == 'breakfast-bars')
                                        <div>
                                            <img height="55px" width="50px" class="rounded-circular-image" src="https://cdn-icons-png.flaticon.com/512/2311/2311531.png" alt="">
                                        </div>
                                        @elseif($category->slug == 'appliances')
                                        <div>
                                            <img height="55px" width="50px" class="rounded-circular-image" src="https://static.thenounproject.com/png/1283252-200.png" alt="">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </a>
                            <h5 class="cat-card-title fw-bold mt-2 text-dark">{{Str::limit($category->name, 13)}}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $(document).on('change', '#colour-dropdown', function() {
                    var colourSlug = $(this).val();
                    var url = "{{route('orderkitchenbycolourname', [':styleSlug', ':colourSlug'])}}";
                    url = url.replace(':styleSlug', '{{ $styleHasColour->style->slug ?? '' }}').replace(':colourSlug', colourSlug);
                    window.location.href = url;
                });
            });
        </script>
    @endpush
    
</x-guest-layout>