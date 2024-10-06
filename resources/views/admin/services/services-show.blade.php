<x-show-modal title="Service Show">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <div disabled class="form-control">{{ $name }} </div>
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <div disabled class="form-control">{{ $icon }} </div>
    </div>
    <div class="col-ml-12 mb-0 mt-2">
        <label class="form-label">Description</label>
        <textarea disabled rows="5" class="form-control">{{ $description }}</textarea>
    </div>
</x-show-modal>
