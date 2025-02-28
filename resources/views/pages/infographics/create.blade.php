<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('categories') }}">Info Graphics</a></li>
                                <li class="breadcrumb-item active">Create Info Graphic</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row gutters">
                <div class="col-12">
                    <div class="card p-lg-5 p-4">
                        <form action="{{ route('infographics.update') }}" method="post" class="auth-input" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">

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
                                                                <span class="text-dark text-uppercase fw-bold text-center">Infographics</span>
                                                            </button>
                                                        </h2>
                                                            <div class="accordion-body">
                                                                @if (count($infoGraphics) > 0)
                                                                    @foreach ($infoGraphics as $key => $infoGraphic)

                                                                        <input type="hidden" name="infographics[]" value="info_graphic">
                                                                        <div class="card border border-default p-3 current-infographic-card">

                                                                            <div class="card border border-default p-3">
                                                                                <label for="" class="form-label">
                                                                                    Infographic
                                                                                </label>
                                                                                <input type="text" name="title[]" value="{{$infoGraphic->title}}" class="form-control" placeholder="Enter Title">
                                                                                <label for="" class="form-label">
                                                                                </label>
                                                                                <textarea name="description[]" class="form-control editor" placeholder="Enter Description">{{$infoGraphic->description}}</textarea>
                                                                                <br>
                                                                                <label for="" class="form-label">
                                                                                    Main Image
                                                                                </label>
                                                                                <input type="file" name="image_path[]" class="form-control">
                                                                                <input type="hidden" name="image_name[]" value="{{$infoGraphic->image_path}}">
                                                                                <br>
                                                                                <label for="" class="form-label">
                                                                                    Icon
                                                                                </label>
                                                                                <input type="file" name="icon[]" class="form-control">
                                                                                <br>
                                                                                <label for="" class="form-label">
                                                                                    Status
                                                                                </label>
                                                                                <input {{$infoGraphic->status == 1 ? 'checked' : ''}} type="checkbox" name="status[]" class="text-start">
                                                                                <label for="" class="form-label">
                                                                                </label>
                                                                            </div>
                                                                            <label for="" class="form-label">
                                                                            </label>
                                                                            @if ($loop->first)
                                                                                <button type="button" id="add-new-style-infographic" class="btn btn-sm btn-warning w-25">Add New Infographic</button>
                                                                            @else
                                                                                <button type="button" class="btn btn-sm btn-danger w-25 mt-2 remove-current-style-infographic">Remove</button>
                                                                            @endif
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <div class="card border border-default p-3">

                                                                        <input type="hidden" name="infographics[]" value="info_graphic">
                                                                        <label for="" class="form-label">
                                                                            Infographic
                                                                        </label>
                                                                        <input type="text" name="title[]" class="form-control" placeholder="Enter Title">
                                                                        <label for="" class="form-label">
                                                                        </label>
                                                                        <textarea name="description[]" class="form-control editor" placeholder="Enter Description"></textarea>
                                                                        <br>
                                                                        <label for="" class="form-label">
                                                                            Main Image
                                                                        </label>
                                                                        <input type="file" name="image_path[]" class="form-control">
                                                                        <input type="hidden" name="image_name[]">
                                                                        <br>
                                                                        <label for="" class="form-label">
                                                                            Icon
                                                                        </label>
                                                                        <input type="file" name="icon[]" class="form-control">
                                                                        <br>
                                                                        <label for="" class="form-label">
                                                                            Status
                                                                        </label>
                                                                        <input type="checkbox" name="status[]" class="text-start">
                                                                        <label for="" class="form-label">
                                                                        </label>
                                                                        <button type="button" id="add-new-style-infographic" class="btn btn-sm btn-warning w-25">Add New Infographic</button>
                                                                    </div>
                                                                @endif
                                                                <div class="infographic-card">
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                
                                <div class="col-lg-12 form-group mt-2">
                                    <button class="btn btn-primary" type="submit">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <script>
    </script>
    <script>
        document.querySelectorAll('.editor').forEach((editorElement) => {
            ClassicEditor.create(editorElement, {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                }
            })
            .catch(error => {
                console.log(error);
            });
        });
    </script>
</x-app-layout>
