@extends('admin.master')

@section('title','Members')

@section('members-active','active')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Members</h4>
            <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal" data-bs-target="#createModal">
                New Member
            </button>
            @livewire('admin.members.members-create')
            @livewire('admin.members.members-update')
            @livewire('admin.members.members-delete')
        </div>
        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.members.members-data')
            </div>
        </div>
    </div>
    <!-- /Content -->
@endsection
