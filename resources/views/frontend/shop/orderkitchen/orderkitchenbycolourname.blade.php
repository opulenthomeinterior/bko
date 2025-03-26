<x-guest-layout>
    <!-- Custom CSS -->
    <style>
        .breadcrumb-item a {
            color: #ffc107;
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
            border-color: #ffc107;
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
            background-color: #ffc107;
        }
    </style>
    @section('meta_tags')
        <title>{{$seo?->meta_title}}</title>
        <meta name="description" content="{{$seo?->meta_description}}">
        <link rel="canonical" href="{{$seo?->canonical_tag}}" />
    @endsection
    
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
        <h1 class="product-title text-center my-4">{{ $styleHasColour->colour->trade_colour }}</h1>

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
                    <div class="option-box active">Flat Pack</div>
                    <div class="option-box">Rigid</div>
                </div>
                <div class="mt-4">
                    <h5>Other available Colours</h5>
                    <select class="form-select color-dropdown">
                        <option selected>Select colour options</option>
                        <option>White</option>
                        <option>Black</option>
                        <option>Grey</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <h5>Main Colour:</h5>
                <div class="option-box active mb-4">Taupe Grey</div>
                <h5>Finish:</h5>
                <div class="option-box active">SuperGloss</div>
                <p class="mt-2">This finish makes your kitchen reflective and smooth, making it easy to keep your surfaces clean.</p>
            </div>
        </div>

        <!-- Key Features -->
        <h2 class="text-center mb-4">KEY FEATURES</h2>
        <div class="row mb-5">
            <div class="col-md-6 mb-4">
                <h5>Sleek J-Pull Kitchen Units Handle-Free Design</h5>
                <p>The J-Pull handle with an integrated J-cutout offers a minimalist and seamless look, making it a popular choice for modern kitchens.</p>
                
                <h5 class="mt-4">SuperGloss Finish</h5>
                <p>The super gloss surface creates a sophisticated, luxurious feel while being resistant to stains and scratches. It stands out because of its durability.</p>
                
                <h5 class="mt-4">Timeless Taupe Grey Color</h5>
                <p>Taupe Grey is a versatile, cool-toned neutral that looks beautiful with various colours and materials. It is an ideal choice for a fresh, clean look in the kitchen.</p>
            </div>
            <div class="col-md-6">
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
            </div>
        </div>

        <!-- Material Composition & Maintenance -->
        <div class="row mb-5">
            <div class="col-md-6 mb-4">
                <h2 class="mb-4">MATERIAL COMPOSITION</h2>
                <h5>Door Composition</h5>
                <p>The J-Pull Kitchen doors are made from MDF and they are given a superGloss finish for a reflective, sleek surface.</p>
                
                <h5 class="mt-4">Durability</h5>
                <p>Designed for longevity, this unit resists scratches, fading, and moisture, ensuring it maintains its pristine appearance over time.</p>
            </div>
            <div class="col-md-6">
                <h2 class="mb-4">MAINTENANCE TIPS</h2>
                <h5>Regular Cleaning</h5>
                <p>To preserve the super-gloss finish, clean the surface with a non-abrasive cleaner and a soft cloth daily. Avoid using harsh chemicals and rough materials, as they can damage the surface.</p>
                
                <h5 class="mt-4">Avoid Heavy Impacts</h5>
                <p>Although the doors are durable, you should avoid contact with sharp objects or heavy impacts that can scratch the high-gloss surface.</p>
            </div>
        </div>

        <!-- Benefits -->
        <h2 class="text-center mb-4">BENEFITS</h2>
        <div class="row mb-5">
            <div class="col-md-6 mb-4">
                <h5>Easy Maintenance</h5>
                <p>Because of the finish, cleaning a high-gloss surface is extremely easy. You can just wipe away any stains, spills, or fingerprints with a soft cloth and water.</p>
                
                <h5 class="mt-4">Contemporary Design</h5>
                <p>Designed for longevity, this unit resists scratches, fading, and moisture, ensuring it maintains its pristine appearance over time.</p>
            </div>
            <div class="col-md-6">
                <h5>Versatility</h5>
                <p>Taupe Grey is a versatile, cool-toned neutral that looks beautiful with various colours and materials. It is an ideal choice for a fresh, clean look in the kitchen.</p>
                
                <h5 class="mt-4">Space-Enhancing</h5>
                <p>The taupe grey shade helps open space and brighten your kitchen, making it feel more airy and spacious.</p>
            </div>
        </div>

      
        <h2 class="text-center mb-4">SUITABLE COMPONENTS</h2>
        <div class="row text-center mb-5">
            <div class="col-4 col-md-2 mb-4">
                <div class="feature-icon">
                    <img src="/api/placeholder/50/50" alt="Doors icon" class="img-fluid">
                </div>
                <p>Doors</p>
            </div>
            <div class="col-4 col-md-2 mb-4">
                <div class="feature-icon">
                    <img src="/api/placeholder/50/50" alt="Handles icon" class="img-fluid">
                </div>
                <p>Handles</p>
            </div>
            <div class="col-4 col-md-2 mb-4">
                <div class="feature-icon">
                    <img src="/api/placeholder/50/50" alt="Accessories icon" class="img-fluid">
                </div>
                <p>Accessories</p>
            </div>
            <div class="col-4 col-md-2 mb-4">
                <div class="feature-icon">
                    <img src="/api/placeholder/50/50" alt="Appliances icon" class="img-fluid">
                </div>
                <p>Appliances</p>
            </div>
            <div class="col-4 col-md-2 mb-4">
                <div class="feature-icon">
                    <img src="/api/placeholder/50/50" alt="Worktops icon" class="img-fluid">
                </div>
                <p>Worktops</p>
            </div>
            <div class="col-4 col-md-2 mb-4">
                <div class="feature-icon">
                    <img src="/api/placeholder/50/50" alt="Upstand icon" class="img-fluid">
                </div>
                <p>Upstand</p>
            </div>
        </div>
    </div>
    
</x-guest-layout>