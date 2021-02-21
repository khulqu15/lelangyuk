<div>
    <div class="container-fluid px-0 py-4 bg-transparent w-100 position-fixed navbar">
        <div class="row w-100">
            <div class="col-6 px-5">
                <div class="d-inline-block cursor-point" onclick="window.location = '{{ route("home") }}'">
                    <img src="{{ asset('img/logo.png') }}" class="d-inline-block" width="46px" alt="Logo">
                    <h4 class="viga d-inline-block position-relative ml-3 d-md-inline-block d-none" style="top: 5px; left: 10px">Lelangind</h4>
                </div>
            </div>
            <div class="col-6 px-5 text-right">
                @if (Auth::check())
                <div class="avatar-sm-navbar" onclick="window.location = '{{ route("profile") }}'">
                    <div class="image">
                        <img class="image-fit-card" src="{{ Auth::user()->avatar == null ? asset('img/user/avatar.png') : asset('img/user/'.Auth::user()->avatar) }}" alt="">
                    </div>
                </div>
                @endif
                <div class="burger d-inline-block cursor-point" onclick="toggleNavbar()">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-fixed hide position-fixed">
        <div class="container pt-5 mt-5">
            <div class="row pt-5 pb-5">
                <div class="col-md-6 maxm-height text-center py-5 d-md-inline-block d-none">
                    <img src="{{ asset('img/illust/navbar.png') }}" alt="Navbar Illust" class="w-75">
                </div>
                <div class="col-md-6 maxm-height {{ Auth::check() ? 'px-md-5 py-md-2' : 'p-md-5' }} p-4 text-right">
                    <img src="{{ asset('img/illust/navbar.png') }}" alt="Navbar Illust" class="position-absolute d-md-none d-inline-block w-50" style="bottom: 17%; left: -10%">
                    <div class="px-5 position-relative">
                        <h1 onclick="window.location = '{{ route('home') }}'"
                        class="{{ Request::is('/') ? 'active' : '' }} menu-navbar my-3 d-block viga position-relative">
                            <span class="menu-title">Beranda</span>
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                        </h1>
                        <h1 onclick="window.location = '{{ route('products') }}'"
                        class="{{ Request::is('products') ? 'active' : '' }} menu-navbar my-3 d-block viga position-relative">
                            <span class="menu-title">Produk</span>
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                        </h1>
                        <h1 onclick="window.location = '{{ route('contact') }}'"
                        class="{{ Request::is('contact') ? 'active' : '' }} menu-navbar my-3 d-block viga position-relative">
                            <span class="menu-title">Kontak</span>
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                        </h1>
                        @if (Auth::check())
                        <div onclick="window.location = '{{ route('profile') }}'"
                        class="shadow-smooth cursor-point text-left d-inline-block px-5 pt-3 pb-2 card-profile-navbar position-relative" style="right: -5px">
                            <div class="avatar-sm position-relative" style="right: 10px">
                                <img src="{{ Auth::user()->avatar == null ? asset('img/user/avatar.png') : asset('img/user/'.Auth::user()->avatar) }}" class="image-fit-card" alt="{{ Auth::user()->name }}">
                            </div>
                            <div class="d-inline-block text-left">
                                <h4 class="font-weight-bold viga mb-0">{{ Auth::user()->name }}</h4>
                                <p class="text-gray mb-0 text-sm position-relative" style="top: -5px">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        @else
                        <div class="position-relative" style="right: -10px">
                            <button onclick="window.location = '{{ route('login') }}'" class="btnm-primary viga px-5">Masuk</button>
                            <button onclick="window.location = '{{ route('register') }}'" class="btnm-light viga px-5 mx-2">Daftar</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="px-0 py-3 shadow position-relative container-fluid bg-light" style="left: 0; bottom: 0">
            <div class="row px-5">
                <div class="col-md-5 py-md-3 text-center">
                    <div class="icons-footer">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
                <div class="col-md-7 py-md-3 py-2 text-center">
                    <p class="text-gray mb-0">@ 2021 Developed by Valennaura</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleNavbar() {
        $('.burger').toggleClass('times')
        if(($('.burger').hasClass('times'))) {
            $('.navbar-fixed').removeClass('hide')
            $('body').addClass('overflow-hidden')
            $('.navbar').removeClass('shadow')
        } else {
            $('body').removeClass('overflow-hidden')
            $('.navbar-fixed').addClass('hide')
        }
    }
</script>
