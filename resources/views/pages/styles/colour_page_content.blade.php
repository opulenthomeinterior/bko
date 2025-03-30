<x-app-layout>
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            color: #000 !important;
        }
    </style>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Colour Page Content</h4>

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
                        <form action="{{ route('style.colour.update_page_content', [$styleHasColourId]) }}" method="post" class="auth-input" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!-- Suitable Components -->
                                <div class="col-md-12 form-group mb-4">
                                    <section class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="accordion accordion-flush" id="styleHasColoursAccordionFlush">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed fw-bolder text-dark bg-light" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#styleHasColours-flush-collapse"
                                                                aria-expanded="false" aria-controls="styleHasColours-flush-collapse">
                                                                <span class="text-dark text-uppercase fw-bold text-center">Suitable Components</span>
                                                            </button>
                                                        </h2>
                                                        <div id="styleHasColours-flush-collapse" class="accordion-collapse collapse"
                                                            data-bs-parent="#styleHasColoursAccordionFlush">
                                                            <div class="accordion-body">
                                                                @if (count($categories) > 0)
                                                                <div class="card border border-default py-3">
                                                                    <label for="" class="form-label">
                                                                    Suitable Components
                                                                    </label>
                                                                    <select name="suitable_components[]" class="form-control select2 text-dark" multiple id="">
                                                                        <option value="" disabled>Suitable Components</option>
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}" class="text-dark" {{ in_array($category->id, $catIds) ? 'selected' : '' }}>
                                                                                {{$category->name}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- Page Content -->
                                <div class="col-md-12 form-group mb-4">
                                    <section class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="accordion accordion-flush" id="colourpagecontentaccordionFlush">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed fw-bolder text-dark bg-light" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#colour-page-content-flush-collapse"
                                                                aria-expanded="false" aria-controls="colour-page-content-flush-collapse">
                                                                <span class="text-dark text-uppercase fw-bold text-center">Page Content</span>
                                                            </button>
                                                        </h2>
                                                        <div id="colour-page-content-flush-collapse" class="accordion-collapse collapse"
                                                            data-bs-parent="#colourpagecontentaccordionFlush">
                                                            <div class="accordion-body">
                                                                @if (count($colourPageContent) > 0)
                                                                    @foreach ($colourPageContent as $key => $cpc)
                                                                        <div class="card border border-default p-3 current-page-content-card">
                                                                            <input type="hidden" name="colour_page_content_id[]" value="{{ $cpc->id }}">
                                                                            <label for="" class="form-label">
                                                                                Page Content
                                                                            </label>
                                                                            <input type="text" name="section_main_heading[]" value="{{$cpc->section_main_heading}}" class="form-control" placeholder="Enter Heading Name">
                                                                            <label for="" class="form-label">
                                                                            </label>
                                                                            <textarea name="section_content[]" class="form-control editor" placeholder="Enter Content">{!! $cpc->section_content !!}</textarea>
                                                                            <label for="" class="form-label">
                                                                            </label>
                                                                            @if ($loop->first)
                                                                                <button type="button" id="add-new-content-section" class="btn btn-sm btn-warning w-25">Add New Section</button>
                                                                            @else
                                                                                <button type="button" class="btn btn-sm btn-danger w-25 mt-2 remove-current-content-section">Remove</button>
                                                                            @endif
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <div class="card border border-default p-3">
                                                                        <label for="" class="form-label">
                                                                            Heading
                                                                        </label>
                                                                        <input type="text" name="section_main_heading[]" class="form-control" placeholder="Enter Heading">
                                                                        <label for="" class="form-label">
                                                                        </label>
                                                                        <textarea name="section_content[]" class="form-control editor" placeholder="Enter Content"></textarea>
                                                                        <label for="" class="form-label">
                                                                        </label>
                                                                        <button type="button" id="add-new-content-section" class="btn btn-sm btn-warning w-25">Add New Section</button>
                                                                    </div>
                                                                @endif
                                                                <div class="page-content-card">
                                                                </div>
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
        var removeImageUrl = "";
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
    @push('scripts')
        <script>
            
        $(document).ready(function () {
            // Add a new FAQ
            $(document).on('click', '#add-new-content-section', function() {
                const faqTemplate = `
                    <div class="card border border-default p-3 current-page-content-card">
                        <label class="form-label current-faq-count">
                            Page Content
                        </label>
                        <input type="text" name="section_main_heading[]" class="form-control" placeholder="Enter Heading">
                        <label for="" class="form-label">
                        </label>
                        <textarea name="section_content[]" class="form-control mt-2 editor" placeholder="Enter Content"></textarea>
                        <button type="button" class="btn btn-sm btn-danger w-25 mt-2 remove-current-content-section">Remove</button>
                    </div>
                `;
                $('.page-content-card').append(faqTemplate);
                // Initialize CKEditor for the newly added `.editor` element
                const newEditor = $('.page-content-card .current-page-content-card:last .editor')[0];
                ClassicEditor.create(newEditor, {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                            { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                            { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                        ]
                    }
                }).catch(error => {
                    console.log(error);
                });
            });

            // Remove a FAQ and update FAQ numbers
            $(document).on('click', '.remove-current-content-section', function() {
                $(this).closest('.current-page-content-card').remove();
            });
        });
        </script>
    @endpush
</x-app-layout>
