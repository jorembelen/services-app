<div>
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="#">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="/" class="navbar-brand logo">
                    <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                </a>
                <a href="/" class="navbar-brand logo-small">
                    <img src="{{ asset('assets/img/logo-icon.png') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="/" class="menu-logo">
                        <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="#"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu">
                        <a href="/">Home</a>
                    </li>
                    <li class="has-submenu {{ (request()->segment(1) == 'categories') ? 'active' : '' }}">
                        <a href="{{ route('home.categories') }}">Categories</a>
                    </li>
                    <li class="has-submenu {{ (request()->segment(1) == 'services') ? 'active' : '' }}">
                        <a href="{{ route('home.services') }}">Services</a>
                    </li>

                </ul>
            </div>

            <ul class="nav header-navbar-rht">
                @auth

                <ul class="nav header-navbar-rht">

                    @if (auth()->user()->role == 'SVP')
                    <li class="nav-item desc-list">
                        <a href="{{ route('svp.service-create') }}" class="nav-link header-login">
                            <i class="fas fa-plus-circle me-1"></i> <span>Post a Service</span>
                        </a>
                    </li>
                    @endif

                    <!-- Notifications -->
                    <li class="nav-item dropdown logged-item">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">1</span>
                        </a>
                        <div class="dropdown-menu notify-blk dropdown-menu-end notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti">Clear All  </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="notifications.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-01.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"> <span class="noti-title">Jeffrey Akridge has booked your service</span></p>
                                                    <p class="noti-time"><span class="notification-time">Today 10:04 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="notifications.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-02.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"> <span class="noti-title">Nancy Olson has booked your service</span></p>
                                                    <p class="noti-time"><span class="notification-time">Today 9:45 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="notifications.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-03.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"> <span class="noti-title">Ramona Kingsley has booked your service</span></p>
                                                    <p class="noti-time"><span class="notification-time">Yesterday 8:17 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="notifications.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-04.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"> <span class="noti-title">Ricardo Lung has booked your service</span></p>
                                                    <p class="noti-time"><span class="notification-time">Yesterday 6:20 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="notifications.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-05.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"> <span class="noti-title">Annette Silva has booked your service</span></p>
                                                    <p class="noti-time"><span class="notification-time">17 Sep 2020 10:04 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="notifications.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <!-- /Notifications -->

                    <!-- chat -->
                    <li class="nav-item logged-item">
                        <a href="chat.html" class="nav-link">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </a>
                    </li>
                    <!-- /chat -->

                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow logged-item">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="user-img">
                                <img class="rounded-circle" src="{{ auth()->user()->avatar }}" alt="profile_image" id="profileImage">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{ auth()->user()->avatar }}" alt="profile_image">
                                </div>
                                <div class="user-text">
                                    <h6>{{ auth()->user()->full_name }}</h6>
                                    <p class="text-muted mb-0">{{ auth()->user()->userRole() }}</p>
                                </div>
                            </div>

                            @include('layouts.includes.header')

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </li>

                </ul>


                @else
                <li class="nav-item">
                    <a class="nav-link header-login" href="#" wire:click.prevent="showLogin">Login</a>
                </li>
                @endauth

            </ul>
        </nav>
    </header>
    <!-- /Header -->

    <!-- Login Modal -->
    <div class="modal account-modal fade" id="login" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" wire:click.prevent="close">	<span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>Login <span>Truelysell</span></h3>
                    </div>

                    <form wire:submit.prevent="login">
                        <div class="form-group form-focus">
                            <label class="focus-label">Email</label>
                            <input type="email" class="form-control" placeholder="truelysell@example.com" wire:model.defer="email">
                            @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Password</label>
                            <input type="password" class="form-control" placeholder="********" wire:model.defer="password">
                            @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <div class="mb-5 rn-check-box">
                                    <input type="checkbox" class="rn-check-box-input" id="exampleCheck1" wire:model.defer="remember" value="1">
                                    <label class="rn-check-box-label" for="exampleCheck1">Remember me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <div class="mb-5 rn-check-box">
                                    <a href="{{ Route('password.request') }}" class="forgot-pass-link">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                        </div>
                        <div class="login-or">	<span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>
                        {{-- <div class="row form-row social-login">
                            <div class="col-6 d-grid"><a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f me-1"></i> Login</a>
                            </div>
                            <div class="col-6 d-grid">
                                <button type="submit" class="btn btn-google btn-block"><i class="fab fa-google me-1"></i> Login</button>
                            </div>
                        </div> --}}
                        <div class="text-center dont-have">Don’t have an account? <a href="#" wire:click.prevent="showRegProvider">Register</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Login Modal -->

    <!-- Provider Register Modal -->
    <div class="modal account-modal fade multi-step" id="regProvider" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" wire:click.prevent="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>Join as a Provider</h3>
                    </div>

                    <!-- Register Form -->
                    <form wire:submit.prevent="registerProvider">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">First Name</label>
                                    <input type="text" wire:model.defer="fname" class="form-control" placeholder="John">
                                    @error('fname')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Last Name</label>
                                    <input type="text" wire:model.defer="lname" class="form-control" placeholder="Doe">
                                    @error('lname')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Email</label>
                                    <input type="email" wire:model.defer="email" class="form-control" placeholder="johndoe@exapmle.com">
                                    @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Mobile Number</label>
                                    <input type="number" wire:model.defer="mobile" class="form-control" placeholder="09274521236">
                                    @error('mobile')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Province</label>
                                    <select class="form-control form-select" wire:model="selectedProvince">
                                        <option value="">Choose province ...</option>
                                        @foreach ($prov as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('selectedProvince')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">City / Municipality</label>
                                    <select class="form-control form-select"  wire:model="selectedCities" {{ is_null($selectedProvince) ? 'disabled' : null }}>
                                        <option value=""> Choose City/Municipality ...</option>
                                        @foreach ($cities as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('selectedCities')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Create Password</label>
                                    <input type="{{ $showPass ? 'text' : 'password' }}" wire:model.defer="password" class="form-control" placeholder="********">
                                    @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Confirm Password</label>
                                    <input type="{{ $showPass ? 'text' : 'password' }}" wire:model.defer="password_confirmation" class="form-control" placeholder="********">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="rn-check-box">
                                    <a href="#" wire:click.prevent="showPassword">{{ $showPass ? 'Hide Password' : 'Show Password' }}</a>
                                </div>
                            </div>
                        </div>



                        <div class="text-end">
                            <a class="forgot-link" href="#" wire:click.prevent="showLogin">Already have an account?</a>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                        </div>
                        <div class="text-center dont-have"><a href="#" wire:click.prevent="showRegUser">Register as User?</a></div>
                    </form>
                    <!-- /Register Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Provider Register Modal -->

    <!-- User Register Modal -->
    <div class="modal account-modal fade multi-step" id="regUser" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" wire:click.prevent="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>Join as a User</h3>
                    </div>

                    <!-- Register Form -->
                    <form wire:submit.prevent="registerUser">

                        <div class="form-group form-focus">
                            <label class="focus-label">First Name</label>
                            <input type="text" wire:model.defer="fname" class="form-control" placeholder="John">
                            @error('fname')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Last Name</label>
                            <input type="text" wire:model.defer="lname" class="form-control" placeholder="Doe">
                            @error('lname')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group form-focus">
                            <label class="focus-label">Email</label>
                            <input type="email" wire:model.defer="email" class="form-control" placeholder="johndoe@exapmle.com">
                            @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Create Password</label>
                            <input type="password" wire:model.defer="password" class="form-control" placeholder="********">
                            @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Confirm Password</label>
                            <input type="{{ $showPass ? 'text' : 'password' }}" wire:model.defer="password_confirmation" class="form-control" placeholder="********">
                        </div>
                        <div class="col-6">
                            <div class="rn-check-box">
                                <a href="#" wire:click.prevent="showPassword">{{ $showPass ? 'Hide Password' : 'Show Password' }}</a>
                            </div>
                        </div>
                        <div class="text-end">
                            <a class="forgot-link" href="#" wire:click.prevent="showLogin">Already have an account?</a>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                        </div>
                        <div class="text-center dont-have"><a href="#" wire:click.prevent="showRegProvider">Register as Provider?</a></div>
                    </form>
                    <!-- /Register Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- /User Register Modal -->

    <x-sweet-alert />

</div>


@push('home-js')
<script>
    window.addEventListener('show-form', function (event) {
        $('#login').modal('show');
    });
    window.addEventListener('show-regProvider-form', function (event) {
        $('#regProvider').modal('show');
    });
    window.addEventListener('show-regUser-form', function (event) {
        $('#regUser').modal('show');
    });
    window.addEventListener('hide-form', function (event) {
        $('#login').modal('hide');
    });
    window.addEventListener('hide-regProvider-form', function (event) {
        $('#regProvider').modal('hide');
    });
    window.addEventListener('hide-regUser-form', function (event) {
        $('#regUser').modal('hide');
    });
</script>
<script>
    $('[x-ref="bookingsLink"]').on('click', function () {
        localStorage.setItem('_x_currentTab', 'bookings')
    });
</script>
@endpush
