@section('title', 'Dashboard')

<div>
    <div class="content">
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
                        <ul role="tablist" class="nav nav-tabs">
                            <li class="nav-item {{ $currentTab === 'dashboard' ? 'current' : null }}">
                                <a href="#" class="nav-link {{ $currentTab === 'dashboard' ? 'active' : null }}" wire:click.prevent="filteredDashboard('dashboard')">
                                    <i class="fas fa-chart-line"></i> <span>User Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item {{ $currentTab === 'favorites' ? 'current' : null }}">
                                <a href="#" class="nav-link {{ $currentTab === 'favorites' ? 'active' : null }}" wire:click.prevent="filteredDashboard('favorites')">
                                    <i class="fas fa-heart"></i> <span>Favorites</span>
                                </a>
                            </li>
                            <li class="nav-item {{ $currentTab === 'bookings' ? 'current' : null }}">
                                <a href="#" class="nav-link {{ $currentTab === 'bookings' ? 'active' : null }}" wire:click.prevent="filteredDashboard('bookings')">
                                    <i class="far fa-calendar-check"></i> <span>My Bookings</span>
                                </a>
                            </li>
                            <li class="nav-item {{ $currentTab === 'profiile' ? 'current' : null }}">
                                <a href="#" class="nav-link {{ $currentTab === 'profile' ? 'active' : null }}" wire:click.prevent="filteredDashboard('profile')">
                                    <i class="far fa-user"></i> <span>Profile Settings</span>
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
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#" class="dash-widget dash-bg-1">
                                <span class="dash-widget-icon">{{ auth()->user()->user_total_bookings }}</span>
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
                @if ($currentTab === 'favorites')
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
                                                <img src="{{ $favorite->service->provider->avatar }}" alt="">
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
                                <a href="{{ route('home.service_details', $booking->service->slug) }}" class="booking-img">
                                    <img src="{{ $booking->service->defaultImage() }}" alt="User Image">
                                </a>
                                <div class="booking-det-info">
                                    <h3>
                                        <a href="{{ route('home.service_details', $booking->service->slug) }}">{{ $booking->service->name }}</a>
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
                                            <span>Provider</span>
                                            <div class="avatar avatar-xs me-1">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="{{ $booking->service->provider->avatar }}">
                                            </div>
                                            {{ $booking->service->provider->full_name }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="booking-action">
                                @if (in_array($booking->status, ['pending']))
                                <a href="#" class="btn btn-sm bg-danger-light" wire:click.prevent="alertConfirm('{{ $booking->id }}')"><i class="fas fa-times-circle"></i> Cancel the Service</a>
                                @elseif (in_array($booking->status, ['completed']))
                                <a href="#" class="btn btn-sm bg-success-light" wire:click.prevent="bookAgain('{{ $booking->service_id }}')"><i class="fas fa-check-circle"></i> Book Again?</a>
                                @elseif (in_array($booking->status, ['cancelled']))
                                <a href="#" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> You Cancelled this Service</a>
                                @elseif (in_array($booking->status, ['rejected']))
                                <a href="#" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Provider Rejected this Service</a>
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

    </div>﻿

    <x-confirmation-alert />
</div>

@include('scripts.dashboard-js')
