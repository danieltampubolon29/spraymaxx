<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPRAYMAXX</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    {{-- box icon & font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    {{-- datatables cdn --}}
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.6/datatables.min.js"></script>
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
                    <a href="{{ route('booking.create') }}">
                        <i class="bx bx-home-alt-2"></i>
                        <span class="title">Home</span>
                    </a>
                    <span class="tooltip">Home</span>
                </li>
                <li>
                    <a href="{{route('booking.index')}}">
                        <i class="fas fa-book"></i>
                        <span class="title">Booking</span>
                    </a>
                    <span class="tooltip">Booking</span>
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
                    <a href="{{route('product.index')}}">
                        <i class="bx bx-package"></i>
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
            @endauth
        @endif

        {{-- <div class="theme-wrapper">
            <i class="bx bxs-moon theme-icon"></i>
            <p id="theme-text"></p>
            <div class="theme-btn">
                <span class="theme-ball"></span>
            </div>
        </div> --}}
    </section>
    <section class="home">
        {{ $slot }}
    </section>
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true
            });
        });
    </script>
    {{-- Sidebar JavaScript --}}
    <script src="{{ asset('js/script.js') }}"></script>
    {{-- Boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
