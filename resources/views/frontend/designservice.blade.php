{{-- <x-guest-layout> --}}
    {{-- <section class="container-fluid"
    style="background-image: url('{{ asset('images/backgrounds/Virtual-Design-Service-banner.jpg') }}'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 60vh;">
</section> --}}
    {{-- <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a class="text-uppercase">Design service</a></li>
            </ol>
        </nav>

       
        
        
        <div class="row">
            <div class="col-12">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder">
                    VIRTUAL DESIGN SERVICE
                </h1>

                <h4>
                    At Buy Kitchen Online we want to make ordering a trade kitchen as easy as possible. From offering a FREE
                    Virtual Design Kitchen Service to providing 'How To' Videos we are constantly looking at ways to
                    support you.
                </h4>

            </div>
        </div>
    </section> --}}

    {{-- <section class="container-fluid px-lg-5 py-4 px-md-3 px-3 bg-light">

        <div class="d-flex flex-row justify-content-center">
            <div class="row w-75">
                <div class="col-12 text-center">
                    <h1 class="fs-1 text-dark text-uppercase fw-bolder">
                        VIRTUAL DESIGN SERVICE
                    </h1>
                   
                    <h4 class="text-dark px-5 pt-1">
                        At Buy Kitchen Online we want to make ordering a trade kitchen as easy as possible. From offering a <span class="text-danger"> FREE</span> Virtual Design Kitchen Service to providing 'How To' Videos we are constantly looking at ways to support you.       
                </h5>
                </div>
            </div>
            </div>
        </section>
    

    <section class="container px-lg-5 px-md-3 px-3 py-4">
        <div class="row">
            <div class = "col">
            <form action="{{ route('submit.designservice') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-12 py-2 border-bottom border-dark">
                            <h3 class="text-dark fw-bolder text-uppercase">Request a meeting</h3>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-6">
                            <label class="py-1">First <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="first_name" required />
                        </div>
                        <div class="col-6">
                            <label class="py-1">Surname <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="sur_name" required />
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-6 ">
                            <label class="py-1">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" required />
                        </div>

                        <div class="col-6 ">
                            <label class="py-1">Phone Number <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="phone" required />
                        </div>
                    </div>

                    <div class="row py-3">
                        <label class="py-1">Please upload your kitchen measurements and/or existing plans<span class="text-danger">*</span></label>
                           
                        <div class="col-12 py-2 border border-grey border-2">
                            <label class="py-1 fw-bold">Drop files here or</label>
                           
                            <input type="file" name="file" class="form-control" style="border: 1px solid #EDA10E">
                            <label class="py-1"><small>Accepted file types: jpg, jpeg, png, pdf, doc, docx, ppt, pptx, Max. file size: 10 MB.
                            </small>
                            </label>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-12">
                            <p class="pt-1">Callbacks will take place during office hours.</p>
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-12">
                            <button class="btn btn-md text-uppercase fw-bolder rounded-0"
                                type="submit" style="background-color:#2A6161; color:white">Request a design
                                appointment</button>
                        </div>
                    </div>

                </div>
                
            </form>
        </div>
            <div class="col-lg-5">
                <img  src="{{asset('images/consult.jpg')}}"/>
            </div>

        </div>


    </section> --}}


    

{{-- </x-guest-layout> --}}

