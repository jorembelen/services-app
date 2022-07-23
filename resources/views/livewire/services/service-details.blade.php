@section('title', 'Service Details')
<div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-view">
                        <div class="service-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1>{{ $service->name }}</h1>
                                <div class="fav-btn fav-btn-big">
                                    <a href="#" class="fav-icon with-border">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <address class="service-location"><i class="fas fa-location-arrow"></i> Hanover, Maryland</address>
                            {{-- <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-rating">(5)</span>
                            </div> --}}
                            <div class="service-cate">
                                <a href="{{ route('home.category-service', $service->category->slug) }}">{{ $service->category->name }}</a>
                            </div>
                        </div>
                        <div class="service-images service-carousel">
                            <div class="images-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <img src="/assets/img/services/service-2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="item">
                                    <img src="/assets/img/services/service-2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="item">
                                    <img src="/assets/img/services/service-2.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="service-details">
                            <ul class="nav nav-pills service-tabs" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Services Offered</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-book-tab" data-toggle="pill" href="#pills-book" role="tab" aria-controls="pills-book" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="card service-description">
                                        <div class="card-body ">
                                            <h5 class="card-title">Service Details</h5>
                                            <p class="mb- ">
                                                {{ $service->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Services Offered</h5>
                                            <div class="service-offer">
                                                <ul class="list-bullet">
                                                    <li>Lorem Ipsum</li>
                                                    <li>Lorem Ipsum</li>
                                                    <li>Lorem Ipsum</li>
                                                    <li>Lorem Ipsum</li>
                                                    <li>Lorem Ipsum</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-book" role="tabpanel" aria-labelledby="pills-book-tab">
                                    <div class="card review-box">
                                        <div class="card-body">
                                            <div class="review-list">
                                                <div class="review-img">
                                                    <img class="rounded-circle" src="/assets/img/customer/user-1.jpg" alt="">
                                                </div>
                                                <div class="review-info">
                                                    <h5>Jeffrey Akridge</h5>
                                                    <div class="review-date">August 06, 2020 20:07 pm</div>
                                                    <p class="mb-">Good Work</p>
                                                </div>
                                                <div class="review-count">
                                                    <div class="rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span class="d-inline-block average-rating">(5.0)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title">Related Services</h4>
                    <div class="service-carousel">
                        <div class="popular-slider owl-carousel owl-theme">

                            @foreach ($r_services as $r_service)
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="{{ route('home.service_details', $r_service->slug) }}">
                                            <img class="img-fluid serv-img" alt="Service Image" src="{{ asset('/assets/img/services/' .$r_service->image) }}">
                                        </a>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="#">
                                                    @php
                                                    $no = [1,2,3,4,5,6,7,8,9,10];
                                                    $avatar = 'user-' .Arr::random($no) .'.jpg';
                                                    @endphp
                                                    <img src="{{ asset('assets/img/customer/' .$avatar) }}" alt="">
                                                </a>
                                                <span class="service-price">{{ $r_service->price }}</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="{{ route('home.category-service', $r_service->category->slug) }}">{{ $r_service->category->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="#">{{ $r_service->name }}</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(4.5)</span>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i> <span>xxxxxxxx30</span></span>
                                                <span class="col ser-location"><span>Kalispell, Montana</span>  <i class="fas fa-map-marker-alt ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="sidebar-widget widget">
                        <div class="service-amount">
                            <span>{{ $service->price }}</span>
                        </div>
                        <div class="service-book">
                            <a href="book-service.html" class="btn btn-primary"> Book Service </a>
                        </div>
                    </div>
                    <div class="card provider-widget clearfix">
                        <div class="card-body">
                            <h5 class="card-title">Service Provider</h5>
                            <div class="about-author">
                                <div class="about-provider-img">
                                    <div class="provider-img-wrap">
                                        <a href="#;">
                                            <img class="img-fluid rounded-circle" alt="" src="/assets/img/provider/provider-01.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="provider-details">
                                    <a href="#;" class="ser-provider-name">{{ $service->provider->userFullName() }}</a>
                                    <p class="last-seen"><i class="fas fa-circle online"></i> Online</p>
                                    <p class="text-muted mb-1">Member Since {{ $service->provider->userMembership() }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="provider-info">
                                <p class="mb-1"><i class="far fa-envelope"></i> <a href="#"><span class="__cf_email__" data-cfemail="7105191e1c10021914030b13140316311409101c011d145f121e1c">[email&#160;protected]</span></a></p>
                                <p class="mb-"><i class="fas fa-phone-alt"></i> xxxxxxxx33</p>
                            </div>
                        </div>
                    </div>
                    <div class="card available-widget">
                        <div class="card-body">
                            <h5 class="card-title">Service Availability</h5>
                            <ul>
                                <li><span>Monday</span>9:30 AM - 7:00 PM</li>
                                <li><span>Tuesday</span>9:30 AM - 7:00 PM</li>
                                <li><span>Wednesday</span>9:30 AM - 7:00 PM</li>
                                <li><span>Thursday</span>9:30 AM - 7:00 PM</li>
                                <li><span>Friday</span>9:30 AM - 7:00 PM</li>
                                <li><span>Saturday</span>9:30 AM - 7:00 PM</li>
                                <li><span>Sunday</span>9:30 AM - 7:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>﻿

</div>
