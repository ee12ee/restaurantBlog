@extends('front.layout.app')
@section('content')

<!-- Menu Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                @foreach($meals as $meal)
                <li class="nav-item">
{{--                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">--}}
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">The Meal is</small>
                            <a href="{{route('dishes',$meal->id)}}"> {{ $meal->name }}</a>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- Menu End -->

@endsection
