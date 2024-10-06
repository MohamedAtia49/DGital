<x-update-modal title="Add New Testimonial">
    @if (session()->has('updated_message'))
        <div class="alert alert-success text-center create-alert">
            {{ session('updated_message') }}
        </div>
    @endif
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Testimonial Name" wire:model='name'/>
        @include('admin.error',['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Position</label>
        <input type="text" class="form-control" placeholder="Testimonial Position" wire:model='position'/>
        @include('admin.error',['property' => 'position'])
    </div>

    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" placeholder="Testimonial Image" wire:model='image'/>
        @include('admin.error',['property' => 'image'])
    </div>

    @if ($image)
        <div class="my-4">
            <img src="{{ $image->temporaryUrl() }}" width="100%" height="150px">
        </div>
    @endif

    <div class="col-ml-12 mb-0 mt-2">
        <label class="form-label">Description</label>
        <textarea wire:model='description'  rows="5" placeholder="Testimonial Description" class="form-control"></textarea>
        @include('admin.error',['property' => 'description'])
    </div>
</x-update-modal>
