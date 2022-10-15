<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Real Estate <sup>z</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider {{ auth()->user()->role === 'ADMIN' ? 'my-0' : 'mt-0' }}">

    @if (auth()->user()->role === 'ADMIN')
        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Route::current()->getName() === 'admin.dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    @endif

    <!-- Heading -->
    <div class="sidebar-heading">
        Profile
    </div>

    <li class="nav-item {{ Route::current()->getName() === 'profile.edit' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Password
    </div>

    <li class="nav-item {{ Route::current()->getName() === 'password.edit' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('password.edit') }}">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Edit Password</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    @if (auth()->user()->role === 'ADMIN')
        <!-- Heading -->
        <div class="sidebar-heading">
            Residences
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item {{ str_contains(Route::current()->getName(), 'residences') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.residences.index') }}">
                <i class="fas fa-fw fa-warehouse"></i>
                <span>Residences</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    @endif

    <li class="nav-item mt-5">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Back to Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
