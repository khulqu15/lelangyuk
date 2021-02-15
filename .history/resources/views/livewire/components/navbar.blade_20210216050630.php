<div>
    <div class="container-fluid px-0 py-4 bg-white w-100 position-fixed navbar">
        <div class="row w-100">
            <div class="col-6 px-5">
                <div class="d-inline-block cursor-point" onclick="window.location = '{{ route("home") }}'">
                    <img src="{{ asset('img/logo.png') }}" class="d-inline-block" width="46px" alt="Logo">
                    <h4 class="viga d-inline-block position-relative ml-3 d-md-inline-block d-none" style="top: 5px; left: 10px">Lelangind</h4>
                </div>
            </div>
            <div class="col-6 px-5 text-right">
                <div class="burger d-inline-block cursor-point" onclick="toggleNavbar()">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-fixed position-fixed">
        <div class="container pt-5 mt-5">
            <div class="row pt-5 pb-5">
                <div class="col-md-6 text-center py-5 d-md-inline-block d-none">
                    <img src="{{ asset('img/illust/navbar.png') }}" alt="Navbar Illust" class="w-50">
                </div>
                <div class="col-md-6 p-md-5 p-4 text-right">
                    <img src="{{ asset('img/illust/navbar.png') }}" alt="Navbar Illust" class="position-absolute d-md-none d-inline-block w-50" style="bottom: 0; left: -10%">
                    <div class="px-5 position-relative">
                        <h1 class="menu-navbar my-3 d-block viga position-relative">
                            <span class="menu-title">Beranda</span>
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                        </h1>
                        <h1 class="menu-navbar my-3 d-block viga position-relative">
                            <span class="menu-title">Produk</span>
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                        </h1>
                        <h1 class="menu-navbar my-3 d-block viga position-relative">
                            <span class="menu-title">Kontak</span>
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-0 py-3 shadow position-absolute container-fluid bg-light" style="left: 0; bottom: 0">
            <div class="row px-5">
                <div class="col-md-5 py-5 text-center">
                    <div class="icons-footer">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-7 py-5 text-center">
                <p class="text-gray">@ 2021 Developed by Valennaura</p>
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
