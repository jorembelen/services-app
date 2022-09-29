
@section('title', 'Dashboard')

<div>

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <div class="mb-4">
                    <div class="d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                        <img alt="profile image" src="{{ auth()->user()->avatar }}" class="avatar-lg rounded-circle" id="profileImage">
                        <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                            <h6 class="mb-0">{{ auth()->user()->full_name }}</h6>
                            <p class="text-muted mb-0">Member Since {{ auth()->user()->created_at->format('M Y') }}</p>
                        </div>
                    </div>
                </div>
                <div class="widget settings-menu">
                    <ul>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ $currentTab === 'dashboard' ? 'active' : null }}" wire:click.prevent="filteredDashboard('dashboard')">
                                <i class="fas fa-chart-line"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ in_array($currentTab, ['activeServices', 'inactiveServices']) ? 'active' : null }}" wire:click.prevent="filteredDashboard('activeServices')">
                                <i class="far fa-address-book"></i> <span>My Services</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ $currentTab === 'bookings' ? 'active' : null }}" wire:click.prevent="filteredDashboard('bookings')">
                                <i class="far fa-calendar-check"></i> <span>Booking List</span>
                            </a>
                        </li>
                        <li class="nav-item {{ $currentTab === 'profiile' ? 'current' : null }}">
                            <a href="#" class="nav-link {{ $currentTab === 'profile' ? 'active' : null }}" wire:click.prevent="filteredDashboard('profile')">
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

            @if ($currentTab === 'dashboard')
            <div class="col-xl-9 col-md-8">
                <h4 class="widget-title">Dashboard</h4>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="#" class="dash-widget dash-bg-1">
                            <span class="dash-widget-icon">{{ auth()->user()->provider_total_bookings }}</span>
                            <div class="dash-widget-info">
                                <span>Bookings</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" class="dash-widget dash-bg-2" wire:click.prevent="filteredDashboard('activeServices')">
                            <span class="dash-widget-icon">{{ auth()->user()->services->count() }}</span>
                            <div class="dash-widget-info">
                                <span>Services</span>
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

            @if ($currentTab === 'activeServices')
            <div class="col-xl-9 col-md-8">
                <h4 class="widget-title">My Services</h4>
                <ul class="nav nav-tabs menu-tabs">
                    <li class="nav-item {{ $currentTab === 'activeServices' ? 'active' : null }}">
                        <a class="nav-link " href="#" wire:click.prevent="filteredDashboard('activeServices')">Active Services</a>
                    </li>
                    <li class="nav-item {{ $currentTab === 'inactiveServices' ? 'active' : null }}">
                        <a class="nav-link " href="#" wire:click.prevent="filteredDashboard('inactiveServices')">Inactive Services</a>
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
                                            <img src="{{ $service->provider->avatar }}" alt="">
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
                    <ul class="pagination mb-2">
                        <li>
                            {{ $services->links() }}
                        </li>
                    </ul>
                </div>
            </div>
            @endif

            @if ($currentTab === 'inactiveServices')
            <div class="col-xl-9 col-md-8">
                <h4 class="widget-title">My Services</h4>
                <ul class="nav nav-tabs menu-tabs">
                    <li class="nav-item {{ $currentTab === 'activeServices' ? 'active' : null }}">
                        <a class="nav-link " href="#" wire:click.prevent="filteredDashboard('activeServices')">Active Services</a>
                    </li>
                    <li class="nav-item {{ $currentTab === 'inactiveServices' ? 'active' : null }}">
                        <a class="nav-link " href="#" wire:click.prevent="filteredDashboard('inactiveServices')">Inactive Services</a>
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
                                                <img src="{{ $item->provider->avatar }}" alt="">
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
                    <ul class="pagination mb-2">
                        <li>
                            {{ $inactive_services->links() }}
                        </li>
                    </ul>
                </div>
            </div>
            @endif

            @if ($currentTab === 'bookings')
            <div class="col-xl-9 col-md-8">
                <div class="row align-items-center mb-4">
                    <div class="col">
                        <h4 class="widget-title mb-0">My Bookings</h4>
                    </div>
                    <div class="col-auto">
                        <div class="sort-by">
                            <select class="form-control-sm custom-select" wire:model="filter">
                                <option value="">All</option>
                                <option value="pending">Pending</option>
                                <option value="in progress">Inprogress</option>
                                <option value="rejected">Rejected</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>
                </div>

                @forelse ($bookings as $booking)
                    <div class="bookings">
                        <div class="booking-list">
                            <div class="booking-widget">
                                <a href="service-details.html" class="booking-img">
                                    <img src="{{ $booking->service->defaultImage() }}" alt="User Image">
                                </a>
                                <div class="booking-det-info">
                                    <h3>
                                        <a href="service-details.html">{{ $booking->service->name }}</a>
                                    </h3>
                                    <ul class="booking-details">
                                        <li>
                                            <span>Booking Date</span> {{ $booking->formatted_date }} <span class="badge badge-pill badge-prof bg-{{ $booking->status_badge }}">{{ $booking->status }}</span>
                                        </li>
                                        <li><span>Booking time</span> {{ $booking->formatted_time }}</li>
                                        <li><span>Amount</span> {{ $booking->formatted_price }}</li>
                                        <li><span>Location</span> {{ $booking->location }}</li>
                                        <li><span>Notes</span> {{ $booking->notes }}</li>
                                        <li>
                                            <span>Customer</span>
                                            <div class="avatar avatar-xs me-1">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="{{ $booking->user->avatar }}">
                                            </div>
                                            {{ $booking->user->full_name }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="booking-action">
                                @if (in_array($booking->status, ['pending']))
                                <a href="#" class="btn btn-sm bg-primary-light" wire:click.prevent="accept('{{ $booking->id }}')"><i class="fas fa-check-circle"></i> Accept Request</a>
                                <a href="#" class="btn btn-sm bg-danger-light" wire:click.prevent="alertConfirm('{{ $booking->id }}')"><i class="fas fa-times-circle"></i> Reject Request</a>
                                @elseif (in_array($booking->status, ['in progress']))
                                <a href="#" class="btn btn-sm bg-primary-light" wire:click.prevent="completed('{{ $booking->id }}')"><i class="fas fa-check-circle"></i> Complete Service</a>
                                @elseif (in_array($booking->status, ['cancelled']))
                                <a href="#" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> User Cancelled this Service</a>
                                @elseif (in_array($booking->status, ['rejected']))
                                <a href="#" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> You Rejected this Service</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <h3 class="text-center mt-4">No Bookings Available</h3>
                @endforelse

                    <ul class="pagination mb-2">
                       <li>{{ $bookings->links() }}</li>
                    </ul>

            </div>
            @endif

            @if ($currentTab === 'profile')
            <div class="col-xl-9 col-md-8">
                <div class="tab-content pt-0">
                    <div class="tab-pane show active" id="user_profile_settings">
                        <div class="widget">
                            <h4 class="widget-title">Profile Settings</h4>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h5 class="form-title">Basic Information</h5>
                                    </div>
                                    <div class="form-group col-xl-12">
                                        <div class="media align-items-center mb-3 d-flex" x-data="{ imagePreview: '' }">
                                            <input class="d-none"  type="file" x-ref="image" wire:model="image"
                                                x-on:change="
                                                    reader = new FileReader();
                                                    reader.onload = (event) => {
                                                        imagePreview = event.target.result;
                                                        document.getElementById('profileImage').src = `${imagePreview}`;
                                                    };
                                                    reader.readAsDataURL($refs.image.files[0]);
                                                "
                                            />
                                            <img x-on:click="$refs.image.click()" class="user-image img-circle" x-bind:src="imagePreview ? imagePreview : '{{ auth()->user()->avatar }}'" alt="">
                                            <div class="media-body">
                                                <h5 class="mb-0">{{ auth()->user()->full_name }}</h5>
                                            </div>
                                        </div>
                                            <img src="{{ asset('assets/loading.gif') }}" alt="" height="70px" wire:loading wire:target="image">
                                    </div>
                                </div>
                            <form wire:submit.prevent="updateProfile">
                                <div class="row">
                                    <div class="form-group col-xl-6">
                                        <label class="me-sm-2">First Name</label>
                                        <input class="form-control" type="text" wire:model.defer="state.fname">
                                        @error('fname')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label class="me-sm-2">Last Name</label>
                                        <input class="form-control" type="text" wire:model.defer="state.lname">
                                        @error('lname')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label class="me-sm-2">Email</label>
                                        <input class="form-control" type="email" wire:model.defer="state.email">
                                        @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label class="me-sm-2">Mobile Number</label>
                                        <input class="form-control" type="text" wire:model.defer="state.mobile">
                                        @error('mobile')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>


                                    <div class="form-group col-xl-12">
                                        <button  class="btn btn-primary ps-5 pe-5" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>

    <x-confirmation-alert />

</div>

@include('scripts.dashboard-js')
