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

                    <li class="nav-item desc-list">
                        <a href="{{ route('svp.service-create') }}" class="nav-link header-login">
                            <i class="fas fa-plus-circle me-1"></i> <span>Post a Service</span>
                        </a>
                    </li>

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
                                <img class="rounded-circle" src="{{ asset('assets/img/customer/user-1.jpg') }}" alt="">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{ asset('assets/img/customer/user-1.jpg') }}" alt="">
                                </div>
                                <div class="user-text">
                                    <h6>{{ auth()->user()->userFullName() }}</h6>
                                    <p class="text-muted mb-0">{{ auth()->user()->userRole() }}</p>
                                </div>
                            </div>
                            @if (auth()->user()->role == 'ADM')
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            @elseif (auth()->user()->role == 'SVP')
                            <a class="dropdown-item" href="{{ route('svp.dashboard') }}">Dashboard</a>
                            @else
                            <a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a>
                            @endif
                            <a class="dropdown-item" href="favourites.html">Favourites</a>
                            <a class="dropdown-item" href="user-bookings.html">My Bookings</a>
                            <a class="dropdown-item" href="user-settings.html">Profile Settings</a>
                            <a class="dropdown-item" href="all-services.html">Book Services</a>
                            <a class="dropdown-item" href="chat.html">Chat</a>
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
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
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
                        <div class="row form-row social-login">
                            <div class="col-6 d-grid"><a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f me-1"></i> Login</a>
                            </div>
                            <div class="col-6 d-grid">
                                <button type="submit" class="btn btn-google btn-block"><i class="fab fa-google me-1"></i> Login</button>
                            </div>
                        </div>
                        <div class="text-center dont-have">Don’t have an account? <a href="#">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Login Modal -->

</div>


@push('home-js')
<script>
    window.addEventListener('show-form', function (event) {
        $('#login').modal('show');
    });
    window.addEventListener('hide-form', function (event) {
        $('#login').modal('hide');
    });
</script>
@endpush
