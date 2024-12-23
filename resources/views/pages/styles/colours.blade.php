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
                                                    <a href="{{ $styleHasColour->image_path ? asset('uploads/styles/colours/' . $styleHasColour->image_path) : '#' }}"
                                                        class="{{ $styleHasColour->image_path ? 'd-inline-block' : 'd-none' }}"
                                                        target="_blank" rel="noopener noreferrer">
                                                        <img src="{{ $styleHasColour->image_path ? asset('uploads/styles/colours/' . $styleHasColour->image_path) : '#' }}"
                                                            alt="Image Preview" width="100"
                                                            class="img-thumbnail box-image-preview {{ $styleHasColour->image_path ? 'd-block' : 'd-none' }}" />
                                                    </a>
                                                </td>
                                                <td class="align-middle">{{ $styleHasColour->colour?->name }}</td>
                                                <td class="align-middle">{!! $styleHasColour->status == 1 ? '<span class="badge bg-primary">Active</span>' : '<span class="badge bg-danger">In Active</span>' !!}</td>
                                                <td class="align-middle" align="center">
                                                    <div class="d-flex flex-row gap-2">
                                                        <a class="btn btn-soft-info btn-sm d-inline-block edit-button" data-bs-target="#upload-image{{$styleHasColour->id}}" data-bs-toggle="modal"
                                                            href="#" title="Upload Image">
                                                            <i class="las la-pen fs-17 align-middle"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="upload-image{{$styleHasColour->id}}" tabindex="-1" role="dialog" aria-labelledby="upload-image{{$styleHasColour->id}}Title" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{route('style.colour.upload_image')}}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="upload-image{{$styleHasColour->id}}Title">{{$styleHasColour->colour?->name}}</h5>
                                                                <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input type="file" name="image_path" class="form-control">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="hidden" name="style_id" value="{{$styleHasColour->style_id}}">
                                                                <input type="hidden" name="colour_id" value="{{$styleHasColour->colour_id}}">
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
</x-app-layout>
