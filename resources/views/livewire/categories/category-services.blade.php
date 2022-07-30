@section('title', 'Category Services')

<div>

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-title">
                        <h2>{{ Str::ucfirst($catName) }} Services</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <div class="content">
        <div class="container">
            <div class="catsec clearfix">
                <div class="row">
                    @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-widget">
                            <div class="service-img">
                                <a href="{{ route('home.service_details', $service->slug) }}">
                                    <img class="img-fluid serv-img" alt="Service Image" src="{{ $service->defaultImage() }}">
                                </a>
                                <div class="fav-btn">
                                    <a href="#" class="fav-icon">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="#">
                                            <img src="{{ $service->provider->userAvatar() }}" alt="">
                                        </a>
                                        <span class="service-price">{{ $service->price }}</span>
                                    </div>
                                    <div class="cate-list">
                                        <a class="bg-yellow" href="{{ route('home.category-service', $service->category->slug) }}">{{ $service->category->name }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ route('home.service_details', $service->slug) }}">{{ $service->name }}</a>
                                </h3>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(4.3)</span>
                                </div>
                                <div class="user-info">
                                    <div class="row">
                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                            <span>{{ $service->provider->mobile }}</span>
                                        </span>
                                        <span class="col ser-location">
                                            <span>{{ $service->provider->providerLocation() }}</span> <i class="fas fa-map-marker-alt ms-1"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $services->links() }}

            </div>
        </div>﻿
    </div>﻿

</div>
