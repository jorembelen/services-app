
@section('title', 'Dashboard')

<div>

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
                            <a href="#" class="nav-link">
                                <i class="far fa-calendar-check"></i> <span>Booking List</span>
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
                                <i class="far fa-calendar-alt"></i> <span>Subscription</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-clock"></i> <span>Availability</span>
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
                <h4 class="widget-title">Dashboard</h4>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="#" class="dash-widget dash-bg-1">
                            <span class="dash-widget-icon">245</span>
                            <div class="dash-widget-info">
                                <span>Bookings</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" class="dash-widget dash-bg-2" wire:click.prevent="myActiveServices">
                            <span class="dash-widget-icon">{{ auth()->user()->services->count() }}</span>
                            <div class="dash-widget-info">
                                <span>Services</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" class="dash-widget dash-bg-3">
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
                                    <img class="img-fluid serv-img" alt="Service Image" src="{{ $service->defaultImage() }}">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="j#">
                                            <img src="{{ $service->provider->userAvatar() }}" alt="">
                                        </a>
                                        <span class="service-price">{{ $service->price }}</span>
                                    </div>
                                    <div class="cate-list">
                                        <a class="bg-yellow" href="{{ route('home.category-service', $service->category->slug) }}">{{ Str::limit($service->category->name, 15) }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ route('home.service_details', $service->slug) }}">{{ $service->name }} </a>
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
                                                <a href="{{ route('svp.service-update', $service->slug) }}" class="text-success"><i class="far fa-edit"></i> Edit</a>
                                            </div>
                                            <div class="col text-end">
                                                <a href="#" class="text-danger" wire:click.prevent="inactive('{{ $service->id }}')"><i class="far fa-trash-alt"></i> Inactive</a>
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
                                    <a href="#">
                                        <img class="img-fluid serv-img" alt="Service Image" src="{{ $item->defaultImage() }}">
                                    </a>
                                    <div class="item-info">
                                        <div class="service-user">
                                            <a href="#">
                                                <img src="{{ $item->provider->userAvatar() }}" alt="">
                                            </a>
                                            <span class="service-price">{{ $item->price }}</span>
                                        </div>
                                        <div class="cate-list">
                                            <a class="bg-yellow" href="{{ route('home.category-service', $item->category->slug) }}">{{ Str::limit($item->category->name, 15) }}</a>
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
                                                    <button class="btn btn-danger btn-sm" wire:click.prevent="deleteService('{{ $item->id }}')"><i class="far fa-trash-alt"></i> Delete</button>
                                                </div>
                                                <div class="col text-end">
                                                    <a href="#" wire:click.prevent="active('{{ $item->id }}')"><i class="fas fa-info-circle"></i> Active</a>
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
