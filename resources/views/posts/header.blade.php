<header class="blog-post-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
            <div class="container-fluid">
                <!-- Centered Brand with a Professional Color Style -->
                <a class="navbar-brand mx-auto text-light fw-bold" href="#">Laravel Blog</a>

                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible Navigation for Links -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Authenticated User Links -->
                        @auth
                            @if (Auth::user()->role == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('posts.index') }}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('profile.edit') }}">Profile</a>
                            </li>
                            <!-- Logout Button -->
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endauth

                        <!-- Guest Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('register') }}">Register</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Optional CSS for Custom Styling -->
<style>
    /* Main Dark Background */
    .navbar-dark.bg-dark {
        background-color: #1c1c1e !important;
    }

    /* Custom Link Styling */
    .navbar-nav .nav-link {
        font-size: 1rem;
        padding: 0.5rem 1rem;
        color: #d1d1d6;
        transition: color 0.3s ease;
    }

    /* Hover Effect for Links */
    .navbar-nav .nav-link:hover {
        color: #7f8c8d;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
    }

    /* Brand Styling */
    .navbar-brand {
        font-size: 1.8rem;
        color: #e3e3e8;
        font-weight: 600;
        letter-spacing: 0.1em;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .navbar-brand {
            font-size: 1.5rem;
        }
    }
</style>
