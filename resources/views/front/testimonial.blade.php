@extends('front.master')

@section('title','Testimonial')

@section('team-testimonial-active','active')


@section('hero-content')
    @include('front.sub-header',['pageName' => 'Testimonial'])
@endsection

@section('content')
    <!-- Testimonial Start -->
    @livewire('front.components.testimonials-component')
    <!-- Testimonial End -->
@endsection
