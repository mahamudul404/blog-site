<header class="blog-post-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Laravel Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Assuming this is within your <nav> element -->
                <ul class="navbar-nav ms-auto">
                    <!-- Check if the user is logged in -->
                    @auth
                        <!-- Other nav items here -->
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item ms-auto">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Go-to-Dashboard</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index') }}">Blog</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}">Profile</a>
                        </li>

                        <!-- Logout Button -->
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                    @endauth

                    @guest
                        <!-- If the user is not authenticated -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endguest
                </ul>

        </nav>

    </div>
</header>
