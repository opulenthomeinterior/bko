<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Style</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('styles') }}">Styles</a></li>
                                <li class="breadcrumb-item active">Edit Style</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row gutters">
                <div class="col-12">
                    <div class="card p-lg-5 p-4">
                        <form action="{{ route('style.update', $style->id) }}" method="post" class="auth-input" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 form-group mb-2">
                                    <label for="name" class="form-label">Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Style Name" value="{{ $style->name }}">
                                </div>
                                <div class="col-lg-6 form-group mb-2">
                                    <label for="style_title" class="form-label">Style Title</label>
                                    <input type="text" class="form-control" id="style_title" name="style_title"
                                        placeholder="Enter Style Title" value="{{ $style->style_title }}">
                                </div>
                                <div class="col-md-12 form-group mb-2">
                                    <label for="editor" class="form-label">
                                        Style Description
                                    </label>
                                    <textarea name="style_description" id="editor"><?= str_replace('&', '&', $style->style_description) ?></textarea>
                                </div>
                                <div class="col-md-12 form-group mb-2">
                                    @if (count($style->testimonials) > 0)
                                        @foreach ($style->testimonials as $key => $testimonial)
                                        <div class="card border border-default p-3">
                                            <label for="" class="form-label">
                                                Testimonial {{$key+1}}
                                            </label>
                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                                <input type="date" name="date[]" class="form-control">
                                            </div>
                                            <label for="" class="form-label">
                                            </label>
                                            <input type="text" name="user_name[]" class="form-control" placeholder="Enter User Name">
                                            <label for="" class="form-label">
                                            </label>
                                            <textarea name="testimonial[]" class="form-control" placeholder="Enter Testimonial"><?= str_replace('&', '&', $testimonial->testimonial) ?></textarea>
                                        </div>
                                        @endforeach
                                        @if (count($style->testimonials) < 5)
                                            <div class="card border border-default p-3">
                                                <label for="" class="form-label">
                                                    Testimonial {{count($style->testimonials)+1}}
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
                                            </div>
                                        @endif
                                    @else
                                        <div class="card border border-default p-3">
                                            <label for="" class="form-label">
                                                Testimonial 1
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
                                        </div>
                                        <div class="card border border-default p-3">
                                            <label for="" class="form-label">
                                                Testimonial 2
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
                                        </div>
                                        <div class="card border border-default p-3">
                                            <label for="" class="form-label">
                                                Testimonial 3
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
                                        </div>
                                        <div class="card border border-default p-3">
                                            <label for="" class="form-label">
                                                Testimonial 4
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
                                        </div>
                                        <div class="card border border-default p-3">
                                            <label for="" class="form-label">
                                                Testimonial 5
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
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-6 form-group mb-2">
                                    <label for="image_path" class="form-label">Upload Image</label>
                                    <input type="file" accept="image/*" class="form-control" id="image_path"
                                        name="image_path" onchange="display_image(this)">
                                </div>
                                <div class="col-lg-6">
                                    <label for="style_status" class="form-label">Status</label>
                                    <br>
                                    <input type="checkbox" id="style_status" name="status" {{$style->status == 1 ? 'checked' : ''}}>
                                </div>
                                <div class="col-lg-6 form-group mb-2 preview-image-wrapper {{ $style->image_path ? 'd-block' : 'd-none' }}">
                                    <label for="image_preview" class="form-label">Image Preview</label>
                                    <img id="image_preview"
                                        src="{{ $style->image_path ? asset('uploads/styles/' . $style->image_path) : '#' }}"
                                        alt="Image Preview"
                                        class="img-thumbnail box-image-preview {{ $style->image_path ? 'd-block' : 'd-none' }}" />
                                    <button type="button" id="remove_image"
                                        class="btn btn-danger mt-2 {{ $style->image_path ? 'd-block' : 'd-none' }}"
                                        onclick="removeImage(this, {{ $style->id }}, '{{ $style->image_path }}')">Remove</button>
                                </div>
                                <div class="col-lg-12 form-group mt-2">
                                    <button class="btn btn-primary" type="submit">
                                        Update Style
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
        var removeImageUrl = "{{ route('style.removeImage', $style->id) }}";
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
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
    </script>
</x-app-layout>
