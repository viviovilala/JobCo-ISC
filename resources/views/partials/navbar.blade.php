<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="{{ url('/') }}">
                <img src="{{ asset('static/logo.svg') }}" width="110" height="32" alt="JobCo"
                    class="navbar-brand-image">
            </a>
        </h1>

        <div class="navbar-nav flex-row order-md-last">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">
                            <span class="nav-link-title">Home</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('elearning') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/elearning') }}">
                            <span class="nav-link-title">E-Learning</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('discuss') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/discuss') }}">
                            <span class="nav-link-title">Discuss Room</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('mentoring') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/mentoring') }}">
                            <span class="nav-link-title">Mentoring</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="nav-item d-none d-md-flex me-3">
                <div class="btn-list">
                    <a href="{{ route('login') }}" class="btn" rel="noreferrer">Masuk</a>
                    <a href="{{ route('register') }}" class="btn btn-primary" rel="noreferrer">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</header>