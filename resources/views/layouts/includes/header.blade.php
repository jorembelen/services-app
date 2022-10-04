
    @if (auth()->user()->isAdmin())
        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
    @endif

    @if (auth()->user()->isProvider())
        <a class="dropdown-item" href="{{ route('svp.dashboard', 'dashboard') }}">Dashboard</a>
        <a class="dropdown-item" href="{{ route('svp.dashboard', 'activeServices') }}">My Services</a>
        <a class="dropdown-item" href="{{ route('svp.dashboard', 'bookings') }}">My Bookings</a>
        <a class="dropdown-item" href="{{ route('svp.dashboard', 'profile') }}">Profile Settings</a>
    @endif

    @if (auth()->user()->isUser())
        <a class="dropdown-item" href="{{ route('user.dashboard', 'dashboard') }}">Dashboard</a>
        <a class="dropdown-item" href="{{ route('user.dashboard', 'favorites') }}">Favorites</a>
        <a class="dropdown-item" href="{{ route('user.dashboard', 'bookings') }}">My Bookings</a>
        <a class="dropdown-item" href="{{ route('user.dashboard', 'req-service') }}">Request Service</a>
        <a class="dropdown-item" href="{{ route('user.dashboard', 'profile') }}">Profile Settings</a>
    @endif

