<x-create-modal title="Add New Counter">
    <div class="col-md-12 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Counter Name" wire:model='name'/>
        @include('admin.error',['property' => 'name'])
    </div>
</x-create-modal>
