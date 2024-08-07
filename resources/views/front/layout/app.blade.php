<!DOCTYPE html>
<html lang="en">

@include('front.layout.partials._meta')

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


   @include('front.layout.base._header')


    @yield('content')

{{--@include('front.pages.service')--}}


{{--@include('front.pages.about')--}}


{{--<!-- Menu Start -->--}}
{{--    <div class="container-xxl py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>--}}
{{--                <h1 class="mb-5">Most Popular Items</h1>--}}
{{--            </div>--}}
{{--            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">--}}
{{--                            <i class="fa fa-coffee fa-2x text-primary"></i>--}}
{{--                            <div class="ps-3">--}}
{{--                                <small class="text-body">Popular</small>--}}
{{--                                <h6 class="mt-n1 mb-0">Breakfast</h6>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">--}}
{{--                            <i class="fa fa-hamburger fa-2x text-primary"></i>--}}
{{--                            <div class="ps-3">--}}
{{--                                <small class="text-body">Special</small>--}}
{{--                                <h6 class="mt-n1 mb-0">Launch</h6>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">--}}
{{--                            <i class="fa fa-utensils fa-2x text-primary"></i>--}}
{{--                            <div class="ps-3">--}}
{{--                                <small class="text-body">Lovely</small>--}}
{{--                                <h6 class="mt-n1 mb-0">Dinner</h6>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="tab-content">--}}
{{--                    <div id="tab-1" class="tab-pane fade show p-0 active">--}}
{{--                        <div class="row g-4">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="tab-2" class="tab-pane fade show p-0">--}}
{{--                        <div class="row g-4">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div id="tab-3" class="tab-pane fade show p-0">--}}
{{--                        <div class="row g-4">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">--}}
{{--                                    <div class="w-100 d-flex flex-column text-start ps-4">--}}
{{--                                        <h5 class="d-flex justify-content-between border-bottom pb-2">--}}
{{--                                            <span>Chicken Burger</span>--}}
{{--                                            <span class="text-primary">$115</span>--}}
{{--                                        </h5>--}}
{{--                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Menu End -->--}}
{{--    <!-- Reservation Start -->--}}
{{--    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--        <div class="row g-0">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="video">--}}
{{--                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">--}}
{{--                        <span></span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 bg-dark d-flex align-items-center">--}}
{{--                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>--}}
{{--                    <h1 class="text-white mb-4">Book A Table Online</h1>--}}
{{--                    <form>--}}
{{--                        <div class="row g-3">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <input type="text" class="form-control" id="name" placeholder="Your Name">--}}
{{--                                    <label for="name">Your Name</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <input type="email" class="form-control" id="email" placeholder="Your Email">--}}
{{--                                    <label for="email">Your Email</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating date" id="date3" data-target-input="nearest">--}}
{{--                                    <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />--}}
{{--                                    <label for="datetime">Date & Time</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <select class="form-select" id="select1">--}}
{{--                                        <option value="1">People 1</option>--}}
{{--                                        <option value="2">People 2</option>--}}
{{--                                        <option value="3">People 3</option>--}}
{{--                                    </select>--}}
{{--                                    <label for="select1">No Of People</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>--}}
{{--                                    <label for="message">Special Request</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content rounded-0">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <!-- 16:9 aspect ratio -->--}}
{{--                    <div class="ratio ratio-16x9">--}}
{{--                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"--}}
{{--                                allow="autoplay"></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Reservation Start -->--}}

{{--    <!-- Team Start -->--}}
{{--    <div class="container-xxl pt-5 pb-3">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>--}}
{{--                <h1 class="mb-5">Our Master Chefs</h1>--}}
{{--            </div>--}}
{{--            <div class="row g-4">--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                    <div class="team-item text-center rounded overflow-hidden">--}}
{{--                        <div class="rounded-circle overflow-hidden m-4">--}}
{{--                            <img class="img-fluid" src="img/team-1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <h5 class="mb-0">Full Name</h5>--}}
{{--                        <small>Designation</small>--}}
{{--                        <div class="d-flex justify-content-center mt-3">--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                    <div class="team-item text-center rounded overflow-hidden">--}}
{{--                        <div class="rounded-circle overflow-hidden m-4">--}}
{{--                            <img class="img-fluid" src="img/team-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <h5 class="mb-0">Full Name</h5>--}}
{{--                        <small>Designation</small>--}}
{{--                        <div class="d-flex justify-content-center mt-3">--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                    <div class="team-item text-center rounded overflow-hidden">--}}
{{--                        <div class="rounded-circle overflow-hidden m-4">--}}
{{--                            <img class="img-fluid" src="img/team-3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <h5 class="mb-0">Full Name</h5>--}}
{{--                        <small>Designation</small>--}}
{{--                        <div class="d-flex justify-content-center mt-3">--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">--}}
{{--                    <div class="team-item text-center rounded overflow-hidden">--}}
{{--                        <div class="rounded-circle overflow-hidden m-4">--}}
{{--                            <img class="img-fluid" src="img/team-4.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <h5 class="mb-0">Full Name</h5>--}}
{{--                        <small>Designation</small>--}}
{{--                        <div class="d-flex justify-content-center mt-3">--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Team End -->--}}


{{--    <!-- Testimonial Start -->--}}
{{--    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center">--}}
{{--                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>--}}
{{--                <h1 class="mb-5">Our Clients Say!!!</h1>--}}
{{--            </div>--}}
{{--            <div class="owl-carousel testimonial-carousel">--}}
{{--                <div class="testimonial-item bg-transparent border rounded p-4">--}}
{{--                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>--}}
{{--                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">--}}
{{--                        <div class="ps-3">--}}
{{--                            <h5 class="mb-1">Client Name</h5>--}}
{{--                            <small>Profession</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-item bg-transparent border rounded p-4">--}}
{{--                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>--}}
{{--                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">--}}
{{--                        <div class="ps-3">--}}
{{--                            <h5 class="mb-1">Client Name</h5>--}}
{{--                            <small>Profession</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-item bg-transparent border rounded p-4">--}}
{{--                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>--}}
{{--                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">--}}
{{--                        <div class="ps-3">--}}
{{--                            <h5 class="mb-1">Client Name</h5>--}}
{{--                            <small>Profession</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-item bg-transparent border rounded p-4">--}}
{{--                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>--}}
{{--                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">--}}
{{--                        <div class="ps-3">--}}
{{--                            <h5 class="mb-1">Client Name</h5>--}}
{{--                            <small>Profession</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    @include('front.layout.base._footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@include('front.layout.partials._scripts')

</body>

</html>
