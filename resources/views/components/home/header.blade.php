<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo pdt.png" alt="">
                <span class="logo-text">
                    <span>Pembangunan</span>
                    <span>Desa Tertinggal</span>
                </span>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                            <li><a href="/layouts.user.testimoni">Feedback</a></li>
                            <li><a href="#">Kemitraan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Mari Bergabung</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Volunteer</a></li>
                            <li><a href="/donasi">Donasi</a></li>
                        </ul>
                    </li>
                    <li><a href="/berita">Berita</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        @else
                            <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                                <li><a class="signup" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                    @endif
                    {{-- <li><a class="signup" href="#">Sign Up</a></li> --}}
                    {{-- <li><a class="getstarted scrollto" href="#about">Log In</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->