<nav id="menu1" class="bar bar-1 hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-2 hidden-xs">
                <div class="bar__module">
                    <a href="/" class="logo logo-dark text-dark d-flex justify-content-lg-start" style="text-decoration: none; font-size: x-large; color:dimgray; font-weight:600;">
                        <img src="img/logo-bmkg.png" height="30px" class="mr-2"><span style="font-weight:700;">Meteo</span>Baubau
                    </a>
                </div>
            </div>
            <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                <div class="bar__module">
                    <ul class="menu-horizontal text-left">
                        <li> <a href="/">
                                Home</a> </li>
                        <li class="dropdown"> <span class="dropdown__trigger">
                                Profil</span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="dropdown__content col-lg-2">
                                            <ul class="menu-vertical">
                                                <li> <a href="#">Tentang Stasiun</a> </li>
                                                <li> <a href="#">Visi dan Misi</a> </li>
                                                <li> <a href="#">Tugas dan Fungsi</a> </li>
                                                <li> <a href="#">Struktur Organisasi</a> </li>
                                                <li> <a href="#">Pegawai</a> </li>
                                                <li> <a href="#">Peralatan</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown"> <span class="dropdown__trigger">
                                Informasi</span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="dropdown__content col-lg-2">
                                            <ul class="menu-vertical">
                                                <li> <a href="#">Citra Satelit</a> </li>
                                                <li>
                                                    <a href="#"> </a>
                                                </li>
                                                <li> <a href="#">Citra Sebaran Asap</a> </li>
                                                <li> <a href="#">Potensi Hujan</a> </li>
                                                <li> <a href="#">Pot. Kebakaran Hutan</a> </li>
                                                <li> <a href="#">Peta Cuaca</a> </li>
                                                <li> <a href="#">Peta Gelombang</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li> <a href="#">
                                Pelayanan</a> </li>
                        <li> <a href="#">
                                Publikasi</a> </li>
                        <li> <a href="#">
                                kontak kami</a> </li>
                    </ul>
                </div>
                @auth
                <div class="bar__module">
                    <a class="btn btn--sm btn--danger type--uppercase" href="{{ route('logout') }}" onclick=" event.preventDefault(); document.getElementById('logout-form').submit();"> <span class=" btn__text">
                            logout</span> </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @else
                <div class="bar__module">
                    <a class="btn btn--sm btn--primary type--uppercase" href="/login"> <span class="btn__text">
                            login</span> </a>
                </div>
                @endauth
            </div>
        </div>
    </div>
</nav>