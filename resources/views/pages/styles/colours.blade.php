<x-app-layout>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{$style->name}} Colours</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{$style->name}} Colours</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="card-title">{{$style->name}} Colours</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($styleHasColours))
                                    @foreach ($styleHasColours as $styleHasColour)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ $styleHasColour->image_path ? asset('imgs/styles/colours/' . $styleHasColour->image_path) : '#' }}"
                                                class="{{ $styleHasColour->image_path ? 'd-inline-block' : 'd-none' }}" target="_blank" rel="noopener noreferrer">
                                                <img src="{{ $styleHasColour->image_path ? asset('imgs/styles/colours/' . $styleHasColour->image_path) : '#' }}"
                                                    alt="Image Preview" width="100" class="img-thumbnail box-image-preview {{ $styleHasColour->image_path ? 'd-block' : 'd-none' }}" />
                                            </a>
                                        </td>
                                        <td class="align-middle">{{ $styleHasColour->colour?->trade_colour }}</td>
                                        <td class="align-middle">
                                            {!! $styleHasColour->status == 1
                                                ? '<span class="badge bg-primary">Active</span>'
                                                : '<span class="badge bg-danger">In Active</span>' !!}
                                        </td>
                                        <td class="align-middle" align="center">
                                            <div class="d-flex flex-row gap-2">
                                                <!-- Upload Image Button -->
                                                <a class="btn btn-soft-info btn-sm d-inline-block upload-image-button" data-bs-toggle="modal" data-bs-target="#upload-image" title="Upload Image" data-id="{{ $styleHasColour->id }}" data-style-id="{{ $styleHasColour->style_id }}" data-style-name="{{ $styleHasColour->colour?->trade_colour }}" data-colour-id="{{ $styleHasColour->colour_id }}">
                                                    <i class="las la-pen fs-17 align-middle"></i>
                                                </a>
                                                <!-- Set Status Button -->
                                                <a class="btn btn-soft-primary btn-sm d-inline-block edit-button"
                                                    href="{{ route('style.colour.setStatus', [$styleHasColour->style_id, $styleHasColour->colour_id]) }}" title="Set Status">
                                                    <i class="las la-lock fs-17 align-middle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="upload-image" tabindex="-1" role="dialog" aria-labelledby="upload-imageTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="upload-imageTitle">
                        <span id="modal-style-name"></span>
                    </h5>
                    <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('style.colour.upload_image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="file" name="image_path" class="form-control">
                        <input type="hidden" name="style_id" id="modal-style-id">
                        <input type="hidden" name="colour_id" id="modal-colour-id">
                        <input type="hidden" name="style_colour_id" id="modal-style-colour-id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function() {

            $('.upload-image-button').on('click', function () {
                // Get the data attributes from the clicked button
                const styleName = $(this).data('style-name');
                const styleId = $(this).data('style-id');
                const colourId = $(this).data('colour-id');
                const id = $(this).data('id');

                // Update modal content
                $('#modal-style-name').text(styleName);
                $('#modal-style-id').val(styleId);
                $('#modal-colour-id').val(colourId);
                $('#modal-style-colour-id').val(id);
            });

            $(document).on('click', '#save-changes', function () {
                $(this).prop('disabled', true);
                $('#colour-image-form').submit();
            });

        });
    </script>
    @endpush
</x-app-layout>
