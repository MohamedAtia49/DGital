@extends('admin.master')

@section('title','Counters')

@section('counters-active','active')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Counters</h4>
            <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal" data-bs-target="#createModal">
                New Counter
            </button>
            @livewire('admin.counters.counters-create')
            @livewire('admin.counters.counters-update')
            @livewire('admin.counters.counters-delete')
        </div>
        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.counters.counters-data')
            </div>
        </div>
    </div>
    <!-- /Content -->
@endsection
