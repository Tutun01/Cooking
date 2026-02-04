<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand d-flex align-items-center" href="/welcome">
            <img src="{{ asset('img/logo.png')  }}" alt="Luxury Chef" class="navbar-logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="/welcome">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/menu">Menu</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a href="/reservation" class="nav-link">
                            Reservations
                        </a>
                    </li>

                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" class="logoutForm">
                            @csrf
                            <button type="submit" class="logoutBtn">
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Register</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
