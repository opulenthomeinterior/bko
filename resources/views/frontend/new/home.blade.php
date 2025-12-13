@extends('layouts.guest2')

@section('title', 'Kitchen Design Services in London | Buy Kitchen Online')

@section('meta_description', 'Buy Kitchen Online is here with Affordable & Custom kitchen units in London with all Kitchen Styles & Kitchen Components. Book Consultation Now.')

@section('content')
    {{-- Hero Slider (includes consultation form) --}}
    @include('components.hero-slider')

    {{-- Order Kitchen / Order Components Carousel Section --}}
    @include('components.order-kitchen-components-carousel')

    {{-- Why BKO Beats Other Stores / Join the Smart League Section --}}
    @include('components.smart-league-section')

    {{-- Testimonials Section --}}
    @include('components.testimonials-section')

    {{-- FAQs Section --}}
    @include('components.faqs-section')

@endsection
