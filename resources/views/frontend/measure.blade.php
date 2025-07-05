<x-guest-layout>
    <head>
        <style>

             .content-section {
            min-height: 500px;
            /* background-color: #f8f9fa; */
        }
        
        .image-container {
            position: relative;
            height: 100%;
            min-height: 500px;
            overflow: hidden;
            border-radius: 15px;
        }
        
        .image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }
        
        .content-container {
            padding: 40px 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .main-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #212529;
            margin-bottom: 30px;
            line-height: 1.2;
        }
        
        .description-text {
            font-size: 2rem;
            line-height: 1.6;
            color: #6c757d;
            margin-bottom: 25px;
        }
        
        .preparation-title {
            font-size: 2.55rem;
            font-weight: 600;
            color: #212529;
            margin-bottom: 20px;
        }
        
        .tools-list {
            list-style: none;
            padding: 0;
        }
        
        .tools-list li {
            padding: 8px 0;
            border-bottom: 1px solid #e9ecef;
            color: #495057;
        }
        
        .tools-list li:last-child {
            border-bottom: none;
        }
        
        .tool-name {
            font-weight: 600;
            color: #212529;
          font-size: 1.25rem;
        }
        
        .tool-description {
            margin-left: 10px;

          font-size: 1.25rem;
        }
        
        @media (max-width: 768px) {
            .main-title {
                font-size: 2rem;
            }
            
            .content-container {
                padding: 30px 20px;
            }
            
            .image-container {
                min-height: 300px;
                margin-bottom: 20px;
            }
        }



        .contact-card {
           
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            padding: 40px;
            max-width: 500px;
            width: 100%;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.2);
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
            border-radius: 20px 20px 0 0;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h2 {
            font-size: 28px;
            color: #2c3e50;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .header p {
            color: #7f8c8d;
            font-size: 16px;
            line-height: 1.6;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-radius: 12px;
            background: #f8f9fa;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .contact-item:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }

        .contact-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .contact-item:hover::before {
            transform: scaleY(1);
        }

        .icon-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin-right: 15px;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .contact-item:hover .icon-wrapper {
            transform: scale(1.1);
        }

        .icon-wrapper i {
            color: white;
            font-size: 18px;
        }

        .contact-details {
            flex: 1;
        }

        .contact-label {
            font-size: 12px;
            color: #95a5a6;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .contact-value {
            color: #2c3e50;
            font-size: 15px;
            font-weight: 500;
            line-height: 1.4;
            word-break: break-word;
        }

        .contact-value a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-value a:hover {
            color: #667eea;
        }

        .cta {
            margin-top: 30px;
            padding: 20px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 15px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .cta:hover::before {
            left: 100%;
        }

        .cta p {
            font-size: 16px;
            font-weight: 500;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 600px) {
            .contact-card {
                padding: 25px;
                margin: 10px;
            }
            
            .header h2 {
                font-size: 24px;
            }
            
            .contact-item {
                padding: 12px;
            }
            
            .icon-wrapper {
                width: 45px;
                height: 45px;
            }
            
            .contact-value {
                font-size: 14px;
            }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(102, 126, 234, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0);
            }
        }

        </style>

<div class="container-fluid">
    <div class="col-12" >
        <img src="{{ asset('images/need-help-main-image.png') }}" class="w-100 h-100" alt="">
    </div>
</div>

    <title>Need Help Measuring </title></head>
    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
       

        <!-- <div class="row">
            <div class="col-12 text-center">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder">
                    NEED HELP MEASURING?
                </h1>
            </div>
        </div> -->
    </section>
    <section class="container-fluid mb-2 px-lg-5 py-5 px-md-3 px-3 bg-light">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase" style="color:#FEBD49; font-size:16px !important">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}" class="text-uppercase" style="color:#FEBD49; font-size:16px !important">Help & guides</a></li>
            </ol>
        </nav>

    <div class="d-flex flex-row justify-content-center">
        
        <div class="row w-75">
            <div class="col-12 text-center">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder">
                NEED HELP MEASURING?
                </h1>
               
                <h4 class="text-dark pt-1">
                Getting the measurements right is crucial before placing your kitchen order to ensure everything fits perfectly. Accurate measurements form the foundation of your kitchen design, and we want to make the process as easy as possible for you.     
            </h4>
                <h4 class="text-dark pt-1">
           Here is a proper guide to help you measure your kitchen accurately.
            </h4>
            </div>
        </div>
        </div>
    </section>
    <div class="container content-section">
       
        <div class="row h-100 align-items-center">
            <!-- Left side - Image -->
            <div class="col-lg-6 col-md-6 p-4">
                <div class="image-container">
                    <img src="{{asset('images/preperation-tools.png')  }}"
                         alt="Hand drawing floor plan with pen on paper" 
                         class="image">
                </div>
            </div>
            
            <!-- Right side - Content -->
            <div class="col-lg-6 col-md-6">
                <div class="content-container">  
                    <h2 class="preparation-title">1. Preparation and Tools:</h2>
                    
                    <ul class="tools-list">
                        <li>
                            <span class="tool-name">Graph paper:</span>
                            <span class="tool-description">Essential for sketching your layout.</span>
                        </li>
                        <li>
                            <span class="tool-name">Measuring tape:</span>
                            <span class="tool-description">A retractable metal tape measure is preferred (25-30 feet).</span>
                        </li>
                        <li>
                            <span class="tool-name">Pencil and Eraser:</span>
                            <span class="tool-description">For sketching and making corrections.</span>
                        </li>
                        <li>
                            <span class="tool-name">Camera or Smartphone:</span>
                            <span class="tool-description">For taking pictures of existing features.</span>
                        </li>
                        <li>
                            <span class="tool-name">A Helper:</span>
                            <span class="tool-description">An extra set of hands make measuring easier and more accurate.</span>
                        </li>
                        <li>
                            <span class="tool-name">A Notebook:</span>
                            <span class="tool-description">For writing down notes and dimensions.</span>
                        </li>
                    </ul>
                </div>
            </div>
      
         </div>
        <div class="row h-100 align-items-center">
            <!-- left side - Content -->
            <div class="col-lg-6 col-md-6">
                <div class="content-container">  
                    <h2 class="preparation-title">2. The Measuring process:</h2>
                    <h3 class="text-black fw-bold">a. Create a rough sketch:</h3>
                    
                    <ul class="tools-list">
                        <li>
                            <span class="tool-name">1. Draw the outline:</span>
                            <span class="tool-description">On your graph paper, draw a basic outline of your kitchen’s shape. Don’t dwell on it and worry about accuracy, just get the general layout down (L-shaped, U-shaped, galley, single wall, etc).</span>
                        </li>
                        <li>
                            <span class="tool-name">Mark all the Fixed Features:</span>
                            <span class="tool-description">Next, you have to indicate the location of all the permanent features like:
                               
                            </span>
                             <ul >
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Windows</li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Doors</li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Radiator</li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Pillars</li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Plumbing (sink, dishwasher, fridge water line, gas line)</li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Electrical outlets</li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Light switches</li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Vents</li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Any other permanent fixtures. </li>
                                </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <!-- right side - Image -->
            <div class="col-lg-6 col-md-6 p-4">
                <div class="image-container">
                    <img src="{{ asset('/images/rough-sketch.png') }}"
                         alt="Hand drawing floor plan with pen on paper" 
                         class="image">
                </div>
            </div>
            
      
         </div>
        <div class="row h-100 align-items-center">
            <!-- left side - Content -->
            <div class="col-lg-6 col-md-6">
                <div class="content-container">  
                    <h2 class="preparation-title">b. Measure all the walls:
</h2>
                    
                    <ul class="tools-list">
                        <li>
                            <span class="tool-name">1. Overall wall lengths:</span>
                            <span class="tool-description">Start by measuring the total length of each wall, from corner to corner. Write these dimensions on your sketch. </span>
                        </li>
                        <li>
                            
                             <ul >
                                    <li style="list-style: disc;" class="fs-5 fw-bold">From the corner to the start of the installed window.</li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">The width of the window.</li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">From the end of the window to the next corner. </li>
                                    
                                </ul>
<span class="tool-name">3. Accuracy is the key:</span>
                            <span class="tool-description">Double-check every measurement. It’s better to spend time on measuring twice now then to find out later that something doesn't fit. 

                               
                            </span>
                        </li>

                       
                    </ul>
                </div>
            </div>
            <!-- right side - Image -->
            <div class="col-lg-6 col-md-6 p-4">
                <div class="image-container">
                    <img src="{{ asset('images/measure-walls.png') }}" 
                         class="image">
                </div>
            </div>
            
      
         </div>
        <div class="row h-100 align-items-center">
            <!-- left side - Content -->
            <div class="col-lg-6 col-md-6">
                <div class="content-container">  
                        <h2 class="preparation-title">c. Measure heights:
                        </h2>
                    
                    <ul class="tools-list">
                        <li>
                            <span class="tool-name">1. Ceiling height:</span>
                            <span class="tool-description"> Measure the height from the floor to the ceiling in several places, especially if you think your ceiling or floor isn't perfectly level. You need to note the lowest point. <br></span>
                            <span class="tool-name">2. Windows heights:</span>
                                <ul >
                                    <li style="list-style: disc;" class="fs-5 fw-bold">
                                        Measure from the floor to the button of the window sill.
                                    </li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Measure the height of the window opening itself. 
                                    </li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">Measure from the top of the window opening to the ceiling. </li>
                                    
                                </ul>
                            
                                     <span class="tool-name">3. Door heights:</span>
                                 <ul >
                                    <li style="list-style: disc;" class="fs-5 fw-bold">
                                        Measure the height of the door opening.
                                    </li>
                                    <li style="list-style: disc;" class="fs-5 fw-bold">
                                        Measure from the top of the door frame to the ceiling.
                                    </li>


                                   
                      
                                </ul>
                            
                                      <span class="tool-name">4. Radiators/Other Obstructions:</span>
                            <span class="tool-description">  Measure their height from the floor and their depth from the wall.  <br></span>
                      
                            
                        </li>
                        

                       
                    </ul>
                    
                </div>
            </div>
            <!-- right side - Image -->
            <div class="col-lg-6 col-md-6">
                <div class="image-container">
                    <img src="{{ asset('images/radiators.png') }}"
                         class="image">
                </div>
            </div>
            
      
         </div>
    
    </div>

    <div class="container content-section">
        <div class="row h-100 align-items-center">
            <!-- left side - Content -->
            <div class="col-lg-6 col-md-6">
                <div class="content-container">  
                        
                    
                    <ul class="tools-list">
                        <li>
                           
                            <span class="tool-name">d. Measure depths:</span>
                                <ul >
                                    <li style="list-style: number;">
                            <span class="tool-name">Obstructions:</span>
                            <span class="tool-description"> 
                                 Measure the depth of anything that protrudes from the wall (e.g., pipes, radiators, door frames that might interfere with cabinet placements).</span>
                            </li>
                                    <li style="list-style: number;">
                            <span class="tool-name">Door swing:</span>
                            <span class="tool-description"> If doors open into the kitchen, measure the depth of their swing to ensure they won't interfere with cabinets or appliances. </span>
                            </li>
                                   
                                     <span class="tool-name">e. Note utility locations:</span>
                                 <ul >
                    
                                    <li style="list-style: none;" class="fs-5 ">
                                     <span class="fw-bold">  1. Plumbing: </span> 
                                        <ul>
                                            <li style="list-style: disc;">Sink drain/Supply: Measure from the center of the drain pipe to the nearest wall. You also need to note their height from the floor. </li>
                                            <li style="list-style: disc;">Dishwasher connection: Typically near the sink. Note down its exact location.</li>
                                            <li style="list-style: disc;">Refrigerator water line: Note down the location, if there is one. </li>
                                        </ul>
                                     <span class="fw-bold">2. Electrical: </span> 
                                        <ul>
                                            <li style="list-style: disc;"><b>Outlets:</b> Measure from the center of each outlet to the nearest wall and its height from the floor.</li>
                                            
                                            <li style="list-style: disc;"><b>Gas lines:</b> 
                                                For gas ranges or cooktops, note the location of the gas line.</li>
                                            
                                            <li style="list-style: disc;"><b>Vents:</b> 
                                                Note the location and size of any existing exhaust vents for range hoods. </li>
                                            
                                        </ul>
                                    </li>
                                    
                                </ul>
                            
                                
                            
                        </li>
                                </ul>
                            
                        
                </div>
            </div>
         
            <!-- right side - Image -->
             <div class="col-lg-6 col-md-6">
                                       <div class="image-container mb-3">
                    <img src="{{ asset('images/utility.png') }}" 
                         class="image">
                </div>





 
            </div> 
            
      
         </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-6 col-12">
             <span class="tool-name">f. Appliance dimensions (existing and planned):<br></span>
                     <span class="tool-description">If you're keeping any existing appliances, measure their exact width, depth and height. Don’t forget to account for door swings and required ventilation space.
In case of buying new appliances, make a note of the planned dimensions. This information is important for the kitchen designer. </span><br>
                         <span class="tool-name">3. Important tips:<br></span>
                         <ul>
                            <li  style="list-style: disc;"><b class="text-black">Measure Thrice, Cut Once:</b>Or in this case, measure thrice, design once. Accuracy is paramount.</li>
                            <li  style="list-style: disc;"><b class="text-black">Consistency:</b>Always use the same unit of measurement (inches or centimeters) throughout your entire drawing.</li>
                            <li  style="list-style: disc;"><b class="text-black">Take Photos:</b>Take clear photos of your current kitchen from various angles. These can provide valuable context for the designer.</li>
                         </ul>
                       
                    </ul>

                   
                <ul>
                     <li  style="list-style: disc;"><b class="text-black">Bring Your Sketch:</b>When you visit us, bring your detailed sketch, measurements, and photos. This will give us a solid foundation to start designing your new kitchen.</li>
                </ul>
                <p class="fs-3">
                    By following this comprehensive guide, you'll be well-prepared to provide us all the necessary information for a precise and effective kitchen design.
                </p>
             </div>
             <div class="col-md-6 col-12">
                                       <div class="image-container mb-3">
                    <img src="{{ asset('images/take-photo.png') }}" 
                         class="image">
                </div>
             </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                
     <div class="contact-card ">
        <div class="header">
            <h2>Contact Us</h2>
            <p>For any queries, please contact us—we'd be happy to help.</p>
        </div>
        
        <div class="contact-info">
            <div class="contact-item">
                <div class="icon-wrapper pulse">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact-details">
                    <div class="contact-label">Phone</div>
                    <div class="contact-value">
                        <a href="tel:02080505605">020 8050 5605</a>
                    </div>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="icon-wrapper">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-details">
                    <div class="contact-label">Email</div>
                    <div class="contact-value">
                        <a href="mailto:admin@bkonline.uk">admin@bkonline.uk</a>
                    </div>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="icon-wrapper">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-details">
                    <div class="contact-label">Address</div>
                    <div class="contact-value">
                        44 Gillender Street, Aberfeldy Village,<br>
                        London E14 6RP, United Kingdom
                    </div>
                </div>
            </div>
        </div>
        
       
    </div>
            </div>
        </div>
    </div>





    {{-- <div class="position-relative">
        
    <div class="z-n2 bg-warning position-absolute" style="width:100%; top:40%; height:200px;"></div>
                <img src="{{ asset('images/order-component.jpg') }}" class="img-fluid" style="width:50%; transform:translateX(50%);" />
                
                </div>
                 --}}
    {{-- <section class="container-fluid px-lg-5 px-md-3 px-3">
    
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
    </section> --}}

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
