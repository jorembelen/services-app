<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Services | Admin</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('/admin/assets/img/favicon.png') }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/admin/assets/plugins/fontawesome/css/all.min.css') }}">

    	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/css/bootstrap-datetimepicker.min.css') }}">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/plugins/datatables/datatables.min.css') }}">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/css/animate.min.css') }}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('/admin/assets/css/admin.css') }}">

</head>

<body>
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">
			<div class="header-left">
				<a href="/" class="logo logo-small">
					<img src="{{ asset('/admin/assets/img/logo-icon.png') }}" alt="Logo" width="30" height="30">
				</a>
			</div>
			<a href="#" id="toggle_btn">
				<i class="fas fa-align-left"></i>
			</a>
			<a class="mobile_btn" id="mobile_btn" href="#">
				<i class="fas fa-align-left"></i>
			</a>

			<ul class="nav user-menu">
				<!-- Notifications -->
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<i class="far fa-bell"></i>  <span class="badge badge-pill"></span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="" src="{{ asset('/admin/assets/img/provider/provider-01.jpg') }}">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Thomas Herzberg have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">15 Sep 2020 10:20 PM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="" src="{{ asset('/admin/assets/img/provider/provider-02.jpg') }}">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Matthew Garcia have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">13 Sep 2020 03:56 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="" src="{{ asset('/admin/assets/img/provider/provider-03.jpg') }}">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Yolanda Potter have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">12 Sep 2020 09:25 PM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('/admin/assets/img/provider/provider-04.jpg') }}">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Ricardo Flemings have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">11 Sep 2020 06:36 PM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('/admin/assets/img/provider/provider-05.jpg') }}">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Maritza Wasson have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">10 Sep 2020 08:42 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('/admin/assets/img/provider/provider-06.jpg') }}">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Marya Ruiz have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">9 Sep 2020 11:01 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('/admin/assets/img/provider/provider-07.jpg') }}">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Richard Hughes have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">8 Sep 2020 06:23 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="admin-notification.html">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<!-- User Menu -->
				<li class="nav-item dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-bs-toggle="dropdown">
						<span class="user-img">
							<img class="rounded-circle" src="{{ asset('/admin/assets/img/user.jpg') }}" width="40" alt="Admin">
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="admin-profile.html">Profile</a>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
					</div>
				</li>
				<!-- /User Menu -->
			</ul>
		</div>
		<!-- /Header -->

		<!-- Sidebar -->
        @include('layouts.admin.sidebar')
		<!-- /Sidebar -->

		<div class="page-wrapper">
			<div class="content container-fluid">

                @yield('content')

			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('/admin/assets/js/jquery-3.6.0.min.js') }}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{ asset('/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

	<!-- Slimscroll JS -->
	<script src="{{ asset('/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    	<!-- Datepicker Core JS -->
	<script src="{{ asset('/admin/assets/js/moment.min.js') }}"></script>
	<script src="{{ asset('/admin/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    	<!-- Datatables JS -->
	<script src="{{ asset('/admin/assets/plugins/datatables/datatables.min.js') }}"></script>

	<!-- Custom JS -->
	<script src="{{ asset('/admin/assets/js/admin.js') }}"></script>

</body>


</html>
