@extends('admin.master')

@section('title','Testimonial')

@section('testimonials-active','active')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Testimonials</h4>
            <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal" data-bs-target="#createModal">
                New Testimonial
            </button>
            @livewire('admin.testimonials.testimonials-create')
            @livewire('admin.testimonials.testimonials-update')
            @livewire('admin.testimonials.testimonials-delete')
        </div>
        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.testimonials.testimonials-data')
            </div>
        </div>
    </div>
    <!-- /Content -->
@endsection
