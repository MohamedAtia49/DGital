@extends('admin.master')

@section('title','Services')

@section('services-active','active')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Services</h4>
            <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal" data-bs-target="#createModal">
                New Service
            </button>
            @livewire('admin.services.services-create')
            @livewire('admin.services.services-update')
            @livewire('admin.services.services-delete')
            @livewire('admin.services.services-show')
        </div>
        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.services.services-data')
            </div>
        </div>
    </div>
    <!-- /Content -->
@endsection
