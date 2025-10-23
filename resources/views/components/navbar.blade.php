<nav class="navbar navbar-expand-lg navbar-dark bg-teal shadow-premium sticky-top">
    <div class="container">
        @php
            $navParams = request()->only('username');
        @endphp

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard', $navParams) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan', $navParams) }}">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile', $navParams) }}">Profile</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-sm rounded-pill px-3" href="{{ route('login') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
