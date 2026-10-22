<nav class="navbar navbar-expand-lg navbar-hw" id="mainNav">
    <div class="container">
        <a class="hw-logo" href="#home">
            {{-- <span class="hw-logo-mark"><i class="bi bi-heart-fill"></i></span>
            Hope<span class="dot">well</span> --}}
            <img width="50" height="50" src="{{ asset('/assets-landing/images/Logo.png') }}" alt="">
            <span class="dot">RUMAH TEMPE BATREM JAYA</span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
            aria-label="Toggle navigation">
            <i class="bi bi-list fs-2"></i>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav nav-hw mx-auto mt-3 mt-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/product') }}">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Kontak</a></li>
            </ul>
            {{-- <a href="#causes" class="btn-hw-primary d-none d-lg-inline-flex">Donate Now <i
                    class="bi bi-arrow-right"></i></a> --}}
        </div>
    </div>
</nav>