<x-guest-layout>
    <head>
        <title>Design Service</title>
    </head>
    <section class="container-fluid d-flex align-items-center justify-content-center"
        style="background-image: url('{{ asset('images/backgrounds/Virtual-Design-Service-banner.jpg') }}'); background-position: center; background-repeat: no-repeat; background-size: cover; min-height: 60vh;">
    </section>

    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3 bg-light text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder">VIRTUAL DESIGN SERVICE</h1>
                <h4 class="text-dark pt-1">
                    At Buy Kitchen Online we want to make ordering a trade kitchen as easy as possible. From offering a 
                    <span class="text-danger">FREE</span> Virtual Design Kitchen Service to providing 'How To' Videos, we are constantly looking at ways to support you.
                </h4>
            </div>
        </div>
    </section>


     <div class="container my-2">
    

    <!-- Nav Tabs -->
    <ul class="nav nav-tabs justify-content-start ps-5" id="formTabs" role="tablist">
      <li class="nav-item py-1" role="presentation">
        <button class="nav-link active" id="form1-tab" data-bs-toggle="tab" data-bs-target="#form1" type="button" role="tab" aria-controls="form1" aria-selected="true">Upload Kitchen Measurements</button>
      </li>
      <li class="nav-item py-1" role="presentation">
        <button class="nav-link" id="form2-tab" data-bs-toggle="tab" data-bs-target="#form2" type="button" role="tab" aria-controls="form2" aria-selected="false">Upload Kitchen Images</button>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="formTabsContent">
      <!-- Form 1 -->
      <div class="tab-pane fade show active" id="form1" role="tabpanel" aria-labelledby="form1-tab">
       <section id="firstForm" class="container px-lg-5 px-md-3 px-3 py-4">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form action="{{ route('submit.designservice') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="border-bottom border-dark pb-2">
                        <h3 class="text-dark fw-bolder text-uppercase">Request a meeting</h3>
                    </div>

                    <div class="row py-3">
                        <div class="col-md-6 col-12">
                            <label class="py-1">First <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="first_name" required />
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="py-1">Surname <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="sur_name" required />
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-md-6 col-12">
                            <label class="py-1">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" required />
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="py-1">Phone Number <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="phone" required />
                        </div>
                    </div>

                    <div class="row py-3">
                        <label class="py-1">Please upload your kitchen measurements and/or existing plans <span class="text-danger">*</span></label>
                        <div class="col-12 py-2 border border-grey border-2">
                            <label class="py-1 fw-bold">Drop files here or</label>
                            <input type="file" name="file" class="form-control border border-warning" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.ppt,.pptx" />
                            <label class="py-1">
                                <small>Accepted file types: jpg, jpeg, png, pdf, doc, docx, ppt, pptx. Max file size: 10MB.</small>
                            </label>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-12">
                            <p class="pt-1">Callbacks will take place during office hours.</p>
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-12">
                            <button class="btn btn-md text-uppercase fw-bolder rounded-0" type="submit" style="background-color:#2A6161; color:white">
                                Request a design appointment
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-lg-5 d-flex justify-content-center align-items-center mt-4 mt-lg-0">
                <img src="{{asset('images/consult.jpg')}}" class="img-fluid rounded" alt="Consultation Image"/>
            </div>
        </div>
    </section>
      </div>

      <!-- Form 2 -->
      <div class="tab-pane fade" id="form2" role="tabpanel" aria-labelledby="form2-tab">
      
        <section id="secondForm" class="container px-lg-5 px-md-3 px-3 py-4">
        <div class="row ">
            <div class="col-lg-7">
                <form action="{{ route('submit.designservice') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- <div class="border-bottom border-dark pb-2">
                        <h3 class="text-dark fw-bolder text-uppercase">Request a meeting</h3>
                    </div> -->

                    <div class="row py-3">
                        <div class="col-md-6 col-12">
                            <label class="py-1">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" required />
                        </div>
                          <div class="col-md-6 col-12">
                            <label class="py-1">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" required />
                        </div>
                    </div>

                    <div class="row py-3">
                      
                        <div class="col-md-6 col-12">
                            <label class="py-1">Phone Number <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="phone" required />
                        </div>
                        
                        <div class="col-md-6 col-12">
                            <label class="py-1">Address <span class="text-danger">*</span></label>
                            <!-- <input type="number" class="form-control" name="phone" required /> -->
                             <textarea name="address" id="" class="form-control" required></textarea>
                        </div>

                    </div>

                    <div class="row py-3">
                        <label class="py-1">Please upload your kitchen images <span class="text-danger">*</span></label>
                        <div class="col-12 py-2 border border-grey border-2">
                            <label class="py-1 fw-bold">Drop images here or</label>
                            <input type="file" name="file" class="form-control border border-warning" accept=".jpg,.jpeg,.png" multiple />
                            <label class="py-1">
                                <small>Accepted file types: jpg, jpeg, png. Max file size: 10MB.</small>
                            </label>
                        </div>
                    </div>


                     <div class="row py-3">
                        <div class="col-md-6 col-12">
                            <label class="py-1">Please add a note <span class="text-danger">*</span></label>
                            <!-- <input type="text" class="form-control" name="name" required /> -->
                             <textarea name="note" id="" class="form-control"></textarea>
                        </div>
                         
                    </div>


                    <!-- <div class="row py-3">
                        <div class="col-12">
                            <p class="pt-1">Callbacks will take place during office hours.</p>
                        </div>
                    </div> -->


                    <div class="row pt-3">
                        <div class="col-12">
                            <button class="btn btn-md text-uppercase fw-bolder rounded-0" type="submit" style="background-color:#2A6161; color:white">
                                Request a design appointment
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
  </div>



    <!-- <section id="first-form" class="container px-lg-5 px-md-3 px-3 py-4">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form action="{{ route('submit.designservice') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="border-bottom border-dark pb-2">
                        <h3 class="text-dark fw-bolder text-uppercase">Request a meeting</h3>
                    </div>

                    <div class="row py-3">
                        <div class="col-md-6 col-12">
                            <label class="py-1">First <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="first_name" required />
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="py-1">Surname <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="sur_name" required />
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-md-6 col-12">
                            <label class="py-1">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" required />
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="py-1">Phone Number <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="phone" required />
                        </div>
                    </div>

                    <div class="row py-3">
                        <label class="py-1">Please upload your kitchen measurements and/or existing plans <span class="text-danger">*</span></label>
                        <div class="col-12 py-2 border border-grey border-2">
                            <label class="py-1 fw-bold">Drop files here or</label>
                            <input type="file" name="file" class="form-control border border-warning" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.ppt,.pptx" />
                            <label class="py-1">
                                <small>Accepted file types: jpg, jpeg, png, pdf, doc, docx, ppt, pptx. Max file size: 10MB.</small>
                            </label>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-12">
                            <p class="pt-1">Callbacks will take place during office hours.</p>
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-12">
                            <button class="btn btn-md text-uppercase fw-bolder rounded-0" type="submit" style="background-color:#2A6161; color:white">
                                Request a design appointment
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-lg-5 d-flex justify-content-center align-items-center mt-4 mt-lg-0">
                <img src="{{asset('images/consult.jpg')}}" class="img-fluid rounded" alt="Consultation Image"/>
            </div>
        </div>
    </section> -->


</x-guest-layout>

