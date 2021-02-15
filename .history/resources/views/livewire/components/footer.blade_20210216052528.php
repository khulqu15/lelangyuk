<div>
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="p-5 mx-5 my-4">
                    <img src="{{ asset('img/logo.png') }}" width="60px" class="mb-2" alt="Logo">
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quisquam nemo perferendis optio consequatur!</p>
                    <div class="input-email-footer mt-4">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" class="form-control border-0 px-3" placeholder="Your Email Here">
                            </div>
                            <div class="col-3 text-center">
                                <button class="btn btnm-primary py-3 px-4"><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-right bgm-primary px-0 position-relative">
                <div class="p-5 mx-5 my-3">
                    <div class="px-5">
                        <h1 onclick="window.location = '{{ route('home') }}'"
                        class="{{ Request::is('/') ? 'active' : '' }} menu-footer my-3 d-block viga position-relative">
                            <span class="menu-title">Beranda</span>
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                        </h1>
                        <h1 onclick="window.location = '{{ route('products') }}'"
                        class="{{ Request::is('products') ? 'active' : '' }} menu-footer my-3 d-block viga position-relative">
                            <span class="menu-title">Produk</span>
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                        </h1>
                        <h1 class="menu-footer my-3 d-block viga position-relative">
                            <span class="menu-title">Kontak</span>
                            <span class="icon">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-5 py-5 text-center">
                <div class="icons-footer">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
            <div class="col-md-7 py-5 text-center">
                <p class="text-gray">@ 2021 Developed by Valennaura</p>
            </div>
        </div>
    </div>
</div>
