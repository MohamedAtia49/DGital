@extends('front.master')

@section('title','Team')

@section('team-testimonial-active','active')


@section('hero-content')
    @include('front.sub-header',['pageName' => 'Team'])
@endsection

@section('content')
    <!-- Team Start -->
    @livewire('front.components.members-component')
    <!-- Team End -->
@endsection
