<form wire:submit.prevent='submit'>
        @if(session()->has('message_sent'))
            <div class="alert alert-success text-center subscribe-alert">
                {{ session('message_sent') }}
            </div>
        @endif
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input wire:model='name' type="text" class="form-control" placeholder="Your Name">
                <label for="name">Your Name</label>
            </div>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input wire:model='email' type="email" class="form-control" placeholder="Your Email">
                <label for="email">Your Email</label>
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input wire:model='subject' type="text" class="form-control" placeholder="Subject">
                <label for="subject">Subject</label>
            </div>
            @error('subject')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea  wire:model='message'class="form-control" placeholder="Leave a message here" style="height: 150px"></textarea>
                <label for="message">Message</label>
            </div>
            @error('message')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit" wire:loading.attr='disabled'>
                <span wire:loading.remove>
                    Send Message
                </span>
            </button>
        </div>
        <div class="text-center" wire:loading wire:target='submit'>
            <span class="spinner-border spinner-border-sm text-white" role="status">
                <span class="visually-hidden">Loading...</span>
            </span>
        </div>
    </div>
</form>
