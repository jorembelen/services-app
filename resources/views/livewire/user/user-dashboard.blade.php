@section('title', 'Dashboard')

<div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4">
                    <div class="mb-4">
                        <div class="d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                            <img alt="profile image" src="{{ auth()->user()->userAvatar() }}" class="avatar-lg rounded-circle">
                            <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                                <h6 class="mb-0">{{ auth()->user()->userFullName() }}</h6>
                                <p class="text-muted mb-0">Member Since {{ auth()->user()->created_at->format('M Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="widget settings-menu">
                        <ul role="tablist" class="nav nav-tabs">
                            <li class="nav-item {{ $showDashboard ? 'current' : null }}">
                                <a href="#" class="nav-link {{ $showDashboard ? 'active' : null }}" wire:click.prevent="filteredDashboard('dashboard')">
                                    <i class="fas fa-chart-line"></i> <span>User Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item {{ $showFavorites ? 'current' : null }}">
                                <a href="#" class="nav-link {{ $showFavorites ? 'active' : null }}" wire:click.prevent="filteredDashboard('favorites')">
                                    <i class="fas fa-heart"></i> <span>Favourites</span>
                                </a>
                            </li>
                            <li class="nav-item current">
                                <a href="#" class="nav-link">
                                    <i class="far fa-calendar-check"></i> <span>My Bookings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-user"></i> <span>Profile Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-money-bill-alt"></i> <span>Wallet</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-star"></i> <span>Reviews</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-hashtag"></i> <span>Payment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @if ($showDashboard)
                    <div class="col-xl-9 col-md-8">
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="#" class="dash-widget dash-bg-1">
                                    <span class="dash-widget-icon">0</span>
                                    <div class="dash-widget-info">
                                        <span>Bookings</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="dash-widget dash-bg-2">
                                    <span class="dash-widget-icon">0</span>
                                    <div class="dash-widget-info">
                                        <span>Reviews</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="dash-widget dash-bg-3">
                                    <span class="dash-widget-icon">0</span>
                                    <div class="dash-widget-info">
                                        <span>Notification</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($showFavorites)
                    <div class="col-xl-9 col-md-8">
                        <h4 class="widget-title">My Favorites</h4>
                        <div class="row">
                            @forelse ($favorites as $favorite)
                                <div class="col-lg-4 col-md-6 d-flex">
                                    <div class="service-widget flex-fill">
                                        <div class="service-img">
                                            <a href="{{ route('home.service_details', $favorite->service->slug) }}">
                                                <img class="img-fluid serv-img" alt="Service Image" src="{{ $favorite->service->defaultImage() }}">
                                            </a>
                                            <div class="item-info">
                                                <div class="service-user">
                                                    <a href="j#">
                                                        <img src="{{ $favorite->service->provider->userAvatar() }}" alt="">
                                                    </a>
                                                    <span class="service-price">{{ $favorite->service->price }}</span>
                                                </div>
                                                <div class="cate-list">
                                                    <a class="bg-yellow" href="{{ route('home.category-service', $favorite->service->category->slug) }}">{{ Str::limit($favorite->service->category->name, 15) }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h3 class="title">
                                                <a href="{{ route('home.service_details', $favorite->service->slug) }}">{{ $favorite->service->name }} </a>
                                            </h3>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating">(4.3)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h3 class="text-center mt-4">No Favorites Available</h3>
                            @endforelse
                            <ul class="pagination mb-2">
                                <li>
                                    {{ $favorites->links() }}
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </div>﻿
</div>
