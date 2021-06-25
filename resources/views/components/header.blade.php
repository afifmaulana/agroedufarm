<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid" height="60" width="110" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  {{ request()->is('/*') ? 'active' : '' }}"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item {{ request()->is('tentang*') ? 'active' : '' }}"><a class="nav-link" href="/tentang">Tentang</a></li>
                    <li class="nav-item {{ request()->is('galeri*') ? 'active' : '' }}"><a class="nav-link" href="/galeri">Galeri</a></li>
                    <li class="nav-item {{ request()->is('kontak*') ? 'active' : '' }}"><a class="nav-link" href="/kontak">Kontak</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="btn btn-outline-warning mb-2" href="https://wa.me/62811972915?text=Halo,%20Apakah%20hewan%20kurbannya%20masih%20tersedia%20?"><span>Hubungi Kami</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
