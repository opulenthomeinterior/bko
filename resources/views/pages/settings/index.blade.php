<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Settings</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Settings</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="card-title">Settings</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Tetimonials -->
                                <div class="col-md-12 form-group mb-4">
                                    <section class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed fw-bolder text-dark bg-light" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#flush-collapse"
                                                                aria-expanded="false" aria-controls="flush-collapse">
                                                                <span class="text-dark text-uppercase fw-bold text-center">Testimonials</span>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapse" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <!-- <div class="d-flex">
                                                                    <input type="checkbox" name="homepage"> Home Page
                                                                </div> -->
                                                                @if (!empty($testimonials) && count($testimonials) > 0)
                                                                    @foreach ($testimonials as $key => $testimonial)
                                                                        <div class="card border border-default p-3 current-testimonial-card">
                                                                            <label for="" class="form-label">
                                                                                Testimonial
                                                                            </label>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                                                                <input type="date" name="date[]" class="form-control" value="{{$testimonial->date}}">
                                                                            </div>
                                                                            <label for="" class="form-label">
                                                                            </label>
                                                                            <input type="text" name="user_name[]" class="form-control" placeholder="Enter User Name" value="{{$testimonial->user_name}}">
                                                                            <label for="" class="form-label">
                                                                            </label>
                                                                            <textarea name="testimonial[]" class="form-control" placeholder="Enter Testimonial"><?= str_replace('&', '&', $testimonial->testimonial) ?></textarea>
                                                                            <label for="" class="form-label">
                                                                            </label>
                                                                            @if ($loop->first)
                                                                                <button type="button" id="add-new-style-testimonial" class="btn btn-sm btn-warning w-25">Add New Testimonial</button>
                                                                            @else
                                                                                <button type="button" class="btn btn-sm btn-danger w-25 mt-2 remove-current-style-testimonial">Remove</button>
                                                                            @endif
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <div class="card border border-default p-3">
                                                                        <label for="" class="form-label">
                                                                            Testimonial
                                                                        </label>
                                                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                                                            <input type="date" name="date[]" class="form-control">
                                                                        </div>
                                                                        <label for="" class="form-label">
                                                                        </label>
                                                                        <input type="text" name="user_name[]" class="form-control" placeholder="Enter User Name">
                                                                        <label for="" class="form-label">
                                                                        </label>
                                                                        <textarea name="testimonial[]" class="form-control" placeholder="Enter Testimonial"></textarea>
                                                                        <label for="" class="form-label">
                                                                        </label>
                                                                        <button type="button" id="add-new-style-testimonial" class="btn btn-sm btn-warning w-25">Add New Testimonial</button>
                                                                    </div>
                                                                @endif
                                                                <div class="testimonial-card">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="col-lg-12 form-group mt-2">
                                    <button class="btn btn-primary" type="submit">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</x-app-layout>
