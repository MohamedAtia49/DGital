<!-- Newsletter Start -->
<form wire:submit.prevent='submit'>
    <input wire:model='email' class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
    <div class="mt-3">
        @error('email')
            <span class="text-danger bg-white">{{ $message }}</span>
        @enderror
        @if(session()->has('subscribed_message'))
            <div class="alert alert-light text-primary subscribe-alert">
                {{ session('subscribed_message') }}
            </div>
        @endif
    </div>
    <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
</form>
<!-- Newsletter End -->
