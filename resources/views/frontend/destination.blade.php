@extends('frontend.layouts.main')

@section('main-container')
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(frontend/images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url(frontend/images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Destination List</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Destination Lists</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>


    <section class="trending pb-0 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">Top Destinations</h4>
                <h2 class="mb-1">Explore<span class="theme">Top Destinations</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row align-items-center">
                @if($places->count() == 0)
                <div class="col-lg-12">
                    <h3 class="text-center">No Places Found</h3>
                </div>
                @endif
                @foreach ($places as $place)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow border-0 rounded">
                        <div class="card-img-top position-relative" style="height: 220px; overflow: hidden;">
                            <img src="{{ asset('frontend/images/' . $place->imageURL) }}" alt="{{ $place->name }}" class="w-100 h-100 object-fit-cover">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-2">{{ $place->minDuration }}</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-1">{{ $place->name }}</h5>
                            <p class="text-muted mb-1"><i class="fa fa-map-marker-alt"></i> {{ $place->city }}, {{ $place->country }}</p>
                            <div class="mb-2">
                                @for ($j = 0; $j < (int) $place->rating; $j++)
                                    <span class="fa fa-star checked text-warning"></span>
                                @endfor
                                <span class="text-muted">({{ $place->rating }})</span>
                            </div>
                            <p class="card-text small">{{ Str::limit($place->description, 80) }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-success">₹{{ $place->price }}</span>
                            <div class="d-flex gap-2">
                                <a href="{{ route('tourSingle', ['id' => $place->id]) }}" class="btn btn-sm btn-outline-primary">See More</a>
                                <a href="{{ route('place.bookingForm', ['id' => $place->id]) }}" class="btn btn-sm btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="discount-action pt-0"
        style="background-image:url(frontend/images/section-bg1.png); background-position:center;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">Love Where Your're Going</h5>
                            <h2><a href="detail-fullwidth.html/index.html">Explore Your Life, <span class="theme1"> Travel
                                        Where You Want!</span></a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <div class="video-button text-center position-relative">
                            <div class="call-button text-center">
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                                    data-channel="vimeo">
                                    <a href="{{ url('/tour') }}">Explore</a>
                                </button>
                            </div>
                            <div class="video-figure"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
        <div class="white-overlay"></div>
        <div class="section-shape  top-inherit bottom-0" style="background-image: url(frontend/images/shape6.png);"></div>
    </section>
@endsection
