<x-update-modal title="Add New Project">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Project Name" wire:model='name'/>
        @include('admin.error',['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">link</label>
        <input type="url" class="form-control" placeholder="Project Link" wire:model='link'/>
        @include('admin.error',['property' => 'link'])
    </div>

    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" placeholder="Project Image" wire:model='image'/>
        @include('admin.error',['property' => 'image'])
    </div>
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Category</label>
        <select class="form-control" wire:model='category_id'>
            <option value="">Select Category</option>
            @if (count($categories) > 0)
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" wire:key="category-{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            @endif
        </select>
        @include('admin.error',['property' => 'category_id'])
    </div>

    @if ($image)
        <div class="my-4">
            <img src="{{ $image->temporaryUrl() }}" width="100%" height="150px">
        </div>
    @endif

    <div class="col-ml-12 mb-0 mt-2">
        <label class="form-label">Description</label>
        <textarea wire:model='description'  rows="5" placeholder="Project Description" class="form-control"></textarea>
        @include('admin.error',['property' => 'description'])
    </div>
</x-update-modal>
