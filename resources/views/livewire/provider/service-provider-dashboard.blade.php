
@section('title', 'Dashboard')

<div>

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <div class="mb-4">
                    <div class="d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                        <img alt="profile image" src="assets/img/provider/provider-01.jpg" class="avatar-lg rounded-circle">
                        <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                            <h6 class="mb-0">{{ auth()->user()->userFullName() }}</h6>
                            <p class="text-muted mb-0">Member Since Apr 2020</p>
                        </div>
                    </div>
                </div>
                <div class="widget settings-menu">
                    <ul>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ $showDashboard ? 'active' : null }}" wire:click.prevent="dashboard">
                                <i class="fas fa-chart-line"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ $showActiveServices ? 'active' : null }}" wire:click.prevent="myActiveServices">
                                <i class="far fa-address-book"></i> <span>My Services</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="provider-bookings.html" class="nav-link">
                                <i class="far fa-calendar-check"></i> <span>Booking List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="provider-settings.html" class="nav-link">
                                <i class="far fa-user"></i> <span>Profile Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="provider-wallet.html" class="nav-link">
                                <i class="far fa-money-bill-alt"></i> <span>Wallet</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="provider-subscription.html" class="nav-link">
                                <i class="far fa-calendar-alt"></i> <span>Subscription</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="provider-availability.html" class="nav-link">
                                <i class="far fa-clock"></i> <span>Availability</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="provider-reviews.html" class="nav-link">
                                <i class="far fa-star"></i> <span>Reviews</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="provider-payment.html" class="nav-link">
                                <i class="fas fa-hashtag"></i> <span>Payment</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            @if ($showDashboard)
            <div class="col-xl-9 col-md-8">
                <h4 class="widget-title">Dashboard</h4>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="provider-bookings.html" class="dash-widget dash-bg-1">
                            <span class="dash-widget-icon">245</span>
                            <div class="dash-widget-info">
                                <span>Bookings</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="my-services.html" class="dash-widget dash-bg-2">
                            <span class="dash-widget-icon">{{ auth()->user()->services->count() }}</span>
                            <div class="dash-widget-info">
                                <span>Services</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="notifications.html" class="dash-widget dash-bg-3">
                            <span class="dash-widget-icon">8</span>
                            <div class="dash-widget-info">
                                <span>Notification</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            @endif

            @if ($showActiveServices)
            <div class="col-xl-9 col-md-8">
                <h4 class="widget-title">My Services</h4>
                <ul class="nav nav-tabs menu-tabs">
                    <li class="nav-item {{ $showActiveServices ? 'active' : null }}">
                        <a class="nav-link " href="#" wire:click.prevent="myActiveServices">Active Services</a>
                    </li>
                    <li class="nav-item {{ $showInactiveServices ? 'active' : null }}">
                        <a class="nav-link " href="#" wire:click.prevent="myInactiveServices">Inactive Services</a>
                    </li>
                </ul>
                <div class="row">

                    @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="service-widget flex-fill">
                            <div class="service-img">
                                <a href="{{ route('home.service_details', $service->slug) }}">
                                    <img class="img-fluid serv-img" alt="Service Image" src="{{ asset('assets/img/services/' .$service->image) }}">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="javascript:void(0);">
                                            <img src="assets/img/provider/provider-01.jpg" alt="">
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
                                    <i class="fas fa-star filled"></i>
                                    <span class="d-inline-block average-rating">(4.3)</span>
                                </div>
                                <div class="user-info">
                                    <div class="service-action">
                                        <div class="row">
                                            <div class="col">
                                                <a href="edit-service.html" class="text-success"><i class="far fa-edit"></i> Edit</a>
                                            </div>
                                            <div class="col text-end">
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="modal" data-target="#deleteNotConfirmModal"><i class="far fa-trash-alt"></i> Inactive</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $services->links() }}
                </div>
            </div>
            @endif

            @if ($showInactiveServices)
            <div class="col-xl-9 col-md-8">
                <h4 class="widget-title">My Services</h4>
                <ul class="nav nav-tabs menu-tabs">
                    <li class="nav-item {{ $showActiveServices ? 'active' : null }}">
                        <a class="nav-link " href="#" wire:click.prevent="myActiveServices">Active Services</a>
                    </li>
                    <li class="nav-item {{ $showInactiveServices ? 'active' : null }}">
                        <a class="nav-link " href="#" wire:click.prevent="myInactiveServices">Inactive Services</a>
                    </li>
                </ul>
                <div class="row">
                    @foreach ($inactive_services as $item)
                        <div class="col-lg-4 col-md-6 inactive-service">
                            <div class="service-widget">
                                <div class="service-img">
                                    <a href="service-details.html">
                                        <img class="img-fluid serv-img" alt="Service Image" src="{{ asset('assets/img/services/' .$item->image) }}">
                                    </a>
                                    <div class="item-info">
                                        <div class="service-user">
                                            <a href="javascript:void(0);">
                                                <img src="assets/img/provider/provider-01.jpg" alt="">
                                            </a>
                                            <span class="service-price">{{ $item->price }}</span>
                                        </div>
                                        <div class="cate-list">
                                            <a class="bg-yellow" href="{{ route('home.category-service', $item->category->slug) }}">{{ $item->category->name }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ route('home.service_details', $item->slug) }}">{{ $item->name }}</a>
                                    </h3>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(3)</span>
                                    </div>
                                    <div class="user-info">
                                        <div class="service-action">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="javascript:void(0)" class="si-delete-inactive-service text-danger" data-id="149"><i class="far fa-trash-alt"></i> Delete</a>
                                                </div>
                                                <div class="col text-end">
                                                    <a href="javascript:void(0)" class="si-delete-active-service text-success" data-id="149"><i class="fas fa-info-circle"></i> Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </div>

</div>
