<x-update-modal title="Add New Service">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Service Name" wire:model='name'/>
        @include('admin.error',['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Service Icon" wire:model='icon'/>
        @include('admin.error',['property' => 'icon'])
    </div>
    <div class="col-ml-12 mb-0 mt-2">
        <label class="form-label">Description</label>
        <textarea wire:model='description'  rows="5" placeholder="Service Description" class="form-control"></textarea>
        @include('admin.error',['property' => 'description'])
    </div>
</x-update-modal>
