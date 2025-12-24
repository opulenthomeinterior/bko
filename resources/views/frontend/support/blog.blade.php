@extends('layouts.guest2')
@section('content')
@section('styles')
<style>
    .backgroundimage {
        background-image: url("{{ asset('images/order-component.jpg') }}");
        background-size: cover;
        background-position: center center;
    }
    .quantity-group {
        width: 110px; /* controls overall size */
    }

    .quantity-input {
        padding: 2px 4px;
        font-size: 13px;
    }
</style>
@endsection
    <head>
        <title>Blogs</title>
    </head>
    {{-- Breadcrumb --}}
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-1 ltn__breadcrumb-color-white--- pt-35 pb-35 backgroundimage mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title text-white p-3 w-75" style="background-color: #000000a1">Blogs</h1>
                        <!-- <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}" class="text-white"><span class="text-dark"><i class="fas fa-home text-white"></i></span> Home</a></li>
                                <li class="text-white">Order Components</li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container-fluid px-lg-5 px-md-3 px-3 py-5" style="background-color: #f0f0f0;">
        <div class="row">
            @if ($blogs->count())
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-6 py-2">
                        <div class="card">
                            <div class="card-header p-0">
                                <!-- Use blog's image_path here -->
                                <img src="{{ asset('/imgs/blogs/' . $blog->image_path) }}" class="img-fluid" />
                            </div>
                            <div class="card-body">
                                <!-- Use blog's created_at to display date -->
                                <small>{{ $blog->created_at->format('d F Y') }}</small>
                                <h4 class="fw-bolder text-dark text-uppercase py-2">{{ $blog->title }}</h4>
                                <p>{{ $blog->subtitle }}</p>
                                <!-- Link to view the full blog -->
                                <a href="{{ route('blog.show', $blog->slug) }}"
                                    class="btn btn-sm btn-dark fw-bolder">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <h4 class="text-dark">No blog posts found.</h4>
                </div>

            @endif
        </div>
    </section>
@endsection
