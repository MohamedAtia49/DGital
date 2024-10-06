<x-update-modal title="Edit Skill">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Skill Name" wire:model='name'/>
        @include('admin.error',['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Progress</label>
        <input type="number" class="form-control" placeholder="Skill Progress" wire:model='progress' min="1" max="100"/>
        @include('admin.error',['property' => 'progress'])
    </div>
</x-update-modal>
