@extends('front.master')

@section('title','Projects')

@section('projects-active','active')

@section('hero-content')
    @include('front.sub-header',['pageName' => 'Projects'])
@endsection

@section('content')
    <!-- Projects Start -->
    @livewire('front.components.projects-component')
    <!-- Projects End -->
@endsection
