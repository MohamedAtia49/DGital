<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            @if (count($data) > 0)
                @foreach ($data as $record)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x {{ $record->icon }} text-primary mb-4"></i>
                            <h5 class="mb-3">{{ $record->name }}</h5>
                            <p class="m-0">{{ $record->description }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!-- Feature End -->
