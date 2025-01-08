<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <section class="sidebar">
        <div class="nav-header">
            <p class="logo">SPRAYMAXX</p>
            <i class="bx bx-menu btn-menu"></i>
        </div>

        {{-- customer sidebar links --}}
        @if (Auth::check() && Auth::user()->role == 'customer')
            <ul class="nav-links">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="bx bx-home-alt-2"></i>
                        <span class="title">Home</span>
                    </a>
                    <span class="tooltip">Home</span>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-book"></i>
                        <span class="title">Booking</span>
                    </a>
                    <span class="tooltip">Booking</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-credit-card"></i>
                        <span class="title">Price List</span>
                    </a>
                    <span class="tooltip">Price List</span>
                </li>
                <li>
                    <a href="{{ url('profile') }}" class="{{ request()->is('profile.edit') ? 'active' : '' }}">
                        <i class="bx bx-cog"></i>
                        <span class="title">Settings</span>
                    </a>
                    <span class="tooltip">Settings</span>
                </li>
                <li>
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="title">Log Out</span>
                    </a>
                    <span class="tooltip">Log Out</span>
                </li>
            </ul>
        @endif

        {{-- admin sidebar links --}}
        @if (Auth::check() && Auth::user()->role == 'admin')
            <ul class="nav-links">
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="bx bx-home-alt-2"></i>
                        <span class="title">Home</span>
                    </a>
                    <span class="tooltip">Home</span>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-book"></i>
                        <span class="title">All Bookings</span>
                    </a>
                    <span class="tooltip">All Bookings</span>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-credit-card"></i>
                        <span class="title">Product</span>
                    </a>
                    <span class="tooltip">Product</span>
                </li>
                <li>
                    <a href="{{ url('profile') }}" class="{{ request()->is('profile.edit') ? 'active' : '' }}">
                        <i class="bx bx-cog"></i>
                        <span class="title">Settings</span>
                    </a>
                    <span class="tooltip">Settings</span>
                </li>
                <li>
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="title">Log Out</span>
                    </a>
                    <span class="tooltip">Log Out</span>
                </li>
            </ul>
        @endif

        {{-- login dan register link --}}
        @if (Route::has('login'))
            @auth
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>
            @else
                <ul class="nav-links">
                    <li>
                        <a href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i>
                            <span class="title">Log In</span>
                        </a>
                        <span class="tooltip">Log In</span>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">
                                <i class="fas fa-user"></i>
                                <span class="title">Register</span>
                            </a>
                            <span class="tooltip">Register</span>
                        </li>
                    @endif
                </ul>
            @endauth
        @endif

        <div class="theme-wrapper">
            <i class="bx bxs-moon theme-icon"></i>
            <p id="theme-text"></p>
            <div class="theme-btn">
                <span class="theme-ball"></span>
            </div>
        </div>
    </section>
    <section class="home">
        {{ $slot }}
    </section>

    <!-- External JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
