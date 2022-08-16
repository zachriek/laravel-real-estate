<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="bi bi-geo-alt-fill" style="color: var(--primary-color);"></i>
            <span class="ml-2">Real Estate</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="bi bi-distribute-vertical"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ml-md-auto">
                <a class="nav-link {{ Route::current()->getName() === 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">Home</a>
                <a class="nav-link {{ Route::current()->getName() === 'properties' ? 'active' : '' }}"
                    href="#">Properties</a>
                @auth
                    <a class="nav-link {{ Route::current()->getName() === 'cart' ? 'active' : '' }}" href="#">
                        <i class="bi bi-cart"></i>
                        <span class="mx-1">Cart</span>
                        <span class="badge badge-pill badge-primary">2</span>
                    </a>
                    <a class="btn btn-primary shadow-sm mt-3 mt-md-0 ml-md-5" href="#">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn nav-link">Logout</button>
                    </form>
                @else
                    <a class="nav-link ml-md-5" href="{{ route('login.index') }}">Login</a>
                    <a class="btn btn-primary shadow-sm mt-3 mt-md-0" href="{{ route('register.index') }}">Sign
                        Up</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
