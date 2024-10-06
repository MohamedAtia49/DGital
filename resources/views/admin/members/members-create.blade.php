<x-create-modal title="Add New Member">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Member Name" wire:model='name'/>
        @include('admin.error',['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Position</label>
        <input type="text" class="form-control" placeholder="Member Position" wire:model='position'/>
        @include('admin.error',['property' => 'position'])
    </div>

    <div class="col-ml-12 mb-0 mt-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" placeholder="Member Image" wire:model='image'/>
        @include('admin.error',['property' => 'image'])
    </div>

    @if ($image)
        <div class="my-4">
            <img src="{{ $image->temporaryUrl() }}" width="100%" height="150px">
        </div>
    @endif

    <div class="col-md-6 mb-0">
        <label class="form-label">Facebook Link</label>
        <input type="url" class="form-control" placeholder="Facebook Link" wire:model='facebook'/>
        @include('admin.error',['property' => 'facebook'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Twitter Link</label>
        <input type="text" class="form-control" placeholder="Twitter Link" wire:model='twitter'/>
        @include('admin.error',['property' => 'twitter'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Linkedin Link</label>
        <input type="text" class="form-control" placeholder="Linkedin Link" wire:model='linkedin'/>
        @include('admin.error',['property' => 'linkedin'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Instagram Link</label>
        <input type="text" class="form-control" placeholder="Instagram Link" wire:model='instagram'/>
        @include('admin.error',['property' => 'instagram'])
    </div>


</x-create-modal>
