@extends('front.layout.app')
@section('content')
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <img class="flex-shrink-0 img-fluid rounded" src="{{asset($service->icon)}}" alt="" style="width: 80px;">
                        <h5>{{$service->name}}</h5>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
<!-- Service End -->
@endsection
