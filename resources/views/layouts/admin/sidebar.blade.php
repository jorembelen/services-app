
	<div class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <a href="/">
                <img src="{{ asset('/admin/assets/img/logo-icon.png') }}" class="img-fluid" alt="">
            </a>
        </div>
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('admin.services') }}"><i class="fas fa-bullhorn"></i> <span> Services</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-layer-group"></i> <span>Categories</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-buffer"></i> <span>Sub Categories</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="far fa-calendar-check"></i> <span> Booking List</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-hashtag"></i> <span>Payments</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-star-half-alt"></i> <span>Rating Type</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-star"></i> <span>Ratings</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="far fa-calendar-alt"></i> <span>Subscriptions</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-wallet"></i> <span> Wallet</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-user-tie"></i> <span> Service Providers</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-user"></i> <span>Users</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span>
                            <span class="menu-arrow"><i class="fas fa-angle-right"></i></span>
                        </a>
                        <ul>
                            <li><a href="#">Invoices List</a></li>
                            <li><a href="#">Invoices Grid</a></li>
                            <li><a href="#add-invoice.html">Add Invoices</a></li>
                            <li><a href="#">Edit Invoices</a></li>
                            <li><a href="#">Invoices Details</a></li>
                            <li><a href="#">Invoices Settings</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-cog"></i> <span>Settings</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-cog"></i> <span> Frontend Settings</span>
                            <span class="menu-arrow"><i class="fas fa-angle-right"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="#"> <span> Header Settings</span></a>
                            </li>
                            <li>
                                <a href="#"> <span>Footer Settings</span></a>
                            </li>
                            <li>
                                <a href="#"> <span>Pages </span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
