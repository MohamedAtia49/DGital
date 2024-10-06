<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
            <h1 class="text-center mb-5">Our Team Members</h1>
        </div>
        <div class="row g-4">
            @if (count($members) > 0)
                @foreach ($members as $member)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="{{ asset($member->image) }}" alt="">
                                <h5>{{ $member->name }}</h5>
                                <span>{{ $member->position }}</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href="{{ $member?->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href="{{ $member?->twitter }}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href="{{ $member?->instagram }}"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href="{{ $member?->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!-- Team End -->
