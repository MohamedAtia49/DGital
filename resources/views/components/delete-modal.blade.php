<!-- Modal -->
<form wire:submit.prevent='submit'>
    @if (session()->has('deleted_message'))
        <div class="alert alert-danger text-center create-alert">
            {{ session('deleted_message') }}
        </div>
    @endif
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ $title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this record ?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
            </button>
            <button type="submit" class="btn btn-danger">
                @include('admin.loading',['buttonName' => 'Delete'])
            </button>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- /Modal -->
