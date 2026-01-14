<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">GEA</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active fw-semibold' : '' }}" href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('gold') ? 'active fw-semibold' : '' }}"
                            href="{{ url('/gold') }}">Gold</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dinar') ? 'active fw-semibold' : '' }}"
                            href="{{ url('/dinar') }}">Dinar</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('custom-gold') ? 'active fw-semibold' : '' }}" href="{{ url('/custom-gold') }}">
                            Custom Gold
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blog') ? 'active fw-semibold' : '' }}" href="{{ url('/blog') }}">
                            Blog
                        </a>
                    </li>
  
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about-us') ? 'active fw-semibold' : '' }}" href="{{ url('/about-us') }}">
                            About Us
                        </a>
                    </li>
            </ul>
        </div>
    </div>
</nav>