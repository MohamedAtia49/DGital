<x-show-modal title="Message Show">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <div disabled class="form-control">{{ $name }} </div>
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Email</label>
        <div disabled class="form-control">{{ $email }} </div>
    </div>
    <div class="col-ml-12 mb-0 mt-2">
        <label class="form-label">Subject</label>
        <textarea disabled rows="5" class="form-control">{{ $subject }}</textarea>
    </div>
    <div class="col-ml-12 mb-0 mt-2">
        <label class="form-label">Message</label>
        <textarea disabled rows="5" class="form-control">{{ $message }}</textarea>
    </div>
</x-show-modal>
